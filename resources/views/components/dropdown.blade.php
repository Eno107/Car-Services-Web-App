 @props(['items', 'name'])


 <div class="relative inline-block text-left" x-data="{ show: false }" @click.away="show=false">


     <x-dropdown-trigger :name="$name" />



     <div x-show="show"
         class="absolute left-0 z-10 mt-2 w-max origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
         role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1" id="category-dropdown-menu">
         <div class="py-1" role="none">

             <x-dropdown-links :items="$items" />

         </div>
     </div>
 </div>
