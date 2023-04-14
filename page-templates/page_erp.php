<?php /* Template Name: ERP Template */ ?>
<?php get_template_part( 'template-parts/header', 'general' ); ?>
<?php get_template_part( 'template-parts/products/erp/hero' ); ?>
<?php get_template_part( 'template-parts/products/erp/things' ); ?>


<!-- footer scripts -->
<script src="<?php echo (get_template_directory_uri() . '/resources/js/gsap.js' ); ?>"></script>

<?php get_template_part( 'template-parts/footer', 'general' );