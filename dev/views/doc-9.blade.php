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

                <div class="case-block">
                    <div class="case-block_card-items">
                        <div class="case-block_card-item">
                            <img class="case-block_card-item_img animated fadeIn" src="theme/assets/rediz/img/case/1.jpg" />
                            <h3 class="case-block_card-item_title">Эскизный</h3>
                            <p class="case-block_card-item_price">{{ $modx->getConfig('client_price1') }}<span>руб/м2</span></p>
                            <ul class="case-block_card-item_list">
                                <li class="case-block_card-item_list_item">Обмерный план</li>
                                <li class="case-block_card-item_list_item">Планировочное решение (3 варианта)</li>
                                <li class="case-block_card-item_list_item">План расстановки мебели</li>
                            </ul>
                            <a class="case-block_card-item_button my-btn-red" id="modalBtn1" href="#case1">Примеры проектов</a>
                        </div>
                        <div class="case-block_card-item">
                            <img class="case-block_card-item_img animated fadeIn" src="theme/assets/rediz/img/case/2.jpg" />
                            <h3 class="case-block_card-item_title">Стандарт</h3>
                            <p class="case-block_card-item_price">{{ $modx->getConfig('client_price2') }}<span>руб/м2</span></p>
                            <ul class="case-block_card-item_list">
                                <li class="case-block_card-item_list_item">Обмерный план</li>
                                <li class="case-block_card-item_list_item">Планировочное решение (3 варианта)</li>
                                <li class="case-block_card-item_list_item">План расстановки мебели</li>
                                <li class="case-block_card-item_list_item">План демонтажа перегородок</li>
                                <li class="case-block_card-item_list_item">План монтажа перегородок</li>
                                <li class="case-block_card-item_list_item">План напольных покрытий</li>
                                <li class="case-block_card-item_list_item">План теплых полов</li>
                                <li class="case-block_card-item_list_item">План потолков</li>
                                <li class="case-block_card-item_list_item">План осветительного оборудования</li>
                                <li class="case-block_card-item_list_item">План привязки выключателей</li>
                                <li class="case-block_card-item_list_item">План электровыводов</li>
                                <li class="case-block_card-item_list_item">Развертка кухни</li>
                                <li class="case-block_card-item_list_item">Развертка стен С/У</li>
                                <li class="case-block_card-item_list_item">Стилистические коллажи</li>
                            </ul>
                            <a class="case-block_card-item_button my-btn-red" id="modalBtn2" href="#case2">Примеры проектов</a>
                        </div>
                        <div class="case-block_card-item">
                            <img class="case-block_card-item_img animated fadeIn" src="theme/assets/rediz/img/case/3.jpg" />
                            <h3 class="case-block_card-item_title">Премиум</h3>
                            <p class="case-block_card-item_price">{{ $modx->getConfig('client_price3') }}<span>руб/м2</span></p>
                            <ul class="case-block_card-item_list">
                                <li class="case-block_card-item_list_item">Обмерный план</li>
                                <li class="case-block_card-item_list_item">Планировочное решение (3 варианта)</li>
                                <li class="case-block_card-item_list_item">План расстановки мебели</li>
                                <li class="case-block_card-item_list_item">План демонтажа перегородок</li>
                                <li class="case-block_card-item_list_item">План монтажа перегородок</li>
                                <li class="case-block_card-item_list_item">План напольных покрытий</li>
                                <li class="case-block_card-item_list_item">План теплых полов</li>
                                <li class="case-block_card-item_list_item">План потолков</li>
                                <li class="case-block_card-item_list_item">План осветительного оборудования</li>
                                <li class="case-block_card-item_list_item">План привязки выключателей</li>
                                <li class="case-block_card-item_list_item">План электровыводов</li>
                                <li class="case-block_card-item_list_item">Развертка кухни</li>
                                <li class="case-block_card-item_list_item">Развертка стен С/У</li>
                                <li class="case-block_card-item_list_item">Развертки декоративных элементов</li>
                                <li class="case-block_card-item_list_item">3D визуализация</li>
                                <li class="case-block_card-item_list_item">Ведомость материалов и мебели</li>
                            </ul>
                            <a class="case-block_card-item_button my-btn-red" id="modalBtn3" href="#case3">Примеры проектов</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection

@section('form')
    @include('partials.universal_form', [
    'title' => 'Подать заявку',
    'description' => 'Мы ценим ваше время и стремимся максимально быстро и качественно предоставить ответ на ваш запрос.'
    ])
