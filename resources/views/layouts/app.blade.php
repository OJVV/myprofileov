<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <script src="{{ asset('assets/js/app.js') }}" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
        <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100 ">
            @livewire('navigation-menu')

            <!-- Page Heading 
            @if (isset($header))
                <header class="bg-white shadow items-center ">
                   <ul class=" pt-2 mb-2 bg-primary flex flex-row ml-2 text-gray-700 text-2xl" id="myHeader">

                    <li class="nav-item ">
                        <a href="{{route('dashboard')}}" class="nav-link text-black{{request()->is('dashboard') ? 'active' :''}}">
                        Dashboard</a>
                    </li>
                    <li class="nav-item ml-2">
                        <a href="{{route('skills')}}" class="nav-link text-black{{request()->is('skills') ? 'active' :''}}">
                        Skills</a>
                    </li>
                    <li class="nav-item ml-2">
                        <a href="{{route('about')}}" class="nav-link  text-black{{request()->is('about') ? 'active' :''}}">
                        About</a>
                    </li>
                    <li class="nav-item ml-2">
                        <a href="{{route('resume')}}" class="nav-link  text-black{{request()->is('resume') ? 'active' :''}}">
                        Resume</a>
                    </li>
                    <li class="nav-item ml-2">
                        <a href="{{route('projects')}}" class="nav-link  text-black{{request()->is('projects') ? 'active' :''}}">
                        Projects</a>
                    </li>
                    <li class="nav-item ml-2">
                        <a href="{{route('services')}}" class="nav-link  text-black{{request()->is('services') ? 'active' :''}}">
                        Services</a>
                    </li>
                   </ul>
                </header>
            @endif 
            -->

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')
       
        @livewireScripts
    </body>
</html>
