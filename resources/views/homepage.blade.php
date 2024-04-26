<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="{{ config('app.name') }} - {{ ucfirst(Route::current()->uri()) }}">
  <title>{{ config('app.name') }} - {{ ucfirst(Route::current()->getName()) }}</title>
  @include('comps/home')
</head>

<body class="bg-gray-100">
    @include('comps/header')
    @include('comps/tawk')
    <header class="bg-gray-900 text-white text-center py-20">
        <div class="container mx-auto">
            <h1 class="text-4xl font-bold mb-4">Beyond Of Seen'e Hoşgeldiniz</h1>
            <p class="text-lg">İçeriklerin sınırsızlığını keşfedin</p>
        </div>
    </header>
    <main class="container mx-auto py-8">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
            <div class="max-w-md mx-auto bg-zinc-900 rounded-xl shadow-md overflow-hidden md:max-w-2xl">
                <div class="relative">
                  <div class="md:shrink-0">
                    <img class="w-full" src="https://beyondofseen.com/imgs/derz.png" alt="Dersler fotoğraf">
                  </div>
                  <div class="p-8">
                    <div class="uppercase tracking-wide text-sm text-cyan-300 font-semibold">Beyond Of Seen</div>
                    <a href="/dersler" class="block mt-1 text-lg leading-tight font-medium text-slate-100 hover:underline">Okul ve Sınav Notlarımız</a>
                    <p class="mt-2 text-white">9-10-11-12 ve KPSS ders notlarımızı gönüllü ekibimiz tarafından seslendirip sizlerin kullanımına sunuyoruz.</p>
                  </div>
                </div>
              </div>
            <div class="max-w-md mx-auto bg-zinc-900 rounded-xl shadow-md overflow-hidden md:max-w-2xl">
                <div class="relative">
                  <div class="md:shrink-0">
                    <img class="w-full" src="https://beyondofseen.com/imgs/tools.png" alt="Modern building architecture">
                  </div>
                  <div class="p-8">
                    <div class="uppercase tracking-wide text-sm text-cyan-300 font-semibold">Beyond Of Seen</div>
                    <a href="#" class="block mt-1 text-lg leading-tight font-medium text-slate-100 hover:underline">Araçlar</a>
                    <p class="mt-2 text-white">İnternetten üzerinden aklınıza gelebilecek bütün araçları burada bulup kullanabilirsiniz</p>
                  </div>
                </div>
              </div>
             <div class="max-w-md mx-auto bg-zinc-900 rounded-xl shadow-md overflow-hidden md:max-w-2xl">
                <div class="relative">
                  <div class="md:shrink-0">
                    <img class="w-full" src="https://beyondofseen.com/imgs/gamez.png" alt="Modern building architecture">
                  </div>
                  <div class="p-8">
                    <div class="uppercase tracking-wide text-sm text-cyan-300 font-semibold">Beyond Of Seen</div>
                    <a href="#" class="block mt-1 text-lg leading-tight font-medium text-slate-100 hover:underline">Oyunlar</a>
                    <p class="mt-2 text-white">Eskiden kendinizi oynamaktan alıkoyamadığınız oyunları bu sayfada tekrardan oynama fırsatını elde edebilirsiniz</p>
                  </div>
                </div>
              </div>
           
        </div>
    </main>
    @include('comps/footer')
</body>
</html>