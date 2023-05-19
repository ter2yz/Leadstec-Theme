<section class="w-full bg-white pt-10 pb-16 lg:pb-32">
    <div class="relative w-[91%] max-w-none lg:max-w-[1112px] mx-auto z-20">
        <div class="w-full flex flex-col items-center justify-center">
            <h2 class="w-full text-center text-[30px] md:text-[60px] text-[#1b1c1d] px-3 font-bold py-10 top-0 bg-white z-20"><?php echo get_field('best_on_market')['heading'] ?></h2>
        </div>
    </div>
    <!-- @TODO: Array begin -->
    <!-- <div class="w-full snap-y snap-mandatory overflow-scroll h-screen sticky top-0"> -->
    
</section>
<section id="headless-best-wrapper" class="w-full hidden md:block">
    <div class="w-[91%] max-w-none lg:max-w-[1112px] mx-auto">
        <?php
        $services = get_field('best_on_market')['services'];
        if ($services) {
            foreach($services as $service){
        ?>
        <div class="w-full min-h-max lg:py-20 px-3 flex flex-col lg:flex-row justify-center items-center mb-12 lg:mb-0">
            <div class="w-full lg:w-1/2 lg:pr-6">
                <img class="slider-single-image w-full max-w-xl mx-auto" src="<?php echo esc_url( $service['image'] ); ?>" alt="<?php echo $service['image_alt_text'] ?>">
            </div>
            <div class="w-full lg:w-1/2 lg:pl-6 mt-12 lg:mt-0">
                <h3 class="relative capitalize text-[#1b1c1d] text-[40px] font-bold mb-6 text-center lg:text-left">
                    <?php echo $service['heading'] ?>
                    <span class="absolute left-1/2 lg:left-0 bottom-0 text-7xl origin-bottom-left scale-110 lg:scale-150 -translate-x-1/2 lg:-translate-x-0 font-bold text-zinc-800/5"><?php echo $service['blur_background_text'] ?></span>
                </h3>
                <p class="text-[#1b1c1d] text-[20px] text-center lg:text-left"><?php echo $service['description'] ?></p>
            </div>
        </div>
        <?php
            }
        }
        ?>
    </div>
</section>
<div class="relative w-full block md:hidden pb-16">
    <div id="slider-headless-best" class="w-full my-slider">
        <?php
            $services = get_field('best_on_market')['services'];
            if ($services) {
                foreach($services as $service){
        ?>
        <div class="w-full min-h-max px-3 flex flex-col justify-between items-center">
            <div class="w-full">
                <img class="slider-single-image w-full max-w-xl mx-auto" src="<?php echo esc_url( $service['image'] ); ?>" alt="<?php echo $service['image_alt_text'] ?>">
            </div>
            <div class="w-full mt-9">
                <h3 class="relative capitalize text-[#1b1c1d] text-[20px] font-bold mb-6 text-center">
                    <?php echo $service['heading'] ?>
                    <span class="absolute left-1/2 bottom-0 text-7xl origin-bottom-left scale-110 -translate-x-1/2 font-bold text-zinc-800/5"><?php echo $service['blur_background_text'] ?></span>
                </h3>
                <p class="text-[#1b1c1d] text-[15px] text-center"><?php echo $service['description'] ?></p>
            </div>
        </div>
        <?php
                }
            }
        ?>
    </div>
    <div class="w-full flex justify-around items-center mt-9">
        <button id="sliderBestPrev" class="w-full text-xl text-[#1b1c1d] disabled:text-[#9f9f9f]" data-controls="prev" aria-controls="customize" tabindex="-1">
            <i class="fa-solid fa-chevron-left"></i>
        </button>
        <button id="sliderBestNext" class="w-full text-xl text-[#1b1c1d] disabled:text-[#9f9f9f]" data-controls="prev" aria-controls="customize" tabindex="-1">
            <i class="fa-solid fa-chevron-right"></i>
        </button>
    </div>
</div>
