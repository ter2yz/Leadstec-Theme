<?php /* Template Name: Thank You Template */ ?>
<?php get_template_part( 'template-parts/header', 'screen' ); ?>
<div class="relative w-full py-20 flex flex-col justify-center items-center">
    <div class="w-full flex flex-col items-center">
        <div class="w-60 h-60 bg-red-600 rounded-full mb-6 overflow-hidden">
            <img src="<?php echo get_field('thank_you_section')['icon'] ?>" alt="<?php echo get_field('thank_you_section')['icon_image_alt_text']; ?>" class="w-full h-full object-cover object-center">
        </div>
        <h2 class="text-zinc-900 text-[60px] mb-3"><?php echo get_field('thank_you_section')['heading'] ?></h2>
        <p class="text-zinc-500 text-[15px] capitalize mb-6"><?php echo get_field('thank_you_section')['description'] ?></p>
        <a href="<?php echo get_field('thank_you_section')['button_url'] ?>" class="capitalize text-white flex justify-center items-center border-2 border-zinc-900 bg-zinc-900 px-6 py-2">
            <?php echo get_field('thank_you_section')['button_label'] ?>
        </a>
    </div>
</div>
<div class="w-full">
    <img src="<?php echo get_field('thank_you_section')['bottom_image'] ?>" alt="<?php echo get_field('thank_you_section')['bottom_image_alt_text']; ?>" class="w-full">
</div>