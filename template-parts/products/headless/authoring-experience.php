<section class="relative w-full py-20">
    <div class="container mx-auto">
        <h2 class="w-full capitalize text-5xl text-gray-900 font-semibold mb-10"><?php echo get_field('authoring_experience_section')['heading'] ?></h2>
    </div>
    <div class="flex w-full flex-row justify-center border-t border-b border-zinc-100 flex-wrap @container">
        <div class="w-full lg:w-1/2 flex flex-col items-start py-16 lg:py-32 px-16 lg:px-28 border-y odd:border-r border-zinc-100">
            <h3 class="font-bold text-xl text-left mb-3 capitalize"><?php echo get_field('authoring_experience_section')['card_one_heading'] ?></h3>
            <p class="leading-relaxed max-w-lg">
            <?php echo get_field('authoring_experience_section')['card_one_description'] ?>
            </p>
        </div>
        <div class="w-full lg:w-1/2 flex flex-col items-start py-16 lg:py-32 px-16 lg:px-28 border-y odd:border-r border-zinc-100">
            <h3 class="font-bold text-xl text-left mb-3 capitalize"><?php echo get_field('authoring_experience_section')['card_two_heading'] ?></h3>
            <p class="leading-relaxed max-w-lg">
            <?php echo get_field('authoring_experience_section')['card_two_description'] ?>
            </p>
        </div>
        <div class="w-full lg:w-1/2 flex flex-col items-start py-16 lg:py-32 px-16 lg:px-28 border-y odd:border-r border-zinc-100">
            <h3 class="font-bold text-xl text-left mb-3 capitalize"><?php echo get_field('authoring_experience_section')['card_three_heading'] ?></h3>
            <p class="leading-relaxed max-w-lg">
            <?php echo get_field('authoring_experience_section')['card_three_description'] ?>
            </p>
        </div>
        <div class="w-full lg:w-1/2 flex flex-col items-start py-16 lg:py-32 px-16 lg:px-28 border-y odd:border-r border-zinc-100">
            <h3 class="font-bold text-xl text-left mb-3 capitalize"><?php echo get_field('authoring_experience_section')['card_four_heading'] ?></h3>
            <p class="leading-relaxed max-w-lg">
            <?php echo get_field('authoring_experience_section')['card_four_description'] ?>
            </p>
        </div>
    </div>
</section>