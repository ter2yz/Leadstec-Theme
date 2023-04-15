<section class="relative w-full z-20 pb-40">
    <div class="w-full flex flex-col-reverse md:flex-row justify-center items-start md:min-h-[600px]">
        <div class="w-full md:w-4/12 md:min-h-screen md:sticky md:top-0 bg-gray-100 p-6 lg:p-12">
            <div class="w-full bg-white p-6">
                <h3 class="font-bold text-xl text-left uppercase">Recent posts</h3>
                <div class="w-full">
                    <?php
                    $recent_posts = get_posts(array(
                        'numberposts' => 5,
                    ));
                    if ($recent_posts) {
                        foreach($recent_posts as $recent_post) {
                            $categories = get_the_category($recent_post);
                    ?>
                    <a href="<?php echo get_permalink($recent_post) ?>" class="w-full flex flex-col items-start border-b border-zinc-400/25 py-6">
                        <p class="text-zinc-900 font-medium capitalize"><?php echo $recent_post->post_title ?></p>
                        <p class="text-zinc-500 capitalize"><?php echo $categories[0]->name ?> • <?php echo get_the_date( 'j F Y', $recent_post )?></p>
                    </a>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="w-full md:w-8/12">
            <div class="w-full flex flex-col md:flex-row flex-wrap justify-start items-stretch transition opacity-100 px-6 lg:px-0">
                <?php
                $allPosts = get_posts();
                if ($allPosts) {
                    foreach($allPosts as $singlePost) {
                        $categories = get_the_category($singlePost);
                ?>
                <div class="w-full lg:w-1/2 lg:odd:pl-6 lg:odd:pr-3 lg:even:pl-3 lg:even:pr-6 overflow-hidden mb-6">
                    <div class="w-full h-full bg-white flex flex-col border border-zinc-200">
                        <a href="<?php echo get_permalink($singlePost) ?>" class="w-full h-0 pt-[60%] flex-none bg-cover bg-center" style="background-image: url(<?php echo esc_url( get_the_post_thumbnail_url($singlePost) ); ?>); "></a>
                        <div class="w-full flex flex-col justify-between items-start grow p-3 md:p-6 xl:p-9">
                            <div class="w-full">
                                <h3 class="font-bold text-xl text-left mb-3"><?php echo $singlePost->post_title ?></h3>
                                <p class="leading-relaxed mb-3"><?php echo $categories[0]->name ?> • <?php echo get_the_date( 'j F Y', $singlePost )?></p>
                                <p class="leading-relaxed text-zinc-500 mb-12 max-h-80 overflow-hidden"><?php echo get_the_excerpt($singlePost) ?></p>
                            </div>
                            <a href="<?php echo get_permalink($singlePost) ?>" class="text-sky-600">Learn More</a>
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
</section>