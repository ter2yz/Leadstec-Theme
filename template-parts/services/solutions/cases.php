<section class="w-full py-16 lg:py-32">
    <div class="relative container mx-auto">
        <?php
            $showcases = get_field('showcases');
            if ($showcases) {
                foreach($showcases as $showcase) {
        ?>
        <div class="w-full flex flex-col lg:flex-row justify-center items-stretch space-x-0 lg:space-x-12 mb-12">
            <div class="w-full mb-6 lg:mb-0">
                <div class="w-full h-0 pb-[70%] bg-cover bg-center bg-no-repeat" aria-label="<?php echo $showcase['image_alt_text']?>" style="background-image: url(<?php echo esc_url( $showcase['image'] ); ?>)"></div>
            </div>
            <div class="w-full flex flex-col justify-start items-start py-3">
                <div class="w-full">
                    <h3 class="relative text-[#1b1c1d] text-[20px] md:text-[40px] font-bold mb-5">
                        <?php echo $showcase['heading']; ?>
                    </h3>
                    <p class="text-[#9f9f9f] text-[15px] md:text-[20px]">
                        <?php echo $showcase['description']; ?>
                    </p>
                </div>
                <?php if($showcase['button_url'] && $showcase['button_label']):?>
                <a href="<?php echo $showcase['button_url']; ?>" class="text-[14px] font-bold mt-10 flex justify-center items-center border-2 border-zinc-900 bg-zinc-900 px-6 py-2 text-white capitalize">
                    <?php echo $showcase['button_label']; ?>
                </a>
                <?php endif; ?>
            </div>
        </div>
        <?php
                }
            }
        ?>
    </div>
</section>