<html lang="tr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="{{ config('app.name') }} - {{ ucfirst(Route::current()->uri()) }}">
  <title>{{ config('app.name') }}</title>
  @include('comps/home')
</head>

<body class="bg-gray-100">
    @include('comps/header')
    @include('comps/tawk')
    <header class="bg-gray-900 text-white text-center py-20">
        <div class="container mx-auto">
            <h1 class="text-4xl font-bold mb-4">Beyond Of Seen'e Hoşgeldiniz</h1>
            <p class="text-lg">İçeriklerin sınırsızlığını keşfedina</p>
        </div>
    </header>
    <main class="container mx-auto">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-3 pt-8" >
            <div class="max-w-md mx-auto bg-zinc-900 rounded-xl shadow-md overflow-hidden md:max-w-2xl">
                <div class="relative">
                  <div class="md:shrink-0">
                    <img class="w-full" src="{{ config('app_url') }}/images/derz.png" alt="Dersler sayfasının fotoğrafı">
                  </div>
                  <div class="p-8">
                    <div class="uppercase tracking-wide text-sm text-cyan-300 font-semibold">Beyond Of Seen</div>
                    <a href="/dersler" class="block mt-1 text-lg leading-tight font-medium text-slate-100 hover:underline">Okul ve Sınav Notlarımız</a>
                    <p class="mt-2 text-white">Bu sayfada, 9. 10. 11. 12. sınıflar ve KPSS için gerekli tüm derslerin notlarını bulabilirsiniz. Notlarımız, güncel müfredata uygun şekilde düzenlenmiştir. Ayrıca, tüm notlarımız gönüllü ekibimiz tarafından seslendirilerek sizlere sunulmuştur.</p>
                  </div>
                </div>
              </div>
            <div class="max-w-md mx-auto bg-zinc-900 rounded-xl shadow-md overflow-hidden md:max-w-2xl">
                <div class="relative">
                  <div class="md:shrink-0">
                    <img class="w-full" src="{{ config('app_url') }}/images/tools.png" alt="Araçlar sayfasının fotoğrafı">
                  </div>
                  <div class="p-8">
                    <div class="uppercase tracking-wide text-sm text-cyan-300 font-semibold">Beyond Of Seen</div>
                    <a href="/araclar" class="block mt-1 text-lg leading-tight font-medium text-slate-100 hover:underline">Araçlar</a>
                    <p class="mt-2 text-white">Bu sayfamızda, internette ihtiyacınız olabilecek her türlü araca erişebilirsiniz. Dosya dönüştürme araçlarından hesaplama araçlarına kadar geniş bir yelpazede araçlar sizleri bekliyor.</p>
                  </div>
                </div>
              </div>
             <div class="max-w-md mx-auto bg-zinc-900 rounded-xl shadow-md overflow-hidden md:max-w-2xl">
                <div class="relative">
                  <div class="md:shrink-0">
                    <img class="w-full" src="{{ config('app_url') }}/images/gamez.png" alt="Oyunlar sayfasının fotoğrafı">
                  </div>
                  <div class="p-8">
                    <div class="uppercase tracking-wide text-sm text-cyan-300 font-semibold">Beyond Of Seen</div>
                    <a href="/oyunlar" class="block mt-1 text-lg leading-tight font-medium text-slate-100 hover:underline">Oyunlar</a>
                    <p class="mt-2 text-white">Bu sayfamızda, eskiden severek oynadığınız klasik oyunları yeniden keşfedebilirsiniz. Eğlenceli ve nostaljik bir deneyim yaşayabilir, arkadaşlarınızla keyifli vakit geçirebilirsiniz.</p>
                  </div>
                </div>
              </div>

        </div>
        <!-- 2. Satır -->
        <div class="grid grid-cols-1 gap-4 md:grid-cols-3 py-4">
            <div class="max-w-md mx-auto bg-zinc-900 rounded-xl shadow-md overflow-hidden md:max-w-2xl">
                <div class="relative">
                  <div class="md:shrink-0">
                    <img class="w-full" src="{{ config('app_url') }}/images/culture.png" alt="Dersler fotoğraf">
                  </div>
                  <div class="p-8">
                    <div class="uppercase tracking-wide text-sm text-cyan-300 font-semibold">Beyond Of Seen</div>
                    <a href="/genel-kultur" class="block mt-1 text-lg leading-tight font-medium text-slate-100 hover:underline">Genel Kültür</a>
                    <p class="mt-2 text-white">Bu sayfamızda, ünlü isimler ve hayatları hakkında bilgilere ulaşabilirsiniz. Farklı alanlardan birçok ünlü ismin biyografisini okuyabilir, genel kültürünüzü geliştirebilirsiniz</p>
                  </div>
                </div>
              </div>
            <div class="max-w-md mx-auto bg-zinc-900 rounded-xl shadow-md overflow-hidden md:max-w-2xl">
                <div class="relative">
                  <div class="md:shrink-0">
                    <img class="w-full" src="{{ config('app_url') }}/images/guides.png">
                  </div>
                  <div class="p-8">
                    <div class="uppercase tracking-wide text-sm text-cyan-300 font-semibold">Beyond Of Seen</div>
                    <a href="/rehberler" class="block mt-1 text-lg leading-tight font-medium text-slate-100 hover:underline">Rehberler</a>
                    <p class="mt-2 text-white">Bu sayfamızda, günlük hayatınızda size yardımcı olacak çeşitli konularda bilgi ve ipuçları sunan bir sayfadır. Gönüllü ekibimiz tarafından özenle hazırlanan rehberler ile hayatınızı kolaylaştırabilir, yeni beceriler kazanabilirsiniz.</p>
                  </div>
                </div>
              </div>

        </div>
    </main>
    @include('comps/footer')
</body>
</html>
