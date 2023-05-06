<section id="why-leadstec-section" class="relative w-full flex justify-center bg-white">
    <div class="relative container z-20">
        <div class="w-full pt-12 md:pt-20 pb-12 lg:pb-40 flex flex-col items-center justify-center overflow-hidden">
            <h2 class="px-3 capitalize text-[30px] md:text-[60px] text-[#1b1c1d] font-bold mb-10"><?php echo get_field('why_leadstec')['heading']; ?></h2>
            <p class="text-center max-w-3xl text-[15px] text-[#9f9f9f]"><?php echo get_field('why_leadstec')['description']; ?></p>
            <div class="w-full flex flex-col md:flex-row justify-center items-stretch mt-20">
                <div class="w-full md:w-1/3 px-3 flex flex-col items-center relative box-bg-shadow__spring-sun mb-6">
                    <div class="flex flex-row md:flex-col xl:flex-row w-full h-full bg-white p-6 md:p-10 items-stretch">
                        <div class="flex-auto mr-3 mb-3">
                            <h3 class="max-w-[90%] md:max-w-xs font-bold text-[#1b1c1d] text-[20px] md:text-[26px] "><?php echo get_field('why_leadstec')['card_one_heading']; ?></h3>
                        </div>
                        <div class="flex flex-none items-end justify-end">
                            <?php $iconOne = get_field('why_leadstec')['card_one_icon'];  if($iconOne) { ?>
                                <div class="w-28 h-28 right-10 bottom-10 rounded-full bg-cover bg-center bg-no-repeat" style="background-image: url(<?php echo esc_url(get_field('why_leadstec')['card_one_icon']); ?>)"></div>
                            <?php } else { ?>
                                <div class="w-28 h-28 right-10 bottom-10 bg-green-400 rounded-full"></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-3 flex flex-col items-center relative box-bg-shadow__spring-sun mb-6">
                    <div class="flex flex-row md:flex-col xl:flex-row w-full h-full bg-white p-6 md:p-10 items-stretch">
                        <div class="flex-auto mr-3 mb-3">
                            <h3 class="max-w-[90%] md:max-w-xs font-bold text-[#1b1c1d] text-[20px] md:text-[26px] "><?php echo get_field('why_leadstec')['card_two_heading']; ?></h3>
                        </div>
                        <div class="flex flex-none items-end justify-end">
                            <?php $iconTwo = get_field('why_leadstec')['card_two_icon'];  if($iconTwo) { ?>
                                <div class="w-28 h-28 right-10 bottom-10 rounded-full bg-cover bg-center bg-no-repeat" style="background-image: url(<?php echo esc_url(get_field('why_leadstec')['card_two_icon']); ?>)"></div>
                            <?php } else { ?>
                                <div class="w-28 h-28 right-10 bottom-10 bg-blue-400 rounded-full"></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-3 flex flex-col items-center relative box-bg-shadow__spring-sun mb-6">
                    <div class="flex flex-row md:flex-col xl:flex-row w-full h-full bg-white p-6 md:p-10 items-stretch">
                        <div class="flex-auto mr-3 mb-3">
                            <h3 class="max-w-[90%] md:max-w-xs font-bold text-[#1b1c1d] text-[20px] md:text-[26px] "><?php echo get_field('why_leadstec')['card_three_heading']; ?></h3>
                        </div>
                        <div class="flex flex-none items-end justify-end">
                            <?php $iconThree = get_field('why_leadstec')['card_three_icon'];  if($iconThree) { ?>
                                <div class="w-28 h-28 right-10 bottom-10 rounded-full bg-cover bg-center bg-no-repeat" style="background-image: url(<?php echo esc_url(get_field('why_leadstec')['card_three_icon']); ?>)"></div>
                            <?php } else { ?>
                                <div class="w-28 h-28 right-10 bottom-10 bg-orange-400 rounded-full"></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
