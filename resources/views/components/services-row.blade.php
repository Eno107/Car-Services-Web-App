 @props(['service'])
 <div class="flex" style="width: 100%; ">

     <div class="border-r  border-yellow-600 border-l border-t border-b h-auto premium-services-image flex-none bg-cover bg-center rounded-t-none  text-center overflow-hidden"
         style="background-image: url({{ '/images/service_logos/' . $service->logo_path . '.avif' }}); width:40%;"
         title="Mountain">
     </div>


     <div class="border-r border-b border-yellow-600 border-l-0 border-t bg-white rounded-b-none p-4 flex flex-col justify-between leading-normal"
         style="width:100%">
         <div class="mb-3">
             <a href="/services/{{ $service->slug }}"
                 class="underline text-gray-900 font-bold text-xl mb-2">{{ $service->name }}</a>
             {{-- <p class="text-gray-700 text-base" style="line-height:1.25rem">{{ $service->title }}</p> --}}
         </div>
         <div class="flex flex-wrap items-center gap-2">

             <x-dropdown :name="'Categories'" :items="$service->categories" />
             <x-dropdown :name="'Makes'" :items="$service->makes" />

         </div>
     </div>
 </div>
