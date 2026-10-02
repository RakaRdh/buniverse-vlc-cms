<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section class="relative h-full overflow-hidden bg-[url('/img/bg-anchor.webp')] bg-cover bg-no-repeat lg:pt-[80px] pt-[80px] lg:px-[80px] px-[16px] lg:pb-0 pb-[40px]">
    <div class="lg:max-w-[1440px] relative w-full block mx-auto font-poppins">
        <div class="flex flex-row justify-start items-center text-white gap-[8px] h-[72px] lg:text-[16px] text-[12px] lg:mt-[40px] ">
            <a href="/#home"><p class="font-normal">Home</p></a>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.045 7.28526L6.27556 3.51333L5.33337 4.45615L8.63168 7.75667L5.33337 11.0572L6.27556 12L10.045 8.22807C10.1699 8.10304 10.24 7.93347 10.24 7.75667C10.24 7.57986 10.1699 7.4103 10.045 7.28526Z" fill="white"/>
            </svg>
            <a href="/anchors"><p class="font-normal">Anchors</p></a>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.045 7.28526L6.27556 3.51333L5.33337 4.45615L8.63168 7.75667L5.33337 11.0572L6.27556 12L10.045 8.22807C10.1699 8.10304 10.24 7.93347 10.24 7.75667C10.24 7.57986 10.1699 7.4103 10.045 7.28526Z" fill="white"/>
            </svg>
            <p class="font-semibold">Iqbal Switamihardja</p>
        </div>
        <div class="flex lg:flex-row flex-col justify-between lg:gap-[150px] gap-[50px] lg:items-start items-center">
            <div class="text-white w-full pt-[19px] lg:pb-[80px]">
                <h2 class="lg:text-[40px] text-[20px] font-bold lg:mb-[24px] mb-[20px]">Iqbal Switamihardja</h2>
                <p class="lg:text-[20px] text-[14px] leading-8 lg:mb-[40px] mb-[20px]">
                    Lorem ipsum dolor sit amet consectetur. Urna consectetur fermentum at varius erat. Augue eleifend duis faucibus sagittis congue. Pharetra eget consequat faucibus amet. Interdum pellentesque integer lacus ut tempus non. Lorem ipsum dolor sit amet consectetur. Urna consectetur fermentum at varius erat. Augue eleifend duis faucibus sagittis congue. Pharetra eget consequat faucibus amet. Interdum pellentesque integer lacus ut tempus non. 
                </p>
                <div class="flex gap-[16px] lg:text-[20px] text-[16px] font-medium lg:mb-[40px] mb-[20px]">
                    <button class="lg:w-[240px] w-full lg:h-[56px] h-full bg-[#DA2328] text-white font-normal lg:py-2 py-[12px] lg:px-7 px-[16px] rounded-full flex lg:justify-start justify-center items-center gap-[16px]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 19" fill="none" class="lg:w-[16px] w-[10px] lg:h-[19px] h-[12px]">
                            <path d="M1.66667 1.91443L15 9.91443L1.66667 17.9144V1.91443Z" fill="white" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Preview
                    </button>
                </div>
                <div class="flex lg:justify-start justify-center gap-[16px]">
                    <img src="/img/icon-x-white.webp" alt="" class="w-[40px] h-40px">
                    <img src="/img/icon-tiktok-white.webp" alt="" class="w-[40px] h-40px">
                    <img src="/img/icon-linkedin-white.webp" alt="" class="w-[40px] h-40px">
                    <img src="/img/icon-instagram-white.webp" alt="" class="w-[40px] h-40px">
                </div>
            </div>
            <div class="relative flex justify-center lg:max-w-[400px] max-w-[280px] w-full bg-white p-[24px] rotate-[5deg] rounded-[11px]">
                <img src="/img/anchor-team-iqbal-bgsquare.webp" alt="Didi & Friends" class="lg:w-[351px] w-[250px] h-full rounded-[11px]">
            </div>
        </div>
    </div>
