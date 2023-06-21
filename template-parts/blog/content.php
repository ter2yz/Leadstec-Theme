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
if ($current_type == "blogs_sc" || $current_type == "blogs_tc") {
    $dateStr = $postDate->format('Y年n月j日');; 
}
?>
<div class="w-full">
    <div class="w-full md:w-[91%] max-w-none lg:max-w-[1112px] mx-auto">
        <div class="mb-3">
            <a href="<?php echo get_field('back_button_url')?>" class="text-sky-600"><?php echo get_field('back_button_label')?></a>
        </div>
        <div class="relative w-full flex flex-col md:flex-row items-stretch mb-10">
            <img class="w-full md:w-[27.3vw] object-cover" src="<?php echo esc_url( get_field('feature_image')['url'] ); ?>" alt="<?php echo get_field('feature_image')['alt']; ?>">
            <div class="w-full flex flex-col justify-start items-start py-6 px-6 lg:px-10 bg-gray-50">
                <p class="text-[#1b1c1d] text-[30px] md:text-[36px] lg:text-[40px] font-semibold mt-3 mb-3"><?php echo get_field('title') ?></p>
                <p class="text-[#1b1c1d] mb-3"><?php echo $categories[0]->name ?><?php echo $categories[0]&&$dateStr ? " • " : "" ?><?php echo $dateStr; ?></p>
            </div>
        </div>
    </div>
    <div class="w-full">
        <?php get_template_part( 'template-parts/flexible-components' );?>
    </div>
</div>