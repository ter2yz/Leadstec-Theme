<section class="relative w-full z-20">
    <div class="w-full flex flex-col-reverse md:flex-row justify-center items-start md:min-h-[600px]">
        <div class="w-full md:w-4/12 md:min-h-screen md:sticky md:top-12 bg-gray-100 px-6 pt-6 pb-40 lg:px-12 lg:pt-12">
            <div class="w-full bg-white p-6">
                <h3 class="font-bold text-xl text-left"><?php echo get_field('recent_posts_heading');?></h3>
                <div class="w-full h-[590px] overflow-y-auto no-scrollbar">
                    <?php
                    $current_type = get_field('blogs_type');
                    $recent_posts = get_posts(array(
                        'numberposts' => -1,
                        'post_type' => $current_type,
                    ));
                    if ($recent_posts) {
                        foreach($recent_posts as $recent_post) {
                            $current_taxonomies = get_post_taxonomies($recent_post);
                            $categories = get_the_terms($recent_post, $current_taxonomies[0]);
                            $dateStr = get_the_date( 'j F Y', $recent_post );
                            if ($current_type == "blogs_sc" || $current_type == "blogs_tc") {
                                $dateStr = get_the_date( 'Y年n月j日', $recent_post );
                            }
                    ?>
                    <a href="<?php echo get_permalink($recent_post) ?>" class="w-full h-[108px] flex flex-col items-start justify-center border-b border-zinc-400/25 last:border-transparent py-6">
                        <p class="text-zinc-900 font-medium capitalize"><?php echo get_field('title', $recent_post->ID) ?></p>
                        <p class="text-zinc-500 capitalize"><?php echo $categories[0]->name ?><?php echo $categories[0]&&$dateStr ? " • " : "" ?><?php echo $dateStr; ?></p>
                    </a>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="w-full md:w-8/12 px-6 pt-6 pb-40 lg:px-12 lg:pt-12">
            <div class="w-full flex flex-col md:flex-row flex-wrap justify-start items-stretch transition opacity-100 px-6 lg:px-0">
                <?php
                $allPosts = $recent_posts;
                if ($allPosts) {
                    foreach($allPosts as $singlePost) {
                        $current_taxonomies = get_post_taxonomies($singlePost);
                        $categories = get_the_terms($singlePost, $current_taxonomies[0]);
                ?>
                <div class="w-full lg:w-1/2 lg:odd:pl-0 lg:odd:pr-3 lg:even:pl-3 lg:even:pr-0 overflow-hidden mb-6">
                    <div class="w-full h-full bg-white flex flex-col border border-zinc-200">
                        <a href="<?php echo get_permalink($singlePost) ?>" class="w-full h-0 pt-[60%] flex-none bg-cover bg-center" aria-label="<?php echo get_field('image_alt_text', $singlePost->ID); ?>" style="background-image: url(<?php echo esc_url( get_field('feature_image', $singlePost->ID)['url'] ); ?>); "></a>
                        <div class="w-full flex flex-col justify-between items-start grow p-3 md:p-6 xl:p-9">
                            <div class="w-full">
                                <h3 class="font-bold text-xl text-left mb-3"><?php echo get_field('title', $singlePost->ID) ?></h3>
                                <p class="leading-relaxed mb-3"><?php echo $current_terms[0]->name ?> • <?php echo get_the_date( 'd F Y', $singlePost )?></p>
                                <p class="leading-relaxed text-zinc-500 mb-12 max-h-80 overflow-hidden line-clamp-3"><?php echo strip_tags(get_field('information_text', $singlePost)) ?></p>
                            </div>
                            <a href="<?php echo get_permalink($singlePost) ?>" class="text-sky-600"><?php echo get_field('learn_more_label');?></a>
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