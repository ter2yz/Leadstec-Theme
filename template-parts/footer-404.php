<script src="<?php echo (get_template_directory_uri() . '/resources/js/nav-menu.js' ); ?>"></script>
<script src="<?php echo (get_template_directory_uri() . '/resources/js/fslightbox.js' ); ?>"></script>

<?php
    $current_lang = substr($_SERVER['REQUEST_URI'], 1, 2);
    if($current_lang == 'en') {
        $footer_page = get_page_by_path('en/footer');
    } else if($current_lang == 'sc') {
        $footer_page = get_page_by_path('sc/footer');
    } else if($current_lang == 'tc') {
        $footer_page = get_page_by_path('tc/footer');
    } else {
        $footer_page = get_page_by_path('footer');
    }
    $banner_section = get_field('banner_section', $footer_page->ID);
    $about_section = get_field('about_section', $footer_page->ID);
    $links_section = get_field('links_section', $footer_page->ID);
    $info_section = get_field('info_section', $footer_page->ID);
    $locations = $info_section['location_info']['single_location'];
    $contact_form_url = get_field('footer_contact_form_url');
    global $template;

?>
</main>
<?php do_action( 'tailpress_content_end' ); ?>
</div>
<?php do_action( 'tailpress_content_after' ); ?>
<footer class="relative w-full py-10 bg-zinc-900 flex flex-col justify-center items-center z-40">
    <?php if (!is_page_template( 'page-templates/page_contact.php' )){ ?>
    <div class="relative w-[91%] max-w-none lg:max-w-[1112px] mx-auto">
        <div class="relative flex flex-col lg:flex-row items-start lg:items-center justify-center lg:justify-between py-10 px-10 lg:px-20 bg-gradient-to-br from-[#F18701] to-[#FBB100] -mt-10 -translate-y-1/2 z-10 overflow-hidden">
            <h3 class="relative capitalize text-white text-[20px] md:text-[30px] font-bold mb-6 lg:mb-0 z-10"><?php echo $banner_section['heading'] ?></h3>
            <a href="<?php echo $contact_form_url ? $contact_form_url : $banner_section['button_url'] ?>" class="relative capitalize text-white text-[15px] font-bold flex justify-center items-center border-2 border-zinc-900 bg-zinc-900 px-6 py-2 z-10 whitespace-nowrap">
                <?php echo $banner_section['button_label'] ?>
            </a>
            <span class="absolute w-40 h-40 rounded-full z-0 bg-gradient-to-tl from-[#F18701] to-[#FBB100] -top-1/3 left-2/3"></span>
            <span class="absolute w-32 h-32 rounded-full z-0 bg-gradient-to-br from-[#F18701] to-[#FBB100] -bottom-16 -right-10"></span>
        </div>
    </div>
    <?php } ?>
    <div class="w-[91%] max-w-none lg:max-w-[1112px] mx-auto mb-6 <?php if (!is_page_template( 'page-templates/page_contact.php' )): ?>-mt-20<?php endif; ?> md:mt-0">
        <div class="w-full mb-10">
            <a href="/">
                <img class="max-w-[15rem] md:max-w-xs" src="<?php echo esc_url( get_template_directory_uri() . '/assets/leadstec-logo-original.svg' ); ?>" alt="凝新科技，Leadstec">
            </a>
        </div>
        <div class="w-full flex flex-col md:flex-row items-stretch space-x-0 md:space-x-9">
            <div class="w-full md:w-1/2 lg:w-2/3 flex flex-col lg:flex-row justify-between pb-0 pt-0">
                <div class="w-full lg:w-1/2">
                    <h3 class="font-bold text-xl text-left text-white mb-3"><?php echo $about_section['heading'] ?></h3>
                    <p class="leading-relaxed text-white opacity-50 text-[15px]"><?php echo $about_section['description'] ?></p>
                </div>
                <div class="w-full flex flex-col lg:w-1/2 lg:px-9 py-6 lg:py-0">
                    <?php if($links_section) {
                        foreach($links_section as $link){
                    ?>
                    <a href="<?php echo $link['button_url'] ?>" class="font-bold text-xl text-left text-white mb-5 last:mb-0"><?php echo $link['button_label'] ?></a>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="w-full flex flex-col md:w-1/2 lg:w-1/3 py-0">
                <h3 class="font-bold text-xl text-left text-white mb-3"><?php echo $info_section['heading'] ?></h3>
                <p class="leading-relaxed text-white text-[15px] mb-3 font-bold"><?php echo $info_section['country'] ?></p>
                <div class="flex items-start">
                    <div class="flex-none mr-2">
                        <p class="leading-relaxed text-zinc-300 text-center w-4">
                            <i class="fa-solid fa-phone"></i>
                        </p>
                    </div>
                    <div class="flex flex-col">
                        <p class="leading-relaxed text-white opacity-50 text-[15px] mb-3"><?php echo $info_section['telephone_info'] ?></p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="flex-none mr-2">
                        <p class="leading-relaxed text-zinc-300 text-center w-4">
                            <i class="fa-solid fa-envelope"></i>
                        </p>
                    </div>
                    <div class="flex flex-col">
                        <p class="leading-relaxed text-white opacity-50 text-[15px] mb-3"><?php echo $info_section['email_info'] ?></p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="flex-none mr-2">
                        <p class="leading-relaxed text-zinc-300 text-center w-4">
                            <i class="fa-solid fa-location-dot"></i>
                        </p>
                    </div>
                    <div class="flex flex-col">
                        <?php 
                        if($locations){
                            foreach($locations as $single_location){
                        ?>
                        <p class="leading-relaxed text-white opacity-50 text-[15px] mb-3"><?php echo $single_location['city'] ?><br /><?php echo $single_location['address'] ?></p>
                        <?php
                            }
                        }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-[91%] max-w-none lg:max-w-[1112px] mx-auto">
        <div class="w-full flex justify-start items-center py-6 text-zinc-300 text-3xl">
            <?php if(get_field('social_media_buttons', $footer_page->ID)):
                foreach(get_field('social_media_buttons', $footer_page->ID) as $singleSocialMedia){
            ?>
                <a href="<?php echo $singleSocialMedia['url'] ?>" class="mr-[6px] last:mr-0 rounded-md overflow-hidden">
                    <img class="w-[25px] h-[25px]" src="<?php echo $singleSocialMedia['icon']['url'] ?>" alt="<?php echo $singleSocialMedia['alt_text'] ?>">
                </a>
            <?php
                }
            endif;
            ?>

        </div>
    </div>
    <div class="relative w-[91%] max-w-none lg:max-w-[1112px] mx-auto pt-10 border-t border-zinc-400/25">
        <p class="leading-relaxed text-white opacity-50 text-[15px] text-center"><?php echo get_field('copyright_banner', $footer_page->ID) ?></p>
    </div>
</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>