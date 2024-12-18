
<h2 class="text-2xl text-blue-700">Matematik konuları:</h2>
@foreach( $lessons as $lesson)

    @if($lesson->lesson_id == 10 && $lesson->lesson_group == 'matematik')
        <tr>
            <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">
                    <a class="text-xl" href="{{ config('app.url') }}/dersler/{{ $lesson->title_id }}">{{ $lesson->title }}</a>
                </div>
            </td>
        </tr>
    @endif
@endforeach

<h2 class="text-2xl text-blue-700">Türk Dili Ve Edebiyatı konuları:</h2>
@foreach( $lessons as $lesson)

    @if($lesson->lesson_id == 10 && $lesson->lesson_group == 'edebiyat')
        <tr>
            <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">
                    <a class="text-xl" href="{{ config('app.url') }}/dersler/{{ $lesson->title_id }}">{{ $lesson->title }}</a>
                </div>
            </td>
        </tr>
    @endif
@endforeach

<h2 class="text-2xl text-blue-700">Fizik konuları:</h2>
@foreach( $lessons as $lesson)

    @if($lesson->lesson_id == 10 && $lesson->lesson_group == 'fizik')
        <tr>
            <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">
                    <a class="text-xl" href="{{ config('app.url') }}/dersler/{{ $lesson->title_id }}">{{ $lesson->title }}</a>
                </div>
            </td>
        </tr>
    @endif
@endforeach

<h2 class="text-2xl text-blue-700">Kimya konuları:</h2>
@foreach( $lessons as $lesson)

    @if($lesson->lesson_id == 10 && $lesson->lesson_group == 'kimya')
        <tr>
            <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">
                    <a class="text-xl" href="{{ config('app.url') }}/dersler/{{ $lesson->title_id }}">{{ $lesson->title }}</a>
                </div>
            </td>
        </tr>
    @endif
@endforeach

<h2 class="text-2xl text-blue-700">Biyoloji konuları:</h2>
@foreach( $lessons as $lesson)

    @if($lesson->lesson_id == 10 && $lesson->lesson_group == 'biyoloji')
        <tr>
            <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">
                    <a class="text-xl" href="{{ config('app.url') }}/dersler/{{ $lesson->title_id }}">{{ $lesson->title }}</a>
                </div>
            </td>
        </tr>
    @endif
@endforeach

<h2 class="text-2xl text-blue-700">Tarih konuları:</h2>
@foreach( $lessons as $lesson)

    @if($lesson->lesson_id == 10 && $lesson->lesson_group == 'tarih')
        <tr>
            <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">
                    <a class="text-xl" href="{{ config('app.url') }}/dersler/{{ $lesson->title_id }}">{{ $lesson->title }}</a>
                </div>
            </td>
        </tr>
    @endif
@endforeach

<h2 class="text-2xl text-blue-700">Coğrafya konuları:</h2>
@foreach( $lessons as $lesson)

    @if($lesson->lesson_id == 10 && $lesson->lesson_group == 'cografya')
        <tr>
            <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">
                    <a class="text-xl" href="{{ config('app.url') }}/dersler/{{ $lesson->title_id }}">{{ $lesson->title }}</a>
                </div>
            </td>
        </tr>
    @endif
@endforeach

<h2 class="text-2xl text-blue-700">Din konuları:</h2>
@foreach( $lessons as $lesson)

    @if($lesson->lesson_id == 10 && $lesson->lesson_group == 'din')
        <tr>
            <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">
                    <a class="text-xl" href="{{ config('app.url') }}/dersler/{{ $lesson->title_id }}">{{ $lesson->title }}</a>
                </div>
            </td>
        </tr>
    @endif
@endforeach

<h2 class="text-2xl text-blue-700">İngilizce konuları:</h2>
@foreach( $lessons as $lesson)

    @if($lesson->lesson_id == 10 && $lesson->lesson_group == 'ingilizce')
        <tr>
            <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">
                    <a class="text-xl" href="{{ config('app.url') }}/dersler/{{ $lesson->title_id }}">{{ $lesson->title }}</a>
                </div>
            </td>
        </tr>
    @endif
@endforeach

<h2 class="text-2xl text-blue-700">Almanca konuları:</h2>
@foreach( $lessons as $lesson)

    @if($lesson->lesson_id == 10 && $lesson->lesson_group == 'almanca')
        <tr>
            <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">
                    <a class="text-xl" href="{{ config('app.url') }}/dersler/{{ $lesson->title_id }}">{{ $lesson->title }}</a>
                </div>
            </td>
        </tr>
    @endif
@endforeach
