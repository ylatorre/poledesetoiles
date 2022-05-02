<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Planetarium') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Page Planetarium
                </div>
            </div>
        </div>
    </div>
    <iframe src="{{route("gate")}}" height="300px" scrolling="no" frameborder="0"></iframe>
    {{--    tu peux ecrir a partir d'ici--}}

    <section>
        <div id="starmapgnomic" style="width:944px;height:400px;"></div>
    </section>


    {{--ici le css--}}
    <style>

    </style>

    {{--    ici le js--}}

    <script type="text/javascript">

        $(document).ready(function() {
        //ici commence la configuration de la map stellaire interactive
            var planetarium = $.virtualsky({
                'id': 'starmapgnomic',
                'projection': 'gnomic',
                'longitude': 4.798577016906673,
                'latitude': 45.77070341094022,
                'mouse': true,
                'cardinalpoints': true,
                'constellations': true,
                'constellationlabels': true,
                'meteorshowers': true,
                'showplanets': true,
                'showplanetlabels': true,
                'showstarlabels': true,
                'showstars': true,
                'live': true,
                'fov': 200
            });

        });

    </script>
</x-app-layout>
