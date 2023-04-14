<section class="relative w-full min-h-screen bg-gradient-to-tr from-[#38B0F1] to-[#81E4E8] -mt-20">
    <div class="w-full">
        <svg viewBox="0 0 1440 120" xmlns="http://www.w3.org/2000/svg">
            <path fill="#f3f4f6" d="M0 120L48 105C96 90 192 60 288 47.4844C384 35.1563 480 39.8437 576 50.0156C672 60 768 75 864 87.5156C960 99.8437 1056 110.156 1152 99.9844C1248 90 1344 60 1392 45L1440 30V0H1392C1344 0 1248 0 1152 0C1056 0 960 0 864 0C768 0 672 0 576 0C480 0 384 0 288 0C192 0 96 0 48 0H0V120Z" fill="white"/>
        </svg>
    </div>
    <div class="w-full mt-20">
        <h2 class="capitalize text-5xl text-white font-semibold text-center"><?php echo get_field('partner_section')['heading'] ?></h2>
    </div>
    <div class="w-full h-screen max-h-[500px] xl:max-h-none relative overflow-hidden">
        <div class="absolute left-0 top-1/2 md:top-1/3 w-auto lg:w-[300%] flex items-center brand-logo-animate -translate-y-1/2">
            <div class="w-1/3 flex items-center justify-around">
                <?php
                    $brands = get_field('partner_section')['brands'];
                    if ($brands) {
                        foreach($brands as $brand) {
                ?>
                <a href="<?php echo esc_url( $brand['url'] ); ?>" class="w-60 h-60 p-10 bg-white rounded-full transition hover:scale-105 duration-300 flex justify-center items-center" target="_blank">
                    <img class="max-w-full max-h-28" src="<?php echo esc_url( $brand['logo'] ); ?>" alt="">
                </a>
                <?php
                        }
                    }
                ?>
            </div>
            <div class="w-1/3 flex items-center justify-around">
                <?php
                    $brands = get_field('partner_section')['brands'];
                    if ($brands) {
                        foreach($brands as $brand) {
                ?>
                <a href="<?php echo esc_url( $brand['url'] ); ?>" class="w-60 h-60 p-10 bg-white rounded-full transition hover:scale-105 duration-300 flex justify-center items-center" target="_blank">
                    <img class="max-w-full max-h-28" src="<?php echo esc_url( $brand['logo'] ); ?>" alt="">
                </a>
                <?php
                        }
                    }
                ?>
            </div>
            <div class="w-1/3 flex items-center justify-around">
                <?php
                    $brands = get_field('partner_section')['brands'];
                    if ($brands) {
                        foreach($brands as $brand) {
                ?>
                <a href="<?php echo esc_url( $brand['url'] ); ?>" class="w-60 h-60 p-10 bg-white rounded-full transition hover:scale-105 duration-300 flex justify-center items-center" target="_blank">
                    <img class="max-w-full max-h-28" src="<?php echo esc_url( $brand['logo'] ); ?>" alt="">
                </a>
                <?php
                        }
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="absolute w-full left-0 bottom-0">
        <svg viewBox="0 0 1440 120"  xmlns="http://www.w3.org/2000/svg">
            <path fill="#ffffff" d="M1440 0L1392 15C1344 30 1248 60 1152 72.5156C1056 84.8437 960 80.1563 864 69.9844C768 60 672 45 576 32.4844C480 20.1563 384 9.84375 288 20.0156C192 30 96 60 48 75L0 90V120H48C96 120 192 120 288 120C384 120 480 120 576 120C672 120 768 120 864 120C960 120 1056 120 1152 120C1248 120 1344 120 1392 120H1440V0Z" fill="white"/>
        </svg>
    </div>
</section>