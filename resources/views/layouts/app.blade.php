<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/vue.js') }}" defer></script>
    <!-- Primary Meta Tags -->
    <title>{ templarec.dev } -
        Lorenzo Bernini Portfolio</title>
    <meta name="title" content="{ templarec.dev } -
        Lorenzo Bernini Portfolio">
    <meta name="description" content="Lorenzo Bernini Portfolio">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://templarec.dev/">
    <meta property="og:title" content="{ templarec.dev } -
        Lorenzo Bernini Portfolio">
    <meta property="og:description" content="Lorenzo Bernini Portfolio">
    <meta property="og:image" content="/copertina.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://templarec.dev/">
    <meta property="twitter:title" content="{ templarec.dev } -
        Lorenzo Bernini Portfolio">
    <meta property="twitter:description" content="Lorenzo Bernini Portfolio">
    <meta property="twitter:image" content="">
</head>
<body class="font-body antialiased">
<div id="app">
    <div class="min-h-screen w-screen">

        <!-- Page Heading -->
        <header class="grid grid-cols-5 shadow flex justify-between items-center py-4">
            <div
                class="xs:flex sm:flex sm:cols-start-1 sm:col-end-1 sm:justify-between xs:col-start-1 xs:col-end-1 flex xs:justify-between pl-2">
                <div @click="showHaMenu()" class="hamburger">
                    <i class="fas fa-hamburger"></i>
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            <div
                class="sm:col-span-2 sm:col-start-3 sm:col-start-5 xs:col-span-2 xs:col-start-3 xs:col-start-5 flex pr-2 justify-end">
                <h1 class="titolo xs:whitespace-nowrap sm:whitespace-nowrap sm:text-4xl md:text-5xl lg:text-6xl"
                    @click="section = 'home'"><span>{</span> templarec.dev
                    <span>}</span></h1>
            </div>
            <ul class="collegamenti hide  sm:absolute flex sm:justify-center sm:items-center xs:absolute flex xs:justify-center xs:items-center w-full">
                <li @click="section = 'info'" class="links "><span>.</span>Info</li>
                <li @click="section = 'about'" class="links"><span>.</span>About</li>
                <li class="links">
                    <span>.</span><span class="tttx" @click="section = 'portfolio'">Portfolio</span>
                </li>
                <li class="links relative"><span>.</span><span>Contatti</span>
                    <div class="dropdown contatti hidden">
                        <ul class="flex flex-col">
                            <li><a href="mailto:templarec@gmail.com">@E-mail</a></li>
                            <li><a href="https://www.linkedin.com/in/templarec/" target="_blank">.Linkedin</a></li>
                            <li><a href="https://github.com/templarec" target="_blank">.GitHub</a></li>
                            <li><a href="https://www.upwork.com/o/profiles/users/~011ffdb08a3f5af7e5/" target="_blank">.Upwork</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            <div class="onda-triangolare">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                     preserveAspectRatio="none">
                    <path d="M892.25 114.72L0 0 0 120 1200 120 1200 0 892.25 114.72z" class="shape-fill"></path>
                </svg>
            </div>
        </header>

        <!-- Page Content -->
        <main @click="closeDropdown()">
            @yield('content')
        </main>
    </div>
</div>
</body>
</html>
