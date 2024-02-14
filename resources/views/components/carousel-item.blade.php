@props(['service', 'iteration'])
<div class="carousel-item mx-3">


    <div class="relative overflow-hidden bg-cover bg-no-repeat bg-center"
        style="
      background-position: 50%;
      background-image: url({{ 'images/service_logos/' . $service->logo_path . '.avif' }});
      height: 100%;
    ">
        <div class="absolute bottom-0 w-full h-10 overflow-hidden bg-fixed"
            style="background-color:  rgba(237, 133, 84, 0.4);">
            <div class="flex h-full items-center justify-center">

                <div class="text-center text-white md:px-12">
                    <a href="/services/{{ $service->slug }}" class="underline">
                        <span>{{ $service->name }} </span>
                    </a>
                    <span style="color:#ed8554">#{{ $iteration }}</span>
                </div>

            </div>
        </div>
    </div>
</div>
