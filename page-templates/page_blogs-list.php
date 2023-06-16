<?php /* Template Name: Blogs List Template */ ?>
<?php get_template_part( 'template-parts/header', 'general' ); ?>
<?php get_template_part( 'template-parts/blogs/hero' ); ?>
<?php get_template_part( 'template-parts/blogs/lists' ); ?>

<!-- footer scripts -->
<script src="<?php echo (get_template_directory_uri() . '/resources/js/page-blogs-list.js' ); ?>"></script>
<script src="<?php echo (get_template_directory_uri() . '/resources/js/dnd-slide.js' ); ?>"></script>

<?php get_template_part( 'template-parts/footer', 'general' );