<x-app-layout >
    <link href="public/js/lity.css" rel="stylesheet">
    <script src="public/js/jquery.js"></script>
    <script src="public/js/lity.js"></script>
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
                        <a href="{{ route('CarteCeleste') }}" data-mdb-ripple="true" data-mdb-ripple-color="light">
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
{{--                    <video  style="width: 100%; height: auto;" autoplay loop muted>--}}
{{--                        <div style="width: 100%; height: 100%; float: none; clear: both;">--}}
{{--                            <embed--}}
{{--                                src="https://www.youtube.com/embed/J---aiyznGQ?autohide=1&autoplay=1"--}}
{{--                                wmode="transparent"--}}
{{--                                type="video/mp4"--}}
{{--                                width="100%" height="100%"--}}
{{--                                allow="autoplay; encrypted-media; picture-in-picture"--}}
{{--                                allowfullscreen--}}
{{--                                title="Keyboard Cat"--}}
{{--                            >--}}
{{--                        </div>--}}
                    <div style="width: 100%; height: 800px; float: none; clear: both; margin: 2px auto;">
                        <embed
                            src="https://www.youtube.com/embed/Y_plhk1FUQA?autohide=1&autoplay=1&mute=1"
                            wmode="transparent"
                            type="video/mp4"
                            width="100%" height="100%"
                            allow="autoplay; encrypted-media; picture-in-picture"
                            allowfullscreen
                            title="Keyboard Cat"
                        >
                    </div>
{{--                        <source src="/videos/espace.mp4" type="video/mp4" />--}}
{{--                    </video>--}}
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Images de la NASA dans l'espace lointain</h5>
                        <p>
                            voyage dans les profondeurs de l'univers, à la découverte des galaxies, des nébuleuses, des étoiles et même des planètes, telles qu'elles sont perçues.
                        </p>
                    </div>
                </div>

                <!-- Single item -->
                <div class="carousel-item">
{{--                    <video  style="width: 100%; height: auto;" autoplay loop muted>--}}
{{--                        <source src="https://uca169b447e6659e72b23d567bc3.previews.dropboxusercontent.com/p/hls_master_playlist/ABigNXqoEfiDiin_sSSlGcuF46kDB4IIwnQO5jJwwIERHGqjQUhjCysec8fVsUUJjBEnA9qxtKuljmP5vCvN6PMkzzSmus4frl1676vE0EBLeMYqP-khAjKKI8IcPhcqF4RQnfmfqfKq4z7O2SJcekr4jJoX7Foe3QEe4PSlnLWuw-5l8dyxxo_DEebg0_8Ux6xmGtuvAYRPCn7upOnJhs9nAM-tTj2rBJiFAC38akgez0lL73TV6Giby2IqIMWm-AQOpsSLbq3jZ9XQTvjVy0GxFJiMskj2HnL3h5KWcICI8Y8evGj_UpjstXDUAzsZRiDUOnF34maeoFXz_B9jbpe99avcxWXiRHM70C24nIg3aA/p.m3u8" type="application/vnd.apple.mpegurl" />--}}
{{--                    </video>--}}
                    <video style="width: 100%; height: auto;" autoplay loop muted controlslist="" class="vjs-tech" data-testid="video-js" id="vjs_video_3_html5_api" tabindex="-1" role="application" preload="auto" src="blob:https://www.dropbox.com/4fac4d7c-3dca-4d04-b355-875cfc1f7928" poster="https://uca169b447e6659e72b23d567bc3.previews.dropboxusercontent.com/p/thumb/ABh-wQq794gVL3KEnETxmJ2E1DDgqzSKlDAAF89nhw-64dEuU3oq4fp8EbupIkRCypo1SlBccP59cFyJU8oAu6jOelKm2K1JhdI0IVam6LQDxmGxxo_DVLcjjgSbA1hVNK0Gj5tpNGXAp6w6E8wbcO0UVrdW_qSlu8xJESr8VSyKY3IQIOaLvZH5k6WTkGm4G5cqSUnYxfgvTG9d_ufYVhO7pUrA1DT0OTII2WUsNebjM8gB-ndObSEfCiYdnfEpT05QvTXC6KJVjCQYClzqpXZYF-QMBTTY5VgDKSmY-nMPo9zZ7tUCJT-7Nd2dplQ4FXuNZUsyCuJUFbxA2RAIYQ1_/p.jpeg?psid=8bcfac63-8c91-449d-94bd-b0b20bcb43d6&amp;size=1024x768&amp;size_mode=2"><source src="https://uca169b447e6659e72b23d567bc3.previews.dropboxusercontent.com/p/hls_master_playlist/ABigNXqoEfiDiin_sSSlGcuF46kDB4IIwnQO5jJwwIERHGqjQUhjCysec8fVsUUJjBEnA9qxtKuljmP5vCvN6PMkzzSmus4frl1676vE0EBLeMYqP-khAjKKI8IcPhcqF4RQnfmfqfKq4z7O2SJcekr4jJoX7Foe3QEe4PSlnLWuw-5l8dyxxo_DEebg0_8Ux6xmGtuvAYRPCn7upOnJhs9nAM-tTj2rBJiFAC38akgez0lL73TV6Giby2IqIMWm-AQOpsSLbq3jZ9XQTvjVy0GxFJiMskj2HnL3h5KWcICI8Y8evGj_UpjstXDUAzsZRiDUOnF34maeoFXz_B9jbpe99avcxWXiRHM70C24nIg3aA/p.m3u8" type="application/vnd.apple.mpegurl"></video>
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
