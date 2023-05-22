<section class="relative w-full flex justify-center bg-white pt-10 pb-16 lg:pb-32">
    <div class="relative w-[91%] max-w-none lg:max-w-[1112px] mx-auto z-20">
        <div class="w-full flex flex-col items-center justify-center">
            <h2 class="w-full text-center capitalize text-[30px] md:text-[60px] text-[#1b1c1d] font-semibold pt-10 pb-10 bg-white top-[67px] z-20"><?php echo get_field('benefits')['heading']; ?></h2>
            <div class="w-full flex flex-col md:flex-row justify-center items-start">
                <div class="w-full md:w-1/2 lg:pr-6 md:py-32">
                    <img class="slider-single-image w-full max-w-xl mx-auto" src="<?php echo esc_url( get_field('benefits')['image']['url'] ); ?>" alt="<?php echo get_field('benefits')['image_alt_text']; ?>">
                </div>
                <div class="w-full md:w-1/2 lg:pl-6 mt-10 md:mt-0 md:pl-[15px] md:overflow-y-scroll md:h-[500px] no-scrollbar">
                    <?php
                        $benefits = get_field('benefits')['benefits'];
                        if( $benefits ) {
                            foreach( $benefits as $benefit ) {
                    ?>
                        <div class="w-full py-16 md:py-20 flex flex-col justify-center">
                            <h3 class="relative text-gray-900 text-[20px] md:text-[40px] font-semibold mb-6">
                                <?php echo $benefit['heading'] ?>
                                <span class="absolute left-0 bottom-0 text-7xl origin-bottom-left scale-150 font-bold text-zinc-800/5"><?php echo $benefit['blur_background_text'] ?></span>
                            </h3>
                            <p class="text-[#9f9f9f] text-[15px] md:text-[20px]"><?php echo $benefit['description'] ?></p>
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
