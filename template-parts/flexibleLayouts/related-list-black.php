<section id="<?php echo get_sub_field('id')?>" class="relative w-full flex flex-col items-center justify-center bg-zinc-900">
    <div class="relative w-[91%] max-w-none lg:max-w-[1112px] mx-auto z-20">
        <div class="w-full flex flex-col items-center justify-center">
            <h2 class="w-full text-[30px] md:text-[60px] text-white font-bold mb-5 md:mb-10 <?php echo get_sub_field('is_header_center') ? 'text-center' : 'text-left'; ?>"><?php echo get_sub_field('heading') ?></h2>

            <!-- Desktop cards -->

            <div class="w-full hidden md:flex flex-col md:flex-row justify-start items-stretch flex-wrap">
                <?php if(get_sub_field('card_group')):
                        foreach(get_sub_field('card_group') as $card){
                ?>
                <div class="w-full md:w-1/3 flex flex-col md:[&:nth-child(3n+1)]:pl-0 md:[&:nth-child(3n+1)]:pr-2 md:[&:nth-child(3n)]:pl-2 md:[&:nth-child(3n)]:pr-0 md:pl-1 md:pr-1 mb-6 group">
                    <?php if($card['button_url']): ?>
                    <a class="h-full flex flex-col" href="<?php echo $card['button_url'] ?>" <?php echo $card['is_open_via_new_tab'] ? 'target="_blank"' : ''; ?>>
                    <?php endif; ?>
                        <div class="w-full h-60 overflow-hidden">
                            <div class="w-full h-60 flex-none bg-white flex justify-center items-center bg-cover bg-no-repeat bg-center transition-all group-hover:scale-110" aria-label="<?php echo $card['image_alt_text'] ?>" style="background-image:url(<?php echo esc_url($card['image']['url']) ?>)">
                            </div>
                        </div>
                        <div class="w-full flex flex-col justify-between items-start grow p-[30px] bg-gray-100">
                            <div class="w-full">
                                <h3 class="font-bold text-[20px] text-[#1b1c1d] text-left mb-9"><?php echo $card['heading'] ?></h3>
                            </div>
                            <?php if($card['button_url']): ?>
                            <p class="text-sky-600 text-[14px]"><?php echo $card['button_label'] ?></p>
                            <?php endif; ?>
                        </div>
                    <?php if($card['button_url']): ?>
                    </a>
                    <?php endif; ?>
                </div>
                <?php
                        }
                    endif;
                ?>
            </div>
        </div>
    </div>
    <!-- Mobile Carousel -->
    <div class="ms-fw-container block md:hidden w-full overflow-auto md:touch-none cursor-grab no-scrollbar">
        <div class="ms-container w-[91%] max-w-none lg:max-w-[1112px] mx-auto">
            <div class="ms-wrap inline-flex flex-nowrap">
                <?php if(get_sub_field('card_group')):
                    foreach(get_sub_field('card_group') as $card){
                ?>
                <div class="w-[290px] mr-3 last:mr-0">
                    <div class="w-full h-full bg-white flex flex-col">
                        <div class="w-full h-60 flex-none bg-white flex justify-center items-center bg-cover bg-no-repeat bg-center" aria-label="<?php echo $card['image_alt_text'] ?>" style="background-image:url(<?php echo esc_url($card['image']['url']) ?>)">
                        </div>
                        <div class="w-full flex flex-col justify-between items-start grow p-[30px] bg-gray-100">
                            <div class="w-full">
                                <h3 class="font-bold text-[20px] text-left mb-9 text-[#1b1c1d]"><?php echo $card['heading'] ?></h3>
                            </div>
                            <a href="<?php echo $card['button_url'] ?>" class="text-sky-600 text-[14px]" <?php echo $card['is_open_via_new_tab'] ? 'target="_blank"' : ''; ?>><?php echo $card['button_label'] ?></a>
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
</section>