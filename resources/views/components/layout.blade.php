<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NextStep Collective</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,400..600;1,100..900&display=swap" rel="stylesheet">
    @vite (['resources/js/app.js'])
</head>
<body class="bg-white text-black font-henken pb-20">
    <x-partials.header />
    <div class="wrapper px-10">
      
        <div class="main mx-auto mt-10 max-w-[986px]">
            {{ $slot }}
        </div>
    </div>

    <x-partials.footer />
</body>
</html>