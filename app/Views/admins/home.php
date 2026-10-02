<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<h1 class="text-2xl font-semibold mb-6">Dashboard</h1>
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
    <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700">
        <h2 class="text-sm font-medium mb-2">Customers</h2>
        <p class="text-3xl font-bold">3,782</p>
        <p class="mt-1 text-xs text-green-500 font-medium">+11.01% sejak bulan lalu</p>
    </div>
    <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700">
        <h2 class="text-sm font-medium mb-2">Orders</h2>
        <p class="text-3xl font-bold">5,359</p>
        <p class="mt-1 text-xs text-red-500 font-medium">-9.05% sejak bulan lalu</p>
    </div>
    <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700">
        <h2 class="text-sm font-medium mb-2">Monthly Target</h2>
        <div class="flex items-center justify-center h-32">
            <!-- Placeholder gauge -->
            <span class="text-4xl font-bold">75.55%</span>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>