@extends('layouts.category')

@section('header')
    @include('partials.base_header')
@endsection

@section('main')

    @include('partials.breadcrumb')

    <section class="container" >
        <div class="row">
            <div class="col-12 mt-4 mb-5">
                <h1 class="title--1">{{ $modx->documentObject['longtitle'] }}</h1>
                <div class="red--underline"></div>

                {!!  $modx->documentObject['content'] !!}

            </div>
            <div class="col-12 mb-4">
                @include('partials.slider-col-3', [
                   'title' => 'Бестселлеры фабрики'
               ])

                <div id="app">
                    <catalog-list
                        items-json='{{ $modx->runSnippet("multiTV", [
                        "tvName" => "pfd_multi_catalog",
                        "toJson" => "1",
                        "display" => "20"
                        ]) }}'
                        password="{{ $documentObject['catalog_password'] }}"
                        btn-name="Посмотреть каталоги"
                    />
                </div>
            </div>
        </div>
    </section>

@endsection


@section('form')
    @include('partials.universal_form', [
    'title' => 'Есть вопросы?',
    'description' => 'Мы ценим ваше время и стремимся максимально быстро и качественно предоставить ответ на ваш вопрос.'
    ])
@endsection

@section('footer')
    @include('partials.base_footer')
@endsection
