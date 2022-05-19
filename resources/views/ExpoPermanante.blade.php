
<x-app-layout>

    <x-slot name="header" class="invisible">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ExpoPermanante') }}
        </h2>
    </x-slot>

    <link rel="stylesheet" href="{{ asset('scss/scss2.css') }}">

        <div
            id="carouselDarkVariant"
            class="carousel slide carousel-fade carousel-dark relative"
            data-bs-ride="carousel"
        >
            <!-- Indicators -->
            <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
                <button
                    data-bs-target="#carouselDarkVariant"
                    data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
            ></button>
            <button
                data-bs-target="#carouselDarkVariant"
                data-bs-slide-to="1"
                aria-label="Slide 1"
            ></button>
            <button
                data-bs-target="#carouselDarkVariant"
                data-bs-slide-to="2"
                aria-label="Slide 1"
            ></button>
        </div>

        <!-- Inner -->
        <div class="carousel-inner relative w-full overflow-hidden">
            <!-- Single item -->
            <div class="carousel-item active relative float-left w-full" style="height: 600px;object-fit: fill ">
                <img
                    src="https://cdn.astrobin.com/thumbs/nnWUNIgdHvaO_2560x0_n1wMX-gx.png"
                    class="block w-full"
                    alt="Motorbike Smoke"
                />
                <div class="carousel-caption hidden md:block absolute text-center">
                    <h5 class="text-xl text-white">NGC 6992 - The Eastern Veil Nebula (SHO)</h5>
                    <p class="text-white">Instruments De Prise De Vue: Takahashi CCA-250</p>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item relative float-left w-full " style="height: 600px">
                <img style="object-fit: cover;"
                    src="https://www.astrobin.com/b3gttn/final/rawthumb/qhd/?sync"
                    class="block w-full"
                    alt="Mountaintop"
                />
                <div class="carousel-caption hidden md:block absolute text-center"  >
                    <h5 class="text-xl">Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item relative float-left w-full" style=" background-color: black;height: 600px">
                <img style="max-width: 1000px;"
                    src="https://resize-parismatch.lanmedia.fr/r/375,250,FFFFFF,forcex,center-middle/img/var/pm/public/media/image/2022/05/12/16/La-premiere-photo-du-trou-noir-supermassif-de-notre-galaxie-enfin-devoilee.jpg?VersionId=gC4DIwmHVjgM.JCyFAPAnhlfGepNKOE."
                    class="block w-full"
                    alt="Woman Reading a Book"
                />
                <div class="carousel-caption hidden md:block absolute text-center">
                    <h5 class="text-xl text-white">Trou noir Sagittarius A</h5>
                    <p class="text-white">Trou noir géant situé au centre de notre propre galaxie, la Voie lactée</p>
                </div>
            </div>
        </div>
        <!-- Inner -->

        <!-- Controls -->
        <button
            class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
            type="button"
            data-bs-target="#carouselDarkVariant"
            data-bs-slide="prev"
        >
            <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button
            class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
            type="button"
            data-bs-target="#carouselDarkVariant"
            data-bs-slide="next"
        >
            <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    {{--    img galaxy--}}
{{--    <div class="backgroundGalaxy"></div>--}}
    <section class="overflow-hidden text-gray-700 mt-2 ">

        @for($i =0; $i < count($liens); $i= $i+6)
            <img src="https://i.ibb.co/tYC260T/unknown.png" style="position: absolute; width: 100%"   alt="">

            @if($i == count($liens))
                @break
            @endif

                <div class="container px-5  mx-auto  lg:px-32">
                    <div class="flex flex-wrap -m-1 md:-m-2" loading="lazy">
                        <div class="flex flex-wrap w-1/2">
                            <div class="w-full p-1 md:p-2">
                                <div class="example">
                                    <div class="food-card">
                                        <div class="card">
                                            <div class="card-img image-ratio">
                                                <div class="ratio-inner">
                                                    <div class="w-full p-1 md:p-2">
                                                        <div>
                                                            <img alt="gallery" loading="lazy" style="max-height: 400px;"
                                                             class="block object-cover object-center w-full h-full rounded-lg  opacity-70 hover:opacity-100 duration-300 "
                                                             src="{{$liens[$i]->lien}}">
                                                        <div class="card-content">
                                                            <div class="content">
                                                                <h3 class="title">{{$liens[$i]->titre}}</h3>
                                                                <p class="description">{{$liens[$i]->text}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @if($i+1 == count($liens))
                            @break
                        @endif
                        <div class="w-1/2 p-1 md:p-2">
                            <div class="food-card">
                                <div class="card">
                                    <div class="card-img image-ratio">
                                        <div class="ratio-inner">
                                            <div class="w-full p-1 md:p-2">
                                                <div>
                                                    <img alt="gallery" loading="lazy" style="max-height: 400px;"
                                                         class="block object-cover object-center w-full h-full rounded-lg  opacity-70 hover:opacity-100 duration-300 "
                                                         src="{{$liens[$i+1]->lien}}">
                                                    <div class="card-content">
                                                        <div class="content">
                                                            <h3 class="title">{{$liens[$i+1]->titre}}</h3>
                                                            <p class="description">{{$liens[$i+1]->text}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            {{--                            <img alt="gallery" loading="lazy" style="max-height: 400px"--}}
                            {{--                                 class="block object-cover object-center w-full h-full rounded-lg  opacity-70 hover:opacity-100 duration-300"--}}
                            {{--                                 src="{{$liens[$i+1]->lien}}">--}}
                        </div>
                        @if($i+2 == count($liens))
                            @break
                        @endif
                        <div class="w-1/2 p-1 md:p-2">
                            <div class="food-card">
                                <div class="card">
                                    <div class="card-img image-ratio">
                                        <div class="ratio-inner">
                                            <div class="w-full p-1 md:p-2">
                                                <div>
                                                    <img alt="gallery" loading="lazy" style="max-height: 400px;"
                                                         class="block object-cover object-center w-full h-full rounded-lg  opacity-70 hover:opacity-100 duration-300 "
                                                         src="{{$liens[$i+2]->lien}}">
                                                    <div class="card-content">
                                                        <div class="content">
                                                            <h3 class="title">{{$liens[$i+2]->titre}}</h3>
                                                            <p class="description">{{$liens[$i+2]->text}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            {{--                            <img alt="gallery" loading="lazy" style="max-height: 400px"--}}
                            {{--                                 class="block object-cover object-center w-full h-full rounded-lg  opacity-70 hover:opacity-100 duration-300"--}}
                            {{--                                 src="{{$liens[$i+2]->lien}}">--}}
                        </div>
                    </div>
                    @if($i+3 == count($liens))
                        @break
                    @endif
                    <div class="flex flex-wrap w-1/2">
                        <div class="w-1/2 p-1 md:p-2">
                            <div class="food-card">
                                <div class="card">
                                    <div class="card-img image-ratio">
                                        <div class="ratio-inner">
                                            <div class="w-full p-1 md:p-2">
                                                <div>
                                                    <img alt="gallery" loading="lazy" style="max-height: 400px;"
                                                         class="block object-cover object-center w-full h-full rounded-lg  opacity-70 hover:opacity-100 duration-300 "
                                                         src="{{$liens[$i+3]->lien}}">
                                                    <div class="card-content">
                                                        <div class="content">
                                                            <h3 class="title">{{$liens[$i+3]->titre}}</h3>
                                                            <p class="description">{{$liens[$i+3]->text}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            {{--                            <img alt="gallery" loading="lazy" style="max-height: 400px"--}}
                            {{--                                 class="block object-cover object-center w-full h-full rounded-lg opacity-70 hover:opacity-100 duration-300"--}}
                            {{--                                 src="{{$liens[$i+3]->lien}}">--}}

                            {{--                            <h1 class="opacity-25 hover:opacity-100">{{$liens[$i+3]->text}}</h1>--}}
                            {{--                        <div class="opacity-0 hover:opacity-100 duration-300 absolute inset-0 z-10 flex justify-center items-center text-6xl text-white font-semibold">Dwayne</div>--}}
                        </div>
                        @if($i+4 == count($liens))
                            @break
                        @endif
                        <div class="w-1/2 p-1 md:p-2">
                            <div class="food-card">
                                <div class="card">
                                    <div class="card-img image-ratio">
                                        <div class="ratio-inner">
                                            <div class="w-full p-1 md:p-2">
                                                <div>
                                                    <img alt="gallery" loading="lazy" style="max-height: 400px;"
                                                         class="block object-cover object-center w-full h-full rounded-lg  opacity-70 hover:opacity-100 duration-300 "
                                                         src="{{$liens[$i+4]->lien}}">
                                                    <div class="card-content">
                                                        <div class="content">
                                                            <h3 class="title">{{$liens[$i+4]->titre}}</h3>
                                                            <p class="description">{{$liens[$i+4]->text}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            {{--                            <img alt="gallery" loading="lazy" style="max-height: 400px"--}}
                            {{--                                 class="block object-cover object-center w-full h-full rounded-lg  opacity-70 hover:opacity-100 duration-300"--}}
                            {{--                                 src="{{$liens[$i+4]->lien}}">--}}
                        </div>
                        @if($i+5 == count($liens))
                            @break
                        @endif
                        <div class="w-full p-1 md:p-2">
                            <div class="food-card">
                                <div class="card">
                                    <div class="card-img image-ratio">
                                        <div class="ratio-inner">
                                            <div class="w-full p-1 md:p-2">
                                                <div>
                                                    <img alt="gallery" loading="lazy" style="max-height: 400px;"
                                                         class="block object-cover object-center w-full h-full rounded-lg  opacity-70 hover:opacity-100 duration-300 "
                                                         src="{{$liens[$i+5]->lien}}">
                                                    <div class="card-content">
                                                        <div class="content">
                                                            <h3 class="title">{{$liens[$i+5]->titre}}</h3>
                                                            <p class="description">{{$liens[$i+5]->text}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            {{--                            <img alt="gallery" loading="lazy" style="max-height: 400px"--}}
                            {{--                                 class="block object-cover object-center w-full h-full rounded-lg  opacity-70 hover:opacity-100 duration-300"--}}
                            {{--                                 src="{{$liens[$i+5]->lien}}">--}}
                        </div>
                    </div>
                </div>
            </div>

            {{--        @php--}}
            {{--        dd($lien->lien)--}}
            {{--        @endphp--}}
        @endfor
    </section>



</x-app-layout>
