<x-app-layout >
    <!-- Font Awesome -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
    />
    <!-- MDB -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css"
        rel="stylesheet"
    />
    <!-- MDB -->
    <script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"
    ></script>

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
{{--        video carousel--}}
        <div
            id="carouselVideoExample"
            class="carousel slide carousel-fade"
            data-mdb-ride="carousel"
        >
            <!-- Indicators -->
            <div class="carousel-indicators">
                <button
                    type="button"
                    data-mdb-target="#carouselVideoExample"
                    data-mdb-slide-to="0"
                    class="active"
                    aria-current="true"
                    aria-label="Slide 1"
                ></button>
                <button
                    type="button"
                    data-mdb-target="#carouselVideoExample"
                    data-mdb-slide-to="1"
                    aria-label="Slide 2"
                ></button>
                <button
                    type="button"
                    data-mdb-target="#carouselVideoExample"
                    data-mdb-slide-to="2"
                    aria-label="Slide 3"
                ></button>
            </div>

            <!-- Inner -->
            <div class="carousel-inner">
                <!-- Single item -->
                <div class="carousel-item active">
                    <video  style="width: 100%; height: auto;" autoplay loop muted>
                        <source src="https://mdbcdn.b-cdn.net/img/video/Tropical.mp4" type="video/mp4" />
                    </video>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>
                            Nulla vitae elit libero, a pharetra augue mollis interdum.
                        </p>
                    </div>
                </div>

                <!-- Single item -->
                <div class="carousel-item">
                    <video  style="width: 100%; height: auto;" autoplay loop muted>
                        <source src="https://mdbcdn.b-cdn.net/img/video/forest.mp4" type="video/mp4" />
                    </video>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                    </div>
                </div>

                <!-- Single item -->
                <div class="carousel-item">
                    <video style="width: 100%; height: auto;" autoplay loop muted>
                        <source
                            src="https://mdbcdn.b-cdn.net/img/video/Agua-natural.mp4"
                            type="video/mp4"
                        />
                    </video>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>
                            Praesent commodo cursus magna, vel scelerisque nisl consectetur.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Inner -->

            <!-- Controls -->
            <button
                class="carousel-control-prev"
                type="button"
                data-mdb-target="#carouselVideoExample"
                data-mdb-slide="prev"
            >
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button
                class="carousel-control-next"
                type="button"
                data-mdb-target="#carouselVideoExample"
                data-mdb-slide="next"
            >
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    <x-slot name="header" style="display: none; visibility: hidden;">
        {{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight ">--}}
        {{--            {{ __('Accueil') }}--}}
        {{--        </h2>--}}
    </x-slot>

</x-app-layout>
