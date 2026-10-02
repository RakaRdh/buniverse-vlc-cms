<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<!-- HERO -->
<section class="relative bg-brand pt-[10rem] pb-24 lg:pb-[10rem] text-white overflow-hidden
                 min-h-[480px] sm:min-h-[560px] md:min-h-[600px] lg:min-h-[640px] xl:min-h-[680px]">

    <!-- Background photo (hero-bg.webp).
         - Up to md: object-cover fills the box edge-to-edge (mobile screens are
           narrow, so cover crops very little and still looks like a full photo hero).
         - From lg: switched to object-contain, so on big/wide screens the ENTIRE
           image is always shown with zero cropping — any leftover space is filled
           by the surrounding bg-brand color, which blends seamlessly since it
           matches the image's own background. This is what stops it looking
           "kepotong" on large monitors no matter how wide the viewport gets. -->
    <div class="absolute inset-0 bg-brand">
        <img src="/img/hero-bg.webp" alt=""
             class="w-full h-full object-cover object-top sm:object-center lg:object-cover"
             onerror="this.style.display='none'">
    </div>

    <div class="max-w-[1200px] mx-auto px-4 lg:px-10 flex flex-col lg:flex-row items-center gap-10 relative z-10">
        <div class="flex-1 text-center lg:text-left">
            <h1 class="text-3xl lg:text-4xl font-extrabold leading-tight mb-4">Learn Today, Lead Tomorrow</h1>
            <p class="text-white/90 mb-6 max-w-md mx-auto lg:mx-0">
                Kembangkan skill yang relevan dengan industri dan jadilah lebih siap menghadapi peluang serta tantangan karier di masa depan.
            </p>
            <a href="/register" class="inline-block bg-accent hover:bg-accent-dark text-white font-semibold px-8 py-3 rounded-full transition">Sign Up</a>
        </div>

        <div class="flex-1 relative w-full max-w-xs sm:max-w-sm lg:max-w-md mx-auto mt-10 lg:mt-0">
            <!-- People illustration -->
            <div class="relative overflow-hidden aspect-square">
                <img src="/img/hero-right.webp" alt="Learn Today, Lead Tomorrow"
                     class="w-full h-full object-center object-contain"
                     onerror="this.style.display='none'">
            </div>

            <!-- Floating badge: Materi Aplikatif -->
            <!-- <div class="hidden md:block absolute -left-6 lg:-left-10 top-1/4 bg-white text-brand text-xs font-bold px-4 py-3 rounded-xl shadow-lg text-center leading-tight">
                MATERI<br>APLIKATIF
            </div> -->

            <!-- Floating badge: Pelatihan Bersertifikat -->
            <!-- <div class="hidden md:block absolute -right-4 lg:-right-6 top-[46%] bg-white text-brand text-xs font-bold px-4 py-3 rounded-xl shadow-lg text-center leading-tight max-w-[120px]">
                PELATIHAN BERSERTIFIKAT
            </div> -->

            <!-- Kenapa DataSatu VLC card: normal flow (stacked) on mobile/tablet so it
                 never gets clipped; only overlaps the image absolutely once there's
                 enough room (lg+), matching the reference design. -->
            <!-- <div class="relative lg:absolute mt-4 lg:mt-0 lg:-bottom-10 lg:left-1/2 lg:-translate-x-1/2 w-full lg:w-[90%] bg-white text-gray-800 rounded-xl shadow-xl p-5">
                <p class="font-semibold mb-2 text-sm">Kenapa DataSatu VLC</p>
                <ul class="space-y-1 text-xs text-gray-600 list-disc list-inside">
                    <li>Mempelajari skill yang siap digunakan</li>
                    <li>Relevan dengan kebutuhan industri</li>
                    <li>Seimbang antara teori dan Praktik</li>
                    <li>Memperluas networking industry</li>
                    <li>Belajar dengan real case study</li>
                </ul>
            </div> -->
        </div>
    </div>
</section>

<!-- PLAY DIVIDER -->
<!-- <div class="flex justify-center mt-10 md:mt-16 mb-6 relative z-10">
    <div class="w-14 h-14 rounded-full bg-white shadow flex items-center justify-center">
        <div class="w-0 h-0 border-t-[10px] border-t-transparent border-b-[10px] border-b-transparent border-l-[16px] border-l-accent ml-1"></div>
    </div>
