<section class="relative w-full flex justify-center bg-gray-100 pt-16 pb-52 lg:pt-32 lg:pb-32">
    <div class="relative container z-20">
        <div class="w-full flex flex-col items-center justify-center @container">
            <h2 class="px-3 w-full capitalize text-5xl text-gray-900 font-semibold mb-10"><?php echo get_field('stories')['heading'] ?></h2>
            <?php $stories = get_field('stories')['stories']; ?>
            <div class="w-full flex flex-col md:flex-row <?php echo count($stories) > 3 ? "justify-start" : "justify-center" ?> items-stretch flex-wrap">
                <?php
                    if($stories) {
                        foreach($stories as $story) {
                ?>
                <div class="w-full md:w-1/3 px-3 mb-6">
                    <div class="w-full h-full bg-white flex flex-col border border-zinc-200">
                        <div class="w-full h-0 pt-[60%] flex-none bg-cover bg-center" style="background-image: url(<?php echo esc_url( $story['background_image'] ); ?>); "></div>
                        <div class="w-full flex flex-col justify-between items-start grow p-3 lg:p-6 xl:p-9">
                            <div class="w-full">
                                <h3 class="font-bold text-xl text-center md:text-left mb-3"><?php echo esc_html( $story['heading'] ); ?></h3>
                                <?php if ($story['category']): ?>
                                <p class="leading-relaxed mb-3"><?php echo esc_html( $story['category'][0]->name ); ?></p>
                                <?php endif; ?>
                                <p class="leading-relaxed text-zinc-500 mb-12"><?php echo $story['summary']; ?></p>
                            </div>
                            <?php if ($story['button_url']): ?>
                            <a href="<?php echo $story['button_url'] ?>" class="capitalize text-white flex justify-center items-center border-2 border-zinc-900 bg-zinc-900 px-6 py-2">
                                <?php echo $story['button_label']; ?>
                            </a>
                            <?php endif; ?>
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