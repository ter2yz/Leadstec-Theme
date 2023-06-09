<section class="relative w-full flex justify-center bg-gray-100 pt-16 pb-16 md:pb-20">
    <div class="relative w-[91%] max-w-none lg:max-w-[1112px] mx-auto z-20">
        <div class="w-full flex flex-col items-center justify-center">
            <h2 class="w-full capitalize text-[30px] md:text-[60px] text-[#1b1c1d] font-bold mb-5 md:mb-10 text-center"><?php echo get_field('evaluation_heading'); ?></h2>
            <div class="w-full hidden md:flex flex-row justify-start items-stretch flex-wrap">
                <?php
                    $evaluations = get_field('evaluations');
                    if ($evaluations) {
                        foreach($evaluations as $evaluation) {
                ?>
                    <div class="w-1/3 [&:nth-child(3n+1)]:pl-0 [&:nth-child(3n+1)]:pr-2 [&:nth-child(3n)]:pl-2 [&:nth-child(3n)]:pr-0 pl-1 pr-1 mb-6">
                        <div class="w-full h-full bg-white flex flex-col p-9">
                            <div class="w-full flex flex-col lg:flex-row justify-start items-start pb-6 mb-6 border-b border-zinc-400/25">
                                <div class="flex-none mr-6">
                                    <img class="h-16" src="<?php echo esc_url( $evaluation['logo'] ); ?>" alt="<?php echo $evaluation['logo_image_alt_text'] ?>">
                                </div>
                                <div class="grow flex flex-col items-start">
                                    <h3 class="font-bold text-[15px] text-[#1b1c1d] text-left mb-1"><?php echo $evaluation['heading']; ?></h3>
                                    <p class="text-[15px] text-[#9f9f9f] leading-none"><?php echo $evaluation['sub_heading']; ?></p>
                                </div>
                            </div>
                            <p class="leading-relaxed text-[20px] text-[#9f9f9f]"><?php echo $evaluation['description']; ?></p>
                        </div>
                    </div>
                <?php
                        }
                    }
                ?>
                
            </div>
            <div class="w-full block md:hidden">
                <div id="slider-erp-evaluation" class="w-full my-slider">
                    <?php
                        $evaluations = get_field('evaluations');
                        if ($evaluations) {
                            foreach($evaluations as $evaluation) {
                    ?>
                    <div class="w-full px-1">
                        <div class="w-full h-full bg-white flex flex-col p-9">
                            <div class="w-full flex-col justify-start items-center pb-6 mb-6 border-b border-zinc-400/25">
                                <div class="flex-none mb-6">
                                    <img class="h-16" src="<?php echo esc_url( $evaluation['logo'] ); ?>" alt="<?php echo $evaluation['logo_image_alt_text'] ?>">
                                </div>
                                <div class="grow flex flex-col items-start">
                                    <h3 class="font-bold text-[15px] text-[#1b1c1d] text-left mb-1"><?php echo $evaluation['heading']; ?></h3>
                                    <p class="text-[15px] text-[#9f9f9f] leading-none"><?php echo $evaluation['sub_heading']; ?></p>
                                </div>
                            </div>
                            <p class="leading-relaxed text-[20px] text-[#9f9f9f]"><?php echo $evaluation['description']; ?></p>
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