<section class="relative w-full flex justify-center bg-white py-10 lg:py-20">
    <div class="relative container z-20">
        <div class="w-full flex flex-col items-center justify-center">
            <h2 class="w-full capitalize text-5xl text-gray-900 font-semibold my-10"><?php echo get_field('leading_analysts_heading') ?></h2>

            <!-- Desktop cards -->
            <div class="w-full hidden lg:flex flex-col lg:flex-row justify-center items-stretch space-y-9 space-x-0 lg:space-y-0 lg:space-x-6 xl:space-x-9">
            <?php
            $posts = get_field('leading_analysts_stories');
            if($posts){
                foreach($posts as $singlePost){
            ?>
            <div class="w-full lg:w-1/3 bg-white flex flex-col border border-zinc-200">
                <div class="w-full h-0 pt-[60%] flex-none bg-cover bg-center" style="background-image: url(<?php echo esc_url( get_the_post_thumbnail_url($singlePost['post'])) ?>); "></div>
                <div class="w-full flex flex-col justify-between items-center grow p-3 lg:p-6 xl:p-9">
                    <div class="w-full">
                        <h3 class="font-bold text-xl text-left mb-3"><?php echo esc_html( $singlePost['post']->post_title ); ?></h3>
                        <p class="leading-relaxed text-zinc-500 text-left mb-12"><?php echo get_the_excerpt($singlePost['post']); ?></p>
                    </div>
                    <a href="<?php echo get_permalink($singlePost['post']) ?>" class="capitalize text-white flex justify-center items-center border-2 border-zinc-900 bg-zinc-900 px-6 py-2">
                        Download the report
                    </a>
                </div>
            </div>
            <?php
                };
            };
            ?>
            </div>

            <!-- Mobile Carousel -->
            <div class="relative w-full block lg:hidden pb-16">
                <div id="slider-headless-analysts" class="w-full my-slider">
                    <?php
                    $postsWrapper = get_field('leading_analysts_stories');
                    if ($postsWrapper) {
                        foreach($postsWrapper as $singlePost) {
                    ?>
                    <div class="w-full">
                        <div class="w-full h-full bg-white flex flex-col border border-zinc-200">
                            <div class="w-full h-0 pt-[60%] flex-none bg-cover bg-center" style="background-image: url(<?php echo esc_url( get_the_post_thumbnail_url($singlePost['post']) ); ?>); "></div>
                            <div class="w-full flex flex-col justify-between items-center grow p-3 lg:p-6 xl:p-9">
                                <div class="w-full">
                                    <h3 class="font-bold text-xl text-left mb-3"><?php echo esc_html( $singlePost['post']->post_title ); ?></h3>
                                    <p class="leading-relaxed text-zinc-500 text-left mb-12"><?php echo get_the_excerpt($singlePost['post']); ?></p>
                                </div>
                                <a href="<?php echo get_permalink($singlePost['post']) ?>" class="capitalize text-white flex justify-center items-center border-2 border-zinc-900 bg-zinc-900 px-6 py-2">
                                    Download the report
                                </a>
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