<!doctype html>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
@vite('resources/css/app.css')
<style>
    html {
        scroll-behavior: smooth;
    }

    ::-webkit-scrollbar {
        width: 10px;
    }

    ::-webkit-scrollbar-track {
        background: #f1f1f1;
        /* Light background for light mode */
        border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb {
        background: #888;
        /* Darker thumb for contrast in light mode */
        border-radius: 5px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #555;
        /* Even darker on hover for light mode */
    }

    /* Dark Mode Styles */
    @media (prefers-color-scheme: dark) {
        .dark ::-webkit-scrollbar-track {
            background: #0F172A;
            /* Dark background for dark mode */
        }

        .dark ::-webkit-scrollbar-thumb {
            background: #374151;
            /* Lighter thumb for contrast in dark mode */
        }

        .dark ::-webkit-scrollbar-thumb:hover {
            background: #4B5563;
            /* Lighter on hover for dark mode */
        }
    }

    .clamp {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .clamp.one-line {
        -webkit-line-clamp: 1;
    }
</style>

<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <header>
            <x-navbar></x-navbar>
        </header>

        {{ $slot }}

        <x-backtotop></x-backtotop>
        <footer id="newsletter"
            class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
            <img src="/images/mail.png" alt="" class="mx-auto" style="width: 145px;">

            <h5 class="text-3xl">Stay in touch with the latest posts</h5>
            <p class="text-sm mt-3">Promise to keep the inbox clean. No bugs.</p>

            <div class="mt-10">
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

                    <form method="POST" action="/newsletter" class="lg:flex text-sm">
                        @csrf

                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:inline-block">
                                <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                            </label>

                            <div>
                                <input id="email" name="email" type="text" placeholder="Your email address"
                                    class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">

                                @error('email')
                                    <span class="text-xs text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <button type="submit"
                            class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </footer>
    </section>

    <x-flash />
</body>
