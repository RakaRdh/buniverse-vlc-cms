<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section class="relative bg-white font-poppins bg-[url('/img/header-about.webp')] bg-cover bg-top bg-no-repeat">
    <div class="lg:pt-[80px] pt-[80px] lg:pb-[56px] pb-[56px] lg:px-[80px] px-[16px]">
        <div class="lg:max-w-[1440px] w-full mx-auto flex flex-col justify-center items-start">
            <div class="flex flex-row justify-center items-center text-white gap-[8px] h-[72px] lg:text-[16px] text-[12px]">
                <a href="/#home"><p class="font-normal">Home</p></a>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.045 7.28526L6.27556 3.51333L5.33337 4.45615L8.63168 7.75667L5.33337 11.0572L6.27556 12L10.045 8.22807C10.1699 8.10304 10.24 7.93347 10.24 7.75667C10.24 7.57986 10.1699 7.4103 10.045 7.28526Z" fill="white"/>
                </svg>
                <p class="font-semibold">About Us</p>
            </div>
            <div class="lg:max-w-[850px] flex flex-col justify-center lg:items-center items-start text-white lg:gap-[24px] gap-[12px] lg:h-[104px] mx-auto">
                <p class="lg:text-[40px] text-[20px] font-bold text-center">About Us</p>
            </div>
        </div>
    </div>
</section>
<!-- <section class="relative lg:max-h-[1280px] lg:h-[95vw] h-[90vw] bg-white font-poppins">
    <div class="bg-[url('/img/home-bg-main.webp')] bg-cover bg-no-repeat lg:pt-[114px] pt-[40px] lg:pb-[80px] pb-[40px] lg:px-[80px] px-[16px] lg:rounded-bl-[150px] rounded-bl-[50px] lg:rounded-br-[150px] rounded-br-[50px] lg:h-[800px] h-[300px]">
        <div class="lg:max-w-[1440px] w-full mx-auto flex flex-col justify-center items-start">
            <div class="flex flex-row justify-center items-center text-white gap-[8px] h-[72px] lg:text-[16px] text-[12px]">
                <p class="text-normal">Home</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.045 7.28526L6.27556 3.51333L5.33337 4.45615L8.63168 7.75667L5.33337 11.0572L6.27556 12L10.045 8.22807C10.1699 8.10304 10.24 7.93347 10.24 7.75667C10.24 7.57986 10.1699 7.4103 10.045 7.28526Z" fill="white"/>
                </svg>
                <p class="text-semibold">About Us</p>
            </div>
            <p class="lg:text-[48px] text-[20px] text-white font-bold lg:mt-[18px]">About Us</p>
        </div>
        
        <div class="relative inset-x-0 lg:top-[70px] top-[15%] flex justify-center z-[1]">
            <div class="relative w-full max-w-[1280px]">
                <div class="relative rounded-[20px] overflow-hidden bg-white border lg:border-[20px] border-[14px] border-white shadow-xl">
                    <img 
                        src="/img/about-img-btv.webp" 
                        alt="Live Streaming"
                        class="w-full h-auto object-cover lg:rounded-[20px] rounded-[18px]"
                    />
                </div>
            </div>
        </div>
    </div>
