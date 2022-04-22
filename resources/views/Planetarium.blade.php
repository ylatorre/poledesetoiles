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
<<<<<<< Updated upstream
    
=======
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

            var planetarium = $.virtualsky({
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
>>>>>>> Stashed changes
</x-app-layout>
