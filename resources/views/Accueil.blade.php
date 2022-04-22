<x-app-layout >
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight ">
            {{ __('Accueil') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Page Accueil

                </div>

                <div  class="flex flex-col">
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
</x-app-layout>
