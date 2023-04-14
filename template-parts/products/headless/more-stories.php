<section class="relative w-full flex justify-center bg-zinc-900 py-16 lg:py-32">
    <div class="relative container z-20">
        <div class="w-full flex flex-col items-center justify-center">
            <h2 class="w-full capitalize text-5xl text-white font-semibold mb-12"><?php echo get_field('headless_stories_section')['heading'] ?></h2>

            <!-- Desktop cards -->

            <div class="w-full hidden lg:flex flex-col lg:flex-row justify-center items-stretch space-y-9 space-x-0 lg:space-y-0 lg:space-x-6 xl:space-x-9">
                <div class="w-full lg:w-1/3 bg-white flex flex-col">
                    <div class="w-full h-60 flex-none bg-white flex justify-center items-center bg-cover bg-no-repeat bg-center" style="background-image:url(<?php echo esc_url(get_field('headless_stories_section')['card_one_image']) ?>)">
                    </div>
                    <div class="w-full flex flex-col justify-between items-start grow p-3 lg:p-6 xl:p-9 bg-gray-100">
                        <div class="w-full">
                            <h3 class="font-bold text-xl text-left mb-9"><?php echo get_field('headless_stories_section')['card_one_heading'] ?></h3>
                        </div>
                        <a href="/" class="text-sky-600"><?php echo get_field('headless_stories_section')['card_one_description'] ?></a>
                    </div>
                </div>
                <div class="w-full lg:w-1/3 bg-white flex flex-col">
                    <div class="w-full h-60 flex-none bg-white flex justify-center items-center bg-cover bg-no-repeat bg-center" style="background-image:url(<?php echo esc_url(get_field('headless_stories_section')['card_two_image']) ?>)">
                    </div>
                    <div class="w-full flex flex-col justify-between items-start grow p-3 lg:p-6 xl:p-9 bg-gray-100">
                        <div class="w-full">
                            <h3 class="font-bold text-xl text-left mb-9"><?php echo get_field('headless_stories_section')['card_two_heading'] ?></h3>
                        </div>
                        <a href="/" class="text-sky-600"><?php echo get_field('headless_stories_section')['card_one_description'] ?></a>
                    </div>
                </div>
                <div class="w-full lg:w-1/3 bg-white flex flex-col">
                    <div class="w-full h-60 flex-none bg-white flex justify-center items-center bg-cover bg-no-repeat bg-center" style="background-image:url(<?php echo esc_url(get_field('headless_stories_section')['card_three_image']) ?>)">
                    </div>
                    <div class="w-full flex flex-col justify-between items-start grow p-3 lg:p-6 xl:p-9 bg-gray-100">
                        <div class="w-full">
                            <h3 class="font-bold text-xl text-left mb-9"><?php echo get_field('headless_stories_section')['card_three_heading'] ?></h3>
                        </div>
                        <a href="/" class="text-sky-600"><?php echo get_field('headless_stories_section')['card_one_description'] ?></a>
                    </div>
                </div>
            </div>

            <!-- Mobile Carousel -->

            <div class="relative w-full block lg:hidden pb-16">
                <div id="slider-headless-stories" class="w-full my-slider">
                    <div class="w-full">
                        <div class="w-full h-full bg-white flex flex-col">
                            <div class="w-full h-60 flex-none bg-white flex justify-center items-center bg-cover bg-no-repeat bg-center" style="background-image:url(<?php echo esc_url(get_field('headless_stories_section')['card_two_image']) ?>)">
                                <p class="text-orange-600 text-3xl font-bold">Sainsbury's</p>
                            </div>
                            <div class="w-full flex flex-col justify-between items-start grow p-3 lg:p-6 xl:p-9 bg-gray-100">
                                <div class="w-full">
                                    <h3 class="font-bold text-xl text-left mb-9"><?php echo get_field('headless_stories_section')['card_one_heading'] ?></h3>
                                </div>
                                <a href="/" class="text-sky-600"><?php echo get_field('headless_stories_section')['card_one_description'] ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="w-full h-full bg-white flex flex-col">
                            <div class="w-full h-60 flex-none bg-white flex justify-center items-center bg-cover bg-no-repeat bg-center" style="background-image:url(<?php echo esc_url(get_field('headless_stories_section')['card_two_image']) ?>)">
                            </div>
                            <div class="w-full flex flex-col justify-between items-start grow p-3 lg:p-6 xl:p-9 bg-gray-100">
                                <div class="w-full">
                                    <h3 class="font-bold text-xl text-left mb-9"><?php echo get_field('headless_stories_section')['card_two_heading'] ?></h3>
                                </div>
                                <a href="/" class="text-sky-600"><?php echo get_field('headless_stories_section')['card_two_description'] ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="w-full h-full bg-white flex flex-col">
                            <div class="w-full h-60 flex-none bg-white flex justify-center items-center bg-cover bg-no-repeat bg-center" style="background-image:url(<?php echo esc_url(get_field('headless_stories_section')['card_three_image']) ?>)">
                            </div>
                            <div class="w-full flex flex-col justify-between items-start grow p-3 lg:p-6 xl:p-9 bg-gray-100">
                                <div class="w-full">
                                    <h3 class="font-bold text-xl text-left mb-9"><?php echo get_field('headless_stories_section')['card_three_heading'] ?></h3>
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