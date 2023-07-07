<section id="<?php echo get_sub_field('id')?>" class="relative w-full flex justify-center bg-white">
    <div class="relative w-[91%] max-w-none lg:max-w-[1112px] mx-auto z-20">
        <div class="w-full flex flex-col items-center justify-center">
            <h2 class="w-full text-center capitalize text-[30px] md:text-[60px] text-[#1b1c1d] font-semibold pt-10 pb-10 bg-white top-[67px] z-20"><?php echo get_sub_field('heading'); ?></h2>
            <div class="w-full flex flex-col md:flex-row justify-center items-center">
                <div class="w-full md:w-1/2 lg:pr-6">
                    <img class="slider-single-image w-full max-w-xl mx-auto" src="<?php echo esc_url( get_sub_field('image')['url'] ); ?>" alt="<?php echo get_sub_field('image_alt_text'); ?>">
                </div>
                <div class="w-full md:w-1/2 lg:pl-6 mt-10 md:mt-0 md:pl-[15px] md:overflow-y-scroll md:h-[500px] no-scrollbar">
                    <?php
                        $slideItems = get_sub_field('slides');
                        if( $slideItems ) {
                            foreach( $slideItems as $slideItem ) {
                    ?>
                        <div class="w-full py-16 md:py-20 flex flex-col justify-center">
                            <p class="hidden md:block absolute md:relative left-1/2 md:left-0 bottom-0 text-7xl transform origin-top-left scale-110 md:scale-150 -translate-x-1/2 md:-translate-x-0 translate-y-4 font-bold text-zinc-800/5"><?php echo $slideItem['blur_background_text'] ?></p>
                            <h3 class="relative text-gray-900 text-[20px] md:text-[40px] font-semibold mb-6 leading-none">
                                <?php echo $slideItem['heading'] ?>
                                <span class="block md:hidden absolute left-0 top-0 -translate-y-[calc(50%+5px)] text-7xl origin-bottom-left scale-110 font-bold text-zinc-800/5"><?php echo $slideItem['blur_background_text'] ?></span>
                            </h3>
                            <p class="text-[#9f9f9f] text-[15px] md:text-[20px]"><?php echo $slideItem['description'] ?></p>
                        </div>
                    <?php
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
