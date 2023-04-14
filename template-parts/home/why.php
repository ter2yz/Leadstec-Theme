<section class="relative w-full flex justify-center bg-white">
    <div class="relative container z-20">
        <div class="w-full pt-40 pb-40 lg:pb-60 flex flex-col items-center justify-center">
            <h2 class="capitalize text-5xl text-gray-900 font-semibold mb-10"><?php echo get_field('why_leadstec')['heading']; ?></h2>
            <p class="text-center max-w-3xl"><?php echo get_field('why_leadstec')['description']; ?></p>
            <div class="w-full flex flex-col lg:flex-row justify-center items-center mt-20">
                <div class="w-full px-3 flex flex-col items-center relative box-bg-shadow__spring-sun mb-6">
                    <div class="flex w-full h-64 bg-white p-10">
                        <h3 class="max-w-xs font-semibold text-2xl"><?php echo get_field('why_leadstec')['card_one_heading']; ?></h3>
                        <?php $iconOne = get_field('why_leadstec')['card_one_icon'];  if($iconOne) { ?>
                            <div class="absolute w-28 h-28 right-10 bottom-10 rounded-full bg-cover bg-center bg-no-repeat" style="background-image: url(<?php echo esc_url(get_field('why_leadstec')['card_one_icon']); ?>)"></div>
                        <?php } else { ?>
                            <div class="absolute w-28 h-28 right-10 bottom-10 bg-green-400 rounded-full"></div>
                        <?php } ?>
                    </div>
                </div>
                <div class="w-full px-3 flex flex-col items-center relative box-bg-shadow__sky mb-6">
                    <div class="flex w-full h-64 bg-white p-10">
                        <h3 class="max-w-xs font-semibold text-2xl"><?php echo get_field('why_leadstec')['card_two_heading']; ?></h3>
                        <?php $iconTwo = get_field('why_leadstec')['card_two_icon'];  if($iconTwo) { ?>
                            <div class="absolute w-28 h-28 right-10 bottom-10 rounded-full bg-cover bg-center bg-no-repeat" style="background-image: url(<?php echo esc_url(get_field('why_leadstec')['card_two_icon']); ?>)"></div>
                        <?php } else { ?>
                            <div class="absolute w-28 h-28 right-10 bottom-10 bg-blue-400 rounded-full"></div>
                        <?php } ?>
                    </div>
                </div>
                <div class="w-full px-3 flex flex-col items-center relative box-bg-shadow__fuchsia mb-6">
                    <div class="flex w-full h-64 bg-white p-10">
                        <h3 class="max-w-xs font-semibold text-2xl"><?php echo get_field('why_leadstec')['card_three_heading']; ?></h3>
                        <?php $iconThree = get_field('why_leadstec')['card_three_icon'];  if($iconThree) { ?>
                            <div class="absolute w-28 h-28 right-10 bottom-10 rounded-full bg-cover bg-center bg-no-repeat" style="background-image: url(<?php echo esc_url(get_field('why_leadstec')['card_three_icon']); ?>)"></div>
                        <?php } else { ?>
                            <div class="absolute w-28 h-28 right-10 bottom-10 bg-fuchsia-600 rounded-full"></div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
