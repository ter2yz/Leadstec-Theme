<section id="our-services-section" class="w-full flex justify-center mt-10 md:mt-20 overflow-hidden pb-20">
    <div class="w-[91%] max-w-none lg:max-w-[1112px] mx-auto">
        <div class="w-full">
            <h2 class="capitalize text-[30px] md:text-[60px] text-[#1b1c1d] font-bold"><?php echo get_field('our_services')['heading']; ?></h2>
        </div>
        <div class="w-full h-full py-5 md:py-10 flex justify-center items-start md:items-center">
            <div class="relative w-full flex justify-start items-stretch flex-wrap">
                <?php
                    $services = get_field('our_services')['services'];
                    if( $services ) {
                        foreach( $services as $service ) {
                ?>
                    <div class="w-full lg:w-1/3 [&:nth-child(3n+1)]:pl-0 [&:nth-child(3n)]:pr-0 pl-3 pr-3 mb-6 lg:mb-9 group">
                        <div class="bg-white flex flex-col items-center justify-center p-6 border border-gray-200 h-full">
                            <h3 class="w-full font-bold text-[18px] md:text-[20px] text-left mb-6 sm:mb-9 text-[#1b1c1d]"><?php echo $service['heading']; ?></h3>
                            <div class="w-full flex flex-col sm:flex-row justify-between items-start sm:items-end">
                                <div class="w-full sm:w-40 h-40 mb-6 sm:mb-0 overflow-hidden flex justify-center items-center">
                                    <img class="min-w-full min-h-full object-cover scale-100 transition group-hover:scale-110" src="<?php echo esc_url($service['image']['url']) ?>" alt="<?php echo $service['image']['alt'] ?>">
                                </div>
                                <a class="px-[22px] py-3 bg-zinc-900 text-white text-center sm:ml-3 transition hover:bg-orange-500" href="<?php echo esc_url($service['url']) ?>">
                                    <p class="text-[16px] font-bold"><?php echo $service['button_label'] ?></p>
                                </a>
                            </div>
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

