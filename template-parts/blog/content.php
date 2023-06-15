<?php
$categories = get_the_category();
?>
<div class="w-full">
    <div class="w-full md:w-[91%] max-w-none lg:max-w-[1112px] mx-auto">
        <div class="mb-3">
            <a href="<?php echo get_field('back_button_url')?>" class="text-sky-600"><?php echo get_field('back_button_label')?></a>
        </div>
        <div class="relative w-full flex flex-col md:flex-row items-stretch mb-10">
            <img class="w-full md:w-[27.3vw] object-cover" src="<?php echo esc_url( get_field('feature_image')['url'] ); ?>" alt="<?php echo get_field('feature_image')['alt']; ?>">
            <div class="w-full flex flex-col justify-start items-start py-6 px-6 lg:px-10 bg-gray-50">
                <p class="text-zinc-900 text-4xl font-semibold capitalize mt-3 mb-6"><?php echo get_field('title') ?></p>
                <p class="text-zinc-900 capitalize"><?php echo $categories[0]->name ?> • <?php the_time( 'j F Y' )?></p>
            </div>
        </div>
        <article class="relative prose w-full max-w-none my-[20px] md:my-[44px] px-[20px] md:px-0">
            <?php the_content(); ?>
        </article>
    </div>
</div>