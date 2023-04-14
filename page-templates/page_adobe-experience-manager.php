<?php /* Template Name: Adobe Experience Manager Template */ ?>
<?php get_template_part( 'template-parts/header', 'general' ); ?>
<?php get_template_part( 'template-parts/products/aem/hero' ); ?>
<?php get_template_part( 'template-parts/products/aem/benefits' ); ?>
<?php get_template_part( 'template-parts/products/aem/different' ); ?>
<?php get_template_part( 'template-parts/products/aem/one-second-cta' ); ?>
<?php get_template_part( 'template-parts/products/aem/banner' ); ?>
<?php get_template_part( 'template-parts/products/aem/recommend' ); ?>
<?php get_template_part( 'template-parts/products/aem/brands-cta' ); ?>
<?php get_template_part( 'template-parts/products/aem/success-stories' ); ?>


<!-- footer scripts -->
<script src="<?php echo (get_template_directory_uri() . '/resources/js/slider.js' ); ?>"></script>
<script src="<?php echo (get_template_directory_uri() . '/resources/js/brand-logo-slider.js' ); ?>"></script>
<script src="<?php echo (get_template_directory_uri() . '/resources/js/home-solutions.js' ); ?>"></script>
<script src="<?php echo (get_template_directory_uri() . '/resources/js/gsap.js' ); ?>"></script>

<?php get_template_part( 'template-parts/footer', 'general' );