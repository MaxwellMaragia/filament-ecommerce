<x-slot name="head">
    {!! seo($SEOData) !!}
</x-slot>
<div>
    <main class="my-8">
        <div class="container mx-auto px-6">
            <div class="h-64 rounded-md overflow-hidden bg-cover bg-center"
                 style="background-image: url('https://images.unsplash.com/photo-1577655197620-704858b270ac?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1280&q=144')">
                <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                    <div class="px-10 max-w-xl">
                        <h1 class="text-2xl text-white font-semibold">Illuminate Your World</h1>
                        <p class="mt-2 text-gray-400">Welcome to {{ env('APP_NAME') }}, your go-to source for
                            energy-efficient lighting. Discover our cutting-edge solar solutions and stylish LEDs to
                            enhance your home’s energy efficiency and look.</p>
                        <button onclick="location.href='/products';"
                                class="flex items-center mt-4 px-3 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                            <span>Shop Now</span>
                            <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                 stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto mt-20">
                <h2 class="mb-5 text-center text-4xl font-extra-bold text-gray-700 dark:text-white sm:text-[40px]/[48px] space-x-58">
                    Product categories</h2>
                <p class="text-center mb-5 text-lg text-body-color text-slate-500  dark:text-dark-6">Explore our diverse
                    product categories to find the perfect solar and lighting solutions for your needs. With our
                    high-quality products and exceptional customer service, we’re here to help you brighten your world
                    sustainably. Shop now and experience the best in solar energy and lighting innovations!</p>
                <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 sm:gap-6 mt-10">
                    @foreach($categories as $category)
                        <a class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-slate-900 dark:border-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                           href="/categories/{{ $category->slug }}" wire:key="{{ $category->id }}">
                            <div class="p-4 md:p-5">
                                <div class="flex justify-between items-center">
                                    <div class="flex items-center">
                                        <img class="h-[2.375rem] w-[2.375rem] rounded-full"
                                             src="{{ url('storage', $category->image) }}" alt="{{ $category->name }}">
                                        <div class="ms-3">
                                            <h3 class="group-hover:text-blue-600 font-semibold text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200">
                                                {{ $category->name }}
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
            </div>

            <div class="mt-16">
                <h2 class="mb-5 text-center text-4xl font-extra-bold text-gray-700 dark:text-white sm:text-[40px]/[48px] space-x-58">
                    Latest in our catalog</h2>
                <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
                    @foreach($products as $product)
                        <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                            <div class="flex items-end justify-end h-56 w-full bg-cover"
                                 style="background-image: url({{ url('storage',$product->images[0]) }})">
                                <button wire:click.prevent='addToCart({{ $product->id }})'
                                        class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                    <svg wire:loading.remove wire:target="addToCart({{ $product->id }})" class="h-5 w-5"
                                         fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path
                                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                    <span wire:loading wire:target="addToCart({{ $product->id }})">Adding...</span>
                                </button>

                            </div>
                            <div class="px-5 py-3">
                                <a href="/products/{{ $product->slug }}"><h3
                                        class="text-gray-700 text-sm">{{ $product->name }}</h3></a>
                                <span class="text-gray-500 mt-2">{{ Number::currency($product->price, 'Ksh') }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <section class="py-8 mt-5">

                <div class="container py-8 px-6 mx-auto">

                    <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl mb-8"
                       href="#">
                        About
                    </a>

                    <p class="mt-8">At {{ env('APP_NAME') }}, we are dedicated to revolutionizing the way you power and
                        illuminate your home. Specializing in high-quality solar panels and energy-efficient lighting
                        solutions, we are committed to providing innovative products that enhance your home's energy
                        efficiency and aesthetic appeal. Our mission is to offer eco-friendly and cost-effective
                        solutions that not only brighten your space but also contribute to a sustainable future. With a
                        focus on cutting-edge technology and customer satisfaction, we strive to deliver exceptional
                        value and support every step of the way. Discover how we can help you save on energy costs and
                        make a positive impact on the environment.</p>
                    <p class="mt-8 mb-8">We offer a range of:
                        <br>
                        @php
                            $categoryCount = count($categories);
                        @endphp

                        @foreach($categories as $index => $category)
                            <a href="/categories/{{ $category->slug }}" class="link">{{ $category->name }}</a>
                            @if($index < $categoryCount - 2)
                                ,
                            @elseif($index === $categoryCount - 2)
                                and
                            @endif
                        @endforeach

                    </p>

                </div>

            </section>

        </div>
    </main>
</div>
<x-slot name="foot">
   {!! $schema !!}
</x-slot>