@endsection



@section('modals')

   @include('partials.modal', [
    'id' => 'case1',
    'content' => '
        <div class="modal-content__cart-items">
            <div class="modal-content__cart-item">
                <a href="theme/assets/rediz/img/case/modal1/img-6.jpg" data-fancybox="gallery" data-caption="img-6">
                    <img data-src="theme/assets/rediz/img/case/modal1/img-6.jpg" class="lazyload" alt="6">
                </a>
            </div>
            <div class="modal-content__cart-item">
                <a href="theme/assets/rediz/img/case/modal1/img-5.jpg" data-fancybox="gallery" data-caption="img-6">
                    <img data-src="theme/assets/rediz/img/case/modal1/img-5.jpg" class="lazyload" alt="5">
                </a>
            </div>
            <div class="modal-content__cart-item">
                <a href="theme/assets/rediz/img/case/modal1/img-6.jpg" data-fancybox="gallery" data-caption="img-6">
                    <img data-src="theme/assets/rediz/img/case/modal1/img-6.jpg" class="lazyload" alt="6">
                </a>
            </div>
            <div class="modal-content__cart-item">
                <a href="theme/assets/rediz/img/case/modal1/img-5.jpg" data-fancybox="gallery" data-caption="img-6">
                    <img data-src="theme/assets/rediz/img/case/modal1/img-5.jpg" class="lazyload" alt="5">
                </a>
            </div>
            <div class="modal-content__cart-item">
                <a href="theme/assets/rediz/img/case/modal1/img-6.jpg" data-fancybox="gallery" data-caption="img-6">
                    <img data-src="theme/assets/rediz/img/case/modal1/img-6.jpg" class="lazyload" alt="6">
                </a>
            </div>
            <div class="modal-content__cart-item">
                <a href="theme/assets/rediz/img/case/modal1/img-5.jpg" data-fancybox="gallery" data-caption="img-6">
                    <img data-src="theme/assets/rediz/img/case/modal1/img-5.jpg" class="lazyload" alt="5">
                </a>
            </div>
            <div class="modal-content__cart-item">
                <a href="theme/assets/rediz/img/case/modal1/img-6.jpg" data-fancybox="gallery" data-caption="img-6">
                    <img data-src="theme/assets/rediz/img/case/modal1/img-6.jpg" class="lazyload" alt="6">
                </a>
            </div>
            <div class="modal-content__cart-item">
                <a href="theme/assets/rediz/img/case/modal1/img-5.jpg" data-fancybox="gallery" data-caption="img-6">
                    <img data-src="theme/assets/rediz/img/case/modal1/img-5.jpg" class="lazyload" alt="5">
                </a>
            </div>
            <div class="modal-content__cart-item">
                <a href="theme/assets/rediz/img/case/modal1/img-6.jpg" data-fancybox="gallery" data-caption="img-6">
                    <img data-src="theme/assets/rediz/img/case/modal1/img-6.jpg" class="lazyload" alt="6">
                </a>
            </div>
        </div>
    '
    ])

   @include('partials.modal', [
    'id' => 'case2',
    'content' => '
        <div class="modal-content__cart-items">
            <div class="modal-content__cart-item">
                <a href="theme/assets/rediz/img/case/modal1/img-6.jpg" data-fancybox="gallery" data-caption="img-6">
                    <img data-src="theme/assets/rediz/img/case/modal1/img-6.jpg" class="lazyload" alt="6">
                </a>
            </div>
            <div class="modal-content__cart-item">
                <a href="theme/assets/rediz/img/case/modal1/img-5.jpg" data-fancybox="gallery" data-caption="img-6">
                    <img data-src="theme/assets/rediz/img/case/modal1/img-5.jpg" class="lazyload" alt="5">
                </a>
            </div>
            <div class="modal-content__cart-item">
                <a href="theme/assets/rediz/img/case/modal1/img-6.jpg" data-fancybox="gallery" data-caption="img-6">
                    <img data-src="theme/assets/rediz/img/case/modal1/img-6.jpg" class="lazyload" alt="6">
                </a>
            </div>
            <div class="modal-content__cart-item">
                <a href="theme/assets/rediz/img/case/modal1/img-5.jpg" data-fancybox="gallery" data-caption="img-6">
                    <img data-src="theme/assets/rediz/img/case/modal1/img-5.jpg" class="lazyload" alt="5">
                </a>
            </div>
            <div class="modal-content__cart-item">
                <a href="theme/assets/rediz/img/case/modal1/img-6.jpg" data-fancybox="gallery" data-caption="img-6">
                    <img data-src="theme/assets/rediz/img/case/modal1/img-6.jpg" class="lazyload" alt="6">
                </a>
            </div>
            <div class="modal-content__cart-item">
                <a href="theme/assets/rediz/img/case/modal1/img-5.jpg" data-fancybox="gallery" data-caption="img-6">
                    <img data-src="theme/assets/rediz/img/case/modal1/img-5.jpg" class="lazyload" alt="5">
                </a>
            </div>
            <div class="modal-content__cart-item">
                <a href="theme/assets/rediz/img/case/modal1/img-6.jpg" data-fancybox="gallery" data-caption="img-6">
                    <img data-src="theme/assets/rediz/img/case/modal1/img-6.jpg" class="lazyload" alt="6">
                </a>
            </div>
            <div class="modal-content__cart-item">
                <a href="theme/assets/rediz/img/case/modal1/img-5.jpg" data-fancybox="gallery" data-caption="img-6">
                    <img data-src="theme/assets/rediz/img/case/modal1/img-5.jpg" class="lazyload" alt="5">
                </a>
            </div>
            <div class="modal-content__cart-item">
                <a href="theme/assets/rediz/img/case/modal1/img-6.jpg" data-fancybox="gallery" data-caption="img-6">
                    <img data-src="theme/assets/rediz/img/case/modal1/img-6.jpg" class="lazyload" alt="6">
                </a>
            </div>
        </div>
    '
    ])

   @include('partials.modal', [
    'id' => 'case3',
    'content' => '
        <div class="modal-content__cart-items">
            <div class="modal-content__cart-item">
                <a href="theme/assets/rediz/img/case/modal1/img-6.jpg" data-fancybox="gallery" data-caption="img-6">
                    <img data-src="theme/assets/rediz/img/case/modal1/img-6.jpg" class="lazyload" alt="6">
                </a>
            </div>
            <div class="modal-content__cart-item">
                <a href="theme/assets/rediz/img/case/modal1/img-5.jpg" data-fancybox="gallery" data-caption="img-6">
                    <img data-src="theme/assets/rediz/img/case/modal1/img-5.jpg" class="lazyload" alt="5">
                </a>
            </div>
            <div class="modal-content__cart-item">
                <a href="theme/assets/rediz/img/case/modal1/img-6.jpg" data-fancybox="gallery" data-caption="img-6">
                    <img data-src="theme/assets/rediz/img/case/modal1/img-6.jpg" class="lazyload" alt="6">
                </a>
            </div>
            <div class="modal-content__cart-item">
                <a href="theme/assets/rediz/img/case/modal1/img-5.jpg" data-fancybox="gallery" data-caption="img-6">
                    <img data-src="theme/assets/rediz/img/case/modal1/img-5.jpg" class="lazyload" alt="5">
                </a>
            </div>
            <div class="modal-content__cart-item">
                <a href="theme/assets/rediz/img/case/modal1/img-6.jpg" data-fancybox="gallery" data-caption="img-6">
                    <img data-src="theme/assets/rediz/img/case/modal1/img-6.jpg" class="lazyload" alt="6">
                </a>
            </div>
            <div class="modal-content__cart-item">
                <a href="theme/assets/rediz/img/case/modal1/img-5.jpg" data-fancybox="gallery" data-caption="img-6">
                    <img data-src="theme/assets/rediz/img/case/modal1/img-5.jpg" class="lazyload" alt="5">
                </a>
            </div>
            <div class="modal-content__cart-item">
                <a href="theme/assets/rediz/img/case/modal1/img-6.jpg" data-fancybox="gallery" data-caption="img-6">
                    <img data-src="theme/assets/rediz/img/case/modal1/img-6.jpg" class="lazyload" alt="6">
                </a>
            </div>
            <div class="modal-content__cart-item">
                <a href="theme/assets/rediz/img/case/modal1/img-5.jpg" data-fancybox="gallery" data-caption="img-6">
                    <img data-src="theme/assets/rediz/img/case/modal1/img-5.jpg" class="lazyload" alt="5">
                </a>
            </div>
            <div class="modal-content__cart-item">
                <a href="theme/assets/rediz/img/case/modal1/img-6.jpg" data-fancybox="gallery" data-caption="img-6">
                    <img data-src="theme/assets/rediz/img/case/modal1/img-6.jpg" class="lazyload" alt="6">
                </a>
            </div>
        </div>
    '
    ])

@endsection