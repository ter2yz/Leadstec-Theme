<?php /* Template Name: Single Case Template */ ?>
<?php get_template_part( 'template-parts/header', 'post' ); ?>
<?php get_template_part( 'template-parts/case/content' ); ?>
<?php get_template_part( 'template-parts/case/related' ); ?>

<!-- footer scripts -->
<script src="<?php echo (get_template_directory_uri() . '/resources/js/post-single-blog.js' ); ?>"></script>
<script src="<?php echo (get_template_directory_uri() . '/resources/js/dnd-slide.js' ); ?>"></script>

<?php get_template_part( 'template-parts/footer', 'general' );