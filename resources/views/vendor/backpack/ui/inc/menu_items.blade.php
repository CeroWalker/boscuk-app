{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="Dersler" icon="la la-book-open" :link="backpack_url('lessons')" />
<x-backpack::menu-item title="Testler" icon="la la-question" :link="backpack_url('quiz-questions')" />
<x-backpack::menu-item title="Genel Kültür" icon="la la-book-medical" :link="backpack_url('culture')" />
<x-backpack::menu-item title="Rehberler" icon="la la-handshake" :link="backpack_url('guide')" />
<x-backpack::menu-item title="Araçlar" icon="la la-tools" :link="backpack_url('tools')" />
<x-backpack::menu-item title="Oyunlar" icon="la la-gamepad" :link="backpack_url('games')" />
<x-backpack::menu-item title="Kullanıcılar" icon="la la-user" :link="backpack_url('user')" />

<x-backpack::menu-item :title="trans('backpack::crud.file_manager')" icon="la la-files-o" :link="backpack_url('elfinder')" />