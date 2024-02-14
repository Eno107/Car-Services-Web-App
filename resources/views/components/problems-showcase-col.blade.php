@props(['problem'])
<div class=" flex flex-col mb-8 gap-2" style="width:100%; overflow:visible;">
    <div class="card bg-gray-800">
        <div class="body text-xs sm:text-sm md:text-base lg:text-sm xl:text-sm">
            <span class="username">From:
                {{ $problem->user->name }}</span>

            @if (isset($problem->user->cars) && count($problem->user->cars) > 0)
                <div class="makes flex flex-row gap-1 h-auto">
                    <span class="username">Owns: </span>
                    <div class="card-makes gap-1 flex-wrap">
                        @foreach ($problem->user->cars as $car)
                            <div class="card-makes-holder bg-cover bg-center border border-yellow-600 bg-white"
                                style="background-image: url({{ '/images/car_logos/' . $car->make->logo_path . '-logo.webp' }});">
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif



            <span class="username">Category:
                {{ $problem->category->name }}</span>
            <p class="text">{{ $problem->title }}</p>
            <div class="card-footer">
                <div>
                    <div><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                            <g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier">
                            </g>
                            <g id="SVGRepo_iconCarrier">
                                <path stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5"
                                    d="M16 10H16.01M12 10H12.01M8 10H8.01M3 10C3 4.64706 5.11765 3 12 3C18.8824 3 21 4.64706 21 10C21 15.3529 18.8824 17 12 17C11.6592 17 11.3301 16.996 11.0124 16.9876L7 21V16.4939C4.0328 15.6692 3 13.7383 3 10Z">
                                </path>
                            </g>
                        </svg>{{ $problem->comments->count() }}</div>
                </div>

            </div>
        </div>
    </div>


</div>
