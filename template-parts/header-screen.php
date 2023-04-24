<?php
function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> style="margin-top: 0 !important;">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>

    <!-- Theme embed code -->
    <script src="https://kit.fontawesome.com/c3eb9942d6.js" crossorigin="anonymous"></script>
    <!-- Tiny Slider -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js"></script>

    <!-- Lightbox -->
    <link rel="stylesheet" href="<?php echo (get_template_directory_uri() . '/resources/css/lightbox.min.css' ); ?>">

</head>

<body <?php body_class( 'bg-white text-gray-900 antialiased' ); ?>>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
<?php do_action( 'tailpress_site_before' ); ?>
<div id="page" class="relative min-h-screen flex flex-col">

	<?php do_action( 'tailpress_header' ); ?>

	<header class="z-40 sticky top-0 bg-white flex-none">
        <div class="w-full flex justify-center items-center py-3">
            <div class="container">
                <div class="w-full flex justify-between items-center">
                    <a href="/">
                        <img class="h-[4.5rem]" src="<?php echo esc_url( get_template_directory_uri() . '/assets/leadstec-logo-dark.png' ); ?>" alt="">
                    </a>
                    <div class="relative w-full flex justify-end items-center">
                        <div class="hidden lg:flex justify-center items-center">
                            <div class="group inline-block relative">
                                <a href="#" class="relative inline-flex w-full justify-center items-center gap-x-1.5 rounded-md bg-white px-3 py-3 text-lg <?php echo is_page_template( array('page-templates/page_adobe-experience-manager.php', 'page-templates/page_adobe-experience-cloud.php', 'page-templates/page_headless.php', 'page-templates/page_erp.php') ) ? "text-orange-500" : "text-zinc-900" ?> hover:text-orange-500 transition-colors group" id="menu-products" aria-expanded="true" aria-haspopup="true">
                                    Products
                                    <svg class="-mr-1 h-5 w-5 text-gray-400 group-hover:text-orange-500 transition rot group-hover:rotate-180" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="absolute bottom-2 left-3 w-1 h-1 bg-orange-500 rounded-full transition duration-300 opacity-0 group-hover:opacity-100"></span>
                                    <span class="absolute bottom-2 left-3 w-1 h-1 bg-orange-500 rounded-full transition duration-300 opacity-0 translate-x-0 group-hover:opacity-100 group-hover:translate-x-2"></span>
                                    <span class="absolute bottom-2 left-3 w-1 h-1 bg-orange-500 rounded-full transition duration-300 opacity-0 translate-x-0 group-hover:opacity-100 group-hover:translate-x-4"></span>
                                </a>
                                <div class="absolute left-1/2 -translate-x-1/2 top-full z-10 w-56 p-3 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden group-hover:block" role="menu" aria-labelledby="menu-products" tabindex="-1">
                                    <p class="text-gray-700 block px-4 py-2 font-medium cursor-default">Adobe</p>
                                    <a href="/products/adobe-experience-manager.html" class="text-zinc-500 block px-4 py-2 hover:bg-orange-50 transition" role="menuitem" tabindex="-1" id="menu-item-0">Aem</a>
                                    <a href="/products/adobe-experience-cloud.html" class="text-zinc-500 block px-4 py-2 hover:bg-orange-50 transition" role="menuitem" tabindex="-1" id="menu-item-0">Adobe Experience Cloud</a>
                                    <a href="/products/headless-cms.html" class="text-gray-700 block px-4 py-2 font-medium hover:bg-orange-50 transition" role="menuitem" tabindex="-1" id="menu-item-1">Magnolia CMS</a>
                                    <a href="/products/erp.html" class="text-gray-700 block px-4 py-2 font-medium hover:bg-orange-50 transition" role="menuitem" tabindex="-1" id="menu-item-2">ERP Products</a>
                                </div>
                            </div>
                            <div class="group inline-block relative">
                                <button type="button" class="relative inline-flex w-full justify-center items-center gap-x-1.5 rounded-md bg-white px-3 py-3 text-lg <?php echo is_page_template( array('page-templates/page_solution-partners.php', 'page-templates/page_web-design-development.php') ) ? "text-orange-500" : "text-zinc-900" ?> hover:text-orange-500 transition-colors group" id="menu-products" aria-expanded="true" aria-haspopup="true">
                                    Services
                                    <svg class="-mr-1 h-5 w-5 text-gray-400 group-hover:text-orange-500 transition rot group-hover:rotate-180" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="absolute bottom-2 left-3 w-1 h-1 bg-orange-500 rounded-full transition duration-300 opacity-0 group-hover:opacity-100"></span>
                                    <span class="absolute bottom-2 left-3 w-1 h-1 bg-orange-500 rounded-full transition duration-300 opacity-0 translate-x-0 group-hover:opacity-100 group-hover:translate-x-2"></span>
                                    <span class="absolute bottom-2 left-3 w-1 h-1 bg-orange-500 rounded-full transition duration-300 opacity-0 translate-x-0 group-hover:opacity-100 group-hover:translate-x-4"></span>
                                </button>
                                <div class="absolute left-1/2 -translate-x-1/2 top-full z-10 p-3 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden group-hover:block" role="menu" aria-labelledby="menu-products" tabindex="-1">
                                    <a href="/services/adobe-solution-partner.html" class="capitalize text-zinc-500 block px-4 py-2 hover:bg-orange-50 transition whitespace-nowrap" role="menuitem" tabindex="-1" id="menu-item-0">Adobe Solution Partner</a>
                                    <a href="/services/web-design-and-development.html" class="capitalize text-zinc-500 block px-4 py-2 hover:bg-orange-50 transition whitespace-nowrap" role="menuitem" tabindex="-1" id="menu-item-0">Website Design & Developement</a>
                                </div>
                            </div>
                            
                            <a href="/successful-stories.html" class="cursor-pointer">
                                <span class="relative inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-3 text-lg <?php echo is_page_template( 'page-templates/page_successful-stories.php') ? "text-orange-500" : "text-zinc-900" ?> hover:text-orange-500 transition-colors group">
                                    Successful Stories
                                    <span class="absolute bottom-2 left-3 w-1 h-1 bg-orange-500 rounded-full transition duration-300 opacity-0 group-hover:opacity-100"></span>
                                    <span class="absolute bottom-2 left-3 w-1 h-1 bg-orange-500 rounded-full transition duration-300 opacity-0 translate-x-0 group-hover:opacity-100 group-hover:translate-x-2"></span>
                                    <span class="absolute bottom-2 left-3 w-1 h-1 bg-orange-500 rounded-full transition duration-300 opacity-0 translate-x-0 group-hover:opacity-100 group-hover:translate-x-4"></span>
                                </span>
                            </a>
                            <a href="/about-us.html" class="cursor-pointer">
                                <span class="relative inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-3 text-lg <?php echo is_page_template( 'page-templates/page_about-us.php') ? "text-orange-500" : "text-zinc-900" ?> hover:text-orange-500 transition-colors group">
                                    About Us
                                    <span class="absolute bottom-2 left-3 w-1 h-1 bg-orange-500 rounded-full transition duration-300 opacity-0 group-hover:opacity-100"></span>
                                    <span class="absolute bottom-2 left-3 w-1 h-1 bg-orange-500 rounded-full transition duration-300 opacity-0 translate-x-0 group-hover:opacity-100 group-hover:translate-x-2"></span>
                                    <span class="absolute bottom-2 left-3 w-1 h-1 bg-orange-500 rounded-full transition duration-300 opacity-0 translate-x-0 group-hover:opacity-100 group-hover:translate-x-4"></span>
                                </span>
                            </a>
                            <a href="/blogs-list.html" class="cursor-pointer">
                                <span class="relative inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-3 text-lg text-zinc-900 hover:text-orange-500 transition-colors group">
                                    Blog
                                    <span class="absolute bottom-2 left-3 w-1 h-1 bg-orange-500 rounded-full transition duration-300 opacity-0 group-hover:opacity-100"></span>
                                    <span class="absolute bottom-2 left-3 w-1 h-1 bg-orange-500 rounded-full transition duration-300 opacity-0 translate-x-0 group-hover:opacity-100 group-hover:translate-x-2"></span>
                                    <span class="absolute bottom-2 left-3 w-1 h-1 bg-orange-500 rounded-full transition duration-300 opacity-0 translate-x-0 group-hover:opacity-100 group-hover:translate-x-4"></span>
                                </span>
                            </a>
                            <a href="/contact-us.html" class="cursor-pointer">
                                <span class="relative inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-3 text-lg <?php echo is_page_template( 'page-templates/page_contact.php') ? "text-orange-500" : "text-zinc-900" ?> hover:text-orange-500 transition-colors group">
                                    Contact
                                    <span class="absolute bottom-2 left-3 w-1 h-1 bg-orange-500 rounded-full transition duration-300 opacity-0 group-hover:opacity-100"></span>
                                    <span class="absolute bottom-2 left-3 w-1 h-1 bg-orange-500 rounded-full transition duration-300 opacity-0 translate-x-0 group-hover:opacity-100 group-hover:translate-x-2"></span>
                                    <span class="absolute bottom-2 left-3 w-1 h-1 bg-orange-500 rounded-full transition duration-300 opacity-0 translate-x-0 group-hover:opacity-100 group-hover:translate-x-4"></span>
                                </span>
                            </a>
                        </div>
                        <div class="pl-6 flex justify-center items-center">
                            <a href="">
                                <span class="flex justify-center gap-x-1.5 bg-white px-3 text-lg font-medium text-orange-500 transition-colors border-r hover:underline underline-offset-4">
                                    En
                                </span>
                            </a>
                            <a href="">
                                <span class="flex justify-center gap-x-1.5 bg-white px-3 text-lg font-medium text-zinc-900 hover:text-orange-500 transition-colors border-r hover:underline underline-offset-4">
                                    简
                                </span>
                            </a>
                            <a href="">
                                <span class="flex justify-center gap-x-1.5 bg-white px-3 text-lg font-medium text-zinc-900 hover:text-orange-500 transition-colors hover:underline underline-offset-4">
                                    繁
                                </span>
                            </a>
                        </div>
                        <div class="pl-6 flex lg:hidden justify-center items-center">
                            <button id="nav-menu-btn" class="group">
                                <span class="relative w-6 h-6 px-3">
                                    <span class="absolute top-0 left-0 w-full h-[2px] bg-zinc-900 origin-left rotate-0 group-[.active]:rotate-45 group-[.active]:bg-orange-500 transition-all"></span>
                                    <span class="absolute bottom-0 left-0 w-full h-[2px] bg-zinc-900 opacity-100 group-[.active]:opacity-0 transition"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="nav-menu-mobile" class="block lg:hidden w-full absolute left-0 top-full bg-white shadow-lg overflow-hidden opacity-0 max-h-0 transition-all duration-300 rounded-b-lg">
            <div class="container mx-auto">
                <div class="menu-item w-full flex items-start justify-center group">
                    <span class="w-6 h-[2px] flex-none my-6 translate-y-[1px] opacity-70 group-[.active]:bg-orange-500 <?php echo is_page_template( array('page-templates/page_adobe-experience-manager.php', 'page-templates/page_adobe-experience-cloud.php', 'page-templates/page_headless.php', 'page-templates/page_erp.php')) ? "bg-orange-500" : "bg-zinc-500" ?>"></span>
                    <div class="flex grow flex-col items-start ml-3">
                        <!-- Products Tab -->
                        <div class="w-full flex justify-between items-center">
                            <a href="#" class="relative inline-flex px-3 my-3 text-xl font-medium " id="menu-products" aria-expanded="true" aria-haspopup="true">
                                <p class="leading-normal border-orange-500 group-[.active]:text-orange-500 <?php echo is_page_template( array('page-templates/page_adobe-experience-manager.php', 'page-templates/page_adobe-experience-cloud.php', 'page-templates/page_headless.php', 'page-templates/page_erp.php')) ? "text-orange-500 border-b" : "text-zinc-500" ?>">Products</p>
                            </a>
                            <svg class="h-5 w-5 -mt-1 text-gray-400 group-[.active]:text-orange-500 transition rotate-0 group-[.active]:rotate-180" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="overflow-hidden max-h-0 opacity-0 group-[.active]:max-h-screen group-[.active]:opacity-100 transition-all duration-300 w-full flex flex-col items-start">
                            <p class="text-zinc-900 block px-4 py-2 font-semibold cursor-default">Adobe</p>
                            <a href="/products/adobe-experience-manager/" class="px-4 transition mb-3 leading-relaxed" role="menuitem" tabindex="-1" id="menu-item-0">
                                <p class="w-auto leading-normal border-orange-500 hover:text-orange-500 <?php echo is_page_template( 'page-templates/page_adobe-experience-manager.php' ) ? "border-b text-orange-500" : "text-zinc-500" ?>">Aem</p>
                            </a>
                            <a href="/products/adobe-experience-cloud/" class="block px-4 transition mb-3" role="menuitem" tabindex="-1" id="menu-item-0">
                                <p class="w-auto leading-normal border-orange-500 hover:text-orange-500 <?php echo is_page_template( 'page-templates/page_adobe-experience-cloud.php' ) ? "border-b text-orange-500" : "text-zinc-500" ?>">Adobe Experience Cloud</p>
                            </a>
                            <a href="/products/headless-cms/" class="block px-4 transition mb-3" role="menuitem" tabindex="-1" id="menu-item-0">
                                <p class="w-auto leading-normal border-orange-500 hover:text-orange-500 <?php echo is_page_template( 'page-templates/page_headless.php' ) ? "border-b text-orange-500" : "text-zinc-500" ?>">Magnolia CMS</p>
                            </a>
                            <a href="/products/erp/" class="text-zinc-500 block px-4 transition mb-3" role="menuitem" tabindex="-1" id="menu-item-0">
                                <p class="w-auto leading-normal border-orange-500 hover:text-orange-500 <?php echo is_page_template( 'page-templates/page_erp.php' ) ? "border-b text-orange-500" : "text-zinc-500" ?>">ERP Products</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="menu-item w-full flex items-start justify-center group">
                    <span class="w-6 h-[2px] flex-none my-6 translate-y-[1px] opacity-70 <?php echo is_page_template( array('page-templates/page_solution-partners.php', 'page-templates/page_web-design-development.php')) ? "bg-orange-500" : "bg-zinc-500" ?>"></span>
                    <div class="flex grow flex-col items-start ml-3">
                        <!-- Services Tab -->
                        <div class="w-full flex justify-between items-center">
                            <a href="#" class="relative inline-flex px-3 my-3 text-xl font-medium" id="menu-products" aria-expanded="true" aria-haspopup="true">
                                <p class="leading-normal border-orange-500 <?php echo is_page_template( array('page-templates/page_solution-partners.php', 'page-templates/page_web-design-development.php')) ? "text-orange-500 border-b" : "text-zinc-500" ?>">Services</p>
                            </a>
                            <svg class="h-5 w-5 -mt-1 text-gray-400 group-[.active]:text-orange-500 transition rotate-0 group-[.active]:rotate-180" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="overflow-hidden max-h-0 opacity-0 group-[.active]:max-h-screen group-[.active]:opacity-100 transition-all duration-300 w-full flex flex-col items-start">
                            <a href="/services/adobe-solution-partner/" class="px-4 transition mb-3 leading-relaxed" role="menuitem" tabindex="-1" id="menu-item-0">
                                <p class="w-auto leading-normal border-orange-500 hover:text-orange-500 <?php echo is_page_template( 'page-templates/page_solution-partners.php' ) ? "border-b text-orange-500" : "text-zinc-500" ?>">Adobe Solution Partner</p>
                            </a>
                            <a href="/services/web-design-and-development/" class="block px-4 transition mb-3" role="menuitem" tabindex="-1" id="menu-item-0">
                                <p class="w-auto leading-normal border-orange-500 hover:text-orange-500 <?php echo is_page_template( 'page-templates/page_web-design-development.php' ) ? "border-b text-orange-500" : "text-zinc-500" ?>">Website Design & Developement</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full flex items-start justify-center">
                    <span class="w-6 h-[2px] flex-none my-6 translate-y-[1px] opacity-70 <?php echo is_page_template( 'page-templates/page_successful-stories.php' ) ? "bg-orange-500" : "bg-zinc-500" ?>"></span>
                    <div class="flex grow flex-col items-start ml-3">
                        <!-- Successful Stories Tab -->
                        <a href="/successful-stories/" class="relative inline-flex px-3 my-3 text-xl font-medium" id="menu-products" aria-expanded="true" aria-haspopup="true">
                            <p class="leading-normal border-orange-500 hover:text-orange-500 <?php echo is_page_template( 'page-templates/page_successful-stories.php' ) ? "text-orange-500 border-b" : "text-zinc-500" ?>">Successful Stories</p>
                        </a>
                    </div>
                </div>
                <div class="w-full flex items-start justify-center">
                    <span class="w-6 h-[2px] flex-none my-6 translate-y-[1px] opacity-70 <?php echo is_page_template( 'page-templates/page_about-us.php' ) ? "bg-orange-500" : "bg-zinc-500" ?>"></span>
                    <div class="flex grow flex-col items-start ml-3">
                        <!-- About us Tab -->
                        <a href="/about-us/" class="relative inline-flex px-3 my-3 text-xl font-medium" id="menu-products" aria-expanded="true" aria-haspopup="true">
                            <p class="leading-normal border-orange-500 hover:text-orange-500 <?php echo is_page_template( 'page-templates/page_about-us.php' ) ? "text-orange-500 border-b" : "text-zinc-500" ?>">About us</p>
                        </a>
                    </div>
                </div>
                <div class="w-full flex items-start justify-center">
                    <span class="w-6 h-[2px] flex-none my-6 translate-y-[1px] opacity-70 <?php echo is_page_template( 'page-templates/page_blogs-list.php' ) ? "bg-orange-500" : "bg-zinc-500" ?>"></span>
                    <div class="flex grow flex-col items-start ml-3">
                        <!-- Blog Tab -->
                        <a href="/blogs-list/" class="relative inline-flex px-3 my-3 text-xl font-medium" id="menu-products" aria-expanded="true" aria-haspopup="true">
                            <p class="leading-normal border-orange-500 hover:text-orange-500 <?php echo is_page_template( 'page-templates/page_blogs-list.php' ) ? "text-orange-500 border-b" : "text-zinc-500" ?>">Blog</p>
                        </a>
                    </div>
                </div>
                <div class="w-full flex items-start justify-center mb-3">
                    <span class="w-6 h-[2px] flex-none my-6 translate-y-[1px] opacity-70 <?php echo is_page_template( 'page-templates/page_contact.php' ) ? "bg-orange-500" : "bg-zinc-500" ?>"></span>
                    <div class="flex grow flex-col items-start ml-3">
                        <!-- Contact Tab -->
                        <a href="/contact-us/" class="relative inline-flex px-3 my-3 text-xl font-medium" id="menu-products" aria-expanded="true" aria-haspopup="true">
                            <p class="leading-normal border-orange-500 hover:text-orange-500 <?php echo is_page_template( 'page-templates/page_contact.php' ) ? "text-orange-500 border-b" : "text-zinc-500" ?>">Contact</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
	</header>

	<div id="content" class="site-content flex-grow">

		<?php do_action( 'tailpress_content_start' ); ?>

		<main class="w-full h-full">