</div> -->

<!-- ABOUT / GALLERY -->
<section class="max-w-[1200px] mx-auto px-4 lg:px-10 pt-6 pb-16 relative">
    <!-- decorative coral ring shape -->
    <div class="hidden lg:block absolute -right-10 top-16 w-28 h-28 rounded-full bg-[#F2836E]">
        <div class="absolute top-3 right-3 w-11 h-11 rounded-full bg-white"></div>
    </div>

    <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-center">
        <div class="relative">
            <!-- decorative play-triangle shape -->
            <svg class="hidden lg:block absolute -top-10 right-10 w-14 h-14 -rotate-[15deg] z-10" viewBox="0 0 100 100" fill="none">
                <path d="M20 10 L85 50 L20 90 Z" stroke="#F2836E" stroke-width="11" stroke-linejoin="round" stroke-linecap="round"/>
            </svg>

            <div class="flex gap-3 h-80 lg:h-[420px]">
                <div class="peer/i1 flex-1 hover:flex-[2] transition-[flex-grow] duration-500 ease-in-out rounded-2xl bg-gray-200 overflow-hidden">
                    <img src="/img/gallery-1.webp" alt="" class="w-full h-full object-cover" onerror="this.style.display='none'">
                </div>
                <div class="peer/i2 flex-1 hover:flex-[2] transition-[flex-grow] duration-500 ease-in-out rounded-2xl bg-gray-200 overflow-hidden">
                    <img src="/img/gallery-2.webp" alt="" class="w-full h-full object-cover" onerror="this.style.display='none'">
                </div>
                <div class="flex-[2] peer-hover/i1:flex-1 peer-hover/i2:flex-1 transition-[flex-grow] duration-500 ease-in-out rounded-2xl bg-gray-200 overflow-hidden">
                    <img src="/img/gallery-3.webp" alt="" class="w-full h-full object-cover" onerror="this.style.display='none'">
                </div>
            </div>

            <!-- decorative coral cross shape -->
            <div class="hidden lg:block absolute -left-6 -bottom-6 w-14 h-14 rotate-12 z-10">
                <div class="absolute inset-y-0 left-1/2 -translate-x-1/2 w-5 rounded-full bg-[#F2836E]"></div>
                <div class="absolute inset-x-0 top-1/2 -translate-y-1/2 h-5 rounded-full bg-[#F2836E]"></div>
            </div>
        </div>
        <div>
            <h2 class="text-xl lg:text-2xl font-bold mb-4">Apa Itu Vocational Learning Center?</h2>
            <p class="text-gray-600 leading-relaxed text-center">
                Pusat pembelajaran berbasis keterampilan untuk mengembangkan kompetensi yang relevan dengan kebutuhan dunia kerja. Vocational Learning Center Data Satu didukung mentor berpengalaman, materi aplikatif, dan pembelajaran yang dirancang untuk membantu peserta meningkatkan skill serta membuka peluang karier yang lebih luas.
            </p>
        </div>
    </div>
</section>

