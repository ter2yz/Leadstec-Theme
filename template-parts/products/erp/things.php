<section class="relative w-full flex justify-center bg-white pt-10 pb-32">
    <div class="relative w-[91%] max-w-none lg:max-w-[1112px] mx-auto z-20">
        <div class="w-full flex flex-col items-center justify-center">
            <h2 class="capitalize text-[30px] md:text-[60px] text-[#1b1c1d] font-bold my-10"><?php echo get_field('services_section')['heading'] ?></h2>
            <div class="w-full flex flex-row justify-start items-stretch flex-wrap">
                <?php
                    $services = get_field('services_section')['services'];
                    if ($services) {
                        foreach($services as $service) {
                ?>
                    <div class="w-full sm:w-1/2 lg:w-1/3 p-3 mb-3">
                        <div class="w-full h-full bg-white flex flex-col justify-between lg:p-9 rounded-lg shadow-none transition-shadow hover:shadow-lg">
                            <div class="w-full flex flex-col items-start">
                                <img class="w-16 h-16 mb-[18px]" src="<?php echo esc_url( $service['icon'] ); ?>" alt="<?php echo $service['icon_image_alt_text'] ?>">
                                <h3 class="font-bold text-[20px] text-[#1b1c1d] text-left mb-[15px] capitalize"><?php echo $service['heading']; ?></h3>
                                <p class="leading-relaxed text-[14px] mb-[10px] text-[#9f9f9f]"><?php echo $service['description']; ?></p>
                            </div>
                            <?php if($service['url'] && $service['button_label']): ?>
                            <a href="<?php echo esc_url($service['url']); ?>" class="text-sky-600 text-[14px]"><?php echo $service['button_label'] ?></a>
                            <?php endif; ?>
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
