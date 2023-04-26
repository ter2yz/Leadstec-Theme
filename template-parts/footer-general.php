<script src="<?php echo (get_template_directory_uri() . '/resources/js/nav-menu.js' ); ?>"></script>

<?php
    $footer_page = get_page_by_path('footer');
    $banner_section = get_field('banner_section', $footer_page->ID);
?>
</main>
<?php do_action( 'tailpress_content_end' ); ?>
</div>
<?php do_action( 'tailpress_content_after' ); ?>
<footer class="relative w-full py-10 bg-zinc-900 flex flex-col justify-center items-center z-40">
    <div class="relative container">
        <div class="relative flex flex-col lg:flex-row items-start lg:items-center justify-center lg:justify-between py-10 px-10 lg:px-20 bg-gradient-to-br from-[#F18701] to-[#FBB100] -mt-10 -translate-y-1/2 z-10 overflow-hidden">
            <h3 class="relative capitalize text-white text-3xl font-semibold mb-6 lg:mb-0 z-10"><?php echo $banner_section['heading'] ?></h3>
            <a href="<?php echo $banner_section['button_url'] ?>" class="relative capitalize text-white flex justify-center items-center border-2 border-zinc-900 bg-zinc-900 px-6 py-2 z-10 whitespace-nowrap">
                <?php echo $banner_section['button_label'] ?>
            </a>
            <span class="absolute w-40 h-40 rounded-full z-0 bg-gradient-to-tl from-[#F18701] to-[#FBB100] -top-1/3 left-2/3"></span>
            <span class="absolute w-32 h-32 rounded-full z-0 bg-gradient-to-br from-[#F18701] to-[#FBB100] -bottom-16 -right-10"></span>
        </div>
    </div>
    <div class="container mb-6 -mt-20 md:mt-0">
        <div class="w-full mb-10">
            <a href="/">
                <img class="max-w-[15rem] md:max-w-xs" src="<?php echo esc_url( get_template_directory_uri() . '/assets/leadstec-logo-original.svg' ); ?>" alt="">
            </a>
        </div>
        <div class="w-full flex flex-col md:flex-row items-stretch space-x-0 md:space-x-9">
            <div class="w-full md:w-1/2 lg:w-2/3 flex flex-col lg:flex-row justify-between pb-0 pt-0">
                <div class="w-full lg:w-1/2">
                    <h3 class="font-bold text-xl text-left text-white mb-3">Web Design & Development</h3>
                    <p class="leading-relaxed text-white opacity-50 text-[15px]">
                        Leadstec Is The Most Professional Partner Of
                        Experience Cloud Solutions In Greater
                        China, Focusing To Bring The World's Leading
                        Digital Marketing Solutions To Every Enterprise
                        In The World.
                        We Are The Product Agent Of All
                        Products Of Adobe Experience Cloud And We
                        Have A Number Of Adobe Certified Architects
                        Gartner Released Their 2020 Magic Quadrant For Digital
                        Experience Platforms Where Adobe Was Named A Leader
                        And Positioned Furthest To The Right For Our Completeness
                        Of Vision. See What Else The Report Says.
                        And Developers Who Have Rich Experiences In
                        Project Implementation Services, Operation And
                        Maintenance Support, And Product Training.
                    </p>
                </div>
                <div class="w-full flex flex-col lg:w-1/2 lg:px-9 py-6 lg:py-0">
                    <a href="/" class="font-bold text-xl text-left text-white mb-6 last:mb-0">Products</a>
                    <a href="/" class="font-bold text-xl text-left text-white mb-6 last:mb-0">Services</a>
                    <a href="/" class="font-bold text-xl text-left text-white mb-6 last:mb-0">Successful Stories</a>
                    <a href="/" class="font-bold text-xl text-left text-white mb-6 last:mb-0">About Us</a>
                    <a href="/" class="font-bold text-xl text-left text-white mb-6 last:mb-0">Blog</a>
                </div>
            </div>
            <div class="w-full flex flex-col md:w-1/2 lg:w-1/3 py-0">
                <h3 class="font-bold text-xl text-left text-white mb-3">Contact Us</h3>
                <p class="leading-relaxed text-white text-[15px] mb-3 font-bold">China</p>
                <div class="flex items-start">
                    <div class="flex-none mr-2">
                        <p class="leading-relaxed text-zinc-300 text-center w-4">
                            <i class="fa-solid fa-phone"></i>
                        </p>
                    </div>
                    <div class="flex flex-col">
                        <p class="leading-relaxed text-white opacity-50 text-[15px] mb-3">+852 3483 6928 (Hongkong)<br />+86 20 8100 0647</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="flex-none mr-2">
                        <p class="leading-relaxed text-zinc-300 text-center w-4">
                            <i class="fa-solid fa-envelope"></i>
                        </p>
                    </div>
                    <div class="flex flex-col">
                        <p class="leading-relaxed text-white opacity-50 text-[15px] mb-3">sales@leadstec.com</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="flex-none mr-2">
                        <p class="leading-relaxed text-zinc-300 text-center w-4">
                            <i class="fa-solid fa-location-dot"></i>
                        </p>
                    </div>
                    <div class="flex flex-col">
                        <p class="leading-relaxed text-white opacity-50 text-[15px] mb-3">Hong Kong<br />16/F, 700 Nathan Road, Mong Kok, Kowloon</p>
                        <p class="leading-relaxed text-white opacity-50 text-[15px] mb-3">Guangzhou<br />Room 903A Fuli Commercial Building, 23 Zhongshanba Road, Liwan District</p>
                        <p class="leading-relaxed text-white opacity-50 text-[15px] mb-3">Shenzhen<br />Floor 2, east block, Nanyuan commercial building, No. 4, MinBao Road, Longhua District, Shenzhen</p>
                        <p class="leading-relaxed text-white opacity-50 text-[15px] mb-3">Beijing<br />Room 1112, Block A, Tower 1, Wang Jing SOHO, 10 Wang Jing Street, Chao Yang District</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="w-full flex justify-start items-center py-6 text-zinc-300 text-3xl">
            <a href="#" class="mr-6 last:mr-0 transition opacity-50 hover:opacity-100">
                <i class="fa-brands fa-facebook"></i>
            </a>
            <a href="#" class="mr-6 last:mr-0 transition opacity-50 hover:opacity-100">
                <i class="fa-brands fa-linkedin"></i>
            </a>
            <a href="#" class="mr-6 last:mr-0 transition opacity-50 hover:opacity-100">
                <i class="fa-brands fa-weibo"></i>
            </a>
            <a href="#" class="mr-6 last:mr-0 transition opacity-50 hover:opacity-100">
                <i class="fa-brands fa-youtube"></i>
            </a>
        </div>
    </div>
    <div class="relative container pt-10 border-t border-zinc-400/25">
        <p class="leading-relaxed text-white opacity-50 text-[15px] text-center">© Copyright Leadstec. All Rights Reserved Guangdong Icp Registration</p>
    </div>
</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>