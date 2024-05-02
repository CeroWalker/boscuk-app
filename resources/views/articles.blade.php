<html lang="tr">
<head>
    @include("comps/requirement")
</head>
@include("comps/header")
<header class="bg-gray-900 text-white text-center py-20">
    <div class="container mx-auto">
        <h1 class="text-4xl font-bold mb-4">Beyond Of Seen Makaleler</h1>
        <p class="text-lg">Sitemizde bulunan makalelere bu sayfadan ulaşabilirsiniz</p>
    </div>
</header>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 p-10 md:px-20">
    <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <div class="relative">
            <img class="w-full h-auto object-cover" src="https://beyondofseen.com/images/pdfconvert.png">
        </div>
        <div class="p-4">
            <div class="text-lg font-medium text-gray-800 mb-2">PDF Dönüştürme Aracı</div>
            <p class="text-gray-500 text-sm">Sitemizde bulunan PDF dönüştürme aracımız ile PDF dosyalarınız hızlı bir şekilde ister word ister Metin dosyasına dönüştürün.</p>
        </div>
    </div>


    <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <div class="relative">
            <img class="w-full h-auto object-cover" src="https://beyondofseen.com/images/pngtotext.png">
        </div>
        <div class="p-4">
            <div class="text-lg font-medium text-gray-800 mb-2">Resimden Yazıya DÖnüştürme Aracı</div>
            <p class="text-gray-500 text-sm">Sitemizde bulunan Resimden yazıya dönüştürme aracımız ile resim dosyalarınızda bulunan yazıları bir metin dosyası şeklinde bilgisayarınıza kaydedebilirsiniz.</p>
        </div>
    </div>


    <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <div class="relative">
            <img class="w-full h-auto object-cover" src="https://beyondofseen.com/images/tts.png">
        </div>
        <div class="p-4">
            <div class="text-lg font-medium text-gray-800 mb-2">TTS Aracımız</div>
            <p class="text-gray-500 text-sm">Sitemizde bulunan TTS (Text-to-speech / Metin okuma sistemi) Pdf, Word veya TXT dosyalarınızı sesli bir şekilde indirmenizi sağlar (şimdilik google translate sesi ile çevirme işlemi yapılamktadır).</p>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <div class="relative">
            <img class="w-full h-auto object-cover" src="https://beyondofseen.com/images/coming.png">
        </div>
        <div class="p-4">
            <div class="text-lg font-medium text-gray-800 mb-2">Çok Yakında</div>
            <p class="text-gray-500 text-sm">Çok Yakında...</p>
        </div>
    </div>


    <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <div class="relative">
            <img class="w-full h-auto object-cover" src="https://beyondofseen.com/images/coming.png">
        </div>
        <div class="p-4">
            <div class="text-lg font-medium text-gray-800 mb-2">Çok Yakında</div>
            <p class="text-gray-500 text-sm">Çok Yakında...</p>
        </div>
    </div>


    <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <div class="relative">
            <img class="w-full h-auto object-cover" src="{{asset('https://beyondofseen.com/images/coming.png')}}">
        </div>
        <div class="p-4">
            <div class="text-lg font-medium text-gray-800 mb-2">Çok Yakında</div>
            <p class="text-gray-500 text-sm">Çok Yakında...</p>
        </div>
    </div>


</div>
@include("comps/footer")
</html>
