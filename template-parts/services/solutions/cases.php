<section class="w-full py-16 lg:py-32">
    <div class="relative container mx-auto">
        <?php
            $showcases = get_field('showcases');
            if ($showcases) {
                foreach($showcases as $showcase) {
        ?>
        <div class="w-full flex flex-col lg:flex-row justify-center items-stretch space-x-0 lg:space-x-12 mb-12">
            <div class="w-full mb-6 lg:mb-0">
                <div class="w-full h-0 pb-[70%] bg-cover bg-center bg-no-repeat" style="background-image: url(<?php echo esc_url( $showcase['image'] ); ?>)"></div>
            </div>
            <div class="w-full flex flex-col justify-start items-start py-3 mb-12">
                <div class="w-full">
                    <h3 class="relative capitalize text-gray-900 text-3xl font-semibold mb-6">
                        <?php echo $showcase['heading']; ?>
                    </h3>
                    <p class="text-gray-900">
                        <?php echo $showcase['description']; ?>
                    </p>
                </div>
                <a href="<?php echo $showcase['button_url']; ?>" class="text-lg mt-10 flex justify-center items-center border-2 border-zinc-900 bg-zinc-900 px-6 py-2 text-white capitalize">
                    <?php echo $showcase['button_label']; ?>
                </a>
            </div>
        </div>
        <?php
                }
            }
        ?>
    </div>
</section>