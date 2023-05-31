<section id="<?php echo get_sub_field('id')?>" class="relative w-full flex justify-center bg-white">
    <div class="relative w-[91%] max-w-none lg:max-w-[1112px] mx-auto z-20">
        <div class="w-full pt-12 md:pt-20 pb-12 lg:pb-40 flex flex-col items-center justify-center">
            <?php if(get_sub_field('heading')): ?>
            <h2 class="text-[30px] md:text-[60px] text-[#1b1c1d] font-bold mb-10"><?php echo get_sub_field('heading'); ?></h2>
            <?php endif; ?>
            <div class="relative prose w-full max-w-none prose-p:text-[15px] prose-p:text-[#9f9f9f] text-center"><?php echo get_sub_field('description'); ?></div>
        </div>
    </div>
</section>
