<section class="w-full flex justify-center mt-20 overflow-hidden pb-20">
    <div class="container">
        <div class="w-full">
            <h2 class="capitalize text-5xl text-zinc-900 font-semibold"><?php echo get_field('our_services')['heading']; ?></h2>
        </div>
        <div class="w-full h-full py-10 flex justify-center items-center">
            <div class="relative w-full flex justify-start items-stretch flex-wrap">
                <?php
                    $services = get_field('our_services')['services'];
                    if( $services ) {
                        foreach( $services as $service ) {
                ?>
                    <div class="w-full lg:w-1/3 px-3 mb-6 lg:mb-9 group">
                        <div class="bg-white flex flex-col items-center justify-center p-6 border border-gray-200 h-full">
                            <h3 class="w-full font-bold text-xl text-left mb-9"><?php echo $service['heading']; ?></h3>
                            <div class="w-full flex justify-between items-end">
                                <div class="w-40 h-40 overflow-hidden flex justify-center items-center">
                                    <img class="min-w-full min-h-full object-cover scale-100 transition group-hover:scale-110" src="<?php echo esc_url($service['image']) ?>" alt="">
                                </div>
                                <a class="px-9 py-3 bg-zinc-900 text-white ml-3 transition hover:bg-orange-500" href="<?php echo esc_url($service['url']) ?>">
                                    <p>Detail</p>
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

