<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ExpoPermanante') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Page ExpoPermanante
                </div>
            </div>
        </div>
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