</section> -->
<section class="relative h-full bg-white lg:pt-[80px] lg:pb-[80px] lg:px-[80px] pt-[16px] pb-[40px] px-[16px]">
    <div class="lg:max-w-[1440px] relative w-full block mx-auto font-poppins lg:space-y-[80px] space-y-[20px]">        
        <div class="flex lg:flex-row flex-col justify-between items-center lg:gap-[80px] gap-[24px]">
            <div class="w-full">
                <img src="/img/about-img-btv2.webp" alt="About BTV" class="w-[600px] rounded-2xl">
            </div>
            <div class="w-full lg:space-y-[24px] space-y-[24px]">
                <div class="flex lg:flex-row justify-start items-center lg:gap-[32px] gap-[16px]">
                    <img src="/img/home-logo-btv-color.webp" alt="BTV Logo" class="lg:h-[88.5px] h-[47.99px] w-auto">
                    <p class="lg:text-[20px] text-[14px] text-[#5687F0] font-semibold leading-8">Televisi Paling Menghibur</p>
                </div>
                <!-- <img src="/img/home-logo-btv-color.webp" alt="BTV Logo" class="hidden lg:block h-[88.5px] w-auto"> -->
                <p class="lg:text-[18px] text-[14px] text-[#333333] font-normal leading-8">BTV adalah sebuah jaringan televisi swasta digital di Indonesia yang dimiliki oleh B Universe. Jaringan ini bermula dari saluran yang berfokus pada penonton televisi berlangganan dan kalangan menengah ke atas. Sempat berganti nama, nama BTV mulai digunakan pada 11 Oktober 2022, dan siarannya mulai dapat disaksikan di berbagai daerah di Indonesia</p>
            </div>
        </div>
        <div class="flex lg:flex-row flex-col justify-between items-center gap-[40px]">
            <div class="w-full bg-[#EEF3FE] rounded-[20px] lg:p-[40px] p-[16px] lg:space-y-[24px] space-y-[12px]">
                <div class="flex flex-row justify-start items-center text-[#5687F0] font-poppins lg:text-[32px] text-[20px] font-semibold gap-[16px] lg:px-[16px] px-[0px] py-[8px]">
                    <img src="/img/about-icon-vision.webp" alt="Vision" class="w-[40px] h-[18px]">
                    <p>Vision</p>
                </div>
                <p class="lg:text-[20px] text-[14px] leading-8 text-[#333333]">Lorem ipsum dolor sit amet consectetur. Lorem eget quisque nisl faucibus purus malesuada. Nibh mauris eget euismod quam amet metus. Nulla risus at id ultrices proin sed. Eget egestas pellentesque quis mauris amet.</p>
            </div>
            <div class="w-full bg-[#EEF3FE] rounded-[20px] lg:p-[40px] p-[16px] lg:space-y-[24px] space-y-[12px]">
                <div class="flex flex-row justify-start items-center text-[#5687F0] font-poppins lg:text-[32px] text-[20px] font-semibold gap-[16px] lg:px-[16px] px-[0px] py-[8px]">
                    <img src="/img/about-icon-mission.webp" alt="Mission" class="w-[40px] h-[37px]">
                    <p>Mission</p>
                </div>
                <p class="lg:text-[20px] text-[14px] leading-8 text-[#333333]">Lorem ipsum dolor sit amet consectetur. Lorem eget quisque nisl faucibus purus malesuada. Nibh mauris eget euismod quam amet metus. Nulla risus at id ultrices proin sed. Eget egestas pellentesque quis mauris amet.</p>
            </div>
        </div>
    </div>
