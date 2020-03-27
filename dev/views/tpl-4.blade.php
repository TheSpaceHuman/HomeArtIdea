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