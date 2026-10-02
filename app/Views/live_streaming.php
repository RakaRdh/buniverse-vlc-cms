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
            <div class="flex flex-row justify-center items-center gap-[8px] h-[72px] lg:text-[16px] text-[12px]">
                <a href="/#home"><p class="text-normal text-[#1C1C1C]">Home</p></a>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.045 7.28526L6.27556 3.51333L5.33337 4.45615L8.63168 7.75667L5.33337 11.0572L6.27556 12L10.045 8.22807C10.1699 8.10304 10.24 7.93347 10.24 7.75667C10.24 7.57986 10.1699 7.4103 10.045 7.28526Z" fill="#4D4D4D"/>
                </svg>
                <p class="text-semibold text-[#5687F0]">Live Streaming</p>
            </div>
            <div class="flex lg:flex-row flex-col justify-between items-start gap-[40px] w-full">
                <div class="w-full lg:pb-[40px] lg:border-b-2 lg:border-[#F5F5F5]">
                    <script type="text/javascript">
                        const m3u8source = "https://btv.secureswiftcontent.com/han/btv/btv10005/srtoutput/manifest.m3u8";
                        const posterimg = "https://www.beritasatu.com/img/btv-poster.jpeg";
                        </script>
                        <div id="streaming" class="aspect-video w-full"></div>
                        <script type="text/javascript" src="https://img2.beritasatu.com/assets/jwplayer-8.34.5/jwplayer.js"></script>
                        <script>jwplayer.key="8lFWRrpqtBMeW4m4V3ECasAnIo09Y1tQkktqR2dgdro=";</script>
                        <script type="text/javascript">
                        jwplayer('streaming').setup({
                            autostart: true,
                            mute: false,
                            sources: [
                            { file: m3u8source},
                            ],
                            image:posterimg,
                            primary: "HTML5",
                            width: "100%",
                            aspectratio: "16:9",
                            fallback: true,
                            icons:false
                        });
                    </script>
                    <!-- <img src="https://www.beritasatu.com/img/btv-poster.jpeg" alt=""> -->
                    <div class="flex flex-col justify-center items-start font-poppins text-[#333333] gap-[16px] leading-8 mt-[24px]">
                        <p id="text-title" class="lg:text-[32px] text-[20px] font-bold"></p>
                        <div class="flex items-center lg:text-[16px] text-[12px] font-normal font-poppins text-[#1C1C1C] mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <p id="text-time"></p>
                        </div>
                        <p id="text-content" class="whitespace-pre-line lg:text-[16px] text-[14px]"></p>
                        <button id="toggle-btn" class="text-[#DA2328] lg:text-[16px] text-[14px] font-poppins font-semibold mt-2 flex items-center space-x-2 group">
                            <span>Lihat lebih banyak</span>
                            <svg id="toggle-icon" xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none" class="transform transition-transform duration-300">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.5721 15.0674L19.23 9.41327L17.8158 8L12.865 12.9475L7.91422 8L6.5 9.41327L12.1579 15.0674C12.3454 15.2547 12.5998 15.36 12.865 15.36C13.1302 15.36 13.3846 15.2547 13.5721 15.0674Z" fill="#DA2328"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="lg:max-w-[360px] w-full border border-[1px] border-[#F5F5F5]">
                    <!-- <div class=""> -->
                        <p class="lg:text-[20px] text-[16px] font-poppins font-semibold px-[20px] pt-[20px]">TV Schedule</p>
                        <div class="relative pb-[40px]">
                            <!-- Tabs -->
                            <div class="flex space-x-2 pl-[20px] pt-[20px] overflow-x-auto">
                            <div id="channelList" class="flex items-center overflow-x-auto no-scrollbar flex-1 scroll-smooth gap-[8px]">
                                <?php foreach ($jadwal_programs as $index => $jadwal_program): ?>
                                    <?php $day = $jadwal_program->day; ?>
                                    <button 
                                        class="tab-btn <?= ($today == $day) ? 'bg-[#DA2328] text-white' : 'bg-[#F5F5F5] text-[#4D4D4D]' ?> px-[16px] py-[8px] rounded-full lg:text-[14px] text-[12px] font-poppins font-medium whitespace-nowrap"
                                        data-tab="tab-<?= $index ?>">
                                        <?= $jadwal_program->label ?>
                                    </button>
                                <?php endforeach; ?>
                            </div>
                            </div>
                            <button id="scrollLeft" class="absolute bottom-[37px] left-[10px] p-2 bg-gradient-to-r from-white from-70% transition disabled:opacity-0 disabled:cursor-not-allowed">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="25" viewBox="0 0 12 25" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.84306 13.211L7.50006 18.868L8.91406 17.454L3.96406 12.504L8.91406 7.554L7.50006 6.14L1.84306 11.797C1.65559 11.9845 1.55028 12.2388 1.55028 12.504C1.55028 12.7692 1.65559 13.0235 1.84306 13.211Z" fill="#DA2328"/>
                                </svg>
                            </button>
                            <button id="scrollRight" class="absolute bottom-[37px] right-[0px] p-2 bg-gradient-to-l from-white from-70% transition disabled:opacity-0 disabled:cursor-not-allowed">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="25" viewBox="0 0 13 25" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.6569 13.211L4.99994 18.868L3.58594 17.454L8.53594 12.504L3.58594 7.554L4.99994 6.14L10.6569 11.797C10.8444 11.9845 10.9497 12.2388 10.9497 12.504C10.9497 12.7692 10.8444 13.0235 10.6569 13.211Z" fill="#DA2328"/>
                                </svg>
                            </button>
                        </div>

                        <!-- Schedule list -->
                        <div id="tab-panels" class="space-y-4 max-h-[590px] overflow-y-auto">
                            <?php foreach ($jadwal_programs as $index => $jadwal_program): ?>
                                <?php $day = $jadwal_program->day; ?>
                                <div class="tab-panel <?= ($today == $jadwal_program->day) ? '' : 'hidden' ?>" id="tab-<?= $index ?>">
                                    <?php foreach ($jadwal_program->program as $program): ?>
                                        <div class="flex items-start justify-between items-center border-b px-4 py-4">
                                            <div class="flex flex-col gap-[8px]">
                                                <p class="lg:text-[16px] text-[14px] font-poppint font-semibold uppercase"><?= $program->title ?></p>
                                                <div class="flex items-center lg:text-[16px] text-[12px] font-normal font-poppins text-[#1C1C1C] mt-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>
                                                    <?= $program->start ?> - <?= $program->end ?> WIB
                                                </div>
                                            </div>
                                            <?php if($today == $day && strtotime($this_hour) > strtotime($program->start) && strtotime($this_hour) < strtotime($program->end)): ?>
                                                <?php 
                                                    $titleProgram = $program->title;
                                                    $dateProgram = $program->start. ' - ' .$program->end. ' WIB';
                                                ?>
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
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<section class="relative h-full bg-white lg:px-[80px] px-[16px] lg:pb-[80px] pb-[40px]">
    <div class="lg:max-w-[1440px] relative w-full block mx-auto font-poppins space-y-[24px] lg:pt-[0px] pt-[40px] lg:border-t-0 border-t-2 lg:border-white border-[#F5F5F5]">
        <!-- <p class="lg:text-[24px] text-[20px] font-semibold font-poppins">Rekomendasi Video</p> -->
        <div class="flex flex-row gap-[0px] justify-start items-center w-full lg:pb-[24px] pb-[28px]">
            <p class="self-stretch border-[3px] border-[#5687F0]"></p>
            <div class="flex flex-col lg:gap-[12px] gap-[10px] justify-start items-start bg-[#5687F0]/5 py-[8px] px-[20px]">
                <p class="lg:text-[18px] text-[18px] font-semibold font-poppins text-[#1C1C1C] text-center">Corporate Insight</p>
            </div>
        </div>
        <!-- <div class="flex justify-center"> -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 md:grid-cols-3 justify-items-center gap-[26px]">
                <?php foreach ($rekomen_videos->list as $index => $rekomen_video): ?>
                    <a href="/live_streaming/recommendation_video" class="w-full">
                        <div class="rounded-[12px] overflow-hidden text-white cursor-pointer space-y-[16px] w-full">
                            <img src="https://img2.beritasatu.com/cache/beritasatu/350x197-2/<?= $rekomen_video->media[0]->url; ?>" data-src="https://img2.beritasatu.com/cache/beritasatu/350x197-2/<?= $rekomen_video->media[0]->url; ?>" class="rounded-[7.5px] object-cover w-full" alt="<?= strip_tags($rekomen_video->headline_clean) ?>">
                            <div class="flex flex-col justify-center items-start gap-[8px]">
                                <p class="font-poppins font-medium text-[#1C1C1C] text-[13.8px] line-clamp-2 overflow-hidden text-ellipsis"><?=$rekomen_video->headline?></p>
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
                    </a>
                <?php endforeach; ?>
            </div>
        <!-- </div> -->
    </div>

    <div class="lg:max-w-[1440px] relative w-full block mx-auto font-poppins space-y-[24px] lg:pt-[0px] pt-[40px] lg:border-t-0 border-t-2 lg:border-white border-[#F5F5F5] mt-[64px]">
        <!-- <p class="lg:text-[24px] text-[20px] font-semibold font-poppins">Rekomendasi Video</p> -->
        <div class="flex flex-row gap-[0px] justify-start items-center w-full lg:pb-[24px] pb-[28px]">
            <p class="self-stretch border-[3px] border-[#5687F0]"></p>
            <div class="flex flex-col lg:gap-[12px] gap-[10px] justify-start items-start bg-[#5687F0]/5 py-[8px] px-[20px]">
                <p class="lg:text-[18px] text-[18px] font-semibold font-poppins text-[#1C1C1C] text-center">Ekonomi Syariah 2025</p>
            </div>
        </div>
        <!-- <div class="flex justify-center"> -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 md:grid-cols-3 justify-items-center gap-[26px]">
                <?php foreach ($rekomen_videos->list as $index => $rekomen_video): ?>
                    <a href="/live_streaming/recommendation_video" class="w-full">
                        <div class="rounded-[12px] overflow-hidden text-white cursor-pointer space-y-[16px] w-full">
                            <img src="https://img2.beritasatu.com/cache/beritasatu/350x197-2/<?= $rekomen_video->media[0]->url; ?>" data-src="https://img2.beritasatu.com/cache/beritasatu/350x197-2/<?= $rekomen_video->media[0]->url; ?>" class="rounded-[7.5px] object-cover w-full" alt="<?= strip_tags($rekomen_video->headline_clean) ?>">
                            <div class="flex flex-col justify-center items-start gap-[8px]">
                                <p class="font-poppins font-medium text-[#1C1C1C] text-[13.8px] line-clamp-2 overflow-hidden text-ellipsis"><?=$rekomen_video->headline?></p>
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
                    </a>
                <?php endforeach; ?>
            </div>
        <!-- </div> -->
    </div>
