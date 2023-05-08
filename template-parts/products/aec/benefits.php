<section class="relative w-full flex justify-center bg-white pt-10 pb-[84px]">
    <div class="relative w-[91%] max-w-none lg:max-w-[1112px] mx-auto z-20">
        <div class="w-full flex flex-col items-center justify-center">
            <h2 class="capitalize text-[30px] md:text-[60px] text-[#1b1c1d] font-bold mb-10"><?php echo get_field('aec_section')['heading'] ?></h2>
            <div class="w-full flex flex-col lg:flex-row justify-center items-center">
                    <img class="w-full mx-auto" src="<?php echo esc_url( get_field('aec_section')['image'] ); ?>" alt="">
            </div>
        </div>
    </div>
</section>
