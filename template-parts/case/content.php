<div class="w-full">
    <div class="w-full md:w-[91%] max-w-none lg:max-w-[1112px] mx-auto">
        <div class="mb-3">
            <a href="<?php echo get_field('back_button_url')?>" class="text-sky-600"><?php echo get_field('back_button_label')?></a>
        </div>
        <div class="relative w-full flex flex-col md:flex-row items-stretch mb-10">
            <img class="w-full md:w-[27.3vw] max-w-[350px] object-cover" src="<?php echo esc_url( get_field('feature_image')['url'] ); ?>" alt="<?php echo get_field('image_alt_text'); ?>">
            <div class="w-full flex flex-col justify-start items-start py-6 px-[20px] md:px-[25px] lg:px-10 bg-gray-50">
                <p class="text-zinc-900 text-4xl font-semibold capitalize mb-[15px]"><?php echo get_field('title') ?></p>
                <?php if(get_field('information_description')):
                ?>
                    <p class="text-[#1b1c1d] text-[12px] md:text-[15px] leading-[19px]"><?php echo get_field('information_description') ?></p>
                <?php
                    endif;
                ?>
            </div>
        </div>
    </div>
    <div class="w-full">
        <?php get_template_part( 'template-parts/flexible-components' );?>
    </div>
</div>