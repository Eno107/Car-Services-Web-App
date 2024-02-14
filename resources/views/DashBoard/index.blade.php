@extends('_layouts.master')

@section('body')
    <h3 class="text-gray-700 text-3xl font-medium">Dashboard</h3>

    <div class="mt-4">
        <div class="flex flex-wrap  xl:gap-y-6">
            <div class="w-full pr-5 sm:w-1/2 xl:w-1/3">
                <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                    <div class="p-3 rounded-full bg-indigo-600 bg-opacity-75">
                        <?xml version="1.0" encoding="utf-8"?>
                        <svg fill="white" class="h-8 w-8 text-white" viewBox="-4 0 32 32" version="1.1"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>car</title>
                            <path
                                d="M19.938 7.188l3.563 7.156c0.063 0.094 0.094 0.219 0.125 0.313 0.219 0.563 0.375 1.344 0.375 1.844v3.406c0 1.063-0.719 1.938-1.719 2.188v2c0 0.969-0.781 1.719-1.719 1.719-0.969 0-1.719-0.75-1.719-1.719v-1.938h-13.688v1.938c0 0.969-0.75 1.719-1.719 1.719-0.938 0-1.719-0.75-1.719-1.719v-2c-1-0.25-1.719-1.125-1.719-2.188v-3.406c0-0.5 0.156-1.281 0.375-1.844 0.031-0.094 0.063-0.219 0.125-0.313l3.563-7.156c0.281-0.531 1.031-1.031 1.656-1.031h12.563c0.625 0 1.375 0.5 1.656 1.031zM5.531 9.344l-1.906 4.344c-0.094 0.156-0.094 0.344-0.094 0.469h16.938c0-0.125 0-0.313-0.094-0.469l-1.906-4.344c-0.25-0.563-1-1.063-1.594-1.063h-9.75c-0.594 0-1.344 0.5-1.594 1.063zM4.688 19.906c1 0 1.781-0.813 1.781-1.844 0-1-0.781-1.781-1.781-1.781s-1.844 0.781-1.844 1.781c0 1.031 0.844 1.844 1.844 1.844zM19.313 19.906c1 0 1.844-0.813 1.844-1.844 0-1-0.844-1.781-1.844-1.781s-1.781 0.781-1.781 1.781c0 1.031 0.781 1.844 1.781 1.844z">
                            </path>
                        </svg>

                    </div>

                    <div class="mx-5">
                        <h4 class="text-2xl font-semibold text-gray-700">{{ Auth::user()->cars->count() }}</h4>
                        <div class="text-gray-500">Cars Registered</div>
                    </div>
                </div>
            </div>

            <div class="w-full mt-6  pr-5 sm:w-1/2 xl:w-1/3 sm:mt-0">
                <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                    <div class="p-3 rounded-full bg-yellow-600 bg-opacity-75">
                        <svg fill="white" class="h-8 w-8 text-white" version="1.1" id="Capa_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 363.715 363.715" xml:space="preserve">
                            <g>
                                <path
                                    d="M236.25,222.275c0.865-3.233,0.421-6.608-1.252-9.506l-26.079-45.174c-2.232-3.864-6.393-6.267-10.862-6.267
		c-2.186,0-4.347,0.582-6.249,1.681l-13.595,7.85c-5.525-4.053-11.5-7.526-17.834-10.332v-15.662
		c0-6.908-5.621-12.526-12.527-12.526H95.688c-6.906,0-12.525,5.618-12.525,12.526v15.661c-6.335,2.806-12.309,6.28-17.835,10.333
		l-13.595-7.849c-1.902-1.099-4.064-1.68-6.25-1.68c-4.468,0-8.629,2.401-10.861,6.266L8.542,212.768
		c-1.673,2.899-2.118,6.274-1.253,9.507c0.867,3.232,2.939,5.934,5.836,7.605l13.557,7.826c-0.365,3.391-0.559,6.832-0.559,10.318
		c0,3.486,0.193,6.928,0.559,10.319l-13.557,7.827c-2.898,1.672-4.969,4.373-5.836,7.606c-0.865,3.231-0.42,6.608,1.253,9.505
		l26.079,45.174c2.232,3.865,6.394,6.266,10.861,6.266c2.186,0,4.348-0.58,6.25-1.68l13.596-7.849
		c5.525,4.052,11.5,7.526,17.834,10.332v15.661c0,3.346,1.303,6.491,3.67,8.857c2.366,2.365,5.512,3.67,8.855,3.67h52.164
		c6.906,0,12.527-5.62,12.527-12.527v-15.662c6.334-2.806,12.308-6.279,17.833-10.332l13.596,7.849c1.902,1.1,4.064,1.68,6.249,1.68
		c4.47,0,8.63-2.4,10.862-6.266l26.079-45.174c1.673-2.897,2.117-6.273,1.252-9.505c-0.865-3.233-2.938-5.935-5.834-7.606
		l-13.557-7.828c0.365-3.391,0.558-6.833,0.558-10.319c0-3.486-0.192-6.928-0.558-10.318l13.557-7.827
		C233.313,228.209,235.385,225.508,236.25,222.275z M121.77,302.423c-30.043,0-54.396-24.354-54.396-54.397
		c0-30.041,24.354-54.396,54.396-54.396s54.397,24.355,54.397,54.396C176.167,278.068,151.813,302.423,121.77,302.423z" />
                                <path
                                    d="M167.512,93.593c-0.572,2.14-0.277,4.374,0.83,6.29l17.256,29.892c1.479,2.559,4.231,4.146,7.188,4.146
		c1.447,0,2.876-0.384,4.137-1.111l9.002-5.197c3.654,2.68,7.606,4.972,11.795,6.827v10.377c0,2.214,0.861,4.295,2.428,5.861
		c1.566,1.566,3.647,2.427,5.86,2.427h34.517c4.57,0,8.29-3.718,8.29-8.288v-10.377c4.188-1.856,8.14-4.148,11.794-6.828
		l9.004,5.198c1.258,0.728,2.688,1.111,4.135,1.111c2.957,0,5.711-1.588,7.188-4.146l17.256-29.892
		c1.108-1.916,1.402-4.15,0.83-6.29c-0.574-2.139-1.944-3.926-3.861-5.033l-8.975-5.182c0.241-2.243,0.373-4.519,0.373-6.825
		c0-2.306-0.132-4.581-0.373-6.825l8.975-5.181c1.917-1.107,3.287-2.895,3.861-5.034c0.572-2.139,0.277-4.372-0.83-6.29
		l-17.256-29.892c-1.477-2.558-4.23-4.147-7.188-4.147c-1.447,0-2.877,0.385-4.135,1.113l-9.004,5.198
		c-3.654-2.68-7.605-4.972-11.794-6.827V8.289c0-4.57-3.72-8.289-8.29-8.289h-34.517c-4.57,0-8.288,3.719-8.288,8.289v10.378
		c-4.188,1.856-8.141,4.148-11.794,6.827l-9.003-5.198c-1.261-0.729-2.689-1.113-4.137-1.113c-2.956,0-5.709,1.59-7.188,4.147
		l-17.256,29.892c-1.107,1.918-1.402,4.151-0.83,6.29c0.574,2.14,1.945,3.927,3.861,5.034l8.975,5.181
		c-0.241,2.243-0.373,4.519-0.373,6.825c0,2.307,0.132,4.582,0.373,6.825l-8.975,5.182
		C169.457,89.667,168.086,91.454,167.512,93.593z M243.266,40.558c19.881,0,35.996,16.116,35.996,35.995
		s-16.115,35.995-35.996,35.995c-19.88,0-35.995-16.116-35.995-35.995S223.386,40.558,243.266,40.558z" />
                                <path
                                    d="M354.003,209.477l-6.179-3.567c0.167-1.544,0.258-3.111,0.258-4.699c0-1.588-0.091-3.154-0.258-4.699l6.179-3.567
		c1.319-0.762,2.263-1.992,2.657-3.465c0.395-1.473,0.191-3.01-0.57-4.33l-11.88-20.576c-1.017-1.762-2.911-2.855-4.946-2.855
		c-0.996,0-1.98,0.265-2.848,0.766l-6.197,3.578c-2.516-1.845-5.236-3.423-8.119-4.7v-7.144c0-3.145-2.56-5.706-5.705-5.706h-23.76
		c-3.147,0-5.706,2.561-5.706,5.706v7.144c-2.884,1.277-5.603,2.855-8.119,4.7l-6.198-3.578c-0.866-0.501-1.851-0.766-2.847-0.766
		c-2.035,0-3.931,1.093-4.946,2.855L252.94,185.15c-0.764,1.32-0.967,2.857-0.572,4.33c0.396,1.473,1.339,2.703,2.658,3.465
		l6.18,3.567c-0.167,1.544-0.258,3.11-0.258,4.698c0,1.588,0.091,3.154,0.258,4.698l-6.18,3.567
		c-1.319,0.761-2.263,1.99-2.658,3.464c-0.395,1.473-0.191,3.011,0.572,4.33l11.879,20.576c1.016,1.762,2.911,2.855,4.946,2.855
		c0.996,0,1.98-0.266,2.847-0.766l6.198-3.578c2.516,1.845,5.235,3.422,8.119,4.7v7.144c0,1.523,0.593,2.957,1.671,4.034
		c1.078,1.079,2.512,1.672,4.035,1.672h23.76c3.145,0,5.705-2.56,5.705-5.706v-7.144c2.883-1.277,5.604-2.855,8.119-4.7l6.197,3.578
		c0.867,0.5,1.852,0.766,2.848,0.766c2.035,0,3.93-1.093,4.946-2.855l11.88-20.576c0.762-1.319,0.965-2.857,0.57-4.33
		C356.266,211.467,355.322,210.237,354.003,209.477z M304.515,225.989c-13.686,0-24.778-11.095-24.778-24.778
		c0-13.685,11.092-24.779,24.778-24.779c13.685,0,24.777,11.095,24.777,24.779C329.292,214.895,318.199,225.989,304.515,225.989z" />
                            </g>
                        </svg>
                    </div>

                    <div class="mx-5">
                        <h4 class="text-2xl font-semibold text-gray-700">{{ Auth::user()->problems->count() }}</h4>
                        <div class="text-gray-500">Problems</div>
                    </div>
                </div>
            </div>

            <div class="w-full mt-6  pr-5 sm:w-1/2 xl:w-1/3 xl:mt-0">
                <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                    <div class="p-3 rounded-full bg-yellow-500 bg-opacity-75">
                        <svg fill="white" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" class="h-8 w-8 text-white"
                            viewBox="-40 10 489.264 489.264" xml:space="preserve">
                            <g>
                                <g>
                                    <path
                                        d="M423.658,234.356c-12.438-0.003-24.01,3.457-33.869,9.468c-3.709,2.262-8.354,2.345-12.141,0.216
			s-6.121-6.137-6.121-10.482V155.4c0-12.027-10.109-21.7-22.139-21.7h-95.748c-4.252,0-8.188-2.248-10.349-5.909
			c-2.161-3.662-2.23-8.196-0.172-11.917c5.22-9.429,8.19-20.296,8.19-31.821c0-36.233-29.374-65.627-65.617-65.627
			c-36.232,0-65.601,29.404-65.601,65.638c0,11.523,2.97,22.385,8.187,31.811c2.061,3.723,1.999,8.258-0.163,11.923
			c-2.163,3.665-6.102,5.902-10.356,5.902H22.014c-12.032,0-22.013,9.673-22.013,21.7v76.237c0,4.231,2.226,8.15,5.859,10.318
			c3.633,2.168,8.143,2.27,11.864,0.257c9.267-5.012,19.876-7.858,31.151-7.855c36.239-0.005,65.612,29.377,65.612,65.612
			c0,36.238-29.373,65.616-65.612,65.606c-11.276,0-21.885-2.847-31.152-7.857c-3.725-2.014-8.234-1.92-11.871,0.25
			C2.216,360.139,0,364.061,0,368.294v80.76c0,12.033,9.98,21.784,22.013,21.784h327.375c12.027,0,22.139-9.751,22.139-21.784
			v-82.681c0-4.342,2.344-8.346,6.127-10.475c3.783-2.127,8.426-2.053,12.135,0.207c9.857,6.011,21.432,9.47,33.867,9.47
			c36.24,0.01,65.607-29.368,65.607-65.606C489.264,263.734,459.896,234.351,423.658,234.356z" />
                                </g>
                            </g>
                        </svg>
                    </div>

                    <div class="mx-5">
                        <h4 class="text-2xl font-semibold text-gray-700">{{ Auth::user()->comments->count() }}</h4>
                        <div class="text-gray-500">Solutions</div>
                    </div>
                </div>
            </div>

            <div class="w-full mt-6 pr-5 sm:w-1/2 xl:w-1/3 xl:mt-0">
                <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                    <div class="p-3 rounded-full bg-gray-900 bg-opacity-75">
                        <svg class="h-8 w-8 text-white" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg">
                            <path fill="white"
                                d="M128 384v512h768V192H768v32a32 32 0 1 1-64 0v-32H320v32a32 32 0 0 1-64 0v-32H128v128h768v64H128zm192-256h384V96a32 32 0 1 1 64 0v32h160a32 32 0 0 1 32 32v768a32 32 0 0 1-32 32H96a32 32 0 0 1-32-32V160a32 32 0 0 1 32-32h160V96a32 32 0 0 1 64 0v32zm-32 384h64a32 32 0 0 1 0 64h-64a32 32 0 0 1 0-64zm0 192h64a32 32 0 1 1 0 64h-64a32 32 0 1 1 0-64zm192-192h64a32 32 0 0 1 0 64h-64a32 32 0 0 1 0-64zm0 192h64a32 32 0 1 1 0 64h-64a32 32 0 1 1 0-64zm192-192h64a32 32 0 1 1 0 64h-64a32 32 0 1 1 0-64zm0 192h64a32 32 0 1 1 0 64h-64a32 32 0 1 1 0-64z" />
                        </svg>
                    </div>

                    <div class="mx-5">
                        <h4 class="text-2xl font-semibold text-gray-700">{{ Auth::user()->appointments->count() }}</h4>
                        <div class="text-gray-500">Appointments</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-8">

    </div>
    <h4 class="text-gray-600 mb-8">Appointments</h4>
    <div class="bg-white">


        @php
            $appointmentsArr = [];
        @endphp
        @foreach ($appointments as $appointment)
            @php
                $event = [
                    'date' => $appointment->date,
                    'car_name' => $appointment->car ? $appointment->car->make->name : null,
                    'service_name' => $appointment->service->name,
                    'id' => $appointment->id,
                    'service_slug' => $appointment->service->slug,
                    'car_id' => $appointment->car ? $appointment->car->id : null,
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
                                            class="text-center text-xs text-gray-600 font-bold tracking-wide uppercase sm:text-sm md:text-sm lg:text-sm xl:text-sm 2xl:text-base">
                                            Your Text Goes Here
                                        </div>
                                    </div>
                            </div>
                            </template>
                        </div>

                        <div class="flex flex-wrap border-t border-l ">
                            <template x-for="blankday in blankdays">
                                <div style="width: 14.28%; max:height: 120px"
                                    class="text-center border-r border-b px-4 pt-2">
                                </div>
                            </template>
                            <template x-for="(date, dateIndex) in no_of_days" :key="dateIndex">
                                <div style="width: 14.28%; max:height: 120px" class="px-4 pt-2 border-r border-b relative"
                                    :class="{ 'bg-gray-100': isOldEvent(date) == true }">
                                    <div @click="isEventToday(date)" x-text="date" draggable="false"
                                        class="not-selectable inline-flex w-6 h-6  items-center justify-center cursor-pointer text-center leading-none rounded-full transition ease-in-out duration-100"
                                        :class="{
                                            'bg-blue-500 text-white': isToday(date) == true,
                                            'text-gray-700 hover:bg-blue-200': isToday(date) == false &&
                                                isOldEvent(date) == false,
                                            'hover:bg-gray-300': isOldEvent(date) == true,
                                        }">
                                    </div>
                                    <div style="height: 80px;" class="overflow-y-auto mt-1">

                                        <template
                                            x-for="event in events.filter(e => new Date(e.event_date).toDateString() ===  new Date(year, month, date).toDateString() )">
                                            <div class="flex flex-col">
                                                <a :href="'/services/' + event.event_slug">
                                                    <div class="px-2 py-1 rounded-lg mt-1 overflow-hidden border"
                                                        :class="{
                                                            'border-blue-200 text-blue-800 bg-blue-100': event
                                                                .event_theme === 'blue',
                                                            'border-red-200 text-red-800 bg-red-100': event
                                                                .event_theme ===
                                                                'red',
                                                            'border-yellow-200 text-yellow-800 bg-yellow-100': event
                                                                .event_theme === 'yellow',
                                                            'border-green-200 text-green-800 bg-green-100': event
                                                                .event_theme === 'green',
                                                            'border-purple-200 text-purple-800 bg-purple-100': event
                                                                .event_theme === 'purple'
                                                        }"
                                                        :title="event.event_title">
                                                        <p x-text="event.event_title"
                                                            class="text-sm truncate leading-tight">
                                                        </p>
                                                    </div>
                                                </a>

                                                <a :href="'/{{ Auth::user()->name }}/cars/' + event.event_car">
                                                    <div class="px-2 py-1 rounded-lg mt-1 overflow-hidden border"
                                                        :class="event.event_car_name === 'No Car' ?
                                                            'border-red-200 text-red-800 bg-red-100' :
                                                            'border-blue-200 text-blue-800 bg-blue-100'">
                                                        <p x-text="event.event_car_name"
                                                            class="text-sm truncate leading-tight"></p>
                                                    </div>
                                                </a>

                                            </div>
                                        </template>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Appointment poppup --}}
            <div style="background-color: rgba(0,0,0,0.8);" class="fixed z-40 top-0 right-0 left-0 bottom-0 h-full w-full"
                x-show.transition.opacity="openAppointmentPoppup">

                <div class="p-4 max-w-xl mx-auto relative absolute left-0 right-0 overflow-hidden mt-24">
                    <div class="shadow absolute right-0 top-0 w-10 h-10 rounded-full bg-white text-gray-500 hover:text-gray-800 inline-flex items-center justify-center cursor-pointer"
                        x-on:click="openAppointmentPoppup = !openAppointmentPoppup">
                        <svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M16.192 6.344L11.949 10.586 7.707 6.344 6.293 7.758 10.535 12 6.293 16.242 7.707 17.656 11.949 13.414 16.192 17.656 17.606 16.242 13.364 12 17.606 7.758z" />
                        </svg>
                    </div>

                    <div class=" main-form w-full rounded-lg bg-white overflow-hidden block p-8">

                        <h2 class="font-bold text-2xl mb-6 text-gray-800 border-b pb-2">View Appointment </h2>

                        <div class="mb-4">
                            <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide">Service
                                Name</label>
                            <input type="text"
                                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight "
                                readonly x-model="currentEvent.event_title">
                        </div>

                        <div class="mb-4">
                            <label for="" class="text-gray-800 block mb-1 font-bold text-sm tracking-wide">Car
                                appointed</label>
                            <input type="text"
                                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight"
                                readonly x-model="currentEvent.event_car_name">
                        </div>

                        <div class="mb-4">
                            <label for=""
                                class="text-gray-800 block mb-1 font-bold text-sm tracking-wide">Date</label>
                            <input type="text"
                                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight"
                                readonly x-model="formatDate(currentEvent.event_date)">
                        </div>

                        <div class="mb-4 flex justify-end">
                            <button type="button" x-on:click="openEnsurePoppup = !openEnsurePoppup"
                                class="bg-red-700 hover:bg-red-800 text-white font-bold py-1 px-2 rounded text-ms main-button">Cancel
                                Appointment</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- /Appoitnment poppup --}}

            {{-- Ensure poppup --}}
            <div style="background-color: rgba(0,0,0,0.8);"
                class="fixed z-40 top-0 right-0 left-0 bottom-0 h-full w-full flex items-center justify-center"
                x-show.transition.opacity="openEnsurePoppup">

                <div class="max-w-xl mx-auto">
                    <div class=" main-form w-full rounded-lg bg-white overflow-hidden block p-8 relative text-center">
                        <h1 class="text-base sm:text-lg md:text-xl lg:text-2xl xl:text-3xl 2xl:text-5xl"><span
                                class="main-color">Are you</span> sure?</h1>
                        <h4 class="text-xs sm:text-sm md:text-sm lg:text-sm xl:text-base 2xl:text-lg">Cancelling on
                            your service
                            may worsen your relationship.</h4>
                        <form :action="'/appointment/destroy/' + currentEvent.event_id" method="POST"
                            class="flex flex-row mt-8 justify-between">
                            @csrf

                            <button type="submit"
                                class="bg-red-700 hover:bg-red-800 text-white font-bold py-1 px-2 rounded text-ms main-button">Im
                                sure</button>

                            <button type="button"
                                class="bg-gray-700 hover:bg-gray-800 text-white font-bold py-1 px-2 rounded text-ms main-button"
                                x-on:click="openEnsurePoppup = !openEnsurePoppup">Go back</button>
                        </form>
                        <div class="absolute top-0 right-0 w-10 h-10 rounded-full bg-white text-gray-500 hover:text-gray-800 inline-flex items-center justify-center cursor-pointer"
                            x-on:click="openEnsurePoppup = !openEnsurePoppup">
                            <svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M16.192 6.344L11.949 10.586 7.707 6.344 6.293 7.758 10.535 12 6.293 16.242 7.707 17.656 11.949 13.414 16.192 17.656 17.606 16.242 13.364 12 17.606 7.758z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            {{-- /Ensure poppup --}}



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
                    openEnsurePoppup: false,
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

                    showEnsurePoppup() {
                        this.openEnsurePoppup = true;
                    },

                    showTestPoppup() {
                        if (this.currentEvent) {
                            this.openAppointmentPoppup = true;
                        }
                    },

                    isEventToday(date) {
                        const d = new Date(this.year, this.month, date);
                        const matchingEvent = this.events.find(event => d.toDateString() === new Date(event.event_date)
                            .toDateString());

                        if (matchingEvent) {
                            this.currentEvent = matchingEvent;
                            this.showTestPoppup();
                        } else {
                            this.currentEvent = {};
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


                    formatDate(dateString) {
                        const options = {
                            year: 'numeric',
                            month: '2-digit',
                            day: '2-digit',
                            hour: '2-digit',
                            minute: '2-digit'
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
                                event_title: appointment.service_name,
                                event_theme: 'blue',
                                event_car_name: eventCarName,
                                event_id: appointment.id,
                                event_slug: appointment.service_slug,
                                event_car: appointment.car_id,
                            };

                            this.events.push(event);
                        }
                    }
                }
            }
        </script>

    </div>
@endsection
