<?php /* Template Name: Single Blog Template */ ?>
<?php get_template_part( 'template-parts/header', 'general' ); ?>
<?php get_template_part( 'template-parts/blog/content' ); ?>
<?php get_template_part( 'template-parts/blog/related' ); ?>

<!-- footer scripts -->
<script src="<?php echo (get_template_directory_uri() . '/resources/js/post-single-blog.js' ); ?>"></script>

<?php get_template_part( 'template-parts/footer', 'general' );