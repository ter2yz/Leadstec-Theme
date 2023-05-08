<section class="relative w-full flex justify-center bg-gray-400 py-28 bg-cover bg-center bg-no-repeat" style="background-image: url(<?php echo esc_url( get_field('banner')['background_image'] ); ?>); ">
    <div class="absolute inset-0 w-full h-full bg-zinc-800 opacity-60 z-0"></div>
    <div class="relative w-[91%] max-w-none lg:max-w-[1112px] mx-auto flex flex-col justify-center items-center z-10">
        <h3 class="max-w-none md:max-w-[772px] lg:max-w-[991px] text-white text-[20px] md:text-[40px] text-center font-bold mb-[20px] leading-snug"><?php echo get_field('banner')['heading'] ?></h3>
        <p class="text-white max-w-none md:max-w-[552px] text-[15px] md:text-[20px] text-center leading-snug mb-8">
        <?php echo get_field('banner')['description'] ?>
        </p>
        <a href="<?php echo esc_url(get_field('banner')['button_url']) ?>" class="text-[14px] text-white flex justify-center items-center border-2 border-[#1b1c1d] bg-[#1b1c1d] px-6 py-3">
            <?php echo get_field('banner')['button_text'] ?>
        </a>
    </div>
</section>