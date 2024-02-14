@extends('components.layout')


@section('body')
    <div class="container mx-auto mt-5">
        <div class="flex justify-center">
            <div class="w-full max-w-md">
                <div class="bg-white rounded-lg main-form">
                    <div class="bg-gray-200 py-4 px-6 rounded-t-lg">
                        {{ __('Login') }}
                    </div>

                    <div class="p-6">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-4">
                                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
                                    {{ __('Email Address') }}
                                </label>
                                <input id="email" type="email"
                                    class="w-full px-3 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-blue-500 @error('email') border-red-500 @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">
                                    {{ __('Password') }}
                                </label>
                                <input id="password" type="password"
                                    class="w-full px-3 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-blue-500 @error('password') border-red-500 @enderror"
                                    name="password" required autocomplete="current-password">

                                @error('password')
                                    <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <div class="flex items-center">
                                    <input class="mr-2 leading-tight" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label class="text-sm text-gray-700" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>

                            <div class="mb-0">
                                <div class="flex items-center justify-between">
                                    <button type="submit"
                                        class="px-4 py-2 bg-blue-500 text-white rounded-lg focus:outline-none hover:bg-blue-600">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="text-sm text-blue-500 hover:underline"
                                            href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
