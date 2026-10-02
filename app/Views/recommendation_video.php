<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?php 
    $titleProgram = '';
    $dateProgram = '';
    $server_time = time();
    $today = strtolower(date("l",$server_time));
    $this_hour = date("H:i",$server_time);
?>
<section class="relative bg-white font-poppins">
    <div class="lg:pt-[114px] pt-[80px] lg:pb-[80px] pb-[40px] lg:px-[80px] px-[16px] rounded-bl-[150px] rounded-br-[150px]">
        <div class="lg:max-w-[1440px] w-full mx-auto flex flex-col justify-center items-start">
            <div class="flex flex-row flex-wrap justify-start items-center gap-x-[8px] h-[72px] lg:text-[16px] text-[12px]">
                <a href="/#home"><p class="text-normal text-[#1C1C1C]">Home</p></a>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.045 7.28526L6.27556 3.51333L5.33337 4.45615L8.63168 7.75667L5.33337 11.0572L6.27556 12L10.045 8.22807C10.1699 8.10304 10.24 7.93347 10.24 7.75667C10.24 7.57986 10.1699 7.4103 10.045 7.28526Z" fill="#4D4D4D"/>
                </svg>
                <a href="/live_streaming"><p class="text-normal text-[#1C1C1C]">Live Streaming</p></a>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.045 7.28526L6.27556 3.51333L5.33337 4.45615L8.63168 7.75667L5.33337 11.0572L6.27556 12L10.045 8.22807C10.1699 8.10304 10.24 7.93347 10.24 7.75667C10.24 7.57986 10.1699 7.4103 10.045 7.28526Z" fill="#4D4D4D"/>
                </svg>
                <p class="text-semibold text-[#5687F0]">Rekomendasi Video</p>
            </div>
            <div class="flex lg:flex-row flex-col justify-between items-start lg:gap-[40px] gap-[24px] w-full">
                <div class="w-full space-y-[24px] lg:pb-[40px] pb-[16px] lg:border-b-2 lg:border-[#F5F5F5]">
                     <div class="aspect-video w-full h-full">
                        <iframe class="w-full h-full" src="https://youtube.com/embed/1CKoO6G3uOQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" autoplay="On" allowfullscreen=""></iframe>
                     </div>
                    
                    <div class="flex flex-col justify-center items-start font-poppins text-[#333333] gap-[16px] leading-8">
                        <p class="lg:text-[32px] text-[20px] font-bold leading-relaxed">Ustadz Hilman Fauzi: Ketika Teknologi Jadi Penunjang, Bukan Penghalang | Jalan Dakwah Btv Part 2</p>
                        <div class="flex lg:flex-row flex-col justify-between lg:items-center items-start w-full gap-[16.5px]">
                            <div class="flex flex-col text-[#4D4D4D]">
                                <p class="font-poppins lg:text-[16px] text-[14px] font-bold">BTV</p>
                                <div class="flex flex-row font-poppins lg:text-[14px] text-[12px] font-normal gap-[7px] text-[#4D4D4D]"><p>24 Maret 2025</p><p>•</p><p>12:57 WIB</p></div>
                            </div>
                            <div class="flex flex-wrap justify-start items-end gap-[12px]">
                                <img src="/img/icon-facebook.webp" alt="" class="w-auto h-[40px]">
                                <img src="/img/icon-x.webp" alt="" class="w-auto h-[40px]">
                                <img src="/img/icon-instagram.webp" alt="" class="w-auto h-[40px]">
                                <img src="/img/icon-telegram.webp" alt="" class="w-auto h-[40px]">
                                <img src="/img/icon-link.webp" alt="" class="w-auto h-[40px]">
                            </div>
                        </div>
                        <p id="text-content" class="whitespace-pre-line lg:mt-[34px] mt-[8px] lg:text-[16px] text-[14px]"></p>
                        <button id="toggle-btn" class="text-[#DA2328] lg:text-[16px] text-[14px] font-poppins font-semibold mt-2 flex items-center space-x-2 group">
                            <span>Tampilkan lebih banyak</span>
                            <svg id="toggle-icon" xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none" class="transform transition-transform duration-300">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.5721 15.0674L19.23 9.41327L17.8158 8L12.865 12.9475L7.91422 8L6.5 9.41327L12.1579 15.0674C12.3454 15.2547 12.5998 15.36 12.865 15.36C13.1302 15.36 13.3846 15.2547 13.5721 15.0674Z" fill="#DA2328"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="lg:max-w-[360px] w-full flex flex-col gap-[24px]">
                    <div class="lg:max-w-[360px] w-full border border-[1px] border-[#F5F5F5] px-[16px] py-[16px] space-y-[20px]">
                        <p class="text-[20px] font-poppins font-semibold">Live Streaming</p>
                        <div class="relative overflow-hidden bg-white w-full mx-auto flex flex-col lg:gap-[0px] gap-[16px]">
                            <img 
                                src="/img/streaming-bg-live.webp" 
                                alt="Live Streaming"
                                class="w-full h-auto object-cover opacity-90 rounded-[12px]"
                            />
                            <a href="/live_streaming" class="w-full">
                                <button class="lg:absolute relative lg:inset-0 lg:flex lg:items-center lg:justify-center w-full">
                                    <div class="bg-[#DA2328] text-white lg:px-[14px] px-[16px] lg:py-[8px] py-[12px] rounded-full lg:text-[14px] text-[16px] font-medium flex justify-center items-center gap-[12px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="11" viewBox="0 0 16 19" fill="none">
                                            <path d="M1.66667 1.91443L15 9.91443L1.66667 17.9144V1.91443Z" fill="white" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        Gabung Live Streaming
                                    </div>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="lg:max-w-[360px] w-full border border-[1px] border-[#F5F5F5]">
                        <p class="lg:text-[20px] text-[16px] font-poppins font-semibold p-[20px]">Jadwal TV Hari Ini</p>

                        <!-- Schedule list -->
                        <div class="space-y-4 max-h-[590px] overflow-y-auto">
                            <!-- DIDI & FRIENDS -->
                            <?php foreach ($jadwal_programs as $index => $jadwal_program): ?>
                                <?php $day = $jadwal_program->day; ?>
                                <?php if ($today == $day): ?>
                                    <?php foreach ($jadwal_program->program as $program): ?>
                                        <div class="flex items-start justify-between items-center border-b px-5 py-4">
                                            <div class="flex flex-col gap-[8px]">
                                                <p class="lg:text-[16px] text-[14px] font-poppint font-semibold"><?= $program->title ?></p>
                                                <div class="flex items-center lg:text-[16px] text-[12px] font-normal font-poppins text-[#1C1C1C] mt-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>
                                                    <?= $program->start ?> - <?= $program->end ?> WIB
                                                </div>
                                            </div>
                                            <?php if($today == $day && strtotime($this_hour) > strtotime($program->start) && strtotime($this_hour) < strtotime($program->end)): ?>
                                                <button class="flex items-center gap-2 px-3 py-1 bg-[#DA2328] text-white rounded-[8px] text-[14px] font-bold ml-[20px]">
                                                    <span class="relative flex h-2 w-2">
                                                        <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-white opacity-75 [animation-duration:3s]"></span>
                                                        <span class="relative inline-flex rounded-full h-2 w-2 bg-white"></span>
                                                    </span>
                                                    Live
                                                </button>
                                            <?php endif; ?>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                        <div class="flex items-start justify-center items-center border-b">
                                <a href="/#schedule">
                                    <button class="lg:w-[265px] w-full h-[56px] text-[#DA2328] lg:text-[16px] text-[14px] font-semibold py-[24px] px-[121px] rounded-full flex justify-center items-center lg:gap-[0px] gap-[8px]">
                                        Selengkapnya
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 16" fill="none" class="block lg:hidden w-[14px] h-[16px]">
                                            <path d="M17.472 8.47195L10.8053 15.1386C10.6801 15.2638 10.5104 15.3341 10.3333 15.3341C10.1563 15.3341 9.9865 15.2638 9.86132 15.1386C9.73614 15.0134 9.66581 14.8436 9.66581 14.6666C9.66581 14.4896 9.73614 14.3198 9.86132 14.1946L15.3907 8.66661H0.99999C0.823179 8.66661 0.653608 8.59638 0.528585 8.47135C0.403561 8.34633 0.333323 8.17676 0.333323 7.99995C0.333323 7.82314 0.403561 7.65357 0.528585 7.52854C0.653608 7.40352 0.823179 7.33328 0.99999 7.33328H15.3907L9.86132 1.80528C9.73614 1.6801 9.66581 1.51031 9.66581 1.33328C9.66581 1.15625 9.73614 0.986463 9.86132 0.86128C9.9865 0.736098 10.1563 0.665771 10.3333 0.665771C10.5104 0.665771 10.6801 0.736098 10.8053 0.86128L17.472 7.52795C17.5341 7.58987 17.5833 7.66344 17.6169 7.74444C17.6505 7.82543 17.6678 7.91226 17.6678 7.99995C17.6678 8.08764 17.6505 8.17446 17.6169 8.25546C17.5833 8.33645 17.5341 8.41002 17.472 8.47195Z" fill="#DA2328"/>
                                        </svg>
                                    </button>
                                </a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="relative h-full bg-white lg:px-[80px] px-[16px] lg:pb-[80px] pb-[40px]">
    <div class="lg:max-w-[1440px] relative w-full block mx-auto font-poppins space-y-[24px] lg:pt-[0px] pt-[40px] lg:border-t-0 border-t-2 lg:border-white border-[#F5F5F5]">
        <!-- <p class="lg:text-[24px] text-[20px] font-semibold font-poppins">Video Terkait</p> -->
        <div class="flex flex-row gap-[0px] justify-start items-center w-full lg:mb-[24px] mb-[28px]">
            <p class="self-stretch border-[3px] border-[#5687F0]"></p>
            <div class="flex flex-col lg:gap-[12px] gap-[10px] justify-start items-start bg-[#5687F0]/5 py-[8px] px-[20px]">
                <p class="lg:text-[18px] text-[18px] font-semibold font-poppins text-[#1C1C1C] text-center">Video Terkait</p>
            </div>
        </div>
        <!-- <div class="flex justify-center"> -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 md:grid-cols-3 justify-items-center gap-[26px]">
                <?php foreach ($rekomen_videos->list as $index => $rekomen_video): ?>
                    <div class="rounded-[12px] overflow-hidden text-white cursor-pointer space-y-[16px] w-full">
                    <img src="https://img2.beritasatu.com/cache/beritasatu/350x197-2/<?= $rekomen_video->media[0]->url; ?>" data-src="https://img2.beritasatu.com/cache/beritasatu/350x197-2/<?= $rekomen_video->media[0]->url; ?>" class="rounded-[7.5px] object-cover w-full" alt="<?= strip_tags($rekomen_video->headline_clean) ?>">
                        <div class="flex flex-col justify-center items-start gap-[8px]">
                            <p class="ffont-poppins font-medium text-[#1C1C1C] text-[13.8px] line-clamp-2 overflow-hidden text-ellipsis"><?=$rekomen_video->headline?></p>
                            <div class="flex justify-center items-center gap-[7px] text-[#4D4D4D] font-poppins text-[12.3px] font-normal">
                                <button id="scrollLeft" class="p-2 bg-[#EEF3FE] text-white rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="17" viewBox="0 0 15 17" fill="none">
                                        <path d="M0.847168 0.253418L14.6433 8.44488L0.847168 16.6363V0.253418Z" fill="#5687F0"/>
                                    </svg>
                                </button>
                                <p><?= get_timeago(strtotime($rekomen_video->articleDate), 'j M Y • H:i') ?></p>
                            </div>
                        </div>
                    </div> 
                <?php endforeach; ?>
            </div>
        <!-- </div> -->
    </div>
