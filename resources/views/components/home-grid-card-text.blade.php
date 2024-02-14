@props(['h3', 'p', 'h1', 'bg', 'c'])
<div class="{{ $bg }} relative w-full h-full overflow-hidden">
    <div class="flex flex-col justify-center align-center items-start gap-1 h-full">
        <h3 class="text-center font-bold px-2 w-full text-lg sm:text-lg md:text-xl lg:text-2xl xl:text-3xl mb-2"
            style="color: {{ $c }}; line-height:100%;">
            {{ $h3 }}
        </h3>
        <p class="px-2 text-center text-sm sm:text-base md:text-base lg:text-lg xl:text-xl w-full"
            style="line-height: 90%">
            {{ $p }}
        </p>
    </div>

    <h1 class="home-grid-card-shadow-text text-left absolute bottom-0 px-2 text-white "
        style="color: rgba(255, 255, 255, 0.2)">
        {{ $h1 }}</h1>
</div>
