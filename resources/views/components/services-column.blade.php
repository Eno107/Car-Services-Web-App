@props(['services'])
<div class="services-column-1 flex flex-col gap-3 mb-8" style="width: 30%; overflow:visible">
    @foreach ($services as $service)
        <div class="overflow-none">
            <div class=" border-r  border-yellow-600 border-l border-t  h-auto premium-services-image flex-none bg-cover bg-center rounded-t-none  text-center overflow-hidden"
                style="background-image: url({{ '/images/service_logos/' . $service->logo_path . '.avif' }}); height:35vh; width:100%;"
                title="Mountain">
            </div>

            <div
                class="border-r border-b border-yellow-600 border-l border-t  rounded-b-none bg-white p-4 flex flex-col justify-between leading-normal">
                <div class="mb-3">
                    <a href="/services/{{ $service->slug }}"
                        class="underline text-gray-900 font-bold text-xl mb-2">{{ $service->name }}</a>
                    <p class="text-gray-700 text-base" style="line-height:1.25rem">{{ $service->title }}</p>
                </div>
                <div class="flex flex-wrap items-center gap-2">

                    <x-dropdown :name="'Categories'" :items="$service->categories" />
                    <x-dropdown :name="'Makes'" :items="$service->makes" />

                </div>
            </div>
        </div>
    @endforeach
</div>
