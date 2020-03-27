@extends('layouts.base')

@section('header')
    @include('partials.base_header')
@endsection

@section('main')

    @include('partials.breadcrumb')

    {!!  $modx->documentObject['content'] !!}

@endsection

@section('footer')
    @include('partials.base_footer')
@endsection