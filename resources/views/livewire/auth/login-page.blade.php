<x-slot name="head">
    <title>{{ env('APP_NAME').' - Login' }}</title>
    <meta name="robots" content="noindex, nofollow">
</x-slot>
<div>
    <section class="flex-grow max-w-[1200px] mb-10 mt-10 mx-auto px-5 w-full">
        <div class="border container md:w-1/2 mx-auto px-5 py-5 shadow-sm">
            <div><p class="font-bold text-4xl">LOGIN</p>
                <p>Welcome back, customer!</p></div>
            <form class="flex flex-col mt-6" wire:submit.prevent="login">
                @error('login')
                <div class="mt-2 mb-3 bg-red-500 text-sm text-white rounded-lg p-4" role="alert" tabindex="-1" aria-labelledby="hs-solid-color-danger-label">
                    <span id="hs-solid-color-danger-label" class="font-bold">Login failed</span> Invalid email or password
                </div>
                @enderror

                <label for="email">Email Address</label>
                <input
                    wire:model="email" name="email" id="email"
                    class="border mb-3 mt-3 px-4 py-2" type="email" placeholder="youremail@domain.com">
                <label
                    for="email">Password</label>
                <input
                    id="password" name="password" wire:model="password"
                    class="border mt-3 px-4 py-2" type="password" placeholder="Enter your password">

            <div class="flex justify-between mt-4">
                <a href="/forgot" class="text-violet-900">Forgot password</a></div>
            <button type="submit" class="bg-violet-900 my-5 py-2 text-white w-full"> LOGIN</button>
            <p class="text-center text-gray-500">OR LOGIN WITH</p>
            <div class="flex gap-2 my-5">
                <button class="bg-blue-800 py-2 text-white w-1/2">FACEBOOK</button>
                <button class="bg-orange-500 py-2 text-white w-1/2">GOOGLE</button>
            </div>
            <p class="text-center"> Don`t have account? <a href="/register" class="text-violet-900">Register now</a>
            </p>
            <div data-lastpass-icon-root=""
                 style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div>
            <div data-lastpass-icon-root=""
                 style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div>
            </form>
        </div>
    </section>
</div>
