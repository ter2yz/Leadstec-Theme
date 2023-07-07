<section id="<?php echo get_sub_field('id')?>" class="relative w-full flex flex-col items-center justify-center bg-white">
    <div class="relative w-[91%] max-w-none lg:max-w-[1112px] mx-auto z-20">
        <div class="w-full flex flex-col items-center justify-center">
            <h2 class="w-full capitalize text-[30px] md:text-[60px] text-[#1b1c1d] font-bold mb-5 md:mb-10"><?php echo get_sub_field('heading') ?></h2>

            <!-- Desktop cards -->

            <div class="w-full hidden md:flex flex-col md:flex-row justify-start items-stretch flex-wrap">
                <?php
                $cards = get_sub_field('cards');
                if($cards) {
                    foreach($cards as $card){    
                ?>
                <div class="w-full md:w-1/3 md:[&:nth-child(3n+1)]:pl-0 md:[&:nth-child(3n+1)]:pr-2 md:[&:nth-child(3n)]:pl-2 md:[&:nth-child(3n)]:pr-0 md:pl-1 md:pr-1 mb-6 md:mb-9">
                    <?php if($card['button_url']): ?>
                    <a href="<?php echo $card['button_url']?>">
                    <?php endif; ?>
                    <div class="w-full h-full bg-white flex flex-col border border-zinc-200">
                        <div class="w-full h-0 pt-[60%] flex-none bg-cover bg-center" aria-label="<?php echo $card['image_alt_text']; ?>" style="background-image: url(<?php echo esc_url( $card['feature_image']) ?>); "></div>
                        <div class="w-full flex flex-col justify-between items-start grow p-3 md:p-6 xl:p-9">
                            <div class="w-full">
                                <h3 class="font-bold text-[20px] text-[#1b1c1d] text-left mb-3"><?php echo $card['title']; ?></h3>
                                <?php if ($card['category']): ?>
                                <p class="leading-relaxed text-[#1b1c1d] text-[15px] mb-3"><?php echo esc_html( $card['category'] ); ?></p>
                                <?php endif; ?>
                                <p class="leading-relaxed text-[#9f9f9f] text-[17px] mb-6 line-clamp-3"><?php echo $card['summary']; ?></p>
                            </div>
                            <?php if($card['button_url']): ?>
                            <button class="text-white  text-[17px] font-bold flex justify-center items-center border-2 border-[#1b1c1d] bg-[#1b1c1d] px-6 py-3">
                                <?php echo $card['button_label'] ?>
                            </button>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php if($card['button_url']): ?>
                    </a>
                    <?php endif; ?>
                </div>
                <?php
                    }
                }
                ?>
            </div>

            <!-- Mobile Carousel -->

            <div class="relative w-full hidden pb-16">
                <div class="slider-rl w-full my-slider">
                    <?php
                    $cards = get_sub_field('cards');
                    if($cards) {
                        foreach($cards as $card){    
                    ?>
                    <div class="w-full">
                            <div class="w-full h-full bg-white flex flex-col border border-zinc-200">
                                <div class="w-full h-0 pt-[60%] flex-none bg-cover bg-center" aria-label="<?php echo $card['image_alt_text']; ?>" style="background-image: url(<?php echo esc_url( $card['feature_image'] ); ?>); "></div>
                                <div class="w-full flex flex-col justify-between items-start grow p-3 lg:p-6 xl:p-9">
                                    <div class="w-full">
                                        <h3 class="font-bold text-[20px] text-[#1b1c1d] text-left mb-3"><?php echo $card['title']; ?></h3>
                                        <?php if ($card['category']): ?>
                                        <p class="leading-relaxed text-[#1b1c1d] text-[15px] mb-3"><?php echo esc_html( $card['category'] ); ?></p>
                                        <?php endif; ?>
                                        <p class="leading-relaxed text-[#9f9f9f] text-[14px] mb-6 line-clamp-3"><?php echo $card['summary']; ?></p>
                                    </div>
                                    <a href="<?php echo $card['button_url'] ?>" class="text-white flex justify-center text-[14px] font-bold items-center border-2 border-[#1b1c1d] bg-[#1b1c1d] px-6 py-3">
                                        <?php echo $card['button_label'] ?>
                                    </a>
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
    </div>
    <div class="ms-fw-container block md:hidden w-full overflow-auto touch-none cursor-grab no-scrollbar">
        <div class="ms-container w-[91%] max-w-none lg:max-w-[1112px] mx-auto">
            <div class="ms-wrap inline-flex flex-nowrap mt-[20px] md:mt-[40px]">
                <?php
                    if($cards) {
                        foreach($cards as $card) {
                    ?>
                    <div class="w-[290px] mr-3 last:mr-0">
                        <div class="w-full h-full bg-white flex flex-col border border-zinc-200">
                            <div class="w-full h-0 pt-[60%] flex-none bg-cover bg-center" aria-label="<?php echo $card['image_alt_text']; ?>" style="background-image: url(<?php echo esc_url( $card['feature_image'] ); ?>); "></div>
                            <div class="w-full flex flex-col justify-between items-start grow p-3 lg:p-6 xl:p-9">
                                <div class="w-full">
                                    <h3 class="font-bold text-[20px] text-[#1b1c1d] text-left mb-3"><?php echo $card['title']; ?></h3>
                                    <?php if ($card['category']): ?>
                                    <p class="leading-relaxed text-[#1b1c1d] text-[15px] mb-3"><?php echo esc_html( $card['category'] ); ?></p>
                                    <?php endif; ?>
                                    <p class="leading-relaxed text-[#9f9f9f] text-[14px] mb-6 line-clamp-3"><?php echo $card['summary']; ?></p>
                                </div>
                                <a href="<?php echo $card['button_url'] ?>" class="text-white flex justify-center text-[14px] font-bold items-center border-2 border-[#1b1c1d] bg-[#1b1c1d] px-6 py-3">
                                    <?php echo $card['button_label'] ?>
                                </a>
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