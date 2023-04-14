<section class="w-full flex justify-center items-center">
    <div class="container">
        <div class="w-full flex flex-col-reverse lg:flex-row justify-start items-center lg:items-start lg:min-h-[600px] overflow-hidden">
            <div class="relative w-full lg:w-7/12 flex flex-col items-start mt-10 lg:mt-20 lg:pr-20 z-10">
                <!-- <h1 class="text-5xl lg:text-7xl capitalize font-semibold leading-tight">We are a professional digital experience agency.</h1> -->
                <h1 class="text-5xl lg:text-7xl capitalize font-semibold leading-tight"><?php echo get_field('hero_section')['heading']; ?></h1>
                <span class="w-20 h-3 bg-orange-500 my-5"></span>
                <p class="leading-relaxed"><?php echo get_field('hero_section')['description'] ?></p>
                <a href="#home-stories" class="text-3xl w-12 h-12 mt-10 flex justify-center items-center rounded-full border-2 border-gray-900 text-gray-900">
                    <i class="fa-solid fa-chevron-down"></i>
                </a>
            </div>
            <div class="w-full lg:w-5/12 relative max-h-[300px] md:max-h-[500px] lg:max-h-screen top-0 right-0 flex justify-center lg:justify-end overflow-clip">
                <img class="w-full object-cover object-center" src="<?php echo esc_url(get_field('hero_section')['image']); ?>" alt="">
            </div>
        </div>
    </div>
</section>