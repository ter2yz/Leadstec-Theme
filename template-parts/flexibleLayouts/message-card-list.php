<section id="<?php echo get_sub_field('id')?>" class="relative w-full bg-[#f8f8f8] py-12 md:py-20">
    <div class="relative w-[91%] max-w-none lg:max-w-[1112px] mx-auto z-20">
        <div class="w-full flex flex-col items-center justify-center">
            <h2 class="w-full capitalize text-[30px] md:text-[60px] text-[#1b1c1d] font-bold mb-5 md:mb-10 <?php echo get_sub_field('is_header_center') ? 'text-center' : 'text-left'; ?>"><?php echo get_sub_field('heading') ?></h2>
            <div class="w-full flex flex-col md:flex-row flex-wrap justify-start items-stretch">
                <?php
                    $cards = get_sub_field('cards');
                    if( $cards ) {
                        foreach( $cards as $card ) {
                ?>
                    <div class="w-full md:w-1/3 md:[&:nth-child(3n+1)]:pl-0 md:[&:nth-child(3n+1)]:pr-2 md:[&:nth-child(3n)]:pl-2 md:[&:nth-child(3n)]:pr-0 md:pl-1 md:pr-1 mb-6">
                        <?php if($card['url']): ?>
                        <a href="<?php echo $card['url'] ?>" class="w-full">
                        <?php endif; ?>
                        <div class="w-full h-full bg-white flex flex-col justify-between items-start p-9 border-[6px] border-[#de1509]/0 transition hover:border-[#de1509]/100">
                            <div class="w-full">
                                <h3 class="font-bold text-xl text-left mb-[15px] text-[#1b1c1d]"><?php echo $card['heading'] ?></h3>
                                <p class="leading-relaxed text-[14px] md:text-[17px] text-[#9f9f9f] mb-[26px]"><?php echo $card['description'] ?></p>
                            </div>
                            <?php
                            if($card['url']){
                            ?>
                            <button class="text-sky-600 text-[14px] md:text-[17px]"><?php echo $card['button_label'] ?></button>
                            <?php
                            }
                            ?>
                        </div>
                        <?php if($card['url']): ?>
                        </a>
                        <?php endif; ?>
                    </div>
                <?php
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</section>