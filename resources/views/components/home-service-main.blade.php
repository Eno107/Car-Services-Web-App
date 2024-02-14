 @props(['service', 'iteration'])
 <div class="flex" style="width: 80%; margin-bottom: 0.5rem">

     <x-home-service-logo :logo="$service->logo_path" />

     <div
         class="border-r border-b border-yellow-600 border-l-0 border-t bg-white rounded-b-none p-4 flex flex-col justify-between leading-normal">
         <div class="mb-3">
             <a href="/services/{{ $service->slug }}"
                 class="underline text-gray-900 font-bold text-xl mb-2">{{ $service->name }} <span
                     style="color: #ed8554">{{ ' #' . $iteration }}</span></a>
             <p class="text-gray-700 text-base" style="line-height:1.25rem">{{ $service->title }}</p>
         </div>
         <div class="flex flex-wrap items-center gap-2">

             <x-dropdown :name="'Categories'" :items="$service->categories" />
             <x-dropdown :name="'Makes'" :items="$service->makes" />

         </div>
     </div>
 </div>
