<section class="relative w-full overflow-hidden">
    <div class="hidden md:flex w-full justify-center items-stretch">
        <?php
        $brands = get_field('brands');
        if($brands) {
            foreach($brands as $brand){
        ?>
            <div class="relative w-full flex flex-col items-start py-16 lg:py-32 px-16 overflow-hidden" style="background-color: <?php echo $brand['background_color'] ?>">
                <div class="w-[90%] max-w-full h-[150px] mb-12 flex justify-start items-center">
                    <img class="w-full h-full max-h-full max-w-full object-contain object-left" src="<?php echo esc_url( $brand['logo']['url'] ); ?>" alt="<?php echo $brand['logo']['alt']; ?>">
                </div>
                <h3 class="relative max-w-sm md:max-w-[350px] lg:max-w-[640px] font-bold text-[26px] text-left capitalize leading-snug text-[#1b1c1d] mb-20 z-20"><?php echo $brand['description'] ?></h3>
                <?php if($brand['button_url'] && $brand['button_label']): ?>
                <div class="w-60 grow flex justify-start items-end">
                    <a href="<?php echo $brand['button_url'] ?>" class="capitalize text-white flex justify-center items-center border-2 border-zinc-900 bg-zinc-900 px-6 py-2 z-20">
                    <?php echo $brand['button_label'] ?>
                    </a>
                </div>
                <?php endif; ?>
                <div class="absolute h-2/3 bottom-6 -right-12 text-[26rem] font-black z-0 flex items-end" style="color: <?php echo $brand['decoration_letter_color'] ?>">
                    <p class="leading-[0.5]"><?php echo $brand['decoration_letter'] ?></p>
                </div>
            </div>
        <?php        
            }
        }
        ?>
    </div>
    <div class="block md:hidden w-full">
        <div id="slider-brands-cta" class="w-full my-slider">
            <?php
            $brands = get_field('brands');
            if($brands) {
                foreach($brands as $brand){
            ?>
                <div class="relative w-full flex flex-col items-start py-16 lg:py-32 px-16 overflow-hidden" style="background-color: <?php echo $brand['background_color'] ?>">
                    <div class="w-[181px] max-w-full h-[84px] mb-12 flex justify-start items-center">
                        <img class="w-full h-full max-h-full max-w-full object-contain object-left" src="<?php echo esc_url( $brand['logo']['url'] ); ?>" alt="<?php echo $brand['logo']['alt']; ?>">
                    </div>
                    <h3 class="relative max-w-sm font-bold text-xl text-left capitalize leading-snug text-zinc-900 mb-20 z-20"><?php echo $brand['description'] ?></h3>
                    <?php if($brand['button_url'] && $brand['button_label']): ?>
                    <div class="w-60 grow flex justify-start items-end">
                        <a href="<?php echo $brand['button_url'] ?>" class="capitalize text-white flex justify-center items-center border-2 border-zinc-900 bg-zinc-900 px-6 py-2">
                            <?php echo $brand['button_label'] ?>
                        </a>
                    </div>
                    <?php endif; ?>
                    <div class="absolute h-2/3 bottom-6 -right-12 text-[26rem] font-black z-0 flex items-end" style="color: <?php echo $brand['decoration_letter_color'] ?>">
                        <p class="leading-[0.5]"><?php echo $brand['decoration_letter'] ?></p>
                    </div>
                </div>
            <?php        
                }
            }
            ?>
        </div>
    </div>
</section>