@extends('tpl-4')

@section('main')

    @include('partials.breadcrumb')

{{--    {{ $modx->documentObject['content'] }}--}}

    <section class="container pb-5">
        <div class="row">
            <div class="col-12 mt-4 mb-5" style="color: #000; position: relative;">
                <h1 class="title--1">{{ $modx->documentObject['longtitle'] }}</h1>
                <p class="text--1">{{ $modx->documentObject['description'] }}</p>
                <div class="red--underline"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 window-block_img">
                <img src="theme/assets/rediz/img/about/block1_1.jpg" alt="">
            </div>
            <div class="col-12 col-md-6 window-block_text-right">
                <h2 class="title--2">О нас</h2>
                <p>Хотите сделать свой дом уютным и стильным, но не можете сориентироваться в огромном потоке информации, не знаете с чего начать и кому доверить воплощение вашей мечты в реальность?
                    Мы, команда Homeartidea, поможем найти решение любой, даже самой сложной задачи. Мы стремимся к тому, чтобы каждый проект был уникальный.</p>

                <a href="#about" id="modalBtn1" class="text--link-red mt-5">узнать больше</a>
                <i class="zmdi zmdi-arrow-right"></i>

            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 window-block_text-left">
                <h2 class="title--2">Дизайн проект интерьера</h2>

                <p>Дизайн проект интерьера базируется на Виших идеях и желаниях.</p>
                <p>Это главное условие. В конце концов - это Ваш дом и жить в нем будете Вы!</p>
                <p>Наша основная задача - помочь Вам сделать будущий дом функциональным, комфортным и уютным</p>

                <a href="{{ $modx->makeUrl('9') }}" class="text--link-red mt-5">узнать больше</a>
                <i class="zmdi zmdi-arrow-right"></i>
            </div>

            <div class="col-12 col-md-6 window-block_img">
                <img src="theme/assets/rediz/img/about/block1_2.jpg" alt="" >
            </div>
        </div>
    </section>

    <section class="container-fluid py-0 py-md-5">
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
                        <h4 class="services_fichers_item-title">Подбор, и комплектация <br>мебели под ваш бюджет</h4>

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
                        <h4 class="services_fichers_item-title">Изготовление мебели по эскизам в нашей мастерской</h4>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="title--1">Наши проекты</h3>
                <p class="text--1">Проекты в которые мы вдохнули жизнь</p>
                <div class="red--underline"></div>
            </div>
        </div>

        <div class="row">
            <div class="gallery-items">
                <a href="theme/assets/rediz/img/about/block3_1.jpg" data-fancybox="gallery" data-caption="IMG-1"  class="gallery-item">
                    <img src="theme/assets/rediz/img/about/block3_1.jpg" alt="">
                </a>
                <a href="theme/assets/rediz/img/about/block3_2.jpg" data-fancybox="gallery" data-caption="IMG-2"  class="gallery-item">
                    <img src="theme/assets/rediz/img/about/block3_2.jpg" alt="">
                </a>
                <a href="theme/assets/rediz/img/about/block3_3.jpg" data-fancybox="gallery" data-caption="IMG-3"  class="gallery-item">
                    <img src="theme/assets/rediz/img/about/block3_3.jpg" alt="">
                </a>
                <a href="theme/assets/rediz/img/about/block3_4.jpg" data-fancybox="gallery" data-caption="IMG-4"  class="gallery-item">
                    <img src="theme/assets/rediz/img/about/block3_4.jpg" alt="">
                </a>
                <a href="theme/assets/rediz/img/about/block3_5.jpg" data-fancybox="gallery" data-caption="IMG-5"  class="gallery-item">
                    <img src="theme/assets/rediz/img/about/block3_5.jpg" alt="">
                </a>
                <a href="theme/assets/rediz/img/about/block3_6.jpg" data-fancybox="gallery" data-caption="IMG-6"  class="gallery-item">
                    <img src="theme/assets/rediz/img/about/block3_6.jpg" alt="">
                </a>
            </div>

            <div class="col-12 justify-content-end d-flex p-0">
                <a class="link-project" href="{{ $modx->makeUrl('5') }}">ПОСМОТРЕТЬ ВСЕ ПРОЕКТЫ   <i class="zmdi zmdi-arrow-right" style="color: #8f0e0f"></i></a>
            </div>
        </div>
    </section>

    <section class="container-fluid advantages"
             style="background-image: url('theme/assets/rediz/img/about/block4_fon.jpg');
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
                                        европейских производителей на любой
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

@endsection

@section('form')
    @include('partials.universal_form', [
        'title' => 'Напишите нам',
        'description' => 'Задавайте любые вопросы, мы с удовольствием Вам поможем'
        ])
@endsection

@section('modals')
    @include('partials.modal', [
     'id' => 'about',
     'content' => '
         <div class="container-825">
            <h1 class="title--1">Студия европейской мебели и дизайна</h1>
            <div class="red--underline"></div>
            <p>
                Мечта создать свою студию дизайна родилась несколько лет назад, когда, будучи в деловой поездке по Италии, нас пригласили на одну известную итальянскую фабрику мебели.
            </p>
            <p>
                Семейное производство, передающееся из поколения в поколение, атмосфера доброжелательности и открытости, просторные производственные цеха, пропитанные ароматом древесины и лака, - все это произвело на нас невероятное впечатление. Мы были восхищенны тем, что все от менеджера  до главы  компании относятся с невероятной любовью и энтузиазмом к своему делу.
            </p>
            <p>
                Люди, увлечённые своей профессией, для которых не существует мелочей, ценящие каждого своего клиента, стали для нас ориентиром.
            </p>

            <img src="theme/assets/rediz/img/about/modalAboud-img-1.jpg" class="my-4" alt="О студии">

            <p>
                Это и послужило вдохновением для создания компании Homeartidea!<br>
                Мы хотим внести часть европейской культуры, истории и эстетики в <a href="#" class="text--link-red">наши проекты</a>, ориентируясь на лучшие традиции!
            </p>
        </div>
     '
     ])
@endsection



