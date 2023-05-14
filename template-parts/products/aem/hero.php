<?php
    if(get_field('hero')['background_image']) {
?>
<section class="relative w-full flex justify-center items-center pt-20 pb-32 bg-center bg-cover bg-no-repeat" style="background-image: url(<?php echo get_field('hero')['background_image']; ?>)">    
<?php
    } else {
?>
<section class="relative w-full flex justify-center items-center pt-20 pb-32" style="background-color: <?php echo get_field('hero')['background_color']; ?>">
<?php
    }
?>
    <div class="w-[91%] max-w-none lg:max-w-[1112px] mx-auto">
        <div class="w-full flex flex-col-reverse lg:flex-row justify-start lg:justify-center items-center @container lg:min-h-[600px] overflow-hidden">
            <div class="relative w-full lg:w-7/12 flex flex-col items-start lg:pr-10 z-10 text-white">
                <p class="leading-relaxed text-[15px] md:text-[20px] mb-[20px] md:mb-[30px]"><?php echo get_field('hero')['sub_heading']; ?></p>
                <h1 class="text-[30px] md:text-[60px] capitalize font-bold leading-tight mb-[10px] md:mb-[15px]"><?php echo get_field('hero')['heading']; ?></h1>
                <p class="leading-relaxed text-[15px] md:text-[20px]"><?php echo get_field('hero')['description']; ?></p>
                <a data-fslightbox="lightbox" href="<?php echo get_field('hero')['cta_button_url']; ?>" class="text-[14px] mt-10 flex justify-center items-center border-2 border-[#1b1c1d] bg-[#1b1c1d] px-6 py-3">
                    <?php echo get_field('hero')['cta_button_text']; ?>
                </a>
            </div>
            <div class="w-full lg:w-5/12 relative flex justify-end mb-6 lg:mb-0 ">
                <?php
                    if(get_field('hero')['image']){
                ?>
                <img class="w-full" src="<?php echo esc_url( get_field('hero')['image']['url'] ); ?>" alt="<?php echo get_field('hero')['image_alt_text']; ?>">
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="w-full absolute left-0 bottom-0" aria-label="<?php echo get_field('hero')['background_image_alt_text']; ?>" style="background-color: <?php echo get_field('hero')['background_image'] ? "transparent" : get_field('hero')['background_color']; ?>">
        <svg viewBox="0 0 1920 121" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M960 0C429.807 0 0 93.2907 0 120.65H1920C1920 93.2907 1490.19 0 960 0Z" fill="white"/>
        </svg>
    </div>
</section>
<div class="relative w-full h-2 bg-white -mt-1 z-10"></div>