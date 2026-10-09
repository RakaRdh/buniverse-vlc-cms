<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use App\Models\DomainsModel;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;
    protected $domainsModel;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = ['text','default'];

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    // protected $session;

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);
        
        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();
        //session();
        //$this->domainsModel = new DomainsModel();
    }

    /**
     * Invalidate internal CMS/BE cache (deletes vlc_be_active, keeps vlc_be_active_backup)
     */
    protected function purgeBackendCache(): void
    {
        try {
            cache()->delete('vlc_be_active');
            cache()->delete('vlc_be_programs_active');
            cache()->delete('vlc_be_galleries_active');
            cache()->delete('vlc_be_faqs_active');
        } catch (\Throwable $e) {
            log_message('error', 'purgeBackendCache failed: ' . $e->getMessage());
        }
    }

    /**
     * Invalidate Frontend live cache via Webhook (matching IDS architecture)
     */
    protected function purgeFrontendCache(): void
    {
        $frontendUrls = [
            getenv('FRONTEND_INTERNAL_URL') ?: null,
            'http://localhost:8080/api/clear-cache',
            'http://127.0.0.1:8080/api/clear-cache',
            'http://[::1]:8080/api/clear-cache',
        ];

        foreach (array_filter($frontendUrls) as $url) {
            try {
                $client = \Config\Services::curlrequest(['timeout' => 0.8]);
                $client->get($url, ['http_errors' => false]);
                break;
            } catch (\Throwable $e) {
                // Continue next URL fallback silently
            }
        }
    }

    /**
     * Purge both Backend & Frontend caches in one call
     */
    protected function purgeAllCache(): void
    {
        $this->purgeBackendCache();
        $this->purgeFrontendCache();
    }
}

