<section class="relative w-full flex justify-center items-center bg-cover bg-bottom pt-20 pb-40" aria-label="<?php echo get_field('hero_section')['background_image_alt_text'] ?>" style="background-image: url(<?php echo esc_url( get_field('hero_section')['background_image'] ); ?>)">
    <div class="absolute inset-0 w-full h-full bg-black opacity-60 z-0"></div>    
    <div class="container z-10">
        <div class="w-full flex flex-col-reverse lg:flex-row justify-start lg:justify-center items-center lg:min-h-[600px] overflow-hidden">
            <div class="relative w-full flex flex-col items-center z-10 text-white">
                <?php if(get_field('hero_section')['icon']):?>
                <img src="<?php echo esc_url( get_field('hero_section')['icon'] ); ?>" alt="<?php echo get_field('hero_section')['icon_image_alt_text'] ?>" class="w-20 mb-6">
                <?php endif; ?>
                <h1 class="text-5xl lg:text-7xl capitalize font-semibold leading-tight text-center"><?php echo get_field('hero_section')['heading'] ?></h1>
                <span class="w-20 h-3 bg-transparent my-5"></span>
                <p class="leading-relaxed max-w-5xl text-center"><?php echo get_field('hero_section')['description'] ?></p>
            </div>
        </div>
    </div>
    <div class="absolute left-0 bottom-0 w-full">
        <svg viewBox="0 0 1920 121" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M960 0C429.807 0 0 93.2907 0 120.65H1920C1920 93.2907 1490.19 0 960 0Z" fill="white"/>
        </svg>
    </div>
</section>
<div class="relative w-full h-1 bg-white -mt-[0.2rem] z-10"></div>