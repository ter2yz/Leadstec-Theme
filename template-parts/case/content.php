<div class="w-full">
    <div class="w-full md:w-[91%] max-w-none lg:max-w-[1112px] mx-auto">
        <div class="mb-3">
            <a href="/blogs-list/" class="text-sky-600">< Back</a>
        </div>
        <div class="relative w-full flex flex-col lg:flex-row items-stretch mb-10">
            <img class="w-full md:max-w-[349px] lg:max-w-[426px] object-cover" src="<?php echo esc_url( get_field('feature_image')['url'] ); ?>" alt="<?php echo get_field('feature_image')['alt']; ?>">
            <div class="w-full flex flex-col justify-start items-start py-6 px-[20px] md:px-[25px] lg:px-10 bg-gray-50">
                <p class="text-zinc-900 text-4xl font-semibold capitalize mb-[15px]"><?php echo the_title() ?></p>
                <?php if(get_field('info_group')):
                ?>
                            <p class="text-[#1b1c1d] text-[12px] md:text-[15px] leading-[19px]"><?php echo get_field('information_text') ?></p>
                <?php
                    endif;
                ?>
            </div>
        </div>
        <div class="relative prose w-full max-w-none my-[20px] md:my-[44px] px-[20px] md:px-0">
            <?php the_content(); ?>
        </div>
    </div>
</div>