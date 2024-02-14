@props(['car'])
<div class="card-makes-holder bg-cover bg-center border border-yellow-600 bg-white"
    style="background-image: url('{{ asset('images/car_logos/' . $car->make->logo_path . '-logo.webp') }}');">
    @auth
        <style>
            .card-makes-holder {
                width: 18%;
            }
        </style>
    @else
        <style>
            .card-makes-holder {
                width: 12%;
            }
        </style>
    @endauth
</div>
