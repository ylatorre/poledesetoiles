<x-app-layout>
    <link href="public/js/lity.css" rel="stylesheet">
    <script src="public/js/jquery.js"></script>
    <script src="public/js/lity.js"></script>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet" />
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"></script>
    {{-- video carousel --}}
    <div id="carouselVideoExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-mdb-target="#carouselVideoExample" data-mdb-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-mdb-target="#carouselVideoExample" data-mdb-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-mdb-target="#carouselVideoExample" data-mdb-slide-to="2"
                aria-label="Slide 3"></button>
        </div>

        <!-- Inner -->
        <div class="carousel-inner">
            <!-- Single item -->
            <div class="carousel-item active">
                {{-- <video  style="width: 100%; height: auto;" autoplay loop muted> --}}
                {{-- <div style="width: 100%; height: 100%; float: none; clear: both;"> --}}
                {{-- <embed --}}
                {{-- src="https://www.youtube.com/embed/J---aiyznGQ?autohide=1&autoplay=1" --}}
                {{-- wmode="transparent" --}}
                {{-- type="video/mp4" --}}
                {{-- width="100%" height="100%" --}}
                {{-- allow="autoplay; encrypted-media; picture-in-picture" --}}
                {{-- allowfullscreen --}}
                {{-- title="Keyboard Cat" --}}
                {{-- > --}}
                {{-- </div> --}}
                <div style="width: 100%; height: 800px; float: none; clear: both; margin: 2px auto;">
                    <embed
                        src="https://www.youtube.com/embed/Y_plhk1FUQA?start=15&autohide=1&autoplay=1&mute=1&controls=0&disablekb=1&modestbranding=1&showinfo=0"
                        wmode="transparent" type="video/mp4" width="100%" height="100%"
                        allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen title="Keyboard Cat">
                </div>
                {{-- <source src="/videos/espace.mp4" type="video/mp4" /> --}}
                {{-- </video> --}}
                <div class="carousel-caption d-none d-md-block">
                    <div style="text-shadow: 2px 2px 2px black;">
                        <h5>Images de la NASA dans l'espace lointain</h5>
                        <p>
                            voyage dans les profondeurs de l'univers, ?? la d??couverte des galaxies, des n??buleuses, des
                            ??toiles et m??me des plan??tes, telles qu'elles sont per??ues.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item">

                <div style="width: 100%; height: 800px; float: none; clear: both; margin: 2px auto;">
                    <embed
                        src="https://www.youtube.com/embed/DDU-rZs-Ic4?&autohide=1&autoplay=1&mute=1&controls=0&disablekb=1&modestbranding=1&showinfo=0"
                        wmode="transparent" type="video/mp4" width="100%" height="100%"
                        allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen title="Keyboard Cat">
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <div style="text-shadow: 2px 2px 2px black;">
                        <h5>Vue de la Terre</h5>
                        <p>
                            Vue de la Terre de l'espace depuis ISS.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item">
                <div style="width: 100%; height: 800px; float: none; clear: both; margin: 2px auto;">
                    <embed
                        src="https://www.youtube.com/embed/tfloNULeDlY?&autohide=1&autoplay=1&mute=1&controls=0&disablekb=1&modestbranding=1&showinfo=0"
                        wmode="transparent" type="video/mp4" width="100%" height="100%"
                        allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen title="Keyboard Cat">
                </div>

                <div class="carousel-caption d-none d-md-block">
                    <div style="text-shadow: 2px 2px 2px black;">
                        <h5>Les autres mondes</h5>
                        <p>
                            Un regard sur notre syst??me Solaire.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Inner -->

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-mdb-target="#carouselVideoExample"
            data-mdb-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-mdb-target="#carouselVideoExample"
            data-mdb-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg"><br>
                <div class="p-6 bg-white border-b border-gray-200">
                    Comme vous le savez peut-??tre d??j??, <br>Lyon peut se vanter d???avoir une station radioastronomie
                    d???importance internationale ! <br>L??g??rement excentr?? de Lyon, en plein Rh??ne, se cache un observatoire
                    qui scrute l???espace gr??ce aux ondes radio. <br><br>Le P??le des ??toiles est un site scientifique qui attire
                    de plus en plus de curieux et qui permet de comprendre les myst??res de l???univers???<br><br>Nous avons demand??
                    ?? Arnaud Paradis de nous en dire plus sur l???histoire et les activit??s du P??le des ??toiles de Lyon.<br><br>
                    Le 5 Aout 1995, une ??quipe d???astronomes d??cide d???implanter ?? Lyon un observatoire de radioastronomie
                    afin d???observer les ??toiles. Si nous sommes ??merveill??s par leurs lumi??res qui illuminent le ciel,
                    elles ??mettent ??galement un rayonnement invisible, les ondes radio. <br>Des radiot??lescopes sont alors construits pour
                    observer le soleil, les galaxies et la plan??te Jupiter.<br><br> Aujourd???hui, nous trouvons 5 instruments
                    diff??rents, install??s sur un grand terrain de 15 hectares. <br><br>Ils sont utilis??s par des astronomes du
                    monde entier pour ??tudier notre univers. La station de radioastronomie de Lyon est rattach??e ??
                    l???observatoire de Paris, au CNRS et ?? l???universit?? de Lyon 1.<br><br>
                    L???atmosph??re terrestre ??tant transparente aux ondes radio, un radiot??lescope peut observer le jour,
                    la nuit et m??me sous la pluie.<br> Par contre, les appareils ??lectriques, informatiques et ??lectroniques
                    g??n??rent des interf??rences radio.<br> Voil?? pourquoi la station s???est install??e l??gerement excentr?? du centre de Lyon
                    avec une grande zone for??t autour.<br><br> L???avantage pour nous, curieux du ciel, est que loin des lumi??res
                    des villes, le ciel est bien sombre, permettant de mieux observer les ??toiles et ?? Lyon, la voie
                    lact??e n???est pas une l??gende.<br><br>
                    Pour faire d??couvrir ce lieu ?? la fois scientifique et un peu magique, la mairie de Lyon a cr???? en
                    1997, un lieu d???accueil et de d??couverte<br>
                    pour le grand public : ?? ciel ouvert ?? Lyon ??. <br>Aujourd???hui, c???est le d??partement du Rh??ne, qui en
                    est le propri??taire.
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex flex-row justify-around ">
                <div class="flex justify-center   ">
                    <div class="rounded-lg shadow-lg bg-white max-w-sm ">
                        <a href="{{ route('CarteCeleste') }}" data-mdb-ripple="true" data-mdb-ripple-color="light">
                            <img class="rounded-t-lg" src="image/img.png" alt="" />
                        </a>
                        <div class="p-6">
                            <h5 class="text-gray-900 text-xl font-medium mb-2">Carte Cesleste Gnomic</h5>
                            <p class="text-gray-700 text-base mb-4">
                                Carte stellaire en mode vue gnomic ?? la position g??ographique du P??le de Etoiles en
                                temps r??el, horizon visible et non-visible avec zoom possible .
                            </p>
                            <a href="{{ route('CarteCeleste') }}">
                                <button type="button"
                                    class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Voir plus</button>
                            </a>
                        </div>
                    </div>
                </div>

                <!--card2-->
                <div class="flex justify-center">
                    <div class="rounded-lg shadow-lg bg-white max-w-sm">
                        <a href="{{ route('CarteCeleste4') }}" data-mdb-ripple="true" data-mdb-ripple-color="light">
                            <img class="rounded-t-lg" src="image/img.png" alt="" />
                        </a>
                        <div class="p-6">
                            <h5 class="text-gray-900 text-xl font-medium mb-2">Carte Cesleste Planechar</h5>
                            <p class="text-gray-700 text-base mb-4">
                                Carte stellaire en mode horizon visible ?? la position g??ographique du P??le de Etoiles en
                                temps r??el.
                            </p>
                            </p>
                            <a href="{{ route('CarteCeleste4') }}">
                                <button type="button"
                                    class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Voir plus</button>
                            </a>
                        </div>
                    </div>
                </div>

                <!--card3-->
                <div class="flex justify-center">
                    <div class="rounded-lg shadow-lg bg-white max-w-sm">
                        <a href="{{ route('CarteCeleste5') }}" data-mdb-ripple="true" data-mdb-ripple-color="light">
                            <img class="rounded-t-lg" src="image/img.png" alt="" />
                        </a>
                        <div class="p-6">
                            <h5 class="text-gray-900 text-xl font-medium mb-2">Carte Cesleste mollweide</h5>
                            <p class="text-gray-700 text-base mb-4">
                                Carte stellaire en ovale ?? la position g??ographique du P??le de Etoiles en temps r??el.
                            </p>
                            <a href="{{ route('CarteCeleste5') }}">
                                <button type="button"
                                    class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Voir plus</button>
                            </a>
                        </div>
                    </div>
                </div>



            </div>

        </div>
    </div>
    <div class="bg-gray-200 ">
        <div class="container px-6 py-4 mx-auto lg:flex lg:h-128 lg:py-16 ">
            <div class="flex flex-col items-center w-full lg:flex-row lg:w-1/2">
                <div class="max-w-lg">
                    <h1 class="text-xl tracking-wide text-white text-gray-800 lg:text-3xl lg:text-4xl">calendrier
                        </h1>
                    <p class="mt-4 text-gray-300 text-gray-600">reserver vos prochaine visite au pole stronomique
                        afin de choisir une date qui vous permetra de voir des henomene astronaumique,
                        un souvenir fantastique pour les grands et les petits.</p>
                    <div class="mt-6">
                        <a href="{{route('Calendrier')}}"
                            class="inlinlock px-3 py-2 font-semibold text-center text-white transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-400">
                            En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center w-full mt-2 lg:h-96 lg:w-1/2">
                <img class="object-cover w-full max-w-2xl rounded-md lg:h-full"
                    src="https://i.ibb.co/16fnL7p/Capture.png" alt="apple watch photo">
            </div>
        </div>
    </div>

    <x-slot name="header" style="display: none; visibility: hidden;">
    </x-slot>

    <style>
    .carousel-control-next {
        width: 50%;
    }

    .carousel-control-prev {
        width: 50%;
    }

    .carousel-control-next-icon {
        padding-left: 70%;
    }

    .carousel-control-prev-icon {
        padding-right: 70%;
    }
    </style>

</x-app-layout>
