<x-slot name="head">
    {!! seo($SEOData) !!}
</x-slot>
<div>


    <!-- /Menu  -->

    <!-- Offer image  -->

    <div class="relative">
        <img
            class="w-full object-cover brightness-50 filter lg:h-[500px]"
            src="https://images.unsplash.com/photo-1577655197620-704858b270ac?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1280&q=144"
            alt="Living room image"
        />

        <div
            class="absolute top-1/2 left-1/2 mx-auto flex w-11/12 max-w-[1200px] -translate-x-1/2 -translate-y-1/2 flex-col text-center text-white lg:ml-5"
        >
            <h1 class="text-4xl font-bold sm:text-5xl lg:text-left">
                Illuminate Your World
            </h1>
            <p class="pt-3 text-xs lg:w-3/5 lg:pt-5 lg:text-left lg:text-base">
                Welcome to {{ env('APP_NAME') }}, your go-to source for
                energy-efficient lighting. Discover our cutting-edge solar solutions and stylish LEDs to
                enhance your home’s energy efficiency and look.
            </p>
            <button onclick="location.href='/products';"
                    class="mx-auto mt-5 w-1/2 bg-amber-400 px-3 py-1 text-black duration-100 hover:bg-yellow-300 lg:mx-0 lg:h-10 lg:w-2/12 lg:px-10"
            >
                Shop Now
            </button>
        </div>
    </div>

    <!-- /Offer image  -->

    <!-- Cons bages -->

    {{--    <section--}}
    {{--        class="container mx-auto my-8 flex flex-col justify-center gap-3 lg:flex-row"--}}
    {{--    >--}}
    {{--        <!-- 1 -->--}}

    {{--        <div--}}
    {{--            class="mx-5 flex flex-row items-center justify-center border-2 border-yellow-400 py-4 px-5"--}}
    {{--        >--}}
    {{--            <div class="">--}}
    {{--                <svg--}}
    {{--                    xmlns="http://www.w3.org/2000/svg"--}}
    {{--                    fill="none"--}}
    {{--                    viewBox="0 0 24 24"--}}
    {{--                    stroke-width="1.5"--}}
    {{--                    stroke="currentColor"--}}
    {{--                    class="h-6 w-6 text-violet-900 lg:mr-2"--}}
    {{--                >--}}
    {{--                    <path--}}
    {{--                        stroke-linecap="round"--}}
    {{--                        stroke-linejoin="round"--}}
    {{--                        d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12"--}}
    {{--                    />--}}
    {{--                </svg>--}}
    {{--            </div>--}}

    {{--            <div class="ml-6 flex flex-col justify-center">--}}
    {{--                <h3 class="text-left text-xs font-bold lg:text-sm">Free Delivery</h3>--}}
    {{--                <p class="text-light text-center text-xs lg:text-left lg:text-sm">--}}
    {{--                    Orders from $200--}}
    {{--                </p>--}}
    {{--            </div>--}}
    {{--        </div>--}}

    {{--        <!-- 2 -->--}}

    {{--        <div--}}
    {{--            class="mx-5 flex flex-row items-center justify-center border-2 border-yellow-400 py-4 px-5"--}}
    {{--        >--}}
    {{--            <div class="">--}}
    {{--                <svg--}}
    {{--                    xmlns="http://www.w3.org/2000/svg"--}}
    {{--                    fill="none"--}}
    {{--                    viewBox="0 0 24 24"--}}
    {{--                    stroke-width="1.5"--}}
    {{--                    stroke="currentColor"--}}
    {{--                    class="h-6 w-6 text-violet-900 lg:mr-2"--}}
    {{--                >--}}
    {{--                    <path--}}
    {{--                        stroke-linecap="round"--}}
    {{--                        stroke-linejoin="round"--}}
    {{--                        d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z"--}}
    {{--                    />--}}
    {{--                </svg>--}}
    {{--            </div>--}}

    {{--            <div class="ml-6 flex flex-col justify-center">--}}
    {{--                <h3 class="text-left text-xs font-bold lg:text-sm">Money returns</h3>--}}
    {{--                <p class="text-light text-left text-xs lg:text-sm">--}}
    {{--                    30 Days guarantee--}}
    {{--                </p>--}}
    {{--            </div>--}}
    {{--        </div>--}}

    {{--        <!-- 3 -->--}}

    {{--        <div--}}
    {{--            class="mx-5 flex flex-row items-center justify-center border-2 border-yellow-400 py-4 px-5"--}}
    {{--        >--}}
    {{--            <div class="">--}}
    {{--                <svg--}}
    {{--                    xmlns="http://www.w3.org/2000/svg"--}}
    {{--                    fill="none"--}}
    {{--                    viewBox="0 0 24 24"--}}
    {{--                    stroke-width="1.5"--}}
    {{--                    stroke="currentColor"--}}
    {{--                    class="h-6 w-6 text-violet-900 lg:mr-2"--}}
    {{--                >--}}
    {{--                    <path--}}
    {{--                        stroke-linecap="round"--}}
    {{--                        stroke-linejoin="round"--}}
    {{--                        d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z"--}}
    {{--                    />--}}
    {{--                </svg>--}}
    {{--            </div>--}}

    {{--            <div class="ml-6 flex flex-col justify-center">--}}
    {{--                <h3 class="text-left text-xs font-bold lg:text-sm">24/7 Supports</h3>--}}
    {{--                <p class="text-light text-left text-xs lg:text-sm">--}}
    {{--                    Consumer support--}}
    {{--                </p>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}

    <!-- /Cons bages  -->

    <h2 class="mx-auto mb-5 max-w-[1200px] px-5 mt-5 text-3xl">Our Product Categories</h2>

    <!-- Cathegories -->
    <section
        class="mx-auto grid max-w-[1200px] grid-cols-2 px-5 lg:grid-cols-3 lg:gap-5"
    >
        <!-- 1 -->
        @foreach($categories as $category)
            <a href="/categories/{{ $category->slug }}" wire:key="{{ $category->id }}">
                <div class="relative cursor-pointer">
                    <img
                        class="mx-auto h-auto w-auto brightness-50 duration-300 hover:brightness-100"
                        src="{{ url('storage', $category->image) }}"
                        alt="{{ $category->name }}"
                    />

                    <p
                        class="pointer-events-none absolute top-1/2 left-1/2 w-11/12 -translate-x-1/2 -translate-y-1/2 text-center text-white lg:text-xl"
                    >
                        {{ $category->name }}
                    </p>
                </div>
            </a>

            <!-- 2 -->
        @endforeach

    </section>
    <!-- /Categories  -->
    <p class="mx-auto mt-20 mb-5 max-w-[1200px] px-5 text-3xl">Checkout Our Brands</p>

    <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 sm:gap-6 mt-10 max-w-[1200px] mx-auto px-4">
        @foreach($brands as $brand)
            <a class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-slate-900 dark:border-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
               href="/brands/{{ $brand->slug }}" wire:key="{{ $brand->id }}">
                <div class="p-4 md:p-5">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <img class="h-[2.375rem] w-[2.375rem] rounded-full"
                                 src="{{ url('storage', $brand->image) }}" alt="{{ $brand->name }}">
                            <div class="ms-3">
                                <h3 class="group-hover:text-blue-600 font-semibold text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200">
                                    {{ $brand->name }}
                                </h3>
                            </div>
                        </div>
                        <div class="ps-3">
                            <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24"
                                 height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m9 18 6-6-6-6"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>


    <!-- Special offer card -->

    {{--    <div class="mx-auto max-w-[1200px] px-5">--}}
    {{--        <section--}}
    {{--            class="mt-10 flex max-w-[1200px] justify-between bg-violet-900 px-5"--}}
    {{--        >--}}
    {{--            <div class="py-8 px-3 lg:px-16">--}}
    {{--                <p class="text-white">ONLINE EXCLUSIVE</p>--}}
    {{--                <h2 class="pt-6 text-5xl font-bold text-yellow-400">15% OFF</h2>--}}
    {{--                <p class="pt-4 text-white">--}}
    {{--                    ACCENT CHAIRS, <br/>--}}
    {{--                    TABLES & OTTOMANS--}}
    {{--                </p>--}}
    {{--                <button--}}
    {{--                    href="#"--}}
    {{--                    class="mt-6 bg-amber-400 px-4 py-2 duration-100 hover:bg-yellow-300"--}}
    {{--                >--}}
    {{--                    Shop now--}}
    {{--                </button>--}}
    {{--            </div>--}}

    {{--            <img--}}
    {{--                class="-mr-5 hidden w-[550px] object-cover md:block"--}}
    {{--                src="./assets/images/sale-bage.jpeg"--}}
    {{--                alt="Rainbow credit card with macbook on a background"--}}
    {{--            />--}}
    {{--        </section>--}}
    {{--    </div>--}}

    <!-- /Special offer card -->

    <p class="mx-auto mt-20 mb-5 max-w-[1200px] px-5 text-3xl pb-5">Latest In Our Store</p>

    <!-- Recommendations -->
    <section
        class="mx-auto grid max-w-[1200px] grid-cols-2 gap-3 px-5 pb-10 lg:grid-cols-4"
    >
        <!-- 1 -->
        @foreach($products as $product)
            <div class="flex flex-col">
                <div class="relative flex">
                    <a href="/products/{{ $product->slug }}">
                        <img
                            class=""
                            src="{{ url('storage',$product->images[0]) }}"
                            alt="{{ $product->name }}"
                        />
                    </a>
                </div>

                <div>
                    <a href="/products/{{ $product->slug }}" class="hover:underline hover:text-blue-500">
                        <p class="mt-2">{{ $product->name }}</p>
                    </a>
                    <p class="font-medium text-violet-900">
                        {{ Number::currency($product->price, 'Ksh') }}
                    </p>

                    <div>
                        <button
                            wire:click.prevent='addToCart({{ $product->id }})'
                            class="bg-violet-900 h-10 my-5 text-white w-full">
                                <span
                                    wire:loading.remove wire:target="addToCart({{ $product->id }})"
                                >Add to cart
                                </span>
                            <span wire:loading wire:target="addToCart({{ $product->id }})">Adding...</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- 2 -->
        @endforeach
    </section>
    <!-- /Recommendations -->

    <!-- Desktop Footer  -->
</div>
<x-slot name="foot">
    {!! $schema !!}
</x-slot>
