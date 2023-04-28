<section class="relative w-full flex justify-center bg-white">
    <div class="relative container z-20">
        <div class="w-full pt-40 pb-40 lg:pb-60 flex flex-col items-center justify-center">
            <h2 class="capitalize text-5xl text-gray-900 font-semibold mb-10"><?php echo get_field('why_leadstec')['heading']; ?></h2>
            <p class="text-center max-w-3xl"><?php echo get_field('why_leadstec')['description']; ?></p>
            <div class="w-full flex flex-col sm:flex-row justify-center items-stretch mt-20">
                <div class="w-full px-3 flex flex-col items-center relative box-bg-shadow__spring-sun mb-6">
                    <div class="flex flex-row w-full h-full bg-white p-6 sm:p-10 items-stretch">
                        <div class="flex-auto mr-3 mb-3">
                            <h3 class="max-w-[50%] sm:max-w-xs font-semibold text-2xl"><?php echo get_field('why_leadstec')['card_one_heading']; ?></h3>
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
                <div class="w-full px-3 flex flex-col items-center relative box-bg-shadow__spring-sun mb-6">
                    <div class="flex flex-col lg:flex-row w-full h-full bg-white p-6 sm:p-10 items-stretch">
                        <div class="flex-auto mr-3 mb-3">
                            <h3 class="max-w-[50%] sm:max-w-xs font-semibold text-2xl"><?php echo get_field('why_leadstec')['card_two_heading']; ?></h3>
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
                <div class="w-full px-3 flex flex-col items-center relative box-bg-shadow__spring-sun mb-6">
                    <div class="flex flex-col lg:flex-row w-full h-full bg-white p-6 sm:p-10 items-stretch">
                        <div class="flex-auto mr-3 mb-3">
                            <h3 class="max-w-[50%] sm:max-w-xs font-semibold text-2xl"><?php echo get_field('why_leadstec')['card_three_heading']; ?></h3>
                        </div>
                        <div class="flex flex-none items-end justify-end">
                            <?php $iconThree = get_field('why_leadstec')['card_three_icon'];  if($iconThree) { ?>
                                <div class="w-28 h-28 right-10 bottom-10 rounded-full bg-cover bg-center bg-no-repeat" style="background-image: url(<?php echo esc_url(get_field('why_leadstec')['card_three_icon']); ?>)"></div>
                            <?php } else { ?>
                                <div class="w-28 h-28 right-10 bottom-10 bg-blue-400 rounded-full"></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
