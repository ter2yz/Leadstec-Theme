<?php 
function processPagination($paginationArray, $prev_text, $next_text) {
    $output = new stdClass();
    $output->prev = null;
    $output->next = null;

    foreach ($paginationArray as $index => $pageItem) {
        preg_match('/href="(.*?)"/', $pageItem, $matches);
        $url = isset($matches[1]) ? $matches[1] : null;
        $title = strip_tags($pageItem);
        console_log($title);
        if ($title === $prev_text) {
            $output->prev = $url;
        }
        if ($title === $next_text) {
            $output->next = $url;
        }
    }

    return $output;
}
$current_post = get_post();

$current_type = get_field('blogs_type');
$taxonomy = get_object_taxonomies($current_type, 'names');
$categories = get_terms($taxonomy, array(
    'hide_empty' => false,
    'orderby' => 'date'
));
$current_taxo = get_query_var('taxo');
?>
<section class="relative w-full z-20">
    <div class="w-full flex flex-col-reverse md:flex-row justify-center items-start md:min-h-[600px]">
        <div id="<?php echo get_field('recent_section_id', $current_post->ID); ?>" class="w-[91%] max-w-none lg:max-w-[1112px] mx-auto md:w-4/12 md:min-h-screen md:sticky md:top-12 bg-white md:bg-gray-100 pt-6 pb-40 lg:px-12 lg:pt-12">
            <div class="w-full p-6">
                <div class="w-full flex flex-col">
                    <?php
                        if($categories){
                            foreach($categories as $cat){
                                console_log($cat)
                    ?>
                        <a href="?taxo=<?php echo $cat->slug; ?>" class="<?php echo $current_taxo == $cat->slug ? 'text-orange-500' : '' ?>">
                            <p><?php echo $cat->name; ?></p>
                        </a>
                    <?php
                            }
                        }
                    ?>
                </div>
            </div>
            <div class="w-full bg-white md:p-6">
                <h3 class="font-bold text-xl text-left mb-[20px]"><?php echo get_field('recent_posts_heading', $current_post->ID);?></h3>
                <div class="w-full h-[590px] overflow-y-auto no-scrollbar">
                    <?php
                    $recent_posts = get_posts(array(
                        'numberposts' => -1,
                        'post_type' => $current_type,
                        'meta_key'  => 'post_date',
                        'orderby' => array( 'meta_value' => 'DESC' ), 
                    ));
                    if ($recent_posts) {
                        foreach($recent_posts as $recent_post) {
                            $current_taxonomies = get_post_taxonomies($recent_post);
                            $categories = get_the_terms($recent_post, $current_taxonomies[0]);
                            if(get_field('post_date', $recent_post->ID)){
                                $postDate = DateTime::createFromFormat( 'Ymd', get_field('post_date', $recent_post->ID) );
                                $dateStr = $postDate->format('j F Y');
                                if ($current_type == "blogs_sc" || $current_type == "blogs_tc") {
                                    $dateStr = $postDate->format('Y年n月j日');; 
                                }
                            } else {
                                $dateStr = "";
                            }
                    ?>
                    <a href="<?php echo get_permalink($recent_post) ?>" class="w-full flex flex-col items-start justify-center border-b border-zinc-400/25 last:border-transparent py-[20px]">
                        <p class="text-zinc-900 font-medium capitalize mb-[10px]"><?php echo get_field('title', $recent_post->ID) ?></p>
                        <p class="text-zinc-500 capitalize"><?php echo $categories[0]->name ?><?php echo $categories[0]&&$dateStr ? " • " : "" ?><?php echo $dateStr; ?></p>
                    </a>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div id="<?php echo get_field('all_posts_section_id', $current_post->ID); ?>" class="hidden md:block w-full md:w-8/12 px-6 pt-6 pb-40 lg:px-12 lg:pt-12">
            <div class="w-full flex flex-col md:flex-row flex-wrap justify-start items-stretch transition opacity-100 px-6 lg:px-0">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $loop = new WP_Query( array(
                    'numberposts' => -1,
                    'post_type' => $current_type,
                    $taxonomy[0] => $current_taxo,
                    'meta_key'  => 'post_date',
                    'orderby' => array( 'meta_value' => 'DESC' ), 
                    'posts_per_page' => 10,
                    'paged' => $paged,
                ));
                if ( $loop->have_posts() ) {
                    while ( $loop->have_posts() ) : $loop->the_post();
                    $current_taxonomies = get_post_taxonomies($post);
                    $categories = get_the_terms($post, $current_taxonomies[0]);
                    if(get_field('post_date', $post->ID)){
                        $postDate = DateTime::createFromFormat( 'Ymd', get_field('post_date', $post->ID) );
                        $dateStr = $postDate->format('j F Y');
                        if ($current_type == "blogs_sc" || $current_type == "blogs_tc") {
                            $dateStr = $postDate->format('Y年n月j日');; 
                        }
                    } else {
                        $dateStr = "";
                    }
                // $allPosts = $recent_posts;
                // if ($allPosts) {
                //     foreach($allPosts as $singlePost) {
                //         $current_taxonomies = get_post_taxonomies($singlePost);
                //         $categories = get_the_terms($singlePost, $current_taxonomies[0]);
                //         if(get_field('post_date', $singlePost->ID)){
                //             $postDate = DateTime::createFromFormat( 'Ymd', get_field('post_date', $singlePost->ID) );
                //             $dateStr = $postDate->format('j F Y');
                //             if ($current_type == "blogs_sc" || $current_type == "blogs_tc") {
                //                 $dateStr = $postDate->format('Y年n月j日');; 
                //             }
                //         } else {
                //             $dateStr = "";
                //         }
                ?>
                <div class="w-full lg:w-1/2 lg:odd:pl-0 lg:odd:pr-3 lg:even:pl-3 lg:even:pr-0 overflow-hidden mb-6">
                    <div class="w-full h-full bg-white flex flex-col border border-zinc-200">
                        <a href="<?php echo get_permalink($post) ?>" class="w-full h-0 pt-[60%] flex-none bg-cover bg-center" aria-label="<?php echo get_field('image_alt_text', $post->ID); ?>" style="background-image: url(<?php echo esc_url( get_field('feature_image', $post->ID)['url'] ); ?>); "></a>
                        <div class="w-full flex flex-col justify-between items-start grow p-3 md:p-6 xl:p-9">
                            <div class="w-full">
                                <h3 class="font-bold text-xl text-left mb-3"><?php echo get_field('title', $post->ID) ?></h3>
                                <p class="leading-relaxed mb-3"><?php echo $categories[0]->name ?><?php echo $categories[0]&&$dateStr ? " • " : "" ?><?php echo $dateStr; ?></p>
                                <p class="leading-relaxed text-[#9f9f9f] text-[14px] line-clamp-3 mb-6"><?php echo get_field('short_description', $post->ID) ?></p>
                            </div>
                            <a href="<?php echo get_permalink($post) ?>" class="text-sky-600"><?php echo get_field('learn_more_label', $current_post->ID);?></a>
                        </div>
                    </div>
                </div>
                <?php
                    endwhile;
                ?>
                </div>
                <?php
                    
                    $total_pages = $loop->max_num_pages;
                
                    if ($total_pages > 1){
                
                        $current_page = max(1, get_query_var('paged'));
                
                        $pagination = paginate_links(array(
                            'base' => html_entity_decode( get_pagenum_link(1) ) . '%_%',
                            'format' => '?paged=%#%',
                            'current' => $current_page,
                            'total' => $total_pages,
                            'type' => 'array',
                            'prev_text' => __('prev'),
                            'next_text' => __('next'),
                        ));
                        $pagination_object = processPagination($pagination, 'prev', 'next');
                    }    
                }
                ?>
                <?php if($total_pages >1): ?>
                <div class="flex">
                    <a class="py-2 px-3 rounded-lg border-solid border mr-2 <?php echo $pagination_object->prev ? 'border-blue-500 text-blue-500' : 'text-gray-200 border-gray-200 pointer-events-none cursor-default' ?>" href="<?php echo $pagination_object->prev ?>" ><</a>
                    <a class="py-2 px-3 rounded-lg border-solid border <?php echo $pagination_object->next ? 'border-blue-500 text-blue-500' : 'text-gray-200 border-gray-200 pointer-events-none cursor-default' ?>" href="<?php echo $pagination_object->next ?>" >></a>
                </div>
                <?php endif; ?>
        </div>
        <div id="<?php echo get_field('all_posts_section_id', $current_post->ID); ?>" class="ms-fw-container block md:hidden w-full overflow-auto md:touch-none cursor-grab no-scrollbar bg-gray-100">
            <div class="ms-container w-[91%] max-w-none lg:max-w-[1112px] mx-auto">
                <div class="ms-wrap inline-flex flex-nowrap my-[20px] md:my-[40px]">
                    <?php
                    $allPosts = $recent_posts;
                    if ($allPosts) {
                        foreach($allPosts as $singlePost) {
                            $current_taxonomies = get_post_taxonomies($singlePost);
                            $categories = get_the_terms($singlePost, $current_taxonomies[0]);
                            if(get_field('post_date', $singlePost->ID)){
                                $postDate = DateTime::createFromFormat( 'Ymd', get_field('post_date', $singlePost->ID) );
                                $dateStr = $postDate->format('j F Y');
                                if ($current_type == "blogs_sc" || $current_type == "blogs_tc") {
                                    $dateStr = $postDate->format('Y年n月j日');; 
                                }
                            } else {
                                $dateStr = "";
                            }
                    ?>
                    <div class="w-[290px] mr-3 last:mr-0">
                        <div class="w-full h-full bg-white flex flex-col border border-zinc-200">
                            <a href="<?php echo get_permalink($singlePost) ?>" class="w-full h-0 pt-[60%] flex-none bg-cover bg-center" aria-label="<?php echo get_field('image_alt_text', $singlePost->ID); ?>" style="background-image: url(<?php echo esc_url( get_field('feature_image', $singlePost->ID)['url'] ); ?>); "></a>
                            <div class="w-full flex flex-col justify-between items-start grow p-3 md:p-6 xl:p-9">
                                <div class="w-full">
                                    <h3 class="font-bold text-xl text-left mb-3"><?php echo get_field('title', $singlePost->ID) ?></h3>
                                    <p class="leading-relaxed mb-3"><?php echo $categories[0]->name ?><?php echo $categories[0]&&$dateStr ? " • " : "" ?><?php echo $dateStr; ?></p>
                                    <p class="leading-relaxed text-[#9f9f9f] text-[14px] line-clamp-3 mb-6"><?php echo get_field('short_description', $singlePost->ID) ?></p>
                                </div>
                                <a href="<?php echo get_permalink($singlePost) ?>" class="text-sky-600"><?php echo get_field('learn_more_label', $current_post->ID);?></a>
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