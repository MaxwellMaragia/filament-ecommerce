<x-slot name="head">
    {!! seo($SEOData) !!}
</x-slot>
<div>
    <div class="relative">
        <img class="brightness-50 filter lg:h-[500px] object-cover w-full" src="{{ url('storage','home/nairobi.jpg') }}"
             alt="Iphone with Macbook image">
        <div
            class="-translate-x-1/2 -translate-y-1/2 absolute flex flex-col left-1/2 lg:ml-5 max-w-[1200px] mx-auto text-center text-white top-1/2 w-11/12">
            <h1 class="font-bold sm:text-5xl text-4xl">Contact us | {{ env('APP_NAME') }}</h1>
            <p class="lg:pt-5 lg:text-base lg:w-3/5 mx-auto pt-3 text-xs">Get in touch with {{ env('APP_NAME') }} for
                expert advice on solar energy solutions and lighting options. Our dedicated team is here to answer your
                questions and help you make the best choice for your energy needs. Reach out today!</p></div>
    </div>

    <section class="flex-grow w-full">
        <section class="mx-auto text-center my-9">
            <div class="max-w-[600px] mx-auto">
                <div class="border py-5 shadow-md">
                    <div class="flex justify-between pb-5 px-4"><p class="font-bold text-xl">Support</p></div>
                    <div class="flex flex-col px-4">
                        <a class="flex items-center" href="mailto:{{ config('seo.social.email') }}">
                            <svg fill="currentColor" class="h-4 mr-3 text-violet-900 w-4" viewBox="0 0 20 20">
                                <path
                                    d="M3 4a2 2 0 0 0-2 2v1.161l8.441 4.221a1.25 1.25 0 0 0 1.118 0L19 7.162V6a2 2 0 0 0-2-2H3z"></path>
                                <path
                                    d="m19 8.839-7.77 3.885a2.75 2.75 0 0 1-2.46 0L1 8.839V14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V8.839z"></path>
                            </svg>
                            {{ config('seo.social.email') }}</a>
                        <a class="flex items-center" href="tel:{{ config('seo.social.phone') }}">
                            <svg fill="currentColor" class="h-4 mr-3 text-violet-900 w-4" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                      d="M2 3.5A1.5 1.5 0 0 1 3.5 2h1.148a1.5 1.5 0 0 1 1.465 1.175l.716 3.223a1.5 1.5 0 0 1-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 0 0 6.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 0 1 1.767-1.052l3.223.716A1.5 1.5 0 0 1 18 15.352V16.5a1.5 1.5 0 0 1-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 0 1 2.43 8.326 13.019 13.019 0 0 1 2 5V3.5z"
                                      clip-rule="evenodd"></path>
                            </svg>
                            {{ config('seo.social.phone') }}</a>
                        <a class="flex items-center" href="tel:{{ config('seo.social.tel') }}">
                            <svg fill="currentColor" class="h-4 mr-3 text-violet-900 w-4" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                      d="M2 3.5A1.5 1.5 0 0 1 3.5 2h1.148a1.5 1.5 0 0 1 1.465 1.175l.716 3.223a1.5 1.5 0 0 1-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 0 0 6.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 0 1 1.767-1.052l3.223.716A1.5 1.5 0 0 1 18 15.352V16.5a1.5 1.5 0 0 1-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 0 1 2.43 8.326 13.019 13.019 0 0 1 2 5V3.5z"
                                      clip-rule="evenodd"></path>
                            </svg>
                            {{ config('seo.social.tel') }}</a>
                        <a class="flex items-center" href="https://wa.me/{{ config('seo.social.whatsapp') }}">
                            <svg fill="currentColor" class="h-4 mr-3 text-violet-900 w-4" viewBox="0 0 24 24">
                                <path d="M12.001 2.001C6.486 2.001 2 6.486 2 12c0 2.235.749 4.289 2.007 5.943L2 22l4.992-1.998A9.963 9.963 0 0012 22c5.514 0 10-4.486 10-10S17.514 2.001 12.001 2.001zm3.568 14.115l-2.703-1.063c-.448-.181-.954-.142-1.347.117-.404.264-.621.788-.549 1.306l.452 2.525-1.025-.287c-.411-.113-.842.086-1.071.433l-.005.007c-.23.352-.187.792.105 1.095.363.363.899.452 1.396.204l2.426-.91c.69-.262 1.384-.655 1.991-1.116.103-.078.207-.164.305-.258.176-.165.355-.377.447-.594.193-.398.174-.832-.051-1.176-.36-.537-.946-.66-1.413-.497-.242.084-.462.211-.661.354-.424.309-.756.684-.879 1.056-.148.442-.055.938.313 1.155.229.138.478.182.724.107.049-.014.102-.027.152-.043.187-.052.379-.141.563-.251.25-.146.547-.323.775-.52.078-.073.195-.177.333-.303.095-.084.196-.172.294-.263.068-.064.136-.129.193-.196.039-.041.088-.091.152-.155.186-.177.224-.453.096-.675-.135-.224-.393-.307-.648-.217-.19.071-.378.174-.551.292l-.118.078c-.25.186-.474.423-.668.676-.065.084-.139.146-.218.191z"></path>
                            </svg>

                            Chat on whatsapp<span class="text-green-800 underline pl-1"> {{ config('seo.social.whatsapp') }}</span>
                        </a></div>
                </div>
            </div>
            <h2 class="font-bold text-3xl mt-6">Have another question?</h2>
            <p>Complete the form below</p></section>
        <form class="max-w-[600px] mx-auto my-5 pb-10 px-5" wire:submit.prevent="contactFormSubmit">
            @error('name')
            <div class="mt-2 mb-3 bg-red-500 text-sm text-white rounded-lg p-4" role="alert" tabindex="-1"
                 aria-labelledby="hs-solid-color-danger-label">
                <span id="hs-solid-color-danger-label" class="font-bold">Error!</span> {{ $message }}
            </div>
            @enderror
            @error('email')
            <div class="mt-2 mb-3 bg-red-500 text-sm text-white rounded-lg p-4" role="alert" tabindex="-1"
                 aria-labelledby="hs-solid-color-danger-label">
                <span id="hs-solid-color-danger-label" class="font-bold">Error!</span> {{ $message }}
            </div>
            @enderror
            @error('comment')
            <div class="mt-2 mb-3 bg-red-500 text-sm text-white rounded-lg p-4" role="alert" tabindex="-1"
                 aria-labelledby="hs-solid-color-danger-label">
                <span id="hs-solid-color-danger-label" class="font-bold">Error!</span> {{ $message }}
            </div>
            @enderror
            @if (session('success'))
                <div class="mt-2 mb-3 bg-teal-500 text-sm text-white rounded-lg p-4" role="alert" tabindex="-1" aria-labelledby="hs-solid-color-success-label">
                    <span id="hs-solid-color-success-label" class="font-bold">Success</span> {{ session('success') }}
                </div>
            @endif
            <div class="mx-auto">
                <div class="flex gap-2 my-3 w-full">
                    <input class="border px-4 py-2 w-1/2" type="text" placeholder="Full Name" wire:model="name">
                    <input class="border px-4 py-2 w-1/2" type="email" placeholder="E-mail" wire:model="email">
                </div>
                <div data-lastpass-icon-root=""
                     style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div>
            </div>
            <textarea class="border px-4 py-2 w-full" placeholder="Message..." wire:model="comment"></textarea>
            <div class="container flex flex-col justify-between lg:flex-row lg:items:center mt-4">
                <button type="submit" class="bg-amber-400 lg:my-0 my-3 px-4 py-2">
                    <span wire:loading.remove>Send message</span>
                    <span wire:loading>Sending...</span>
                </button>
            </div>
        </form>
    </section>
</div>
