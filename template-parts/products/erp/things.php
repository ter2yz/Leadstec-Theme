<section class="relative w-full flex justify-center bg-white pt-10 pb-32">
    <div class="relative w-[91%] max-w-none lg:max-w-[1112px] mx-auto z-20">
        <div class="w-full flex flex-col items-center justify-center">
            <h2 class="capitalize text-[30px] md:text-[60px] text-center text-[#1b1c1d] font-bold my-10"><?php echo get_field('services_section')['heading'] ?></h2>
            <div class="w-full flex flex-row justify-start items-stretch flex-wrap">
                <?php
                    $services = get_field('services_section')['services'];
                    if ($services) {
                        foreach($services as $service) {
                ?>
                    <div class="w-full md:w-1/3 p-2 mb-3">
                        <?php if($service['url']): ?>
                        <a href="<?php echo esc_url($service['url']); ?>" class="w-full">
                        <?php endif; ?>
                        <div class="w-full h-full bg-white flex flex-col justify-between items-start p-5 rounded-lg shadow-none transition-shadow hover:shadow-lg">
                            <div class="w-full flex flex-col items-start">
                                <img class="w-16 h-16 mb-[18px]" src="<?php echo esc_url( $service['icon'] ); ?>" alt="<?php echo $service['icon_image_alt_text'] ?>">
                                <h3 class="font-bold text-[20px] text-[#1b1c1d] text-left mb-[15px] capitalize"><?php echo $service['heading']; ?></h3>
                                <p class="leading-relaxed text-[14px] md:text-[17px] mb-[10px] text-[#9f9f9f]"><?php echo $service['description']; ?></p>
                            </div>
                            <?php if($service['url'] && $service['button_label']): ?>
                            <button class="text-sky-600 text-[14px] md:text-[17px]"><?php echo $service['button_label'] ?></button>
                            <?php endif; ?>
                        </div>
                        <?php if($service['url']): ?>
                        </a>
                        <?php endif; ?>
                    </div>
                <?php
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</section>
