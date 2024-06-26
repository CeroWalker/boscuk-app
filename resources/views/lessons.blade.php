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
            <h1 class="text-4xl font-bold mb-4">Beyond Of Seen Dersler</h1>
            <p class="text-lg">Sitemizde bulunan derslere bu sayfadan ulaşabilirsiniz</p>
        </div>
    </header>

    <div class="w-auto mt-10 mx-auto">
        <div class="bg-blue-500 p-2 rounded-t-lg">
            <div class="flex justify-center space-x-4">
                <button class="px-4 py-2 text-white font-semibold border-b-4 border-blue-700 hover:bg-blue-700 focus:outline-none tab-button" onclick="showTab('9sinif')">9.Sınıf</button>
                <button class="px-4 py-2 text-white font-semibold border-b-4 border-blue-700 hover:bg-blue-700 focus:outline-none tab-button" onclick="showTab('10sinif')">10. Sınıf</button>
                <button class="px-4 py-2 text-white font-semibold border-b-4 border-blue-700 hover:bg-blue-700 focus:outline-none tab-button" onclick="showTab('11sinif')">11. Sınıf</button>
                <button class="px-4 py-2 text-white font-semibold border-b-4 border-blue-700 hover:bg-blue-700 focus:outline-none tab-button" onclick="showTab('12sinif')">12. Sınıf</button>
                <button class="px-4 py-2 text-white font-semibold border-b-4 border-blue-700 hover:bg-blue-700 focus:outline-none tab-button" onclick="showTab('ekpss')">Kpss/Ekpss</button>

                <form class="max-w-md mx-auto" method="get" action="/search-lesson">
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input name="search" type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ isset($search) ? $search : ''}}" placeholder="Derslerde ara..." autocomplete="off"/>
                        <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Ara</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Tab Content -->
        <div id="9sinif" class="p-4 tab-content bg-white shadow-md rounded-lg">
            <h2 class="text-2xl font-semibold mb-2 text-gray-900">9. Sınıf'a ait ders notları</h2>
            @include('lists/nine')
        </div>
        <div id="10sinif" class="p-4 tab-content bg-white shadow-md rounded-lg hidden">
            <h2 class="text-2xl font-semibold mb-2 text-gray-900">10. Sınıf'a ait ders notları</h2>
            @include('lists/ten')
        </div>
        <div id="11sinif" class="p-4 tab-content bg-white shadow-md rounded-lg hidden">
            <h2 class="text-2xl font-semibold mb-2 text-gray-900">11. Sınıf'a ait ders notları</h2>
            @include('lists/eleven')
        </div>
        <div id="12sinif" class="p-4 tab-content bg-white shadow-md rounded-lg hidden">
            <h2 class="text-2xl font-semibold mb-2 text-gray-900">12. Sınıf'a ait ders notları</h2>
            @include('lists/twelve')
        </div>
        <div id="ekpss" class="p-4 tab-content bg-white shadow-md rounded-lg hidden">
            <h2 class="text-2xl font-semibold mb-2 text-gray-900">Kpss/Ekpss'ye ait ders notları</h2>
            @include('lists/ekpss')
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

        showTab('9sinif');
    </script>

@include("comps/footer")

</body>
</html>
