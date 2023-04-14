<section class="relative w-full flex justify-center bg-white pt-10 pb-16 lg:pb-32">
    <div class="relative container z-20 ">
        <div class="w-full flex flex-col items-center justify-center  min-h-screen">
            <h2 class="w-full text-center capitalize text-5xl text-gray-900 font-semibold pt-10 pb-10 bg-white sticky top-0 z-20"><?php echo get_field('benefits')['heading']; ?></h2>
            <div class="w-full flex flex-col lg:flex-row justify-center items-start">
                <div class="w-full lg:w-1/2 lg:pr-6 lg:sticky top-40">
                    <img class="slider-single-image w-full max-w-xl mx-auto" src="<?php echo esc_url( get_field('benefits')['image'] ); ?>" alt="">
                </div>
                <div class="w-full lg:w-1/2 lg:pl-6 mt-10 lg:mt-0">
                    <?php
                        $benefits = get_field('benefits')['benefits'];
                        if( $benefits ) {
                            foreach( $benefits as $benefit ) {
                    ?>
                        <div class="w-full py-16 lg:py-40 flex flex-col justify-center">
                            <h3 class="relative text-gray-900 text-3xl font-semibold mb-6">
                                <?php echo $benefit['heading'] ?>
                                <span class="absolute left-0 bottom-0 text-7xl origin-bottom-left scale-150 font-bold text-zinc-800/5"><?php echo $benefit['blur_background_text'] ?></span>
                            </h3>
                            <p class="text-gray-900 capitalize"><?php echo $benefit['description'] ?></p>
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
