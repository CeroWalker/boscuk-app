<!DOCTYPE html>
<html lang="en">
<head>
    @include('comps/requirement')
</head>
<body>
@include('comps/header')
@include('comps/tawk')
<header class="bg-gray-900 text-white text-center py-20">
    <div class="container mx-auto">
        <h1 class="text-4xl font-bold mb-4">Beyond Of Seen Testler</h1>
        <p class="text-lg">Sitemizde bulunan testlere bu sayfadan ulaşabilirsiniz</p>
    </div>
</header>

<div class="w-auto mt-10 mx-auto">
    <div class="bg-blue-500 p-2 rounded-t-lg">
        <div class="flex justify-center space-x-4 max-[610px]:grid max-[610px]:grid-cols-4">
            <button class="px-4 py-2 text-white font-semibold border-b-4 border-blue-700 hover:bg-blue-700 focus:outline-none tab-button" onclick="showTab('9sinif-test')">9.Sınıf</button>
            <button class="px-4 py-2 text-white font-semibold border-b-4 border-blue-700 hover:bg-blue-700 focus:outline-none tab-button" onclick="showTab('10sinif-test')">10. Sınıf</button>
            <button class="px-4 py-2 text-white font-semibold border-b-4 border-blue-700 hover:bg-blue-700 focus:outline-none tab-button" onclick="showTab('11sinif-test')">11. Sınıf</button>
            <button class="px-4 py-2 text-white font-semibold border-b-4 border-blue-700 hover:bg-blue-700 focus:outline-none tab-button" onclick="showTab('12sinif-test')">12. Sınıf</button>
            <button class="px-4 py-2 text-white font-semibold border-b-4 border-blue-700 hover:bg-blue-700 focus:outline-none tab-button" onclick="showTab('ekpss-test')">Kpss/Ekpss</button>
        </div>
    </div>

    <!-- Tab Content -->
    <div id="9sinif-test" class="p-4 tab-content bg-white shadow-md rounded-lg">
        <h2 class="text-2xl font-semibold mb-2 text-gray-900">9. Sınıf'a ait testler</h2>
        @include('quiz-lists/nine')
    </div>
    <div id="10sinif-test" class="p-4 tab-content bg-white shadow-md rounded-lg hidden">
        <h2 class="text-2xl font-semibold mb-2 text-gray-900">10. Sınıf'a ait testler</h2>
        @include('quiz-lists/ten')
    </div>
    <div id="11sinif-test" class="p-4 tab-content bg-white shadow-md rounded-lg hidden">
        <h2 class="text-2xl font-semibold mb-2 text-gray-900">11. Sınıf'a ait testler</h2>
        @include('quiz-lists/eleven')
    </div>
    <div id="12sinif-test" class="p-4 tab-content bg-white shadow-md rounded-lg hidden">
        <h2 class="text-2xl font-semibold mb-2 text-gray-900">12. Sınıf'a ait testler</h2>
        @include('quiz-lists/twelve')
    </div>
    <div id="ekpss-test" class="p-4 tab-content bg-white shadow-md rounded-lg hidden">
        <h2 class="text-2xl font-semibold mb-2 text-gray-900">Kpss/Ekpss'ye ait testler</h2>
        @include('quiz-lists/ekpss')
    </div>
    <div class="bg-blue-500 p-2 rounded-b-lg w-full space-x-4" ><br><!-- Buradaki üşengeçliğimi sorgulama --><br></div>
</div>

<style>
    .tab-button.active {
        background-color: #fff;
        border-color: #4299e1;
        color: #4299e1;
    }
</style>

<script>
    function showTab(tabId) {
        const tabContents = document.querySelectorAll('.tab-content');
        tabContents.forEach((content) => {
            content.classList.add('hidden');
        });

        const selectedTab = document.getElementById(tabId);
        if (selectedTab) {
            selectedTab.classList.remove('hidden');
        }

        const tabButtons = document.querySelectorAll('.tab-button');
        tabButtons.forEach((button) => {
            button.classList.remove('active');
        });

        const clickedButton = document.querySelector(`[onclick="showTab('${tabId}')"]`);
        if (clickedButton) {
            clickedButton.classList.add('active');
        }
    }

    showTab('9sinif-test');
</script>

@include("comps/footer")

</body>
</html>
