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

    {{--    tu peux ecrir a partir d'ici--}}

    <section>
        <div id="starmapgnomic" style="width:944px;height:400px;"></div>
    </section>


    {{--ici le css--}}
    <style>

    </style>

    {{--    ici le js--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/VirtualSky-gh-pages/stuquery.min.js" type="text/javascript" ></script>
    <script src="/VirtualSky-gh-pages/virtualsky.min.js" type="text/javascript" ></script>
    <script src="./VirtualSky-gh-pages/excanvas.min.js" type="text/javascript" ></script>

    <script type="text/javascript" >

        S(document).ready(function() {

            var planetarium = S.virtualsky({
                'id': 'starmapgnomic',
                'projection': 'gnomic',
                'ra': 83.8220833,
                'dec': -5.3911111,
                'ground': false,
                'cardinalpoints':true,
                'constellations': false,
                'constellationlabels': true,
                'showplanets':true,
                'showplanetlabels':true,
                'meteorshowers': true,
                'live':true,
                'fov': 250
            });

        });

    </script>
</x-app-layout>
