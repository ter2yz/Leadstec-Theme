<section class="relative w-full flex flex-col items-center justify-center bg-white pt-12 pb-40 md:pt-20">
    <div class="relative w-[91%] max-w-none lg:max-w-[1112px] mx-auto z-20">
        <div class="w-full flex flex-col items-center justify-center">
            <h2 class="w-full capitalize text-[30px] md:text-[60px] text-[#1b1c1d] font-bold mb-5 md:mb-10"><?php echo get_field('more_about_headless_heading') ?></h2>

            <!-- Desktop cards -->
            <div class="w-full hidden md:flex flex-col md:flex-row justify-start items-stretch flex-wrap">
            <?php
            $stories = get_field('more_stories');
            if($stories) {
                foreach($stories as $story) {
            ?>
                <div class="w-full md:w-1/3 md:[&:nth-child(3n+1)]:pl-0 md:[&:nth-child(3n+1)]:pr-2 md:[&:nth-child(3n)]:pl-2 md:[&:nth-child(3n)]:pr-0 pl-1 pr-1 mb-9">
                    <div class="w-full h-full bg-white flex flex-col border border-zinc-200">
                        <div class="w-full h-0 pt-[60%] flex-none bg-cover bg-center" aria-label="<?php echo $story['background_image_alt_text'] ?>" style="background-image: url(<?php echo esc_url( $story['bg_image'] ); ?>); "></div>
                        <div class="w-full flex flex-col justify-between items-start grow p-3 md:p-6 xl:p-9">
                            <div class="w-full">
                                <h3 class="font-bold text-[20px] text-left mb-3"><?php echo esc_html( $story['heading'] ) ?></h3>
                                <p class="leading-relaxed text-[#9f9f9f] text-[14px] md:text-[17px] text-left mb-12 line-clamp-3"><?php echo esc_html( ($story['summary']) ) ?></p>
                            </div>
                            <a href="<?php echo $story['button_url'] ?>" class="text-sky-600 text-[14px] md:text-[17px] font-bold"><?php echo $story['button_label'] ?></a>
                        </div>
                    </div>
                </div>
            <?php
                }
            }
            ?>
            </div>
        </div>
    </div>
    <!-- Mobile Carousel -->
    <div id="mah-fw-container" class="block md:hidden w-full overflow-auto touch-none cursor-grab no-scrollbar">
        <div id="mah-container" class="w-[91%] max-w-none lg:max-w-[1112px] mx-auto">
            <div id="mah-wrap" class="inline-flex flex-nowrap mt-[20px] md:mt-[40px]">
                <?php
                    if($stories) {
                        foreach($stories as $story) {
                    ?>
                    <div class="w-[290px] mr-3 last:mr-0">
                        <div class="w-full h-full bg-white flex flex-col border border-zinc-200">
                            <div class="w-full h-0 pt-[60%] flex-none bg-cover bg-center" aria-label="<?php echo $story['background_image_alt_text'] ?>" style="background-image: url(<?php echo esc_url( $story['bg_image'] ); ?>); "></div>
                            <div class="w-full flex flex-col justify-between items-start grow p-3 lg:p-6 xl:p-9">
                                <div class="w-full">
                                    <h3 class="font-bold text-[20px] text-left mb-3"><?php echo esc_html( $story['heading'] ) ?></h3>
                                    <p class="leading-relaxed text-zinc-500 text-[14px] md:text-[17px] text-left mb-12 line-clamp-3"><?php echo esc_html( ($story['summary']) ) ?></p>
                                </div>
                                <a href="<?php echo $story['button_url'] ?>" class="text-sky-600 text-[14px] md:text-[17px] font-bold"><?php echo $story['button_label'] ?></a>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    }
                    ?>
            </div>
        </div>
    </div>
</section>