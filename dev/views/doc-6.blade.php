@extends('tpl-4')


@section('main')

    @include('partials.breadcrumb')

    <section class="container link-flip">
        <div class="row">
            <div class="col-12 mt-4 mb-5">
                <h1 class="title--1">{{ $modx->documentObject['longtitle'] }}</h1>
                <p class="text--1">{{ $modx->documentObject['description'] }}</p>
                <div class="red--underline"></div>

                {!!  $modx->documentObject['content'] !!}

                <div class="sotrundnichestvo">
                    <div class="sotrundnichestvo__text-block">
                        <p>
                            Наша компания не стоит на месте и активно развивается.
                            Мы заинтересованы в развитии продуктивных, партнерских отношений на долгосрочной основе с производителями мебели, осветительных приборов, декора, текстиля.
                        </p>
                        <p>
                            Приглашаем к сотрудничеству дизайнеров и архитекторов.  Для вас мы предусмотрели интересные условия и систему поощрений при постоянном сотрудничестве.
                        </p>
                        <p>
                            У нас подобрана обширная база актуальных <a href="{{ $modx->makeUrl('8') }}">каталогов и образцов</a> европейских производителей, с которыми мы сотрудничаем.
                        </p>
                        <p>
                            Мы дорожим каждым клиентом, стремимся завоевать ваше доверие и удовлетворить все ваши ожидания от совместной работы. Для наших постоянных заказчиков мы разработали гибкую систему скидок.
                        </p>

                    </div>
                    <div class="sotrundnichestvo__image-block">
                        <img class="sotrundnichestvo__image-block_img-1" src="theme/assets/rediz/img/sotrundnichestvo/img-1.jpg">
                        <img class="sotrundnichestvo__image-block_img-2" src="theme/assets/rediz/img/sotrundnichestvo/img-2.jpg">
                    </div>
                </div>

                <div class="sotrundnichestvo__text-block--bottom">
                    <p>Отправляйте письма с предложениями к сотрудничеству на адрес: <a href="mailto:info@homeartidea.ru">info@homeartidea.ru</a> в произвольной форме. Мы обязательно свяжемся с вами и обсудим все детали и интересующие вас вопросы.</p>
                </div>


            </div>
        </div>
    </section>

@endsection

@section('form')
    @include('partials.universal_form', [
    'title' => 'Отправить предложение:',
    'description' => 'Задавайте любые вопросы, мы с удовольствием Вам поможем'
    ])
@endsection