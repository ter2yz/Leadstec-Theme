<section id="home-stories" class="w-full flex justify-center mt-20 mb-40 lg:mb-60">
    <div class="container">
        <div class="w-full flex flex-col lg:flex-row justify-between items-start lgitems-center">
            <h2 class="capitalize text-5xl text-gray-900 font-semibold max-h-screen mb-10 lg:mb-0"><?php echo get_field('heading') ?></h2>
            <a href="" class="text-lg flex flex-none justify-center items-center border-2 border-zinc-900 bg-zinc-900 px-6 py-2 text-white capitalize whitespace-nowrap">
                Read more
            </a>
        </div>
        <div class="hidden lg:flex relative w-full h-full py-20 justify-center items-center">
            <div class="relative flex flex-col items-center px-6">
                <button id="sliderStoriesPrev" class="w-full text-xl" data-controls="prev" aria-controls="customize" tabindex="-1">
                    <i class="fa-solid fa-chevron-up"></i>
                </button>
                <?php if( have_rows('successful_stories')): ?>
                    <div class="slider-stories w-full">
                    <?php
                        $stories_index = 0;
                        while( have_rows('successful_stories') ): the_row(); 
                    ?>
                        <div class="w-80 max-h-44 overflow-hidden bg-green-600">
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
            <div class="relative h-full grow">
                <?php if( have_rows('successful_stories')):
                    $stories_main_index = 0;
                    while( have_rows('successful_stories') ): the_row(); 
                ?>
                    <div data-index="<?php echo $stories_main_index ?>" class="story-main-image-wrapper absolute inset-0 w-full h-full overflow-hidden shadow-lg <?php echo $stories_main_index == 2 ? 'opacity-100' : 'opacity-0' ?> transition group">
                        <img class="min-w-full min-h-full transition-all duration-200 opacity-100" src="<?php echo esc_url( the_sub_field('image')); ?>" alt="">
                        <div class="absolute inset-0 w-full h-full transition-all duration-500 opacity-0 hover:opacity-100 z-20">
                            <div class="description-wrap absolute w-1/2 h-full flex flex-col justify-center max-h-[50%] transition-all duration-500 bottom-0 right-0 bg-white p-6 text-zinc-900 overflow-auto z-20">
                                <h3 class="font-bold text-xl text-left mb-6 capitalize"><?php the_sub_field('heading'); ?></h3>
                                <?php 
                                    the_sub_field('description');
                                ?>
                                <button class="description-read-btn text-sky-600 text-left" onclick="handleReadExpand(this)">Read More</button>
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
                <div class="w-full py-3 flex justify-center items-center bg-zinc-900">
                    <p class="text-white"><?php echo $story['heading'] ?></p>
                </div>
            </div>
            <?php
                    }
                }
            ?>
        </div>
    </div>
</section>

