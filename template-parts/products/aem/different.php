<section class="relative w-full flex justify-center bg-[#f8f8f8] py-16 lg:py-32">
    <div class="relative w-[91%] max-w-none lg:max-w-[1112px] mx-auto z-20">
        <div class="w-full flex flex-col items-center justify-center">
            <h2 class="w-full capitalize text-[30px] md:text-[60px] text-[#1b1c1d] font-bold mb-10"><?php echo get_field('how_were_different')['heading'] ?></h2>
            <div class="w-full flex flex-col lg:flex-row flex-wrap justify-start items-stretch">
                <?php
                    $differences = get_field('how_were_different')['differences'];
                    if( $differences ) {
                        foreach( $differences as $difference ) {
                ?>
                    <div class="w-full md:w-1/3 md:[&:nth-child(3n+1)]:pl-0 md:[&:nth-child(3n)]:pr-0 md:pl-3 md:pr-3 px-3 mb-6">
                        <div class="w-full h-full bg-white flex flex-col justify-between p-9 border-[6px] border-[#de1509]/0 transition <?php if($difference['url']){ ?>hover:border-[#de1509]/100<?php } ?>">
                            <div class="w-full">
                                <h3 class="font-bold text-xl text-left mb-[15px] text-[#1b1c1d]"><?php echo $difference['heading'] ?></h3>
                                <p class="leading-relaxed text-[14px] text-[#9f9f9f] mb-[26px]"><?php echo $difference['description'] ?></p>
                            </div>
                            <?php
                            if($difference['url']){
                            ?>
                            <a href="<?php echo $difference['url'] ?>" class="text-sky-600 text-[14px]"><?php echo $difference['button_label'] ?></a>
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