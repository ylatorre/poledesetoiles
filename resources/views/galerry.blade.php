


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Goodies') }}
        </h2>
    </x-slot>

    <section class="overflow-hidden text-gray-700">
        <div class="container px-5 py-2 mx-auto lg:pt-24 lg:px-32">
            <div class="flex flex-wrap -m-1 md:-m-2">
                <div class="flex flex-wrap w-1/2">
                    <div class="w-1/2 p-1 md:p-2">
                        <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg opacity-70 hover:opacity-100 duration-300"
                             src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(70).webp">
{{--                        <div class="opacity-0 hover:opacity-100 duration-300 absolute inset-0 z-10 flex justify-center items-center text-6xl text-white font-semibold">Dwayne</div>--}}
                    </div>
                    <div class="w-1/2 p-1 md:p-2">
                        <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg  opacity-70 hover:opacity-100 duration-300"
                             src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(72).webp">
                    </div>
                    <div class="w-full p-1 md:p-2">
                        <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg  opacity-70 hover:opacity-100 duration-300"
                             src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp">
                    </div>
                </div>
                <div class="flex flex-wrap w-1/2">
                    <div class="w-full p-1 md:p-2">
                        <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg  opacity-70 hover:opacity-100 duration-300"
                             src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(74).webp">
                    </div>
                    <div class="w-1/2 p-1 md:p-2">
                        <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg  opacity-70 hover:opacity-100 duration-300"
                             src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(75).webp">
                    </div>
                    <div class="w-1/2 p-1 md:p-2">
                        <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg  opacity-70 hover:opacity-100 duration-300"
                             src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(77).webp">
                    </div>
                </div>
            </div>
        </div>

        <div class="container px-5  mx-auto  lg:px-32">
            <div class="flex flex-wrap -m-1 md:-m-2">
                <div class="flex flex-wrap w-1/2">
                    <div class="w-full p-1 md:p-2">
                        <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg  opacity-70 hover:opacity-100 duration-300"
                             src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(74).webp">
                    </div>
                    <div class="w-1/2 p-1 md:p-2">
                        <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg  opacity-70 hover:opacity-100 duration-300"
                             src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(75).webp">
                    </div>
                    <div class="w-1/2 p-1 md:p-2">
                        <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg  opacity-70 hover:opacity-100 duration-300"
                             src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(77).webp">
                    </div>
                </div>
                <div class="flex flex-wrap w-1/2">
                    <div class="w-1/2 p-1 md:p-2">
                        <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg opacity-70 hover:opacity-100 duration-300"
                             src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(70).webp">
                        {{--                        <div class="opacity-0 hover:opacity-100 duration-300 absolute inset-0 z-10 flex justify-center items-center text-6xl text-white font-semibold">Dwayne</div>--}}
                    </div>
                    <div class="w-1/2 p-1 md:p-2">
                        <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg  opacity-70 hover:opacity-100 duration-300"
                             src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(72).webp">
                    </div>
                    <div class="w-full p-1 md:p-2">
                        <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg  opacity-70 hover:opacity-100 duration-300"
                             src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp">
                    </div>
                </div>

            </div>
        </div>
    </section>

    @foreach($liens as $lien)
{{--        @php--}}
{{--        dd($lien->lien)--}}
{{--        @endphp--}}
        <img src="{{$lien->lien}}" alt="">
    @endforeach
</x-app-layout>
