<?php /* Template Name: Flexible Content Test Template */ ?>
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
        elseif( get_row_layout() == 'related_list_black' ): 
            get_template_part( 'template-parts/flexibleLayouts/related-list-black' );
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
        elseif( get_row_layout() == 'message_card_list' ): 
            get_template_part( 'template-parts/flexibleLayouts/message-card-list' );
        elseif( get_row_layout() == 'relate_list_with_button' ): 
            get_template_part( 'template-parts/flexibleLayouts/relate-list-with-button' );
        elseif( get_row_layout() == 'relate_list_with_link' ): 
            get_template_part( 'template-parts/flexibleLayouts/relate-list-with-link' );
        elseif( get_row_layout() == 'customer_evaluation_list' ): 
            get_template_part( 'template-parts/flexibleLayouts/customer-evaluation-list' );
        elseif( get_row_layout() == 'tools_display' ): 
            get_template_part( 'template-parts/flexibleLayouts/tools-display' );
        elseif( get_row_layout() == 'image_popup_two_columns' ): 
            get_template_part( 'template-parts/flexibleLayouts/image-popup-two-columns' );
        elseif( get_row_layout() == 'single_banner' ): 
            get_template_part( 'template-parts/flexibleLayouts/single-banner' );
        elseif( get_row_layout() == 'customer_evaluation_two_columns' ): 
            get_template_part( 'template-parts/flexibleLayouts/customer-evaluation-two-columns' );
        elseif( get_row_layout() == 'message_card_list_two_columns' ): 
            get_template_part( 'template-parts/flexibleLayouts/message-card-list-two-columns' );
        elseif( get_row_layout() == 'text_and_image_with_link' ): 
            get_template_part( 'template-parts/flexibleLayouts/text-and-image-with-link' );
        elseif( get_row_layout() == 'video' ): 
            get_template_part( 'template-parts/flexibleLayouts/video' );
        elseif( get_row_layout() == 'left_image_right_text' ): 
            get_template_part( 'template-parts/flexibleLayouts/left-image-right-text' );
        elseif( get_row_layout() == 'hero_banner_with_shadow' ): 
            get_template_part( 'template-parts/flexibleLayouts/hero-banner-with-shadow' );
        elseif( get_row_layout() == 'contact_form' ): 
            get_template_part( 'template-parts/flexibleLayouts/contact-form' );
        elseif( get_row_layout() == 'case_list_number_switch' ): 
            get_template_part( 'template-parts/flexibleLayouts/case-list-number-switch' );
        elseif( get_row_layout() == 'product_list_category' ): 
            get_template_part( 'template-parts/flexibleLayouts/product-list-category' );
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
<script src="<?php echo (get_template_directory_uri() . '/resources/js/flexible-relate-list-btn.js' ); ?>"></script>
<script src="<?php echo (get_template_directory_uri() . '/resources/js/flexible-video.js' ); ?>"></script>
<script src="<?php echo (get_template_directory_uri() . '/resources/js/flexible-case-list-number.js' ); ?>"></script>
<script src="<?php echo (get_template_directory_uri() . '/resources/js/flexible-customer-evaluation-two-columns.js' ); ?>"></script>
<script src="<?php echo (get_template_directory_uri() . '/resources/js/flexible-filter.js' ); ?>"></script>
<script src="<?php echo (get_template_directory_uri() . '/resources/js/dnd-slide.js' ); ?>"></script>
<script src="<?php echo (get_template_directory_uri() . '/resources/js/contact.js' ); ?>"></script>

<?php get_template_part( 'template-parts/footer', 'general' );