@extends('components.layout')


@section('body')
    <header class="">
        <div class="relative overflow-hidden bg-cover bg-no-repeat"
            style="
      background-position: 50%;
      background-image: url('/images/images.jpeg');
      height: 400px;
    ">
            <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed"
                style="background-color: rgba(0, 0, 0, 0.75)">
                <div class="flex h-full items-center justify-center">
                    <div class="px-6 text-center text-white md:px-12">
                        <h1 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl font-bold mb-4"><span
                                class="main-color">Your Car's</span> Best Friend:
                            Trusted Services at Your Fingertips
                        </h1>
                        <h3 class="text-base sm:text-lg md:text-xl lg:text-2xl xl:text-3xl mb-8 font-bold">Unveiling
                            <span class="main-color">Excellence</span> Under
                            the Hood
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="mx-3 pb-2 mb-5 mt-5">
        <div>
            <h1
                class="text-1xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl text-center border-b pb-1 main-h1 font-bold">
                What We Do</h1>
            <h4 class="text-sm sm:text-base md:text-lg lg:text-xl xl:text-1xl text-gray-600 mb-10 text-center">Discover
                car services for top performance and
                reliability.</h4>
        </div>

        <x-home-grid />

    </section>

    <section>
        <x-home-bonus-services />
    </section>

    <section>
        <div class="home-header-container">
            <x-home-header :txt="'Our Premium Car Services'" />
        </div>

        {{-- Phone --}}
        <div class="carousel">
            @foreach ($services as $service)
                <x-carousel-item :service="$service" :iteration="$loop->iteration" />
            @endforeach
        </div>


        {{-- Tablet++ --}}
        <div class="premium-services pb-2 mb-5 flex-wrap flex-grow-0">
            <x-home-service-main :service="$services[0]" :iteration="1" />
            @foreach ($services->skip(1) as $service)
                <x-home-service :service="$service" :iteration="$loop->iteration + 1" />
            @endforeach
        </div>
    </section>
@endsection
