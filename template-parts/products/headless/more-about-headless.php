<section class="relative w-full flex justify-center bg-white pt-16 pb-40 lg:pt-32">
    <div class="relative container z-20">
        <div class="w-full flex flex-col items-center justify-center">
            <h2 class="w-full capitalize text-5xl text-gray-900 font-semibold mb-10"><?php echo get_field('more_about_headless_heading') ?></h2>

            <!-- Desktop cards -->
            <div class="w-full hidden lg:flex flex-col lg:flex-row justify-center items-stretch space-y-9 space-x-0 lg:space-y-0 lg:space-x-6 xl:space-x-9">
            <?php
            $stories = get_field('more_stories');
            if($stories) {
                foreach($stories as $story) {
            ?>
                <div class="w-full lg:w-1/3 bg-white flex flex-col border border-zinc-200">
                    <div class="w-full h-0 pt-[60%] flex-none bg-cover bg-center" style="background-image: url(<?php echo esc_url( get_the_post_thumbnail_url($story['post']) ); ?>); "></div>
                    <div class="w-full flex flex-col justify-between items-start grow p-3 lg:p-6 xl:p-9">
                        <div class="w-full">
                            <h3 class="font-bold text-xl text-left mb-3"><?php echo esc_html( $story['post']->post_title ) ?></h3>
                            <p class="leading-relaxed text-zinc-500 text-left mb-12"><?php echo esc_html( get_the_excerpt($story['post']) ) ?></p>
                        </div>
                        <a href="<?php echo get_permalink($story['post']) ?>" class="text-sky-600">Read More</a>
                    </div>
                </div>
            <?php
                }
            }
            ?>
            </div>

            <!-- Mobile Carousel -->

            <div class="relative w-full block lg:hidden pb-16">
                <div id="slider-headless-moreabout" class="w-full my-slider">
                    <?php
                    if($stories) {
                        foreach($stories as $story) {
                    ?>
                    <div class="w-full">
                        <div class="w-full h-full bg-white flex flex-col border border-zinc-200">
                            <div class="w-full h-0 pt-[60%] flex-none bg-cover bg-center" style="background-image: url(<?php echo esc_url( get_the_post_thumbnail_url($story['post']) ); ?>); "></div>
                            <div class="w-full flex flex-col justify-between items-start grow p-3 lg:p-6 xl:p-9">
                                <div class="w-full">
                                    <h3 class="font-bold text-xl text-left mb-3"><?php echo $story['post']->post_title ?></h3>
                                    <p class="leading-relaxed text-zinc-500 text-left mb-12"><?php echo get_the_excerpt($story['post']) ?></p>
                                </div>
                                <a href="<?php echo get_permalink($story['post']) ?>" class="text-sky-600">Read More</a>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>