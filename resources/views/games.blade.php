<html lang="tr">
<head>
    @include("comps/requirement")
</head>
@include("comps/header")
@include('comps/tawk')
<header class="bg-gray-900 text-white text-center py-20">
    <div class="container mx-auto">
        <h1 class="text-4xl font-bold mb-4">Beyond Of Seen Oyunlar</h1>
        <p class="text-lg">Sitemizde bulunan oyunlara bu sayfadan ulaşabilirsiniz</p>
    </div>
</header>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 p-10 md:px-20 md:mt-10">

    @foreach($games as $game)
        <div id="games" class="bg-white rounded-xl shadow-md overflow-hidden">

            @if($game->content_image != null)
                <img id="content_image" class="w-full object-cover" src="{{ config('app.url') }}/storage/{{ $game->content_image }}">
            @endif
            <a class="text-gray-500 text-sm" href="{{ config('app.url') }}/oyunlar/{{ $game->title_id }}">
                <div class="p-4">
                    <div class="text-lg font-medium text-gray-800 mb-2">{{ $game->title }}</div>
                    {!! mb_substr($game->description, 0, 310,) !!}
                </div>
            </a>
        </div>
    @endforeach

</div>
@include("comps/footer")
</html>
