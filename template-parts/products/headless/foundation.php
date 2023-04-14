<section class="relative w-full flex justify-center bg-gray-100 pt-16 pb-10 lg:pt-32 lg:pb-32">
    <div class="relative container z-20">
        <div class="w-full flex flex-col items-center justify-center">
            <h2 class="w-full capitalize text-5xl text-gray-900 font-semibold mb-10"><?php echo get_field('foundation_section')['heading'] ?></h2>
            <div class="w-full hidden lg:flex flex-col lg:flex-row justify-center items-stretch space-y-9 space-x-0 lg:space-y-0 lg:space-x-9">
                <div class="w-full lg:w-1/3 bg-white flex flex-col p-9">
                    <h3 class="font-bold text-xl text-left mb-3 capitalize"><?php echo get_field('foundation_section')['card_one_heading'] ?></h3>
                    <span class="w-full h-2 bg-orange-500 mb-9"></span>
                    <p class="leading-relaxed text-zinc-900/70"><?php echo get_field('foundation_section')['card_one_description'] ?></p>
                </div>
                <div class="w-full lg:w-1/3 bg-white flex flex-col p-9">
                    <h3 class="font-bold text-xl text-left mb-3 capitalize"><?php echo get_field('foundation_section')['card_two_heading'] ?></h3>
                    <span class="w-full h-2 bg-orange-500 mb-9"></span>
                    <p class="leading-relaxed text-zinc-900/70"><?php echo get_field('foundation_section')['card_two_description'] ?></p>
                </div>
                <div class="w-full lg:w-1/3 bg-white flex flex-col p-9">
                    <h3 class="font-bold text-xl text-left mb-3 capitalize"><?php echo get_field('foundation_section')['card_three_heading'] ?></h3>
                    <span class="w-full h-2 bg-orange-500 mb-9"></span>
                    <p class="leading-relaxed text-zinc-900/70"><?php echo get_field('foundation_section')['card_three_description'] ?></p>
                </div>
            </div>

            <!-- Mobile Carousel -->

            <div class="relative w-full block lg:hidden pb-16">
                <div id="slider-headless-foundation" class="w-full my-slider">
                    <div class="w-full">
                        <div class="w-full bg-white flex flex-col p-9">
                            <h3 class="font-bold text-xl text-left mb-3 capitalize"><?php echo get_field('foundation_section')['card_one_heading'] ?></h3>
                            <span class="w-full h-2 bg-orange-500 mb-9"></span>
                            <p class="leading-relaxed text-zinc-900/70"><?php echo get_field('foundation_section')['card_one_description'] ?></p>
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="w-full bg-white flex flex-col p-9">
                            <h3 class="font-bold text-xl text-left mb-3 capitalize"><?php echo get_field('foundation_section')['card_two_heading'] ?></h3>
                            <span class="w-full h-2 bg-orange-500 mb-9"></span>
                            <p class="leading-relaxed text-zinc-900/70"><?php echo get_field('foundation_section')['card_two_description'] ?></p>
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="w-full bg-white flex flex-col p-9">
                            <h3 class="font-bold text-xl text-left mb-3 capitalize"><?php echo get_field('foundation_section')['card_three_heading'] ?></h3>
                            <span class="w-full h-2 bg-orange-500 mb-9"></span>
                            <p class="leading-relaxed text-zinc-900/70"><?php echo get_field('foundation_section')['card_three_description'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>