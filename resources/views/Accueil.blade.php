<x-app-layout >
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight ">
            {{ __('Accueil') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
{{--                <div class="p-6 bg-white border-b border-gray-200">--}}
{{--                    Page Accueil--}}

{{--                </div>--}}
                <div class="flex justify-center">
                    <div class="rounded-lg shadow-lg bg-white max-w-sm">
                        <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
                            <img class="rounded-t-lg" src="image/img.png" alt=""/>
                        </a>
                        <div class="p-6">
                            <h5 class="text-gray-900 text-xl font-medium mb-2">Carte Cesleste Stereo</h5>
                            <p class="text-gray-700 text-base mb-4">
                                Some quick example text to build on the card title and make up the bulk of the card's
                                content.
                            </p>
                            <button type="button" class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Button</button>
                        </div>
                    </div>
                </div>



                <div class="flex flex-col">
                    <a href="{{ route('CarteCeleste') }}">
                        <x-button>Direction Carte Cesleste stereo</x-button>

                    </a>
                    <a href="{{ route('CarteCeleste2') }}">
                        <x-button>Direction Carte Cesleste 2 stereo</x-button>
                    </a> <a href="{{ route('CarteCeleste3') }}">
                        <x-button>Direction Carte Cesleste 3 stereo</x-button>
                    </a> <a href="{{ route('CarteCeleste4') }}">
                        <x-button>Direction Carte Cesleste 4 planechart</x-button>
                    </a> <a href="{{ route('CarteCeleste5') }}">
                        <x-button>Direction Carte Cesleste 5 mollweide</x-button>
                    </a>
                </div>
            </div>

        </div>
    </div>
    {
    <div
        id="carouselDarkVariant"
        class="carousel slide carousel-fade carousel-dark relative"
        data-bs-ride="carousel"
    >
        <!-- Indicators -->
        <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
            <button
                data-bs-target="#carouselDarkVariant"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
            ></button>
            <button
                data-bs-target="#carouselDarkVariant"
                data-bs-slide-to="1"
                aria-label="Slide 1"
            ></button>
            <button
                data-bs-target="#carouselDarkVariant"
                data-bs-slide-to="2"
                aria-label="Slide 1"
            ></button>
        </div>

        <!-- Inner -->
        <div class="carousel-inner relative w-full overflow-hidden">
            <!-- Single item -->
            <div class="carousel-item active relative float-left w-full">
                <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(19).webp"
                    class="block w-full"
                    alt="Motorbike Smoke"
                />
                <div class="carousel-caption hidden md:block absolute text-center">
                    <h5 class="text-xl">First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item relative float-left w-full">
                <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(35).webp"
                    class="block w-full"
                    alt="Mountaintop"
                />
                <div class="carousel-caption hidden md:block absolute text-center">
                    <h5 class="text-xl">Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item relative float-left w-full">
                <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(40).webp"
                    class="block w-full"
                    alt="Woman Reading a Book"
                />
                <div class="carousel-caption hidden md:block absolute text-center">
                    <h5 class="text-xl">Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <!-- Inner -->

        <!-- Controls -->
        <button
            class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
            type="button"
            data-bs-target="#carouselDarkVariant"
            data-bs-slide="prev"
        >
            <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button
            class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
            type="button"
            data-bs-target="#carouselDarkVariant"
            data-bs-slide="next"
        >
            <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</x-app-layout>
