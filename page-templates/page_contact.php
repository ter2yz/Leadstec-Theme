<?php /* Template Name: Contact Template */ ?>
<?php get_template_part( 'template-parts/header', 'general' ); ?>
<?php get_template_part( 'template-parts/contact/hero' ); ?>
<?php get_template_part( 'template-parts/contact/tell-us' ); ?>


<!-- footer scripts -->
<script src="<?php echo (get_template_directory_uri() . '/resources/js/contact.js' ); ?>"></script>
<?php get_template_part( 'template-parts/footer', 'general' );