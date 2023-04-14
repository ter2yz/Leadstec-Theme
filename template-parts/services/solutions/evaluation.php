<section class="relative w-full flex justify-center bg-gray-100 py-16 lg:py-32">
    <div class="relative container z-20">
        <div class="w-full flex flex-col items-center justify-center">
            <h2 class="w-full capitalize text-5xl text-gray-900 font-semibold mb-10 text-center"><?php echo get_field('evaluation_heading'); ?></h2>
            <div class="w-full flex flex-col lg:flex-row justify-center items-start space-y-9 space-x-0 lg:space-y-0 lg:space-x-9">
                <?php
                    $evaluations = get_field('evaluations');
                    if ($evaluations) {
                        foreach($evaluations as $evaluation) {
                ?>
                    <div class="w-full lg:w-1/3 bg-white flex flex-col p-9">
                        <div class="w-full flex justify-start items-center pb-6 mb-6 border-b border-zinc-400/25">
                            <div class="flex-none mr-6">
                                <img class="h-16" src="<?php echo esc_url( $evaluation['logo'] ); ?>" alt="">
                            </div>
                            <div class="grow flex flex-col items-start">
                                <h3 class="font-bold text-left mb-1"><?php echo $evaluation['heading']; ?></h3>
                                <p class="font-light leading-none"><?php echo $evaluation['sub_heading']; ?></p>
                            </div>
                        </div>
                        <p class="leading-relaxed"><?php echo $evaluation['description']; ?></p>
                    </div>
                <?php
                        }
                    }
                ?>
                
            </div>
        </div>
    </div>
</section>