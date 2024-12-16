<div>
    <section class="flex-shrink-0 hidden lg:block px-4 w-[300px]">
        <div class="border-b py-5">
            <div class="flex items-center"><img width="40px" height="40px" class="object-cover rounded-full"
                                                src="{{ url('storage','home/avatar.webp') }}" alt="Red woman portrait">
                <div class="ml-5"><p class="font-medium text-gray-500">Hello,</p>
                    <p class="font-bold">{{ auth()->user()->name }}</p></div>
            </div>
        </div>
        <div class="border-b flex py-5">
            <div class="w-full">
                <div class="flex w-full">
                    <div class="flex flex-col gap-2">
                        <a href="/account"
                           class="flex font-medium gap-2 items-center  {{ request()->is('account')? 'text-violet-900' : 'text-black' }}">
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" class="h-5 w-5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5zm6-10.125a1.875 1.875 0 1 1-3.75 0 1.875 1.875 0 0 1 3.75 0zm1.294 6.336a6.721 6.721 0 0 1-3.17.789 6.721 6.721 0 0 1-3.168-.789 3.376 3.376 0 0 1 6.338 0z"></path>
                            </svg>
                            Profile</a>

                        <a href="/change-password" class="duration-100 hover:text-yellow-400 text-gray-500 {{ request()->is('change-password')? 'text-violet-900' : 'text-gray-500' }}">Change
                            password</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-b flex py-5">
            <div class="flex w-full">
                <div class="flex flex-col gap-2">
                    <a href="/my-orders" class="active:text-violet-900 flex font-medium gap-2 items-center {{ request()->is('my-orders')? 'text-violet-900' : 'text-black' }}">
                        <svg fill="currentColor" class="h-5 w-5" viewBox="0 0 24 24">
                            <path
                                d="M3.375 3C2.339 3 1.5 3.84 1.5 4.875v.75c0 1.036.84 1.875 1.875 1.875h17.25c1.035 0 1.875-.84 1.875-1.875v-.75C22.5 3.839 21.66 3 20.625 3H3.375z"></path>
                            <path fill-rule="evenodd"
                                  d="m3.087 9 .54 9.176A3 3 0 0 0 6.62 21h10.757a3 3 0 0 0 2.995-2.824L20.913 9H3.087zm6.163 3.75A.75.75 0 0 1 10 12h4a.75.75 0 0 1 0 1.5h-4a.75.75 0 0 1-.75-.75z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        My Order History</a></div>
            </div>
        </div>

        <div class="flex py-5">
            <div class="flex w-full">
                <div class="flex flex-col gap-2">
                    <a href="/logout"
                                                    class="active:text-violet-900 flex font-medium gap-2 items-center">
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" class="h-5 w-5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9"></path>
                        </svg>
                        Log Out</a></div>
            </div>
        </div>
    </section>

    {{--mobile--}}
    <div class="flex items-center justify-between mb-5 md:hidden px-5">
        <div class="flex gap-3">
            <div class="py-5">
                <div class="flex items-center">
                    <img width="40px" height="40px"
                         class="object-cover rounded-full"
                         src="{{ url('storage','home/avatar.webp') }}" alt="Red woman portrait">
                    <div class="ml-5"><p class="font-medium text-gray-500">Hello,</p>
                        <p class="font-bold">{{ auth()->user()->name }}</p></div>
                </div>
            </div>
        </div>
        <div class="flex gap-3">
            <a href="/account" class="bg-amber-400 border px-2 py-2"> Profile settings</a>
        </div>
    </div>

</div>
