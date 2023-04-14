<section class="relative w-full flex justify-center bg-white py-16 lg:py-32">
    <div class="relative container z-20">
        <div class="w-full flex flex-col items-center justify-center @container">
            <h2 class="w-full capitalize text-5xl text-gray-900 font-semibold mb-10"><?php echo get_field('recommendation')['heading'] ?></h2>

            <!-- Desktop cards -->

            <div class="w-full hidden lg:flex flex-col lg:flex-row justify-center items-stretch space-y-9 space-x-0 lg:space-y-0 lg:space-x-6 xl:space-x-9 @container">
                <?php
                $post_one = get_field('recommendation')['recommendation_one'];
                $categories = get_the_category($post_one);
                if( $post_one ): ?>
                    <div class="w-full lg:w-1/3 bg-white flex flex-col border border-zinc-200">
                        <div class="w-full h-0 pt-[60%] flex-none bg-cover bg-center" style="background-image: url(<?php echo esc_url( get_the_post_thumbnail_url($post_one)) ?>); "></div>
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
                <?php endif; ?>
                <?php
                $post_two = get_field('recommendation')['recommendation_two'];
                $categories = get_the_category($post_two);
                if( $post_two ): ?>
                    <div class="w-full lg:w-1/3 bg-white flex flex-col border border-zinc-200">
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
                <?php endif; ?>
                <?php
                $post_three = get_field('recommendation')['recommendation_three'];
                $categories = get_the_category($post_three);
                if( $post_three ): ?>
                    <div class="w-full lg:w-1/3 bg-white flex flex-col border border-zinc-200">
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
                <?php endif; ?>
            </div>

            <!-- Mobile Carousel -->

            <div class="relative w-full block lg:hidden pb-16">
                <div id="slider-aem-recommend" class="w-full my-slider">
                    <?php
                    $post_one = get_field('recommendation')['recommendation_one'];
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
                    $post_two = get_field('recommendation')['recommendation_two'];
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
                    $post_three = get_field('recommendation')['recommendation_three'];
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
    </div>
</section>