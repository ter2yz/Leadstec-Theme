<section id="web-cases" class="relative w-full lg:bg-zinc-900 z-20 pb-40">
    <div class="w-full lg:flex lg:h-screen lg:min-h-[600px] px-8 lg:px-0">
        <h2 class="block lg:hidden w-full capitalize text-5xl text-zinc-900 font-semibold mb-10 text-left"><?php echo get_field('cases_section')['heading'] ?></h2>
        <div class="hidden lg:flex w-4/12 max-w-xs px-6 h-full bg-gradient-to-b from-[#F4FF77] to-[#9CFF6C] flex-col items-center justify-center text-zinc-900">
            <h2 class="text-6xl lg:text-7xl capitalize font-semibold leading-tight mb-16 text-center"><?php echo get_field('cases_section')['heading'] ?></h2>
            <div id="slider-web-cases" class="w-full text-white flex flex-col items-center justify-center">
                <?php
                    $slide_cases_index = 0;
                    $cases = get_field('cases_section')['cases'];
                    if ($cases) {
                        foreach($cases as $case) {
                ?>
                <div class="text-7xl font-bold px-3 flex items-center justify-center">
                    <button data-index="<?php echo $slide_cases_index; ?>" data-caseId="" class="h-40 transition-transform scale-125 opacity-100 mr-6" style="text-shadow: 0 0 1px black, 0 0 1px black, 0 0 1px black, 0 0 1px black; "><?php echo $slide_cases_index + 1; ?></button>
                    <span class="w-6 h-[2px] bg-zinc-900"></span>
                </div>
                <?php
                            $slide_cases_index += 1;
                        }
                    }
                ?>
            </div>
        </div>
        <div id="showcase-web-cases" class="relative grow w-full lg:w-auto h-full">
            <?php
                $slide_cases_index = 0;
                $cases = get_field('cases_section')['cases'];
                if ($cases) {
                    foreach($cases as $case) {
            ?>
            <div data-index="<?php echo $slide_cases_index; ?>" class="showcase-container relative lg:absolute w-full h-full inset-0 flex flex-col justify-center items-stretch transition duration-500 opacity-100 translate-x-0 mb-10 lg:mb-0 shadow-xl rounded-xl lg:shadow-none lg:rounded-none lg:opacity-<?php echo $slide_cases_index == 0 ? "100" : "0" ?> lg:translate-x-<?php echo $slide_cases_index == 0 ? "0" : "full" ?>">
                <img class="block w-full lg:hidden" src="<?php echo esc_url( $case['image'] ); ?>" alt="">
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
                <div class="hidden lg:block relative w-full h-full bg-top bg-cover bg-no-repeat group" style="background-image: url(<?php echo esc_url( $case['image'] ); ?>)">
                    <div class="w-full h-full bg-zinc-900/95 p-12 transition duration-500 ease-in-out translate-x-full group-hover:translate-x-0">
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
</section>