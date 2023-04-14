<section class="relative w-full flex justify-center bg-white pt-10 pb-32">
    <div class="relative container z-20">
        <div class="w-full flex flex-col items-center justify-center">
            <h2 class="capitalize text-5xl text-gray-900 font-semibold my-10"><?php echo get_field('services_section')['heading'] ?></h2>
            <div class="w-full flex flex-row justify-start items-stretch flex-wrap">
                <?php
                    $services = get_field('services_section')['services'];
                    if ($services) {
                        foreach($services as $service) {
                ?>
                    <div class="w-full sm:w-1/2 lg:w-1/3 p-3 mb-3">
                        <div class="w-full h-full bg-white flex flex-col justify-between lg:p-9 rounded-lg shadow-none transition-shadow hover:shadow-lg">
                            <div class="w-full flex flex-col items-start">
                                <img class="w-16 h-16 mb-3" src="<?php echo esc_url( $service['icon'] ); ?>" alt="">
                                <h3 class="font-bold text-xl text-left mb-6 capitalize"><?php echo $service['heading']; ?></h3>
                                <p class="leading-relaxed mb-12 text-zinc-900/70"><?php echo $service['description']; ?></p>
                            </div>
                            <a href="<?php echo esc_url($service['url']); ?>" class="text-sky-600">Learn More</a>
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
