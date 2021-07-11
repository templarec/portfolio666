<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/vue.js') }}" defer></script>
</head>
<body class="font-body antialiased">
<div class="min-h-screen bg-blue-900">

    <!-- Page Heading -->
    <header class="bg-yellow-400 grid grid-cols-5 shadow flex justify-between items-center py-4">
        <div class="col-start-1 col-end-2 flex justify-end">
            <h1 class="titolo "><span>{</span> templarec.dev <span>}</span></h1>
        </div>
        <div class="col-start-5 col-end-5 flex justify-end">
            <ul class="collegamenti flex flex-row text-4xl text-blue-900 ">
                <li class="links"><span>.</span>Home</li>
                <li class="links">
                    <span>.</span><span class="tttx">Lavori</span>
                    <div class="dropdown hidden bg-yellow-400 border-2 border-blue-900">
                        <ul class="flex flex-col">
                            <li>.Walfood</li>
                            <li>.BoolzApp</li>
                            <li>.Laravel-Comics</li>
                            <li>.EduPrime</li>
                            <li>~Museek.eu</li>
                                    <li>~Portfolio Launcher</li>
                                </ul>
                            </div>
                        </li>
                        <li class="links relative"><span>.</span><span>Contatti</span>
                            <div class="dropdown contatti hidden min-w-full bg-yellow-400 border-2 border-blue-900">
                                <ul class="flex flex-col">
                                    <li>@E-mail</li>
                                    <li>.Linkedin</li>
                                    <li>.GitHub</li>
                                    <li>.Upwork</li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>

            </header>

            <!-- Page Content -->
            <main>
                @yield('content')
            </main>
            <footer>
            </footer>
        </div>
    </body>
</html>
