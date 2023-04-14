<section class="relative w-full flex justify-center bg-gray-100 py-16 lg:py-32">
    <div class="relative container z-20">
        <div class="w-full flex flex-col items-center justify-center">
            <h2 class="w-full capitalize text-5xl text-gray-900 font-semibold mb-10"><?php echo get_field('how_were_different')['heading'] ?></h2>
            <div class="w-full flex flex-col lg:flex-row justify-center items-stretch space-y-9 space-x-0 lg:space-y-0 lg:space-x-9">
                <?php
                    $differences = get_field('how_were_different')['differences'];
                    if( $differences ) {
                        foreach( $differences as $difference ) {
                ?>
                    <div class="w-full lg:w-1/3 bg-white flex flex-col justify-between p-9">
                        <div class="w-full">
                            <h3 class="font-bold text-xl text-left mb-9 capitalize"><?php echo $difference['heading'] ?></h3>
                            <p class="leading-relaxed mb-12"><?php echo $difference['description'] ?></p>
                        </div>
                        <a href="<?php echo $difference['url'] ?>" class="text-sky-600">Learn More</a>
                    </div>
                <?php
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</section>