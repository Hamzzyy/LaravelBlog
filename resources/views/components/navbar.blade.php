<nav class="relative py-4 flex justify-between items-center bg-white xl:container m-auto px-6 md:px-12 lg:px-6">
    <a class="text-3xl font-bold leading-none ml-10 lg:ml-0" href="/">
        <img width="165" height="16" src="/images/hamza.png" alt="">
    </a>
    <div class="lg:hidden">
        <button class="navbar-burger flex items-center text-blue-500 p-3">
            <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Mobile menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
        </button>
    </div>
    <ul
        class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:items-center lg:w-auto lg:space-x-6">
        <li><a class="text-sm text-gray-700 hover:text-blue-500" href="/contact">Contact</a></li>
        <li><a class="text-sm text-gray-700 hover:text-blue-500" href="#newsletter">Newsletter</a></li>
    </ul>
    @auth
        <x-dropdown>
            <x-slot name="trigger">
                <button class="text-xs font-bold uppercase">
                    Welcome, {{ auth()->user()->name }}!
                </button>
            </x-slot>

            @admin
                <x-dropdown-item href="/admin/posts" :active="request()->is('admin/posts')">
                    Dashboard
                </x-dropdown-item>

                <x-dropdown-item href="/admin/posts/create" :active="request()->is('admin/posts/create')">
                    New Post
                </x-dropdown-item>
            @endadmin

            <x-dropdown-item href="#" x-data="{}"
                @click.prevent="document.querySelector('#logout-form').submit()">
                Log Out
            </x-dropdown-item>

            <form id="logout-form" method="POST" action="/logout" class="hidden">
                @csrf
            </form>
        </x-dropdown>
    @else
        <a class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 bg-gray-50 hover:bg-gray-100 text-sm text-gray-900 font-bold  rounded-xl transition duration-200"
            href="/login">Login</a>
        <a class="hidden lg:inline-block py-2 px-6 bg-blue-500 hover:shadow-lg hover:bg-blue-400 text-sm text-white font-bold rounded-xl transition duration-200"
            href="/register">Register</a>
    @endauth
</nav>
<div class="navbar-menu relative z-50 hidden">
    <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
    <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
        <div class="flex items-center mb-8">
            <a class="mr-auto text-3xl font-bold leading-none" href="/">
                <img width="165" height="16" src="/images/hamza.png" alt="">
            </a>
            <button class="navbar-close">
                <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>
        <div>
            <ul>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-700 hover:text-blue-500 rounded"
                    href="/contact">Contact</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-700 hover:text-blue-500 rounded"
                        href="#newsletter">Newsletter</a>
                </li>
            </ul>
        </div>
        <div class="mt-auto">
            <div class="pt-6">
                @auth
                    <x-dropdown>
                        <x-slot name="trigger">
                            <button class="text-xs font-bold uppercase">
                                Welcome, {{ auth()->user()->name }}!
                            </button>
                        </x-slot>

                        @admin
                            <x-dropdown-item href="/admin/posts" :active="request()->is('admin/posts')">
                                Dashboard
                            </x-dropdown-item>

                            <x-dropdown-item href="/admin/posts/create" :active="request()->is('admin/posts/create')">
                                New Post
                            </x-dropdown-item>
                        @endadmin

                        <x-dropdown-item href="#" x-data="{}"
                            @click.prevent="document.querySelector('#logout-form').submit()">
                            Log Out
                        </x-dropdown-item>

                        <form id="logout-form" method="POST" action="/logout" class="hidden">
                            @csrf
                        </form>
                    </x-dropdown>
                @else
                    <a class="block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold bg-gray-50 hover:bg-gray-100 rounded-xl"
                        href="/login">Login</a>
                    <a class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-white font-semibold bg-blue-500 hover:shadow-lg hover:bg-blue-400  rounded-xl"
                        href="/register">Register</a>
                @endauth
            </div>
            <p class="my-4 text-xs text-center text-gray-400">
                <span>© 2023 WebsiteName. All Rights Reserved.</span>
            </p>
        </div>
    </nav>
</div>

<script>
    // Burger menus
    document.addEventListener('DOMContentLoaded', function() {
        // open
        const burger = document.querySelectorAll('.navbar-burger');
        const menu = document.querySelectorAll('.navbar-menu');

        if (burger.length && menu.length) {
            for (var i = 0; i < burger.length; i++) {
                burger[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }

        // close
        const close = document.querySelectorAll('.navbar-close');
        const backdrop = document.querySelectorAll('.navbar-backdrop');

        if (close.length) {
            for (var i = 0; i < close.length; i++) {
                close[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }

        if (backdrop.length) {
            for (var i = 0; i < backdrop.length; i++) {
                backdrop[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }
    });
</script>
