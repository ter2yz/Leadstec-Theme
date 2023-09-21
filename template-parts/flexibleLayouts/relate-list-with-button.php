<section id="<?php echo get_sub_field('id')?>" class="relative w-full flex flex-col items-center justify-center bg-white">
    <div class="relative w-[91%] max-w-none lg:max-w-[1112px] mx-auto z-20">
        <div class="w-full flex flex-col items-center justify-center">
            <h2 class="w-full capitalize text-[30px] md:text-[60px] text-[#1b1c1d] font-bold mb-5 md:mb-10 <?php echo get_sub_field('is_header_center') ? 'text-center' : 'text-left'; ?>"><?php echo get_sub_field('heading') ?></h2>

            <!-- Desktop cards -->

            <div class="w-full hidden md:flex flex-col md:flex-row justify-start items-stretch flex-wrap">
                <?php
                $cards = get_sub_field('cards');
                if($cards) {
                    foreach($cards as $card){
                        $current_taxonomies = get_post_taxonomies(get_post($card['post_id']));
                        $categories = get_the_terms(get_post($card['post_id']), $current_taxonomies[0]);    
                ?>
                <div class="w-full md:w-1/3 md:[&:nth-child(3n+1)]:pl-0 md:[&:nth-child(3n+1)]:pr-2 md:[&:nth-child(3n)]:pl-2 md:[&:nth-child(3n)]:pr-0 md:pl-1 md:pr-1 mb-6 md:mb-9">
                    <?php if($card['button_url'] || $card['post_id']): ?>
                    <a href="<?php echo $card['button_url'] ? $card['button_url'] : get_permalink(get_post($card['post_id'])); ?>">
                    <?php endif; ?>
                    <div class="w-full h-full bg-white flex flex-col border border-zinc-200">
                        <div class="w-full h-0 pt-[60%] flex-none bg-cover bg-center" aria-label="<?php echo $card['image_alt_text'] ? $card['image_alt_text'] : get_field('image_alt_text', $card['post_id']); ?>" style="background-image: url(<?php echo $card['feature_image'] ? esc_url( $card['feature_image']) : esc_url(get_field('feature_image', $card['post_id'])['url']); ?>); "></div>
                        <div class="w-full flex flex-col justify-between items-start grow p-3 md:p-6 xl:p-9">
                            <div class="w-full">
                                <h3 class="font-bold text-[20px] text-[#1b1c1d] text-left mb-3"><?php echo $card['title'] ? $card['title'] : get_field('title', $card['post_id']); ?></h3>
                                <?php if ($categories): ?>
                                <p class="leading-relaxed text-[#1b1c1d] text-[15px] mb-3"><?php
                                        if(count($categories) > 0) {
                                            $counter = 0;
                                            foreach ($categories as $cat) {
                                                if( $counter == count( $categories ) - 1) {
                                                    echo $cat->name;
                                                } else {
                                                    echo $cat->name . ', ';
                                                }
                                                $counter++;
                                            }
                                        }
                                    ?></p>
                                <?php endif; ?>
                                <p class="leading-relaxed text-[#9f9f9f] text-[17px] mb-6 line-clamp-3"><?php echo $card['summary'] ? $card['summary'] : get_field('short_description', $card['post_id']); ?></p>
                            </div>
                            <?php if($card['button_url'] || $card['post_id']): ?>
                            <button class="text-white  text-[17px] font-bold flex justify-center items-center border-2 border-[#1b1c1d] bg-[#1b1c1d] px-6 py-3">
                                <?php echo $card['button_label'] ? $card['button_label'] : get_field('read_more_label', $card['post_id']); ?>
                            </button>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php if($card['button_url'] || $card['post_id']): ?>
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
    <div class="ms-fw-container block md:hidden w-full overflow-auto md:touch-none cursor-grab no-scrollbar">
        <div class="ms-container w-[91%] max-w-none lg:max-w-[1112px] mx-auto">
            <div class="ms-wrap inline-flex flex-nowrap mt-[20px] md:mt-[40px]">
                <?php
                    if($cards) {
                        foreach($cards as $card) {
                            $current_taxonomies = get_post_taxonomies(get_post($card['post_id']));
                            $categories = get_the_terms(get_post($card['post_id']), $current_taxonomies[0]);
                    ?>
                    <div class="w-[290px] mr-3 last:mr-0">
                        <a href="<?php echo $card['button_url'] ? $card['button_url'] : get_permalink(get_post($card['post_id'])); ?>" class="w-full h-full bg-white flex flex-col border border-zinc-200">
                            <div class="w-full h-0 pt-[60%] flex-none bg-cover bg-center" aria-label="<?php echo $card['image_alt_text'] ? $card['image_alt_text'] : get_field('image_alt_text', $card['post_id']); ?>" style="background-image: url(<?php echo $card['feature_image'] ? esc_url( $card['feature_image'] ) : esc_url(get_field('feature_image', $card['post_id'])['url']); ?>); "></div>
                            <div class="w-full flex flex-col justify-between items-start grow p-3 lg:p-6 xl:p-9">
                                <div class="w-full">
                                    <h3 class="font-bold text-[20px] text-[#1b1c1d] text-left mb-3"><?php echo $card['title'] ? $card['title'] : get_field('title', $card['post_id']); ?></h3>
                                    <?php if ($categories): ?>
                                            <p class="leading-relaxed text-[#1b1c1d] text-[15px] mb-3"><?php
                                                if(count($categories) > 0) {
                                                    $counter = 0;
                                                    foreach ($categories as $cat) {
                                                        if( $counter == count( $categories ) - 1) {
                                                            echo $cat->name;
                                                        } else {
                                                            echo $cat->name . ', ';
                                                        }
                                                        $counter++;
                                                    }
                                                }
                                            ?></p>
                                        <?php endif; ?>
                                    <p class="leading-relaxed text-[#9f9f9f] text-[14px] mb-6 line-clamp-3"><?php echo $card['summary'] ? $card['summary'] : get_field('short_description', $card['post_id']); ?></p>
                                </div>
                                <button class="text-white flex justify-center text-[14px] font-bold items-center border-2 border-[#1b1c1d] bg-[#1b1c1d] px-6 py-3">
                                    <?php echo $card['button_label'] ? $card['button_label'] : get_field('read_more_label', $card['post_id']); ?>
                                </button>
                            </div>
                        </a>
                    </div>
                    <?php
                        }
                    }
                    ?>
            </div>
        </div>
    </div>
</section>