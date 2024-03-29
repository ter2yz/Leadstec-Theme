<section id="<?php echo get_sub_field('id')?>" class="relative w-full flex justify-center bg-white">
    <div class="relative w-[91%] max-w-none lg:max-w-[1112px] mx-auto z-20">
        <div class="w-full flex flex-col items-center justify-center">
            <h2 class="w-full capitalize text-[30px] md:text-[60px] text-[#1b1c1d] font-bold mb-5 md:mb-10 <?php echo get_sub_field('is_header_center') ? 'text-center' : 'text-left'; ?>"><?php echo get_sub_field('heading') ?></h2>
            <div class="w-full">
                <?php
                $cards = get_sub_field('cards');
                if ($cards) {
                    foreach($cards as $card) {
                ?>
                <div class="w-full flex flex-col md:odd:flex-row md:even:flex-row-reverse justify-center items-center mb-12 group">
                    <div class="w-full md:max-w-[340px] lg:max-w-none md:group-odd:mr-[28px] md:group-even:ml-[28px] lg:group-odd:mr-[50px] lg:group-even:ml-[50px] bg-cover bg-no-repeat bg-center" style="background-image: url(<?php echo esc_url( $card['image'] ); ?>);">
                        <img src="<?php echo esc_url( $card['image'] ); ?>" class="w-full object-center object-cover" alt="<?php echo $card['image_alt_text'] ?>">
                    </div>
                    <div class="w-full py-9 md:py-0 md:group-odd:pl-[28px] md:group-even:pr-[28px] lg:group-odd:pl-[50px] lg:group-even:pr-[50px] flex flex-col items-start">
                        <h3 class="relative capitalize text-[#1b1c1d] text-[20px] md:text-[40px] font-bold mb-5 leading-[1]">
                            <?php echo $card['heading'] ?>
                        </h3>
                        <p class="text-[#9f9f9f] text-[15px] md:text-[20px] leading-[1.2]"><?php echo $card['description'] ?></p>
                        <?php if($card['button_label'] && $card['button_url']) {
                        ?>                        
                        <a href="<?php echo $card['button_url']; ?>" class="text-[15px] mt-10 flex justify-center items-center border-2 border-[#1b1c1d] bg-[#1b1c1d] px-6 py-2 text-white capitalize">
                            <?php echo $card['button_label']; ?>
                        </a>
                        <?php
                        }?>
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