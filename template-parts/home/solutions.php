<section class="relative w-full mt-20 lg:mt-40 bg-gray-200 overflow-hidden">
    <div class="relative z-20">
        <div class="w-full py-40 lg:py-60 flex flex-col items-center justify-center">
            <h2 class="capitalize text-[30px] md:text-[60px]  text-[1b1c1d] font-semibold text-center"><?php echo get_field('our_solutions')['heading']; ?></h2>
            <div class="w-[91%] max-w-none lg:max-w-[1112px] mx-auto">
                <div class="solutions-wrap w-full inline-flex justify-start items-stretch mt-10 md:mt-20 overflow-x-auto no-scrollbar">
                    <?php
                        $tools = get_field('our_solutions')['tools'];
                        if( $tools ) {
                            foreach( $tools as $tool) {
                    ?>
                        <?php if($tool['url']): ?>
                        <a href="<?php echo $tool['url']; ?>" class="w-[calc(33.33%-0.6667rem)] md:w-[calc(25%-0.5rem)] lg:w-[calc(20%-0.4rem)] mr-2 last:mr-0 flex-none" target="_blank">
                        <?php else: ?>
                        <div class="w-[calc(33.33%-0.6667rem)] md:w-[calc(25%-0.5rem)] lg:w-[calc(20%-0.4rem)] mr-2 last:mr-0 flex-none">
                        <?php endif; ?>
                            <div class="solution-brand w-full lg:min-w-min flex flex-col items-center h-full group">
                                <div class="w-full h-[100px] sm:h-[150px] md:h-[200px] p-3 lg:p-10 bg-white flex-none flex justify-center items-center">
                                    <img class="w-full h-full object-center object-contain" src="<?php echo esc_url($tool['logo']['url']); ?>" alt="<?php echo $tool['logo']['alt']; ?>">
                                </div>
                                <div class="w-full bg-gray-100 flex justify-center grow items-center p-3 md:p-6 font-medium">
                                    <p class="solution-brand-label opacity-50 transition duration-300 text-center group-hover:opacity-100 text-[12px] md:text-[20px] text-[1b1c1d]"><?php echo $tool['name'] ?></p>
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
    </div>
    <div class="absolute w-full lg:w-auto lg:h-full inset-0 flex justify-center items-center py-12 z-0">
        <div class="relative w-[81%] md:w-[69%] lg:w-[57%] aspect-square">
            <div id="solution-circle" class="absolute inset-0 w-full h-full rounded-full bg-gradient-to-br from-gray-200 to-gray-400 transition duration-300 opacity-100">
            </div>
            <div id="solution-circle-active" class="absolute inset-0 w-full h-full rounded-full bg-gradient-to-br from-orange-300 to-orange-500 transition duration-300 opacity-0"></div>
        </div>
    </div>
</section>