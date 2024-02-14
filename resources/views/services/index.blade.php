@extends(auth()->check() ? '_layouts.master' : 'components.layout')


@section('body')
    <div class="mx-3 mt-5">

        {{-- <div class="dividing-messages mb-3 text-sm md:text-base lg:text-lg xl:text-xl"> All Services
            <hr class="text-yellow-600 bg-yellow-600 border-transparent">
        </div> --}}

        <div style="width: 100%;">
            @php
                $firstColumnServices = [];
                $secondColumnServices = [];
            $thirdColumnServices = []; @endphp
            <div class="services-rows">
                <div class="flex flex-col gap-3 mb-5" style="width:100%">
                    @foreach ($services as $index => $service)
                        @php
                            if ($index % 3 == 0) {
                                $firstColumnServices[] = $service;
                            } elseif ($index % 3 == 1) {
                                $secondColumnServices[] = $service;
                            } else {
                                $thirdColumnServices[] = $service;
                            }
                        @endphp

                        <x-services-row :service="$service" />
                    @endforeach
                </div>
            </div>

            <div class="services-columns">
                <div class="flex flex-row flex-wrap justify-center gap-3">
                    <x-services-column :services="$firstColumnServices" />
                    <x-services-column :services="$secondColumnServices" />
                    <x-services-column :services="$thirdColumnServices" />
                </div>

            </div>

        </div>


        <div class="mx-9">
            {{ $services->links() }}
        </div>
    </div>


    @guest
        <div class="mx-3 mt-5 flex flex-col justify-center items-center">
            <h1 class="home-header text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl text-center">
                Not Finding What You Are Looking For?
            </h1>
            <p class="text-sm sm:text-sm md:text-base lg:text-lg xl:text-xl text-center">
                Click <span class="underline" style="color:#fca311"><a href="{{ route('register') }}">here</a></span> to get
                recommended
                services based on your cars
            </p>
        </div>

    @endguest
@endsection
