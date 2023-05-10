<section class="relative w-full flex justify-center bg-zinc-900 py-16 md:py-32">
    <div class="relative w-[91%] max-w-none lg:max-w-[1112px] mx-auto z-20">
        <div class="w-full flex flex-col items-center justify-center">
            <h2 class="w-full capitalize text-[30px] md:text-[60px] text-white font-semibold mb-12 px-3"><?php echo get_field('headless_stories_section')['heading'] ?></h2>

            <!-- Desktop cards -->

            <div class="w-full hidden md:flex flex-col md:flex-row justify-center items-stretch">
                <div class="w-full md:w-1/3 flex flex-col px-3">
                    <div class="w-full h-60 flex-none bg-white flex justify-center items-center bg-cover bg-no-repeat bg-center" style="background-image:url(<?php echo esc_url(get_field('headless_stories_section')['card_one_image']) ?>)">
                    </div>
                    <div class="w-full flex flex-col justify-between items-start grow p-[30px] bg-gray-100">
                        <div class="w-full">
                            <h3 class="font-bold text-[20px] text-[#1b1c1d] text-left mb-9"><?php echo get_field('headless_stories_section')['card_one_heading'] ?></h3>
                        </div>
                        <a href="/" class="text-sky-600 text-[14px]"><?php echo get_field('headless_stories_section')['card_one_description'] ?></a>
                    </div>
                </div>
                <div class="w-full md:w-1/3 flex flex-col px-3">
                    <div class="w-full h-60 flex-none bg-white flex justify-center items-center bg-cover bg-no-repeat bg-center" style="background-image:url(<?php echo esc_url(get_field('headless_stories_section')['card_two_image']) ?>)">
                    </div>
                    <div class="w-full flex flex-col justify-between items-start grow p-[30px] bg-gray-100">
                        <div class="w-full">
                            <h3 class="font-bold text-[20px] text-[#1b1c1d] text-left mb-9"><?php echo get_field('headless_stories_section')['card_two_heading'] ?></h3>
                        </div>
                        <a href="/" class="text-sky-600 text-[14px]"><?php echo get_field('headless_stories_section')['card_two_description'] ?></a>
                    </div>
                </div>
                <div class="w-full md:w-1/3 flex flex-col px-3">
                    <div class="w-full h-60 flex-none bg-white flex justify-center items-center bg-cover bg-no-repeat bg-center" style="background-image:url(<?php echo esc_url(get_field('headless_stories_section')['card_three_image']) ?>)">
                    </div>
                    <div class="w-full flex flex-col justify-between items-start grow p-[30px] bg-gray-100">
                        <div class="w-full">
                            <h3 class="font-bold text-[20px] text-[#1b1c1d] text-left mb-9"><?php echo get_field('headless_stories_section')['card_three_heading'] ?></h3>
                        </div>
                        <a href="/" class="text-sky-600 text-[14px]"><?php echo get_field('headless_stories_section')['card_three_description'] ?></a>
                    </div>
                </div>
            </div>

            <!-- Mobile Carousel -->

            <div class="relative w-full block md:hidden pb-16">
                <div id="slider-headless-stories" class="w-full my-slider">
                    <div class="w-full">
                        <div class="w-full h-full bg-white flex flex-col">
                            <div class="w-full h-60 flex-none bg-white flex justify-center items-center bg-cover bg-no-repeat bg-center" style="background-image:url(<?php echo esc_url(get_field('headless_stories_section')['card_one_image']) ?>)">
                            </div>
                            <div class="w-full flex flex-col justify-between items-start grow p-[30px] bg-gray-100">
                                <div class="w-full">
                                    <h3 class="font-bold text-[20px] text-left mb-9 text-[#1b1c1d]"><?php echo get_field('headless_stories_section')['card_one_heading'] ?></h3>
                                </div>
                                <a href="/" class="text-sky-600"><?php echo get_field('headless_stories_section')['card_one_description'] ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="w-full h-full bg-white flex flex-col">
                            <div class="w-full h-60 flex-none bg-white flex justify-center items-center bg-cover bg-no-repeat bg-center" style="background-image:url(<?php echo esc_url(get_field('headless_stories_section')['card_two_image']) ?>)">
                            </div>
                            <div class="w-full flex flex-col justify-between items-start grow p-[30px] bg-gray-100">
                                <div class="w-full">
                                    <h3 class="font-bold text-[20px] text-left mb-9 text-[#1b1c1d]"><?php echo get_field('headless_stories_section')['card_two_heading'] ?></h3>
                                </div>
                                <a href="/" class="text-sky-600"><?php echo get_field('headless_stories_section')['card_two_description'] ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="w-full h-full bg-white flex flex-col">
                            <div class="w-full h-60 flex-none bg-white flex justify-center items-center bg-cover bg-no-repeat bg-center" style="background-image:url(<?php echo esc_url(get_field('headless_stories_section')['card_three_image']) ?>)">
                            </div>
                            <div class="w-full flex flex-col justify-between items-start grow p-[30px] bg-gray-100">
                                <div class="w-full">
                                    <h3 class="font-bold text-[20px] text-left mb-9 text-[#1b1c1d]"><?php echo get_field('headless_stories_section')['card_three_heading'] ?></h3>
                                </div>
                                <a href="/" class="text-sky-600"><?php echo get_field('headless_stories_section')['card_three_description'] ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>