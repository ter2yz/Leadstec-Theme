<section class="relative w-full flex justify-center bg-white pt-10 pb-16 lg:pb-32">
    <div class="relative w-[91%] max-w-none lg:max-w-[1112px] mx-auto z-20">
        <div class="w-full flex flex-col items-center justify-center">
            <h2 class="capitalize text-[30px] md:text-[60px] text-[#1b1c1d] font-bold my-10"><?php echo get_field('why_heading') ?></h2>
            <div class="w-full">
                <!-- @TODO: Array start -->
                <?php
                    $reasons = get_field('reasons');
                    if ($reasons) {
                        foreach($reasons as $reason) {
                ?>
                <div class="w-full flex flex-col lg:odd:flex-row lg:even:flex-row-reverse justify-center items-center group mb-14">
                    <div class="w-full lg:w-1/2 lg:group-odd:pr-6 lg:group-even:pl-6">
                        <div class="w-full h-0 pb-[65%] bg-cover bg-center bg-no-repeat" aria-label="<?php echo $reason['image_alt_text'] ?>" style="background-image: url(<?php echo esc_url( $reason['image'] ); ?>)"></div>
                    </div>
                    <div class="w-full lg:w-1/2 lg:group-odd:pl-6 lg:group-even:pr-6 mt-10 lg:mt-0">
                        <h3 class="relative capitalize text-gray-900 text-[20px] md:text-[40px] font-bold mb-6">
                            <?php echo $reason['heading']; ?>
                        </h3>
                        <p class="text-[#9f9f9f] text-[15px] md:text-[20px] capitalize"><?php echo $reason['description']; ?></p>
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
