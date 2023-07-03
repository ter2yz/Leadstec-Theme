<section id="<?php echo get_sub_field('id')?>" class="relative w-full overflow-hidden">
    <?php
        $cards = get_sub_field('cards');
        $card_length = count($cards);
    ?>
    <?php if($card_length <= 1): ?>
    <div class="hidden md:flex w-full" style="background-color: <?php echo $cards[0]['background_color'] ?>">
        <div class="relative w-[91%] max-w-none lg:max-w-[1112px] mx-auto flex flex-col items-start py-16 lg:py-32 overflow-hidden">
            <div class="w-full max-w-[70%] h-[100px] mb-12 flex justify-start items-center">
                <img class="w-full h-full max-h-full max-w-full object-contain object-left" src="<?php echo esc_url( $cards[0]['logo']['url'] ); ?>" alt="<?php echo $cards[0]['logo_image_alt_text']; ?>">
            </div>
            <h3 class="relative max-w-sm md:max-w-[350px] lg:max-w-[640px] font-bold text-[26px] text-left leading-snug text-[#1b1c1d] mb-20 z-20"><?php echo $cards[0]['description'] ?></h3>
            <?php if($cards[0]['button_url'] && $cards[0]['button_label']): ?>
            <div class="w-60 grow flex justify-start items-end">
                <a href="<?php echo $cards[0]['button_url'] ?>" class="text-white flex justify-center items-center border-2 border-zinc-900 bg-zinc-900 px-6 py-2 z-20">
                <?php echo $cards[0]['button_label'] ?>
                </a>
            </div>
            <?php endif; ?>
            <div class="absolute h-2/3 bottom-6 right-0 text-[26rem] font-black z-0 flex items-end" style="color: <?php echo $cards[0]['decoration_letter_color'] ?>">
                <p class="leading-[0.5]"><?php echo $cards[0]['decoration_letter'] ?></p>
            </div>
        </div>
    </div>
    <?php else: ?>
    <div class="hidden md:flex w-full justify-center items-stretch">
        <?php
        if($cards) {
            foreach($cards as $card){
        ?>
            <div class="relative w-full flex flex-col items-start py-16 lg:py-32 px-16 overflow-hidden" style="background-color: <?php echo $card['background_color'] ?>">
                <div class="w-full max-w-[70%] h-[100px] mb-12 flex justify-start items-center">
                    <img class="w-full h-full max-h-full max-w-full object-contain object-left" src="<?php echo esc_url( $card['logo']['url'] ); ?>" alt="<?php echo $card['logo_image_alt_text']; ?>">
                </div>
                <h3 class="relative max-w-sm md:max-w-[350px] lg:max-w-[640px] font-bold text-[26px] text-left leading-snug text-[#1b1c1d] mb-20 z-20"><?php echo $card['description'] ?></h3>
                <?php if($card['button_url'] && $card['button_label']): ?>
                <div class="w-60 grow flex justify-start items-end">
                    <a href="<?php echo $card['button_url'] ?>" class="text-white flex justify-center items-center border-2 border-zinc-900 bg-zinc-900 px-6 py-2 z-20">
                    <?php echo $card['button_label'] ?>
                    </a>
                </div>
                <?php endif; ?>
                <div class="absolute h-2/3 bottom-6 -right-12 text-[26rem] font-black z-0 flex items-end" style="color: <?php echo $card['decoration_letter_color'] ?>">
                    <p class="leading-[0.5]"><?php echo $card['decoration_letter'] ?></p>
                </div>
            </div>
        <?php        
            }
        }
        ?>
    </div>
    <?php endif; ?>
    <div class="block md:hidden w-full">
        <div id="slider-brands-cta" class="slider-cetc w-full my-slider">
            <?php
            $cards = get_sub_field('cards');
            if($cards) {
                foreach($cards as $card){
            ?>
                <div class="relative w-full flex flex-col items-start py-16 lg:py-32 px-8 overflow-hidden" style="background-color: <?php echo $card['background_color'] ?>">
                    <div class="w-full max-w-[70%] h-[100px] mb-12 flex justify-start items-center">
                        <img class="w-full h-full max-h-full max-w-full object-contain object-left" src="<?php echo esc_url( $card['logo']['url'] ); ?>" alt="<?php echo $card['logo_image_alt_text']; ?>">
                    </div>
                    <h3 class="relative max-w-sm font-bold text-xl text-left leading-snug text-zinc-900 mb-20 z-20"><?php echo $card['description'] ?></h3>
                    <?php if($card['button_url'] && $card['button_label']): ?>
                    <div class="w-60 grow flex justify-start items-end">
                        <a href="<?php echo $card['button_url'] ?>" class="text-white flex justify-center items-center border-2 border-zinc-900 bg-zinc-900 px-6 py-2 z-20">
                            <?php echo $card['button_label'] ?>
                        </a>
                    </div>
                    <?php endif; ?>
                    <div class="absolute h-2/3 bottom-6 -right-12 text-[26rem] font-black z-0 flex items-end" style="color: <?php echo $card['decoration_letter_color'] ?>">
                        <p class="leading-[0.5]"><?php echo $card['decoration_letter'] ?></p>
                    </div>
                </div>
            <?php        
                }
            }
            ?>
        </div>
    </div>
</section>