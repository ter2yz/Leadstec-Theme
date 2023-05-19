<section class="relative w-full flex justify-center bg-gray-100 pt-16 pb-10 lg:pt-32 lg:pb-32">
    <div class="relative w-[91%] max-w-none lg:max-w-[1112px] mx-auto z-20">
        <div class="w-full flex flex-col items-center justify-center">
            <h2 class="w-full capitalize text-[30px] md:text-[60px] text-[#1b1c1d] font-bold mb-10"><?php echo get_field('foundation_section')['heading'] ?></h2>
            <div class="w-full hidden lg:flex flex-col lg:flex-row justify-start items-stretch flex-wrap">
                <?php
                    $cards = get_field('foundation_section')['cards'];
                    if($cards) {
                        foreach($cards as $card) {
                ?>
                <div class="w-full lg:w-1/3 lg:[&:nth-child(3n+1)]:pl-0 lg:[&:nth-child(3n+1)]:pr-2 lg:[&:nth-child(3n)]:pl-2 lg:[&:nth-child(3n)]:pr-0 lg:pl-1 lg:pr-1 mb-6">
                    <div class="w-full h-full bg-white flex flex-col items-start p-9">
                        <h3 class="font-bold text-xl text-left mb-3 capitalize"><?php echo $card['heading'] ?></h3>
                        <span class="w-full h-2 bg-orange-500 mb-9"></span>
                        <p class="leading-relaxed text-zinc-900/70"><?php echo $card['description'] ?></p>
                        <?php if($card['button_url'] && $card['button_label']): ?>
                        <a href="<?php echo $card['button_url']; ?>" class="mt-10 text-[14px] border-2 border-zinc-900 bg-zinc-900 px-6 py-2 text-white capitalize"><?php echo $card['button_label']; ?></a>
                        <?php endif; ?>
                    </div>
                </div>
                <?php
                        }
                    }
                ?>
            </div>

            <!-- Mobile Carousel -->

            <div class="relative w-full block lg:hidden pb-16">
                <div id="slider-headless-foundation" class="w-full my-slider">
                    <?php
                        $cards = get_field('foundation_section')['cards'];
                        if($cards) {
                            foreach($cards as $card) {
                    ?>
                    <div class="w-full">
                        <div class="w-full bg-white flex flex-col p-9">
                            <h3 class="font-bold text-xl text-left mb-3 capitalize"><?php echo $card['heading'] ?></h3>
                            <span class="w-full h-2 bg-orange-500 mb-9"></span>
                            <p class="leading-relaxed text-zinc-900/70"><?php echo $card['description'] ?></p>
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