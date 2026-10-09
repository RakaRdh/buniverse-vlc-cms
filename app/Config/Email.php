<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Email extends BaseConfig
{
    public string $fromEmail  = 'noreply@datasatu.info';
    public string $fromName   = 'Datasatu VLC (Vocational Learning Center)';
    public string $recipients = '';

    /**
     * The "user agent"
     */
    public string $userAgent = 'CodeIgniter';

    /**
     * The mail sending protocol: mail, sendmail, smtp
     */
    public string $protocol = 'smtp';

    /**
     * The server path to Sendmail.
     */
    public string $mailPath = '/usr/sbin/sendmail';

    /**
     * SMTP Server Address
     */
    public string $SMTPHost = '172.20.70.53';

    /**
     * SMTP Username
     */
    public string $SMTPUser = '';

    /**
     * SMTP Password
     */
    public string $SMTPPass = '';

    /**
     * SMTP Port
     */
    public int $SMTPPort = 25;

    /**
     * SMTP Timeout (in seconds)
     */
    public int $SMTPTimeout = 5;

    /**
     * Enable persistent SMTP connections
     */
    public bool $SMTPKeepAlive = false;

    /**
     * SMTP Encryption. Either tls or ssl
     */
    public string $SMTPCrypto = '';

    /**
     * Enable word-wrap
     */
    public bool $wordWrap = true;

    /**
     * Character count to wrap at
     */
    public int $wrapChars = 76;

    /**
     * Type of mail, either 'text' or 'html'
     */
    public string $mailType = 'html';

    /**
     * Character set (utf-8, iso-8859-1, etc.)
     */
    public string $charset = 'UTF-8';

    /**
     * Whether to validate the email address
     */
    public bool $validate = false;

    /**
     * Email Priority. 1 = highest. 5 = lowest. 3 = normal
     */
    public int $priority = 3;

    /**
     * Newline character. (Use “\r\n” to comply with RFC 822)
     */
    public string $CRLF = "\r\n";

    /**
     * Newline character. (Use “\r\n” to comply with RFC 822)
     */
    public string $newline = "\r\n";

    /**
     * Enable BCC Batch Mode.
     */
    public bool $BCCBatchMode = false;

    /**
     * Number of emails in each BCC batch
     */
    public int $BCCBatchSize = 200;

    /**
     * Enable notify message from server
     */
    public bool $DSN = false;

    public function __construct()
    {
        parent::__construct();

        if (env('SMTP_HOST')) {
            $this->protocol   = 'smtp';
            $this->SMTPHost   = (string)env('SMTP_HOST');
            $this->SMTPPort   = (int)(env('SMTP_PORT') ?: 25);
            $this->SMTPUser   = (string)(env('SMTP_USER') ?: '');
            $this->SMTPPass   = (string)(env('SMTP_PASS') ?: '');
            $this->SMTPCrypto = (string)(env('SMTP_CRYPTO') ?: '');
            $this->fromEmail  = (string)(env('SMTP_FROM') ?: 'noreply@datasatu.info');
            $this->fromName   = (string)(env('SMTP_FROM_NAME') ?: 'Datasatu VLC (Vocational Learning Center)');
        }
    }
}
