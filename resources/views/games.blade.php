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

    <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <div class="relative">
            <img class="w-full h-auto object-cover" src="{{ config('app_url') }}/images/tod.png">
        </div>
        <div class="p-4">
            <div class="text-lg font-medium text-gray-800 mb-2">Doğruluk mu? Cesaretlik mi? </div>
            <p class="text-gray-500 text-sm">Arkadaşlarınla ne kadar samimi olduğunu ve ne kadar cesur olduğunu test etmeye hazır mısın? Doğruluk mu Cesaret mi oyunu tam sana göre! Bu klasik oyun, ister yeni tanıştığın biriyle ister yıllardır tanıdığın bir dostunla oyna ister misin, her zaman eğlence ve heyecan dolu bir deneyim sunar.</p>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <div class="relative">
            <img class="w-full h-auto object-cover" src="{{ config('app_url') }}/images/coming.png">
        </div>
        <div class="p-4">
            <div class="text-lg font-medium text-gray-800 mb-2">Çok Yakında</div>
            <p class="text-gray-500 text-sm">Çok Yakında...</p>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <div class="relative">
            <img class="w-full h-auto object-cover" src="{{ config('app_url') }}/images/coming.png">
        </div>
        <div class="p-4">
            <div class="text-lg font-medium text-gray-800 mb-2">Çok Yakında</div>
            <p class="text-gray-500 text-sm">Çok Yakında...</p>
        </div>
    </div>

</div>
@include("comps/footer")
</html>
