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
                        <a href="<?php echo get_permalink($recent_post); ?>" class="w-full p-[20px] bg-[#1b1c1d] text-white">
                            <h3 class="font-bold text-[20px]"><?php echo $recent_post->post_title ?></h3>
                        </a>
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