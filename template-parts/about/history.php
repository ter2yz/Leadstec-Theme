<section class="relative w-full flex justify-center bg-white pt-10 pb-16 lg:pb-32">
    <div class="relative w-[91%] max-w-none lg:max-w-[1112px] mx-auto z-20">
        <div class="w-full flex flex-col items-center justify-center">
            <h2 class="text-[30px] md:text-[60px] text-[#1b1c1d] font-bold mb-10 text-center"><?php echo get_field('history_section')['heading'] ?></h2>
            <div class="w-full flex flex-col lg:flex-row justify-center items-center">
                    <img class="slider-single-image w-full mx-auto" src="<?php echo esc_url( get_field('history_section')['image'] ); ?>" alt="">
            </div>
        </div>
    </div>
</section>