</section>
<script>
  const fullText = `Dalam Jalan Dakwah kali ini, Ustadz Hilman Fauzi menjelaskan bagaimana caranya memanfaatkan sosial media selama Ramadan sebagai sarana untuk beribadah.
                    #jalandakwah #btv #ceramah #kajianislam #islam #ramadan

                    Pastikan kamu subscribe dan aktifkan juga tombol lonceng untuk mendapatkan notifikasi video terbaru dari BTV.

                    Yuk jadi bagian dari komunitas kami, dapatkan informasi terbaru langsung ke tangan kamu.

                    Kunjungi juga social media channel kami :

                    Official Website: https://www.beritasatu.com/livestream
                    Twitter : https://twitter.com/btvidofficial
                    Facebook : https://www.facebook.com/btvidofficial/
                    Instagram : https://www.instagram.com/btvidofficial
                    Tiktok : https://www.tiktok.com/@btvidofficial`;

    const maxChars = 227;
    const textElement = document.getElementById('text-content');
    const btn = document.getElementById('toggle-btn');
    const icon = document.getElementById('toggle-icon');
    const btnText = btn.querySelector('span');

    let isExpanded = false;

    function formatText(text) {
        return text.replace(/\n/g, '<br>');
    }

    function updateView() {
        if (isExpanded) {
        textElement.innerHTML = formatText(fullText);
        btnText.textContent = 'Tampilkan lebih sedikit';
        icon.classList.add('rotate-180');
        } else {
        textElement.innerHTML = formatText(fullText.substring(0, maxChars) + '...');
        btnText.textContent = 'Tampilkan lebih banyak';
        icon.classList.remove('rotate-180');
        }
    }

    btn.addEventListener('click', () => {
        isExpanded = !isExpanded;
        updateView();
    });

    // Initial render
    updateView();
</script>
<?= $this->endSection(); ?>