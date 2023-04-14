<section class="relative w-full flex justify-center bg-white pt-10 pb-16 lg:pb-32">
    <div class="relative container z-20">
        <div class="w-full flex flex-col items-center justify-center @container">
            <h2 class="capitalize text-5xl text-gray-900 font-semibold my-10"><?php echo get_field('why_heading') ?></h2>
            <div class="w-full">
                <!-- @TODO: Array start -->
                <?php
                    $reasons = get_field('reasons');
                    if ($reasons) {
                        foreach($reasons as $reason) {
                ?>
                <div class="w-full flex flex-col lg:odd:flex-row lg:even:flex-row-reverse justify-center items-center group mb-14">
                    <div class="w-full lg:w-1/2 lg:group-odd:pr-6 lg:group-even:pl-6">
                        <div class="w-full h-0 pb-[65%] bg-cover bg-center bg-no-repeat" style="background-image: url(<?php echo esc_url( $reason['image'] ); ?>)"></div>
                    </div>
                    <div class="w-full lg:w-1/2 lg:group-odd:pl-6 lg:group-even:pr-6 mt-10 lg:mt-0">
                        <h3 class="relative capitalize text-gray-900 text-3xl font-semibold mb-6">
                            <?php echo $reason['heading']; ?>
                        </h3>
                        <p class="text-zinc-900/70 capitalize"><?php echo $reason['description']; ?></p>
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
