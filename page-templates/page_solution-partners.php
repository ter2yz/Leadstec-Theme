<?php /* Template Name: Adobe Solution Partner Template */ ?>
<?php get_template_part( 'template-parts/header', 'general' ); ?>
<?php get_template_part( 'template-parts/services/solutions/hero' ); ?>
<?php get_template_part( 'template-parts/services/solutions/why' ); ?>
<?php get_template_part( 'template-parts/services/solutions/evaluation' ); ?>
<?php get_template_part( 'template-parts/services/solutions/partner' ); ?>
<?php get_template_part( 'template-parts/services/solutions/cases' ); ?>


<!-- footer scripts -->
<script src="<?php echo (get_template_directory_uri() . '/resources/js/brand-logo-slider.js' ); ?>"></script>
<script src="<?php echo (get_template_directory_uri() . '/resources/js/slider.js' ); ?>"></script>

<?php get_template_part( 'template-parts/footer', 'general' );