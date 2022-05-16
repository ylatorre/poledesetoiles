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



</x-app-layout>
