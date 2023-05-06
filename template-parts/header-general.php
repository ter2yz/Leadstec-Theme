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
    
    <!-- Splide -->
    <script src="<?php echo (get_template_directory_uri() . '/resources/js/dist/splide.min.js' ); ?>"></script>
    <script src="<?php echo (get_template_directory_uri() . '/resources/js/dist/splide-extension-auto-scroll.min.js' ); ?>"></script>
    <link rel="stylesheet" href="<?php echo (get_template_directory_uri() . '/resources/css/splide.min.css' ); ?>">

</head>

<body <?php body_class( 'bg-white text-gray-900 antialiased' ); ?>>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
<?php do_action( 'tailpress_site_before' ); ?>
<div id="page" class="min-h-screen flex flex-col">

	<?php do_action( 'tailpress_header' ); ?>

    <?php
        $header_page = get_page_by_path('header');
        $first_lv_items = get_field('first_level_items', $header_page->ID);
        global $template;

    ?>

	<header class="z-50 sticky top-0 bg-white">
        <div class="w-full flex justify-center items-center py-3">
            <div class="container">
                <div class="w-full flex justify-between items-center">
                    <a href="/">
                        <img class="h-[4.5rem]" src="<?php echo esc_url( get_template_directory_uri() . '/assets/leadstec-logo-dark.png' ); ?>" alt="">
                    </a>
                    <div class="relative w-full flex justify-end items-center">
                        <div class="hidden lg:flex justify-center items-center">
                            <?php if($first_lv_items){
                                foreach($first_lv_items as $f_item) {
                            ?>
                            <div class="group inline-block relative">
                                <<?php echo $f_item['url'] ? 'a' : 'div' ?> href="<?php echo $f_item['url'] ?>" class="relative inline-flex w-full justify-center items-center gap-x-1.5 rounded-md bg-white px-3 py-3 group" id="menu-products" aria-expanded="true" aria-haspopup="true">
                                    <p class="text-[20px] font-bold <?php echo str_contains($_SERVER['REQUEST_URI'], strtolower('/'.$f_item['label'])) ? "text-orange-500" : "text-[#9f9f9f]" ?> hover:text-orange-500 transition-colors"><?php echo $f_item['label'] ?></p>
                                    <?php if($f_item['second_level_items']): ?>
                                    <svg class="-mr-1 h-5 w-5 text-gray-400 group-hover:text-orange-500 transition rot group-hover:rotate-180" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                    </svg>
                                    <?php endif; ?>
                                    <span class="absolute bottom-2 left-3 w-1 h-1 bg-orange-500 rounded-full transition duration-300 opacity-0 group-hover:opacity-100"></span>
                                    <span class="absolute bottom-2 left-3 w-1 h-1 bg-orange-500 rounded-full transition duration-300 opacity-0 translate-x-0 group-hover:opacity-100 group-hover:translate-x-2"></span>
                                    <span class="absolute bottom-2 left-3 w-1 h-1 bg-orange-500 rounded-full transition duration-300 opacity-0 translate-x-0 group-hover:opacity-100 group-hover:translate-x-4"></span>
                                </<?php echo $f_item['url'] ? 'a' : 'div' ?>>
                                <?php if($f_item['second_level_items']): ?>
                                <div class="absolute left-1/2 -translate-x-1/2 top-full z-10 w-56 p-3 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden group-hover:block" role="menu" aria-labelledby="menu-products" tabindex="-1">
                                    <!-- <p class="text-gray-700 block px-4 py-2 font-medium cursor-default">Adobe</p> -->
                                    <?php
                                        foreach($f_item['second_level_items'] as $s_item){
                                    ?>
                                        <?php if($s_item['url']){
                                        ?>
                                        <a href="<?php echo $s_item['url'] ?>" class="<?php echo str_contains($_SERVER['REQUEST_URI'], strtolower($s_item['url'])) ? "text-orange-500" : "text-[#1B1C1D]" ?> block px-4 py-2 font-bold text-[15px] hover:bg-orange-50 transition" role="menuitem" tabindex="-1" id="menu-item-2"><?php echo $s_item['label'] ?></a>
                                        <?php
                                        } else {
                                        ?>
                                        <p class="text-[15px] text-[1B1C1D] block px-4 py-2 font-bold cursor-default"><?php echo $s_item['label'] ?></p>
                                        <?php
                                        }
                                        if($s_item['third_level_items']){
                                            foreach($s_item['third_level_items'] as $t_item){
                                        ?>
                                        <a href="<?php echo $t_item['url'] ?>" class="<?php echo str_contains($_SERVER['REQUEST_URI'], strtolower($t_item['url'])) ? "text-orange-500" : "text-[#767676]" ?> block px-4 py-2 hover:bg-orange-50 transition" role="menuitem" tabindex="-1" id="menu-item-0"><?php echo $t_item['label'] ?></a>
                                        <?php
                                            }
                                        }
                                        ?>

                                    <?php
                                        }
                                    ?>
                                </div>
                                <?php endif; ?>
                            </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                        <div class="pl-6 flex justify-center items-center">
                            <a href="">
                                <span class="flex justify-center gap-x-1.5 bg-white px-3 text-[15px] text-orange-500 transition-colors border-r hover:underline underline-offset-4">
                                    En
                                </span>
                            </a>
                            <a href="">
                                <span class="flex justify-center gap-x-1.5 bg-white px-3 text-[15px] text-[#767676] hover:text-orange-500 transition-colors border-r hover:underline underline-offset-4">
                                    简
                                </span>
                            </a>
                            <a href="">
                                <span class="flex justify-center gap-x-1.5 bg-white px-3 text-[15px] text-[#767676] hover:text-orange-500 transition-colors hover:underline underline-offset-4">
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
                <?php if($first_lv_items){
                    foreach($first_lv_items as $f_item) {
                ?>
                <div class="<?php echo $f_item['second_level_items'] ? 'menu-item' : '' ?> w-full flex items-start justify-center group">
                    <span class="w-6 h-[2px] flex-none my-6 translate-y-[1px] opacity-70 group-[.active]:bg-orange-500 <?php echo str_contains($_SERVER['REQUEST_URI'], strtolower('/'.$f_item['label'])) ? "bg-orange-500" : "bg-zinc-500" ?>"></span>
                    <div class="flex grow flex-col items-start ml-3">
                        <!-- Products Tab -->
                        <div class="w-full flex justify-between items-center">
                            <a href="<?php echo $f_item['url'] ? $f_item['url'] : "#" ?>" class="relative inline-flex px-3 my-3 text-xl font-medium " id="menu-products" aria-expanded="true" aria-haspopup="true">
                                <p class="leading-normal border-orange-500 group-[.active]:text-orange-500 <?php echo str_contains($_SERVER['REQUEST_URI'], strtolower('/'.$f_item['label'])) ? "text-orange-500 border-b" : "text-zinc-500" ?>"><?php echo $f_item['label'] ?></p>
                            </a>
                            <?php if($f_item['second_level_items']): ?>
                            <svg class="h-5 w-5 -mt-1 text-gray-400 group-[.active]:text-orange-500 transition rotate-0 group-[.active]:rotate-180" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                            </svg>
                            <?php endif; ?>
                        </div>
                        <?php if($f_item['second_level_items']): ?>
                        <div class="overflow-hidden max-h-0 opacity-0 group-[.active]:max-h-screen group-[.active]:opacity-100 transition-all duration-300 w-full flex flex-col items-start">
                            <?php foreach($f_item['second_level_items'] as $s_item){ ?>
                                <?php if($s_item['url']): ?>
                                    <a href="<?php echo $s_item['url'] ?>" class="px-4 transition mb-3 leading-relaxed" role="menuitem" tabindex="-1" id="menu-item-0">
                                        <p class="w-auto leading-normal border-orange-500 hover:text-orange-500 font-semibold <?php echo str_contains($_SERVER['REQUEST_URI'], strtolower($s_item['url'])) ? "border-b text-orange-500" : "text-zinc-900" ?>"><?php echo $s_item['label'] ?></p>
                                    </a>
                                    <?php else: ?>
                                    <p class="text-zinc-900 block px-4 py-2 font-semibold cursor-default"><?php echo $s_item['label'] ?></p>
                                    <?php endif; ?>
                                    <?php if($s_item['third_level_items']): ?>
                                        <?php foreach($s_item['third_level_items'] as $t_item){
                                        ?>
                                        <a href="<?php echo $t_item['url'] ?>" class="px-4 transition mb-3 leading-relaxed" role="menuitem" tabindex="-1" id="menu-item-0">
                                            <p class="w-auto leading-normal border-orange-500 hover:text-orange-500 <?php echo str_contains($_SERVER['REQUEST_URI'], strtolower($t_item['url'])) ? "border-b text-orange-500" : "text-zinc-500" ?>"><?php echo $t_item['label'] ?></p>
                                        </a>
                                        <?php  
                                        } ?>
                                    <?php endif; ?>
                            <?php } ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php }
                    }
                ?>
            </div>
        </div>
	</header>

	<div id="content" class="site-content flex-grow">

		<?php do_action( 'tailpress_content_start' ); ?>

		<main class="@container">
