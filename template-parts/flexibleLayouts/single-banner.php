<section id="<?php echo get_sub_field('id')?>" class="relative w-full flex justify-center py-28 bg-cover bg-center bg-no-repeat" aria-label="<?php echo get_sub_field('image_alt_text') ?>" style="background-color: <?php echo get_sub_field('background_color'); ?>;background-image: url(<?php echo esc_url( get_sub_field('background_image') ); ?>); ">
    <div class="absolute inset-0 w-full h-full bg-zinc-800 opacity-60 z-0"></div>
    <div class="relative w-[91%] max-w-none lg:max-w-[1112px] mx-auto flex flex-col justify-center items-center z-10">
        <h3 class="max-w-none md:max-w-[772px] lg:max-w-[991px] text-white text-[20px] md:text-[40px] text-center font-bold mb-[20px] leading-snug"><?php echo get_sub_field('heading') ?></h3>
        <p class="text-white max-w-none md:max-w-[552px] text-[15px] md:text-[20px] text-center leading-snug mb-8">
        <?php echo get_sub_field('description') ?>
        </p>
        <?php if(get_sub_field('button_url') && get_sub_field('button_text')): ?>
            <?php if(get_sub_field('is_pop_up_button')): ?>
                <a href="<?php echo get_sub_field('popup_image')['url'] ?>" data-fslightbox="banner-popup-image" data-alt="<?php echo get_sub_field('popup_image_alt_text') ?>" aria-label="<?php echo get_sub_field('popup_image_alt_text') ?>" class="text-[14px] text-white flex justify-center items-center border-2 border-[#1b1c1d] bg-[#1b1c1d] px-6 py-3">
                    <?php echo get_sub_field('button_text') ?>
                </a>
            <?php else: ?>
                <a href="<?php echo esc_url(get_sub_field('button_url')) ?>" class="text-[14px] text-white flex justify-center items-center border-2 border-[#1b1c1d] bg-[#1b1c1d] px-6 py-3" <?php echo get_sub_field('is_open_via_new_tab') ? 'target="_blank"' : ''; ?>>
                    <?php echo get_sub_field('button_text') ?>
                </a>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</section>