<section id="<?php echo get_sub_field('id')?>" class="relative w-full flex flex-col items-center justify-center bg-gray-100 pt-16 pb-16 md:pb-20">
    <div class="slider-rl-wrapper relative w-[91%] max-w-none lg:max-w-[1112px] mx-auto z-20">
        <div class="w-full flex flex-col items-center justify-center">
            <h2 class="w-full capitalize text-[30px] md:text-[60px] text-[#1b1c1d] font-bold mb-5 md:mb-10 text-center"><?php echo get_sub_field('heading'); ?></h2>
            <div class="w-full hidden lg:flex flex-row justify-start items-stretch flex-wrap">
                <?php
                    $cards = get_sub_field('cards');
                    if ($cards) {
                        foreach($cards as $card) {
                ?>
                    <div class="w-1/3 [&:nth-child(3n+1)]:pl-0 [&:nth-child(3n+1)]:pr-2 [&:nth-child(3n)]:pl-2 [&:nth-child(3n)]:pr-0 pl-1 pr-1 mb-6">
                        <div class="w-full h-full bg-white flex flex-col p-9">
                            <div class="w-full flex flex-col lg:flex-row justify-start items-start pb-6 mb-6 border-b border-zinc-400/25">
                                <div class="flex-none mr-6">
                                    <img class="h-16" src="<?php echo esc_url( $card['logo'] ); ?>" alt="<?php echo $card['logo_image_alt_text'] ?>">
                                </div>
                                <div class="grow flex flex-col items-start">
                                    <h3 class="font-bold text-[15px] text-[#1b1c1d] text-left mb-1"><?php echo $card['heading']; ?></h3>
                                    <p class="text-[15px] text-[#9f9f9f] leading-none"><?php echo $card['sub_heading']; ?></p>
                                </div>
                            </div>
                            <p class="leading-relaxed text-[20px] text-[#9f9f9f]"><?php echo $card['description']; ?></p>
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
    <div class="ms-fw-container block lg:hidden w-full overflow-auto lg:touch-none cursor-grab no-scrollbar">
        <div class="ms-container w-[91%] max-w-none lg:max-w-[1112px] mx-auto">
            <div class="ms-wrap inline-flex flex-nowrap">
                <?php
                    $cards = get_sub_field('cards');
                    if($cards) {
                        foreach($cards as $card) {
                ?>
                    <div class="w-[350px] mr-3 last:mr-0">
                        <div class="w-full h-full bg-white flex flex-col p-9">
                            <div class="w-full flex-col justify-start items-center pb-6 mb-6 border-b border-zinc-400/25">
                                <div class="flex-none mb-6">
                                    <img class="h-16" src="<?php echo esc_url( $card['logo'] ); ?>" alt="<?php echo $card['logo_image_alt_text'] ?>">
                                </div>
                                <div class="grow flex flex-col items-start">
                                    <h3 class="font-bold text-[15px] text-[#1b1c1d] text-left mb-1"><?php echo $card['heading']; ?></h3>
                                    <p class="text-[15px] text-[#9f9f9f] leading-none"><?php echo $card['sub_heading']; ?></p>
                                </div>
                            </div>
                            <p class="leading-relaxed text-[20px] text-[#9f9f9f]"><?php echo $card['description']; ?></p>
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