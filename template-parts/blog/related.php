<div class="w-full pb-40">
    <div class="container mx-auto">
        <h2 class="w-full capitalize text-5xl text-gray-900 font-semibold my-10">More recent posts</h2>
        <div class="relative w-full pb-16">
            <div id="slider-blog-recent" class="w-full my-slider">
                <?php
                $recent_posts = get_posts(array(
                    'numberposts' => 5,
                ));
                if ($recent_posts) {
                    foreach($recent_posts as $recent_post) {
                        $categories = get_the_category($recent_post);
                ?>
                <div class="w-full">
                    <div class="w-full h-full bg-white flex flex-col border border-zinc-200">
                        <div class="w-full h-0 pt-[60%] flex-none bg-cover bg-center" style="background-image: url(<?php echo esc_url( get_the_post_thumbnail_url($recent_post) ); ?>); "></div>
                        <div class="w-full flex flex-col justify-between items-start grow p-3 md:p-6 xl:p-9">
                            <div class="w-full">
                                <h3 class="font-bold text-xl text-left mb-3"><?php echo $recent_post->post_title ?></h3>
                                <p class="leading-relaxed mb-3"><?php echo $categories[0]->name ?> • <?php echo get_the_date( 'j F Y', $recent_post )?></p>
                                <p class="leading-relaxed text-zinc-500 mb-12 max-h-40 line-clamp-3"><?php echo get_the_excerpt($recent_post) ?></p>
                            </div>
                            <a href="/single-blog/" class="text-sky-600">Learn More</a>
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