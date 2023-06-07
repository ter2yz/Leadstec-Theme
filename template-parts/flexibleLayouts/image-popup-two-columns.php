<section id="<?php echo get_sub_field('id')?>" class="relative w-full">
    <div class="hidden md:flex w-full justify-center">
        <div class="w-full" style="background-color: <?php echo get_sub_field('card_one_color') ?>;">
            <?php if(get_sub_field('card_two_heading')): ?>
            <div class="w-full h-full flex flex-col items-center py-16 lg:py-32 px-16">
            <?php else: ?>
            <div class="w-[91%] max-w-none lg:max-w-[1112px] mx-auto flex flex-col items-center py-16 lg:py-32 px-16" style="background-color: <?php echo get_sub_field('card_one_color') ?>;">
            <?php endif; ?>
                <h3 class="<?php echo get_sub_field('card_two_heading') ? "max-w-[520px]" : ""?> text-[#1b1c1d] text-[30px] md:text-[40px] text-center font-semibold mb-12 leading-snug grow flex items-start"><?php echo get_sub_field('card_one_heading') ?></h3>
                <a href="<?php echo get_sub_field('card_one_image_detail') ?>" data-fslightbox="card-one-desktop" data-alt="<?php echo get_sub_field('card_one_detail_image_alt_text') ?>" aria-label="<?php echo get_sub_field('card_one_display_image_alt_text') ?>" class="flex-none w-60 h-60 bg-white rounded-full bg-cover bg-no-repeat bg-center overflow-hidden group" style="background-image: url(<?php echo esc_url(get_sub_field('card_one_image_display')) ?>)">
                    <div class="w-full h-full flex justify-center items-center bg-zinc-900/0 text-white transition opacity-0 group-hover:bg-zinc-900/80 group-hover:opacity-100"><?php echo get_sub_field('card_one_hover_text') ?></div>
                </a>
            </div>
        </div>
        <?php
        if(get_sub_field('card_two_heading')){
        ?>
        <div class="w-full flex flex-col items-center py-16 lg:py-32 px-16" style="background-color: <?php echo get_sub_field('card_two_color') ?>;">
            <h3 class="max-w-[520px] text-[#1b1c1d] text-[30px] md:text-[40px] text-center font-semibold mb-12 leading-snug grow flex items-start"><?php echo get_sub_field('card_two_heading') ?></h3>
            <a href="<?php echo get_sub_field('card_two_image_detail') ?>" data-fslightbox="card-two-desktop" data-alt="<?php echo get_sub_field('card_two_detail_image_alt_text') ?>" aria-label="<?php echo get_sub_field('card_two_display_image_alt_text') ?>" class="flex-none w-60 h-60 bg-white rounded-full bg-cover bg-no-repeat bg-center overflow-hidden group" style="background-image: url(<?php echo esc_url(get_sub_field('card_two_image_display')) ?>)">
                <div class="w-full h-full flex justify-center items-center bg-zinc-900/0 text-white transition opacity-0 group-hover:bg-zinc-900/80 group-hover:opacity-100"><?php echo get_sub_field('card_two_hover_text') ?></div>
            </a>
        </div>
        <?php
        }
        ?>
    </div>
    <div class="block md:hidden w-full">
        <div id="slider-aem-cta" class="w-full my-slider inline-flex">
            <div class="w-full flex flex-col items-center py-16 lg:py-32 px-8 md:px-16" style="background-color: <?php echo get_sub_field('card_one_color') ?>;">
                <h3 class="max-w-[520px] text-[#1b1c1d] text-[30px] md:text-[40px] text-center font-semibold mb-12 leading-snug mx-auto grow flex items-center"><?php echo get_sub_field('card_one_heading') ?></h3>
                <a href="<?php echo get_sub_field('card_one_image_detail') ?>" data-fslightbox class="block flex-none w-60 h-60 bg-white rounded-full mx-auto bg-cover bg-no-repeat bg-center" style="background-image: url(<?php echo esc_url(get_sub_field('card_one_image_display')) ?>)"></a>
            </div>
            <?php
            if(get_sub_field('card_two_heading')){
            ?>
            <div class="w-full flex flex-col items-center justify-between py-16 lg:py-32 px-8 md:px-16" style="background-color: <?php echo get_sub_field('card_two_color') ?>;">
                <h3 class="max-w-[520px] text-[#1b1c1d] text-[30px] md:text-[40px] text-center font-semibold mb-12 leading-snug mx-auto grow flex items-center"><?php echo get_sub_field('card_two_heading') ?></h3>
                <a href="<?php echo get_sub_field('card_two_image_detail') ?>" data-fslightbox class="block flex-none w-60 h-60 bg-white rounded-full mx-auto bg-cover bg-no-repeat bg-center" style="background-image: url(<?php echo esc_url(get_sub_field('card_two_image_display')) ?>"></a>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>