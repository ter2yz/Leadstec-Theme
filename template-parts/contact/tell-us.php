<section id="tell-us-about-you" class="relative w-full lg:bg-zinc-900 z-40 pb-40">
    <div class="w-full flex flex-col lg:flex-row justify-center items-start lg:min-h-[600px] bg-white z-30">
        <div class="w-full lg:w-4/12 lg:min-h-screen lg:sticky lg:top-0 bg-gradient-to-b from-[#FEBE00] to-[#F08300] p-12 z-40">
            <div class="w-[91%] max-w-none lg:max-w-[1112px] mx-auto lg:w-full bg-white p-6">
                <h3 class="font-bold text-xl text-left mb-3 capitalize text-zinc-900"><?php echo get_field('info_section')['telephone_heading'] ?></h3>
                <p class="text-zinc-900/70"><?php echo get_field('info_section')['telephone_info'] ?></p>
                <div class="w-full h-[1px] bg-zinc-400/25 my-6"></div>
                <h3 class="font-bold text-xl text-left mb-3 capitalize text-zinc-900"><?php echo get_field('info_section')['email_heading'] ?></h3>
                <p class="text-zinc-900/70"><?php echo get_field('info_section')['email_info'] ?></p>
                <div class="w-full h-[1px] bg-zinc-400/25 my-6"></div>
                <h3 class="font-bold text-xl text-left mb-3 capitalize text-zinc-900"><?php echo get_field('info_section')['location_info']['heading'] ?></h3>
                <?php
                    $locations = get_field('info_section')['location_info']['single_location'];
                    if($locations) {
                        foreach($locations as $location) {
                ?>
                <p class="text-zinc-900 font-bold mb-1"><?php echo $location['city'] ?></p>
                <p class="text-zinc-900/70 mb-3"><?php echo $location['address'] ?></p>
                <?php
                        }
                    }
                ?>
            </div>
        </div>
        <div class="w-full lg:w-8/12 z-40">
            <div class="w-full bg-zinc-900 p-12">
                <h2 class="text-white text-5xl font-semibold capitalize text-center mb-6"><?php echo get_field('tell_us_section')['heading'] ?></h2>
                <p class="leading-relaxed text-white text-center"><?php echo get_field('tell_us_section')['description'] ?></p>
            </div>
            <div class="w-full bg-white p-12">
                <?php
                echo do_shortcode(get_field('tell_us_section')['form_shortcode']);
                ?>
                <form action="" class="hidden flex-col items-center">
                    <input name="name" type="text" placeholder="Your Name" class="w-full rounded-md border border-zinc-400/0 py-4 px-6 transition hover:border-zinc-400/25 focus:border-zinc-400/25 outline-none mb-6 bg-gray-100" require>
                    <input name="company-name" type="text" placeholder="Your Company Name" class="w-full rounded-md border border-zinc-400/25 py-4 px-6 transition hover:border-zinc-400 focus:border-zinc-400 outline-none mb-6" require>
                    <input name="website" type="text" placeholder="Your Company Website (Optional)" class="w-full rounded-md border border-zinc-400/25 py-4 px-6 transition hover:border-zinc-400 focus:border-zinc-400 outline-none mb-6">
                    <input name="email" type="email" placeholder="Email" class="w-full rounded-md border border-zinc-400/25 py-4 px-6 transition hover:border-zinc-400 focus:border-zinc-400 outline-none mb-6">
                    <input name="contact-number" type="text" placeholder="Contact Number" class="w-full rounded-md border border-zinc-400/25 py-4 px-6 transition hover:border-zinc-400 focus:border-zinc-400 outline-none mb-6">
                    <input name="email" type="email" placeholder="Spoken Language Preference" class="w-full rounded-md border border-zinc-400/25 py-4 px-6 transition hover:border-zinc-400 focus:border-zinc-400 outline-none mb-6">
                    <input name="contact-number" type="text" placeholder="Project Type" class="w-full rounded-md border border-zinc-400/25 py-4 px-6 transition hover:border-zinc-400 focus:border-zinc-400 outline-none mb-6">
                    <textarea name="contact-message" rows="4" cols="50" placeholder="Message" class="w-full rounded-md border border-zinc-400/25 py-4 px-6 transition hover:border-zinc-400 focus:border-zinc-400 outline-none mb-6"></textarea>
                    <input type="submit" value="Submit" class="w-full max-w-lg py-3 text-center text-white bg-zinc-900">
                </form>
            </div>
        </div>
    </div>
</section>