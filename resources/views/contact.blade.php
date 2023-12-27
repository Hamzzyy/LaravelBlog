<x-layout>
    <title>Contact Us - WebsiteName</title>
    <section class="xl:container m-auto px-6 md:px-12 lg:px-6">
        <div class="mt-8 animate__animated animate__fadeInDown">
            <h3 class="font-bold text-5xl">Get Started With <br>SiteName</h3>
            <p class="mt-8">Let's Explore how SiteName Can work For You.
                </p>
        </div>
        <div
            class="animate__animated animate__fadeInUp p-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4 mt-20 xl:container m-auto px-6 md:px-12 lg:px-6">

            <div class="col-span-1">
                <div class="mt-5">
                    <h3 class="text-4xl text-blue-400 font-semibold">Contact Our <br> Sales Team</h3>
                    <p class="text-gray-600 mt-2">Let's Explore how SiteName Can work For You.</p>
                </div>

                <ul class="max-w-md space-y-1 text-gray-500 list-disc list-inside mt-20">
                    <li>
                        One Flexible Tool for your entire company to<br>share knowledge, ship projects, and collaborate.
                    </li>
                    <li>
                        Enterprise Features to securely manage user <br>access and security.
                    </li>
                    <li>
                        Dedicated support to work with you on your<br>setup and help you build the best plan for your
                        <br> company.
                    </li>
                </ul>
            </div>

            <div class="col-span-1">
                <x-panel>

                    <form method="POST" action="/contact" class="mt-10">
                        @csrf

                        <x-form.input name="name" placeholder="Enter Your Name" type="name" autocomplete="name" required />
                        <x-form.input name="email" placeholder="Enter Your Email" type="email" autocomplete="current-email" required />
                        <x-form.input name="company name" placeholder="Enter Your Company Name" type="comapany-name" autocomplete="company-name" required />
                        <x-form.input name="company size" placeholder="Enter Your Company Size" type="comapany-size" autocomplete="company-size" required />
                        <x-form.input name="country or region" placeholder="Enter Your Country or Region" type="country-or-region" autocomplete="country-or-region" required />
                        <x-form.textarea name="message" placeholder="Enter Your Message" required />

                        @error('message')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
            </div>
            <x-form.button>Submit</x-form.button>
            </form>
            </x-panel>
        </div>

        </div>
    </section>
</x-layout>
