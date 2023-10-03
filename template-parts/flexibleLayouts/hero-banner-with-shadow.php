<section id="<?php echo get_sub_field('id')?>" class="w-full flex justify-center items-center relative z-0">
    <div class="relative w-[91%] max-w-none lg:max-w-[1112px] mx-auto z-20">
        <div class="w-full flex flex-col-reverse md:flex-row justify-start md:justify-center items-start min-h-[600px] overflow-hidden">
            <div class="relative w-full md:w-1/2 flex flex-col items-start z-10 md:pt-8 md:pr-8">
                <h1 class="text-[30px] md:text-[60px] text-[#1b1c1d] font-bold leading-tight"><?php echo get_sub_field('heading') ?></h1>
                <span class="w-20 h-3 bg-orange-500 my-5"></span>
                <p class="leading-relaxed text-[15px] md:text-[20px] text-[#9f9f9f]"><?php echo get_sub_field('description') ?></p>
                <a href="<?php echo get_sub_field('button_url'); ?>" class="text-3xl w-12 h-12 mt-10 flex justify-center items-center rounded-full border-2 border-gray-900 text-gray-900">
                    <img class="leading-relaxed text-center w-[28px]" src="<?php echo (get_template_directory_uri() . '/resources/images/fa-chevron-down.svg' ); ?>" alt="fa-chevron-down icon">
                </a>
            </div>
            <div class="w-full md:w-1/2 relative flex justify-end my-9 md:my-0">
                <img class="w-full md:max-w-lg block md:hidden" src="<?php echo esc_url( get_sub_field('image') ); ?>" alt="<?php echo get_sub_field('image_alt_text'); ?>">
            </div>
        </div>
    </div>
    <div class="absolute hidden top-1/2 right-0 w-full h-full md:flex justify-end -translate-y-1/2 overflow-hidden">
        <div class="w-7/12 bg-gray-100 h-full flex justify-end items-end"></div>
        <img class="absolute top-0 right-0 w-1/2" src="<?php echo esc_url( get_sub_field('image') ); ?>" alt="<?php echo get_sub_field('image_alt_text'); ?>">
    </div>
</section>