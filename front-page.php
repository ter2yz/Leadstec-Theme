<?php get_template_part( 'template-parts/header', 'general' ); ?>
<?php get_template_part( 'template-parts/home/hero' ); ?>
<?php get_template_part( 'template-parts/home/stories' ); ?>
<?php get_template_part( 'template-parts/home/solutions' ); ?>
<?php get_template_part( 'template-parts/home/services' ); ?>
<?php get_template_part( 'template-parts/home/clients' ); ?>
<?php get_template_part( 'template-parts/home/why' ); ?>
<?php get_template_part( 'template-parts/home/culture' ); ?>


<!-- footer scripts -->
<script src="<?php echo (get_template_directory_uri() . '/resources/js/page-home.js' ); ?>"></script>
<script src="<?php echo (get_template_directory_uri() . '/resources/js/brand-logo-slider.js' ); ?>"></script>
<script src="<?php echo (get_template_directory_uri() . '/resources/js/home-solutions.js' ); ?>"></script>

<?php get_template_part( 'template-parts/footer', 'general' );