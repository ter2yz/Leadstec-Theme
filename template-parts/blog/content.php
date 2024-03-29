<?php
$current_post = get_post();
$post_type = get_post_type($current_post);
$post_type_obj = get_post_type_object( $post_type );
// Check if a description is set.
if ( isset( $post_type_obj->description ) ) {
    $current_lang = $post_type_obj->description;
} else {
    $current_lang = '';
}
$current_taxonomies = get_post_taxonomies($current_post);
$categories = get_the_terms($current_post, $current_taxonomies[0]);
$postDate = DateTime::createFromFormat( 'Ymd', get_field('post_date', $current_post->ID) );
$dateStr = $postDate->format('j F Y');
if ($post_type == "blogs_sc" || $post_type == "blogs_tc") {
    $dateStr = $postDate->format('Y年n月j日');; 
}
?>
<div class="w-full">
    <div class="w-full md:w-[91%] max-w-none lg:max-w-[1112px] mx-auto">
        <div class="w-[91%] md:w-full max-w-none lg:max-w-[1112px] mx-auto mb-3">
            <a href="<?php echo get_field('back_button_url')?>" class="text-sky-600"><?php echo get_field('back_button_label')?></a>
        </div>
        <div class="relative w-full flex flex-col md:flex-row items-stretch mb-10">
            <img class="w-full md:w-[27.3vw] md:max-w-[350px] object-cover" src="<?php echo esc_url( get_field('feature_image')['url'] ); ?>" alt="<?php echo get_field('image_alt_text'); ?>">
            <div class="w-full flex flex-col justify-start items-start py-6 px-[20px] md:px-[25px] lg:px-10 bg-gray-50">
                <p class="text-[#1b1c1d] text-[30px] md:text-[36px] lg:text-[40px] font-semibold mt-3 mb-3"><?php echo get_field('title') ?></p>
                <p class="text-[#1b1c1d] w-full">
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
                <p class="text-[#1b1c1d] w-full"><?php echo $dateStr; ?></p>
            </div>
        </div>
    </div>
    <div class="w-full">
        <?php get_template_part( 'template-parts/flexible-components' );?>
    </div>
</div>