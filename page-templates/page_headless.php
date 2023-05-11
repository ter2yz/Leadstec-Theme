<?php /* Template Name: Headless CMS Template */ ?>
<?php get_template_part( 'template-parts/header', 'general' ); ?>
<?php get_template_part( 'template-parts/products/headless/hero' ); ?>
<?php get_template_part( 'template-parts/products/headless/best' ); ?>
<?php get_template_part( 'template-parts/products/headless/foundation' ); ?>
<?php get_template_part( 'template-parts/products/headless/authoring-experience' ); ?>
<?php get_template_part( 'template-parts/products/headless/more-stories' ); ?>
<?php get_template_part( 'template-parts/products/headless/tools' ); ?>
<?php get_template_part( 'template-parts/products/headless/power' ); ?>
<?php get_template_part( 'template-parts/products/headless/video-no-limits' ); ?>
<?php get_template_part( 'template-parts/products/headless/leading-analysts' ); ?>
<?php get_template_part( 'template-parts/products/headless/more-about-headless' ); ?>


<!-- footer scripts -->
<script src="<?php echo (get_template_directory_uri() . '/resources/js/slider.js' ); ?>"></script>
<script src="<?php echo (get_template_directory_uri() . '/resources/js/gsap.js' ); ?>"></script>
<script src="<?php echo (get_template_directory_uri() . '/resources/js/page-headless.js' ); ?>"></script>

<?php get_template_part( 'template-parts/footer', 'general' );