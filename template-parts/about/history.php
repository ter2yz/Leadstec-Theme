<section class="relative w-full flex justify-center bg-white pt-10 pb-16 lg:pb-32">
    <div class="relative container z-20">
        <div class="w-full flex flex-col items-center justify-center">
            <h2 class="capitalize text-5xl text-gray-900 font-semibold mb-10"><?php echo get_field('history_section')['heading'] ?></h2>
            <div class="w-full flex flex-col lg:flex-row justify-center items-center">
                    <img class="slider-single-image w-full mx-auto" src="<?php echo esc_url( get_field('history_section')['image'] ); ?>" alt="">
            </div>
        </div>
    </div>
</section>
