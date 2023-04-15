<section id="web-cases" class="relative w-full bg-white z-20 pt-10 pb-20 overflow-hidden">
    <div class="w-full hidden lg:flex lg:min-h-[600px] px-8 lg:px-0">
        <div class="hidden lg:flex w-4/12 px-6 h-full flex-col items-center justify-start mt-10">
            <div id="slider-web-cases" class="w-full text-white flex flex-col items-center justify-center">
                <?php
                $feature_blogs = get_field('feature_blogs');
                $feature_index = 0;
                if($feature_blogs) {
                    foreach($feature_blogs as $feature_blog) {
                ?>
                <div class="text-7xl font-bold px-3 flex items-center justify-center">
                    <button data-index="<?php echo $feature_index ?>" data-caseId="" class="h-40 transition-transform mr-6 <?php echo $feature_index == 0 ? "scale-125 opacity-100 text-orange-500" : "scale-75 opacity-80 text-zinc-900" ?>"><?php echo $feature_index + 1 ?></button>
                    <span class="w-6 h-[2px] bg-zinc-900"></span>
                </div>
                <?php
                        $feature_index += 1;
                    }
                }
                ?>
            </div>
        </div>
        <div id="showcase-web-cases" class="relative grow w-full lg:w-auto">
            <?php
            $blog_index = 0;
            if($feature_blogs) {
                foreach($feature_blogs as $feature_blog){
                    $categories = get_the_category($feature_blog['single_blog']);
            ?>
            <a href="<?php echo get_permalink($feature_blog['single_blog']) ?>" data-index="<?php echo $blog_index ?>" class="showcase-container relative lg:absolute w-full inset-0 flex flex-col justify-start items-stretch transition duration-500 opacity-100 translate-x-0 mb-10 lg:mb-0 shadow-xl rounded-xl lg:shadow-none lg:rounded-none <?php echo $blog_index == 0 ? "lg:opacity-100 lg:translate-x-0" : "lg:opacity-0 lg:translate-x-full" ?>">
                <img class="block w-full max-h-[500px] lg:hidden" src="<?php echo esc_url( get_the_post_thumbnail_url($feature_blog['single_blog']) ); ?>" alt="">
                <div class="hidden lg:block relative w-full h-[500px] bg-center bg-cover bg-no-repeat group" style="background-image: url(<?php echo esc_url( get_the_post_thumbnail_url($feature_blog['single_blog']) ); ?>)"></div>
                <div class="w-full bg-white flex flex-col flex-none justify-start items-start py-6 lg:pr-10">
                    <p class="text-zinc-900 text-4xl font-semibold capitalize mt-3 mb-6"><?php echo $feature_blog['single_blog']->post_title; ?></p>
                    <p class="text-zinc-900 capitalize"><?php echo $categories[0]->name ?> • <?php echo get_the_date( 'j F Y', $feature_blog['single_blog'] )?></p>
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
        <div class="container mx-auto">
            <div id="slider-blogs-list-hero" class="w-full my-slider">
                <?php
                if($feature_blogs) {
                    foreach($feature_blogs as $feature_blog){
                        $categories = get_the_category($feature_blog['single_blog']);
                ?>
                <div class="w-full">
                    <a href="<?php echo get_permalink($feature_blog['single_blog']) ?>" class="relative">
                        <img class="block w-full max-h-[500px] lg:hidden" src="<?php echo esc_url( get_the_post_thumbnail_url($feature_blog['single_blog']) ); ?>" alt="">
                        <div class="w-full bg-white flex flex-col flex-none justify-start items-start py-6 lg:pr-10">
                            <p class="text-zinc-900 text-4xl font-semibold capitalize mt-3 mb-6"><?php echo $feature_blog['single_blog']->post_title ?></p>
                            <p class="text-zinc-900 capitalize"><?php echo $categories[0]->name ?> • <?php echo get_the_date( 'j F Y', $feature_blog['single_blog'] ) ?></p>
                        </div>
                    </a>
                </div>
                <?php
                    }
                }
                ?>
                <div class="w-full">
                    <a href="/single-blog/" class="relative">
                        <img class="block w-full max-h-[500px] lg:hidden" src="<?php echo esc_url( get_template_directory_uri() . '/assets/mocking-story-3.png' ); ?>" alt="">
                        <div class="w-full bg-white flex flex-col flex-none justify-start items-start py-6 lg:pr-10">
                            <p class="text-zinc-900 text-4xl font-semibold capitalize mt-3 mb-6">Building a high performance international website using kentico kontent</p>
                            <p class="text-zinc-900 capitalize">Aem • 23 April 2021</p>
                        </div>
                    </a>
                </div>
                <div class="w-full">
                    <a href="/single-blog/" class="relative">
                        <img class="block w-full max-h-[500px] lg:hidden" src="<?php echo esc_url( get_template_directory_uri() . '/assets/mocking-story-5.png' ); ?>" alt="">
                        <div class="w-full bg-white flex flex-col flex-none justify-start items-start py-6 lg:pr-10">
                            <p class="text-zinc-900 text-4xl font-semibold capitalize mt-3 mb-6">Building a high performance international website using kentico kontent</p>
                            <p class="text-zinc-900 capitalize">Aem • 23 April 2021</p>
                        </div>
                    </a>
                </div>
                <div class="w-full">
                    <a href="/single-blog/" class="relative">
                        <img class="block w-full max-h-[500px] lg:hidden" src="<?php echo esc_url( get_template_directory_uri() . '/assets/mocking-story-6.png' ); ?>" alt="">
                        <div class="w-full bg-white flex flex-col flex-none justify-start items-start py-6 lg:pr-10">
                            <p class="text-zinc-900 text-4xl font-semibold capitalize mt-3 mb-6">Building a high performance international website using kentico kontent</p>
                            <p class="text-zinc-900 capitalize">Aem • 23 April 2021</p>
                        </div>
                    </a>
                </div>
                <div class="w-full">
                    <a href="/single-blog/" class="relative">
                        <img class="block w-full max-h-[500px] lg:hidden" src="<?php echo esc_url( get_template_directory_uri() . '/assets/mocking-story-4.png' ); ?>" alt="">
                        <div class="w-full bg-white flex flex-col flex-none justify-start items-start py-6 lg:pr-10">
                            <p class="text-zinc-900 text-4xl font-semibold capitalize mt-3 mb-6">Building a high performance international website using kentico kontent</p>
                            <p class="text-zinc-900 capitalize">Aem • 23 April 2021</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>