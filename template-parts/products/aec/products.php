<section class="relative w-full flex justify-center bg-white pt-10 pb-40 lg:pt-20">
    <div class="relative w-[91%] max-w-none lg:max-w-[1112px] mx-auto z-20">
        <div class="w-full flex flex-col items-center justify-center">
            <h2 class="w-full capitalize text-[30px] md:text-[60px] text-[#1b1c1d] leading-[1.2] font-bold mb-5"><?php echo get_field('recommend_heading') ?></h2>
            <div class="filters w-full flex justify-start items-center mb-5 no-scrollbar flex-wrap">
                <button class="filter border border-orange-500 text-orange-500 text-[15px] font-bold rounded-lg px-6 py-2 mr-3 whitespace-nowrap mb-3" data-filter="all">All</button>
                <?php
                    $taxonomy = get_field('recommend_taxonomy');
                    $categories = get_terms($taxonomy, array('hide_empty' => false));

                    foreach( $categories as $category ) {
                ?>
                    <button class="filter border text-[#9f9f9f] border-zinc-400/25 text-[15px] font-bold hover:border-orange-500 hover:text-orange-500 rounded-lg px-6 py-2 mr-3 mb-3 whitespace-nowrap" data-filter="<?php echo $category->slug ?>"><?php echo $category->name ?></button>
                <?php
                    } 
                ?>
            </div>
            <div class="products w-full flex flex-col md:flex-row flex-wrap justify-start items-stretch transition opacity-100">
                <?php
                    $stories = get_field('recommend_stories');
                    if( $stories ) {
                        foreach( $stories as $story ) {
                ?>
                    <div class="product w-full md:w-1/3 md:[&:nth-child(3n+1)]:pl-0 md:[&:nth-child(3n+1)]:pr-2 md:[&:nth-child(3n)]:pl-2 md:[&:nth-child(3n)]:pr-0 md:pl-1 md:pr-1 mb-6 overflow-hidden" data-filter="<?php echo $story['category']->slug ?>">
                        <div class="w-full h-full bg-white flex flex-col border border-zinc-200">
                            <?php if($story['button_url']): ?>
                            <a href="<?php echo esc_url($story['button_url']); ?>" class="w-full">
                            <?php endif; ?>
                                <div class="w-full h-0 pt-[60%] flex-none bg-cover bg-center" aria-label="<?php echo $story['image_alt_text'] ?>" style="background-image: url(<?php echo esc_url( $story['feature_image'] ); ?>); "></div>
                                <div class="w-full flex flex-col justify-between items-start grow p-[30px] lg:p-6 xl:p-9">
                                    <div class="w-full">
                                        <h3 class="font-bold text-[20px] text-left mb-[10px]"><?php echo esc_html( $story['title'] ); ?></h3>
                                        <?php if ($story['category']): ?>
                                        <p class="leading-relaxed mb-[10px] text-[15px]"><?php echo esc_html( $story['category']->name ); ?></p>
                                        <?php endif; ?>
                                        <p class="leading-relaxed text-[#9f9f9f] text-[14px] md:text-[17px] mb-12 line-clamp-3"><?php echo $story['summary']; ?></p>
                                    </div>
                                    <?php if($story['button_url']): ?>
                                    <button class="capitalize text-white flex justify-center items-center text-[14px] md:text-[17px] font-bold border-2 border-[#1b1c1d] bg-[#1b1c1d] px-6 py-3">
                                        <?php echo $story['button_label'] ?>
                                    </button>
                                    <?php endif; ?>
                                </div>
                            <?php if($story['button_url']): ?>
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