<?php
$current_post = get_post();
$current_taxonomies = get_post_taxonomies($current_post);
$current_terms = get_the_terms($current_post, $current_taxonomies[0]);
$recent_posts = get_posts(array(
    'numberposts' => -1,
    'post_type' => $post_type,
    'exclude' => [$current_post->ID],
    'category' => get_the_category($current_post)[0]->ID,
    $current_taxonomies[0] => array_column($current_terms, 'slug'),
    'meta_key'  => 'post_date',
    'orderby' => array( 'meta_value' => 'DESC' ), 
));
?>
<div class="w-full pb-40">
<?php
if ($recent_posts){
?>
    <div class="w-[91%] max-w-none lg:max-w-[1112px] mx-auto">
        <h2 class="w-full text-[30px] md:text-[60px] text-[#1b1c1d] font-bold mt-[44px] mb-[20px] md:mb-[44px]"><?php echo get_field('similar_cases_heading') ?></h2>
        <div class="hidden md:block relative w-full pb-16">
            <div id="slider-blog-recent" class="w-full my-slider">
                <?php
                if ($recent_posts) {
                    foreach($recent_posts as $recent_post) {
                        $current_taxonomies = get_post_taxonomies($recent_post);
                        $categories = get_the_terms($recent_post, $current_taxonomies[0]);
                ?>
                <div class="w-full">
                    <a href="<?php echo get_permalink($recent_post); ?>"  class="w-full h-full bg-white flex flex-col border border-zinc-200">
                        <div class="w-full h-0 pt-[60%] flex-none bg-cover bg-center" aria-label="<?php echo get_field('image_alt_text', $recent_post->ID); ?>" style="background-image: url(<?php echo esc_url( get_field('feature_image', $recent_post->ID)['url'] ); ?>); "></div>
                        <div class="w-full flex flex-col justify-between items-start grow p-3 lg:p-6 xl:p-9">
                            <div class="w-full">
                                <h3 class="font-bold text-[20px] text-[#1b1c1d] text-left mb-3"><?php echo get_field('title', $recent_post->ID) ?></h3>
                                <?php if ($categories): ?>
                                <p class="leading-relaxed text-[#1b1c1d] text-[15px] mb-3"><?php
                                        if(count($categories) > 0) {
                                            $counter = 0;
                                            foreach ($categories as $cat) {
                                                if( $counter == count( $categories ) - 1) {
                                                    echo $cat->name;
                                                } else {
                                                    echo $cat->name . ', ';
                                                }
                                                $counter++;
                                            }
                                        }
                                    ?></p>
                                <?php endif; ?>
                                <p class="leading-relaxed text-[#9f9f9f] text-[14px] mb-6 line-clamp-3"><?php echo get_field('short_description', $recent_post->ID) ?></p>
                            </div>
                            <div class="text-white flex justify-center text-[14px] font-bold items-center border-2 border-[#1b1c1d] bg-[#1b1c1d] px-6 py-3">
                                <?php echo get_field('read_more_label', $recent_post->ID) ?>
                            </div>
                        </div>
                    </a>
                </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <div class="ms-fw-container block md:hidden w-full overflow-auto md:touch-none cursor-grab no-scrollbar bg-white">
        <div class="ms-container w-[91%] max-w-none lg:max-w-[1112px] mx-auto">
            <div class="ms-wrap inline-flex flex-nowrap mt-[20px] md:mt-[40px]">
                <?php
                foreach($recent_posts as $recent_post) {
                    $current_taxonomies = get_post_taxonomies($recent_post);
                    $categories = get_the_terms($recent_post, $current_taxonomies[0]);
                ?>
                <div class="w-[290px] mr-3 last:mr-0">
                    <a href="<?php echo get_permalink($recent_post); ?>" class="w-full h-full bg-white flex flex-col border border-zinc-200">
                        <div class="w-full h-0 pt-[60%] flex-none bg-cover bg-center" aria-label="<?php echo get_field('image_alt_text', $recent_post->ID); ?>" style="background-image: url(<?php echo esc_url( get_field('feature_image', $recent_post->ID)['url'] ); ?>); "></div>
                        <div class="w-full flex flex-col justify-between items-start grow p-3 lg:p-6 xl:p-9">
                            <div class="w-full">
                                <h3 class="font-bold text-[20px] text-[#1b1c1d] text-left mb-3"><?php echo get_field('title', $recent_post->ID) ?></h3>
                                <?php if ($categories): ?>
                                <p class="leading-relaxed text-[#1b1c1d] text-[15px] mb-3"><?php
                                        if(count($categories) > 0) {
                                            $counter = 0;
                                            foreach ($categories as $cat) {
                                                if( $counter == count( $categories ) - 1) {
                                                    echo $cat->name;
                                                } else {
                                                    echo $cat->name . ', ';
                                                }
                                                $counter++;
                                            }
                                        }
                                    ?></p>
                                <?php endif; ?>
                                <p class="leading-relaxed text-[#9f9f9f] text-[14px] mb-6 line-clamp-3"><?php echo get_field('short_description', $recent_post->ID) ?></p>
                            </div>
                            <div class="text-white flex justify-center text-[14px] font-bold items-center border-2 border-[#1b1c1d] bg-[#1b1c1d] px-6 py-3">
                                <?php echo get_field('read_more_label', $recent_post->ID) ?>
                            </div>
                        </div>
                    </a>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <?php } ?>
</div>