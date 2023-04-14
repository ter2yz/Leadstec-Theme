<section class="relative w-full flex justify-center mt-20 lg:mt-40 bg-gray-200 overflow-hidden">
    <div class="absolute h-full w-full inset-0 hidden lg:flex justify-center items-center py-12 z-30">
        <div id="solution-mask" class="h-full aspect-square rounded-full bg-transparent"></div>
    </div>
    <div class="relative container z-20">
        <div class="w-full py-40 lg:py-60 flex flex-col items-center justify-center">
            <h2 class="capitalize text-5xl text-gray-900 font-semibold"><?php echo get_field('our_solutions')['heading']; ?></h2>
            <div class="w-screen lg:w-full flex justify-start lg:justify-center items-center mt-20 overflow-x-auto">
                <?php
                    $tools = get_field('our_solutions')['tools'];
                    if( $tools ) {
                        foreach( $tools as $tool) {
                ?>
                    <div class="w-full min-w-[180px] lg:min-w-min px-3 flex flex-col items-center">
                        <div class="w-full p-6 lg:p-10 bg-white">
                            <img class="w-full" src="<?php echo esc_url($tool['logo']); ?>" alt="">
                        </div>
                        <a href="<?php echo $tool['url']; ?>" class="w-full">
                            <div class="w-full bg-gray-100 flex justify-center items-center py-6 font-medium">
                                <p class="solution-brand-label opacity-50 transition duration-300"><?php echo $tool['name'] ?></p>
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
    <div class="absolute w-full lg:w-auto lg:h-full inset-0 flex justify-center items-center py-12 z-0">
        <div class="relative w-11/12 lg:w-auto lg:h-full aspect-square">
            <div id="solution-circle" class="absolute inset-0 w-full h-full rounded-full bg-gradient-to-br from-gray-200 to-gray-400 transition duration-300 opacity-100">
            </div>
            <div id="solution-circle-active" class="absolute inset-0 w-full h-full rounded-full bg-gradient-to-br from-orange-300 to-orange-500 transition duration-300 opacity-0"></div>
        </div>
    </div>
</section>