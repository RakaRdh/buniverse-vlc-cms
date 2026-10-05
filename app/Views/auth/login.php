<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Administrator — VLC CMS</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Full Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['Inter', 'sans-serif'] },
                    colors: {
                        brand: {
                            DEFAULT: '#C41E24',
                            hover: '#A8151A',
                            dark: '#8E1418',
                        },
                        accent: '#F5841F'
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/lucide@0.468.0/dist/umd/lucide.min.js"></script>
</head>
<body class="bg-gradient-to-br from-slate-100 via-slate-50 to-red-50/30 font-sans antialiased min-h-screen flex items-center justify-center p-4">

<div class="w-full max-w-md">
    <!-- Brand Title -->
    <div class="text-center mb-8">
        <img src="/img/logo-vlc.webp" alt="VLC Logo" class="h-12 w-auto mx-auto mb-3 object-contain">
        <h1 class="text-2xl font-bold tracking-tight text-slate-900">
            DATASATU <span class="text-[#C41E24]">VLC</span> CMS
        </h1>
        <p class="text-xs text-slate-500 mt-1">Vocational Learning Center Management System</p>
    </div>

    <!-- Login Card -->
    <div class="bg-white rounded-2xl border border-slate-200/80 p-6 sm:p-8 shadow-xl shadow-slate-200/50">
        <h2 class="text-lg font-bold text-slate-900 mb-1">Masuk ke Panel CMS</h2>
        <p class="text-xs text-slate-500 mb-6">Gunakan akun administrator yang telah terdaftar.</p>

        <!-- Flash alerts -->
        <?php if (session()->getFlashdata('error')): ?>
            <div class="mb-5 flex items-center gap-2.5 rounded-lg border border-red-500/30 bg-red-500/10 p-3 text-xs text-red-600">
                <i data-lucide="alert-circle" class="size-4 shrink-0"></i>
                <span><?= esc(session()->getFlashdata('error')) ?></span>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('success')): ?>
            <div class="mb-5 flex items-center gap-2.5 rounded-lg border border-emerald-500/30 bg-emerald-500/10 p-3 text-xs text-emerald-600">
                <i data-lucide="check-circle-2" class="size-4 shrink-0"></i>
                <span><?= esc(session()->getFlashdata('success')) ?></span>
            </div>
        <?php endif; ?>

        <form action="/login" method="POST" class="space-y-4">
            <?= csrf_field() ?>

            <div>
                <label for="email" class="block text-xs font-semibold text-slate-700 mb-1.5">Email / Username</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400 pointer-events-none">
                        <i data-lucide="mail" class="size-4"></i>
                    </span>
                    <input type="text" id="email" name="email" value="<?= esc(old('email') ?? 'admin@datasatu.com') ?>" required
                           class="w-full pl-10 pr-3.5 py-2.5 text-sm rounded-lg border border-slate-300 bg-white focus:outline-none focus:ring-2 focus:ring-[#C41E24] focus:border-[#C41E24] transition text-slate-800"
                           placeholder="nama@datasatu.com">
                </div>
            </div>

            <div>
                <label for="password" class="block text-xs font-semibold text-slate-700 mb-1.5">Password</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400 pointer-events-none">
                        <i data-lucide="lock" class="size-4"></i>
                    </span>
                    <input type="password" id="password" name="password" value="admin123" required
                           class="w-full pl-10 pr-10 py-2.5 text-sm rounded-lg border border-slate-300 bg-white focus:outline-none focus:ring-2 focus:ring-[#C41E24] focus:border-[#C41E24] transition text-slate-800"
                           placeholder="Masukkan password">
                    <button type="button" onclick="togglePasswordVisibility('password', this)"
                            class="absolute inset-y-0 right-0 flex items-center pr-3 text-slate-400 hover:text-slate-600 focus:outline-none"
                            title="Tampilkan / Sembunyikan Password">
                        <i data-lucide="eye" class="size-4"></i>
                    </button>
                </div>
            </div>

            <button type="submit"
                    class="w-full flex items-center justify-center gap-2 mt-6 py-3 px-4 rounded-lg bg-[#C41E24] hover:bg-[#A8151A] text-white text-sm font-bold shadow-md shadow-red-600/20 transition cursor-pointer">
                <i data-lucide="log-in" class="size-4"></i>
                <span>Masuk Sekarang</span>
            </button>
        </form>

        <div class="mt-6 pt-4 border-t border-slate-100 text-center">
            <p class="text-[11px] text-slate-400">
                Default Superadmin: <code class="font-mono text-slate-700 bg-slate-100 px-1.5 py-0.5 rounded font-semibold">admin@datasatu.com</code> | <code class="font-mono text-slate-700 bg-slate-100 px-1.5 py-0.5 rounded font-semibold">admin123</code>
            </p>
        </div>
    </div>
</div>

<script>
    function togglePasswordVisibility(inputId, btn) {
        const input = document.getElementById(inputId);
        const icon = btn.querySelector('[data-lucide]');
        if (input.type === 'password') {
            input.type = 'text';
            icon.setAttribute('data-lucide', 'eye-off');
        } else {
            input.type = 'password';
            icon.setAttribute('data-lucide', 'eye');
        }
        if (window.lucide) {
            lucide.createIcons();
        }
    }

    document.addEventListener("DOMContentLoaded", function() {
        if (window.lucide) {
            lucide.createIcons();
        }
    });
</script>
</body>
</html>
