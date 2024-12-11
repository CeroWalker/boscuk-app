
<h2 class="text-2xl text-blue-700">Matematik testleri:</h2>
@foreach( $quiz as $quizes)

    @if($quizes->quiz_id == 9 && $quizes->quiz_group == 'matematik')
        <tr>
            <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">
                    <a class="text-xl" href="{{ config('app.url') }}/testler/{{ $quizes->title_id }}">{{ $quizes->title }}</a>
                </div>
            </td>
        </tr>
    @endif
@endforeach

<h2 class="text-2xl text-blue-700">Türk Dili Ve Edebiyatı testleri:</h2>
@foreach( $quiz as $quizes)

    @if($quizes->quiz_id == 9 && $quizes->quiz_group == 'edebiyat')
        <tr>
            <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">
                    <a class="text-xl" href="{{ config('app.url') }}/testler/{{ $quizes->title_id }}">{{ $quizes->title }}</a>
                </div>
            </td>
        </tr>
    @endif
@endforeach

<h2 class="text-2xl text-blue-700">Fizik testleri:</h2>
@foreach( $quiz as $quizes)

    @if($quizes->quiz_id == 9 && $quizes->quiz_group == 'fizik')
        <tr>
            <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">
                    <a class="text-xl" href="{{ config('app.url') }}/testler/{{ $quizes->title_id }}">{{ $quizes->title }}</a>
                </div>
            </td>
        </tr>
    @endif
@endforeach

<h2 class="text-2xl text-blue-700">Kimya testleri:</h2>
@foreach( $quiz as $quizes)

    @if($quizes->quiz_id == 9 && $quizes->quiz_group == 'kimya')
        <tr>
            <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">
                    <a class="text-xl" href="{{ config('app.url') }}/testler/{{ $quizes->title_id }}">{{ $quizes->title }}</a>
                </div>
            </td>
        </tr>
    @endif
@endforeach

<h2 class="text-2xl text-blue-700">Biyoloji testleri:</h2>
@foreach( $quiz as $quizes)

    @if($quizes->quiz_id == 9 && $quizes->quiz_group == 'biyoloji')
        <tr>
            <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">
                    <a class="text-xl" href="{{ config('app.url') }}/testler/{{ $quizes->title_id }}">{{ $quizes->title }}</a>
                </div>
            </td>
        </tr>
    @endif
@endforeach

<h2 class="text-2xl text-blue-700">Tarih testleri:</h2>
@foreach( $quiz as $quizes)

    @if($quizes->quiz_id == 9 && $quizes->quiz_group == 'tarih')
        <tr>
            <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">
                    <a class="text-xl" href="{{ config('app.url') }}/testler/{{ $quizes->title_id }}">{{ $quizes->title }}</a>
                </div>
            </td>
        </tr>
    @endif
@endforeach

<h2 class="text-2xl text-blue-700">Coğrafya testleri:</h2>
@foreach( $quiz as $quizes)

    @if($quizes->quiz_id == 9 && $quizes->quiz_group == 'cografya')
        <tr>
            <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">
                    <a class="text-xl" href="{{ config('app.url') }}/testler/{{ $quizes->title_id }}">{{ $quizes->title }}</a>
                </div>
            </td>
        </tr>
    @endif
@endforeach

<h2 class="text-2xl text-blue-700">Din testleri:</h2>
@foreach( $quiz as $quizes)

    @if($quizes->quiz_id == 9 && $quizes->quiz_group == 'din')
        <tr>
            <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">
                    <a class="text-xl" href="{{ config('app.url') }}/testler/{{ $quizes->title_id }}">{{ $quizes->title }}</a>
                </div>
            </td>
        </tr>
    @endif
@endforeach

<h2 class="text-2xl text-blue-700">İngilizce testleri:</h2>
@foreach( $quiz as $quizes)

    @if($quizes->quiz_id == 9 && $quizes->quiz_group == 'ingilizce')
        <tr>
            <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">
                    <a class="text-xl" href="{{ config('app.url') }}/testler/{{ $quizes->title_id }}">{{ $quizes->title }}</a>
                </div>
            </td>
        </tr>
    @endif
@endforeach

<h2 class="text-2xl text-blue-700">Almanca testleri:</h2>
@foreach( $quiz as $quizes)

    @if($quizes->quiz_id == 9 && $quizes->quiz_group == 'almanca')
        <tr>
            <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">
                    <a class="text-xl" href="{{ config('app.url') }}/testler/{{ $quizes->title_id }}">{{ $quizes->title }}</a>
                </div>
            </td>
        </tr>
    @endif
@endforeach
