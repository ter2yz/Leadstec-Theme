<section class="relative w-full mt-20 lg:mt-40 bg-gray-200 overflow-hidden">
    <div class="relative z-20">
        <div class="w-full pt-32 pb-20 lg:pt-48 lg:pb-40 flex flex-col items-center justify-center">
            <h2 class="capitalize text-[30px] md:text-[60px]  text-[1b1c1d] font-semibold text-center -mt-16 px-2"><?php echo get_field('our_solutions')['heading']; ?></h2>
            <div id="solutions-fw-container" class="block lg:hidden w-full overflow-auto md:touch-none cursor-grab no-scrollbar">
                <div id="solutions-container" class="w-[91%] max-w-none lg:max-w-[1112px] mx-auto">
                    <div id="solutions-wrap" class="inline-flex flex-nowrap mt-[20px] md:mt-[40px]">
                        <?php
                            $tools = get_field('our_solutions')['tools'];
                            if( $tools ) {
                                foreach( $tools as $tool) {
                        ?>
                            <?php if($tool['url']): ?>
                            <a href="<?php echo $tool['url']; ?>" class="w-[96px] md:w-[166px] lg:w-[200px] mr-[12px] last:mr-0 flex-none" <?php echo $tool['is_open_via_new_tab'] ? 'target="_blank"' : ''; ?>>
                            <?php else: ?>
                            <div class="w-[96px] md:w-[166px] lg:w-[200px] mr-[12px] last:mr-0 flex-none">
                            <?php endif; ?>
                                <div class="solution-brand w-full lg:min-w-min flex flex-col items-center h-full group">
                                    <div class="w-full h-[96px] md:h-[166px] lg:h-[200px] p-3 lg:p-10 bg-white flex-none flex justify-center items-center">
                                        <img class="w-full h-full object-center object-contain" src="<?php echo esc_url($tool['logo']['url']); ?>" alt="<?php echo $tool['image_alt_text']; ?>">
                                    </div>
                                    <div class="w-full bg-gray-100 flex justify-center grow items-center p-3 md:p-6 font-bold">
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
            <div class="hidden lg:block w-[91%] max-w-none lg:max-w-[1112px] mx-auto mt-10">
                <div class="w-full flex flex-wrap justify-start items-stretch">
                <?php
                    $tools = get_field('our_solutions')['tools'];
                    if( $tools ) {
                        foreach( $tools as $tool) {
                ?>
                    <?php if($tool['url']): ?>
                    <a href="<?php echo $tool['url']; ?>" class="w-1/5 px-2 mb-3 flex-none" <?php echo $tool['is_open_via_new_tab'] ? 'target="_blank"' : ''; ?>>
                    <?php else: ?>
                    <div class="w-1/5 px-2 mb-3 flex-none">
                    <?php endif; ?>
                        <div class="solution-brand w-full lg:min-w-min flex flex-col items-center h-full group">
                            <div class="w-full h-[96px] md:h-[166px] lg:h-[200px] p-3 lg:p-10 bg-white flex-none flex justify-center items-center">
                                <img class="w-full h-full object-center object-contain" src="<?php echo esc_url($tool['logo']['url']); ?>" alt="<?php echo $tool['image_alt_text']; ?>">
                            </div>
                            <div class="w-full bg-gray-100 flex justify-center grow items-center p-3 md:p-6 font-bold">
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
    <div class="square-container absolute w-full h-full inset-0 flex justify-center items-center py-12 z-0">
        <div class="relative square-wrapper m-auto">
            <div id="solution-circle" class="absolute inset-0 w-full h-full rounded-full bg-gradient-to-br from-gray-200 to-gray-400 transition duration-300 opacity-100">
            </div>
            <div id="solution-circle-active" class="absolute inset-0 w-full h-full rounded-full bg-gradient-to-br from-orange-300 to-orange-500 transition duration-300 opacity-0"></div>
        </div>
    </div>
</section>