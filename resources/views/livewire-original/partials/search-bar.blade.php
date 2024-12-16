<div class="relative mt-6 max-w-lg mx-auto">
    <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
        <svg class="h-5 w-5 text-gray-500" viewBox="0 0 24 24" fill="none">
            <path
                d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </span>

    <form action="">
        <input
            wire:model.live.debounce.500ms="search"
            class="w-full border rounded-md pl-10 pr-4 py-2 focus:border-blue-500 focus:outline-none focus:shadow-outline"
            type="text" placeholder="Search products">
    </form>
    <div data-twe-autocomplete-dropdown-ref=""
         class="absolute outline-none min-w-[100px] m-0 scale-y-[0.8] opacity-0 bg-white shadow-select transition duration-200 motion-reduce:transition-none data-[twe-autocomplete-state-open]:scale-y-100 data-[twe-autocomplete-state-open]:opacity-100 dark:bg-surface-dark"
         data-twe-autocomplete-state-open="">
        <ul data-twe-autocomplete-items-list-ref=""
            class="list-none w-full m-0 p-0 overflow-y-auto [&amp;::-webkit-scrollbar]:w-1 [&amp;::-webkit-scrollbar]:h-1 [&amp;::-webkit-scrollbar-button]:block [&amp;::-webkit-scrollbar-button]:h-0 [&amp;::-webkit-scrollbar-button]:bg-transparent [&amp;::-webkit-scrollbar-track-piece]:bg-transparent [&amp;::-webkit-scrollbar-track-piece]:rounded-none [&amp;::-webkit-scrollbar-track-piece]: [&amp;::-webkit-scrollbar-track-piece]:rounded-s [&amp;::-webkit-scrollbar-thumb]:h-[50px] [&amp;::-webkit-scrollbar-thumb]:bg-[#999] [&amp;::-webkit-scrollbar-thumb]:rounded [&amp;::-webkit-scrollbar-thumb]:dark:bg-gray-200"
            role="listbox">
            @foreach($results as $result)
                <li data-twe-index="0" role="option"
                    class=" py-[0.4375rem] px-2 text-gray-700 select-none cursor-pointer hover:[&amp;:not([data-twe-autocomplete-option-disabled])]:bg-black/5 data-[twe-autocomplete-item-active]:bg-black/5 data-[data-twe-autocomplete-option-disabled]:text-surface/50 data-[data-twe-autocomplete-option-disabled]:cursor-default dark:text-white dark:hover:[&amp;:not([data-twe-autocomplete-option-disabled])]:bg-black/10 dark:data-[twe-autocomplete-item-active]:bg-black/10 dark:data-[data-twe-autocomplete-option-disabled]:text-white/50"
                    data-twe-autocomplete-item-ref="">
                    <a href="/products/{{ $result->slug }}">{{ $result->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
