<section class="relative w-full flex justify-center bg-gray-100 py-12 md:py-20">
    <div class="relative container z-20">
        <div class="w-full flex flex-col items-center justify-center">
            <h2 class="w-full capitalize text-[30px] md:text-[60px] text-[#1b1c1d] font-bold mb-5 md:mb-12 text-center"><?php echo get_field('video_section')['heading'] ?></h2>
            <p class="text-[#9f9f9f] text-[15px] md:text-[20px] max-w-3xl text-center mb-[44px]"><?php echo get_field('video_section')['description'] ?></p>
            <div class="relative w-full max-w-5xl h-0 pb-[45%] bg-zinc-300 flex justify-center items-center">
                <?php if(get_field('video_section')['video_url']): ?>
                <iframe id="iframe-video" style="position:absolute;top:0;left:0;width:100%;height:100%;" src="<?php echo esc_url(get_field('video_section')['video_url']) ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <?php endif; ?>
                <?php if(get_field('video_section')['cover_image'] && get_field('video_section')['play_button_icon']): ?>
                <div id="video-cover-wrapper" class="absolute inset-0 w-full h-full bg-center bg-cover bg-no-repeat flex justify-center items-center z-10 opacity-100 transition duration-300" aria-label="<?php echo get_field('video_section')['cover_image_alt_text'] ?>" style="background-image: url(<?php echo esc_url(get_field('video_section')['cover_image']['url']) ?>)">
                    <?php if(get_field('video_section')['video_url']): ?>
                    <button id="play-btn" class="scale-100 transition duration-300 hover:scale-110">
                        <img class="w-16 h-16 object-cover object-center overflow-hidden" src="<?php echo esc_url(get_field('video_section')['play_button_icon']['url']) ?>" alt="<?php echo get_field('video_section')['icon_image_alt_text'] ?>">
                    </button>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>