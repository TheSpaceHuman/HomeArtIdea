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

{{--                {!!  $modx->documentObject['content'] !!}--}}

                <section class="container pb-5">
                    <div class="row">
                        <div class="col-12 mt-4 mb-5" style="color: #000; position: relative;">
                            <h1 class="title--1">Студия европейской мебели и дизайна</h1>
                            <p class="text--1">мебель, свет, текстиль, аксессуары, мебельное ателье</p>
                            <div class="red--underline"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 window-block_img">
                            <img src="theme/assets/rediz/img/about/block1_1.jpg" alt="">
                        </div>
                        <div class="col-12 col-md-6 window-block_text-right">
                            <h2 class="title--2">О нас</h2>
                            <p>Мы хотим внести часть европейской культуры, истории и эстетики в наши проекты, ориентируясь на лучшие традиции, передающиеся из поколения в поколение!</p>
                            <p>Это и послужило вдохновением для создания компании Homeartidea!</p>

                            <a href="#" class="text--link-red mt-5">узнать больше</a>
                            <i class="zmdi zmdi-arrow-right"></i>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 window-block_text-left">
                            <h2 class="title--2">Дизайн проект интерьера</h2>

                            <p>Дизайн проект интерьера базируется на Виших идеях и желаниях.</p>
                            <p>Это главное условие. В конце концов - это Ваш дом и жить в нем будете Вы!</p>
                            <p>Наша основная задача - помочь Вам сделать будущий дом функциональным, комфортным и уютным</p>

                            <a href="#" class="text--link-red mt-5">узнать больше</a>
                            <i class="zmdi zmdi-arrow-right"></i>
                        </div>

                        <div class="col-12 col-md-6 window-block_img">
                            <img src="theme/assets/rediz/img/about/block1_2.jpg" alt="" >
                        </div>
                    </div>
                </section>

                <section class="container-fluid py-5">
                    <div class="row services">
                        <div class="col-5 services_left-banner" style="background-image: url('theme/assets/rediz/img/about/fon_block2.png');">
                            <img src="theme/assets/rediz/img/about/block2_1.jpg" alt="">
                            <div class="services_left-banner_message">
                                <h3 class="title--1">Комплексное решение</h3>
                                <p class="services_left-banner_message_sub-text">для вашего интерьера</p>
                            </div>
                        </div>
                        <div class="col-7 services_fichers">
                            <h3 class="services_fichers__hidden-title">Комплексное решение</h3>
                            <div class="services_fichers__items">
                                <div class="services_fichers_item">
                                    <div class="services_fichers_item-icon">
                                        <img src="theme/assets/rediz/img/about/block2_icon-1.png" alt="">
                                    </div>
                                    <h4 class="services_fichers_item-title">Разработка дизайн-проекта</h4>

                                </div>
                                <div class="services_fichers_item">
                                    <div class="services_fichers_item-icon">
                                        <img src="theme/assets/rediz/img/about/block2_icon-2.png" alt="">
                                    </div>
                                    <h4 class="services_fichers_item-title">Безупречная сборка нашими мастерами</h4>

                                </div>
                                <div class="services_fichers_item">
                                    <div class="services_fichers_item-icon">
                                        <img src="theme/assets/rediz/img/about/block2_icon-3.png" alt="">
                                    </div>
                                    <h4 class="services_fichers_item-title">Подбор, и комплектация мебели под ваш бюджет</h4>

                                </div>
                                <div class="services_fichers_item">
                                    <div class="services_fichers_item-icon">
                                        <img src="theme/assets/rediz/img/about/block2_icon-4.png" alt="">
                                    </div>
                                    <h4 class="services_fichers_item-title">Гарантийное и послепродажное обслуживание</h4>

                                </div>
                                <div class="services_fichers_item">
                                    <div class="services_fichers_item-icon">
                                        <img src="theme/assets/rediz/img/about/block2_icon-5.png" alt="">
                                    </div>
                                    <h4 class="services_fichers_item-title">Доставка мебели по всей России и Европе</h4>

                                </div>
                                <div class="services_fichers_item">
                                    <div class="services_fichers_item-icon">
                                        <img src="theme/assets/rediz/img/about/block2_icon-6.png" alt="">
                                    </div>
                                    <h4 class="services_fichers_item-title">Изготовлениемебелипо эскизам в нашей мастерской</h4>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="title--1">Наши проеты</h3>
                            <p class="text--1">Проекты в которые мы вдохнули жизнь</p>
                            <div class="red--underline"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="gallery-items">
                            {!! $modx->runSnippet('sgLister', [
                               'parents' => 5,
                               'display' => 6,
                               'tpl' => '@CODE: <a class="gallery-item" href="[+sg_image+]" data-fancybox="gallery" data-caption="[+e.sg_title+]"><img src="[+sg_image+]" alt="[+e.sg_title+]"/></a>',
                            ]) !!}
                        </div>

                        <div class="col-12 justify-content-end d-flex p-0">
                            <a class="link-project" href="#">ПОСМОТРЕТЬ ВСЕ ПРОЕКТЫ   <i class="zmdi zmdi-arrow-right" style="color: #8f0e0f"></i></a>
                        </div>
                    </div>
                </section>


                <section class="container-fluid advantages"
                         style="background-image: url('theme/assets/rediz/img/about/block4_fon.png');
				background-position: 100% 0%;
				background-repeat: no-repeat;
				background-size: contain;">
                    <div class="container mt-5 pb-58">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="title--1">Почему выбирают нас?</h3>
                                <p class="text--1">Мы предлагаем комплексное решение для Вашего интерьера</p>
                                <div class="red--underline"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-6">
                                <ul class="advantages-items">
                                    <li class="advantages-item">
                                        <div class="advantages-item__icon">
                                            <img class="" src="theme/assets/rediz/img/about/block4_icon-1.png" alt="1"/>
                                        </div>
                                        <div class="advantages-item__description">
                                            <h4 class="advantages-item__title">Гибкие цены</h4>
                                            <div class="advantages-item__text">
                                                <p>Благодаря прямому сотрудничеству с производителями</p>
                                            </div>
                                        </div>

                                    </li>
                                    <li class="advantages-item">
                                        <div class="advantages-item__icon">
                                            <img class="" src="theme/assets/rediz/img/about/block4_icon-2.png" alt="2"/>
                                        </div>

                                        <div class="advantages-item__description">
                                            <h4 class="advantages-item__title">Соблюдение сроков</h4>
                                            <div class="advantages-item__text">
                                                <p>Контроль на всех этапах</p>
                                            </div>
                                        </div>

                                    </li>
                                    <li class="advantages-item">
                                        <div class="advantages-item__icon">
                                            <img class="" src="theme/assets/rediz/img/about/block4_icon-3.png" alt="3"/>
                                        </div>

                                        <div class="advantages-item__description">
                                            <h4 class="advantages-item__title">Экономия личного времени</h4>
                                            <div class="advantages-item__text">
                                                <p>Всю рутинную работу по по проекту мы берем на себя</p>
                                            </div>
                                        </div>

                                    </li>
                                    <li class="advantages-item">
                                        <div class="advantages-item__icon">
                                            <img class="" src="theme/assets/rediz/img/about/block4_icon-4.png" alt="4"/>
                                        </div>

                                        <div class="advantages-item__description">
                                            <h4 class="advantages-item__title">Европейские производители</h4>
                                            <div class="advantages-item__text">
                                                <p>Мы готовы предложить Вам более 500
                                                    европейскихпроизводителей на любой
                                                    вкус и бюджет, поэтому Вы обязательно
                                                    подберете интерьер своей мечты!</p>
                                            </div>
                                        </div>

                                    </li>
                                    <li class="advantages-item">
                                        <div class="advantages-item__icon">
                                            <img class="" src="theme/assets/rediz/img/about/block4_icon-5.png" alt="5"/>
                                        </div>

                                        <div class="advantages-item__description">
                                            <h4 class="advantages-item__title">Всё для Вашего комфорта</h4>
                                            <div class="advantages-item__text">
                                                <p>Мы абсолютно мобильны и на связи в удобное для Вас время</p>
                                            </div>
                                        </div>

                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-6 ">
                                <img class="advantages__image" src="theme/assets/rediz/img/about/block4_1.jpg" alt="">
                            </div>
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