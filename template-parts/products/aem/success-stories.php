<section class="relative w-full flex justify-center bg-gray-100 pt-16 pb-52 lg:pt-32 lg:pb-32">
    <div class="relative w-[91%] max-w-none lg:max-w-[1112px] mx-auto z-20">
        <div class="w-full flex flex-col items-center justify-center @container">
            <h2 class="w-full capitalize text-[40px] md:text-[60px] text-[#1b1c1d] font-bold mb-10"><?php echo get_field('stories')['heading'] ?></h2>
            <?php $stories = get_field('stories')['stories']; ?>
            <div class="w-full flex flex-col md:flex-row <?php echo count($stories) > 3 ? "justify-start" : "justify-center" ?> items-stretch flex-wrap">
                <?php
                    if($stories) {
                        foreach($stories as $story) {
                ?>
                <div class="w-full md:w-1/3 md:[&:nth-child(3n+1)]:pl-0 md:[&:nth-child(3n+1)]:pr-2 md:[&:nth-child(3n)]:pl-2 md:[&:nth-child(3n)]:pr-0 md:pl-1 md:pr-1 mb-6">
                    <div class="w-full h-full bg-white flex flex-col border border-zinc-200">
                        <div class="w-full h-0 pt-[60%] flex-none bg-cover bg-center" aria-label="<?php echo $story['background_image_alt_text'] ?>" style="background-image: url(<?php echo esc_url( $story['background_image'] ); ?>); "></div>
                        <div class="w-full flex flex-col justify-between items-start grow p-[30px] lg:p-6 xl:p-9">
                            <div class="w-full">
                                <h3 class="font-bold text-[20px] text-[#1b1c1d] text-center md:text-left mb-3"><?php echo esc_html( $story['heading'] ); ?></h3>
                                <?php if ($story['category']): ?>
                                <p class="leading-relaxed text-[#1b1c1d] text-[15px] mb-3"><?php echo esc_html( $story['category'][0]->name ); ?></p>
                                <?php endif; ?>
                                <p class="leading-relaxed text-[#9f9f9f] text-[14px] mb-6 line-clamp-3"><?php echo $story['summary']; ?></p>
                            </div>
                            <?php if ($story['button_url']): ?>
                            <a href="<?php echo $story['button_url'] ?>" class="text-white flex justify-center items-center border-2 border-[#1b1c1d] bg-[#1b1c1d] px-6 py-3">
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