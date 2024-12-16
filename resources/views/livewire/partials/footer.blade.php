<footer class="bg-gray-200 rounded-lg shadow dark:bg-gray-900 m-4">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <img src="{{ url('storage','home/logo-50.png') }}" class="h-26" alt="{{ env('APP_NAME') }}"/>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="/" class="hover:underline me-4 md:me-6">Home</a>
                </li>
                <li>
                    <a href="/products" class="hover:underline me-4 md:me-6">Products</a>
                </li>
                <li>
                    <a href="/contact-us" class="hover:underline me-4 md:me-6">Contact us</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-600 sm:mx-auto dark:border-gray-700 lg:my-8"/>
        <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© <script>document.write(new Date().getFullYear())</script> <a href="/" class="hover:underline">{{ env('APP_NAME') }}™</a>. All Rights Reserved.
          </span>
            <div class="flex mt-4 sm:justify-center sm:mt-0">
                <a href="{{ config('seo.social.facebook') }}" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                        <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
                    </svg>
                    <span class="sr-only">Facebook page</span>
                </a>
                <a href="{{ config('seo.social.twitter') }}" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                        <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd"/>
                    </svg>
                    <span class="sr-only">Twitter page</span>
                </a>
                <a href="{{ config('seo.social.instagram') }}" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.207 0 3.596.012 4.86.07 1.261.058 2.332.256 3.17.54a5.947 5.947 0 0 1 2.132 1.17 5.947 5.947 0 0 1 1.17 2.132c.284.838.482 1.909.54 3.17.058 1.264.07 1.653.07 4.86s-.012 3.596-.07 4.86c-.058 1.261-.256 2.332-.54 3.17a5.947 5.947 0 0 1-1.17 2.132 5.947 5.947 0 0 1-2.132 1.17c-.838.284-1.909.482-3.17.54-1.264.058-1.653.07-4.86.07s-3.596-.012-4.86-.07c-1.261-.058-2.332-.256-3.17-.54a5.947 5.947 0 0 1-2.132-1.17 5.947 5.947 0 0 1-1.17-2.132c-.284-.838-.482-1.909-.54-3.17C2.175 15.596 2.163 15.207 2.163 12s.012-3.596.07-4.86c.058-1.261.256-2.332.54-3.17A5.947 5.947 0 0 1 5.065 3.63a5.947 5.947 0 0 1 2.132-1.17C8.445 2.175 9.526 1.977 10.787 1.92 12.051 1.862 12.44 1.85 12 1.85zM12 0C10.204 0 9.418.006 8.55.025 7.743.044 7.04.14 6.346.29 5.637.441 5.014.693 4.486.9 3.976 1.097 3.545 1.467 3.086 1.926 2.634 2.378 2.264 2.845 1.908 3.345 1.547 3.857 1.247 4.398 1.024 5 0 5.6.144 6.046.29 6.474.446 6.907.739 7.32 1.055 7.692 1.398 8.04 1.726 8.35 2.02 8.67 2.422 9.067 3.08 9.03 3.689 9.02 4.043 8.98 4.24 8.962 4.8 8.94c1.071-.06 1.775-.148 2.062-.353a2.572 2.572 0 0 0 .456-.292c.062-.062.125-.13.175-.204.042-.057.086-.115.128-.172 0-.003.002-.006.002-.01a1.032 1.032 0 0 0 .062-.134c.03-.063.057-.128.08-.194.013-.038.025-.077.035-.116.023-.079.037-.164.053-.247.018-.096.023-.192.036-.287.007-.058.022-.115.025-.173.006-.099.023-.196.036-.293.006-.04.007-.079.016-.118 0-.002.001-.005.001-.007.013-.077.022-.155.037-.232.017-.076.033-.152.054-.227.012-.046.026-.092.043-.138a9.75 9.75 0 0 1 2.518-.44c.057-.045.104-.107.17-.153A2.929 2.929 0 0 0 12 0zm0 5.878a6.122 6.122 0 1 0 0 12.244A6.122 6.122 0 0 0 12 5.878zm0 10.486a4.365 4.365 0 1 1 0-8.73 4.365 4.365 0 0 1 0 8.73zm4.686-10.968a1.221 1.221 0 1 0-.001-2.442 1.221 1.221 0 0 0 0 2.442z"/>
                    </svg>

                    <span class="sr-only">Instagram account</span>
                </a>
            </div>
        </div>
    </div>
</footer>




