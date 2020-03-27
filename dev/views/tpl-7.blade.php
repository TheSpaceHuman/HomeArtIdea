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

                <div class="grid">
                    {!!  $modx->runSnippet('DocLister',[
                       'parents' => $documentObject['id'],
                       'tvList' => 'category_img',
                       'tpl' => 'tpl_categories',
                       'sortType' => 'other',
                       'orderBy' => 'menuindex ASC'
                       ]) !!}
                </div>
            </div>
        </div>
    </section>

@endsection
