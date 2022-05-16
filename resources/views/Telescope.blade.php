
<x-app-layout>
    <x-slot name="header" class="invisible">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Telescope') }}
        </h2>
    </x-slot>


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

    <!-- include Aladin Lite CSS file in the head section of your page -->
    <link rel="stylesheet" href="https://aladin.u-strasbg.fr/AladinLite/api/v2/latest/aladin.min.css" />

    <!-- you can skip the following line if your page already integrates the jQuery library -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.1.min.js" charset="utf-8"></script>

    <!-- insert this snippet where you want Aladin Lite viewer to appear and after the loading of jQuery -->
    <div id="aladin-lite-div" style="width:400px;height:400px;"></div>
    <script type="text/javascript" src="https://aladin.u-strasbg.fr/AladinLite/api/v2/latest/aladin.min.js" charset="utf-8"></script>
    <script type="text/javascript">
        var aladin = A.aladin('#aladin-lite-div', {survey: "P/DSS2/color", fov:60});
    </script>
</x-app-layout>
