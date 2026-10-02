<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'DataSatu.com | Vocational Learning Center' ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { poppins: ['Poppins', 'sans-serif'] },
                    colors: {
                        brand: {
                            DEFAULT: '#C41E24',
                            dark: '#8E1418',
                            light: '#E23744',
                        },
                        accent: {
                            DEFAULT: '#F5841F',
                            dark: '#DB6E10',
                        },
                    },
                },
            },
        }
    </script>
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .hero-wave { clip-path: ellipse(75% 100% at 50% 0%); }
    </style>
</head>
<body class="text-gray-800 bg-white">

    <?= $this->include('layout/header') ?>

    <?php $flashSuccess = session()->getFlashdata('success'); $flashError = session()->getFlashdata('error'); ?>
    <?php if ($flashSuccess || $flashError): ?>
        <div class="max-w-3xl mx-auto mt-4 px-4">
            <?php if ($flashSuccess): ?>
                <div class="bg-green-100 border border-green-300 text-green-800 text-sm rounded-lg px-4 py-3">
                    <?= esc($flashSuccess) ?>
                </div>
            <?php endif; ?>
            <?php if ($flashError): ?>
                <div class="bg-red-100 border border-red-300 text-red-800 text-sm rounded-lg px-4 py-3">
                    <?= esc($flashError) ?>
                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <?= $this->include('layout/footer') ?>

</body>
</html>
