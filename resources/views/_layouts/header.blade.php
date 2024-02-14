<header class="flex items-center justify-between px-6 py-4 bg-white border-b-4 border-yellow-600">
    <div class="flex items-center">
        <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">
            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>


    </div>

    <div class="flex items-center">
        <div x-data="{ notificationOpen: false }" class="relative">
            <button @click="notificationOpen = ! notificationOpen" class="flex mx-4 text-gray-600 focus:outline-none">
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M15 17H20L18.5951 15.5951C18.2141 15.2141 18 14.6973 18 14.1585V11C18 8.38757 16.3304 6.16509 14 5.34142V5C14 3.89543 13.1046 3 12 3C10.8954 3 10 3.89543 10 5V5.34142C7.66962 6.16509 6 8.38757 6 11V14.1585C6 14.6973 5.78595 15.2141 5.40493 15.5951L4 17H9M15 17V18C15 19.6569 13.6569 21 12 21C10.3431 21 9 19.6569 9 18V17M15 17H9"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>

            <div x-cloak x-show="notificationOpen" @click="notificationOpen = false"
                class="fixed inset-0 z-10 w-full h-full"></div>

            <div x-cloak x-show="notificationOpen"
                class="absolute right-0 z-10 mt-2 overflow-hidden bg-white rounded-lg shadow-2xl w-80"
                style="width:20rem; max-height: 20rem; overflow-y: auto;">
                @foreach (Auth::user()->appointments as $appointment)
                    <div class="flex items-center px-4 py-3 -mx-2 text-gray-600 hover:text-white hover:bg-indigo-600">
                        <img class="object-cover w-8 h-8 mx-1 rounded-full"
                            src="/images/service_logos/{{ $appointment->service->logo_path }}.avif" alt="avatar">
                        <p class="mx-2 text-sm">
                            Appoitnemnt with <span> <a class="font-bold text-gray-800"
                                    href="/services/{{ $appointment->service->slug }}">{{ $appointment->service->name }}</a></span>
                            with
                            @if (isset($appointment->car))
                                your <span class="font-bold text-indigo-400"><a
                                        href="/{{ Auth::user()->name }}/cars/{{ $appointment->car->id }}">{{ $appointment->car->make->name }}.</a></span>
                            @else
                                <span class="text-red-800">no car.</span>
                            @endif

                            @php
                                $currentDate = \Carbon\Carbon::now();
                                $targetDate = \Carbon\Carbon::parse($appointment->date);
                                $timeLeft = $targetDate->diffForHumans($currentDate);
                                $timeLeft = preg_replace('/(\d+) (.*?)$/', 'in $1 $2', $timeLeft);
                                $timeLeft = str_replace('after', '', $timeLeft);
                            @endphp
                            <span>{{ $timeLeft }}</span>
                        </p>
                    </div>
                @endforeach


            </div>
        </div>

        <div x-data="{ dropdownOpen: false }" class="relative">
            <button @click="dropdownOpen = ! dropdownOpen"
                class="relative block shadow rounded-lg px-1 border border-yellow-600 ">
                {{ Auth::user()->name }}

            </button>

            <div x-cloak x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 z-10 w-full h-full">
            </div>

            <div x-cloak x-show="dropdownOpen"
                class="absolute right-0 z-10 w-48 mt-2 overflow-hidden bg-white rounded-md side-shadow">
                <form method="POST" action={{ route('logout') }}>
                    @csrf
                    <button type="submit"
                        class="block text-left px-4 py-2 w-full text-sm text-gray-700 hover:bg-indigo-700 hover:text-white">Logout</button>

                </form>
            </div>
        </div>
    </div>
</header>
