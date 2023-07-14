<style>
    .card-wrapper:hover {
        background-color: var(--hover-color);
    }
</style>
<section id="<?php echo get_sub_field('id')?>" class="relative w-full">
    <div class="w-[91%] max-w-none lg:max-w-[1112px] mx-auto">
        <?php if(get_sub_field('heading')): ?>
        <h2 class="w-full capitalize text-[30px] md:text-[60px] text-center text-[#1b1c1d] font-bold mb-5 md:mb-10"><?php echo get_sub_field('heading') ?></h2>
        <?php endif; ?>
    </div>
    <div class="flex w-full flex-row justify-start border-t border-zinc-100 flex-wrap items-stretch @container">
        <?php
        $cards = get_sub_field('cards');
        if($cards) {
            foreach($cards as $card) {
        ?>
        <div class="w-full md:w-1/2 mx-auto group" style="--hover-color: <?php echo $card['hover_background_color'] ?>">
            <div class="card-wrapper w-full h-full py-8 md:py-16 px-0 md:group-odd:pl-[9%] md:group-odd:pr-16 md:group-even:pl-16 md:group-even:pr-[9%] xl:group-odd:pl-[calc(100%-556px)] xl:group-even:pr-[calc(100%-556px)] border-y md:odd:border-r border-zinc-100 bg-white transition duration-300 group">
                <div class="w-[91%] md:w-full mx-auto h-full flex flex-col items-start">
                    <h3 class="font-bold text-[20px] md:text-[26px] px-3 mb-3 capitalize text-[#1b1c1d] text-center md:text-left <?php echo $card['hover_text_theme'] == 'dark' ? "group-hover:text-[#1b1c1d]" : "group-hover:text-white" ?>"><?php echo $card['heading'] ?></h3>
                    <p class="leading-relaxed text-[15px] md:text-[20px] px-3 md:max-w-md text-[#9f9f9f] text-left <?php echo $card['hover_text_theme'] == 'dark' ? "group-hover:text-[#9f9f9f]" : "group-hover:text-white" ?>">
                    <?php echo $card['description'] ?>
                    </p>
                    <?php if ($card['button_label'] && $card['button_url']): ?>
                    <a href="<?php echo $card['button_url'] ?>" class="text-[15px] font-bold mt-10 flex justify-center items-center ml-3 border-2 border-[#1b1c1d] bg-[#1b1c1d] px-6 py-2 text-white">
                        <?php echo $card['button_label'] ?>
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
</section>