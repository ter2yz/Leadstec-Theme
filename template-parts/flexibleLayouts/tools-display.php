<section id="<?php echo get_sub_field('id')?>" class="slider-rl-wrapper relative w-full flex justify-center bg-white pb-12 md:pb-0">
    <div class="relative w-[91%] max-w-none lg:max-w-[1112px] mx-auto z-20">
        <div class="w-full flex flex-col items-center justify-center">
            <h2 class="w-full capitalize text-[30px] md:text-[60px] text-[#1b1c1d] font-bold text-center md:text-left mb-5 md:mb-10 px-3"><?php echo get_sub_field('heading'); ?></h2>

            <!-- Desktop cards -->

            <div class="w-full hidden md:flex flex-col md:flex-row justify-start items-stretch flex-wrap">
                <?php
                $cards = get_sub_field('cards');
                if($cards) {
                    foreach($cards as $card) {
                ?>
                <div class="w-full md:w-1/3 md:[&:nth-child(3n+1)]:pl-0 md:[&:nth-child(3n+1)]:pr-2 md:[&:nth-child(3n)]:pl-2 md:[&:nth-child(3n)]:pr-0 md:pl-1 md:pr-1 mb-6 bg-white flex flex-col">
                    <div class="w-full flex justify-center items-center">
                        <img class="w-full max-w-xs mx-auto" src="<?php echo esc_url( $card['image'] ); ?>" alt="<?php echo $card['image_alt_text'] ?>">
                    </div>
                    <div class="w-full flex flex-col justify-start items-center grow p-3 md:p-6 xl:p-9">
                        <h3 class="font-bold text-[20px] text-center mb-3"><?php echo $card['heading'] ?></h3>
                        <p class="leading-relaxed text-center text-[16px]">
                            <?php echo $card['description'] ?>
                        </p>
                    </div>
                </div>
                <?php
                    }
                }
                ?>
            </div>



            <div class="w-full block md:hidden">
                <div class="slider-cetc w-full my-slider">
                    <?php
                    $cards = get_sub_field('cards');
                    if($cards) {
                        foreach($cards as $card) {
                    ?>
                    <div class="w-full bg-white flex flex-col">
                        <div class="w-full flex justify-center items-center">
                            <img class="w-full max-w-xs mx-auto" src="<?php echo esc_url( $card['image'] ); ?>" alt="<?php echo $card['image_alt_text'] ?>">
                        </div>
                        <div class="w-full flex flex-col justify-center items-center grow p-3 lg:p-6 xl:p-9">
                            <h3 class="font-bold text-[20px] text-center mb-3"><?php echo $card['heading'] ?></h3>
                            <p class="leading-relaxed text-center text-[16px]">
                            <?php echo $card['description'] ?>
                            </p>
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
</section>