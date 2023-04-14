<section class="relative w-full flex justify-center bg-gray-100 pt-16 pb-52 lg:pt-32 lg:pb-32">
    <div class="relative container z-20">
        <div class="w-full flex flex-col items-center justify-center @container">
            <h2 class="w-full capitalize text-5xl text-gray-900 font-semibold mb-10">Success Stories</h2>
            <div class="w-full flex flex-col lg:flex-row justify-center items-stretch space-y-6 space-x-0 lg:space-y-0 lg:space-x-6 xl:space-x-9 @container">
                <?php
                $post_one = get_field('stories')['story_one'];
                $categories = get_the_category($post_one);
                if( $post_one ): ?>
                    <div class="w-full">
                        <div class="w-full h-full bg-white flex flex-col border border-zinc-200">
                            <div class="w-full h-0 pt-[60%] flex-none bg-cover bg-center" style="background-image: url(<?php echo esc_url( get_the_post_thumbnail_url($post_one) ); ?>); "></div>
                            <div class="w-full flex flex-col justify-between items-start grow p-3 lg:p-6 xl:p-9">
                                <div class="w-full">
                                    <h3 class="font-bold text-xl text-left mb-3"><?php echo esc_html( $post_one->post_title ); ?></h3>
                                    <?php if ($categories): ?>
                                    <p class="leading-relaxed mb-3"><?php echo esc_html( $categories[0]->name ); ?></p>
                                    <?php endif; ?>
                                    <p class="leading-relaxed text-zinc-500 mb-12"><?php echo get_the_excerpt($post_one); ?></p>
                                </div>
                                <a href="<?php echo get_permalink($post_one) ?>" class="capitalize text-white flex justify-center items-center border-2 border-zinc-900 bg-zinc-900 px-6 py-2">
                                    Read the report
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>    
                <?php
                $post_two = get_field('stories')['story_two'];
                $categories = get_the_category($post_two);
                if( $post_two ): ?>
                    <div class="w-full">
                        <div class="w-full h-full bg-white flex flex-col border border-zinc-200">
                            <div class="w-full h-0 pt-[60%] flex-none bg-cover bg-center" style="background-image: url(<?php echo esc_url( get_the_post_thumbnail_url($post_two) ); ?>); "></div>
                            <div class="w-full flex flex-col justify-between items-start grow p-3 lg:p-6 xl:p-9">
                                <div class="w-full">
                                    <h3 class="font-bold text-xl text-left mb-3"><?php echo esc_html( $post_two->post_title ); ?></h3>
                                    <?php if ($categories): ?>
                                    <p class="leading-relaxed mb-3"><?php echo esc_html( $categories[0]->name ); ?></p>
                                    <?php endif; ?>
                                    <p class="leading-relaxed text-zinc-500 mb-12"><?php echo get_the_excerpt($post_two); ?></p>
                                </div>
                                <a href="<?php echo get_permalink($post_two) ?>" class="capitalize text-white flex justify-center items-center border-2 border-zinc-900 bg-zinc-900 px-6 py-2">
                                    Read the report
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>    
                <?php
                $post_three = get_field('stories')['story_three'];
                $categories = get_the_category($post_three);
                if( $post_three ): ?>
                    <div class="w-full">
                        <div class="w-full h-full bg-white flex flex-col border border-zinc-200">
                            <div class="w-full h-0 pt-[60%] flex-none bg-cover bg-center" style="background-image: url(<?php echo esc_url( get_the_post_thumbnail_url($post_three) ); ?>); "></div>
                            <div class="w-full flex flex-col justify-between items-start grow p-3 lg:p-6 xl:p-9">
                                <div class="w-full">
                                    <h3 class="font-bold text-xl text-left mb-3"><?php echo esc_html( $post_three->post_title ); ?></h3>
                                    <?php if ($categories): ?>
                                    <p class="leading-relaxed mb-3"><?php echo esc_html( $categories[0]->name ); ?></p>
                                    <?php endif; ?>
                                    <p class="leading-relaxed text-zinc-500 mb-12"><?php echo get_the_excerpt($post_three); ?></p>
                                </div>
                                <a href="<?php echo get_permalink($post_three) ?>" class="capitalize text-white flex justify-center items-center border-2 border-zinc-900 bg-zinc-900 px-6 py-2">
                                    Read the report
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>    
            </div>
        </div>
    </div>
</section>