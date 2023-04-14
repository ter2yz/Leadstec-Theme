<section class="w-full flex justify-center items-center pt-20 pb-32" style="background-color: <?php echo get_field('hero')['background_color']; ?>">
    <div class="container @container">
        <div class="w-full flex flex-col-reverse lg:flex-row justify-start lg:justify-center items-center @container lg:min-h-[600px] overflow-hidden">
            <div class="relative w-full lg:w-7/12 flex flex-col items-start lg:pr-10 z-10 text-white">
                <p class="leading-relaxed"><?php echo get_field('hero')['sub_heading']; ?></p>
                <h1 class="text-5xl lg:text-7xl capitalize font-semibold leading-tight"><?php echo get_field('hero')['heading']; ?></h1>
                <span class="w-20 h-3 bg-transparent my-5"></span>
                <p class="leading-relaxed"><?php echo get_field('hero')['description']; ?></p>
                <a href="<?php echo get_field('hero')['cta_button_url']; ?>" class="text-lg mt-10 flex justify-center items-center border-2 border-zinc-900 bg-zinc-900 px-6 py-2">
                    <?php echo get_field('hero')['cta_button_text']; ?>
                </a>
            </div>
            <div class="w-full lg:w-5/12 relative md:absolute lg:relative top-0 right-0 flex justify-end">
                <img class="w-full" src="<?php echo esc_url( get_field('hero')['image'] ); ?>" alt="">
            </div>
        </div>
    </div>
</section>
<div class="w-full bg-red-600">
    <svg viewBox="0 0 1920 121" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M960 0C429.807 0 0 93.2907 0 120.65H1920C1920 93.2907 1490.19 0 960 0Z" fill="white"/>
    </svg>
</div>
<div class="w-full h-2 bg-white -mt-1"></div>