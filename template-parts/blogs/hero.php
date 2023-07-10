<section id="web-cases" class="relative w-full bg-white z-20 pt-10 pb-20 overflow-hidden">
    <div class="w-full hidden lg:flex lg:min-h-[600px] px-8 lg:px-0">
        <div class="hidden lg:flex w-3/12 px-6 h-full flex-col items-center justify-start mt-10">
            <div id="slider-web-cases" class="w-full text-white flex flex-col items-center justify-center">
                <?php
                $current_lang = get_field('blogs_type');
                $feature_blogs = get_field('feature_blogs');
                $feature_index = 0;
                if($feature_blogs) {
                    foreach($feature_blogs as $feature_blog) {
                ?>
                <div class="text-7xl font-bold px-3 flex items-center justify-center">
                    <button data-index="<?php echo $feature_index ?>" data-caseId="" class="h-40 transition-all mr-6 <?php echo $feature_index == 0 ? "text-[100px] opacity-100 text-orange-500" : "text-[20px] opacity-80 text-zinc-900" ?>"><?php echo $feature_index + 1 ?></button>
                    <span class="w-6 h-[2px] bg-zinc-900 text-[100px] text-[20px]"></span>
                </div>
                <?php
                        $feature_index += 1;
                    }
                }
                ?>
            </div>
            <a href="<?php echo get_field("button_url"); ?>" class="text-3xl w-12 h-12 mt-10 flex justify-center items-center rounded-full border-2 border-gray-900 text-gray-900">
                <i class="fa-solid fa-chevron-down"></i>
            </a>
        </div>
        <div id="showcase-web-cases" class="relative grow w-full lg:w-auto">
            <?php
            $blog_index = 0;
            if($feature_blogs) {
                foreach($feature_blogs as $feature_blog){
                    $current_taxonomies = get_post_taxonomies($feature_blog);
                    $categories = get_the_terms($feature_blog, $current_taxonomies[0]);
                    if(get_field('post_date', $feature_blog->ID)){
                        $postDate = DateTime::createFromFormat( 'Ymd', get_field('post_date', $feature_blog->ID) );
                        $dateStr = $postDate->format('j F Y');
                        if ($current_type == "blogs_sc" || $current_type == "blogs_tc") {
                            $dateStr = $postDate->format('Y年n月j日');
                        }
                    } else {
                        $dateStr = "";
                    }
            ?>
            <a href="<?php echo get_permalink($feature_blog) ?>" data-index="<?php echo $blog_index ?>" class="showcase-container relative lg:absolute w-full inset-0 flex flex-col justify-start items-stretch transition duration-500 opacity-100 translate-x-0 mb-10 lg:mb-0 shadow-xl rounded-xl lg:shadow-none lg:rounded-none <?php echo $blog_index == 0 ? "lg:opacity-100 lg:translate-x-0" : "lg:opacity-0 lg:translate-x-full" ?>">
                <img class="block w-full max-h-[500px] lg:hidden" src="<?php echo esc_url( get_field('feature_image', $feature_blog->ID)['url'] ); ?>" alt="<?php echo get_field('image_alt_text', $feature_blog->ID);?>">
                <div class="hidden lg:block relative w-full h-[500px] bg-center bg-cover bg-no-repeat group" style="background-image: url(<?php echo esc_url( get_field('feature_image', $feature_blog->ID)['url'] ); ?>)" aria-label="<?php echo get_field('image_alt_text', $feature_blog->ID);?>"></div>
                <div class="w-full bg-white flex flex-col flex-none justify-start items-start py-6 lg:pr-10">
                    <p class="text-zinc-900 text-4xl font-semibold capitalize mt-3 mb-6"><?php echo get_field('title', $feature_blog->ID); ?></p>
                    <p class="text-zinc-900 capitalize"><?php echo $categories[0]->name ?><?php echo $categories[0]&&$dateStr ? " • " : "" ?><?php echo $dateStr; ?></p>
                </div>
            </a>
            <?php
                    $blog_index += 1;
                }
            }
            ?>
        </div>
    </div>

    <!-- Mobile Hero Section -->
    <div class="relative w-full block lg:hidden pb-16">
        <div class="w-[91%] max-w-none lg:max-w-[1112px] mx-auto">
            <div id="slider-blogs-list-hero" class="w-full my-slider">
                <?php
                if($feature_blogs) {
                    foreach($feature_blogs as $feature_blog){
                        $current_taxonomies = get_post_taxonomies($feature_blog);
                        $categories = get_the_terms($feature_blog, $current_taxonomies[0]);
                        if(get_field('post_date', $feature_blog->ID)){
                            $postDate = DateTime::createFromFormat( 'Ymd', get_field('post_date', $feature_blog->ID) );
                            $dateStr = $postDate->format('j F Y');
                            if ($current_type == "blogs_sc" || $current_type == "blogs_tc") {
                                $dateStr = $postDate->format('Y年n月j日');
                            }
                        } else {
                            $dateStr = "";
                        }
                ?>
                <div class="w-full">
                    <a href="<?php echo get_permalink($feature_blog) ?>" class="relative">
                        <img class="block w-full max-h-[500px] lg:hidden" src="<?php echo esc_url( get_field('feature_image', $feature_blog->ID)['url'] ); ?>" alt="">
                        <div class="w-full bg-white flex flex-col flex-none justify-start items-start py-6 lg:pr-10">
                            <p class="text-zinc-900 text-4xl font-semibold capitalize mt-3 mb-6"><?php echo get_field('title', $feature_blog->ID) ?></p>
                            <p class="text-zinc-900 capitalize"><?php echo $categories[0]->name ?><?php echo $categories[0]&&$dateStr ? " • " : "" ?><?php echo $dateStr; ?></p>
                        </div>
                    </a>
                </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>