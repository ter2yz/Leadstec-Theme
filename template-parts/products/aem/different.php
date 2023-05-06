<section class="relative w-full flex justify-center bg-gray-100 py-16 lg:py-32">
    <div class="relative container z-20">
        <div class="w-full flex flex-col items-center justify-center">
            <h2 class="w-full capitalize text-5xl text-gray-900 font-semibold mb-10"><?php echo get_field('how_were_different')['heading'] ?></h2>
            <div class="w-full flex flex-col lg:flex-row flex-wrap justify-start items-stretch">
                <?php
                    $differences = get_field('how_were_different')['differences'];
                    if( $differences ) {
                        foreach( $differences as $difference ) {
                ?>
                    <div class="w-full lg:w-1/3 px-3 mb-6">
                        <div class="w-full h-full bg-white flex flex-col justify-between p-9 border-[6px] border-[#de1509]/0 transition <?php if($difference['url']){ ?>hover:border-[#de1509]/100<?php } ?>">
                            <div class="w-full">
                                <h3 class="font-bold text-xl text-left mb-9 capitalize"><?php echo $difference['heading'] ?></h3>
                                <p class="leading-relaxed mb-12"><?php echo $difference['description'] ?></p>
                            </div>
                            <?php
                            if($difference['url']){
                            ?>
                            <a href="<?php echo $difference['url'] ?>" class="text-sky-600"><?php echo $difference['button_label'] ?></a>
                            <?php
                            }
                            ?>
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