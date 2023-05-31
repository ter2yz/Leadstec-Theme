<section class="relative w-full flex flex-col items-center justify-center bg-white py-12 md:py-20">
    <div class="relative w-[91%] max-w-none lg:max-w-[1112px] mx-auto z-20">
        <div class="w-full flex flex-col items-center justify-center">
            <h2 class="w-full text-[30px] md:text-[60px] text-[#1b1c1d] font-bold my-5 md:my-10"><?php echo get_field('leading_analysts_heading') ?></h2>

            <!-- Desktop cards -->
            <div class="w-full hidden md:flex flex-col md:flex-row justify-start items-stretch flex-wrap">
            <?php
            $posts = get_field('leading_analysts_stories');
            if($posts){
                foreach($posts as $singlePost){
            ?>
            <div class="w-full md:w-1/3 md:[&:nth-child(3n+1)]:pl-0 md:[&:nth-child(3n+1)]:pr-2 md:[&:nth-child(3n)]:pl-2 md:[&:nth-child(3n)]:pr-0 pl-1 pr-1 mb-9">
                <div class="w-full h-full bg-white flex flex-col border border-zinc-200">
                    <div class="w-full h-0 pt-[60%] flex-none bg-cover bg-center" aria-label="<?php echo $singlePost['background_image_alt_text'] ?>" style="background-image: url(<?php echo esc_url( $singlePost['bg_image']) ?>); "></div>
                    <div class="w-full flex flex-col justify-between items-start grow p-3 md:p-6 xl:p-9">
                        <div class="w-full">
                            <h3 class="font-bold text-[20px] text-[#1b1c1d] text-left mb-3"><?php echo $singlePost['heading']; ?></h3>
                            <p class="leading-relaxed text-[14px] md:text-[17px] text-[#9f9f9f] text-left mb-12 line-clamp-3"><?php echo $singlePost['summary']; ?></p>
                        </div>
                        <a href="<?php echo $singlePost['button_url'] ?>" class="text-[14px] md:text-[17px] font-bold text-white text-center flex justify-center items-center border-2 border-[#1b1c1d] bg-[#1b1c1d] px-6 py-2">
                            <?php echo $singlePost['button_label'] ?>
                        </a>
                    </div>
                </div>
            </div>
            <?php
                };
            };
            ?>
            </div>
        </div>
    </div>
    <!-- Mobile Carousel -->
    <div id="la-fw-container" class="block md:hidden w-full overflow-auto touch-none cursor-grab no-scrollbar">
        <div id="la-container" class="w-[91%] max-w-none lg:max-w-[1112px] mx-auto">
            <div id="la-wrap" class="inline-flex flex-nowrap mt-[20px] md:mt-[40px]">
                <?php
                $postsWrapper = get_field('leading_analysts_stories');
                if ($postsWrapper) {
                    foreach($postsWrapper as $singlePost) {
                ?>
                <div class="w-[290px] mr-3 last:mr-0">
                    <div class="w-full h-full bg-white flex flex-col border border-zinc-200">
                        <div class="w-full h-0 pt-[60%] flex-none bg-cover bg-center" aria-label="<?php echo $singlePost['background_image_alt_text'] ?>" style="background-image: url(<?php echo esc_url( $singlePost['bg_image']) ?>); "></div>
                        <div class="w-full flex flex-col justify-between items-start grow p-3 lg:p-6 xl:p-9">
                            <div class="w-full">
                                <h3 class="font-bold text-[20px] text-[#1b1c1d] text-left mb-3"><?php echo $singlePost['heading']; ?></h3>
                                <p class="leading-relaxed text-[#9f9f9f] text-left mb-12 line-clamp-3"><?php echo $singlePost['summary']; ?></p>
                            </div>
                            <a href="<?php echo $singlePost['button_url'] ?>" class="capitalize text-white flex justify-center items-center border-2 border-zinc-900 bg-zinc-900 px-6 py-2">
                                <?php echo $singlePost['button_label'] ?>
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
</section>