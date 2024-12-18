<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ config('app.name') }} - {{ ucfirst(Route::current()->uri()) }}">
    <title>{{ config('app.name') }} - {{ ucfirst(Route::current()->uri()) }}</title>
    <link rel="icon" href="https://beyondofseen.com/images/logo.png" type="image/png">
    <link rel="stylesheet" href="https://beyondofseen.com/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@100;200;300;400;500;600;700&family=Marcellus&family=Overpass:wght@200;300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

    <style>
        #game {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #003366;
            color: beige;
        }

        #playerbox {
            margin-top: 1rem;
            margin-bottom: 1rem;
        }

        #players {
            margin-top: 1rem;
        }

        #sonuc {
            display: none;
            margin-top: 0.50rem;
            margin-bottom: 0.50rem;
        }

        #controller {
            margin-top: 1rem;
        }
    </style>

</head>

<body>
@include("comps/header")
@include("comps/tawk")

<div class="grid-cols-3">
    <div>

    </div>
    <div id="game" class="content-center">
        <h1 class="mt-5">Doğruluk mu? Cesaret mi?</h1>
        <div id="playerbox">
            <p>Oyuncu isimlerini virgülle ayırarak giriniz:</p>
            <input type="text" id="oyuncuIsimleri" placeholder="Oyuncu isimleri..." required>
        </div>
        <button onclick="oyuncuIslemleri()" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Oyuncu seç</button>

        <div id="players"></div>

        <div id="sonuc">
        </div>

        <div id="controller" style="display: none;">
            <button onclick="button1()" id="button1" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Doğruluk</button>
            <button onclick="button2()" id="button2" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Cesaretlik</button>
        </div>


        <script>
            var PlayerChooseSound = new Audio("https://sounds.pond5.com/flipping-poker-card-sound-effect-053522983_nw_prev.m4a");
            var SelectionSound = new Audio("https://cdn.pixabay.com/download/audio/2022/03/15/audio_e385f1aa0d.mp3?filename=flipcard-91468.mp3");
            var inputBox = document.getElementById("playerbox");
            var background = document.getElementById("game");

            function oyuncuIslemleri() {
                var oyuncuIsimleri = document.getElementById("oyuncuIsimleri").value.split(",");
                var sonuc = "";
                var controlls = document.getElementById("controller");
                var chosen = document.getElementById("sonuc");

                if (oyuncuIsimleri.length < 2) {
                    alert("En az 2 oyuncu girmelisiniz.");
                    return;
                }

                for (var i = 0; i < oyuncuIsimleri.length; i++) {
                    sonuc += oyuncuIsimleri[i] + "<br>";
                }

                if (oyuncuIsimleri.length > 1) {
                    var rastgele1 = Math.floor(Math.random() * oyuncuIsimleri.length);
                    var rastgele2 = Math.floor(Math.random() * oyuncuIsimleri.length);

                    while (rastgele2 == rastgele1) {
                        rastgele2 = Math.floor(Math.random() * oyuncuIsimleri.length);
                    }

                    sonuc += "<br><b>Soran ve cevaplayan kişiler:<b><br>";
                    sonuc += "<b>Soran:<b> " + oyuncuIsimleri[rastgele1] + "<br><b>Cevaplayan:<b> " + oyuncuIsimleri[rastgele2];
                }
                document.getElementById("players").innerHTML = sonuc;
                controlls.style.display = "block";
                chosen.style.display = "block";
                playerbox.style.display = "none";

                background.style.backgroundColor = "#003366";
                PlayerChooseSound.play();
            }


            function button1() {
                var bb = ["Şimdiye kadar gördüğüm en garip rüyayı anlat.", "Saçma takma adların var mı?", "Telefonunuzda hangi uygulamada en çok zaman harcıyorsunuz?", "Tek bir oturuşta yediğin en çok yemek ne?", "Tek başınayken dans ediyor musun?", "Bütün gün evdeysen ne yapardın?", "Telefonunda arattığın en son şey nedir ?", "Bir sabah karşı cins olarak uyansaydın ilk yapacağın şey ne olurdu ?", "Sence bu odadaki en kötü giyinen kişi kim ?", "Şuanda ne renk iç çamaşırı giyiyorsun ?", "Telefonunda en son attığın mesaj nedir ?", "Eğer çıplak kalmak ile kafanın üzerinde aklından geçen her düşüncenin yazılı olarak yansıyacağı bir baloncukla yaşamak arasında bir seçim yapmak zorunda kalsaydın hangisini seçerdin ?", "Tuvaletini yaparken düşündüğün bir kaç şey söyler misin ?", "Hiç aynada öpüşme pratiği yaptığın oldu mu ?", "En saklı hazzını söyle ?", "Hiç birinin yanlışlıkla seni çıplak gördüğü oldu mu ?", "Duşta hangi şarkıyı söylersin ?", "Gizli platoniğin kim ?", "Sence bu odadaki en seksi kişi kim ", "Görünüşüne bir puan vermen gerekse 1 ile 10 arasından kaç verirdin ?", "Hayalindeki kız/erkek nasıl biri ?", "Benim hakkımda sevmediğin bir şey söyle.", "Şuanki sevgilinle evlenir miydin ?", "Bir iç çamaşırı kaç gün giyiyorsun ?","Yaptığın en yasa dışı şey neydi ?", "Bir milyon lira verseler en sevdiğin evcil hayvanını köpek maması yapmaları için satar mıydın ?", "En gıcık olduğun şey nedir ?", "Çok güzel/yakışıklı olsa bir uzaylıyla sevişir miydin ?", "Eğer birden fazla eşle evlenebilseydin ? Kimleri seçerdin ?", "Düşün ki 100 kişinin hayatını kurtacaksın ama kimse bilemeyecek. Ya da kimseyi kurtarmayacaksın ama herkes ömrün boyunca seni taktir ediyor olacak. Hangisini seçerdin ?", "Ömrünün sonuna kadar dinlemek için tek bir şarkı seçebilecek olsaydın hangisini seçerdin ?", "Kışın ortasında evinde internetsiz yaşamayı mı, ısıtma sistemi olmadan yaşamayı mı tercih ederdin ?", "Eğer tekrar dünyaya gelseydin, doğmak için hangi yılı seçerdin ?", "Eğer bir zaman makinen olsaydı ve geçmişe gidip yaptığın tek bir şeyi silebilecek olsaydın, neyi silerdin ?", "Hiç aldatıldın mı ?", "Görünmezlik gücün olsaydın ne yapardın ?", "Birine alıcı gözle dikkatli bir şekilde yaparken o kişi tarafından aniden fark edildiğin oldu mu ?", "Kendini en ezik hissettiğin an hangisiydi ?", "Gördüğün en sapık rüyayı anlat !", "Hiç sosyal medyaya yükleyip sonra pişman olup sildiğin bir fotoğraf oldu mu ?", "En büyük saçma korkun nedir ?", "Dünya haftaya sona erecek olsa, hangi yasa dışı şeyleri yapardın ?", "Hala yapmaya devam ettiğin en garip şey nedir ?", "Özendiğin ve onun gibi olamam dediğin kişi kimdir ?", "Sana takılan en rahatsız edici lakap neydi ?", "Seni insanlar içinde en son utanç verici bir duruma düşüren şey neydi ?", "Eğer dizi karakteriyle sevişebilecek olsaydın, kimi seçerdin ?", "Biriyle buluşmamak için hastayım diye yalan attığın olduğu mu ? İsim ver !", "Sadece evde tek başınayken yaptığın en garip şey nedir ?", "Kendini rezil ettığin bir anını anlat !", "En büyük hayal kırıklığını anlat !", "Enayilik yaptığın bir anı anlat !", "Duş almadan yaşadığın en uzun süre ?", "Yapmaman gereken bir şeyi yaparken yakalandın mı? O şey neydi ?", "Vücudunun en çok neresini seviyorsun ?", "Hiç bitlendin mi ?"];
                var secilenDeger = bb[Math.floor(Math.random() * bb.length)];
                var sonucDiv = document.getElementById("sonuc");
                document.getElementById("sonuc").innerHTML = "<b>Doğruluk sorusu:<b> " + secilenDeger;
                SelectionSound.play();
                background.style.backgroundColor = "#228B22";
            }

            function button2() {
                var bk = ["İğrenç bir ses tonuyla şarkı söyle", "Yalandan bir şekilde 2 dakika boyunca ağla", "Kendi elin ile tutkulu bir şekilde öpüş", "Yanındaki arkadaşının sana 1 tokat atmasına izin ver", "Rehberinden rastgele birini ara ve sonra yanlış aradım diye kapat", "1 dakika boyunca bir tavukmuşsun gibi davran", "İnstagramda çok saçma bir şey paylaş 5 dakika sonra sil", "Bugün yaptığın bir şeyle alakalı uydurma kısa, komik bir hikaye anlat", "Telefonunu 1 dakika boyunca karıştırmamız için bize ver", "Bize İnstagram mesajlarını okumamız için izin ver", "2 tane zıt içecek adı söyleyip Bu iki içeceği karıştırıp iç", "Birini ara ve karadeniz şivesiyle konuş", "Kişi kız ise Yüzündeki tüm makyajını sil. Kişi erkek ise Biraz makyaj yap", "Facebook’a filtresiz ve çirkin bir selfie at ve 5 dakika sonra sil", "Whatsapp ındaki son mesajlaşmanı bize oku", "Çok yüksek bir sesle 3 saniye bağır", "20 tane şınav çekmeye çalış", "Yeri öp", "Sarhoş taklidi yap", "Hemen kısa bir aşk şiiri yazıp oku", "Breakdance yap", "Yanındaki kişiyi öp", "Yanındaki kişiye masaj yap", "Bir bardak dolusu şarabı / birayı su içer gibi iç", "30 saniyeliğine bir balerin gibi dans et", "Yüzüne çirkin ve iğrenç bir ifade ver", "Yere yat ve bir balık gibi davran", "1 dakikalığına köpek taklidi yap", " Rap şarkısı uydur ve söyle", "Yanındaki kişiye seksi şekilde bak", "Yanındaki kişilerden birinin kulağına çok terbiyesiz şeyler fısılda", "Ağız dolusu çirkin bir küfür et", "Aileni ara ve kötü bir şey oldu diyerek 30 saniye boyunca onları işlet", "Alfabeyi geriye doğru say", "Çiğ yumurta iç", "Kıyafetlerini çıkarmadan duşa gir", "Kendi etrafında 10 defa hızlıca dön ve düz bir çizgide yürümeye çalış", "Tekrar sıran gelene kadar bir maymun gibi davran", "Amuda kalkmaya çalış", "Sıra tekrar sana gelene kadar deli taklidi yap", "Pantolonunun içine buz at", "30 saniye boyunca opera şarkısı söylemeye çalış", "Gruptan karşı cinsten biriyle bir kıyafetini değiştir", "Odadaki birini baştan çıkarmaya çalış", "Diline acı sos damlat ya da acı biber sür", "Bir yemek kaşığı ketçabı tek bir lokmada ye", "Gözünü kırpmadan 1 dakika durmaya çalış", "Şuan en yakınındaki kitabı al rastgele bir sayfa seçerek ilk gördüğün cümleyi whatsapp’tan sana son yazan kişiye yaz", "Telefonunun galerisinden son çektiğin 5 fotoğrafı göster", "Yanındaki kişiyi öp", "Bir kalıp sabunu al ve yala", "Ağzında su varken şarkı söylemeye çalış", "2 tur boyunca oyunu gözlerin kapalı oyna", "Yanındaki kişinin yüzüne tükenmez kalemle bir şey çizmesine izin ver", "3 dakika boyunca tek ayak üzerinde bekle", "Çiğ soğan yemeye çalış", "Yabancı biriyle selfie çek", "3 dakika boyunca tavuk gibi davran"];
                var secilenDeger = bk[Math.floor(Math.random() * bk.length)];
                var sonucDiv = document.getElementById("sonuc");
                document.getElementById("sonuc").innerHTML = "<b>Cesaretlik Sorusu:<b> " + secilenDeger;
                background.style.backgroundColor = "#FF0000";
                SelectionSound.play();
            }
        </script>
    </div>
    <div>

    </div>
</div>


@include("comps/footer")
<script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
</body>
</html>
