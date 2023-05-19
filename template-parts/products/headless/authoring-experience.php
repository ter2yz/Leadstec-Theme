<style>
    .card-wrapper:hover {
        background-color: var(--hover-color);
    }
</style>
<section class="relative w-full pt-20">
    <div class="w-[91%] max-w-none lg:max-w-[1112px] mx-auto">
        <h2 class="w-full capitalize text-[30px] md:text-[60px] text-center text-[#1b1c1d] font-bold mb-10"><?php echo get_field('authoring_experience_section')['heading'] ?></h2>
    </div>
    <div class="flex w-full flex-row justify-start border-t border-zinc-100 flex-wrap items-stretch @container">
        <?php
        $cards = get_field('authoring_experience_section')['cards'];
        if($cards) {
            foreach($cards as $card) {
        ?>
        <div class="w-[91%] lg:w-1/2 mx-auto group" style="--hover-color: <?php echo $card['hover_background_color'] ?>">
            <div class="card-wrapper w-full h-full flex flex-col items-start py-16 lg:py-32 px-0 lg:group-odd:pl-[9%] lg:group-odd:pr-16 lg:group-even:pl-16 lg:group-even:pr-[9%] xl:group-odd:pl-[calc(100%-556px)] xl:group-even:pr-[calc(100%-556px)] border-y lg:odd:border-r border-zinc-100 bg-white transition duration-300 group">
                <h3 class="font-bold text-[20px] md:text-[26px] px-3 mb-3 capitalize text-[#1b1c1d] text-center lg:text-left <?php echo $card['hover_text_theme'] == 'dark' ? "group-hover:text-[#1b1c1d]" : "group-hover:text-white" ?>"><?php echo $card['heading'] ?></h3>
                <p class="leading-relaxed text-[15px] md:text-[20px] px-3 lg:max-w-lg text-[#9f9f9f] text-left <?php echo $card['hover_text_theme'] == 'dark' ? "group-hover:text-[#9f9f9f]" : "group-hover:text-white" ?>">
                <?php echo $card['description'] ?>
                </p>
                <?php if ($card['button_label'] && $card['button_url']): ?>
                <a href="<?php echo $card['button_url'] ?>" class="text-[15px] font-bold mt-10 flex justify-center items-center ml-3 border-2 border-[#1b1c1d] bg-[#1b1c1d] px-6 py-2 text-white">
                    <?php echo $card['button_label'] ?>
                </a>
                <?php endif; ?>    
            </div>
        </div>
        <?php
            }
        }
        ?>
    </div>
</section>