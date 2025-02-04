<x-app-layout>
    <x-slot name="header">
        <div id="carouselExample" class="carousel slide full-width-carousel" data-bs-ride="carousel" data-bs-touch="true">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/logosirih.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/logosirih.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/logosirih.png') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </x-slot>

    <div class="py-12 container">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>