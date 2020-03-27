@extends('tpl-4')


@section('main')

    @include('partials.breadcrumb')

    <section class="container">
        <div class="row">
            <div class="col-12 mt-4 mb-5">
                <h1 class="title--1">{{ $modx->documentObject['longtitle'] }}</h1>
                <p class="text--1">{{ $modx->documentObject['description'] }}</p>
                <div class="red--underline"></div>

                {!!  $modx->documentObject['content'] !!}
            </div>

            <div class="col-12 col-md-4 align-items-center contacts-list">
                <ul class="contacts-list__items">
                    <li class="contacts-list__item">
                        <h3 class="contacts-list__item_title"><i class="fas fa-home mr-2 secondary--color_icon"></i>Адрес:</h3>
                        <p class="contacts-list__item_description">{{ $modx->getConfig('client_address') }}</p>
                    </li>
                    <li class="contacts-list__item">
                        <h3 class="contacts-list__item_title"><i class="fas fa-phone mr-2 secondary--color_icon fa-flip-horizontal"></i>Телефон:</h3>
                        <a href="tel:{{ $modx->getConfig('client_phone') }}" class="contacts-list__item_description">@evoParser('[[phone_format? &phone=[(client_phone)] ]]')</a>
                    </li>
                    <li class="contacts-list__item">
                        <h3 class="contacts-list__item_title"><i class="fas fa-envelope mr-2 secondary--color_icon"></i>E-mail</h3>
                        <a href="mailto:{{ $modx->getConfig('client_email') }}" class="contacts-list__item_description">{{ $modx->getConfig('client_email') }}</a>
                    </li>
                </ul>
            </div>

            <div class="col-12 col-md-8">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A26502f8e6555a4938f78fc669f38b84a9ab7b6499545c05172724f712795b73f&amp;width=100%25&amp;height=505&amp;lang=ru_RU&amp;scroll=false"></script>
            </div>
        </div>
    </section>

@endsection

@section('form')
    @include('partials.universal_form', [
    'title' => 'Связаться с нами',
    'description' => 'Мы ценим ваше время и стремимся максимально быстро и качественно предоставить ответ на ваш вопрос.'
    ])
@endsection