<section class="relative w-full flex justify-center bg-white py-16 lg:py-32">
    <div class="relative container z-20">
        <div class="w-full flex flex-col items-center justify-center @container">
            <h2 class="w-full capitalize text-5xl text-gray-900 font-semibold mb-10"><?php echo get_field('recommendation_group')['heading'] ?></h2>

            <!-- Desktop cards -->

            <div class="w-full hidden lg:flex flex-col lg:flex-row justify-center items-stretch space-y-9 space-x-0 lg:space-y-0 lg:space-x-6 xl:space-x-9 @container">
                <?php
                $recommendations = get_field('recommendation_group')['recommendations'];
                if($recommendations) {
                    foreach($recommendations as $recommendation){    
                ?>
                <div class="w-full lg:w-1/3 bg-white flex flex-col border border-zinc-200">
                    <div class="w-full h-0 pt-[60%] flex-none bg-cover bg-center" style="background-image: url(<?php echo esc_url( $recommendation['feature_image']) ?>); "></div>
                    <div class="w-full flex flex-col justify-between items-start grow p-3 lg:p-6 xl:p-9">
                        <div class="w-full">
                            <h3 class="font-bold text-xl text-left mb-3"><?php echo $recommendation['title']; ?></h3>
                            <?php if ($recommendation['category']): ?>
                            <p class="leading-relaxed mb-3"><?php echo esc_html( $recommendation['category'] ); ?></p>
                            <?php endif; ?>
                            <p class="leading-relaxed text-zinc-500 mb-12"><?php echo $recommendation['summary']; ?></p>
                        </div>
                        <a href="<?php echo $recommendation['button_url'] ?>" class="capitalize text-white flex justify-center items-center border-2 border-zinc-900 bg-zinc-900 px-6 py-2">
                            <?php echo $recommendation['button_label'] ?>
                        </a>
                    </div>
                </div>
                <?php
                    }
                }
                ?>
            </div>

            <!-- Mobile Carousel -->

            <div class="relative w-full block lg:hidden pb-16">
                <div id="slider-aem-recommend" class="w-full my-slider">
                    <?php
                    $recommendations = get_field('recommendation_group')['recommendations'];
                    if($recommendations) {
                        foreach($recommendations as $recommendation){    
                    ?>
                    <div class="w-full">
                            <div class="w-full h-full bg-white flex flex-col border border-zinc-200">
                                <div class="w-full h-0 pt-[60%] flex-none bg-cover bg-center" style="background-image: url(<?php echo esc_url( $recommendation['feature_image'] ); ?>); "></div>
                                <div class="w-full flex flex-col justify-between items-start grow p-3 lg:p-6 xl:p-9">
                                    <div class="w-full">
                                        <h3 class="font-bold text-xl text-left mb-3"><?php echo $recommendation['title']; ?></h3>
                                        <?php if ($recommendation['category']): ?>
                                        <p class="leading-relaxed mb-3"><?php echo esc_html( $recommendation['category'] ); ?></p>
                                        <?php endif; ?>
                                        <p class="leading-relaxed text-zinc-500 mb-12"><?php echo $recommendation['summary']; ?></p>
                                    </div>
                                    <a href="<?php echo $recommendation['button_url'] ?>" class="capitalize text-white flex justify-center items-center border-2 border-zinc-900 bg-zinc-900 px-6 py-2">
                                        <?php echo $recommendation['button_label'] ?>
                                    </a>
                                </div>
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