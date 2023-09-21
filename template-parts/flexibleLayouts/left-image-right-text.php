<section id="<?php echo get_sub_field('id')?>" class="w-full">
    <div class="relative w-[91%] max-w-none lg:max-w-[1112px] mx-auto">
        <?php
            $cards = get_sub_field('cards');
            if ($cards) {
                foreach($cards as $card) {
        ?>
        <div class="w-full flex flex-col md:flex-row justify-center items-stretch space-x-0 md:space-x-12 mb-12">
            <div class="w-full mb-6 md:mb-0">
                <div class="w-full h-full bg-cover bg-center bg-no-repeat" aria-label="<?php echo $card['image_alt_text'] ? $card['image_alt_text'] : get_field('image_alt_text', $card['post_id']);?>" style="background-image: url(<?php echo $card['image'] ? esc_url( $card['image'] ) : esc_url( get_field('feature_image', $card['post_id']) ); ?>)"></div>
            </div>
            <div class="w-full flex flex-col justify-start items-start">
                <div class="w-full">
                    <h3 class="relative text-[#1b1c1d] text-[20px] md:text-[40px] font-bold mb-5">
                        <?php echo $card['heading'] ? $card['heading'] : get_field('title', $card['post_id']); ?>
                    </h3>
                    <p class="text-[#9f9f9f] text-[15px] md:text-[20px]">
                        <?php echo $card['description'] ? $card['description'] : get_field('short_description', $card['post_id']); ?>
                    </p>
                </div>
                <?php if(($card['button_url'] && $card['button_label']) || $card['post_id']):?>
                <a href="<?php echo $card['button_url'] ? $card['button_url'] : get_permalink(get_post($card['post_id'])); ?>" class="text-[14px] font-bold mt-10 flex justify-center items-center border-2 border-zinc-900 bg-zinc-900 px-6 py-2 text-white">
                    <?php echo $card['button_label'] ? $card['button_label'] : get_field('read_more_label', $card['post_id']); ?>
                </a>
                <?php endif; ?>
            </div>
        </div>
        <?php
                }
            }
        ?>
    </div>
</section>