</section>
<script>
    <?php //dd($dateProgram); ?>
    const fulltitleProgram = '<?= $titleProgram ?>';
    const fulltimeProgram = '<?= $dateProgram ?>';
    const fullText = `Pastikan kamu subscribe dan aktifkan juga tombol lonceng untuk mendapatkan notifikasi video terbaru dari BTV.
                    Yuk jadi bagian dari komunitas kami, dapatkan informasi terbaru langsung ke tangan kamu.
                    Kunjungi juga social media channel kami :
                    Official Website: https://www.beritasatu.com/livestream
                    Twitter : /btvidofficial
                    Facebook : /btvidofficial
                    Instagram : /btvidofficial
                    Tiktok : /btvidofficial`;

    const maxChars = 250;
    const textElementTitle = document.getElementById('text-title');
    const textElementTime = document.getElementById('text-time');
    const textElement = document.getElementById('text-content');
    const btn = document.getElementById('toggle-btn');
    const icon = document.getElementById('toggle-icon');
    const btnText = btn.querySelector('span');

    let isExpanded = false;

    function formatText(text) {
        return text.replace(/\n/g, '<br>');
    }
    textElementTitle.innerHTML = formatText(fulltitleProgram);
    textElementTime.innerHTML = formatText(fulltimeProgram);

    function updateView() {
        if (isExpanded) {
            textElement.innerHTML = formatText(fullText);
            btnText.textContent = 'Lihat lebih sedikit';
            icon.classList.add('rotate-180');
        } else {
            textElement.innerHTML = formatText(fullText.substring(0, maxChars) + '...');
            btnText.textContent = 'Lihat lebih banyak';
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
<script>
    document.querySelectorAll('.tab-btn').forEach(button => {
    button.addEventListener('click', () => {
        const target = button.dataset.tab;

        // Hide all panels
        document.querySelectorAll('.tab-panel').forEach(panel => {
            panel.classList.add('hidden');
        });

        // Reset all tab buttons
        document.querySelectorAll('.tab-btn').forEach(btn => {
            btn.classList.remove('bg-[#DA2328]', 'text-white');
            btn.classList.add('bg-[#F5F5F5]', 'text-[#4D4D4D]');
        });

        // Show selected panel and highlight active tab
        document.getElementById(target).classList.remove('hidden');
        button.classList.remove('bg-[#F5F5F5]', 'text-[#4D4D4D]');
        button.classList.add('bg-[#DA2328]', 'text-white');
    });
});
</script>
<?= $this->endSection(); ?>