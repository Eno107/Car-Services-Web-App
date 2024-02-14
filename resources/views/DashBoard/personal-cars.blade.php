@extends('_layouts.master')

@section('body')
    <h3 class="text-gray-700 text-3xl font-semibold">
        My Cars</h3>

    <div class="mt-4">
        <h4 class="text-gray-600">Model Form</h4>

        <div class="mt-4">
            <div class="max-w-sm w-full bg-white shadow-md rounded-md overflow-hidden border">
                <form method="POST" action="/{{ Auth::user()->name }}/cars/">
                    @csrf
                    <div class="flex justify-between items-center px-5 py-3 text-gray-700 border-b">
                        <h3 class="text-sm">Add a car</h3>
                        <button type="button" id="personal-car-form">
                            <svg class="h-4 w-4 @if ($errors->any()) @else hidden @endif" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" id="personal-car-close-form">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>

                            <svg class="block h-4 w-4 @if ($errors->any()) hidden @else @endif" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                id="personal-car-open-form">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </button>
                    </div>

                    <div class="px-5 py-6 bg-gray-200 text-gray-700 border-b @if ($errors->any()) @else hidden @endif"
                        id="personal-car-form-container">

                        {{--  --}}
                        <label class="text-xs">Engine Size @error('size')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </label>

                        <div class="mt-1 mb-1 relative rounded-md shadow-sm">
                            <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-600">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14 8V5M11 5H17M6 12H3M3 9V15M21 11V19M9 12H9.01M12 12H12.01M15 12H15.01M6 8V16H8L10 19H18V10L16 8H6Z"
                                        stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>

                            <input type="number" step="0.1" pattern="[0-9]\.[0-9]" name="size" id="size"
                                value='{{ old('engine_size') }}' placeholder="Enter Engine Size"
                                class="form-input w-full px-12 py-2 appearance-none rounded-md focus:border-indigo-600">
                        </div>


                        {{--  --}}
                        <label class="text-xs">Make @error('make')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </label>

                        <div class="mt-1 mb-1 relative rounded-md shadow-sm">
                            <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-600">
                                <svg fill="#000000" version="1.1" id="Capa_1" class="w-6 h-6"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0 0 45.393 45.393" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path
                                                d="M43.518,12.709L25.178,0.728c-1.511-0.978-3.458-0.968-4.96,0.021L1.859,12.719c-1.14,0.751-1.455,2.284-0.705,3.424
			c0.751,1.14,2.283,1.456,3.424,0.704L22.715,5.021L40.83,16.857c0.416,0.269,0.881,0.396,1.341,0.396
			c0.812,0,1.604-0.397,2.077-1.127C44.99,14.98,44.662,13.452,43.518,12.709z" />
                                            <path
                                                d="M38.879,27.616c-0.151-0.865-0.903-1.505-1.78-1.505h-1.008l-0.383-3.987c-0.409-4.264-3.948-7.49-8.232-7.49H17.92
			c-4.285,0-7.823,3.227-8.233,7.49l-0.382,3.987H8.296c-0.878,0-1.629,0.64-1.782,1.505l-1.5,8.504
			c-0.186,1.054,0.112,2.139,0.8,2.957c0.662,0.788,1.637,1.258,2.657,1.293v1.412c0,1.999,1.602,3.61,3.603,3.61h1.138
			c1.999,0,3.625-1.611,3.625-3.61v-1.389h11.732v1.386c0,2,1.613,3.613,3.612,3.613h1.139c1.999,0,3.614-1.613,3.614-3.613V40.37
			c1.02-0.035,1.989-0.501,2.649-1.288c0.688-0.82,0.982-1.899,0.798-2.955L38.879,27.616z M11.642,37.113
			c-1.687,0-3.055-1.367-3.055-3.056c0-1.689,1.368-3.057,3.055-3.057c1.688,0,3.057,1.367,3.057,3.057
			C14.699,35.746,13.33,37.113,11.642,37.113z M12.404,26.111l0.353-3.678c0.257-2.674,2.476-4.688,5.163-4.688h0.551v1.156
			c0,1.003,0.797,1.802,1.799,1.802h4.856c1.002,0,1.813-0.799,1.813-1.802v-1.155h0.537c2.687,0,4.906,2.014,5.162,4.688
			l0.354,3.678L12.404,26.111L12.404,26.111z M33.75,37.113c-1.687,0-3.055-1.367-3.055-3.056c0-1.689,1.368-3.057,3.055-3.057
			c1.688,0,3.057,1.367,3.057,3.057C36.807,35.746,35.438,37.113,33.75,37.113z" />
                                        </g>
                                    </g>
                                </svg>
                            </span>


                            <select id="make" name="make"
                                class="form-input w-full px-12 py-2 appearance-none rounded-md focus:border-indigo-600">
                                <option selected value=" ">Choose Make</option>
                                @foreach ($makes as $make)
                                    <option value="{{ $make->id }}" {{ old('make') == $make->id ? 'selected' : '' }}>
                                        {{ $make->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>


                        {{--  --}}
                        <label class="text-xs">Year @error('year')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </label>

                        <div class="mt-1 mb-1 relative rounded-md shadow-sm">
                            <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-600">
                                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3 9H21M7 3V5M17 3V5M6 12H8M11 12H13M16 12H18M6 15H8M11 15H13M16 15H18M6 18H8M11 18H13M16 18H18M6.2 21H17.8C18.9201 21 19.4802 21 19.908 20.782C20.2843 20.5903 20.5903 20.2843 20.782 19.908C21 19.4802 21 18.9201 21 17.8V8.2C21 7.07989 21 6.51984 20.782 6.09202C20.5903 5.71569 20.2843 5.40973 19.908 5.21799C19.4802 5 18.9201 5 17.8 5H6.2C5.0799 5 4.51984 5 4.09202 5.21799C3.71569 5.40973 3.40973 5.71569 3.21799 6.09202C3 6.51984 3 7.07989 3 8.2V17.8C3 18.9201 3 19.4802 3.21799 19.908C3.40973 20.2843 3.71569 20.5903 4.09202 20.782C4.51984 21 5.07989 21 6.2 21Z"
                                        stroke="#000000" stroke-width="2" stroke-linecap="round" />
                                </svg>
                            </span>

                            <input type="number" step="1" pattern="[0-9]{4}" name="year" id="year"
                                placeholder="Enter Year of Production" value="{{ old('year') }}"
                                class="form-input w-full px-12 py-2 appearance-none rounded-md focus:border-indigo-600">
                        </div>

                        <label class="text-xs">Mileage @error('mileage')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </label>

                        <div class="mt-1 mb-1 relative rounded-md shadow-sm">
                            <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-600">
                                <svg fill="#000000" class="w-6 h-6" version="1.1" id="Layer_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0 0 512 512" xml:space="preserve">
                                    <g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M21.333,85.333h15.872L20.416,128h471.168l-16.789-42.667h15.872C502.464,85.333,512,75.776,512,64
				s-9.536-21.333-21.333-21.333h-32.661l-11.477-29.141C443.307,5.355,435.435,0,426.667,0H85.333
				c-8.768,0-16.64,5.355-19.861,13.525L53.995,42.667H21.333C9.536,42.667,0,52.224,0,64S9.536,85.333,21.333,85.333z" />
                                                <path
                                                    d="M146.959,399.104c-3.755-11.179-15.829-17.152-27.029-13.44c-11.157,3.733-17.173,15.829-13.419,27.008
				c1.109,3.349,2.347,6.784,3.584,10.24c8.725,24.256,13.44,39.829,1.536,54.08c-7.552,9.045-6.357,22.485,2.688,30.059
				c3.989,3.328,8.853,4.949,13.653,4.949c6.101,0,12.181-2.603,16.405-7.659c28.181-33.728,15.296-69.632,5.867-95.851
				L146.959,399.104z" />
                                                <path
                                                    d="M402.959,399.104c-3.755-11.179-15.829-17.152-27.029-13.44c-11.157,3.733-17.173,15.829-13.419,27.008
				c1.109,3.349,2.347,6.784,3.584,10.24c8.725,24.256,13.44,39.829,1.536,54.08c-7.552,9.045-6.357,22.485,2.688,30.059
				c3.989,3.328,8.853,4.949,13.653,4.949c6.101,0,12.181-2.603,16.405-7.659c28.181-33.728,15.296-69.632,5.867-95.851
				L402.959,399.104z" />
                                                <path
                                                    d="M4.949,170.667c-5.995,23.765-6.485,48.725-0.448,72.789l9.728,39.04c2.368,9.515,10.923,16.171,20.715,16.171H64V320
				c0,23.531,19.136,42.667,42.667,42.667h42.667C172.864,362.667,192,343.531,192,320v-21.333h128V320
				c0,23.531,19.136,42.667,42.667,42.667h42.667C428.864,362.667,448,343.531,448,320v-21.333h29.056
				c9.792,0,18.347-6.656,20.715-16.171l9.728-39.019c6.037-24.085,5.547-49.045-0.448-72.811H4.949z M85.333,213.333
				c0-11.776,9.557-21.333,21.333-21.333S128,201.557,128,213.333s-9.557,21.333-21.333,21.333S85.333,225.109,85.333,213.333z
				 M405.333,234.667c-11.776,0-21.333-9.557-21.333-21.333S393.557,192,405.333,192s21.333,9.557,21.333,21.333
				S417.109,234.667,405.333,234.667z" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </span>

                            <input type="number" name="mileage" id="mileage" value='{{ old('mileage') }}'
                                placeholder="Enter Mileage (km)"
                                class="form-input w-full px-12 py-2 appearance-none rounded-md focus:border-indigo-600">
                        </div>



                    </div>

                    <div class="flex justify-between items-center px-5 py-3 @if ($errors->any()) @else hidden @endif"
                        id="personal-car-form-submit">
                        <button type="reset"
                            class="px-3 py-1 text-gray-700 text-sm rounded-md bg-gray-200 hover:bg-gray-300 focus:outline-none">Cancel</button>
                        <button type="submit"
                            class="bg-gray-700 hover:bg-gray-800 text-white font-bold py-1 px-3 rounded text-sm main-button">Save</button>

                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="mt-10">
        <h4 class="text-gray-600">Collection</h4>
        @if (isset(Auth::user()->cars) && count(Auth::user()->cars) > 0)
            <div class="flex flex-col mt-8">
                <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                    <div
                        class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                        <table class="min-w-full">
                            <thead>
                                <tr>
                                    <th
                                        class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        Make</th>
                                    <th
                                        class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        Engine</th>
                                    <th
                                        class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        Year</th>
                                    <th
                                        class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        Milage</th>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                                </tr>
                            </thead>


                            <tbody class="bg-white">
                                @foreach (Auth::user()->cars as $car)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-12 w-12">
                                                    <img class="h-12 w-12"
                                                        src="/images/car_logos/{{ $car->make->logo_path }}-logo.webp"
                                                        alt="carLogo" draggable="false" />
                                                </div>

                                            </div>
                                        </td>

                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-900">{{ $car->engine_size }}</div>
                                        </td>

                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <span
                                                class="text-xs leading-5 font-semibold text-gray-900">{{ $car->year }}</span>
                                        </td>

                                        <td
                                            class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                                            {{ $car->mileage }}km</td>

                                        <td
                                            class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                            <a href="/{{ Auth::user()->name }}/cars/{{ $car->id }}"
                                                class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @else
                <div class="flex flex-col items-center mt-10 w-full h-full">
                    <div class="text-xl sm:text-xl md:text-2xl lg:text-3xl xl:text-4xl mb-2">
                        <span class="main-color">Your collection</span> is empty
                    </div>
                    <img src="/images/emptyGarage-removebg-preview.png" alt="" class="h-60">


                </div>
        @endif
    </div>



    <script>
        const personalCarForm = document.getElementById('personal-car-form');
        const personalCarCloseForm = document.getElementById('personal-car-close-form');
        const perosnalCarOpenForm = document.getElementById('personal-car-open-form');
        const perosnalCarFormContainer = document.getElementById('personal-car-form-container');
        const perosnalCarFormSubmit = document.getElementById('personal-car-form-submit');

        personalCarForm.addEventListener('click', () => {
            perosnalCarOpenForm.classList.toggle('hidden');
            personalCarCloseForm.classList.toggle('hidden');
            perosnalCarFormContainer.classList.toggle('hidden');
            perosnalCarFormSubmit.classList.toggle('hidden');
        })
    </script>
@endsection
