<x-slot name="head">
    <title>{{ env('APP_NAME').' - Change password' }}</title>
    <meta name="robots" content="noindex, nofollow">
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
            <li class="text-gray-500">Account</li>
        </ul>
    </nav>
    <section class="border-b container flex-grow lg:flex lg:flex-row lg:py-10 max-w-[1200px] mx-auto py-5 w-full">

        @livewire('partials.account-sidebar')
        <section class="gap-3 grid grid-cols-1 max-w-[1200px] pb-10 px-5 w-full">
            <div class="py-5">

                <form class="flex flex-col gap-3 w-full" wire:submit.prevent="change_password">
                    @if (session('error'))
                        <div class="mt-2 mb-3 bg-red-500 text-sm text-white rounded-lg p-4" role="alert"
                             tabindex="-1" aria-labelledby="hs-solid-color-danger-label">
                            <span id="hs-solid-color-danger-label" class="font-bold">Error!</span>
                            {{ session('error') }}
                        </div>
                    @endif
                    @error('password')
                        <div class="mt-2 mb-3 bg-red-500 text-sm text-white rounded-lg p-4" role="alert"
                             tabindex="-1" aria-labelledby="hs-solid-color-danger-label">
                            <span id="hs-solid-color-danger-label" class="font-bold">Error!</span>
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="flex flex-col w-full"><label class="flex" for="name">New Password<span
                                class="after:content-['*'] after:ml-0.5 after:text-red-500 block font-medium text-slate-700 text-sm"></span></label>
                        <input class="border lg:w-1/2 px-4 py-2 w-full" type="password" name="password" wire:model="password">
                        <div data-lastpass-icon-root=""
                             style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div>
                    </div>
                    <div class="flex flex-col"><label class="flex" for="">Repeat New Password<span
                                class="after:content-['*'] after:ml-0.5 after:text-red-500 block font-medium text-slate-700 text-sm"></span></label>
                        <input class="border lg:w-1/2 px-4 py-2 w-full" type="password" name="password_confirmation" wire:model="password_confirmation">
                        <div data-lastpass-icon-root=""
                             style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div>
                    </div>
                    <button type="submit" class="bg-violet-900 mt-4 px-4 py-2 text-white w-40"> Save changes</button>
                </form>
            </div>
        </section>

    </section>
</div>

