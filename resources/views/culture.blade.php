<html lang="tr">
<head>
    @include("comps/requirement")
</head>
@include("comps/header")
@include('comps/tawk')
<header class="bg-gray-900 text-white text-center py-20">
    <div class="container mx-auto">
        <h1 class="text-4xl font-bold mb-4">Beyond Of Seen Genel Kültür</h1>
        <p class="text-lg">Sitemizde bulunan Genel Kültür bilgilerine bu sayfadan ulaşabilirsiniz</p>
    </div>
</header>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 p-10 md:px-20 md:mt-10">

    @foreach($cultures as $culture)
        <div class="bg-white rounded-xl shadow-md overflow-hidden">
            <div class="relative">
                <img class="w-full h-1/2 object-cover" src="{{ config('app.url') }}/storage/{{ $culture->content_image }}">
            </div>
            <div class="p-4">
                <div class="text-lg font-medium text-gray-800 mb-2">{{ $culture->title }}</div>
                <a class="text-gray-500 text-sm h-auto" href="{{ config('app.url') }}/kultur/{{ $culture->title_id }}">{!! mb_substr($culture->content, 0, 310,) !!}</a>
            </div>
        </div>
    @endforeach

</div>
@include("comps/footer")
</html>
