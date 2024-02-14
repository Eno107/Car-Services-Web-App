<div x-cloak :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false"
    class="fixed inset-0 z-20 transition-opacity bg-black opacity-50 lg:hidden"></div>

<div x-cloak :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'"
    class="fixed inset-y-0 left-0 z-30 w-64 overflow-y-auto transition duration-300 transform bg-gray-900 lg:translate-x-0 lg:static lg:inset-0">
    <div class="flex items-center justify-center mt-8">
        <div class="flex items-center">
            <img src="\images\mechanics-logo-black 2.png" alt="" class="w-12 h-7" draggable="false">

            <span class="mx-2 text-2xl font-semibold text-white">Mechaniac</span>
        </div>
    </div>

    <nav class="mt-10">
        <a class="flex items-center px-6 py-2 mt-4  {{ request()->is('home') ? ' text-gray-100 bg-gray-700 bg-opacity-25' : 'text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100' }} "
            href="/">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
            </svg>
            <span class="mx-3">Dashboard</span>
        </a>

        <a class="flex items-center px-6 py-2 mt-4 {{ request()->is(Auth::user()->name . '/cars*') ? ' text-gray-100 bg-gray-700 bg-opacity-25' : 'text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100' }}"
            href="/{{ Auth::user()->name }}/cars">
            <svg fill="currentColor" class="w-6 h-6" viewBox="0 0 50 50" version="1.2" baseProfile="tiny"
                xmlns="http://www.w3.org/2000/svg" overflow="inherit">
                <path
                    d="M41 4h-18.923c-1.503-2-3.966-3.752-6.752-3.752-4.577 0-8.287 3.576-8.287 8.153 0 4.578 3.71 8.037 8.287 8.037 3.481 0 6.459-2.438 7.688-5.438h2.755l1.997-1.998 1.996 1.998h1.245l1.996-1.998 1.997 1.998h1.244l1.997-1.998 1.997 1.998h.763v.281l-.174.041 3.94-3.862-3.766-3.46zm-28.357 6.61c-1.324 0-2.399-1.075-2.399-2.401s1.075-2.4 2.399-2.4c1.326 0 2.401 1.074 2.401 2.4s-1.075 2.401-2.401 2.401zm30.357 19.39h-.553l-6.144-11.125c-.265-.481-.933-.875-1.483-.875h-18.64c-.55 0-1.218.394-1.483.875l-6.145 11.125h-.552c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h2v3c0 1.65 1.35 3 3 3h1c1.65 0 3-1.35 3-3v-3h17v3c0 1.65 1.35 3 3 3h1c1.65 0 3-1.35 3-3v-3h2c1.1 0 2-.9 2-2v-10c0-1.1-.9-2-2-2zm-31.5 8c-1.381 0-2.5-1.119-2.5-2.5s1.119-2.5 2.5-2.5 2.5 1.119 2.5 2.5-1.119 2.5-2.5 2.5zm2-8l4.053-8.105c.246-.493.897-.895 1.447-.895h13c.55 0 1.201.402 1.447.895l4.053 8.105h-24zm26 8c-1.381 0-2.5-1.119-2.5-2.5s1.119-2.5 2.5-2.5 2.5 1.119 2.5 2.5-1.119 2.5-2.5 2.5z" />
            </svg>
            <span class="mx-3">My Cars</span>
        </a>


        <a class="flex items-center px-6 py-2 mt-4 {{ request()->is('services*') ? ' text-gray-100 bg-gray-700 bg-opacity-25' : 'text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100' }}"
            href="/services">
            <svg fill="currentColor" class="w-6 h-6" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" width="800px" height="800px" viewBox="0 0 479.79 479.79"
                xml:space="preserve">
                <g>
                    <path
                        d="M478.409,116.617c-0.368-4.271-3.181-7.94-7.2-9.403c-4.029-1.472-8.539-0.47-11.57,2.556l-62.015,62.011l-68.749-21.768
		l-21.768-68.748l62.016-62.016c3.035-3.032,4.025-7.543,2.563-11.565c-1.477-4.03-5.137-6.837-9.417-7.207
		c-37.663-3.245-74.566,10.202-101.247,36.887c-36.542,36.545-46.219,89.911-29.083,135.399c-1.873,1.578-3.721,3.25-5.544,5.053
		L19.386,373.152c-0.073,0.071-0.145,0.149-0.224,0.219c-24.345,24.346-24.345,63.959,0,88.309
		c24.349,24.344,63.672,24.048,88.013-0.298c0.105-0.098,0.201-0.196,0.297-0.305l193.632-208.621
		c1.765-1.773,3.404-3.628,4.949-5.532c45.5,17.167,98.9,7.513,135.474-29.056C468.202,191.181,481.658,154.275,478.409,116.617z
		 M75.98,435.38c-8.971,8.969-23.5,8.963-32.47,0c-8.967-8.961-8.967-23.502,0-32.466c8.97-8.963,23.499-8.963,32.47,0
		C84.947,411.878,84.947,426.419,75.98,435.38z" />
                </g>
            </svg>
            {{-- <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
            </svg> --}}

            <span class="mx-3">Services</span>
        </a>

        <a class="flex items-center px-6 py-2 mt-4 {{ request()->is('problems*') ? ' text-gray-100 bg-gray-700 bg-opacity-25' : 'text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100' }}"
            href="/problems">
            <svg fill="currentColor" class="w-6 h-6" version="1.2" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-63 65 128 128" xml:space="preserve"
                viewBox="0 0 479.79 479.79">
                <path
                    d="M-32.6,131.7l-2.1,2.2l4,3.7l2.1-2.2c0.9,0.5,1.9,0.9,2.8,1l0.1,3l5.4-0.2l-0.1-3c1-0.2,1.9-0.7,2.7-1.2l2.2,2.1l3.7-4
	l-2.2-2.1c0.5-0.9,0.9-1.9,1-2.8l3-0.1l-0.2-5.5l-3,0.1c-0.2-1-0.7-1.9-1.2-2.7l2.1-2.2l-4-3.7l-2.1,2.2c-0.9-0.5-1.9-0.9-2.8-1
	l-0.1-3l-5.4,0.2l0.1,3c-1,0.2-1.9,0.7-2.7,1.2l-2.2-2.1l-3.7,4l2.2,2.1c-0.5,0.9-0.9,1.9-1,2.8l-3,0.1l0.2,5.4l3-0.1
	C-33.6,130-33.2,130.9-32.6,131.7z M-23.7,118.6c4.1-0.1,7.4,3,7.5,7.1s-3,7.4-7.1,7.5s-7.4-3-7.5-7.1
	C-30.9,122.1-27.7,118.7-23.7,118.6z M-22.2,149.3l-0.1-3.7l-2.9,0.1c-0.1-0.2-0.1-0.4-0.2-0.5l2.1-2.1l-2.7-2.6l-2,2.1
	c-0.2-0.1-0.4-0.2-0.6-0.2l-0.1-2.9l-3.7,0.1l0.1,2.9c-0.1,0-0.2,0.1-0.4,0.2c-0.1,0-0.2,0.1-0.2,0.1l-2.1-2l-2.6,2.7l2.1,2
	c-0.1,0.2-0.2,0.4-0.2,0.6l-2.9,0.1l0.1,3.7l2.9-0.1c0.1,0.2,0.2,0.4,0.2,0.5l-2.1,2.2l2.7,2.6l2.1-2.2c0.2,0.1,0.3,0.1,0.5,0.2
	l0.1,3l3.7-0.1l-0.1-3c0.1,0,0.2-0.1,0.3-0.1c0.1,0,0.1,0,0.2-0.1l2.2,2.1l2.6-2.7l-2.2-2.1c0.1-0.2,0.2-0.3,0.2-0.5L-22.2,149.3z
	 M-28.3,148.9c-0.6,1.1-2,1.6-3.1,1c-1.1-0.6-1.6-2-1-3.1c0.6-1.1,2-1.6,3.1-1C-28.2,146.4-27.8,147.8-28.3,148.9z M-37.4,140.8
	l-3.6-3.3c0.1-0.3,0.3-0.6,0.4-0.9l4.9-0.1l-0.2-6.1l-4.9,0.1c-0.1-0.3-0.2-0.6-0.4-0.9l3.3-3.6l-4.4-4.2l-3.3,3.6
	c-0.2-0.1-0.4-0.2-0.6-0.2c-0.1,0-0.2-0.1-0.4-0.2l-0.1-4.8l-6.1,0.2l0.1,4.8c-0.3,0.1-0.6,0.2-0.9,0.4l-3.5-3.3l-4.2,4.4l3.6,3.3
	c-0.1,0.3-0.3,0.6-0.4,0.9L-63,131l0.2,6.1l5-0.2c0.1,0.3,0.2,0.5,0.4,0.8l-3.4,3.7l4.4,4.2l3.4-3.7c0.2,0.1,0.3,0.1,0.4,0.2
	c0.1,0,0.2,0.1,0.3,0.1l0.2,5.1l6.1-0.2l-0.2-5c0.3-0.1,0.5-0.2,0.8-0.3l3.7,3.4L-37.4,140.8z M-47.7,139.3c-3,0.9-6.3-0.8-7.2-3.8
	c-0.9-3,0.8-6.3,3.8-7.2c3-0.9,6.3,0.8,7.2,3.8C-42.9,135.1-44.6,138.3-47.7,139.3z M25.8,96.7c8.6,0,15.6,7,15.6,15.6
	s-7,15.6-15.6,15.6s-15.6-7-15.6-15.6S17.2,96.7,25.8,96.7z M45.4,131.9H9.9c-5.1,0-10.2,0.7-13.9,5.7c-1.6,2.5-16.4,21.1-16.4,21.1
	h-20.8c-3.7,0-6.8,3.1-6.8,6.8s3.1,6.8,6.8,6.8h23.7c1.7,0,3.5-0.7,4.7-2l13.9-16.9c0.4-0.4,0.7-0.6,1.4-0.6c1.1,0,2,0.7,2,2v30.6
	h43v-30.1c0-1.1,0.7-2,2-2c1.1,0,2,0.7,2,2v30.2H65v-34.1C65,140.7,56.2,131.9,45.4,131.9z" />
            </svg>

            <span class="mx-3">Problems</span>
        </a>

        <a class="flex items-center px-6 py-2 mt-4 {{ request()->is('forms') ? ' text-gray-100 bg-gray-700 bg-opacity-25' : 'text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100' }}"
            href="/forms">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
            </svg>

            <span class="mx-3">Forms</span>
        </a>

        <a class="flex items-center px-6 py-2 mt-4 {{ request()->is(Auth::user()->name) ? ' text-gray-100 bg-gray-700 bg-opacity-25' : 'text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100' }}"
            href="/{{ Auth::user()->name }}">

            <svg fill="currentColor" class="w-6 h-6" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 45.532 45.532" xml:space="preserve">
                <g>
                    <path
                        d="M22.766,0.001C10.194,0.001,0,10.193,0,22.766s10.193,22.765,22.766,22.765c12.574,0,22.766-10.192,22.766-22.765
		S35.34,0.001,22.766,0.001z M22.766,6.808c4.16,0,7.531,3.372,7.531,7.53c0,4.159-3.371,7.53-7.531,7.53
		c-4.158,0-7.529-3.371-7.529-7.53C15.237,10.18,18.608,6.808,22.766,6.808z M22.761,39.579c-4.149,0-7.949-1.511-10.88-4.012
		c-0.714-0.609-1.126-1.502-1.126-2.439c0-4.217,3.413-7.592,7.631-7.592h8.762c4.219,0,7.619,3.375,7.619,7.592
		c0,0.938-0.41,1.829-1.125,2.438C30.712,38.068,26.911,39.579,22.761,39.579z" />
                </g>
            </svg>



            <span class="mx-3">Profile</span>
        </a>
    </nav>
</div>
