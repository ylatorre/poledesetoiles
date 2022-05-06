<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contact') }}
        </h2>
    </x-slot>

    <meta name="csrf-token" content="{{ csrf_token() }}">
     {!! htmlScriptTagJsApi() !!}



    <!-- component -->
    <!-- This is an example component -->
    <div class="max-w-2xl mx-auto bg-white p-16">

        <form method="post" action="{{route("recupcontact  ")}}">
            @csrf
            <div class="grid gap-6 mb-6 lg:grid-cols-2">
                <div>
                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">First
                        name</label>
                    <input type="text" id="first_name"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark: dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="John" required>
                </div>
                <div>
                    <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Last
                        name</label>
                    <input type="text" id="last_name"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark: dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="Doe" required>
                </div>
                <div>
                    <label for="company"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Company</label>
                    <input type="text" id="company"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark: dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="Flowbite" required>
                </div>
                <div>
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Phone
                        number</label>
                    <input type="tel" id="phone"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark: dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                </div>
                {{--                <div>--}}
                {{--                    <label for="website" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Website URL</label>--}}
                {{--                    <input type="url" id="website" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark: dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="flowbite.com" required>--}}
                {{--                </div>--}}
                {{--                <div>--}}
                {{--                    <label for="visitors" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Unique visitors (per month)</label>--}}
                {{--                    <input type="number" id="visitors" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark: dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>--}}
                {{--                </div>--}}
            </div>
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email
                    address</label>
                <input type="email" id="email"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark: dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="john.doe@company.com" required>
            </div>

            <div class="mb-6">
                <label for="email"
                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Message</label>
                {{--                <input type="email" id="email"--}}
                {{--                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark: dark:focus:ring-blue-500 dark:focus:border-blue-500"--}}
                {{--                       placeholder="john.doe@company.com" required>--}}
                <textarea
                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded bg-gray-50 transition ease-in-out dark:border-gray-600 m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
      "
                    id="exampleFormControlTextarea1"
                    rows="3"
                    placeholder="Your message" required
                ></textarea>
            </div>
            {{--            <div class="mb-6">--}}
            {{--                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Password</label>--}}
            {{--                <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark: dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••" required>--}}
            {{--            </div>--}}
            {{--            <div class="mb-6">--}}
            {{--                <label for="confirm_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Confirm password</label>--}}
            {{--                <input type="password" id="confirm_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark: dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••" required>--}}
            {{--            </div>--}}
            <div class="flex items-start mb-6">
                <div class="flex items-center h-5">
                    <input id="remember" type="checkbox" value=""
                           class="w-4 h-4 border border-gray-300
                           rounded bg-gray-50 focus:ring-3 focus:ring-blue-300
                           dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800"
                           required>
                </div>
                <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-400">I agree with the
                    <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">terms and
                        conditions</a>.</label>
            </div>
{{--            <button type="submit"--}}
{{--                    class=" bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">--}}
{{--                Submit--}}
{{--            </button>--}}
            <div class="flex space-x-2 justify-center">
                <button
                    type="button"
                    data-mdb-ripple="true"
                    data-mdb-ripple-color="light"
                    class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                >Click me</button>
            </div>
        </form>

        {{--        <p class="mt-5">These input field components is part of a larger, open-source library of Tailwind CSS components. Learn--}}
        {{--            more by going to the official <a class="text-blue-600 hover:underline"--}}
        {{--                                             href="https://flowbite.com/docs/getting-started/introduction/" target="_blank">Flowbite--}}
        {{--                Documentation</a>.--}}
        {{--        </p>--}}
    </div>

</x-app-layout>
