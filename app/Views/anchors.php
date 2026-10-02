<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section class="relative bg-white font-poppins bg-[url('/img/header-about.webp')] bg-cover bg-no-repeat">
    <div class="lg:pt-[80px] pt-[80px] lg:pb-[56px] pb-[56px] lg:px-[80px] px-[16px]">
        <div class="lg:max-w-[1440px] w-full mx-auto flex flex-col justify-center items-start">
            <div class="flex flex-row justify-center items-center text-white gap-[8px] h-[72px] lg:text-[16px] text-[12px]">
                <a href="/#home"><p class="font-normal">Home</p></a>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.045 7.28526L6.27556 3.51333L5.33337 4.45615L8.63168 7.75667L5.33337 11.0572L6.27556 12L10.045 8.22807C10.1699 8.10304 10.24 7.93347 10.24 7.75667C10.24 7.57986 10.1699 7.4103 10.045 7.28526Z" fill="white"/>
                </svg>
                <p class="font-semibold">Anchors</p>
            </div>
            <div class="lg:max-w-[850px] flex flex-col justify-center lg:items-center items-start text-white lg:gap-[24px] gap-[12px] lg:h-[104px] mx-auto">
                <p class="lg:text-[40px] text-[20px] font-bold text-center">Our Anchors</p>
                <!-- <p class="lg:text-[16px] text-[14px] lg:text-center text-left leading-6">Lorem ipsum dolor sit amet consectetur. Habitant et et aliquam porttitor pretium mollis amet adipiscing. Scelerisque amet nunc nunc mattis dignissim pulvinar mauris urna phasellus. Urna lectus suspendisse scelerisque enim. Erat facilisis purus id tempus ac ut.</p> -->
            </div>
        </div>
    </div>
</section>
<section class="relative bg-white font-poppins bg-white lg:px-[80px] px-[16px] lg:pt-[88px] pt-[40px] lg:pb-[120px] pb-[40px]">
    <div class="lg:max-w-[1440px] w-full mx-auto flex flex-col justify-center items-center space-y-[64px]">
        <!-- <div class="flex flex-col justify-center items-center gap-[16px]">
            <div class="bg-[#EEF3FE] lg:text-[20px] text-[14px] text-[#5687F0] font-normal lg:px-[16px] px-[12px] py-[8px] lg:w-[115px] w-[82px]">Anchors</div>
            <p class="lg:text-[40px] text-[20px] text-[#1C1C1C] font-bold">Meet Our Team</p>
        </div> -->
        <div class="flex flex-col justify-center items-center gap-[16px]">
            <div class="grid grid-cols-2 min-[660px]:grid-cols-3 min-[900px]:grid-cols-4 min-[1140px]:grid-cols-4 min-[1025px]:grid-cols-3 justify-items-center lg:gap-[64px] gap-[32px]">
                <?php for ($i=0; $i < 12; $i++) : ?>
                    <a href="/anchors/anchors_detail">
                        <div class="flex flex-col items-center lg:p-[21px] p-[12px] border border-[1px] border-[#EAEAEA] rounded-[8px] gap-[21px]">
                            <div class="lg:w-[240px] min-[425px]:w-[180px] w-[128px] object-cover ">
                                <img src="/img/anchor-team-iqbal-bgsquare.webp" alt="Iqbal Switamihardja" class="relative rounded-[8px] lg:w-[240px] min-[425px]:w-[180px] w-[128px] object-cover object-top" />
                            </div>
                            <div class="bg-white flex flex-col items-start justify-center relative py-2 gap-[8px] text-center">
                                <span class="lg:text-[20px] text-[14px] text-[#4563DE] font-semibold text-left">Iqbal Switamihardja</span>
                                <span class="lg:text-[19px] text-[12px] text-[#4D4D4D] font-regular">News Anchor</span>
                            </div>
                        </div>
                    </a>
                <?php endfor; ?>    

                <?php for ($i=0; $i < 8; $i++) : ?>
                <!-- <a href="/anchors/anchors_detail">
                    <div class="flex flex-col items-center p-[16px]">
                        <div class="bg-gradient-to-b from-[#5687F0] to-[#DA2328] rounded-full lg:w-[240px] min-[425px]:w-[180px] w-[128px] lg:h-[240px] h-[128px] min-[425px]:h-[180px] object-cover ">
                            <img src="/img/anchor-team-iqbal.webp" alt="Iqbal Switamihardja" class="relative top-[-20px] rounded-full lg:w-[240px] min-[425px]:w-[180px] w-[128px] lg:h-[260px] h-[148px] min-[425px]:h-[200px] object-cover object-top" />
                        </div>
                        <div class="mt-4 bg-white flex flex-col items-center justify-center relative py-2 gap-[8px] text-center">
                            <span class="lg:text-[24px] text-[14px] font-semibold">Iqbal Switamihardja</span>
                            <span class="lg:text-[20px] text-[12px] font-regular">News Anchor</span>
                        </div>
                    </div>
                </a> -->
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>