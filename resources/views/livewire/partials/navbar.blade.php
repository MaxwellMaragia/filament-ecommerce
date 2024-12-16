<div>
    <!-- Header -->
    <header
        class="mx-auto flex h-16 max-w-[1200px] items-center justify-between px-5"
    >
        <a href="/">
            <img
                class="cursor-pointer sm:h-auto sm:w-auto" height="36px"
                src="{{ url('storage','home/logo-50.png') }}"  alt="{{ env('APP_NAME') }}"
            />
        </a>

        <div class="md:hidden">
            <button @click="mobileMenuOpen = ! mobileMenuOpen">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="h-8 w-8"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
                    />
                </svg>
            </button>
        </div>

{{--        <form class="hidden h-9 w-2/5 items-center border md:flex">--}}
{{--            <svg--}}
{{--                xmlns="http://www.w3.org/2000/svg"--}}
{{--                fill="none"--}}
{{--                viewBox="0 0 24 24"--}}
{{--                stroke-width="1.5"--}}
{{--                stroke="currentColor"--}}
{{--                class="mx-3 h-4 w-4"--}}
{{--            >--}}
{{--                <path--}}
{{--                    stroke-linecap="round"--}}
{{--                    stroke-linejoin="round"--}}
{{--                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"--}}
{{--                />--}}
{{--            </svg>--}}

{{--            <input--}}
{{--                class="hidden w-11/12 outline-none md:block"--}}
{{--                type="search"--}}
{{--                placeholder="Search"--}}
{{--            />--}}

{{--            <button class="ml-auto h-full bg-amber-400 px-4 hover:bg-yellow-300">--}}
{{--                Search--}}
{{--            </button>--}}
{{--        </form>--}}

        <div class="hidden gap-3 md:!flex">

            <a
                href="/cart"
                class="flex cursor-pointer flex-col items-center justify-center"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                    class="h-6 w-6"
                >
                    <path
                        fill-rule="evenodd"
                        d="M7.5 6v.75H5.513c-.96 0-1.764.724-1.865 1.679l-1.263 12A1.875 1.875 0 004.25 22.5h15.5a1.875 1.875 0 001.865-2.071l-1.263-12a1.875 1.875 0 00-1.865-1.679H16.5V6a4.5 4.5 0 10-9 0zM12 3a3 3 0 00-3 3v.75h6V6a3 3 0 00-3-3zm-3 8.25a3 3 0 106 0v-.75a.75.75 0 011.5 0v.75a4.5 4.5 0 11-9 0v-.75a.75.75 0 011.5 0v.75z"
                        clip-rule="evenodd"
                    />
                </svg>

                <p class="text-xs">
                    Cart
                    <span class="rounded-full bg-red-600 w-4 h-4 top right p-0 px-1 m-0 text-white font-mono text-sm  leading-tight text-center">
                            {{ $total_count }}
                        </span>
                </p>
            </a>

            <a
                href="/account"
                class="relative flex cursor-pointer flex-col items-center justify-center"
            >
          <span class="absolute bottom-[33px] right-1 flex h-2 w-2">
            <span
                class="absolute inline-flex h-full w-full animate-ping rounded-full bg-red-400 opacity-75"
            ></span>
            <span
                class="relative inline-flex h-2 w-2 rounded-full bg-red-500"
            ></span>
          </span>

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="h-6 w-6"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"
                    />
                </svg>

                <p class="text-xs">Account</p>
            </a>
        </div>
    </header>
    <!-- /Header -->

    <!-- Burger menu  -->
    <section
        x-show="mobileMenuOpen"
        @click.outside="mobileMenuOpen = false"
        class="absolute left-0 right-0 z-50 h-screen w-full bg-white"
        style="display: none"
    >
        <div class="mx-auto">
            <div class="mx-auto flex w-full justify-center gap-3 py-4">

                <a
                    href="/cart"
                    class="flex cursor-pointer flex-col items-center justify-center"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        class="h-6 w-6"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M7.5 6v.75H5.513c-.96 0-1.764.724-1.865 1.679l-1.263 12A1.875 1.875 0 004.25 22.5h15.5a1.875 1.875 0 001.865-2.071l-1.263-12a1.875 1.875 0 00-1.865-1.679H16.5V6a4.5 4.5 0 10-9 0zM12 3a3 3 0 00-3 3v.75h6V6a3 3 0 00-3-3zm-3 8.25a3 3 0 106 0v-.75a.75.75 0 011.5 0v.75a4.5 4.5 0 11-9 0v-.75a.75.75 0 011.5 0v.75z"
                            clip-rule="evenodd"
                        />
                    </svg>

                    <p class="text-xs">Cart
                        <span class="rounded-full bg-red-600 w-4 h-4 top right p-0 px-1 m-0 text-white font-mono text-sm  leading-tight text-center">
                            {{ $total_count }}
                        </span>
                    </p>
                </a>

                <a
                    href="/account"
                    class="relative flex cursor-pointer flex-col items-center justify-center"
                >
            <span class="absolute bottom-[33px] right-1 flex h-2 w-2">
              <span
                  class="absolute inline-flex h-full w-full animate-ping rounded-full bg-red-400 opacity-75"
              ></span>
              <span
                  class="relative inline-flex h-2 w-2 rounded-full bg-red-500"
              ></span>
            </span>

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="h-6 w-6"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"
                        />
                    </svg>

                    <p class="text-xs">Account</p>
                </a>
            </div>

{{--            <form class="my-4 mx-5 flex h-9 items-center border">--}}
{{--                <svg--}}
{{--                    xmlns="http://www.w3.org/2000/svg"--}}
{{--                    fill="none"--}}
{{--                    viewBox="0 0 24 24"--}}
{{--                    stroke-width="1.5"--}}
{{--                    stroke="currentColor"--}}
{{--                    class="mx-3 h-4 w-4"--}}
{{--                >--}}
{{--                    <path--}}
{{--                        stroke-linecap="round"--}}
{{--                        stroke-linejoin="round"--}}
{{--                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"--}}
{{--                    />--}}
{{--                </svg>--}}

{{--                <input--}}
{{--                    class="hidden w-11/12 outline-none md:block"--}}
{{--                    type="search"--}}
{{--                    placeholder="Search"--}}
{{--                />--}}

{{--                <button--}}
{{--                    type="submit"--}}
{{--                    class="ml-auto h-full bg-amber-400 px-4 hover:bg-yellow-300"--}}
{{--                >--}}
{{--                    Search--}}
{{--                </button>--}}
{{--            </form>--}}
            <ul class="text-center font-medium">
                <li class="py-2"><a href="/">Home</a></li>
                <li class="py-2"><a href="/products">Products</a></li>
                <li class="py-2"><a href="/contact-us">Contact Us</a></li>
            </ul>
            @auth
                <p class="text-center font-semibold pt-10 pb-5 text-purple-700">Account</p>
                <ul class="text-center font-medium">

                    <li class="py-2"><a href="/account">Profile</a></li>
                    <li class="py-2"><a href="/update-profile">Change name</a></li>
                    <li class="py-2"><a href="/change-password">Change password</a></li>
                    <li class="py-2"><a href="/my-orders">My orders</a></li>
                    <li class="py-2"><a href="/logout">Logout</a></li>
                </ul>
            @endauth
        </div>
    </section>
    <!-- /Burger menu  -->

    <!-- Nav bar -->
    <!-- hidden on small devices -->

    <nav class="relative bg-violet-900">
        <div
            class="mx-auto hidden h-12 w-full max-w-[1200px] items-center md:flex"
        >
            <button
                @click="desktopMenuOpen = ! desktopMenuOpen"
                class="ml-5 flex h-full w-40 cursor-pointer items-center justify-center bg-amber-400"
            >
                <div class="flex justify-around" href="#">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="mx-1 h-6 w-6"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
                        />
                    </svg>

                    All categories
                </div>
            </button>

            <div class="mx-7 flex gap-8">
                <a
                    class="font-light {{ request()->is('/')? 'text-yellow-400' : 'text-white' }} duration-100 hover:text-yellow-400 hover:underline"
                    href="/"
                >Home</a
                >
                <a
                    class="font-light {{ request()->is('products')? 'text-yellow-400' : 'text-white' }} duration-100 hover:text-yellow-400 hover:underline"
                    href="/products"
                >Products</a
                >

                <a
                    class="font-light {{ request()->is('contact-us')? 'text-yellow-400' : 'text-white' }} duration-100 hover:text-yellow-400 hover:underline"
                    href="/contact-us"
                >Contact Us</a
                >
            </div>

            <div class="ml-auto flex gap-4 px-5">
                @guest
                    <a
                        class="font-light {{ request()->is('login')? 'text-yellow-400' : 'text-white' }} duration-100 hover:text-yellow-400 hover:underline"
                        href="/login"
                    >Login</a>

                    <span class="text-white">&#124;</span>

                    <a
                        class="font-light {{ request()->is('register')? 'text-yellow-400' : 'text-white' }} duration-100 hover:text-yellow-400 hover:underline"
                        href="/register"
                    >Sign Up</a>
                @endguest
                @auth
                        <a
                            class="font-light {{ request()->is('account')? 'text-yellow-400' : 'text-white' }} duration-100 hover:text-yellow-400 hover:underline"
                            href="/account"
                        >{{ auth()->user()->name }}</a>

                        <span class="text-white">&#124;</span>

                        <a
                            class="font-light text-white duration-100 hover:text-yellow-400 hover:underline"
                            href="/logout"
                        >Logout</a>
                @endauth
            </div>
        </div>
    </nav>
    <!-- /Nav bar -->

    <section
        x-show="desktopMenuOpen"
        @click.outside="desktopMenuOpen = false"
        class="absolute left-0 right-0 z-10 w-full border-b border-r border-l bg-white"
        style="display: none"
    >
        <div class="mx-auto flex max-w-[1200px] py-10">

            <div class="flex w-full justify-between">
                <div class="flex gap-6">
                    <div class="mx-5">
                        <p class="font-medium text-gray-500">CATEGORIES</p>
                        <ul class="text-sm leading-8">
                            @foreach($categories as $category)
                            <li class="hover:text-blue-700"><a href="/categories/{{ $category->slug }}"> {{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="mx-5">
                        <p class="font-medium text-gray-500">BRANDS</p>
                        <ul class="text-sm leading-8">
                            @foreach($brands as $brand)
                            <li class="hover:text-blue-700"><a href="/brands/{{ $brand->slug }}">{{ $brand->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu  -->

</div>