</section>
<section class="relative h-full bg-white lg:py-[80px] lg:px-[80px] py-[40px] px-[16px]">
    <div class="lg:max-w-[1440px] relative w-full block mx-auto font-poppins">
        <div class="flex flex-col justify-center items-center gap-[16px] pb-[93px]">
            <p class="lg:text-[40px] text-[20px] text-[#1C1C1C] font-bold">Management BTV</p>
        </div>
        <div class="pt-10 relative">
            <div id="org-chart" class="relative flex flex-col items-center lg:gap-20 gap-12">
                <!-- SVG Layer for lines -->
                <svg id="connection-lines" class="absolute top-0 left-0 w-full h-full pointer-events-none z-0"></svg>

                <!-- Top Node -->
                <div class="org-node text-center z-10 lg:max-w-[360px] max-w-[140px] lg:w-[360px] w-[140px] bg-white lg:p-[10px] p-[2px]" data-id="enggar">
                    <div class="relative bg-[#5687F0]/10 lg:rounded-[16px] rounded-[8px] border-[1px] border-[#5687F0] lg:px-[20px] px-[12px] lg:pt-[48px] pt-[12px] lg:pb-[19px] pb-[8px]">
                        <img class="lg:absolute relative lg:top-[-40px] left-1/2 -translate-x-1/2 lg:w-20 w-16 lg:h-20 h-16 rounded-full border-4 border-white shadow-md" src="/img/EnggartiastoLukita.webp" alt="Enggartiasto Lukita">
                        <div class="mt-3 lg:space-y-[8px] space-y-[4px] leading-5">
                            <p class="lg:text-[20px] text-[12px] font-semibold text-[#1C1C1C]">Enggartiasto Lukita</p>
                            <p class="lg:text-[16px] text-[10px] font-medium text-[#4D4D4D]">Executive Chairman</p>
                        </div>
                    </div>
                </div>

                <!-- Mid Level -->
                <div class="flex flex-wrap justify-center lg:gap-[69px] gap-[12px] lg:mt-4">
                    <!-- RIO -->
                    <div class="org-node text-center z-10 lg:max-w-[360px] max-w-[140px] lg:w-[360px] w-[140px] bg-white lg:p-[10px] p-[2px]" data-id="rio">
                        <div class="relative bg-[#5687F0]/10 lg:rounded-[16px] rounded-[8px] border-[1px] border-[#5687F0] lg:px-[20px] px-[12px] lg:pt-[48px] pt-[12px] lg:pb-[19px] pb-[8px]">
                            <img class="lg:absolute relative lg:top-[-40px] left-1/2 -translate-x-1/2 lg:w-20 w-16 lg:h-20 h-16 rounded-full border-4 border-white shadow" src="/img/RioAbdurachman.webp" alt="Rio Abdurachman">
                            
                            <div class="mt-3 lg:space-y-[8px] space-y-[4px] leading-5">
                                <p class="lg:text-[20px] text-[12px] font-semibold text-[#1C1C1C]">Rio Abdurachman</p>
                                <p class="lg:text-[16px] text-[10px] font-medium text-[#4D4D4D]">Direktur Utama</p>
                            </div>
                        </div>
                    </div>

                    <!-- Apreyvita -->
                    <div class="org-node text-center z-10 lg:max-w-[360px] max-w-[140px] lg:w-[360px] w-[140px] bg-white lg:p-[10px] p-[2px]" data-id="apreyvita">
                        <div class="relative bg-[#5687F0]/10 lg:rounded-[16px] rounded-[8px] border-[1px] border-[#5687F0] lg:px-[20px] px-[12px] lg:pt-[48px] pt-[12px] lg:pb-[19px] pb-[8px]">
                            <img class="lg:absolute relative lg:top-[-40px] left-1/2 -translate-x-1/2 lg:w-20 w-16 lg:h-20 h-16 rounded-full border-4 border-white shadow" src="/img/ApreyvitaDWulansari.webp" alt="Apreyvita D Wulansari">
                            
                            <div class="mt-3 lg:space-y-[8px] space-y-[4px] leading-5">
                                <p class="lg:text-[20px] text-[12px] font-semibold text-[#1C1C1C]">Apreyvita D Wulansari</p>
                                <p class="lg:text-[16px] text-[10px] font-medium text-[#4D4D4D]">Wakil Direktur Utama</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lower Level -->
                <div class="flex lg:flex-row flex-col flex-wrap justify-center lg:gap-[69px] gap-[12px] lg:mt-4">
                    <!-- Tania -->
                    <div class="org-node text-center z-10 lg:max-w-[360px] max-w-[140px] lg:w-[360px] w-[140px] bg-white lg:p-[10px] p-[2px]" data-id="tania">
                        <div class="relative bg-[#5687F0]/10 lg:rounded-[16px] rounded-[8px] border-[1px] border-[#5687F0] lg:px-[20px] px-[12px] lg:pt-[48px] pt-[12px] lg:pb-[19px] pb-[8px]">
                            <img class="lg:absolute relative lg:top-[-40px] left-1/2 -translate-x-1/2 lg:w-20 w-16 lg:h-20 h-16 rounded-full border-4 border-white shadow" src="/img/TaniaKirana.webp" alt="Tania Kirana">
                            
                            <div class="mt-3 lg:space-y-[8px] space-y-[4px] leading-5">
                                <p class="lg:text-[20px] text-[12px] font-semibold text-[#1C1C1C]">Tania Kirana</p>
                                <p class="lg:text-[16px] text-[10px] font-medium text-[#4D4D4D]">Direktur Keuangan dan Operasional</p>
                            </div>
                        </div>
                    </div>

                    <!-- Melly -->
                    <div class="org-node text-center z-10 lg:max-w-[360px] max-w-[140px] lg:w-[360px] w-[140px] bg-white lg:p-[10px] p-[2px]" data-id="melly">
                        <div class="relative bg-[#5687F0]/10 lg:rounded-[16px] rounded-[8px] border-[1px] border-[#5687F0] lg:px-[20px] px-[12px] lg:pt-[48px] pt-[12px] lg:pb-[19px] pb-[8px]">
                            <img class="lg:absolute relative lg:top-[-40px] left-1/2 -translate-x-1/2 lg:w-20 w-16 lg:h-20 h-16 rounded-full border-4 border-white shadow" src="/img/MellyMarliani.webp" alt="Melly Marliani">
                            
                            <div class="mt-3 lg:space-y-[8px] space-y-[4px] leading-5">
                                <p class="lg:text-[20px] text-[12px] font-semibold text-[#1C1C1C]">Melly Marliani</p>
                                <p class="lg:text-[16px] text-[10px] font-medium text-[#4D4D4D]">Direktur Bisnis</p>
                            </div>
                        </div>
                    </div>

                    <!-- Patricia -->
                    <div class="org-node text-center z-10 lg:max-w-[360px] max-w-[140px] lg:w-[360px] w-[140px] bg-white lg:p-[10px] p-[2px]" data-id="patricia">
                        <div class="relative bg-[#5687F0]/10 lg:rounded-[16px] rounded-[8px] border-[1px] border-[#5687F0] lg:px-[20px] px-[12px] lg:pt-[48px] pt-[12px] lg:pb-[19px] pb-[8px]">
                            <img class="lg:absolute relative lg:top-[-40px] left-1/2 -translate-x-1/2 lg:w-20 w-16 lg:h-20 h-16 rounded-full border-4 border-white shadow" src="/img/img-user-default.webp" alt="Patricia Tambunan">
                            
                            <div class="mt-3 lg:space-y-[8px] space-y-[4px] leading-5">
                                <p class="lg:text-[20px] text-[12px] font-semibold text-[#1C1C1C]">Patricia Tambunan</p>
                                <p class="lg:text-[16px] text-[10px] font-medium text-[#4D4D4D]">Direktur Legal</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-[104px]">
            <div class="flex flex-col justify-center items-center gap-[16px] pb-[93px]">
                <p class="lg:text-[40px] text-[20px] text-[20px] text-[#1C1C1C] font-bold">Redaksi BTV</p>
            </div>
            <div class="flex flex-col justify-between items-start gap-[40px]">
                <div class="space-y-[16px] lg:text-[18px] text-[14px] leading-8">
                    <p><b>Pemimpin Redaksi: </b>Syukri Rahmatullah</p>
                    <p><b>Wakil Pemimpin Redaksi: </b>Anselmus Bata</p>
                    <p><b>Redaktur Pelaksana: </b>Haris Mahardiansyah</p>
                    <p><b>Koordinator Gabungan (Korgab): </b>Andi Dewanto</p>
                </div>
                <div class="flex lg:flex-row flex-col justifty-between items-start lg:gap-[80px] gap-[16px] lg:text-[18px] text-[14px] leading-8">
                    <div class="space-y-[16px]">
                        <div class="space-y-[8px]">
                            <p><b>Editor:</b></p>
                            <p>Alfi Dinilhaq, Bernadus Wijayaka, Djibril Muhammad, Faisal Maliki Baskoro, Herman, Iman Rahman Cahyadi, Jaja Suteja, Jayanty Nada Shofa, Johnny Johan Sompotan, Surya Lesmana, Thomas Rizal</p>
                        </div>
                        <div class="space-y-[8px]">
                            <p><b>Search Engine Optimization (SEO):</b></p>
                            <p>Rizki Hidayat, Aditya Pratama, Tachta Citra Elfira, Muhammad Firman</p>
                        </div>
                        <div class="space-y-[8px]">
                            <p><b>Koordinator Liputan (Korlip):</b></p>
                            <p>Amin Subarkah, Albert Williancoen, Ayos, Djaka Riyanto Dwi Saputro, Fahmy Haerudin Sumarna, Joidy K Dompas, Maria Fatima Bona, Unggul Wirawan</p>
                        </div>
                        <div class="space-y-[8px]">
                            <p><b>Reporter B-Universe:</b></p>
                            <p>Agnes Valentina Christa, Alfida Rizky Febrianna, Andrea Arshirena Hosana, Anisa Fauziah, Basudiwa Supraja Sangga Buana, Bella Evanglista Mikaputri, Celvin Moniaga Sipahutar, Chairul Fikri, Ghafur Fadillah, Hendro Situmorang, Ichsan Ali</p>
                        </div>
                        <div class="space-y-[8px]">
                            <p><b>Cameraperson B-Universe:</b></p>
                            <p>Ade Suherman, Daffa Sidqi Kahfiari, Eko Miyadi, Farissa Elvandini, Gilang Rachmat, Hidayat Syarif, Indra Bramantyo, Joseph Kharis Kowel, Mas Tommy Pribadi Zakaria</p>
                        </div>
                    </div>
                    <div class="space-y-[16px]">
                        <div class="space-y-[8px]">
                            <p><b>Kontributor B-Universe:</b></p>
                            <p>Abdul Alim, Achmad Ali, Achmad Fauzi, Achmad Supriyadi, Adean Mustapa, Aep, Agung Dharma, Ahmad Rifqi Badruzzaman, Ahmad Rifqi Danwanus Khalwani, Ahmad Shoim, Albertus Pepi Kurniawan, Algi Muhamad Gifari, Alif Hidayatullah</p>
                        </div>
                        <div class="space-y-[8px]">
                            <p><b>Fotografer:</b></p>
                            <p>Uning Heri Gagarin (Koordinator), David Gita Roza, Joanito de Saojoao, Uthan A Rachim</p>
                        </div>
                        <div class="space-y-[8px]">
                            <p><b>Social Media and Digital Production:</b></p>
                            <p>Aprilius Raka, Aichi Halik, Anindyo Gagas Setyawan, Tesalonica, Rifdah Khansah, Stefanus Anugrah Risantojati, Nabila Insara, Eko Wicaksono, Feby Harmadi Rambe, Rendi Herfan, Salman Alfarisi, Zumrotul Muslimin</p>
                        </div>
                        <div class="space-y-[8px]">
                            <p><b>Sekretaris Redaksi:</b></p>
                            <p>Suryani Belsyda (Head Of Secretariat) Fisyana Syamniar, Fransiscus Nurwijaya, Reza Rizki Perada, Tri Utami Rahayu</p>
                        </div>
                        <div class="space-y-[8px]">
                            <p><b>Litbang (BeritaSatu Research):</b></p>
                            <p>Ihsan Hadi, Widya Astuti</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="relative h-full bg-[url('/img/bg-our-activites.webp')] bg-cover bg-no-repeat">
    <div class="lg:max-w-[1440px] relative w-full block mx-auto font-poppins space-y-[80px] lg:px-[80px] min-[1540px]:px-[0px] px-[16px] lg:py-[80px] py-[40px] lg:pb-[64px] pb-[40px]">        
        <div class="flex flex-row justify-between items-center lg:gap-[24px] gap-[16px] text-white">
            <p class="font-poppins lg:text-[40px] text-[20px] font-bold">Our Activities</p>
            <div class="flex justify-between items-center pointer-events-none gap-[20px]">
                <button id="scrollLeft" class="pointer-events-auto p-2 bg-white text-[#DA2328] rounded-full shadow hover:bg-gray-100 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="lg:w-[32px] w-[18px] lg:h-[32px] h-[18px]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button id="scrollRight" class="pointer-events-auto p-2 bg-white text-[#DA2328] rounded-full shadow hover:bg-gray-100 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="lg:w-[32px] w-[18px] lg:h-[32px] h-[18px]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
            <!-- <p class="lg:text-[20px] text-[14px] leading-8">Lorem ipsum dolor sit amet consectetur. Lorem eget quisque nisl faucibus purus malesuada. Nibh mauris eget euismod quam amet metus. Nulla risus at id ultrices proin sed. Eget egestas pellentesque quis mauris amet.</p> -->
        </div>
    </div>
    <!-- <div class="lg:pl-[80px] pl-[16px] pb-[8px]">
        <div id="channelList" class="flex items-center overflow-x-auto no-scrollbar flex-1 scroll-smooth gap-[39px]">
            <?php
            $activities = [
                ['id' => '1', 'image' => 'about-img-btv.webp'],
                ['id' => '2', 'image' => 'about-img-btv2.webp'],
                ['id' => '3', 'image' => 'about-img-btv.webp'],
                ['id' => '4', 'image' => 'about-img-btv2.webp'],
                ['id' => '5', 'image' => 'about-img-btv.webp'],
                ['id' => '6', 'image' => 'about-img-btv2.webp'],
                ['id' => '7', 'image' => 'about-img-btv.webp'],
                ['id' => '8', 'image' => 'about-img-btv2.webp'],
                ['id' => '9', 'image' => 'about-img-btv.webp'],
            ];
            foreach ($activities as $activity): ?>
                <div class="flex flex-col items-center justify-center text-center whitespace-nowrap flex-shrink-0 leading-6 h-full last:pr-[24px]">
                    <img src="/img/<?= $activity['image'] ?>" alt="Activity Image" class="lg:w-[601px] w-[297px] lg:h-[338px] h-[167px] object-cover object-top object-no-repeat rounded-[8px]">
                </div>
            <?php endforeach; ?>
        </div>

        <div class="relative flex justify-between lg:bottom-[210px] bottom-[100px] items-center gap-[16px] px-[24px]">
            <button id="scrollLeft" class="p-2 bg-[#DA2328] text-white rounded-full shadow hover:bg-red-600 transition disabled:opacity-0 disabled:cursor-not-allowed">
                <svg xmlns="http://www.w3.org/2000/svg" class="lg:h-[64px] h-[20px] lg:w-[64px] w-[20px]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <button id="scrollRight" class="p-2 bg-[#DA2328] text-white rounded-full shadow hover:bg-red-600 transition disabled:opacity-0 disabled:cursor-not-allowed">
                <svg xmlns="http://www.w3.org/2000/svg" class="lg:h-[64px] h-[20px] lg:w-[64px] w-[20px]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>
    </div> -->

    <div class="relative pb-[80px] max-w-full overflow-hidden">
        <!-- Fade Left -->
        <!-- <div class="pointer-events-none absolute top-0 left-0 h-full w-24 z-10 bg-gradient-to-r from-black to-transparent"></div> -->

        <!-- Fade Right -->
        <!-- <div class="pointer-events-none absolute top-0 right-0 h-full w-24 z-10 bg-gradient-to-l from-black to-transparent"></div> -->

        <!-- Scrollable Content -->
        <div id="channelList" class="flex items-center overflow-x-auto no-scrollbar scroll-smooth lg:gap-[32px] gap-[2px] snap-x snap-mandatory px-0">

            <!-- Left Spacer -->
            <div class="w-[50%] flex-shrink-0"></div>
            <?php
            $activities = [
                ['id' => '1', 'image' => 'about-img-btv.webp'],
                ['id' => '2', 'image' => 'about-img-btv2.webp'],
                ['id' => '3', 'image' => 'about-img-btv.webp'],
                ['id' => '4', 'image' => 'about-img-btv2.webp'],
                ['id' => '5', 'image' => 'about-img-btv.webp'],
                ['id' => '6', 'image' => 'about-img-btv2.webp'],
                ['id' => '7', 'image' => 'about-img-btv.webp'],
                ['id' => '8', 'image' => 'about-img-btv2.webp'],
                ['id' => '9', 'image' => 'about-img-btv.webp'],
            ];

            foreach ($activities as $index => $activity): ?>
                <div data-index="<?= $index ?>" class="carousel-item relative snap-center flex-shrink-0 transition-all duration-500 w-[297px] lg:w-[716px] scale-75 opacity-100">
                    <img src="/img/<?= $activity['image'] ?>" alt="Activity Image"
                        class="w-full h-[167px] lg:h-[403px] object-cover object-top rounded-[8px]" />
                    <div class="overlay absolute inset-0 bg-black/60 rounded-[8px] pointer-events-none"></div>
                </div>
            <?php endforeach; ?>
            <!-- Right Spacer -->
            <div class="w-[50%] flex-shrink-0"></div>
        </div>

        <!-- Buttons -->
        <!-- <div class="absolute inset-0 flex justify-between items-center px-[24px] z-20 pointer-events-none">
            <button id="scrollLeft" class="pointer-events-auto p-2 bg-[#DA2328] text-white rounded-full shadow hover:bg-red-600 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="lg:h-[64px] h-[20px] lg:w-[64px] w-[20px]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <button id="scrollRight" class="pointer-events-auto p-2 bg-[#DA2328] text-white rounded-full shadow hover:bg-red-600 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="lg:h-[64px] h-[20px] lg:w-[64px] w-[20px]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div> -->
    </div>
</section>

<style>
  .line-path {
    stroke: #d1d5db;
    stroke-width: 2;
    fill: none;
    stroke-linecap: round;
    stroke-linejoin: round;
    stroke-dasharray: 1000;
    stroke-dashoffset: 1000;
    animation: draw-line 1.2s ease forwards;
  }

  @keyframes draw-line {
    to {
      stroke-dashoffset: 0;
    }
  }
</style>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const connections = [
            ["enggar", "rio"],
            ["rio", "apreyvita"],
            ["rio", "tania"],
            ["rio", "melly"],
            ["rio", "patricia"]
        ];

        function drawConnections() {
            const svg = document.getElementById("connection-lines");
            svg.innerHTML = "";
            const svgRect = svg.getBoundingClientRect();
            const isMobile = window.innerWidth < 1024;
            const curveSize = 16;

            connections.forEach(([fromId, toId]) => {
                const fromEl = document.querySelector(`[data-id="${fromId}"]`);
                const toEl = document.querySelector(`[data-id="${toId}"]`);
                if (!fromEl || !toEl) return;

                const fromRect = fromEl.getBoundingClientRect();
                const toRect = toEl.getBoundingClientRect();

                let startX, startY, endX, endY;

                if (fromId === "rio" && ["tania", "melly", "patricia"].includes(toId) && isMobile) {
                    // Keluar dari bottom-left Rio, masuk ke mid-left target
                    startX = fromRect.left - svgRect.left + 25; // sedikit ke kiri dari sisi kiri Rio
                    startY = fromRect.bottom - svgRect.top;

                    endX = toRect.left - svgRect.left; // sisi kiri target
                    endY = toRect.top + toRect.height / 2 - svgRect.top; // tengah vertikal target

                    const midY = startY + (endY - startY) / 2;

                    const pathData = [
                        `M ${startX},${startY}`,
                        `L ${startX},${endY - curveSize}`,
                        `Q ${startX},${endY} ${startX + curveSize},${endY}`,
                        `L ${endX - curveSize},${endY}`,
                        `Q ${endX},${endY} ${endX},${endY}`,
                        // `L ${endX},${endY}`
                    ].join(" ");

                    const path = document.createElementNS("http://www.w3.org/2000/svg", "path");
                    path.setAttribute("d", pathData);
                    path.setAttribute("class", "line-path");
                    svg.appendChild(path);
                    return;
                }

                // Default titik: dari tengah bawah node asal ke tengah atas node tujuan
                startX = fromRect.left + fromRect.width / 2 - svgRect.left;
                startY = fromRect.bottom - svgRect.top;
                endX = toRect.left + toRect.width / 2 - svgRect.left;
                endY = toRect.top - svgRect.top;

                let pathData = "";

                if (fromId === "rio" && toId === "apreyvita") {
                    const centerFromY = fromRect.top + fromRect.height / 2 - svgRect.top;
                    const centerToY = toRect.top + toRect.height / 2 - svgRect.top;
                    pathData = `M ${startX},${centerFromY} L ${endX},${centerToY}`;
                } else if (Math.abs(endX - startX) < 10) {
                    pathData = [
                        `M ${startX},${startY}`,
                        `L ${startX},${endY - curveSize}`,
                        `Q ${startX},${endY} ${startX + curveSize},${endY}`,
                        `L ${endX},${endY}`
                    ].join(" ");
                } else if (endX > startX) {
                    pathData = [
                        `M ${startX},${startY}`,
                        `L ${startX},${startY + curveSize}`,
                        `Q ${startX},${startY + curveSize * 2} ${startX + curveSize},${startY + curveSize * 2}`,
                        `L ${endX - curveSize},${startY + curveSize * 2}`,
                        `Q ${endX},${startY + curveSize * 2} ${endX},${startY + curveSize * 3}`,
                        `L ${endX},${endY}`
                    ].join(" ");
                } else {
                    pathData = [
                        `M ${startX},${startY}`,
                        `L ${startX},${startY + curveSize}`,
                        `Q ${startX},${startY + curveSize * 2} ${startX - curveSize},${startY + curveSize * 2}`,
                        `L ${endX + curveSize},${startY + curveSize * 2}`,
                        `Q ${endX},${startY + curveSize * 2} ${endX},${startY + curveSize * 3}`,
                        `L ${endX},${endY}`
                    ].join(" ");
                }

                const path = document.createElementNS("http://www.w3.org/2000/svg", "path");
                path.setAttribute("d", pathData);
                path.setAttribute("class", "line-path");
                svg.appendChild(path);
            });
        }

        drawConnections();
        window.addEventListener("resize", drawConnections);
    });
</script>
<?= $this->endSection(); ?>