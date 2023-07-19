<?php /* Template Name: 404 Template */ ?>
<?php
    $current_page = get_page_by_path('custom-404');
?>
<?php get_template_part( 'template-parts/header', 'general' ); ?>
<div id="tyMainWrapper" class="relative w-full py-20 flex flex-col justify-center items-center mb-10">
    <div class="w-[91%] max-w-none lg:max-w-[1112px] mx-auto flex flex-col items-center">
        <div class="w-60 h-60 rounded-full mb-6 overflow-hidden">
            <img src="<?php echo get_field('image', $current_page->ID)['url'] ?>" alt="<?php echo get_field('image_alt_text', $current_page->ID); ?>" class="w-full h-full object-cover object-center">
        </div>
        <h2 class="text-[#1b1c1d] text-[30px] md:text-[60px] mb-3"><?php echo get_field('heading', $current_page->ID) ?></h2>
        <p class="text-[#9f9f9f] text-[15px] md:text-[20px] text-center mb-6"><?php echo get_field('description', $current_page->ID) ?></p>
        <a href="<?php echo get_field('button_url', $current_page->ID) ?>" class="text-[16px] text-white flex justify-center items-center border-2 border-zinc-900 bg-zinc-900 px-6 py-2">
            <?php echo get_field('button_label', $current_page->ID) ?>
        </a>
    </div>
</div>

<script src="<?php echo (get_template_directory_uri() . '/resources/js/page-ty.js' ); ?>"></script>

<?php get_template_part( 'template-parts/footer', 'general' );