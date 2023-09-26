<?php 
function processPagination($paginationArray, $prev_text, $next_text) {
    $output = new stdClass();
    $output->prev = null;
    $output->next = null;

    foreach ($paginationArray as $index => $pageItem) {
        preg_match('/href="(.*?)"/', $pageItem, $matches);
        $url = isset($matches[1]) ? $matches[1] : null;
        $title = strip_tags($pageItem);
        if ($title === $prev_text) {
            $output->prev = $url;
        }
        if ($title === $next_text) {
            $output->next = $url;
        }
    }

    return $output;
}
function remove_pagination_from_url($url) {
    // Parse the URL
    $parsed_url = parse_url($url);
    // Get the path without the pagination part
    $path = preg_replace('/\/page\/\d+\//', '', $parsed_url['path']);
    return $path;
}


$base_list_url = remove_pagination_from_url($_SERVER['REQUEST_URI']);
$current_post = get_post();

$current_type = get_field('blogs_type');
$taxonomy = get_object_taxonomies($current_type, 'names');
$categories = get_terms($taxonomy, array(
    'hide_empty' => false,
    'orderby' => 'date'
));
$mobileCategories = get_terms($taxonomy, array(
    'hide_empty' => false,
    'orderby' => 'date'
));
usort($categories, function($a, $b) {
    return intval(get_field('order', $a)) - intval(get_field('order', $b));
});
usort($mobileCategories, function($a, $b) {
    return intval(get_field('order', $a)) - intval(get_field('order', $b));
});
if (strtolower(get_query_var('category')) == 'all' || !get_query_var('category')) {
    $current_taxo = '';
} else {
    $current_taxo = get_query_var('category');
}
?>
<section class="relative w-full z-20 pb-[100px] md:pb-[140px] lg:pb-[100px] md:bg-gray-100">
    <div class="w-full flex flex-col-reverse md:flex-row justify-center items-start md:min-h-[600px]">
        <div id="<?php echo get_field('recent_section_id', $current_post->ID); ?>" class="w-[91%] max-w-none lg:max-w-[1112px] mx-auto md:w-4/12 md:h-[calc(100vh-75px)] md:sticky md:top-12 bg-white md:bg-gray-100 pt-6 pb-10 md:pl-6 md:pr-0 lg:pl-12 lg:pr-12 lg:pt-12 md:overflow-y-auto no-scrollbar">
            <div class="hidden md:flex w-full bg-white md:p-6 flex-col mb-4">
                <h3 class="font-bold text-xl text-left mb-[20px]"><?php echo get_field('categories_heading', $current_post->ID);?></h3>
                <div class="w-full flex flex-col grow">
                        <a href="<?php echo $base_list_url; ?>?category=all" class="<?php echo strtolower(get_query_var('category')) == 'all' ? 'text-orange-500' : '' ?> border-b border-zinc-400/25 last:border-transparent py-3 transition hover:text-orange-500">
                            <p><?php echo get_field('all_posts_heading', $current_post->ID); ?></p>
                        </a>
                    <?php
                        if($categories){
                            foreach($categories as $cat){
                    ?>
                        <a href="<?php echo $base_list_url; ?>?category=<?php echo $cat->slug; ?>" class="<?php echo $current_taxo == $cat->slug ? 'text-orange-500' : '' ?> border-b border-zinc-400/25 last:border-transparent py-3 transition hover:text-orange-500">
                            <p><?php echo $cat->name; ?></p>
                        </a>
                    <?php
                            }
                        }
                    ?>
                </div>
            </div>
            <div class="w-full bg-white md:p-6 flex flex-col">
                <h3 class="font-bold text-xl text-left mb-[20px]"><?php echo get_field('recent_posts_heading', $current_post->ID);?></h3>
                <div class="w-full">
                    <?php
                    $recent_posts = get_posts(array(
                        'numberposts' => 10,
                        'post_type' => $current_type,
                        'meta_key'  => 'post_date',
                        'orderby' => array( 'meta_value' => 'DESC' ), 
                    ));
                    if ($recent_posts) {
                        foreach($recent_posts as $recent_post) {
                            $current_taxonomies = get_post_taxonomies($recent_post);
                            $cats = get_the_terms($recent_post, $current_taxonomies[0]);
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
                        <p class="text-zinc-500 capitalize"><?php echo $cats[0]->name ?><?php echo $cats[0]&&$dateStr ? " • " : "" ?><?php echo $dateStr; ?></p>
                    </a>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div id="<?php echo get_field('all_posts_section_id', $current_post->ID); ?>" class=" w-full md:w-8/12 px-6 pt-6 pb-10 lg:px-12 lg:pt-12">
            <div class="w-full flex flex-col md:flex-row flex-wrap justify-start items-stretch transition opacity-100 px-0 md:px-6 lg:px-0">
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
                if ( $loop->have_posts() ){
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
                ?>
                <a href="<?php echo get_permalink($post) ?>" class="hidden md:block w-full lg:w-1/2 lg:odd:pl-0 lg:odd:pr-3 lg:even:pl-3 lg:even:pr-0 overflow-hidden mb-6">
                    <div class="w-full h-full bg-white flex flex-col border border-zinc-200">
                        <div class="w-full h-0 pt-[60%] flex-none bg-cover bg-center" aria-label="<?php echo get_field('image_alt_text', $post->ID); ?>" style="background-image: url(<?php echo esc_url( get_field('feature_image', $post->ID)['url'] ); ?>); "></div>
                        <div class="w-full flex flex-col justify-between items-start grow p-3 md:p-6 xl:p-9">
                            <div class="w-full">
                                <h3 class="font-bold text-xl text-left mb-3"><?php echo get_field('title', $post->ID) ?></h3>
                                <p class="text-sm">
                                    <?php
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
                                    ?>
                                </p>
                                <p class="text-sm mb-3"><?php echo $dateStr; ?></p>
                                <p class="leading-relaxed text-[#9f9f9f] text-[14px] line-clamp-3 mb-6"><?php echo get_field('short_description', $post->ID) ?></p>
                            </div>
                            <button class="text-sky-600"><?php echo get_field('learn_more_label', $current_post->ID);?></button>
                        </div>
                    </div>
                </a>
                <a href="<?php echo get_permalink($post) ?>" class="flex md:hidden w-full h-full bg-white flex-col border border-zinc-200 mb-6">
                    <div class="w-full h-0 pt-[60%] flex-none bg-cover bg-center" aria-label="<?php echo get_field('image_alt_text', $post->ID); ?>" style="background-image: url(<?php echo esc_url( get_field('feature_image', $post->ID)['url'] ); ?>); "></div>
                    <div class="w-full flex flex-col justify-between items-start grow p-[30px] lg:p-6 xl:p-9">
                        <div class="w-full">
                            <h3 class="font-bold text-[20px] text-[#1b1c1d] text-left mb-3"><?php echo get_field('title', $post->ID) ?></h3>
                            <p class="leading-relaxed text-[#1b1c1d] text-[15px]"><?php
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
                            <p class="leading-relaxed text-[#1b1c1d] text-[15px] mb-3"><?php echo $dateStr; ?></p>
                            <p class="leading-relaxed text-[#9f9f9f] text-[14px] md:text-[17px] mb-6 line-clamp-3"><?php echo get_field('short_description', $post->ID) ?></p>
                        </div>
                        <?php if (get_field('learn_more_label', $current_post->ID)): ?>
                        <button class="text-white flex justify-center text-[14px] md:text-[17px] font-bold items-center border-2 border-[#1b1c1d] bg-[#1b1c1d] px-6 py-3">
                            <?php echo get_field('learn_more_label', $current_post->ID);?>
                        </button>
                        <?php endif; ?>
                    </div>
                </a>
                <?php
                    endwhile;
                ?>
                <?php
                    
                    $total_pages = $loop->max_num_pages;
                    if (get_query_var('category')) {
                        $para_format = '&paged=%#%';
                    } else {
                        $para_format = '?paged=%#%';
                    }
                
                    if ($total_pages > 1){
                
                        $current_page = max(1, get_query_var('paged'));
                        $big = 999999999;
                
                        $pagination = paginate_links(array(
                            // 'base' => html_entity_decode( get_pagenum_link(1) ) . '%_%',
                            'base' => html_entity_decode( get_pagenum_link(1) ) . '%_%',
                            'format' => $para_format,
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
                </div>
                <?php if($total_pages >1): ?>
                <div class="flex px-0 md:px-6 lg:px-0">
                    <a class="py-2 px-3 rounded-lg border-solid border mr-2 <?php echo $pagination_object->prev ? 'border-blue-500 text-blue-500' : 'text-gray-200 border-gray-200 pointer-events-none cursor-default' ?>" href="<?php echo $pagination_object->prev ?>" ><</a>
                    <a class="py-2 px-3 rounded-lg border-solid border <?php echo $pagination_object->next ? 'border-blue-500 text-blue-500' : 'text-gray-200 border-gray-200 pointer-events-none cursor-default' ?>" href="<?php echo $pagination_object->next ?>" >></a>
                </div>
                <?php endif; ?>
        </div>
        <div class="w-[91%] mx-auto flex md:hidden flex-col">
            <h3 class="font-bold text-xl text-left mb-[20px]"><?php echo get_field('categories_heading', $current_post->ID);?></h3>
            <div class="w-full flex justify-start items-center mb-5 no-scrollbar flex-wrap">
                <a href="<?php echo $base_list_url; ?>?category=all" class="border <?php echo strtolower(get_query_var('category')) == 'all' ? 'text-orange-500 border-orange-500' : 'text-[#9f9f9f] border-zinc-400/25' ?> text-[15px] font-bold rounded-lg px-6 py-2 mr-3 whitespace-nowrap mb-3"><?php echo get_field('all_posts_heading', $current_post->ID); ?></a>
                <?php
                    if($mobileCategories){
                    foreach($mobileCategories as $cat){
                ?>
                    <a href="<?php echo $base_list_url; ?>?category=<?php echo $cat->slug; ?>" class="border <?php echo $current_taxo == $cat->slug ? 'text-orange-500 border-orange-500' : 'text-[#9f9f9f] border-zinc-400/25' ?> text-[15px] font-bold rounded-lg px-6 py-2 mr-3 mb-3 whitespace-nowrap"><?php echo $cat->name; ?></a>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>