@extends('layouts.base')

@section('header')
    @include('partials.base_header')
@endsection

@section('main')

    @include('partials.breadcrumb')

    <section class="container">
        <div class="row">
            <div class="col-12 mt-4 mb-5">
                <h1 class="title--1">{{ $modx->documentObject['longtitle'] }}</h1>
                <p class="text--1">{{ $modx->documentObject['description'] }}</p>
                <div class="red--underline"></div>

                {!!  $modx->documentObject['content'] !!}

                <section class="container">
                    <div class="row">
                        <div class="gallery-items">
                            {!! $modx->runSnippet('sgLister', [
                               'parents' => $documentObject['id'],
                               'tpl' => '@CODE: <a class="gallery-item" href="[+sg_image+]" data-fancybox="gallery" data-caption="[+e.sg_title+]"><img src="[+sg_image+]" alt="[+e.sg_title+]"/></a>',
                            ]) !!}
                        </div>
                    </div>
                </section>

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