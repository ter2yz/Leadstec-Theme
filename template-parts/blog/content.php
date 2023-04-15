<?php
$categories = get_the_category();
?>
<div class="w-full">
    <div class="container mx-auto">
        <div class="mb-3">
            <a href="/blogs-list/" class="text-sky-600">< Back</a>
        </div>
        <div class="relative w-full flex flex-col lg:flex-row items-center mb-10">
            <img class="w-full lg:max-w-xl" src="<?php echo esc_url( the_post_thumbnail_url() ); ?>" alt="">
            <div class="w-full flex flex-col justify-start items-start py-6 px-6 lg:px-10 bg-gray-50">
                <p class="text-zinc-900 text-4xl font-semibold capitalize mt-3 mb-6"><?php echo the_title() ?></p>
                <p class="text-zinc-900 capitalize"><?php echo $categories[0]->name ?> • <?php the_time( 'j F Y' )?></p>
            </div>
        </div>
        <article class="relative prose mx-auto my-20">
            <?php the_content(); ?>
        </article>
    </div>
</div>