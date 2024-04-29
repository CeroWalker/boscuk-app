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

<div class="min-[768px]:grid min-[768px]:grid-cols-5 min-[768px]:divide-x text-center mt-4">
    <div>
        <h1 class="text-2xl">9.sınıf</h1>
        @for($x = 0; $x <= 10; $x++)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">Ders 1</div>
                </td>
            </tr>
        @endfor
    </div>

    <div>
        <h1 class="text-2xl">10.Sınıf</h1>
        @for($x = 0; $x <= 10; $x++)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">Ders 1</div>
                </td>
            </tr>
        @endfor
    </div>

    <div>
        <h1 class="text-2xl">11.Sınıf</h1>
        @for($x = 0; $x <= 10; $x++)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">Ders 1</div>
                </td>
            </tr>
        @endfor
    </div>

    <div>
        <h1 class="text-2xl">12.Sınıf</h1>
        @for($x = 0; $x <= 10; $x++)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">Ders 1</div>
                </td>
            </tr>
        @endfor
    </div>

    <div>
        <h1 class="text-2xl">Kpss/Ekpss</h1>
        @for($x = 0; $x <= 10; $x++)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">Ders 1</div>
                </td>
            </tr>
        @endfor
    </div>
</div>

@include("comps/footer")

</body>
</html>
