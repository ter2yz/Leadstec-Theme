<section id="<?php echo get_sub_field('id')?>" class="w-full bg-white pb-8 md:pb-0">
    <div class="relative w-[91%] max-w-none lg:max-w-[1112px] mx-auto z-20">
        <div class="w-full flex flex-col items-center justify-center">
            <h2 class="w-full text-center text-[30px] md:text-[60px] text-[#1b1c1d] px-3 font-bold top-0 bg-white z-20"><?php echo get_sub_field('heading') ?></h2>
        </div>
    </div>
    <!-- @TODO: Array begin -->
    <!-- <div class="w-full snap-y snap-mandatory overflow-scroll h-screen sticky top-0"> -->
    
</section>
<section class="w-full hidden md:block">
    <div class="w-[91%] max-w-none lg:max-w-[1112px] mx-auto">
        <?php
        $cards = get_sub_field('cards');
        if ($cards) {
            foreach($cards as $card){
        ?>
        <div class="w-full min-h-max md:py-20 px-3 flex flex-col md:flex-row justify-center items-center mb-12 md:mb-0">
            <div class="w-full md:w-1/2 md:pr-6">
                <img class="slider-single-image w-full max-w-xl mx-auto" src="<?php echo esc_url( $card['image'] ); ?>" alt="<?php echo $card['image_alt_text'] ?>">
            </div>
            <div class="w-full md:w-1/2 md:pl-6 mt-12 md:mt-0 overflow-hidden">
                <p class="absolute md:relative left-1/2 md:left-0 bottom-0 text-7xl transform origin-top-left scale-110 md:scale-150 -translate-x-1/2 md:-translate-x-0 font-bold text-zinc-800/5"><?php echo $card['blur_background_text'] ?></p>
                <h3 class="relative capitalize text-[#1b1c1d] text-[40px] font-bold mb-6 text-center md:text-left leading-tight md:-mt-5">
                    <?php echo $card['heading'] ?>
                </h3>
                <p class="text-[#1b1c1d] text-[20px] text-center md:text-left"><?php echo $card['description'] ?></p>
            </div>
        </div>
        <?php
            }
        }
        ?>
    </div>
</section>
<div class="relative w-[91%] max-w-none lg:max-w-[1112px] mx-auto block md:hidden pb-16">
    <div id="slider-multi-img" class="w-full my-slider">
        <?php
            $cards = get_sub_field('cards');
            if ($cards) {
                foreach($cards as $card){
        ?>
        <div class="w-full min-h-max px-3 flex flex-col justify-between items-center">
            <div class="w-full">
                <img class="slider-single-image w-full max-w-xl mx-auto" src="<?php echo esc_url( $card['image'] ); ?>" alt="<?php echo $card['image_alt_text'] ?>">
            </div>
            <div class="w-full mt-12">
                <h3 class="relative capitalize text-[#1b1c1d] text-[20px] font-bold mb-6 text-center">
                    <?php echo $card['heading'] ?>
                    <span class="absolute left-1/2 top-0 -translate-y-1/2 text-7xl origin-bottom-left scale-110 -translate-x-1/2 font-bold text-zinc-800/5"><?php echo $card['blur_background_text'] ?></span>
                </h3>
                <p class="text-[#1b1c1d] text-[15px] text-center"><?php echo $card['description'] ?></p>
            </div>
        </div>
        <?php
                }
            }
        ?>
    </div>
    <div class="w-full flex justify-around items-center mt-9">
        <button id="sliderBestPrev" class="w-full text-xl text-[#1b1c1d] opacity-100 disabled:opacity-50" data-controls="prev" aria-controls="customize" tabindex="-1">
            <img class="w-[12px] mx-auto" src="<?php echo (get_template_directory_uri() . '/resources/images/fa-chevron-left.svg' ); ?>" alt="fa-chevron-left icon">
        </button>
        <button id="sliderBestNext" class="w-full text-xl text-[#1b1c1d] opacity-100 disabled:opacity-50" data-controls="prev" aria-controls="customize" tabindex="-1">
            <img class="w-[12px] mx-auto" src="<?php echo (get_template_directory_uri() . '/resources/images/fa-chevron-right.svg' ); ?>" alt="fa-chevron-right icon">
        </button>
    </div>
</div>
