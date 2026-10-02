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
                <p class="font-semibold">Programs</p>
            </div>
            <div class="lg:max-w-[850px] flex flex-col justify-center lg:items-center items-start text-white gap-[24px] lg:h-[104px] mx-auto">
                <p class="lg:text-[40px] text-[20px] font-bold text-center">Programs</p>
                <!-- <p class="lg:text-[16px] text-[14px] lg:text-center text-left leading-6">Lorem ipsum dolor sit amet consectetur. Habitant et et aliquam porttitor pretium mollis amet adipiscing. Scelerisque amet nunc nunc mattis dignissim pulvinar mauris urna phasellus. Urna lectus suspendisse scelerisque enim. Erat facilisis purus id tempus ac ut.</p> -->
            </div>
        </div>
    </div>
</section>
<section class="relative bg-white font-poppins bg-white lg:px-[80px] px-[16px] lg:pt-[88px] pt-[40px] lg:pb-[120px] pb-[40px]">
    <div class="lg:max-w-[1440px] w-full mx-auto flex flex-col justify-center items-center lg:space-y-[64px] space-y-[20px]">
        <!-- <div class="flex flex-col justify-center items-center gap-[16px]">
            <div class="bg-[#EEF3FE] lg:text-[20px] text-[14px] text-[#5687F0] font-normal px-[16px] py-[8px] lg:w-[125px] w-[93px]">Programs</div>
            <p class="lg:text-[40px] text-[20px] text-[#1C1C1C] font-bold">TV Program</p>
        </div> -->
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