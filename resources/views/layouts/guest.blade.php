<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        @if (Str::startsWith($current = url()->current(), 'https://www'))
            <link rel="canonical" href="{{ str_replace('https://www.', 'https://', $current) }}">
        @else
            <link rel="canonical" href="{{ str_replace('https://', 'https://www.', $current) }}">
        @endif
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="font-sans text-gray-900 bg-gray-100 antialiased pt-16">
            {{ $slot }}
        </div>
        <footer class="p-4 bg-gray-900 shadow md:flex md:items-center md:justify-between md:p-6">
    <span class="text-sm text-gray-200 sm:text-center">© 2022 <a href="https://prstart.hu/" target="_blank" class="hover:underline">PrStart.hu™</a>. All Rights Reserved.
    </span>
            <ul class="flex flex-wrap items-center mt-3 text-sm text-gray-200 sm:mt-0">
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6 ">Rólunk</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6">Adatvédelem</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">Kapcsolat</a>
                </li>
            </ul>
        </footer>
    </body>
</html>
