<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ config('app.name') }} - {{ $culture->content }}">
    <title>{{ config('app.name') }} - {{ $culture->title }}</title>
    <link rel="icon" href="https://drive.usercontent.google.com/download?id=17HlpXUMzsR23-x0BjLMDLIEDfyEH8n7A&export=download&authuser=0" type="image/png">
    <link rel="stylesheet" href="https://beyondofseen.com/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@100;200;300;400;500;600;700&family=Marcellus&family=Overpass:wght@200;300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

    <style>
        figure{
            margin: auto;
        }
        .attachment__size, .attachment__name{
            display: none;
        }
    </style>
</head>

<body>
@include("comps/header")
@include("comps/tawk")

<div class="bg-gray-900 text-white text-center py-20 mx-auto w-auto">
    <h1 class="text-4xl font-bold mb-4">{{ $culture->title }}</h1>

    <div class="grid grid-cols-1">
        <p class="text-l w-1/2 content-center text-center mx-auto">{!! nl2br($culture->content) !!}</p>
    </div>

</div>


@include("comps/footer")
<script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
</body>
</html>
