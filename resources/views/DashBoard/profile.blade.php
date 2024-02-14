@extends('_layouts.master')

@section('body')
    <h3 class="text-gray-700 text-3xl font-semibold">
        Profile</h3>

    <div class="mt-4">
        <div class="p-6 bg-white rounded-md shadow-md">
            <h2 class="text-lg text-gray-700 font-semibold capitalize">Account settings</h2>

            <form action="/user/update" method="POST" id="updateForm" class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                @csrf

                <div>
                    <label class="text-gray-700" for="name">Name</label>
                    <input class="form-input w-full mt-2 rounded-md pl-1 border border-gray-300 focus:border-indigo-600"
                        type="text" name="name" value="{{ old('name', Auth::user()->name) }}">
                    @error('name')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label class="text-gray-700" for="emailAddress">Email Address</label>
                    <input class="form-input w-full mt-2 rounded-md pl-1 border border-gray-300 focus:border-indigo-600"
                        type="email" name="email" value="{{ old('email', Auth::user()->email) }}">
                    @error('email')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label class="text-gray-700" for="tel">Phone Number</label>
                    <input class="form-input w-full mt-2 rounded-md pl-1 border border-gray-300 focus:border-indigo-600"
                        type="tel" name="tel" value="{{ old('tel', Auth::user()->phone_number) }}">
                    @error('tel')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label class="text-gray-700" for="password">New Password</label>
                    <input class="form-input w-full mt-2 rounded-md pl-1 border border-gray-300 focus:border-indigo-600"
                        type="password" name="password" id="newPassword">
                    <span class="text-xs text-red-500 hidden" id="newPasswordError">Password doesnt match</span>
                    @error('password')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label class="text-gray-700" for="passwordConfirmation">Password Confirmation</label>
                    <input class="form-input w-full mt-2 rounded-md pl-1 border border-gray-300 focus:border-indigo-600"
                        type="password" name="passwordConfirmation" id="passwordConfirmation">
                </div>


                <div class="flex justify-end mt-4">
                    <button type="submit"
                        class="px-4 py-2 bg-gray-800 text-gray-200 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">Update</button>
                </div>
            </form>

            <script>
                document.getElementById('updateForm').addEventListener('submit', function(event) {
                    const newPassword = document.getElementById('newPassword').value;
                    const passwordConfirmation = document.getElementById('passwordConfirmation').value;
                    const newPasswordError = document.getElementById('newPasswordError');

                    if (newPassword !== passwordConfirmation) {
                        document.getElementById('newPassword').value = "";
                        document.getElementById('passwordConfirmation').value = "";
                        newPasswordError.classList.remove('hidden');
                        event.preventDefault();
                    }
                });
            </script>
        </div>
    </div>
@endsection
