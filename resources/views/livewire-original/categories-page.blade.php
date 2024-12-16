<x-slot name="head">
    {!! seo($SEOData) !!}
</x-slot>
<div>
    <main class="my-8">
        <div class="container mx-auto px-6">
            <div class="mt-16">
                <h1 class="text-4xl text-center font-extrabold dark:text-white">{{ $category->name }}</h1>
                @if($products->count()>0)
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
                @else
                    <div class="p-4 mb-4 text-sm text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300 mt-6" role="alert">

                        <h2 class="font-medium">Currently no products for {{ $category->name }}</h2><br>
                        Explore our other categories :
                        @php
                            $categoryCount = count($categories);
                        @endphp

                        @foreach($categories as $index => $category)
                            <a href="/categories/{{ $category->slug }}" class="link text-blue-500 hover:underline">{{ $category->name }}</a>
                            @if($index < $categoryCount - 2)
                                ,
                            @elseif($index === $categoryCount - 2)
                                and
                            @endif
                        @endforeach
                    </div>
                @endif
            </div>
            <div class="flex justify-end mt-6">
                {!! $products->links() !!}
            </div>
        </div>
    </main>
</div>
