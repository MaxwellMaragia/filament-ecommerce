<x-slot name="head">
    <title>{{ env('APP_NAME').' - Register' }}</title>
    <meta name="robots" content="noindex, nofollow">
</x-slot>
<div>
    <section class="flex-grow max-w-[1200px] mb-10 mt-10 mx-auto px-5 w-full">
        <div class="border container md:w-1/2 mx-auto px-5 py-5 shadow-sm">
            <div><p class="font-bold text-4xl">CREATE AN ACCOUNT</p>
                <p>Register for new customer</p></div>
            <form class="flex flex-col mt-6" wire:submit.prevent='save'>
                <label for="name">Full Name</label>
                <input
                    id="name" name="name" wire:model="name" required
                    class="border mb-3 mt-3 px-4 py-2" type="text" placeholder="Kevin Kamau"
                    aria-describedby="name-error">
                @error('name')
                <p class="text-xs text-red-600 mt-2" id="name-error">{{ $message }}</p>
                @enderror

                <label class="mt-3">Email address</label>
                <input
                    id="email" name="email" wire:model="email"
                    class="border mt-3 px-4 py-2" type="email" placeholder="user@mail.com">
                @error('email')
                <p class="text-xs text-red-600 mt-2" id="email-error">{{ $message }}</p>
                @enderror

                <label class="mt-5" for="email">Password</label>
                <input
                    id="password" name="password" wire:model="password"
                    class="border mt-3 px-4 py-2" type="password" placeholder="min 6 characters">
                @error('password')
                <p class="text-xs text-red-600 mt-2" id="password-error">{{ $message }}</p>
                @enderror

                <label class="mt-5" for="email">Confirm password</label>
                <input
                    id="password_confirmation" name="password_confirmation" wire:model="password_confirmation"
                    class="border mt-3 px-4 py-2" type="password" placeholder="•••••••">
                @error('password_confirmation')
                <p class="text-xs text-red-600 mt-2" id="password_confirmation-error">{{ $message }}</p>
                @enderror

                <button type="submit" class="bg-violet-900 my-5 py-2 text-white w-full"> CREATE ACCOUNT</button>
                <p class="text-center text-gray-500">OR SIGN UP WITH</p>
                <div class="flex gap-2 my-5">
                    <button class="bg-blue-800 py-2 text-white w-1/2">FACEBOOK</button>
                    <button class="bg-orange-500 py-2 text-white w-1/2">GOOGLE</button>
                </div>
                <p class="text-center"> Already have an account? <a href="/login" class="text-violet-900">Login now</a>
                </p>
                <div data-lastpass-icon-root=""
                     style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div>
                <div data-lastpass-icon-root=""
                     style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div>
                <div data-lastpass-icon-root=""
                     style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div>
            </form>
        </div>

    </section>
</div>
