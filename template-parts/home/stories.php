<section id="successful-stories-section" class="w-full flex justify-center mt-20">
    <div class="w-[91%] max-w-none lg:max-w-[1112px] mx-auto">
        <div class="w-full flex flex-col lg:flex-row justify-between items-start lg:items-center px-2">
            <h2 class="text-[30px] md:text-[60px] text-[#1b1c1d] font-bold max-h-screen mb-0 w-full lg:w-auto <?php echo get_field('is_stories_header_center') ? 'text-center' : 'text-left'; ?>"><?php echo get_field('successful_stories_heading') ?></h2>
            <a href="<?php echo get_field('read_more_button_url') ?>" class="hidden lg:flex text-[16px] font-bold flex-none justify-center items-center border-2 border-zinc-900 bg-zinc-900 px-6 py-2 text-white capitalize whitespace-nowrap">
                <?php echo get_field('read_more_button_label') ?>
            </a>
        </div>
        <div class="hidden lg:flex relative w-full h-full py-10 justify-center items-center px-2">
            <div class="relative flex flex-col items-center pr-6 w-1/5">
                <button id="sliderStoriesPrev" class="w-full text-xl" data-controls="prev" aria-controls="customize" tabindex="-1">
                    <img class="w-[18px] mx-auto" src="<?php echo (get_template_directory_uri() . '/resources/images/fa-chevron-up.svg' ); ?>" alt="fa-chevron-up icon">
                </button>
                <?php if( have_rows('successful_stories')): ?>
                    <div class="slider-stories w-full">
                    <?php
                        $stories_index = 0;
                        foreach(get_field('successful_stories') as $story) {
                    ?>
                        <div class="w-full  overflow-hidden py-2">
                            <img data-index="<?php echo $stories_index ?>" onclick="handleImageClick(this)" class="slider-single-image w-full cursor-pointer" src="<?php echo $story['image']['url'] ? $story['image']['url'] : get_field('feature_image', $story['post_id'])['url']; ?>" alt="<?php echo $story['image_alt_text'] ? $story['image_alt_text'] : get_field('image_alt_text', $story['post_id']) ?>">
                        </div>
                    <?php
                        $stories_index += 1;
                        }       
                    ?>
                    </div>
                <?php endif; ?>
                <button id="sliderStoriesNext" class="w-full text-xl" data-controls="next" aria-controls="customize" tabindex="-1">
                    <img class="w-[18px] mx-auto" src="<?php echo (get_template_directory_uri() . '/resources/images/fa-chevron-down.svg' ); ?>" alt="fa-chevron-down icon">  
                </button>
            </div>
            <div class="relative min-h-[500px] grow overflow-hidden">
                <?php if( have_rows('successful_stories')):
                    $stories_main_index = 0;
                    foreach(get_field('successful_stories') as $story) {
                ?>
                    <div data-index="<?php echo $stories_main_index ?>" class="story-main-image-wrapper absolute inset-0 w-full h-full shadow-lg <?php echo $stories_main_index == 2 ? 'opacity-100' : 'opacity-0' ?> transition group">
                        <img class="w-full h-full transition-all duration-200 opacity-100 object-contain object-center" src="<?php echo $story['image']['url'] ? $story['image']['url'] : get_field('feature_image', $story['post_id'])['url']; ?>" alt="<?php echo $story['image_alt_text'] ? $story['image_alt_text'] : get_field('image_alt_text', $story['post_id']); ?>">
                        <div class="absolute inset-0 w-full h-full transition-all duration-500 opacity-0 hover:opacity-100 z-20">
                            <div class="description-wrap absolute w-1/2 h-full flex flex-col justify-start max-h-[67%] transition-all duration-500 bottom-0 right-0 bg-white p-6 text-zinc-900 overflow-auto z-20">
                                <div class="w-full h-full overflow-auto mb-9">
                                    <h3 class="font-bold text-[20px] text-left mb-6 capitalize"><?php echo $story['heading'] ? $story['heading'] : get_field('title', $story['post_id']); ?></h3>
                                    <?php 
                                        echo $story['description'] ? $story['description'] : get_field('short_description', $story['post_id']);
                                    ?>
                                </div>
                                <div class="absolute left-0 bottom-0 w-full bg-white px-6 py-3">
                                    <a href="<?php echo $story['button_url'] ? $story['button_url'] : get_permalink(get_post($story['post_id'])); ?>" class="description-read-btn text-sky-600 text-left"><?php echo $story['button_label'] ? $story['button_label'] : get_field('read_more_label', $story['post_id']) ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    $stories_main_index += 1;
                    }
                    endif;
                ?>
                <p class="hidden font-light truncate max-h-6 overflow-hidden my-6 transition-all duration-500 delay-75"></p>
            </div>
        </div>
        <div class="flex lg:hidden w-full py-10 flex-col items-center px-2">
            <?php
                $stories = get_field('successful_stories');
                if ($stories) {
                    foreach($stories as $story) {
            ?>
            <a href="<?php echo $story['button_url'] ? $story['button_url'] : get_permalink(get_post($story['post_id'])); ?>" class="w-full mb-5">
                <img class="slider-single-image w-full" src="<?php echo esc_url( $story['image']['url'] ) ? $story['image']['url'] : get_field('feature_image', $story['post_id'])['url']; ?>" alt="<?php echo $story['image_alt_text'] ? $story['image_alt_text'] : get_field('image_alt_text', $story['post_id']); ?>">
                <div class="w-full p-5 flex justify-center items-center bg-zinc-900">
                    <p class="text-white text-[15px] font-bold"><?php echo $story['heading'] ? $story['heading'] : get_field('title', $story['post_id']) ?></p>
                </div>
            </a>
            <?php
                    }
                }
            ?>
            <a href="<?php echo get_field('read_more_button_url') ?>" class="text-[16px] font-bold flex flex-none justify-center items-center border-2 border-zinc-900 bg-zinc-900 px-6 py-2 text-white capitalize whitespace-nowrap">
                <?php echo get_field('read_more_button_label') ?>
            </a>
        </div>
    </div>
</section>

