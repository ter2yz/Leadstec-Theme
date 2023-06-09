<?php /* Template Name: Flexible Content Template */ ?>
<?php get_template_part( 'template-parts/header', 'general' ); ?>

<?php

// Check value exists.
if( have_rows('component_listing') ):
    // Loop through rows.
    while ( have_rows('component_listing') ) : the_row();
        // Case: Paragraph layout.
        if( get_row_layout() == 'header_banner' ):
            get_template_part( 'template-parts/flexibleLayouts/header', 'banner' );
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
        elseif( get_row_layout() == 'hero_banner_homepage' ): 
            get_template_part( 'template-parts/flexibleLayouts/hero-banner-homepage' );
        elseif( get_row_layout() == 'space_occupier' ): 
            get_template_part( 'template-parts/flexibleLayouts/space-occupier' );
        elseif( get_row_layout() == 'case_list_image_switch' ): 
            get_template_part( 'template-parts/flexibleLayouts/case-list-image-switch' );
        elseif( get_row_layout() == 'clients_list' ): 
            get_template_part( 'template-parts/flexibleLayouts/clients-list' );
        elseif( get_row_layout() == 'message_card_list_with_right_icon' ): 
            get_template_part( 'template-parts/flexibleLayouts/message-card-list-with-right-icon' );
        elseif( get_row_layout() == 'header_banner_two_columns' ): 
            get_template_part( 'template-parts/flexibleLayouts/header-banner-two-columns' );
        elseif( get_row_layout() == 'prodcut_list_small_icon' ): 
            get_template_part( 'template-parts/flexibleLayouts/prodcut-list-small-icon' );
        elseif( get_row_layout() == 'product_introduction_slide_single_image' ): 
            get_template_part( 'template-parts/flexibleLayouts/product-introduction-slide-single-image' );
        elseif( get_row_layout() == 'product_introduction_slide_multiple_images' ): 
            get_template_part( 'template-parts/flexibleLayouts/product-introduction-slide-multiple-images' );
        elseif( get_row_layout() == 'message_card_list_with_horizontal_line' ): 
            get_template_part( 'template-parts/flexibleLayouts/message-card-list-with-horizontal-line' );
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
<script src="<?php echo (get_template_directory_uri() . '/resources/js/flexible-case-list-image-switch.js' ); ?>"></script>
<script src="<?php echo (get_template_directory_uri() . '/resources/js/flexible-clients-list.js' ); ?>"></script>
<script src="<?php echo (get_template_directory_uri() . '/resources/js/flexible-product-slide-multiple-images.js' ); ?>"></script>
<script src="<?php echo (get_template_directory_uri() . '/resources/js/dnd-slide.js' ); ?>"></script>

<?php get_template_part( 'template-parts/footer', 'general' );