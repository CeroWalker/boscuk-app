<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ config('app.name') }} - {{ $lesson->content }}">
    <title>{{ config('app.name') }} - {{ $lesson->title }}</title>
    <link rel="icon" href="https://drive.usercontent.google.com/download?id=17HlpXUMzsR23-x0BjLMDLIEDfyEH8n7A&export=download&authuser=0" type="image/png">
    <link rel="stylesheet" href="{{ config('app.url') }}/css/style.css">
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
        <h1 class="text-4xl font-bold mb-4">{{$lesson->title}}</h1>
        <audio controls class="mx-auto">
            <source src="{{ config('app_url') }}/storage/{{$lesson->content_audio}}" type="audio/mpeg">
        </audio>
        <div class="grid grid-cols-1 px-">
            <p class="text-l text-center mx-auto">{!! nl2br($lesson->content) !!}</p>
        </div>

        <div class="mt-1">
            @if($lesson->text_file == null)
                <p>Pdf dosyası mevcut değil.</p>
            @else
                <p>Pdf Dosyasını indirmek için <a href="{{ config('app_url') }}/storage/{{$lesson->text_file}}" class="btn btn-primary" download>Tıkla</a></p>
            @endif

            @if($lesson->audio_file == null)
                <p>Ses dosyası mevcut değil.</p>
            @else
                <p>Ses Dosyasını indirmek için <a href="{{ config('app_url') }}/storage/{{$lesson->content_audio}}" class="btn btn-primary" download>Tıkla</a></p>
            @endif
        </div>



    </div>


@include("comps/footer")
<script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
</body>
</html>
