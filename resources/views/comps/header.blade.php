<nav class="flex flex-wrap items-center justify-between p-3 bg-white border-gray-200">
  <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
    <img src="{{ config('app.url') }}/images/logo.png" class="h-8" alt="Bos Logo" />
    <span class="self-center text-2xl font-semibold whitespace-nowrap">Beyond Of Seen</span>
  </a>
  <div class="flex md:hidden">
    <button id="hamburger">
      <img class="toggle block" src="https://img.icons8.com/fluent-systems-regular/2x/menu-squared-2.png" width="40" height="40" />
      <img class="toggle hidden" src="https://img.icons8.com/fluent-systems-regular/2x/close-window.png" width="40" height="40" />
    </button>
  </div>
  <div
          class="toggle hidden w-full md:w-auto md:flex text-center text-bold mt-4 md:mt-0 border-t-2 md:border-none  flex-col font-medium md:p-0 border border-gray-100 rounded-lg bg-gray-50 md:space-x-4 rtl:space-x-reverse md:flex-row md:border-0 md:bg-white">
    <a href="/"
       class="inline-block md:inline-block text-blue-900 hover:text-blue-500 px-1 py-3 border-b-2 border-blue-900 md:border-none">Ana Sayfa
    </a>
    <a href="/dersler"
       class="inline-block md:inline-block text-blue-900 hover:text-blue-500 px-1 py-3 border-b-2 border-blue-900 md:border-none">Dersler
    </a>
    <a href="/tesler"
       class="inline-block md:inline-block text-blue-900 hover:text-blue-500 px-1 py-3 border-b-2 border-blue-900 md:border-none">Testler
    </a>
    <a href="/araclar"
       class="inline-block md:inline-block text-blue-900 hover:text-blue-500 px-1 py-3 border-b-2 border-blue-900 md:border-none">Araçlar
    </a>
    <a href="/oyunlar"
       class="inline-block md:inline-block text-blue-900 hover:text-blue-500 px-1 py-3 border-b-2 border-blue-900 md:border-none">Oyunlar
    </a>
    <a href="/genel-kultur"
       class="inline-block md:inline-block text-blue-900 hover:text-blue-500 px-1 py-3 border-b-2 border-blue-900 md:border-none">Genel Kültür
    </a>
    <a href="/rehberler"
       class="inline-block md:inline-block text-blue-900 hover:text-blue-500 px-1 py-3 border-b-2 border-blue-900 md:border-none">Rehberler
    </a>
  </div>
</nav>
<script>
  document.getElementById("hamburger").onclick = function toggleMenu() {
    const navToggle = document.getElementsByClassName("toggle");
    for (let i = 0; i < navToggle.length; i++) {
      navToggle.item(i).classList.toggle("hidden");
    }
  };
</script>
