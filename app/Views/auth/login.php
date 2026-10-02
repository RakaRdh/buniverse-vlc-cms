<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Administrator — VLC CMS</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="/css/tailwind.min.css">
    <link rel="stylesheet" href="/css/vlc_cms.css">
    <script src="https://cdn.jsdelivr.net/npm/lucide@0.468.0/dist/umd/lucide.min.js"></script>
</head>
<body class="bg-slate-50 dark:bg-slate-950 font-sans antialiased min-h-screen flex items-center justify-center p-4">

<div class="w-full max-w-md">
    <!-- Brand Title -->
    <div class="text-center mb-8">
        <div class="inline-flex size-14 rounded-2xl bg-[#C41E24] items-center justify-center text-white font-bold text-2xl shadow-lg shadow-red-500/20 mb-3">
            VLC
        </div>
        <h1 class="text-2xl font-bold tracking-tight text-slate-900 dark:text-white">
            DATASATU <span class="text-[#C41E24]">VLC</span> CMS
        </h1>
        <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Vocational Learning Center Management System</p>
    </div>

    <!-- Login Card -->
    <div class="surface-card p-6 sm:p-8 shadow-xl">
        <h2 class="text-lg font-semibold text-slate-900 dark:text-white mb-1">Masuk ke Panel CMS</h2>
        <p class="text-xs text-slate-500 dark:text-slate-400 mb-6">Gunakan akun administrator yang telah terdaftar.</p>

        <!-- Flash alerts -->
        <?php if (session()->getFlashdata('error')): ?>
            <div class="mb-5 flex items-center gap-2.5 rounded-lg border border-red-500/30 bg-red-500/10 p-3 text-xs text-red-600 dark:text-red-400">
                <i data-lucide="alert-circle" class="size-4 shrink-0"></i>
                <span><?= esc(session()->getFlashdata('error')) ?></span>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('success')): ?>
            <div class="mb-5 flex items-center gap-2.5 rounded-lg border border-emerald-500/30 bg-emerald-500/10 p-3 text-xs text-emerald-600 dark:text-emerald-400">
                <i data-lucide="check-circle-2" class="size-4 shrink-0"></i>
                <span><?= esc(session()->getFlashdata('success')) ?></span>
            </div>
        <?php endif; ?>

        <form action="/login" method="POST" class="space-y-4">
            <?= csrf_field() ?>

            <div>
                <label for="email" class="block text-xs font-medium text-slate-700 dark:text-slate-300 mb-1.5">Email / Username</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-slate-400 pointer-events-none">
                        <i data-lucide="mail" class="size-4"></i>
                    </span>
                    <input type="text" id="email" name="email" value="<?= esc(old('email') ?? 'admin@datasatu.com') ?>" required
                           class="w-full pl-9 pr-3 py-2 text-sm rounded-lg border border-border bg-background focus:outline-none focus:ring-2 focus:ring-[#C41E24] focus:border-transparent transition-all"
                           placeholder="nama@datasatu.com">
                </div>
            </div>

            <div>
                <label for="password" class="block text-xs font-medium text-slate-700 dark:text-slate-300 mb-1.5">Password</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-slate-400 pointer-events-none">
                        <i data-lucide="lock" class="size-4"></i>
                    </span>
                    <input type="password" id="password" name="password" value="admin123" required
                           class="w-full pl-9 pr-3 py-2 text-sm rounded-lg border border-border bg-background focus:outline-none focus:ring-2 focus:ring-[#C41E24] focus:border-transparent transition-all"
                           placeholder="Masukkan password">
                </div>
            </div>

            <button type="submit"
                    class="w-full flex items-center justify-center gap-2 mt-6 py-2.5 px-4 rounded-lg bg-[#C41E24] hover:bg-[#8E1418] text-white text-sm font-semibold shadow-md shadow-red-500/10 transition-colors focus:ring-2 focus:ring-offset-2 focus:ring-[#C41E24]">
                <i data-lucide="log-in" class="size-4"></i>
                <span>Masuk Sekarang</span>
            </button>
        </form>

        <div class="mt-6 pt-4 border-t border-border text-center">
            <p class="text-[11px] text-slate-400">
                Default Superadmin: <code class="font-mono text-slate-600 dark:text-slate-300 bg-muted px-1.5 py-0.5 rounded">admin@datasatu.com</code> | <code class="font-mono text-slate-600 dark:text-slate-300 bg-muted px-1.5 py-0.5 rounded">admin123</code>
            </p>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        if (window.lucide) {
            lucide.createIcons();
        }
    });
</script>
</body>
</html>
