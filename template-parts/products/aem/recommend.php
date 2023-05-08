<section class="relative w-full flex justify-center bg-white py-16 lg:py-32">
    <div class="relative w-[91%] max-w-none lg:max-w-[1112px] mx-auto z-20">
        <div class="w-full flex flex-col items-center justify-center @container">
            <h2 class="w-full capitalize text-[40px] md:text-[60px] text-[#1b1c1d] font-bold mb-10"><?php echo get_field('recommendation_group')['heading'] ?></h2>

            <!-- Desktop cards -->

            <div class="w-full hidden md:flex flex-col md:flex-row justify-start items-stretch flex-wrap">
                <?php
                $recommendations = get_field('recommendation_group')['recommendations'];
                if($recommendations) {
                    foreach($recommendations as $recommendation){    
                ?>
                <div class="w-full md:w-1/3 md:[&:nth-child(3n+1)]:pl-0 md:[&:nth-child(3n)]:pr-0 md:pl-3 md:pr-3 mb-6 md:mb-9">
                    <div class="w-full h-full bg-white flex flex-col border border-zinc-200">
                        <div class="w-full h-0 pt-[60%] flex-none bg-cover bg-center" style="background-image: url(<?php echo esc_url( $recommendation['feature_image']) ?>); "></div>
                        <div class="w-full flex flex-col justify-between items-start grow p-3 md:p-6 xl:p-9">
                            <div class="w-full">
                                <h3 class="font-bold text-[20px] text-[#1b1c1d] text-left mb-3"><?php echo $recommendation['title']; ?></h3>
                                <?php if ($recommendation['category']): ?>
                                <p class="leading-relaxed text-[#1b1c1d] text-[15px] mb-3"><?php echo esc_html( $recommendation['category'] ); ?></p>
                                <?php endif; ?>
                                <p class="leading-relaxed text-[#9f9f9f] text-[14px] mb-6"><?php echo $recommendation['summary']; ?></p>
                            </div>
                            <a href="<?php echo $recommendation['button_url'] ?>" class="text-white  text-[14px] flex justify-center items-center border-2 border-[#1b1c1d] bg-[#1b1c1d] px-6 py-3">
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

            <!-- Mobile Carousel -->

            <div class="relative w-full block md:hidden pb-16">
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
                                        <h3 class="font-bold text-[20px] text-[#1b1c1d] text-left mb-3"><?php echo $recommendation['title']; ?></h3>
                                        <?php if ($recommendation['category']): ?>
                                        <p class="leading-relaxed text-[#1b1c1d] text-[15px] mb-3"><?php echo esc_html( $recommendation['category'] ); ?></p>
                                        <?php endif; ?>
                                        <p class="leading-relaxed text-[#9f9f9f] text-[14px] mb-6"><?php echo $recommendation['summary']; ?></p>
                                    </div>
                                    <a href="<?php echo $recommendation['button_url'] ?>" class="capitalize text-white flex justify-center items-center border-2 border-[#1b1c1d] bg-[#1b1c1d] px-6 py-3">
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