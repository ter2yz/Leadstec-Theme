<section class="relative w-full flex justify-center items-center bg-cover bg-bottom pt-12 pb-20 md:pt-20 md:pb-40" aria-label="<?php echo get_field('hero_section')['background_image_alt_text'] ?>" style="background-image: url(<?php echo esc_url(get_field('hero_section')['background_image']) ?>)">
    <div class="absolute inset-0 w-full h-full bg-black opacity-60 z-0"></div>    
    <div class="w-[91%] max-w-none lg:max-w-[1112px] mx-auto z-10">
        <div class="w-full flex flex-col-reverse lg:flex-row justify-start lg:justify-center items-center lg:min-h-[600px] overflow-hidden">
            <div class="relative w-full flex flex-col items-center z-10 text-white">
                <?php if(get_field('hero_section')['logo']):?>
                <img src="<?php echo esc_url(get_field('hero_section')['logo']) ?>" alt="<?php echo get_field('hero_section')['logo_image_alt_text'] ?>" class="w-20 mb-6">
                <?php endif; ?>
                <h1 class="text-[30px] md:text-[60px] font-bold leading-tight text-center max-w-6xl mb-5"><?php echo get_field('hero_section')['heading'] ?></h1>
                <p class="leading-relaxed max-w-5xl text-center text-[15px] md:text-[20px]"><?php echo get_field('hero_section')['description'] ?></p>
                <?php if(get_field('hero_section')['button_url'] && get_field('hero_section')['button_text']): ?>
                <a href="<?php echo esc_url(get_field('hero_section')['button_url']) ?>" class="text-[14px] md:text-[18px] font-bold mt-5 flex justify-center items-center border-2 border-zinc-900 bg-zinc-900 px-6 py-2">
                    <?php echo get_field('hero_section')['button_text'] ?>
                </a>
                <?php endif; ?>
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