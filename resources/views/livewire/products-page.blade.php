<x-slot name="head">
    {!! seo($SEOData) !!}
</x-slot>
<div>
    <nav class="max-w-[1200px] mt-4 mx-auto px-5 w-full">
        <ul class="flex items-center">
            <li class="cursor-pointer"><a href="/">
                    <svg fill="currentColor" class="h-5 w-5" viewBox="0 0 24 24">
                        <path
                            d="M11.47 3.84a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.06l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 0 0 1.061 1.06l8.69-8.69z"></path>
                        <path
                            d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.43z"></path>
                    </svg>
                </a></li>
            <li><span class="mx-2 text-gray-500">&gt;</span></li>
            <li class="text-gray-500">Products</li>
        </ul>
    </nav>
    <div class="gap-3 max-w-[1200px] mx-auto py-5 px-5">
        <h1 class="text-2xl w-full font-semibold">Our wide range of products</h1>
    </div>
    <section class="border-b container flex-grow lg:flex lg:flex-row lg:py-10 max-w-[1200px] mx-auto py-5">
        <div>
            <div class="flex items-center justify-between mb-5 px-5">
                <div class="flex gap-3">
                    <select wire:model.live="sort"
                            class="block w-40 text-base cursor-pointer dark:text-gray-400 dark:bg-gray-900">
                        <option value="latest">Sort by latest</option>
                        <option value="price">Sort by Price</option>
                    </select>

                </div>
            </div>
            <section class="gap-3 grid grid-cols-2 lg:grid-cols-3 max-w-[1200px] mx-auto pb-10 px-5">
                @foreach($products as $product)
                    <div class="flex flex-col">
                        <div class="flex relative">
                            <a href="/products/{{ $product->slug }}">
                                <img
                                    class="w-full h-auto md:w-64 md:h-29 lg:w-80 lg:h-29 object-cover"
                                    src="{{ url('storage',$product->images[0]) }}" alt="{{ $product->name }}">
                            </a>
                        </div>
                        <div>
                            <p class="mt-2">
                                <a href="/products/{{ $product->slug }}"
                                   class="hover:text-blue-700">{{ $product->name }}</a>
                            </p>
                            <p class="font-medium text-violet-900"> {{ Number::currency($product->price, 'Ksh') }}
                            </p>
                            <div class="flex items-center">
                                <p class="text-gray-400 text-sm">
                                    Category: <a href="/categories/{{ $product->category->slug }}"
                                                 class="hover:text-blue-700 underline">{{ $product->category->name }}</a>
                                </p>
                            </div>
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
                @endforeach
            </section>
        </div>
    </section>

</div>
<x-slot name="foot">
    {!! $schema !!}
</x-slot>
