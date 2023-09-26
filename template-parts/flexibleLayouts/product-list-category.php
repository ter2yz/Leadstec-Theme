<section id="<?php echo get_sub_field('id')?>" class="relative w-full flex justify-center bg-white">
    <div class="relative w-[91%] max-w-none lg:max-w-[1112px] mx-auto z-20">
        <div class="filter-wrapper w-full flex flex-col items-center justify-center">
            <h2 class="w-full text-[30px] md:text-[60px] text-[#1b1c1d] leading-[1.2] font-bold mb-5 <?php echo get_sub_field('is_header_center') ? 'text-center' : 'text-left'; ?>"><?php echo get_sub_field('heading') ?></h2>
            <div class="filters w-full flex justify-start items-center mb-5 no-scrollbar flex-wrap">
                <button class="filter border border-orange-500 text-orange-500 text-[15px] font-bold rounded-lg px-6 py-2 mr-3 whitespace-nowrap mb-3" data-filter="all"><?php echo get_sub_field('all_label');?></button>
                <?php
                    $taxonomy = get_sub_field('cases_taxonomy');
                    $categories = get_terms($taxonomy, array(
                        'hide_empty' => false,
                        'orderby' => 'date'
                    ));
                    usort($categories, function($a, $b) {
                        return get_field('order', $a) - get_field('order', $b);
                    });

                    foreach( $categories as $category ) {
                ?>
                    <button class="filter border text-[#9f9f9f] border-zinc-400/25 text-[15px] font-bold hover:border-orange-500 hover:text-orange-500 rounded-lg px-6 py-2 mr-3 mb-3 whitespace-nowrap" data-filter="<?php echo $category->slug ?>"><?php echo $category->name ?></button>
                <?php
                    } 
                ?>
            </div>
            <div class="filter-items-wrapper w-full flex flex-col md:flex-row flex-wrap justify-start items-stretch transition opacity-100">
                <?php
                    $cases = get_sub_field('cases');
                    if( $cases ) {
                        foreach( $cases as $case ) {
                            $current_taxonomies = get_post_taxonomies(get_post($case['post_id']));
                            $categories = get_the_terms(get_post($case['post_id']), $current_taxonomies[0]);
                ?>
                    <div class="filter-item w-full md:w-1/3 md:[&:nth-child(3n+1)]:pl-0 md:[&:nth-child(3n+1)]:pr-2 md:[&:nth-child(3n)]:pl-2 md:[&:nth-child(3n)]:pr-0 md:pl-1 md:pr-1 mb-6 overflow-hidden" data-filter="<?php
                                                if(count($categories) > 0) {
                                                    $counter = 0;
                                                    foreach ($categories as $cat) {
                                                        if( $counter == count( $categories ) - 1) {
                                                            echo $cat->slug;
                                                        } else {
                                                            echo $cat->slug . ',';
                                                        }
                                                        $counter++;
                                                    }
                                                }
                                            ?>">
                        <div class="w-full h-full bg-white flex flex-col border border-zinc-200">
                            <?php if($case['button_url'] || $case['post_id']): ?>
                            <a href="<?php echo $case['button_url'] ? esc_url($case['button_url']) : get_permalink(get_post($card['post_id'])); ?>" class="w-full h-full flex flex-col">
                            <?php endif; ?>
                                <div class="w-full h-0 pt-[60%] flex-none bg-cover bg-center" aria-label="<?php echo $case['image_alt_text'] ?>" style="background-image: url(<?php echo $case['feature_image'] ? esc_url( $case['feature_image'] ) : esc_url( get_field('feature_image', $case['post_id'])['url'] ); ?>); "></div>
                                <div class="w-full flex flex-col justify-between items-start grow p-[30px] lg:p-6 xl:p-9">
                                    <div class="w-full">
                                        <h3 class="font-bold text-[20px] text-left mb-[10px]"><?php echo $case['title'] ? esc_html( $case['title'] ) : esc_html( get_field('title', $case['post_id']) ); ?></h3>
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
                                        <p class="leading-relaxed text-[#9f9f9f] text-[14px] md:text-[17px] mb-12 line-clamp-3"><?php echo $case['summary'] ? $case['summary'] : get_field('short_description', $case['post_id']); ?></p>
                                    </div>
                                    <?php if($case['button_url'] || $case['post_id']): ?>
                                    <button class="text-white flex justify-center items-center text-[14px] md:text-[17px] font-bold border-2 border-[#1b1c1d] bg-[#1b1c1d] px-6 py-3">
                                        <?php echo $case['button_label'] ? $case['button_label'] : get_field('read_more_label', $case['post_id']); ?>
                                    </button>
                                    <?php endif; ?>
                                </div>
                            <?php if($case['button_url'] || $case['post_id']): ?>
                            </a>
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