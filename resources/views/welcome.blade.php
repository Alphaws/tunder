<x-guest-layout>
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 bg-gray-100 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="w-full mx-auto">
            <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-2 p-16 m-2 bg-gray-800 text-gray-200">
                <div class="justify-center items-center">
                    <img src="{{ asset('img/logo1.png') }}" alt="Tündérmosoly" class="w-32">
                    <h1 class="mb-4 text-2xl font-extrabold text-gray-900 md:text-4xl lg:text-5xl">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Tündérmosoly Alapítvány</span>
                    </h1>
{{--                    <span class="px-4 text-gray-200 text-2xl">Tündérmosoly Alapítvány</span>--}}
                </div>
                <div class="justify-center items-center">
                    <img src="{{ asset('img/logo1.png') }}" alt="Tündérmosoly" class="w-32">
                    <h1 class="mb-4 text-2xl font-extrabold text-gray-900 md:text-4xl lg:text-5xl">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r to-purple-600 from-pink-400">Tündérmosoly Alapítvány</span>
                    </h1>
                    {{--                    <span class="px-4 text-gray-200 text-2xl">Tündérmosoly Alapítvány</span>--}}
                </div>
                <div class="col-span-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer took a galley of type and scrambled it to make a type specimen book. It has survived
                    not only five centuries, but also the leap into electronic typesetting, remaining essentially
                    unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                    Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including
                    versions of Lorem Ipsum.</div>
            </div>

            <div class="flex justify-center items-center p-16 bg-green-800">
                <img src="{{ asset('img/logo1.png') }}" alt="Tündérmosoly" class="w-16">
                <span class="px-4 text-gray-200 text-xl">Tündérmosoly Alapítvány</span>
            </div>

            <div class="flex justify-center items-center p-16">
                <img src="{{ asset('img/logo1.png') }}" alt="Tündérmosoly" class="w-16">
                <span class="px-4 text-gray-900 text-xl">Tündérmosoly Alapítvány</span>
            </div>

            <div class="flex justify-center items-center p-16 bg-purple-800">
                <img src="{{ asset('img/logo1.png') }}" alt="Tündérmosoly" class="w-16">
                <span class="px-4 text-gray-300 text-xl">Tündérmosoly Alapítvány</span>
            </div>
        </div>
    </div>
</x-guest-layout>
