@extends(auth()->check() ? '_layouts.master' : 'components.layout')


@section('body')
    <div class="mx-8 py-5">

        <div class="flex justify-center align-center">
            <button id="problems-form-button"
                class="bg-gray-700 hover:bg-gray-800 text-white font-bold py-2 px-4 rounded mb-5 text-xs sm:text-sm md:text-base lg:text-sm xl:text-sm main-button">
                Write Problem
            </button>
        </div>

        <form method="POST" action="/problems"
            class=" @if ($errors->any()) @else hidden @endif mb-5 animate-fade-in" id="problems-form">
            @csrf
            <div class="border
            border-yellow-600 rounded-lg w-full">
                <div class="mx-8 my-3 flex flex-col gap-1 ">

                    <div class="text-xs  flex flex-col justify-between mb-2 gap-3">
                        <select id="category" name="category"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full md:w-60 py-2 px-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected value=" ">Choose a category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ old('category') == $category->id ? 'selected' : '' }}>{{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('category')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror


                        <select id="make" name="make"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full md:w-60 py-2 px-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected value=" ">Choose a make</option>
                            @foreach ($makes as $make)
                                <option value="{{ $make->id }}" {{ old('make') == $make->id ? 'selected' : '' }}>
                                    {{ $make->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('make')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror

                        <textarea name="title" id="title" rows="1" placeholder="Write A Title...." style="resize: none;"
                            class="w-full md:p-2 p-1 text-xs sm:text-sm md:text-sm lg:text-base xl:text-base border border-gray-800 border-t-0 border-l-0 border-r-0">{{ old('title') }}</textarea>
                        @error('title')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror

                        <textarea name="body" id="body" rows="1" placeholder="Write The Problem...." style="resize: none;"
                            class="w-full md:p-2 p-1 text-xs sm:text-sm md:text-sm lg:text-base xl:text-base border border-gray-800 border-t-0 border-l-0 border-r-0">{{ old('body') }}</textarea>
                        @error('body')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="text-xs flex flex-row justify-end">
                        <button type="submit"
                            class="bg-gray-700 hover:bg-gray-800 text-white font-bold py-2 px-4 rounded text-xs sm:text-sm md:text-base lg:text-sm xl:text-sm main-button">
                            Post
                        </button>
                    </div>
                </div>
            </div>
        </form>

        <div class="prob-row mb-5">
            @php
                $firstColumnProblems = [];
                $secondColumnProblems = [];
                $thirdColumnProblems = [];
                $fourthColumnProblems = [];
            @endphp

            <div class="flex flex-row gap-1 flex-wrap">
                @foreach ($problems as $index => $problem)
                    @php
                        if ($index % 4 == 0) {
                            $firstColumnProblems[] = $problem;
                        } elseif ($index % 4 == 1) {
                            $secondColumnProblems[] = $problem;
                        } elseif ($index % 4 == 2) {
                            $thirdColumnProblems[] = $problem;
                        } else {
                            $fourthColumnProblems[] = $problem;
                        }
                    @endphp
                    <x-problems-row :problem="$problem" />
                @endforeach
            </div>
        </div>

        <div class="prob-col gap-2">
            <x-problems-col :problems="$firstColumnProblems" />
            <x-problems-col :problems="$secondColumnProblems" />
            <x-problems-col :problems="$thirdColumnProblems" />
            <x-problems-col :problems="$fourthColumnProblems" />
        </div>

        <div class="mt-2">
            {{ $problems->links() }}
        </div>
    </div>


    <script>
        const prolemsFormButton = document.getElementById('problems-form-button');
        const problemsForm = document.getElementById('problems-form');

        prolemsFormButton.addEventListener('click', () => {
            problemsForm.classList.toggle('hidden');
        })
    </script>
@endsection
