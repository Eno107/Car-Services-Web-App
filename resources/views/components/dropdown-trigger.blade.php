@props(['name'])
<button type="button" @click="show = !show"
    class="inline-flex w-22 justify-center items-center rounded-md bg-white px-2 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50
"
    style="background-color: #fca311;
           color: #2D3748;
           border-color: #be375f;
           transition: background-color 0.3s, color 0.3s, border-color 0.3s;">
    {{ $name }}
    <svg {{ $attributes(['class' => 'transform -rotate-90 ml-1']) }} width="16" height="16" viewBox="0 0 22 22">
        <g fill="none" fill-rule="evenodd">
            <path stroke="#be375f" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z"></path>
            <path fill="#2D3748" d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
        </g>
    </svg>
</button>

{{-- inline-flex w-22 justify-center items-center rounded-md bg-white px-2 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 --}}
{{-- py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex --}}
