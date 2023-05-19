<section class="relative w-full flex justify-center bg-zinc-900 py-16 md:py-32">
    <div class="relative w-[91%] max-w-none lg:max-w-[1112px] mx-auto z-20">
        <div class="w-full flex flex-col items-center justify-center">
            <h2 class="w-full capitalize text-[30px] md:text-[60px] text-white font-semibold mb-12 px-3"><?php echo get_field('headless_stories_section')['heading'] ?></h2>

            <!-- Desktop cards -->

            <div class="w-full hidden md:flex flex-col md:flex-row justify-start items-stretch flex-wrap">
                <?php if(get_field('headless_stories_section')['cards']):
                        foreach(get_field('headless_stories_section')['cards'] as $card){
                ?>
                <div class="w-full md:w-1/3 flex flex-col md:[&:nth-child(3n+1)]:pl-0 md:[&:nth-child(3n+1)]:pr-2 md:[&:nth-child(3n)]:pl-2 md:[&:nth-child(3n)]:pr-0 md:pl-1 md:pr-1 mb-6 group">
                    <div class="w-full h-60 overflow-hidden">
                        <div class="w-full h-60 flex-none bg-white flex justify-center items-center bg-cover bg-no-repeat bg-center transition-all group-hover:scale-110" aria-label="<?php echo $card['image_alt_text'] ?>" style="background-image:url(<?php echo esc_url($card['image']['url']) ?>)">
                        </div>
                    </div>
                    <div class="w-full flex flex-col justify-between items-start grow p-[30px] bg-gray-100">
                        <div class="w-full">
                            <h3 class="font-bold text-[20px] text-[#1b1c1d] text-left mb-9"><?php echo $card['heading'] ?></h3>
                        </div>
                        <a href="<?php echo $card['url'] ?>" class="text-sky-600 text-[14px]"><?php echo $card['description'] ?></a>
                    </div>
                </div>
                <?php
                        }
                    endif;
                ?>
            </div>

            <!-- Mobile Carousel -->

            <div class="relative w-full block md:hidden pb-16">
                <div id="slider-headless-stories" class="w-full my-slider">
                    <?php if(get_field('headless_stories_section')['cards']):
                            foreach(get_field('headless_stories_section')['cards'] as $card){
                    ?>
                    <div class="w-full">
                        <div class="w-full h-full bg-white flex flex-col">
                            <div class="w-full h-60 flex-none bg-white flex justify-center items-center bg-cover bg-no-repeat bg-center" aria-label="<?php echo $card['image_alt_text'] ?>" style="background-image:url(<?php echo esc_url($card['image']['url']) ?>)">
                            </div>
                            <div class="w-full flex flex-col justify-between items-start grow p-[30px] bg-gray-100">
                                <div class="w-full">
                                    <h3 class="font-bold text-[20px] text-left mb-9 text-[#1b1c1d]"><?php echo $card['heading'] ?></h3>
                                </div>
                                <a href="<?php echo $card['url'] ?>" class="text-sky-600 text-[14px]"><?php echo $card['description'] ?></a>
                            </div>
                        </div>
                    </div>
                    <?php
                            }
                        endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>