<x-guest-layout>
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 bg-gray-100 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="w-full mx-auto">
            <div class="grid grid-cols-3 gap-4 p-16 m-2 bg-gray-800 text-gray-200">
                <div class="flex justify-center items-center">
                    <img src="{{ asset('img/logo1.png') }}" alt="Tündérmosoly" class="w-16">
                    <span class="px-4 text-gray-200 text-2xl">Tündérmosoly Alapítvány</span>
                </div>
                <div class="col-span-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
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
