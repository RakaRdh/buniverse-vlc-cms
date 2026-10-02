<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section id="home" class="relative h-full overflow-hidden bg-[url('/img/hero-home.webp')] bg-cover bg-no-repeat lg:pt-[80px] lg:pb-[80px] pt-[80px] pb-[40px] lg:pl-[70px] pl-[16px] lg:pr-[41px] pr-[16px]">
    <div class="lg:max-w-[1440px] relative w-full block mx-auto font-poppins">
        <div class="flex flex-row justify-start items-center text-white gap-[8px] h-[72px] lg:text-[16px] text-[12px] lg:mt-[40px] ">
            <a href="/#home"><p class="font-normal">Home</p></a>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.045 7.28526L6.27556 3.51333L5.33337 4.45615L8.63168 7.75667L5.33337 11.0572L6.27556 12L10.045 8.22807C10.1699 8.10304 10.24 7.93347 10.24 7.75667C10.24 7.57986 10.1699 7.4103 10.045 7.28526Z" fill="white"/>
            </svg>
            <a href="/programs"><p class="font-normal">Programs</p></a>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.045 7.28526L6.27556 3.51333L5.33337 4.45615L8.63168 7.75667L5.33337 11.0572L6.27556 12L10.045 8.22807C10.1699 8.10304 10.24 7.93347 10.24 7.75667C10.24 7.57986 10.1699 7.4103 10.045 7.28526Z" fill="white"/>
            </svg>
            <p class="font-semibold">Detail Programs</p>
        </div>
        <div class="flex items-center justify-center lg:min-h-[750px] h-full w-full">
            <div class="relative overflow-hidden w-full">
                <div class="flex transition-transform duration-700 ease-out">
                    <div class="min-w-full flex items-center justify-between w-full">
                        <div class="flex lg:flex-row flex-col lg:gap-[100px] gap-[24px] justify-between items-center w-full lg:min-h-[750px] h-full">
                            <div class="block lg:hidden relative">
                                <img src="<?= base_url('/img/home-jalan-dakwah.webp') ?>" alt="Jalan Dakwah" class="w-[600px] rounded-2xl drop-shadow-xl px-[30px] pt-[45px]">
                            </div>
                            <div class="text-white lg:max-w-[501px] w-full">
                                <h2 class="lg:text-[40px] text-[20px] font-bold mb-4">Jalan Dakwah</h2>
                                <p class="lg:text-[20px] text-[14px] leading-8 mb-6">
                                    Program Jalan Dakwah adalah sebuah tayangan di BTV yang mengupas berbagai topik inspiratif dan edukatif terkait ajaran Islam. 
                                </p>
                                <div class="bg-white lg:text-[20px] text-[#1C1C1C] lg:px-[24px] px-[16px] lg:py-[26px] py-[10px] rounded-tr-[20px] rounded-br-[20px] shadow mb-6 border-l-8 border-red-500 lg:h-[120px] space-y-[16px]">
                                    <p class="lg:text-[20px] text-[12px] font-medium">Setiap Hari</p>
                                    <p class="lg:text-[20px] text-[14px] font-bold">Pukul 07.30 & 14.45 WIB</p>
                                </div>
                                <div class="flex gap-[16px] lg:text-[20px] text-[16px] font-medium">
                                    <button class="lg:w-[240px] w-full lg:h-[56px] h-full bg-[#DA2328] text-white font-normal lg:py-2 py-[12px] lg:px-7 px-[16px] rounded-full flex lg:justify-start justify-center items-center gap-[16px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="19" viewBox="0 0 16 19" fill="none" class="lg:w-[16px] w-[10px] lg:h-[19px] h-[12px]">
                                            <path d="M1.66667 1.91443L15 9.91443L1.66667 17.9144V1.91443Z" fill="white" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        Preview
                                    </button>
                                </div>
                            </div>
                            <div class="hidden lg:block relative">
                                <img src="<?= base_url('/img/home-jalan-dakwah.webp') ?>" alt="Jalan Dakwah" class="w-[602px] rounded-2xl drop-shadow-xl px-[20px]">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="relative h-full bg-white lg:py-[80px] lg:px-[80px] py-[40px] px-[16px]">
    <div class="lg:max-w-[1440px] relative w-full block mx-auto font-poppins space-y-[24px]">
        <div class="flex flex-col justify-center lg:items-start items-center gap-[16px]">
            <div class="bg-[#EEF3FE] lg:text-[20px] text-[14px] text-[#5687F0] font-normal lg:px-[16px] px-[12px] py-[8px] lg:w-[194px] w-[136px]">Programs Detail</div>
            <p class="lg:text-[48px] text-[20px] text-[#1C1C1C] font-bold mb-[8px]">Jalan Dakwah</p>
            <p class="lg:text-[20px] text-[14px] text-[#1C1C1C] leading-8 lg:mb-[24px]">Program Jalan Dakwah adalah sebuah tayangan di BTV yang mengupas berbagai topik inspiratif dan edukatif terkait ajaran Islam. Program ini membahas nilai-nilai Islami dan memberikan panduan kepada penonton untuk menjadi pribadi yang lebih baik, tenang, dan bahagia dalam menjalani kehidupan sesuai ajaran agama.
                
                <br><br>Melalui topik seperti tawakal, syukur, dan pola pikir Islami, program ini bertujuan untuk menginspirasi penonton agar dapat menghadapi setiap fase kehidupan dengan penuh keyakinan dan ketenangan jiwa. Tayangan ini juga memberikan perspektif Islami dalam memandang berbagai aspek kehidupan sehari-hari.
                
                <br><br>Program Jalan Dakwah cocok untuk siapa saja yang ingin memperdalam pemahaman tentang Islam dengan cara yang relevan dan aplikatif.
            </p>
            <hr class="lg:mb-[16px]">
        </div>
        <!-- <p class="lg:text-[24px] text-[20px] font-semibold font-poppins">Video Terkait</p> -->
        <div class="flex flex-row gap-[0px] justify-start items-center w-full lg:pb-[24px] pb-[28px]">
            <p class="self-stretch border-[3px] border-[#5687F0]"></p>
            <div class="flex flex-col lg:gap-[12px] gap-[10px] justify-start items-start bg-[#5687F0]/5 py-[8px] px-[20px]">
                <p class="lg:text-[18px] text-[18px] font-semibold font-poppins text-[#1C1C1C] text-center">Video Terkait</p>
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
        <div class="flex flex-row gap-[0px] justify-start items-center w-full lg:pb-[24px] lg:pt-[80px] pt-[28px] pb-[28px]">
            <p class="self-stretch border-[3px] border-[#5687F0]"></p>
            <div class="flex flex-col lg:gap-[12px] gap-[10px] justify-start items-start bg-[#5687F0]/5 py-[8px] px-[20px]">
                <p class="lg:text-[18px] text-[18px] font-semibold font-poppins text-[#1C1C1C] text-center">Program Lainnya</p>
            </div>
        </div>

        <div class="flex flex-col justify-center items-center gap-[16px]">
            <div class="grid grid-cols-2 lg:grid-cols-4 md:grid-cols-3 justify-items-center lg:gap-[42px] gap-[8px]">
                <?php for ($i=0; $i < 3; $i++) : ?>
                <a href="/programs/programs_detail">
                    <div class="overflow-hidden text-[#1C1C1C] cursor-pointer lg:space-y-[20px] space-y-[12px] w-full">
                        <img src="/img/program-img-jalandakwah.webp" alt="Jalan Dakwah" class="rounded-[7.21px]">
                        <p class="text-left lg:text-[25px] text-[14px] p-2 font-semibold">Jalan Dakwah</p>
                    </div>
                </a>
                <a href="/programs/programs_detail">
                    <div class="overflow-hidden text-[#1C1C1C] cursor-pointer lg:space-y-[20px] space-y-[12px] w-full">
                        <img src="/img/program-img-jendeladunia.webp" alt="Jendela Dunia" class="rounded-[7.21px]">
                        <p class="text-left lg:text-[25px] text-[14px] p-2 font-semibold">Jendela Dunia</p>
                    </div>
                </a>
                <a href="/programs/programs_detail">
                    <div class="overflow-hidden text-[#1C1C1C] cursor-pointer lg:space-y-[20px] space-y-[12px] w-full">
                        <img src="/img/program-img-mitos.webp" alt="Mitos" class="rounded-[7.21px]">
                        <p class="text-left lg:text-[25px] text-[14px] p-2 font-semibold">Mitos</p>
                    </div>
                </a>
                <a href="/programs/programs_detail">
                    <div class="overflow-hidden text-[#1C1C1C] cursor-pointer lg:space-y-[20px] space-y-[12px] w-full">
                        <img src="/img/program-img-vacation.webp" alt="Vacation" class="rounded-[7.21px]">
                        <p class="text-left lg:text-[25px] text-[14px] p-2 font-semibold">Vacation</p>
                    </div>
                </a>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>