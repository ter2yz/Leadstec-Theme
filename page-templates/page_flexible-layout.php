<?php /* Template Name: Flexible Content Template */ ?>
<?php get_template_part( 'template-parts/header', 'general' ); ?>

<?php

// Check value exists.
if( have_rows('component_listing') ):
    // Loop through rows.
    while ( have_rows('component_listing') ) : the_row();
        // Case: Paragraph layout.
        if( get_row_layout() == 'header_banner' ):
            get_template_part( 'template-parts/flexibleLayouts/hero', 'banner' );
            // Do something...
        // Case: Download layout.
        elseif( get_row_layout() == 'download' ): 
            $file = get_sub_field('file');
            // Do something...
        endif;
    // End loop.
    endwhile;
// No value.
else :
    // Do something...
endif;
?>

<!-- footer scripts -->
<?php get_template_part( 'template-parts/footer', 'general' );