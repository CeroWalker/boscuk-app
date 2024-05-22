<html lang="tr">
<head>
    @include("comps/requirement")
    <style>
        @media only screen and (min-device-width: 767px) {
            #pagination{
                padding-left: 5rem;
                padding-right: 5rem;
            }
        }
        @media only screen and (max-device-width: 767px){
            #pagination{
                padding-left: 2.5rem;
                padding-right: 2.5rem;
            }
        }

        #content_image{
            height: 50%;
        }

        #culture{
            height: fit-content;
        }

    </style>
</head>
@include("comps/header")
@include('comps/tawk')
<header class="bg-gray-900 text-white text-center py-20">
    <div class="container mx-auto">
        <h1 class="text-4xl font-bold mb-4">Beyond Of Seen Genel Kültür</h1>
        <p class="text-lg">Sitemizde bulunan Genel Kültür bilgilerine bu sayfadan ulaşabilirsiniz</p>
    </div>
</header>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 p-10 md:px-20 md:mt-10">

    @foreach($cultures as $culture)
        <div id="culture" class="bg-white rounded-xl shadow-md overflow-hidden">
            <div class="relative">
                <img id="content_image" class="w-full object-cover" src="{{ config('app.url') }}/storage/{{ $culture->content_image }}">
            </div>
            <div class="p-4">
                <a id="title_id" class="text-gray-500 text-sm" href="{{ config('app.url') }}/kultur/{{ $culture->title_id }}">
                    <div class="text-lg font-medium text-gray-800 mb-2">{{ $culture->title }}</div>
                    {!! mb_substr($culture->content, 0, 310,) !!}
                </a>
            </div>
        </div>
    @endforeach
</div>

<div id="pagination"> {{ $cultures->links() }} </div>


@include("comps/footer")
</html>
