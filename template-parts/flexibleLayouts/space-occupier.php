<?php

// Check value exists.
if( have_rows('occupier') ):
    // Loop through rows.
    while ( have_rows('occupier') ) : the_row();
        // Case: Paragraph layout.
        if( get_row_layout() == 'desktop' ):
?>
    <div class="w-full hidden lg:block" style="background-color:<?php echo get_sub_field('background_color');?>;height:<?php echo get_sub_field('height');?>px"></div>
<?php
        elseif( get_row_layout() == 'tablet' ): 
?>
    <div class="w-full hidden md:block lg:hidden" style="background-color:<?php echo get_sub_field('background_color');?>;height:<?php echo get_sub_field('height');?>px"></div>
<?php
        elseif( get_row_layout() == 'mobile' ): 
?>
    <div class="w-full block md:hidden" style="background-color:<?php echo get_sub_field('background_color');?>;height:<?php echo get_sub_field('height');?>px"></div>
<?php
        endif;
    // End loop.
    endwhile;
// No value.
else :
    // Do something...
endif;
?>