<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Planetarium') }}
        </h2>
    </x-slot>

{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                <div class="p-6 bg-white border-b border-gray-200">--}}
{{--                    Page Planetarium--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <iframe src="{{route("gate")}}" height="300px" scrolling="no" frameborder="0"></iframe>--}}


    <div style="width: 100%; height: 1000px; float: none; clear: both; margin: 2px auto;">
        <embed
            src="https://www.youtube.com/embed/Kt04Pgmgxio?start=42&autohide=1&autoplay=1&mute=1&controls=0"
            wmode="transparent"
            type="video/mp4"
            width="100%" height="100%"
            allow="autoplay; encrypted-media; picture-in-picture"
            allowfullscreen
            title="Visite Planetarium"
        >
    </div>

    <script type="text/javascript">
        document.getElementsByClassName("ytp-title-text").class = display: none;
    </script>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Ici la visite virtuel de notre planetarium creer en 1995

                    Présentation
                    Observer le ciel la nuit impose des contraintes que l’on peut dépasser aujourd’hui par l’utilisation d’un planétarium
                    itinérant gonflable pour les grands comme plus les plus petits.

                    <img src=https://www.planete-sciences.org/astro/IMG/jpg/plane_2.jpg>


                    Le planétarium vu de face
                    La structure gonflable et le système de projection du planétarium permettent de montrer près de 800 étoiles,
                     les positions du Soleil, de la Lune et des cinq planètes visibles à l’œil nu : Mercure, Vénus, Mars, Jupiter et Saturne.
                      Plongé·e·s dans l’obscurité, les jeunes pourront s’initier à la connaissance des constellations du zodiaque,
                       de la mythologie et de l’orientation dans le ciel et sur Terre.



                    Intérieur du Planétarium

                    Système de projection du planétarium
                    Le planétarium peut également être utilisé sans sa bâche, en projetant sur une sphère semi-transparente. Ci-dessous, un exemple avec Jupiter.


                    Planétarium en projection sur une sphère, sans sa bâche
                    Capacité d’accueil : 15 à 20 personnes
                    Durée : séances de 35 à 45 min


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