</section>
<section class="relative h-full bg-white lg:py-[80px] py-[40px] lg:px-[80px] px-[16px]">
    <div class="lg:max-w-[1440px] relative w-full block mx-auto font-poppins space-y-[40px]">
        <!-- <div class="flex flex-col justify-center items-start gap-[16px]">
            <div class="hidden lg:block bg-[#EEF3FE] text-[20px] text-[#5687F0] font-normal px-[16px] py-[8px] w-[131px]">Programs</div>
            <p class="lg:text-[40px] text-[20px] text-[#1C1C1C] font-bold">Preview Programs</p>
        </div> -->
        <div class="flex flex-row gap-[0px] justify-start items-center w-full">
            <p class="self-stretch border-[3px] border-[#5687F0]"></p>
            <div class="flex flex-col lg:gap-[12px] gap-[10px] justify-start items-start bg-[#5687F0]/5 py-[8px] px-[20px]">
                <p class="lg:text-[18px] text-[18px] font-semibold font-poppins text-[#1C1C1C] text-center">Rekomendasi Video</p>
            </div>
        </div>
        <!-- <div class="flex justify-center"> -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 md:grid-cols-3 justify-items-center gap-[26px]">
                <div class="rounded-[12px] overflow-hidden text-white cursor-pointer space-y-[16px] w-full">
                    <img class="rounded-[7.5px] object-cover" src="/img/streaming-img-rec-2.webp" alt="">
                    <div class="flex flex-col justify-center items-start gap-[8px]">
                        <p class="ffont-poppins font-medium text-[#1C1C1C] text-[13.8px] line-clamp-2 overflow-hidden text-ellipsis">Resep Nasi Bali & Avocado Coffee | Masak Everyhwhere Btv</p>
                        <div class="flex justify-center items-center gap-[7px] text-[#4D4D4D] font-poppins text-[12.3px] font-normal">
                            <button id="scrollLeft" class="p-2 bg-[#EEF3FE] text-white rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="17" viewBox="0 0 15 17" fill="none">
                                    <path d="M0.847168 0.253418L14.6433 8.44488L0.847168 16.6363V0.253418Z" fill="#5687F0"/>
                                </svg>
                            </button>
                            <p>24 Maret 2025</p><p>•</p><p>12:57 WIB</p>
                        </div>
                    </div>
                </div> 
                
                <div class="rounded-[12px] overflow-hidden text-white cursor-pointer space-y-[16px] w-full">
                    <img class="rounded-[7.5px] object-cover" src="/img/streaming-img-rec-2.webp" alt="">
                    <div class="flex flex-col justify-center items-start gap-[8px]">
                        <p class="ffont-poppins font-medium text-[#1C1C1C] text-[13.8px] line-clamp-2 overflow-hidden text-ellipsis">Resep Nasi Bali & Avocado Coffee | Masak Everyhwhere Btv</p>
                        <div class="flex justify-center items-center gap-[7px] text-[#4D4D4D] font-poppins text-[12.3px] font-normal">
                            <button id="scrollLeft" class="p-2 bg-[#EEF3FE] text-white rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="17" viewBox="0 0 15 17" fill="none">
                                    <path d="M0.847168 0.253418L14.6433 8.44488L0.847168 16.6363V0.253418Z" fill="#5687F0"/>
                                </svg>
                            </button>
                            <p>24 Maret 2025</p><p>•</p><p>12:57 WIB</p>
                        </div>
                    </div>
                </div> 
                <div class="rounded-[12px] overflow-hidden text-white cursor-pointer space-y-[16px] w-full">
                    <img class="rounded-[7.5px] object-cover" src="/img/streaming-img-rec-2.webp" alt="">
                    <div class="flex flex-col justify-center items-start gap-[8px]">
                        <p class="font-poppins font-medium text-[#1C1C1C] text-[13.8px] line-clamp-2 overflow-hidden text-ellipsis">Resep Nasi Bali & Avocado Coffee | Masak Everyhwhere Btv</p>
                        <div class="flex justify-center items-center gap-[7px] text-[#4D4D4D] font-poppins text-[12.3px] font-normal">
                            <button id="scrollLeft" class="p-2 bg-[#EEF3FE] text-white rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="17" viewBox="0 0 15 17" fill="none">
                                    <path d="M0.847168 0.253418L14.6433 8.44488L0.847168 16.6363V0.253418Z" fill="#5687F0"/>
                                </svg>
                            </button>
                            <p>24 Maret 2025</p><p>•</p><p>12:57 WIB</p>
                        </div>
                    </div>
                </div>
                <div class="rounded-[12px] overflow-hidden text-white cursor-pointer space-y-[16px] w-full">
                    <img class="rounded-[7.5px] object-cover" src="/img/streaming-img-rec-2.webp" alt="">
                    <div class="flex flex-col justify-center items-start gap-[8px]">
                        <p class="font-poppins font-medium text-[#1C1C1C] text-[13.8px] line-clamp-2 overflow-hidden text-ellipsis">Resep Nasi Bali & Avocado Coffee | Masak Everyhwhere Btv</p>
                        <div class="flex justify-center items-center gap-[7px] text-[#4D4D4D] font-poppins text-[12.3px] font-normal">
                            <button id="scrollLeft" class="p-2 bg-[#EEF3FE] text-white rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="17" viewBox="0 0 15 17" fill="none">
                                    <path d="M0.847168 0.253418L14.6433 8.44488L0.847168 16.6363V0.253418Z" fill="#5687F0"/>
                                </svg>
                            </button>
                            <p>24 Maret 2025</p><p>•</p><p>12:57 WIB</p>
                        </div>
                    </div>
                </div> 
                <div class="rounded-[12px] overflow-hidden text-white cursor-pointer space-y-[16px] w-full">
                    <img class="rounded-[7.5px] object-cover" src="/img/streaming-img-rec-2.webp" alt="">
                    <div class="flex flex-col justify-center items-start gap-[8px]">
                        <p class="font-poppins font-medium text-[#1C1C1C] text-[13.8px] line-clamp-2 overflow-hidden text-ellipsis">Resep Nasi Bali & Avocado Coffee | Masak Everyhwhere Btv</p>
                        <div class="flex justify-center items-center gap-[7px] text-[#4D4D4D] font-poppins text-[12.3px] font-normal">
                            <button id="scrollLeft" class="p-2 bg-[#EEF3FE] text-white rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="17" viewBox="0 0 15 17" fill="none">
                                    <path d="M0.847168 0.253418L14.6433 8.44488L0.847168 16.6363V0.253418Z" fill="#5687F0"/>
                                </svg>
                            </button>
                            <p>24 Maret 2025</p><p>•</p><p>12:57 WIB</p>
                        </div>
                    </div>
                </div> 
                <div class="rounded-[12px] overflow-hidden text-white cursor-pointer space-y-[16px] w-full">
                    <img class="rounded-[7.5px] object-cover" src="/img/streaming-img-rec-2.webp" alt="">
                    <div class="flex flex-col justify-center items-start gap-[8px]">
                        <p class="font-poppins font-medium text-[#1C1C1C] text-[13.8px] line-clamp-2 overflow-hidden text-ellipsis">Resep Nasi Bali & Avocado Coffee | Masak Everyhwhere Btv</p>
                        <div class="flex justify-center items-center gap-[7px] text-[#4D4D4D] font-poppins text-[12.3px] font-normal">
                            <button id="scrollLeft" class="p-2 bg-[#EEF3FE] text-white rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="17" viewBox="0 0 15 17" fill="none">
                                    <path d="M0.847168 0.253418L14.6433 8.44488L0.847168 16.6363V0.253418Z" fill="#5687F0"/>
                                </svg>
                            </button>
                            <p>24 Maret 2025</p><p>•</p><p>12:57 WIB</p>
                        </div>
                    </div>
                </div>
                <div class="rounded-[12px] overflow-hidden text-white cursor-pointer space-y-[16px] w-full">
                    <img class="rounded-[7.5px] object-cover" src="/img/streaming-img-rec-2.webp" alt="">
                    <div class="flex flex-col justify-center items-start gap-[8px]">
                        <p class="font-poppins font-medium text-[#1C1C1C] text-[13.8px] line-clamp-2 overflow-hidden text-ellipsis">Resep Nasi Bali & Avocado Coffee | Masak Everyhwhere Btv</p>
                        <div class="flex justify-center items-center gap-[7px] text-[#4D4D4D] font-poppins text-[12.3px] font-normal">
                            <button id="scrollLeft" class="p-2 bg-[#EEF3FE] text-white rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="17" viewBox="0 0 15 17" fill="none">
                                    <path d="M0.847168 0.253418L14.6433 8.44488L0.847168 16.6363V0.253418Z" fill="#5687F0"/>
                                </svg>
                            </button>
                            <p>24 Maret 2025</p><p>•</p><p>12:57 WIB</p>
                        </div>
                    </div>
                </div> 
                <div class="rounded-[12px] overflow-hidden text-white cursor-pointer space-y-[16px] w-full">
                    <img class="rounded-[7.5px] object-cover" src="/img/streaming-img-rec-2.webp" alt="">
                    <div class="flex flex-col justify-center items-start gap-[8px]">
                        <p class="font-poppins font-medium text-[#1C1C1C] text-[13.8px] line-clamp-2 overflow-hidden text-ellipsis">Resep Nasi Bali & Avocado Coffee | Masak Everyhwhere Btv</p>
                        <div class="flex justify-center items-center gap-[7px] text-[#4D4D4D] font-poppins text-[12.3px] font-normal">
                            <button id="scrollLeft" class="p-2 bg-[#EEF3FE] text-white rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="17" viewBox="0 0 15 17" fill="none">
                                    <path d="M0.847168 0.253418L14.6433 8.44488L0.847168 16.6363V0.253418Z" fill="#5687F0"/>
                                </svg>
                            </button>
                            <p>24 Maret 2025</p><p>•</p><p>12:57 WIB</p>
                        </div>
                    </div>
                </div> 
            </div>
        <!-- </div> -->
    </div>
</section>
<?= $this->endSection(); ?>