<?php /* Template Name: Adobe Experience Cloud Template */ ?>
<?php get_template_part( 'template-parts/header', 'general' ); ?>
<?php get_template_part( 'template-parts/products/aec/hero' ); ?>
<?php get_template_part( 'template-parts/products/aec/benefits' ); ?>
<?php get_template_part( 'template-parts/products/aec/products' ); ?>


<!-- footer scripts -->
<script src="<?php echo (get_template_directory_uri() . '/resources/js/filter.js' ); ?>"></script>

<?php get_template_part( 'template-parts/footer', 'general' );