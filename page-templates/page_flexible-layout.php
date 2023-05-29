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
        elseif( get_row_layout() == 'image' ): 
            get_template_part( 'template-parts/flexibleLayouts/image' );
        elseif( get_row_layout() == 'related_list_text_link' ): 
            get_template_part( 'template-parts/flexibleLayouts/related-list-text-link' );
        elseif( get_row_layout() == 'solution_list' ): 
            get_template_part( 'template-parts/flexibleLayouts/solution-list' );
        elseif( get_row_layout() == 'product_and_service_list' ): 
            get_template_part( 'template-parts/flexibleLayouts/product-and-service-list' );
        elseif( get_row_layout() == 'clients_wall' ): 
            get_template_part( 'template-parts/flexibleLayouts/clients-wall' );
        elseif( get_row_layout() == 'text_and_image_culture' ): 
            get_template_part( 'template-parts/flexibleLayouts/text-and-image-culture' );
        elseif( get_row_layout() == 'text_component' ): 
            get_template_part( 'template-parts/flexibleLayouts/text-component' );
        endif;
    // End loop.
    endwhile;
// No value.
else :
    // Do something...
endif;
?>

<!-- footer scripts -->
<script src="<?php echo (get_template_directory_uri() . '/resources/js/flexible-solution-list.js' ); ?>"></script>

<?php get_template_part( 'template-parts/footer', 'general' );