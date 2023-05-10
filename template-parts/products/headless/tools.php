<section class="relative w-full flex justify-center bg-white py-16 lg:py-32">
    <div class="relative w-[91%] max-w-none lg:max-w-[1112px] mx-auto z-20">
        <div class="w-full flex flex-col items-center justify-center">
            <h2 class="w-full capitalize text-[30px] md:text-[60px] text-[#1b1c1d] font-semibold mb-12 px-3"><?php echo get_field('authoring_tools_section')['heading'] ?></h2>

            <!-- Desktop cards -->

            <div class="w-full hidden lg:flex flex-col lg:flex-row justify-center items-stretch space-y-9 space-x-0 lg:space-y-0 lg:space-x-6 xl:space-x-9">
                <?php
                $tools = get_field('authoring_tools_section')['tools'];
                if($tools) {
                    foreach($tools as $tool) {
                ?>
                <div class="w-full lg:w-1/3 bg-white flex flex-col px-3">
                    <div class="w-full flex justify-center items-center">
                        <img class="w-full max-w-xs mx-auto" src="<?php echo esc_url( $tool['image'] ); ?>" alt="">
                    </div>
                    <div class="w-full flex flex-col justify-start items-center grow p-3 lg:p-6 xl:p-9">
                        <h3 class="font-bold text-xl text-center mb-3"><?php echo $tool['heading'] ?></h3>
                        <p class="leading-relaxed text-center">
                            <?php echo $tool['description'] ?>
                        </p>
                    </div>
                </div>
                <?php
                    }
                }
                ?>
            </div>



            <div class="w-full block lg:hidden">
                <div id="slider-headless-tools" class="w-full my-slider">
                    <?php
                    $tools = get_field('authoring_tools_section')['tools'];
                    if($tools) {
                        foreach($tools as $tool) {
                    ?>
                    <div class="w-full bg-white flex flex-col">
                        <div class="w-full flex justify-center items-center">
                            <img class="w-full max-w-xs mx-auto" src="<?php echo esc_url( $tool['image'] ); ?>" alt="">
                        </div>
                        <div class="w-full flex flex-col justify-center items-center grow p-3 lg:p-6 xl:p-9">
                            <h3 class="font-bold text-xl text-center mb-3"><?php echo $tool['heading'] ?></h3>
                            <p class="leading-relaxed text-center">
                            <?php echo $tool['description'] ?>
                            </p>
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