<section class="w-full flex justify-center items-center">
    <div class="w-[91%] max-w-none md:max-w-[1112px] mx-auto">
        <div class="w-full flex flex-col-reverse md:flex-row justify-start items-center md:items-stretch md:min-h-[600px] overflow-hidden px-2">
            <div class="relative w-full md:w-7/12 flex flex-col items-start mt-10 lg:mt-20 md:pr-[33px] z-10">
                <h1 class="text-[30px] md:text-[60px] capitalize font-bold leading-tight text-[#1B1C1D]"><?php echo get_sub_field('heading'); ?></h1>
                <span class="w-20 h-3 bg-orange-500 my-5"></span>
                <p class="text-[15px] md:text-[20px] text-[#9f9f9f] leading-relaxed"><?php echo get_sub_field('description') ?></p>
                <a href="<?php echo get_sub_field('anchor_url') ?>" class="text-3xl w-12 h-12 mt-10 flex justify-center items-center rounded-full border-2 border-gray-900 text-gray-900">
                    <img class="leading-relaxed text-center w-[28px]" src="<?php echo (get_template_directory_uri() . '/resources/images/fa-chevron-down.svg' ); ?>" alt="fa-chevron-down icon">
                </a>
            </div>
            <div class="w-full md:w-5/12 relative max-h-[300px] md:max-h-[500px] lg:max-h-screen top-0 right-0 flex justify-center md:justify-end overflow-clip">
                <img class="w-full object-cover object-center" src="<?php echo esc_url(get_sub_field('image')['url']); ?>" alt="<?php echo get_sub_field('image_alt_text') ?>">
            </div>
        </div>
    </div>
</section>