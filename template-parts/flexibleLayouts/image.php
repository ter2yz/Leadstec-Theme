<section id="<?php echo get_sub_field('id')?>" class="relative w-full flex justify-center bg-white">
    <div class="relative w-[91%] max-w-none lg:max-w-[1112px] mx-auto z-20">
        <div class="w-full flex flex-col items-center justify-center">
            <?php if(get_sub_field('image_section')['heading']):?>
            <h2 class="text-[30px] md:text-[60px] text-[#1b1c1d] font-bold mb-10 text-center"><?php echo get_sub_field('image_section')['heading'] ?></h2>
            <?php endif; ?>
            <div class="w-full flex flex-col lg:flex-row justify-center items-center mb-0">
                <img class="slider-single-image w-full mx-auto" src="<?php echo esc_url( get_sub_field('image_section')['image'] ); ?>" alt="<?php echo get_sub_field('image_section')['image_alt_text']; ?>">
            </div>
        </div>
    </div>
</section>
