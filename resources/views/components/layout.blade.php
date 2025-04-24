<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,400..600;1,100..900&display=swap" rel="stylesheet">
    @vite (['resources/js/app.js'])
</head>
<body class="bg-white text-black font-henken pb-20">
    <div class="wrapper px-10">
        <nav class="nav flex justify-between items-center p-4 border-b border-white/10">
            <div>
                <a href="/" class="">
                    <img src="{{ Vite::asset('resources/images/logo.jpg') }}" alt="site logo" class="w-[3rem]" />
                </a>
            </div>
            <div class="space-x-6 font-bold">
                <a href="/">Jobs</a>
                <a href="/salaries">Saleries</a>
                <a href="/companies">Companies</a>
                <a href="/carrers">Carrers</a>
            </div>
            @auth
                <div class="flex space-x-6 font-bold">
                    <a href="/jobs/show">My Jobs</a>
                    <a href="/jobs/create">Post a Job</a>
                    <form method="POST" action="/logout">
                        @csrf
                        @method("DELETE")
                         
                        <button>Log Out</button> 
                    </form>
                </div>     
            @endauth

            @guest
                <div class="space-x-6 font-bold">
                    <a href="/register">Sign Up</a>
                    <a href="/login">Log In</a>
                </div>
            @endguest
            
        </nav>
        <div class="main mx-auto mt-10 max-w-[986px]">
            {{ $slot }}
        </div>
    </div>
</body>
</html>