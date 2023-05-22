<section class="w-full flex justify-center items-center mb-40 relative lg:sticky top-0 z-0">
    <div class="relative w-[91%] max-w-none lg:max-w-[1112px] mx-auto z-20">
        <div class="w-full flex flex-col-reverse lg:flex-row justify-start lg:justify-center items-center min-h-[600px] overflow-hidden">
            <div class="relative w-full lg:w-1/2 flex flex-col items-start z-10">
                <h1 class="text-[30px] md:text-[60px] text-[#1b1c1d] font-bold leading-tight"><?php echo get_field('hero_section')['heading'] ?></h1>
                <span class="w-20 h-3 bg-orange-500 my-5"></span>
                <p class="leading-relaxed text-[15px] md:text-[20px] text-[#9f9f9f]"><?php echo get_field('hero_section')['description'] ?></p>
                <a href="<?php echo get_field('hero_section')['button_url']; ?>" class="text-3xl w-12 h-12 mt-10 flex justify-center items-center rounded-full border-2 border-gray-900 text-gray-900">
                    <i class="fa-solid fa-chevron-down"></i>
                </a>
            </div>
            <div class="w-full lg:w-1/2 relative flex justify-end my-9 lg:my-0">
                <img class="w-full lg:max-w-lg block lg:hidden" src="<?php echo esc_url( get_field('hero_section')['image'] ); ?>" alt="<?php echo get_field('hero_section')['image_alt_text']; ?>">
            </div>
        </div>
    </div>
    <div class="absolute hidden top-1/2 right-0 w-full h-full lg:flex justify-end -translate-y-1/2 overflow-hidden">
        <div class="w-7/12 bg-gray-100 h-full flex justify-end items-end"></div>
        <img class="absolute bottom-0 right-0 w-1/2" src="<?php echo esc_url( get_field('hero_section')['image'] ); ?>" alt="<?php echo get_field('hero_section')['image_alt_text']; ?>">
    </div>
</section>