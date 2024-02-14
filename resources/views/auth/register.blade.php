@extends('components.layout')


@section('body')
    <div class="container mx-auto mt-5">
        <div class="flex justify-center">
            <div class="w-full max-w-md">
                <div class="bg-white rounded-lg main-form">
                    <div class="bg-gray-200 py-4 px-6 rounded-t-lg border border-yellow-600 border-b-0 ">
                        {{ __('Register') }}
                    </div>

                    <div class="p-6">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="mb-4">
                                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">
                                    {{ __('Name') }}
                                </label>
                                <input id="name" type="text"
                                    class="w-full px-3 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-blue-500 @error('name') border-red-500 @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
                                    {{ __('Email Address') }}
                                </label>
                                <input id="email" type="email"
                                    class="w-full px-3 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-blue-500 @error('email') border-red-500 @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="tel" class="block text-gray-700 text-sm font-bold mb-2">
                                    {{ __('Phone Number') }}
                                </label>
                                <input id="tel" type="tel"
                                    class="w-full px-3 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-blue-500 @error('tel') border-red-500 @enderror"
                                    name="tel" value="{{ old('tel') }}" required autocomplete="tel">

                                @error('tel')
                                    <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">
                                    {{ __('Password') }}
                                </label>
                                <input id="password" type="password"
                                    class="w-full px-3 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-blue-500 @error('password') border-red-500 @enderror"
                                    name="password" required autocomplete="new-password">

                                @error('password')
                                    <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2">
                                    {{ __('Confirm Password') }}
                                </label>
                                <input id="password-confirm" type="password"
                                    class="w-full px-3 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-blue-500"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <div class="mb-0">
                                <div class="flex items-center justify-between">
                                    <button type="submit"
                                        class="px-4 py-2 bg-blue-500 text-white rounded-lg focus:outline-none hover:bg-blue-600">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