<!-- COURSES -->
<section class="relative bg-brand py-16 text-white text-center overflow-hidden max-h-[1100px] h-[1100px] flex flex-col justify-center">
    <div class="absolute inset-0 bg-brand">
        <img src="/img/course-bg.webp" alt=""
             class="w-full h-full object-cover object-top sm:object-center lg:object-cover"
             onerror="this.style.display='none'">
    </div>
    <div class="relative max-w-[1000px] mx-auto px-4 z-10">
        <div class="min-h-[220px] lg:min-h-[260px] flex flex-col justify-center">
            <h2 class="text-2xl font-bold mb-3">Pilih Kelas Sesuai Minat dan Kebutuhanmu</h2>
            <p class="text-white/90 max-w-2xl mx-auto">
                Temukan berbagai pilihan pelatihan dengan topik yang relevan dan aplikatif. Setiap bulan, tersedia kelas dengan beragam tema yang dapat kamu pilih sesuai kebutuhan pengembangan diri dan karier. Pelatihan dapat diikuti secara fleksibel, baik <strong>offline maupun online melalui format hybrid.</strong>
            </p>
        </div>

        <div class="flex flex-wrap justify-center gap-6 mt-10">
            <?php if (empty($courses)): ?>
                <p class="text-white/80 text-sm">Belum ada kelas tersedia saat ini.</p>
            <?php endif; ?>
            <?php foreach ($courses as $course): ?>
                <div class="bg-white text-gray-800 rounded-xl overflow-hidden text-left shadow-lg max-w-[434px] w-full max-h-[434px] h-full ">
                    <div class="h-40 bg-gray-200 relative overflow-hidden">
                        <img src="<?= esc($course['image'] ?? '/img/course-placeholder.webp') ?>" alt="<?= esc($course['title']) ?>"
                             class="w-full h-full object-cover" onerror="this.style.display='none'">
                        <img src="/img/logo-vlc.webp" alt=""
                             class="absolute inset-0 m-auto w-16 h-16 object-contain" onerror="this.style.display='none'">
                        <?php if (!empty($course['is_best_seller'])): ?>
                            <span class="absolute top-3 right-3 bg-[#F2836E] text-white text-sm font-semibold px-4 py-1.5 rounded-full shadow">Best Seller</span>
                        <?php endif; ?>
                    </div>
                    <div class="p-5 pb-4">
                        <h3 class="font-bold mb-2"><?= esc($course['title']) ?></h3>
                        <ul class="text-sm text-gray-600 space-y-1 mb-4 list-disc list-inside">
                            <li><?= (int) $course['modules_count'] ?> modul</li>
                            <?php if (!empty($course['has_video'])): ?><li>1 video</li><?php endif; ?>
                            <?php if (!empty($course['has_certificate'])): ?><li>Sertifikat</li><?php endif; ?>
                        </ul>
                    </div>
                    <a href="/product/<?= esc($course['slug']) ?>"
                       class="block text-center bg-[#FF8D28] hover:bg-accent-dark text-white font-semibold py-3.5 transition">
                       Daftar Kelas
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- PLAY DIVIDER -->
<div class="flex justify-center my-10">
    <div class="w-16 h-16 rounded-full bg-accent/10 flex items-center justify-center">
        <div class="w-0 h-0 border-t-[12px] border-t-transparent border-b-[12px] border-b-transparent border-l-[18px] border-l-accent ml-1"></div>
    </div>
</div>

<!-- FAQ -->
<section class="max-w-[900px] mx-auto px-4 pb-16 relative">
    <!-- decorative shapes -->
    <div class="hidden lg:block absolute -left-6 bottom-4 w-16 h-16 bg-accent/40 rounded-2xl -rotate-12"></div>
    <div class="hidden lg:block absolute -right-6 bottom-10 w-20 h-20 rounded-full border-[10px] border-accent/30"></div>

    <div class="bg-accent/10 rounded-3xl p-6 lg:p-12">
        <h2 class="text-center text-2xl font-bold mb-10 text-gray-900">Paling Sering Di tanyakan</h2>
        <div class="space-y-4">
            <?php
            $faqs = [
                'Berapa lama training akan berlangsung' => 'Durasi training bervariasi tergantung modul, umumnya berlangsung antara 2 sampai 4 minggu secara hybrid.',
                'Berapa orang yang menjadi peserta dalam satu kelas?' => 'Setiap kelas dibatasi maksimal 30 peserta agar pembelajaran lebih efektif dan interaktif.',
                'Bagaimana cara pembayaran untuk mengikuti training?' => 'Pembayaran dapat dilakukan melalui transfer bank setelah pendaftaran kelas disetujui oleh tim kami.',
            ];
            ?>
            <?php foreach ($faqs as $q => $a): ?>
                <details class="bg-accent text-white rounded-xl px-5 py-4 group">
                    <summary class="cursor-pointer font-medium flex items-center justify-between list-none">
                        <?= esc($q) ?>
                        <span class="ml-4 text-xl leading-none group-open:rotate-45 transition-transform">+</span>
                    </summary>
                    <p class="text-sm text-white/90 mt-3"><?= esc($a) ?></p>
                </details>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?= $this->endSection() ?>