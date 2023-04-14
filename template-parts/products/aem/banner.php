<section class="relative w-full flex justify-center bg-gray-400 py-28 bg-cover bg-center bg-no-repeat" style="background-image: url(<?php echo esc_url( get_field('banner')['background_image'] ); ?>); ">
    <div class="absolute inset-0 w-full h-full bg-zinc-800 opacity-60 z-0"></div>
    <div class="relative container flex flex-col justify-center items-center z-10">
        <h3 class="max-w-3xl text-white text-3xl capitalize text-center font-semibold mb-12 leading-snug"><?php echo get_field('banner')['heading'] ?></h3>
        <p class="text-white max-w-4xl text-center leading-snug mb-12">
        <?php echo get_field('banner')['description'] ?>
        </p>
        <a href="<?php echo esc_url(get_field('banner')['button_url']) ?>" class="capitalize text-white flex justify-center items-center border-2 border-zinc-900 bg-zinc-900 px-6 py-2">
            <?php echo get_field('banner')['button_text'] ?>
        </a>
    </div>
</section>