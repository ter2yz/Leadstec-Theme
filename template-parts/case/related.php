<div class="w-full pb-40">
    <div class="w-[91%] max-w-none lg:max-w-[1112px] mx-auto">
        <h2 class="w-full capitalize text-[30px] md:text-[60px] text-[#1b1c1d] font-bold mt-[44px] mb-[20px] md:mb-[44px]"><?php echo get_field('similar_cases_heading') ?></h2>
        <div class="relative w-full pb-16">
            <div id="slider-blog-recent" class="w-full my-slider">
                <?php
                $recent_posts = get_posts(array(
                    'numberposts' => 5,
                    'post_type' => 'cases',
                ));
                if ($recent_posts) {
                    foreach($recent_posts as $recent_post) {
                        $categories = get_the_category($recent_post);
                ?>
                <div class="w-full">
                    <div class="w-full h-full bg-white flex flex-col border border-zinc-200">
                        <div class="w-full h-0 pt-[60%] flex-none bg-cover bg-center" style="background-image: url(<?php echo esc_url( get_field('feature_image', $recent_post->ID)['url'] ); ?>); "></div>
                        <div class="w-full flex flex-col justify-between items-start grow p-3 md:p-6 xl:p-9">
                            <div class="w-full">
                                <h3 class="font-bold text-[20px] text-left mb-3"><?php echo $recent_post->post_title ?></h3>
                                <p class="leading-relaxed mb-3"><?php echo get_field('post_date', $recent_post->ID); ?></p>
                                <p class="leading-relaxed text-zinc-500 mb-12 max-h-40 line-clamp-3"><?php echo get_the_excerpt($recent_post) ?></p>
                            </div>
                            <a href="<?php echo get_permalink($recent_post); ?>" class="text-sky-600"><?php echo get_field('read_more_label', $recent_post->ID); ?></a>
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