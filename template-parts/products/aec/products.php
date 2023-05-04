<section class="relative w-full flex justify-center bg-white pt-10 pb-40 lg:pt-20">
    <div class="relative container z-20">
        <div class="w-full flex flex-col items-center justify-center">
            <h2 class="w-full capitalize text-5xl text-gray-900 font-semibold mb-10 px-2"><?php echo get_field('recommend_heading') ?></h2>
            <div class="filters w-full flex justify-start items-center mb-10 px-2 no-scrollbar flex-wrap">
                <button class="filter border border-orange-500 text-orange-500 rounded-lg px-6 py-2 mr-3 whitespace-nowrap mb-3" data-filter="all">All</button>
                <?php
                    $categories = get_categories( array(
                        'orderby' => 'name',
                        'order'   => 'ASC'
                    ) );

                    foreach( $categories as $category ) {
                ?>
                    <button class="filter border text-zinc-500 border-zinc-400/25 hover:border-orange-500 hover:text-orange-500 rounded-lg px-6 py-2 mr-3 mb-3 whitespace-nowrap" data-filter="<?php echo $category->slug ?>"><?php echo $category->name ?></button>
                <?php
                    } 
                ?>
            </div>
            <div class="products w-full flex flex-col lg:flex-row flex-wrap justify-start items-stretch transition opacity-100">
                <?php
                    $stories = get_field('recommend_stories');
                    if( $stories ) {
                        foreach( $stories as $story ) {
                ?>
                    <div class="product w-full lg:w-1/3 p-2 overflow-hidden" data-filter="<?php echo $story['category']->slug ?>">
                        <?php if($story['button_url']): ?>
                        <a href="<?php echo $story['button_url'] ?>">
                        <?php endif; ?>
                            <div class="w-full h-full bg-white flex flex-col border border-zinc-200">
                                <div class="w-full h-0 pt-[60%] flex-none bg-cover bg-center" style="background-image: url(<?php echo esc_url( $story['feature_image'] ); ?>); "></div>
                                <div class="w-full flex flex-col justify-between items-start grow p-3 lg:p-6 xl:p-9">
                                    <div class="w-full">
                                        <h3 class="font-bold text-xl text-left mb-3"><?php echo esc_html( $story['title'] ); ?></h3>
                                        <?php if ($story['category']): ?>
                                        <p class="leading-relaxed mb-3"><?php echo esc_html( $story['category']->name ); ?></p>
                                        <?php endif; ?>
                                        <p class="leading-relaxed text-zinc-500 mb-12 line-clamp-3"><?php echo $story['summary']; ?></p>
                                    </div>
                                    <?php if($story['button_url']): ?>
                                    <a href="<?php echo $story['button_url'] ?>" class="capitalize text-white flex justify-center items-center border-2 border-zinc-900 bg-zinc-900 px-6 py-2">
                                        <?php echo $story['button_label'] ?>
                                    </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php if($story['button_url']): ?>
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