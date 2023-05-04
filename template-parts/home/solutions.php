<section class="relative w-full flex justify-center mt-20 lg:mt-40 bg-gray-200 overflow-hidden">
    <!-- <div class="absolute h-full w-full inset-0 hidden lg:flex justify-center items-center py-12 z-30">
        <div id="solution-mask" class="h-full aspect-square rounded-full bg-transparent"></div>
    </div> -->
    <div class="relative container z-20">
        <div class="w-full py-40 lg:py-60 flex flex-col items-center justify-center">
            <h2 class="capitalize text-[30px] md:text-[60px]  text-gray-900 font-semibold text-center"><?php echo get_field('our_solutions')['heading']; ?></h2>
            <div class="w-full flex justify-start items-stretch mt-10 md:mt-20 overflow-x-auto no-scrollbar">
                <?php
                    $tools = get_field('our_solutions')['tools'];
                    if( $tools ) {
                        foreach( $tools as $tool) {
                ?>
                    <?php if($tool['url']): ?>
                    <a href="<?php echo $tool['url']; ?>" class="w-[calc(33.33%-0.5rem)] md:w-[calc(25%-1rem)] lg:w-[calc(20%-1rem)] flex-none" target="_blank">
                    <?php else: ?>
                    <div class="w-[calc(33.33%-0.5rem)] md:w-[calc(25%-1rem)] lg:w-[calc(20%-1.5rem)] flex-none">
                    <?php endif; ?>
                        <div class="solution-brand w-full lg:min-w-min px-3 flex flex-col items-center h-full group">
                            <div class="w-full h-[100px] sm:h-[150px] md:h-[200px] p-6 lg:p-10 bg-white flex-none flex justify-center items-center">
                                <img class="w-full h-full object-center object-contain" src="<?php echo esc_url($tool['logo']); ?>" alt="">
                            </div>
                            <div class="w-full bg-gray-100 flex justify-center grow items-center py-4 md:py-6 px-6 font-medium">
                                <p class="solution-brand-label opacity-50 transition duration-300 text-center group-hover:opacity-100 text-[10px] md:text-[20px]"><?php echo $tool['name'] ?></p>
                            </div>
                        </div>
                    <?php if($tool['url']): ?>
                    </a>
                    <?php else: ?>
                    </div>
                    <?php endif; ?>
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