<x-slot name="head">
    {!! seo($SEOData) !!}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
</x-slot>
<div>
    <nav class="max-w-[1200px] mt-4 mx-auto px-5 w-full">
        <ul class="flex items-center">
            <li class="cursor-pointer"><a href="/index.html">
                    <svg fill="currentColor" class="h-5 w-5" viewBox="0 0 24 24">
                        <path
                            d="M11.47 3.84a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.06l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 0 0 1.061 1.06l8.69-8.69z"></path>
                        <path
                            d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.43z"></path>
                    </svg>
                </a></li>
            <li><span class="mx-2 text-gray-500">&gt;</span></li>
            <li class="text-gray-500">{{ $product->name }}</li>
        </ul>
    </nav>
    <div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
        <section class=" bg-white py-11 font-poppins dark:bg-gray-800">
            <div class="max-w-6xl px-4 py-4 mx-auto lg:py-8 md:px-6">
                <div class="flex flex-wrap -mx-4">
                    <div class="w-full mb-8 md:w-1/2 md:mb-0"
                         x-data="{ mainImage: '{{ url('storage', $product->images[0]) }}' }">
                        <div class="">
                            <div class="relative mb-6 lg:mb-10 lg:h-2/4 ">
                                <img x-bind:src="mainImage" alt="" class="object-cover w-full lg:h-full ">
                            </div>
                            <div class="flex-wrap hidden md:flex ">

                                @foreach($product->images as $image)
                                    <div class="w-1/2 p-2 sm:w-1/4"
                                         x-on:click="mainImage='{{ url('storage', $image) }}'">
                                        <img src="{{ url('storage', $image) }}" alt="{{ $product->name }}"
                                             class="object-cover w-full lg:h-20 cursor-pointer hover:border hover:border-blue-500">
                                    </div>
                                @endforeach
                            </div>
                            <div class="px-6 pb-6 mt-6 border-t border-gray-300 dark:border-gray-400 ">
                                <div class="flex flex-wrap items-center mt-6">
                                    <span class="mr-2">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                           class="w-4 h-4 text-gray-700 dark:text-gray-400 bi bi-truck"
                                           viewBox="0 0 16 16">
                                        <path
                                            d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z">
                                        </path>
                                      </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 md:w-1/2 ">
                        <div class="lg:pl-20">
                            <div class="lg:px-5 mx-auto px-5"><h1
                                    class="font-bold lg:pt-0 pt-3 text-2xl">{{ $product->name }}</h1>
                                <p class="font-bold mt-5"> Availability:
                                    @if($product->in_stock)
                                        <span class="text-green-600">In Stock</span>
                                    @else
                                        <span class="text-red-600">Out of Stock</span>
                                    @endif
                                </p>
                                <p class="font-bold">Brand: <span class="font-normal text-blue-500 hover:underline"><a href="/brands/{{ $product->brand->slug }}">{{ $product->brand->name }}</a></span>
                                </p>
                                <p class="font-bold"> Category: <span class="font-normal text-blue-500 hover:underline"><a href="/categories/{{ $product->category->slug }}">{{ $product->category->name }}</a></span></p>

                                <p class="font-bold mt-4 text-4xl text-violet-900"> {{ Number::currency($product->price,'Ksh') }} </p>
                                <p class="leading-5 pt-5 text-gray-500 text-sm">
                                    {!! Str::markdown($product->description) !!}
                                </p>

                                <div class="mt-6"><p class="pb-2 text-gray-500 text-xs">Quantity</p>
                                    <div class="flex">
                                        <button
                                            wire:click='decreaseQty'
                                            class="active:ring-2 active:ring-gray-500 border cursor-pointer duration-100 flex focus:ring-2 focus:ring-gray-500 h-8 hover:bg-neutral-100 items-center justify-center w-8">
                                            −
                                        </button>
                                        <div
                                            wire:model="quantity"
                                            class="active:ring-gray-500 border-b border-t cursor-text flex h-8 items-center justify-center w-8">
                                            {{ $quantity }}
                                        </div>
                                        <button
                                            wire:click='increaseQty'
                                            class="active:ring-2 active:ring-gray-500 border cursor-pointer duration-100 flex focus:ring-2 focus:ring-gray-500 h-8 hover:bg-neutral-100 items-center justify-center w-8">
                                            +
                                        </button>
                                    </div>
                                </div>
                                <div class="flex flex-row gap-6 items-center mt-7 ">
                                    @if($product->in_stock)
                                        <button
                                            wire:click='addToCart({{ $product->id }})'
                                            class="bg-violet-900 duration-100 flex h-12 hover:bg-blue-800 text-white md:w-1/2 sm:block px-6 py-3">

                                            <span
                                                wire:loading.remove
                                                wire:target='addToCart({{ $product->id }})'>
                                            Add to cart</span>
                                            <span
                                                wire:loading
                                                wire:target="addToCart({{ $product->id }})"
                                            >Adding...</span>
                                        </button>
                                    @endif
                                </div>
                                <div class="flex-1 mt-6">
                                    <p class="text-lg text-left">Share the product to a friend on:</p>
                                    <hr class="my-2">
                                    <div class="flex flex-wrap">
                                        {!! social_share_buttons() !!}
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<x-slot name="foot">
    {!! $schema !!}
</x-slot>
