<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ config('app.name') }} - {{ $lesson->title }}">
    <title>{{ config('app.name') }} - {{ $lesson->title }}</title>
    <link rel="icon" href="https://drive.usercontent.google.com/download?id=17HlpXUMzsR23-x0BjLMDLIEDfyEH8n7A&export=download&authuser=0" type="image/png">
    <link rel="stylesheet" href="http://localhost:8000/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@100;200;300;400;500;600;700&family=Marcellus&family=Overpass:wght@200;300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>

<body>
@include("comps/header")

    <div class="bg-gray-900 text-white text-center py-20 mx-auto w-auto">
        <h1 class="text-4xl font-bold mb-4">{{$lesson->title}}</h1>
        <audio controls class="mx-auto">
            <source src="{{$lesson->content_audio}}" type="audio/mpeg">
        </audio>
        <div class="grid grid-cols-1">
            <p class="text-l w-1/2 text-center mx-auto">{!! nl2br($lesson->content) !!}</p>
        </div>

        <div class="mt-1">
            <p>Pdf Dosyasını indirmek için <a href="{{$lesson->text_file}}" class="btn btn-primary">Tıkla</a></p>
            <p>Pdf Dosyasını indirmek için <a href="{{$lesson->audio_file}}" class="btn btn-primary">Tıkla</a></p>
        </div>



    </div>


@include("comps/footer")
<script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
</body>
</html>
