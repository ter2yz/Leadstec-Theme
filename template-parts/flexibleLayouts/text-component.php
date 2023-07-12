<section id="<?php echo get_sub_field('id')?>" class="relative w-full flex justify-center bg-white">
    <div class="relative w-[91%] max-w-none lg:max-w-[1112px] mx-auto z-20">
        <div class="w-full flex flex-col items-center justify-center">
            <?php if(get_sub_field('heading')): ?>
            <h2 class="w-full text-[30px] md:text-[60px] text-[#1b1c1d] font-bold mb-10" style="text-align: <?php echo get_sub_field('heading_alignment')?>"><?php echo get_sub_field('heading'); ?></h2>
            <?php endif; ?>
            <div class="relative prose w-full max-w-none prose-p:text-[15px] md:prose-p:text-[20px] prose-p:text-[#9f9f9f] prose-h1:text-[60px] prose-headings:mb-0 prose-headings:mt-0 prose-h2:text-[45px]" style="text-align: <?php echo get_sub_field('text_alignment')?>"><?php echo get_sub_field('description'); ?></div>
        </div>
    </div>
</section>
