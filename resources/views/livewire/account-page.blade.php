<x-slot name="head">
    <title>{{ env('APP_NAME').' - Account' }}</title>
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

        <section class="gap-3 grid grid-cols-1 lg:grid-cols-3 max-w-[1200px] pb-10 px-5 w-full">
            <div>
                <div class="border py-5 shadow-md">
                    <div class="flex justify-between pb-5 px-4"><p class="font-bold">Personal Profile</p> <a
                            class="text-sm text-violet-900" href="/update-profile">Edit</a></div>
                    <div class="px-4"><p>{{ auth()->user()->name }}</p>
                        <p>{{ auth()->user()->email }}</p>
                    </div>
                </div>
            </div>
           @if($saved_address)
                <div>
                    <div class="border py-5 shadow-md">
                        <div class="flex justify-between pb-5 px-4">
                            <p class="font-bold">Last saved address</p>
                        </div>
                        <div class="px-4">
                            <p>{{ $first_name.' '.$last_name }}</p>
                            <p>Kenya, {{ $city }}</p>
                            <p>{{ $street_address }}</p>
                            <p>{{ $phone }}</p>
                        </div>
                    </div>
                </div>
           @endif
        </section>
    </section>
</div>
