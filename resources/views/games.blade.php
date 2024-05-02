<html lang="tr">
<head>
    @include("comps/requirement")
</head>
@include("comps/header")
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 p-10 md:px-20">

    <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <div class="relative">
            <img class="w-full h-auto object-cover" src="/images/znake.png">
        </div>
        <div class="p-4">
            <div class="text-lg font-medium text-gray-800 mb-2">Znake (Snake)</div>
            <p class="text-gray-500 text-sm">Yılların eskitemediği yılan oyunu şimdi sizlerle. Hemen tıklayın ve oynamaya başlayın!</p>
        </div>
    </div>


    <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <div class="relative">
            <img class="w-full h-auto object-cover" src="/images/tetris.png">
        </div>
        <div class="p-4">
            <div class="text-lg font-medium text-gray-800 mb-2">Tetris</div>
            <p class="text-gray-500 text-sm">Kendimizi oynamaktan alıkoyamadığımız, blokların arasında kaybolduğumuz o efsane Tetris oyunu. Tıklayın ve oynayın!</p>
        </div>
    </div>


    <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <div class="relative">
            <img class="w-full h-auto object-cover" src="/images/coming.png">
        </div>
        <div class="p-4">
            <div class="text-lg font-medium text-gray-800 mb-2">Çok Yakında</div>
            <p class="text-gray-500 text-sm">Çok Yakında...</p>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <div class="relative">
            <img class="w-full h-auto object-cover" src="/images/coming.png">
        </div>
        <div class="p-4">
            <div class="text-lg font-medium text-gray-800 mb-2">Çok Yakında</div>
            <p class="text-gray-500 text-sm">Çok Yakında...</p>
        </div>
    </div>


    <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <div class="relative">
            <img class="w-full h-auto object-cover" src="/images/coming.png">
        </div>
        <div class="p-4">
            <div class="text-lg font-medium text-gray-800 mb-2">Çok Yakında</div>
            <p class="text-gray-500 text-sm">Çok Yakında...</p>
        </div>
    </div>


    <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <div class="relative">
            <img class="w-full h-auto object-cover" src="{{asset('/images/coming.png')}}">
        </div>
        <div class="p-4">
            <div class="text-lg font-medium text-gray-800 mb-2">Çok Yakında</div>
            <p class="text-gray-500 text-sm">Çok Yakında...</p>
        </div>
    </div>


</div>
@include("comps/footer")
</html>
