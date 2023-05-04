<section id="successful-stories-section" class="w-full flex justify-center mt-20 lg:mt-40">
    <div class="container">
        <div class="w-full flex flex-col lg:flex-row justify-between items-start lg:items-center">
            <h2 class="px-3 capitalize text-[30px] md:text-[60px] text-gray-900 font-semibold max-h-screen mb-10 lg:mb-0"><?php echo get_field('successful_stories_heading') ?></h2>
            <a href="<?php echo get_field('read_more_button_url') ?>" class="mr-3 text-lg flex flex-none justify-center items-center border-2 border-zinc-900 bg-zinc-900 px-6 py-2 text-white capitalize whitespace-nowrap">
                <?php echo get_field('read_more_button_label') ?>
            </a>
        </div>
        <div class="hidden lg:flex relative w-full h-full py-20 justify-center items-center min-h-[750px] px-3">
            <div class="relative flex flex-col items-center pr-6 w-1/5">
                <button id="sliderStoriesPrev" class="w-full text-xl" data-controls="prev" aria-controls="customize" tabindex="-1">
                    <i class="fa-solid fa-chevron-up"></i>
                </button>
                <?php if( have_rows('successful_stories')): ?>
                    <div class="slider-stories w-full">
                    <?php
                        $stories_index = 0;
                        while( have_rows('successful_stories') ): the_row(); 
                    ?>
                        <div class="w-full  overflow-hidden py-2">
                            <img data-index="<?php echo $stories_index ?>" onclick="handleImageClick(this)" class="slider-single-image w-full cursor-pointer" src="<?php echo esc_url( the_sub_field('image')); ?>" alt="">
                        </div>
                    <?php
                        $stories_index += 1;
                        endwhile;
                    ?>
                    </div>
                <?php endif; ?>
                <button id="sliderStoriesNext" class="w-full text-xl" data-controls="next" aria-controls="customize" tabindex="-1">
                    <i class="fa-solid fa-chevron-down"></i>      
                </button>
            </div>
            <div class="relative h-full grow overflow-hidden">
                <?php if( have_rows('successful_stories')):
                    $stories_main_index = 0;
                    while( have_rows('successful_stories') ): the_row(); 
                ?>
                    <div data-index="<?php echo $stories_main_index ?>" class="story-main-image-wrapper absolute inset-0 w-full h-full shadow-lg <?php echo $stories_main_index == 2 ? 'opacity-100' : 'opacity-0' ?> transition group">
                        <img class="min-w-full min-h-full transition-all duration-200 opacity-100 object-cover object-center" src="<?php echo esc_url( the_sub_field('image')); ?>" alt="">
                        <div class="absolute inset-0 w-full h-full transition-all duration-500 opacity-0 hover:opacity-100 z-20">
                            <div class="description-wrap absolute w-1/2 h-full flex flex-col justify-start max-h-[50%] transition-all duration-500 bottom-0 right-0 bg-white p-6 text-zinc-900 overflow-auto z-20">
                                <div class="w-full h-full overflow-auto mb-9">
                                    <h3 class="font-bold text-xl text-left mb-6 capitalize"><?php the_sub_field('heading'); ?></h3>
                                    <?php 
                                        the_sub_field('description');
                                    ?>
                                </div>
                                <div class="absolute left-0 bottom-0 w-full bg-white p-6">
                                    <a href="<?php the_sub_field('button_url'); ?>" class="description-read-btn text-sky-600 text-left"><?php echo get_field('read_more_button_label') ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    $stories_main_index += 1;
                    endwhile;
                    endif;
                ?>
                <p class="hidden font-light truncate max-h-6 overflow-hidden my-6 transition-all duration-500 delay-75"></p>
            </div>
        </div>
        <div class="flex lg:hidden w-full py-10 flex-col">
            <?php
                $stories = get_field('successful_stories');
                if ($stories) {
                    foreach($stories as $story) {
            ?>
            <div class="w-full mb-3">
                <img class="slider-single-image w-full" src="<?php echo esc_url( $story['image'] ); ?>" alt="">
                <div class="w-full p-5 flex justify-center items-center bg-zinc-900">
                    <p class="text-white text-[15px] font-semibold"><?php echo $story['heading'] ?></p>
                </div>
            </div>
            <?php
                    }
                }
            ?>
        </div>
    </div>
</section>

