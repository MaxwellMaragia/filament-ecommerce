<x-slot name="head">
    <title>{{ env('APP_NAME').' - Checkout' }}</title>
    <meta name="robots" content="noindex, nofollow">
</x-slot>
<div>
    <div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
        <h1 class="text-2xl font-bold text-gray-800 dark:text-white mb-4">
            Checkout
        </h1>
        <form wire:submit.prevent="placeOrder">
            <div class="grid grid-cols-12 gap-4">
                <div class="md:col-span-12 lg:col-span-8 col-span-12">
                    <!-- Card -->
                    <div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
                        <!-- Shipping Address -->
                        <div class="mb-6">
                            <h2 class="text-xl font-bold underline text-gray-700 dark:text-white mb-2">
                                Shipping Address
                            </h2>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-gray-700 dark:text-white mb-1" for="first_name">
                                        First Name
                                    </label>
                                    <input
                                        wire:model="first_name" required
                                        class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none @error('first_name') border-red-500 @enderror"
                                        id="first_name" type="text"/>
                                    @error('first_name')
                                    <div class="text-red-500 text-sm">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div>
                                    <label class="block text-gray-700 dark:text-white mb-1" for="last_name">
                                        Last Name
                                    </label>
                                    <input
                                        wire:model="last_name"
                                        class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none @error('last_name') border-red-500 @enderror"
                                        id="last_name" type="text">
                                    @error('last_name')
                                    <div class="text-red-500 text-sm">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mt-4">
                                <label for="phone-input"
                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                                    number:</label>
                                <div class="relative">
                                    <div
                                        class="absolute inset-y-0 start-0 top-0 flex items-center ps-3.5 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                             xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 19 18">
                                            <path
                                                d="M18 13.446a3.02 3.02 0 0 0-.946-1.985l-1.4-1.4a3.054 3.054 0 0 0-4.218 0l-.7.7a.983.983 0 0 1-1.39 0l-2.1-2.1a.983.983 0 0 1 0-1.389l.7-.7a2.98 2.98 0 0 0 0-4.217l-1.4-1.4a2.824 2.824 0 0 0-4.218 0c-3.619 3.619-3 8.229 1.752 12.979C6.785 16.639 9.45 18 11.912 18a7.175 7.175 0 0 0 5.139-2.325A2.9 2.9 0 0 0 18 13.446Z"/>
                                        </svg>
                                    </div>
                                    <input
                                        wire:model="phone"
                                        type="text"
                                        id="phone-input"
                                        aria-describedby="helper-text-explanation"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                                        @error('phone') border-red-500 @enderror"
                                        pattern="(\+254 \d{3} \d{6})|(07\d{8})|(0111 \d{6})|(+254\d{9})"
                                        placeholder="+254707339978, 0707339978, 0111545062"
                                        required/>
                                </div>
                                <p id="helper-text-explanation" class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                                    Enter a phone number that matches any of the formats.</p>

                                @error('phone')
                                <div class="text-red-500 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mt-4">
                                <label class="block text-gray-700 dark:text-white mb-1" for="city">
                                    City
                                </label>
                                <!-- Select -->
                                    <select
                                        wire:model='city'
                                        name="city"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('city') border-red-500 @enderror">
                                    <option>Select delivery county</option>
                                    <option value="nairobi">Nairobi</option>
                                    <option value="baringo">Baringo</option>
                                    <option value="bomet">Bomet</option>
                                    <option value="bungoma">Bungoma</option>
                                    <option value="busia">Busia</option>
                                    <option value="elgeyo marakwet">Elgeyo Marakwet</option>
                                    <option value="embu">Embu</option>
                                    <option value="garissa">Garissa</option>
                                    <option value="homa bay">Homa Bay</option>
                                    <option value="isiolo">Isiolo</option>
                                    <option value="kajiado">Kajiado</option>
                                    <option value="kakamega">Kakamega</option>
                                    <option value="kericho">Kericho</option>
                                    <option value="kiambu">Kiambu</option>
                                    <option value="kilifi">Kilifi</option>
                                    <option value="kirinyaga">Kirinyaga</option>
                                    <option value="kisii">Kisii</option>
                                    <option value="kisumu">Kisumu</option>
                                    <option value="kitui">Kitui</option>
                                    <option value="kwale">Kwale</option>
                                    <option value="laikipia">Laikipia</option>
                                    <option value="lamu">Lamu</option>
                                    <option value="machakos">Machakos</option>
                                    <option value="makueni">Makueni</option>
                                    <option value="mandera">Mandera</option>
                                    <option value="meru">Meru</option>
                                    <option value="migori">Migori</option>
                                    <option value="marsabit">Marsabit</option>
                                    <option value="mombasa">Mombasa</option>
                                    <option value="muranga">Muranga</option>
                                    <option value="nakuru">Nakuru</option>
                                    <option value="nandi">Nandi</option>

                                </select>

                                <!-- End Select -->
                                @error('city')
                                <div class="text-red-500 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>
                            <div class="mt-4">
                                <label class="block text-gray-700 dark:text-white mb-1" for="address">
                                    Address
                                </label>
                                <input
                                    wire:model="street_address"
                                    class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none @error('street_address') border-red-500 @enderror"
                                    id="street_address" type="text"
                                    placeholder="e.g Nairobi CBD, Nyamakima, Queens shop">
                                @error('street_address')
                                <div class="text-red-500 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="text-lg font-semibold mb-4">
                            Select Payment Method
                        </div>
                        <ul class="grid w-full gap-6 md:grid-cols-2">
                            <li>
                                <input
                                    wire:model="payment_method"
                                    class="hidden peer" id="hosting-small" required type="radio" value="cod"/>
                                <label
                                    class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700"
                                    for="hosting-small">
                                    <div class="block">
                                        <div class="w-full text-lg font-semibold">
                                            Cash on Delivery
                                        </div>
                                    </div>
                                    <svg aria-hidden="true" class="w-5 h-5 ms-3 rtl:rotate-180" fill="none"
                                         viewbox="0 0 14 10" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-linecap="round"
                                              stroke-linejoin="round" stroke-width="2">
                                        </path>
                                    </svg>
                                </label>
                            </li>
                            <li>
                                <input
                                    wire:model="payment_method"
                                    required
                                    class="hidden peer" id="hosting-big" type="radio" value="mpesa" checked>
                                <label
                                    class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700"
                                    for="hosting-big">
                                    <div class="block">
                                        <div class="w-full text-lg font-semibold">
                                            M-pesa on delivery
                                        </div>
                                    </div>
                                    <svg aria-hidden="true" class="w-5 h-5 ms-3 rtl:rotate-180" fill="none"
                                         viewbox="0 0 14 10" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-linecap="round"
                                              stroke-linejoin="round" stroke-width="2">
                                        </path>
                                    </svg>
                                </label>
                            </li>
                        </ul>
                        @error('payment_method')
                        <div class="text-red-500 text-sm">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <!-- End Card -->
                </div>
                <div class="md:col-span-12 lg:col-span-4 col-span-12">
                    <div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
                        <div class="text-xl font-bold underline text-gray-700 dark:text-white mb-2">
                            ORDER SUMMARY
                        </div>
                        <div class="flex justify-between mb-2 font-bold">
					<span>
						Subtotal
					</span>
                            <span>
						{{ Number::currency($grand_total,'Ksh') }}
					</span>
                        </div>
                        <div class="flex justify-between mb-2 font-bold">

                            <span class="">
						Customer responsible for their shipping
					</span>
                        </div>
                        <hr class="bg-slate-400 my-4 h-1 rounded">
                        <div class="flex justify-between mb-2 font-bold">
					<span>
						Grand Total
					</span>
                            <span>
						{{ Number::currency($grand_total,'Ksh') }}
					</span>
                        </div>
                        </hr>
                    </div>
                    <button type="submit"
                            class="bg-green-500 mt-4 w-full p-3 rounded-lg text-lg text-white hover:bg-green-600">
                        <span wire:loading.remove>Place Order</span>
                        <span wire:loading>Processing...</span>
                    </button>
                    <div class="bg-white mt-4 rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
                        <div class="text-xl font-bold underline text-gray-700 dark:text-white mb-2">
                            BASKET SUMMARY
                        </div>
                        <ul class="divide-y divide-gray-200 dark:divide-gray-700" role="list">
                            @foreach($cart_items as $ci)
                                <li class="py-3 sm:py-4" wire:key="{{ $ci['product_id'] }}">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <img alt="{{ $ci['name'] }}" class="w-12 h-12 rounded-full"
                                                 src="{{ url('storage', $ci['image']) }}">
                                        </div>
                                        <div class="flex-1 min-w-0 ms-4">
                                            <a href="/products/{{ $ci['slug'] }}">
                                                <p class="text-xs font-medium text-blue-900 dark:text-white hover:underline">
                                                    {{ $ci['name'] }}
                                                </p>
                                            </a>
                                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                Quantity: {{ $ci['quantity'] }}
                                            </p>
                                        </div>
                                        <div
                                            class="inline-flex items-center text-sm text-gray-900 dark:text-white">
                                            {{ Number::currency($ci['total_amount'],'Ksh') }}
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

