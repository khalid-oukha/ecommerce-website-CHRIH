<header class="relative z-50 px-4 bg-primary-400 sm:px-10">
    <div class='flex flex-wrap items-center w-full gap-4 mx-auto max-w-7xl'>
        <a href="{{ route('home') }}"><img class="max-w-xs w-32" src="{{ URL::asset('assets/images/logo.png') }}"
                alt="logo" />
        </a>
        <div class='flex ml-auto lg:order-1'>
            <div class="mx-auto flex w-full flex-wrap items-center justify-between px-3 lg:container">
                <!-- Right elements -->
                <div class="relative flex items-center">
                    <!-- Cart Icon -->
                    @if (!auth()->check())


                    <a class="mr-4 text-white hover:text-neutral-700 focus:text-neutral-7  "
                        href="{{ Route('loginform') }}">
                        <span class="[&>svg]:w-5">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path fill="#ffffff"
                                    d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z" />
                            </svg>
                        </span>
                    </a>

                    @endif

                    <a class="mr-4 text-white hover:text-neutral-700 focus:text-neutral-7  "
                    href="{{ Route('cart.index') }}">
                    <span class="[&>svg]:w-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="h-5 w-5">
                            <path
                                d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" />
                        </svg>
                    </span>
                </a>
                    <div class="relative" data-te-dropdown-ref>
                        <a class="hidden-arrow mr-4 flex items-center text-neutral-500 hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                            href="#" id="dropdownMenuButton1" role="button" data-te-dropdown-toggle-ref
                            aria-expanded="false">
                            <span class="[&>svg]:w-5">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="h-5 w-5">
                                    <path fill-rule="evenodd"
                                        d="M5.25 9a6.75 6.75 0 0113.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 01-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 11-7.48 0 24.585 24.585 0 01-4.831-1.244.75.75 0 01-.298-1.205A8.217 8.217 0 005.25 9.75V9zm4.502 8.9a2.25 2.25 0 104.496 0 25.057 25.057 0 01-4.496 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                            <!-- Notification counter -->
                            <span
                                class="absolute -mt-2.5 ml-2 rounded-[0.37rem] bg-danger px-[0.45em] py-[0.2em] text-[0.6rem] leading-none text-white">1</span>
                        </a>
                        <!-- First dropdown menu -->
                        <ul class="absolute left-auto right-0 z-[1000] float-left m-0 mt-1 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
                            aria-labelledby="dropdownMenuButton1" data-te-dropdown-menu-ref>
                            <!-- First dropdown menu items -->
                            <li>
                                <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"
                                    href="#" data-te-dropdown-item-ref>Action</a>
                            </li>
                            <li>
                                <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"
                                    href="#" data-te-dropdown-item-ref>Another action</a>
                            </li>
                            <li>
                                <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"
                                    href="#" data-te-dropdown-item-ref>Something else here</a>
                            </li>
                        </ul>
                    </div>
                    @auth
                        <!-- Second dropdown container -->
                        <div class="relative" data-te-dropdown-ref>
                            <!-- Second dropdown trigger -->
                            <a class="hidden-arrow flex items-center whitespace-nowrap transition duration-150 ease-in-out motion-reduce:transition-none"
                                href="#" id="dropdownMenuButton2" role="button" data-te-dropdown-toggle-ref
                                aria-expanded="false">
                                <!-- User avatar -->
                                <img src="{{ asset('storage/' . Auth()->user()->image) }}" class="rounded-full"
                                    style="height: 25px; width: 25px" alt="" loading="lazy" />
                            </a>
                            <!-- Second dropdown menu -->
                            <ul class="absolute left-auto right-0 z-[1000] float-left m-0 mt-1 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
                                aria-labelledby="dropdownMenuButton2" data-te-dropdown-menu-ref>
                                <!-- Second dropdown menu items -->
                                <li>
                                    <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"
                                        href="#" data-te-dropdown-item-ref>{{ Auth()->user()->name }}</a>
                                </li>
                                <li>
                                    <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"
                                        href="#" data-te-dropdown-item-ref>Another action</a>
                                </li>
                                <li>

                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        @method('POST')
                                        <button type="submit"
                                            class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30">
                                            <span>logout</span>
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @endauth

                </div>
            </div>


        </div>

        <div id="collapseMenu"
            class='max-lg:hidden max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-40 max-lg:before:inset-0'>
            <button id="toggleClose" class='fixed lg:hidden top-4 right-5'>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 fill-white" viewBox="0 0 320.591 320.591">
                    <path
                        d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                        data-original="#000000"></path>
                    <path
                        d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                        data-original="#000000"></path>
                </svg>
            </button>
            <ul
                class='lg:!flex lg:ml-12 lg:space-x-6 max-lg:space-y-6 max-lg:fixed max-lg:bg-white max-lg:w-1/2 max-lg:min-w-[250px] max-lg:top-0 max-lg:left-0 max-lg:p-4 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50'>
                <li class='px-3 max-lg:border-b max-lg:pb-4 lg:hidden'>
                    <a href=""><img class="max-w-xs w-32" src="{{ URL::asset('assets/images/logo3.png') }}"
                            alt="logo" />

                </li>
                <li class='px-3 max-lg:border-b max-lg:py-2'>
                    <a href='{{ route('home') }}'
                        class='block font-bold text-white transition-all lg:hover:text-primary-100'>Home</a>
                </li>
                <li class='px-3 max-lg:border-b max-lg:py-2'><a href='javascript:void(0)'
                        class='block font-bold text-white transition-all lg:hover:text-primary-100'>categories
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-current inline ml-1.5"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M11.99997 18.1669a2.38 2.38 0 0 1-1.68266-.69733l-9.52-9.52a2.38 2.38 0 1 1 3.36532-3.36532l7.83734 7.83734 7.83734-7.83734a2.38 2.38 0 1 1 3.36532 3.36532l-9.52 9.52a2.38 2.38 0 0 1-1.68266.69734z"
                                clip-rule="evenodd" data-original="#000000" />
                        </svg>
                    </a>
                </li>
                <li class='px-3 max-lg:border-b max-lg:py-2'>
                    <a href='{{ Route('products.index') }}'
                        class='block font-bold transition-all text-white lg:hover:text-primary-100'>Products
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-current inline ml-1.5"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M11.99997 18.1669a2.38 2.38 0 0 1-1.68266-.69733l-9.52-9.52a2.38 2.38 0 1 1 3.36532-3.36532l7.83734 7.83734 7.83734-7.83734a2.38 2.38 0 1 1 3.36532 3.36532l-9.52 9.52a2.38 2.38 0 0 1-1.68266.69734z"
                                clip-rule="evenodd" data-original="#000000" />
                        </svg>
                    </a>
                </li>
                <li class='px-3 max-lg:border-b max-lg:py-2'><a href='javascript:void(0)'
                        class='block font-bold transition-all  text-white lg:hover:text-primary-100'>Blog
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-current inline ml-1.5"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M11.99997 18.1669a2.38 2.38 0 0 1-1.68266-.69733l-9.52-9.52a2.38 2.38 0 1 1 3.36532-3.36532l7.83734 7.83734 7.83734-7.83734a2.38 2.38 0 1 1 3.36532 3.36532l-9.52 9.52a2.38 2.38 0 0 1-1.68266.69734z"
                                clip-rule="evenodd" data-original="#000000" />
                        </svg>
                    </a>
                </li>
                <li class='px-3 max-lg:border-b max-lg:py-2'><a href='javascript:void(0)'
                        class='block font-bold transition-all text-white lg:hover:text-primary-100'>About</a>
                </li>
            </ul>
        </div>


</header>
