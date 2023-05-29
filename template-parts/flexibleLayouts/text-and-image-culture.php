<section id="<?php echo get_sub_field('id')?>" class="w-full flex flex-col items-center justify-center overflow-hidden pt-[44px] md:pt-20 pb-40 lg:pb-28 bg-zinc-900 @container">
    <div class="w-[91%] max-w-none lg:max-w-[1112px] mx-auto mb-10">
        <div class="w-full">
            <h2 class="capitalize text-[30px] md:text-[60px] text-white font-semibold px-2"><?php echo get_sub_field('heading'); ?></h2>
        </div>
    </div>
    <div class="w-full">
        <?php
            $cards = get_sub_field('cards');
            if( $cards ) {
                foreach( $cards as $card ) {
        ?>
            <div class="relative w-full flex justify-center group transition duration-300 hover:bg-white overflow-hidden">
                <div class="relative w-[91%] max-w-none lg:max-w-[1112px] mx-auto flex lg:group-odd:flex-row lg:group-even:flex-row-reverse group-odd:justify-start group-even:justify-end items-center z-10">
                    <div class="w-full md:group-even:w-7/12 lg:w-5/12 md:group-odd:pr-12 md:group-even:pl-12 lg:group-even:pl-20 min-h-[181px] md:min-h-[385px] flex flex-col justify-center group-odd:items-start group-even:items-end">
                        <h3 class="w-full text-white text-[20px] md:text-[40px] font-semibold mb-3 group-even:text-right transition duration-300 group-hover:text-zinc-900 px-2"><?php echo $card['heading'] ?></h3>
                        <p class="w-full md:max-w-[370px] text-white text-[15px] md:text-[20px] group-even:text-right transition duration-300 group-hover:text-zinc-900 px-2"><?php echo $card['description'] ?></p>
                    </div>
                    <div class="hidden lg:block w-7/12 min-h-[181px] md:min-h-[385px]"></div>
                </div>
                <div class="absolute w-full md:w-7/12 h-full scale-105 group-odd:right-0 group-even:left-0 top-0 bg-no-repeat bg-cover bg-center opacity-60 transition duration-300 group-hover:opacity-100" aria-label="<?php echo $card['image_alt_text']; ?>" style="background-image: url(<?php echo esc_url( $card['image']['url'] ); ?>)"></div>
            </div>
        <?php
                }
            }
        ?>
    </div>
</section>

