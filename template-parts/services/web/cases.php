<section id="web-cases" class="relative w-full lg:bg-zinc-900 z-20 pb-40">
    <div class="w-full hidden lg:flex lg:h-screen lg:min-h-[600px] px-8 lg:px-0">
        <h2 class="block lg:hidden w-full text-5xl text-zinc-900 font-semibold mb-10 text-left"><?php echo get_field('cases_section')['heading'] ?></h2>
        <?php $cases = get_field('cases_section')['cases']; ?>
        <div id="number-selector-wrapper" class="hidden lg:flex w-4/12 max-w-xs px-6 h-full flex-col items-center justify-center text-zinc-900" style="background: linear-gradient(to bottom, <?php echo $cases[0]['background_gradient_start']?>, <?php echo $cases[0]['background_gradient_end']?>);">
            <h2 class="text-5xl font-semibold leading-tight mb-16 text-center"><?php echo get_field('cases_section')['heading'] ?></h2>
            <div id="slider-web-cases" class="w-full text-white flex flex-col items-center justify-center">
                <?php
                    $slide_cases_index = 0;
                    if ($cases) {
                        foreach($cases as $case) {
                ?>
                <div class="text-7xl font-bold px-3 flex items-center justify-center">
                    <?php if ($slide_cases_index == 0): ?>
                        <button data-index="<?php echo $slide_cases_index; ?>" data-bgstart="<?php echo $case['background_gradient_start'] ?>" data-bgend="<?php echo $case['background_gradient_end'] ?>" data-caseId="" class="h-40 transition-all text-[100px] opacity-100 text-white custom-number-shadow flex items-center">
                            <p class="mr-6"><?php echo $slide_cases_index + 1; ?></p>
                            <span class="w-5 h-[2px] bg-zinc-900"></span>
                        </button>
                    <?php else: ?>
                        <button data-index="<?php echo $slide_cases_index; ?>" data-bgstart="<?php echo $case['background_gradient_start'] ?>" data-bgend="<?php echo $case['background_gradient_end'] ?>" data-caseId="" class="h-40 text-[20px] opacity-60 transition-all text-[#1b1c1d] flex items-center">
                            <p class="mr-6"><?php echo $slide_cases_index + 1; ?></p>    
                            <span class="w-5 h-[2px] opacity-60 bg-zinc-900"></span>
                        </button>
                    <?php endif; ?>
                </div>
                <?php
                            $slide_cases_index += 1;
                        }
                    }
                ?>
            </div>
        </div>
        <div id="showcase-web-cases" class="relative hidden lg:block grow w-full lg:w-auto h-full">
            <?php
                $slide_cases_index = 0;
                $cases = get_field('cases_section')['cases'];
                if ($cases) {
                    foreach($cases as $case) {
            ?>
            <div data-index="<?php echo $slide_cases_index; ?>" class="showcase-container relative lg:absolute w-full h-full inset-0 flex flex-col justify-center items-stretch transition duration-500 opacity-100 translate-x-0 mb-10 lg:mb-0 shadow-xl rounded-xl lg:shadow-none lg:rounded-none lg:opacity-<?php echo $slide_cases_index == 0 ? "100" : "0" ?> lg:translate-x-<?php echo $slide_cases_index == 0 ? "0" : "full" ?>">
                <img class="block w-full lg:hidden" src="<?php echo esc_url( $case['image'] ); ?>" alt="<?php echo $case['image_alt_text']?>">
                <div class="w-full h-1/4 bg-zinc-900 hidden lg:flex flex-none justify-start items-center p-6">
                    <p class="text-white text-3xl font-semibold capitalize"><?php echo $case['heading']; ?></p>
                </div>
                <button class="content-trigger w-full h-1/4 bg-zinc-900 flex flex-col lg:hidden flex-none justify-start items-center p-6 transition">
                    <p class="w-full text-left text-white text-3xl font-semibold capitalize"><?php echo $case['heading']; ?></p>
                    <div class="content-wrapper w-full transition overflow-hidden max-h-0 opacity-0 text-left">
                        <div class="w-full pt-3">
                            <?php echo $case['description']; ?>
                        </div>
                    </div>
                </button>
                <div class="hidden lg:block relative w-full h-full bg-top bg-cover bg-no-repeat group overflow-hidden" aria-label="<?php echo $case['image_alt_text']?>" style="background-image: url(<?php echo esc_url( $case['image'] ); ?>)">
                    <div class="w-[80%] h-full bg-zinc-900/95 p-12 transition duration-500 ease-in-out ml-auto translate-x-full group-hover:translate-x-0 overflow-y-scroll">
                    <?php echo $case['description']; ?>
                    </div>
                </div>
            </div>
            <?php
                        $slide_cases_index += 1;
                    }
                }
            ?>
        </div>
    </div>
    <div class="hidden relative lg:absolute w-full h-full inset-0 flex-col justify-center items-stretch transition duration-500 opacity-100 translate-x-0 mb-10 lg:mb-0 shadow-xl rounded-xl lg:shadow-none lg:rounded-none lg:opacity-100 lg:translate-x-full"></div>
    <div class="hidden relative lg:absolute w-full h-full inset-0 flex-col justify-center items-stretch transition duration-500 opacity-100 translate-x-full mb-10 lg:mb-0 shadow-xl rounded-xl lg:shadow-none lg:rounded-none lg:opacity-100 lg:translate-x-0"></div>
    <div class="relative w-[91%] max-w-none lg:max-w-[1112px] mx-auto z-20">
        <h2 class="block lg:hidden w-full text-5xl text-zinc-900 font-semibold mb-10 text-left"><?php echo get_field('cases_section')['heading'] ?></h2>
        <div class="w-full flex lg:hidden flex-col md:flex-row flex-wrap justify-start items-stretch transition opacity-100">
            <?php
                $cases = get_field('cases_section')['cases'];
                if ($cases) {
                    foreach($cases as $case) {
            ?>
                <div class="w-full md:w-1/3 md:[&:nth-child(3n+1)]:pl-0 md:[&:nth-child(3n+1)]:pr-2 md:[&:nth-child(3n)]:pl-2 md:[&:nth-child(3n)]:pr-0 md:pl-1 md:pr-1 mb-6 overflow-hidden">
                    <div class="w-full h-full bg-white flex flex-col border border-zinc-200">
                        <?php if($case['button_url']): ?>
                        <a href="<?php echo esc_url($case['button_url']); ?>" class="w-full">
                        <?php endif; ?>
                            <div class="w-full h-0 pt-[60%] flex-none bg-cover bg-center" aria-label="<?php echo $case['image_alt_text'] ?>" style="background-image: url(<?php echo esc_url( $case['image'] ); ?>); "></div>
                            <div class="w-full flex flex-col justify-between items-start grow p-[30px] lg:p-6 xl:p-9">
                                <div class="w-full">
                                    <h3 class="font-bold text-[20px] text-left mb-[10px]"><?php echo esc_html( $case['heading'] ); ?></h3>
                                    <p class="leading-relaxed text-[#9f9f9f] text-[14px] md:text-[17px] mb-12 line-clamp-3"><?php echo strip_tags($case['description']); ?></p>
                                </div>
                                <?php if($case['button_url']): ?>
                                <button class="capitalize text-white flex justify-center items-center text-[14px] md:text-[17px] font-bold border-2 border-[#1b1c1d] bg-[#1b1c1d] px-6 py-3">
                                    <?php echo $case['button_label'] ?>
                                </button>
                                <?php endif; ?>
                            </div>
                        <?php if($case['button_url']): ?>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>   
            <?php
                    }
                }
            ?>
            
        </div>
    </div>
</section>