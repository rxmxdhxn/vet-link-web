<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetlink</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet"> --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.0.0/dist/tailwind.min.css" rel="stylesheet"> --}}
    @include('layouts.customstyle')
</head>
<body class="body font-family-karla flex">

    @include('layouts.sidebar')

    <div class="w-full flex flex-col h-screen overflow-y-hidden">
        <!-- Desktop Header Mobile Header & Nav -->
        @include('layouts.headbar')
    {{-- isi disini --}}

    <div class="flex justify-center items-center">
        <div class="flex">
            <img src="{{ asset('images/jumbodashbor.png') }}" class="relative mx-auto h-96 w-auto max-w-full" alt="">
        </div>
    </div>

    <div class="flex space-x-4">
        <div class="kotak w-[200px] h-[200px] bg-sky-600 rounded-lg">

        </div>
    </div>
    


    </div>

    @include('layouts.javascript')
</body>
</html>