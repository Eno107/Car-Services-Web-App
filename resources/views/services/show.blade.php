@extends(auth()->check() ? '_layouts.master' : 'components.layout')


@section('body')
    <div class="mx-3 mt-5">

        <div class="service-show" style="">

            <div class="border-r-0  border-yellow-600 border-l border-t border-b h-auto premium-services-image flex-none bg-cover bg-center rounded-t-none  text-center overflow-hidden"
                style="background-image: url({{ '/images/service_logos/' . $service->logo_path . '.avif' }}); width:30vw;"
                title="Mountain">
            </div>

            <div class="border-r-0  border-yellow-600 border-l border-t border-b h-auto premium-services-image flex-none bg-cover bg-center rounded-t-none  text-center overflow-hidden"
                style="background-image: url({{ '/images/service_logos/' . $service->logo_path . '.avif' }}); width:100%; height: 30vh;"
                title="Mountain">
            </div>


            <div class="border-r border-b border-yellow-600 border-l border-t bg-white rounded-b-none p-4 flex flex-col justify-between leading-normal"
                style="width:100%">
                <div class="mb-3 flex flex-col gap-1">
                    <div
                        class="underline text-gray-900 font-bold text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl text-center">
                        {{ $service->name }}</div>
                    <p class="text-gray-700 text-sm sm:text-base md:text-base lg:text-lg xl:text-xl"
                        style="line-height:1.25rem">{{ $service->body }}</p>
                </div>

                <div class="flex flex-col gap-2">
                    <div class="text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">
                        <div class="flex flex-row flex-wrap gap-1 items-baseline">
                            <p class="font-semibold">Categories: </p>
                            @foreach ($service->categories as $category)
                                <a href="#"
                                    class="px-1 border border-yellow-600 rounded-full text-yellow-500 text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl">{{ $category->name }}</a>
                            @endforeach
                        </div>
                    </div>

                    <div class="text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">
                        <div class="flex flex-row flex-wrap gap-1 items-baseline">
                            <p class="font-semibold">Makes: </p>
                            @foreach ($service->makes as $make)
                                <a href="#"
                                    class="px-1 border border-yellow-600 rounded-full text-yellow-500 text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl">{{ $make->name }}</a>
                            @endforeach
                        </div>
                    </div>

                    <div class="text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">
                        <div class="flex flex-row flex-wrap gap-1 items-baseline">
                            <p class="font-semibold">Contact Number: </p>
                            {{ $service->phone_number }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @auth
            <div class="bg-white">

                {{-- Calendar again --}}
                <h4
                    class="text-gray-600 mb-8 pt-12 mx-3 text-lg flex items-center justify-center text-base sm:text-base md:text-lg lg:text-xl xl:text-2xl ">
                    Click on any available date to
                    leave&nbsp; <span class="main-color">an appointment!</span></h4>
                <div>

                    @php
                        $appointmentsArr = [];
                    @endphp
                    @foreach ($appointments as $appointment)
                        @php
                            $event = [
                                'date' => $appointment->date,
                                'car_name' => $appointment->car ? $appointment->car->make->name : null,
                                'user_name' => $appointment->user->name,
                                'id' => $appointment->id,
                            ];
                            $appointmentsArr[] = $event;
                        @endphp
                    @endforeach
                    @php
                        $appointments_json = json_encode($appointmentsArr);
                    @endphp




                    <link rel="dns-prefetch" href="//unpkg.com" />
                    <link rel="dns-prefetch" href="//cdn.jsdelivr.net" />


                    <style>
                        [x-cloak] {
                            display: none;
                        }
                    </style>

                    <div class="antialiased sans-serif h-fit ">
                        <div x-data="app()" x-init="[initDate(), getNoOfDays(), addInitialEvents()]" x-cloak>

                            <div class="container mx-auto px-3 py-2">
                                <div class="bg-white rounded-lg  overflow-hidden main-form">

                                    <div class="flex items-center justify-between py-2 px-6">
                                        <div>
                                            <span x-text="MONTH_NAMES[month]" class="text-lg font-bold text-gray-800"></span>
                                            <span x-text="year" class="ml-1 text-lg text-gray-600 font-normal"></span>
                                        </div>
                                        <div class="border rounded-lg px-1" style="padding-top: 2px;">
                                            <button type="button"
                                                class="leading-none rounded-lg transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 items-center"
                                                :class="{ 'cursor-not-allowed opacity-25': month == 0 }"
                                                :disabled="month == 0 ? true : false" @click="month--; getNoOfDays()">
                                                <svg class="h-6 w-6 text-gray-500 inline-flex leading-none" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M15 19l-7-7 7-7" />
                                                </svg>
                                            </button>
                                            <div class="border-r inline-flex h-6"></div>
                                            <button type="button"
                                                class="leading-none rounded-lg transition ease-in-out duration-100 inline-flex items-center cursor-pointer hover:bg-gray-200 p-1"
                                                :class="{ 'cursor-not-allowed opacity-25': month == 11 }"
                                                :disabled="month == 11 ? true : false" @click="month++; getNoOfDays()">
                                                <svg class="h-6 w-6 text-gray-500 inline-flex leading-none" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M9 5l7 7-7 7" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="-mx-1 -mb-1">
                                        <div class="flex flex-wrap" style="margin-bottom: -40px;">
                                            <template x-for="(day, index) in DAYS" :key="index">
                                                <div style="width: 14.26%" class="px-2 py-2">
                                                    <div x-text="day"
                                                        class="text-gray-600 text-sm uppercase tracking-wide font-bold text-center">
                                                    </div>
                                                </div>
                                            </template>
                                        </div>

                                        <div class="flex flex-wrap border-t border-l ">
                                            <template x-for="blankday in blankdays">
                                                <div style="width: 14.28%; height: 120px"
                                                    class="text-center border-r border-b px-4 pt-2"></div>
                                            </template>
                                            <template x-for="(date, dateIndex) in no_of_days" :key="dateIndex">
                                                <div style="width: 14.28%; height: 120px"
                                                    class="px-4 pt-2 border-r border-b relative"
                                                    :class="{ 'bg-gray-100': isOldEvent(date) == true }">
                                                    <div @click="isEventTodayOpen(date)" x-text="date" draggable="false"
                                                        class="not-selectable inline-flex w-6 h-6 items-center justify-center cursor-pointer text-center leading-none rounded-full transition ease-in-out duration-100"
                                                        :class="{
                                                            'bg-blue-500 text-white': isToday(date) == true,
                                                            'text-gray-700 hover:bg-blue-200': isToday(date) == false &&
                                                                isOldEvent(date) == false,
                                                            'hover:bg-gray-300': isOldEvent(date) == true,
                                                        }">
                                                    </div>
                                                    <template x-if="isEventToday(date)">
                                                        <div class=" w-full flex justify-center mt-2 text-center">
                                                            <div class="text-yellow-600 rounded-full border px-1 py-2 border border-yellow-600"
                                                                style="line-height:110%">
                                                                Not available</div>
                                                        </div>
                                                    </template>
                                                </div>
                                            </template>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            {{-- Appointment poppup --}}
                            <div style="background-color: rgba(0,0,0,0.8);"
                                class="fixed z-40 top-0 right-0 left-0 bottom-0 h-full w-full"
                                x-show.transition.opacity="openAppointmentPoppup"
                                @if ($errors->any()) x-init="showPoppup()" @endif>

                                <div class="p-4 max-w-xl mx-auto relative absolute left-0 right-0 overflow-hidden mt-24">
                                    <div class="shadow absolute right-0 top-0 w-10 h-10 rounded-full bg-white text-gray-500 hover:text-gray-800 inline-flex items-center justify-center cursor-pointer"
                                        x-on:click="openAppointmentPoppup = !openAppointmentPoppup">
                                        <svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M16.192 6.344L11.949 10.586 7.707 6.344 6.293 7.758 10.535 12 6.293 16.242 7.707 17.656 11.949 13.414 16.192 17.656 17.606 16.242 13.364 12 17.606 7.758z" />
                                        </svg>
                                    </div>

                                    <div class="w-full rounded-lg bg-white overflow-hidden block p-8 main-form">

                                        <h2 class="font-bold text-2xl mb-6 text-gray-800 border-b pb-2">Add Appointment</h2>

                                        <form action="/appointment/store" method="POST">
                                            @csrf
                                            <input type="hidden" name="service_id" value={{ $service->id }}>
                                            <div class="mb-4">
                                                <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide">Service
                                                    Name</label>
                                                <input type="text"
                                                    class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight "
                                                    readonly value="{{ $service->name }}">
                                            </div>
                                            @error('service_id')
                                                <span class="text-xs text-red-500">{{ $message }}</span>
                                            @enderror

                                            <div class="mb-4">
                                                <label for=""
                                                    class="text-gray-800 block mb-1 font-bold text-sm tracking-wide">Date</label>
                                                <input type="text" name="date"
                                                    class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight"
                                                    readonly x-model="formatDate(currentEvent.date || '{{ old('date') }}')">
                                            </div>
                                            @error('date')
                                                <span class="text-xs text-red-500">{{ $message }}</span>
                                            @enderror

                                            <div class="mb-4">
                                                <label for=""
                                                    class="text-gray-800 block mb-1 font-bold text-sm tracking-wide">Car
                                                    appointed</label>
                                                <select type="text" name="car_id"
                                                    class="bg-gray-200 border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight">
                                                    <option value="" selected>Choose Car</option>
                                                    <option value="no_car">No car</option>
                                                    @foreach (Auth::user()->cars as $car)
                                                        <option value="{{ $car->id }}">{{ $car->make->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('car_id')
                                                    <span class="text-xs text-red-500">Car field is required</span>
                                                @enderror
                                            </div>


                                            <div class="mb-4 flex justify-between">

                                                <button type="button"
                                                    class="px-3 py-1 text-gray-700 text-sm rounded-md bg-gray-200 hover:bg-gray-300 focus:outline-none main-button"
                                                    x-on:click="openAppointmentPoppup = !openAppointmentPoppup">Cancel</button>

                                                <button type="submit"
                                                    class="bg-gray-700 hover:bg-gray-800 text-white font-bold py-1 px-2 rounded text-ms main-button">Make
                                                    Appointment</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            {{-- /Appoitnment poppup --}}

                        </div>

                        <script>
                            let MONTH_NAMES = [
                                'January', 'February', 'March', 'April', 'May', 'June',
                                'July', 'August', 'September', 'October', 'November', 'December'
                            ];

                            const DAYS = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

                            function app() {
                                return {
                                    month: '',
                                    year: '',
                                    no_of_days: [],
                                    blankdays: [],
                                    days: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],

                                    events: [],
                                    event_title: '',
                                    event_date: '',
                                    event_theme: 'blue',

                                    themes: [{
                                            value: "blue",
                                            label: "Blue Theme"
                                        },
                                        {
                                            value: "red",
                                            label: "Red Theme"
                                        },
                                        {
                                            value: "yellow",
                                            label: "Yellow Theme"
                                        },
                                        {
                                            value: "green",
                                            label: "Green Theme"
                                        },
                                        {
                                            value: "purple",
                                            label: "Purple Theme"
                                        }
                                    ],

                                    openAppointmentPoppup: false,
                                    currentEvent: {},

                                    initDate() {
                                        let today = new Date();
                                        this.month = today.getMonth();
                                        this.year = today.getFullYear();
                                        this.datepickerValue = new Date(this.year, this.month, today.getDate()).toDateString();
                                    },

                                    isToday(date) {
                                        const today = new Date();
                                        const d = new Date(this.year, this.month, date);

                                        return today.toDateString() === d.toDateString() ? true : false;
                                    },


                                    showTestPoppup() {
                                        if (this.currentEvent) {
                                            this.openAppointmentPoppup = true;
                                        }
                                    },

                                    showPoppup() {
                                        this.openAppointmentPoppup = true;
                                    },


                                    isEventToday(date) {
                                        const d = new Date(this.year, this.month, date);
                                        const matchingEvent = this.events.find(event => d.toDateString() === new Date(event.event_date)
                                            .toDateString());

                                        if (matchingEvent) {
                                            this.currentEvent = matchingEvent;
                                        } else {
                                            this.currentEvent = {
                                                'date': new Date(this.year, this.month, date + 1).toISOString().slice(0, 10),
                                            };
                                        }

                                        return !!matchingEvent;
                                    },

                                    isOldEvent(date) {
                                        const d = new Date(this.year, this.month, date + 1);
                                        const currentDate = new Date();

                                        if (d < currentDate) {
                                            return true;
                                        } else {
                                            return false;
                                        }
                                    },

                                    isEventTodayOpen(date) {

                                        if (!this.isEventToday(date) && !this.isOldEvent(date)) {
                                            this.showTestPoppup();
                                        }
                                    },

                                    formatDate(dateString) {
                                        const options = {
                                            year: 'numeric',
                                            month: '2-digit',
                                            day: '2-digit',
                                        };
                                        const date = new Date(dateString);
                                        return date.toLocaleDateString('en-AL', options);
                                    },

                                    addEvent() {
                                        if (this.event_title == '') {
                                            return;
                                        }

                                        this.events.push({
                                            event_date: this.event_date,
                                            event_title: this.event_title,
                                            event_theme: this.event_theme
                                        });


                                        this.event_title = '';
                                        this.event_date = '';
                                        this.event_theme = 'blue';

                                        this.openEventModal = false;
                                    },

                                    getNoOfDays() {
                                        let daysInMonth = new Date(this.year, this.month + 1, 0).getDate();

                                        let dayOfWeek = new Date(this.year, this.month).getDay();
                                        let blankdaysArray = [];
                                        for (var i = 1; i <= dayOfWeek; i++) {
                                            blankdaysArray.push(i);
                                        }

                                        let daysArray = [];
                                        for (var i = 1; i <= daysInMonth; i++) {
                                            daysArray.push(i);
                                        }

                                        this.blankdays = blankdaysArray;
                                        this.no_of_days = daysArray;
                                    },

                                    addInitialEvents() {

                                        var jsonString = '<?php echo $appointments_json; ?>';
                                        var appointments = JSON.parse(jsonString);

                                        this.events = [];

                                        for (var i = 0; i < appointments.length; i++) {
                                            var appointment = appointments[i];

                                            var eventDate = new Date(appointment.date);

                                            var eventCarName = appointment.car_name ? appointment.car_name : 'No Car';

                                            var event = {
                                                event_date: eventDate,
                                                event_title: appointment.user_name,
                                                event_theme: 'blue',
                                                event_car_name: eventCarName,
                                                event_id: appointment.id,
                                            };


                                            this.events.push(event);
                                        }
                                    },
                                }
                            }
                        </script>
                    </div>
                    {{-- /Calendar again --}}

                </div>
            </div>
        @endauth
    </div>
@endsection
