<?php /* Template Name: Web Design and Development Template */ ?>
<?php get_template_part( 'template-parts/header', 'general' ); ?>
<?php get_template_part( 'template-parts/services/web/hero' ); ?>
<?php get_template_part( 'template-parts/services/web/cases' ); ?>


<!-- footer scripts -->
<script src="<?php echo (get_template_directory_uri() . '/resources/js/brand-logo-slider.js' ); ?>"></script>
<script src="<?php echo (get_template_directory_uri() . '/resources/js/page-web-design-development.js' ); ?>"></script>

<?php get_template_part( 'template-parts/footer', 'general' );