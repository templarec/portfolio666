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
</head>
<body class="font-body antialiased">
<div id="app">
    <div class="min-h-screen w-screen bg-blue-900">

        <!-- Page Heading -->
        <header class="bg-yellow-400 grid grid-cols-5 shadow flex justify-between items-center py-4">
            <div class="xs:flex sm:hidden xs:col-start-1 xs:col-end-3 flex p-1">
                <div @click="showHaMenu()" class="hamburger">
                    <i class="fas fa-hamburger"></i>
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            <div class="xs:col-span-2 flex justify-end">
                <h1 class="titolo xs:whitespace-nowrap" @click="section = 'home'"><span>{</span> templarec.dev
                    <span>}</span></h1>
            </div>
            <ul class="collegamenti hide xs:absolute flex xs:justify-center xs:items-center w-full text-blue-900 ">
                <li @click="section = 'info'" class="links"><span>.</span>Info</li>
                <li @click="section = 'about'" class="links"><span>.</span>About</li>
                <li class="links">
                    <span>.</span><span class="tttx" @click="section = 'portfolio'">Portfolio</span>
                </li>
                <li class="links relative"><span>.</span><span>Contatti</span>
                    <div class="dropdown contatti hidden bg-yellow-400 border-2 border-blue-900">
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

        </header>

        <!-- Page Content -->
        <main>
            @yield('content')
        </main>
    </div>
</div>
</body>
</html>
