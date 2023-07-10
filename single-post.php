<?php /* Template Name: Single Story Template */ ?>
<?php get_template_part( 'template-parts/header', 'post' ); ?>
<?php get_template_part( 'template-parts/blog/content' ); ?>
<?php get_template_part( 'template-parts/blog/related' ); ?>

<!-- footer scripts -->
<script src="<?php echo (get_template_directory_uri() . '/resources/js/post-single-blog.js' ); ?>"></script>
<script src="<?php echo (get_template_directory_uri() . '/resources/js/dnd-slide.js' ); ?>"></script>

<?php get_template_part( 'template-parts/footer', 'general' );