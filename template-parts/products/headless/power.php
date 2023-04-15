<section class="relative w-full flex justify-center bg-white py-16 lg:py-32">
    <div class="relative container z-20">
        <div class="w-full flex flex-col items-center justify-center">
            <h2 class="w-full capitalize text-5xl text-zinc-900 font-semibold mb-12 text-center"><?php echo get_field('enterprise_power_section')['heading'] ?></h2>
            <div class="w-full">
                <?php
                $cards = get_field('enterprise_power_section')['cards'];
                if ($cards) {
                    foreach($cards as $card) {
                ?>
                <div class="w-full flex flex-col lg:odd:flex-row lg:even:flex-row-reverse justify-center items-center mb-12 group">
                    <div class="w-full h-0 pb-[30%] lg:group-odd:pr-6 lg:group-even:pl-6 bg-cover bg-no-repeat bg-center" style="background-image: url(<?php echo esc_url( $card['image'] ); ?>);">
                    </div>
                    <div class="w-full py-9 lg:py-0 lg:group-odd:pl-6 lg:group-even:pr-6">
                        <h3 class="relative capitalize text-gray-900 text-3xl font-semibold mb-6">
                            <?php echo $card['heading'] ?>
                        </h3>
                        <p class="text-gray-900 capitalize"><?php echo $card['description'] ?></p>
                    </div>
                </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>