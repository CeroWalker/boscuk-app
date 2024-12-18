<html lang="tr">
<head>
    @include("comps/requirement")
</head>
@include("comps/header")
@include('comps/tawk')
<header class="bg-gray-900 text-white text-center py-20">
    <div class="container mx-auto">
        <h1 class="text-4xl font-bold mb-4">Beyond Of Seen Rehberler</h1>
        <p class="text-lg">Sitemizde bulunan rehberlere bu sayfadan ulaşabilirsiniz</p>
    </div>
</header>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 p-10 md:px-20 md:mt-10">
    @foreach($guides as $guide)
        <div id="guide" class="bg-white rounded-xl shadow-md overflow-hidden">
            <a class="text-gray-500 text-sm" href="{{ config('app.url') }}/rehberler/{{ $guide->title_id }}">
                <div class="p-4">
                    <div class="text-lg font-medium text-gray-800 mb-2">{{ $guide->title }}</div>
                    {!! mb_substr($guide->content, 0, 310,) !!}
                </div>
            </a>
        </div>
    @endforeach

</div>
@include("comps/footer")
</html>
