<section id="<?php echo get_sub_field('id')?>" class="relative w-full flex justify-center bg-white pt-10 pb-16 lg:pb-32">
    <div class="relative w-[91%] max-w-none lg:max-w-[1112px] mx-auto z-20">
        <div class="w-full flex flex-col items-center justify-center">
            <h2 class="text-[30px] md:text-[60px] text-[#1b1c1d] font-bold mb-10 text-center"><?php echo get_sub_field('image_section')['heading'] ?></h2>
            <div class="w-full flex flex-col lg:flex-row justify-center items-center mb-16 lg:mb-0">
                <img class="slider-single-image w-full mx-auto" src="<?php echo esc_url( get_sub_field('image_section')['image'] ); ?>" alt="<?php echo get_sub_field('image_section')['image_alt_text']; ?>">
            </div>
        </div>
    </div>
</section>
