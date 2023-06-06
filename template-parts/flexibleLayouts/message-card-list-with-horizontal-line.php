<section class="relative w-full flex flex-col items-center justify-center bg-gray-100 pt-12 pb-10 md:pt-20 md:pb-20 overflow-hidden">
    <div class="relative w-[91%] max-w-none lg:max-w-[1112px] mx-auto z-20">
        <div class="w-full flex flex-col items-center justify-center">
            <h2 class="w-full capitalize text-[30px] md:text-[60px] text-[#1b1c1d] font-bold mb-5 md:mb-10"><?php echo get_field('foundation_section')['heading'] ?></h2>
            <div class="w-full hidden lg:flex flex-col lg:flex-row justify-start items-stretch flex-wrap">
                <?php
                    $cards = get_field('foundation_section')['cards'];
                    if($cards) {
                        foreach($cards as $card) {
                ?>
                <div class="w-full lg:w-1/3 lg:[&:nth-child(3n+1)]:pl-0 lg:[&:nth-child(3n+1)]:pr-2 lg:[&:nth-child(3n)]:pl-2 lg:[&:nth-child(3n)]:pr-0 lg:pl-1 lg:pr-1 mb-6">
                    <div class="w-full h-full bg-white flex flex-col items-start p-9">
                        <h3 class="font-bold text-[20px] text-left mb-3"><?php echo $card['heading'] ?></h3>
                        <span class="w-full h-2 bg-orange-500 mb-9"></span>
                        <p class="leading-relaxed text-[#9f9f9f] text-[17px]"><?php echo $card['description'] ?></p>
                        <?php if($card['button_url'] && $card['button_label']): ?>
                        <a href="<?php echo $card['button_url']; ?>" class="mt-10 text-[17px] font-bold border-2 border-[#1b1c1d] bg-[#1b1c1d] px-6 py-2 text-white whitespace-nowrap"><?php echo $card['button_label']; ?></a>
                        <?php endif; ?>
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
    <div class="ms-fw-container block lg:hidden w-full overflow-auto touch-none cursor-grab no-scrollbar">
        <div class="ms-container w-[91%] max-w-none lg:max-w-[1112px] mx-auto">
            <div class="ms-wrap inline-flex flex-nowrap mt-[20px] md:mt-[40px]">
                <?php
                    $cards = get_field('foundation_section')['cards'];
                    if($cards) {
                        foreach($cards as $card) {
                ?>
                    <div class="w-[290px] mr-3 last:mr-0">
                        <div class="w-full h-full bg-white flex flex-col p-9">
                            <h3 class="font-bold text-[20px] text-left mb-3"><?php echo $card['heading'] ?></h3>
                            <span class="w-full h-2 bg-orange-500 mb-9"></span>
                            <p class="leading-relaxed text-[#9f9f9f] text-[14px] mb-6"><?php echo $card['description'] ?></p>
                            <?php if($card['button_url'] && $card['button_label']): ?>
                            <a href="<?php echo $card['button_url']; ?>" class="mt-10 text-[14px] font-bold border-2 border-[#1b1c1d] bg-[#1b1c1d] px-6 py-2 text-white whitespace-nowrap"><?php echo $card['button_label']; ?></a>
                            <?php endif; ?>
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