<section id="<?php echo get_sub_field('id')?>" class="relative w-full flex justify-center bg-white">
    <div class="relative w-[91%] max-w-none lg:max-w-[1112px] mx-auto z-20">
        <div class="w-full pt-12 md:pt-20 pb-12 lg:pb-40 flex flex-col items-center justify-center">
            <h2 class="capitalize text-[30px] md:text-[60px] text-[#1b1c1d] font-bold mb-5 md:mb-[30px]"><?php echo get_sub_field('heading'); ?></h2>
            <p class="text-center max-w-3xl text-[15px] text-[#9f9f9f] px-2 md:px-0"><?php echo get_sub_field('description'); ?></p>
            <div class="w-full flex flex-col md:flex-row justify-center items-stretch mt-5 md:mt-10">
                <?php
                    $cards = get_sub_field('cards');
                    if($cards) {
                        foreach($cards as $card){
                ?>
                <div class="w-full md:w-1/3 px-2 flex flex-col items-center relative box-bg-shadow__spring-sun mb-6">
                    <div class="flex flex-row md:flex-col xl:flex-row w-full h-full bg-white p-6 md:p-8 items-stretch">
                        <div class="flex-auto mr-3 mb-3">
                            <h3 class="max-w-[90%] md:max-w-xs font-bold text-[#1b1c1d] text-[20px] md:text-[26px] "><?php echo $card['heading']; ?></h3>
                        </div>
                        <div class="flex flex-none items-end justify-end">
                            <?php $icon = $card['icon'];  if($icon) { ?>
                                <div class="w-28 h-28 right-10 bottom-10 rounded-full bg-cover bg-center bg-no-repeat" aria-label="<?php echo $card['image_alt_text']; ?>" style="background-image: url(<?php echo esc_url($card['icon']['url']); ?>)"></div>
                            <?php }?>
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
