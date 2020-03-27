<!DOCTYPE html>
<html lang="ru">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@evoParser('[*desc*]')">
    <meta name="yandex-verification" content="bcf5455e8d713048" />
    <meta name="keywords" content="@evoParser('[*keyw*]')">
    <meta name="theme-color" content="#8f0e0f">
    <meta name="cmsmagazine" content="ece05daf3992970d8039bf148d91e9ac" />
    <!-- Title Page-->
    <title>@evoParser('[*titl*]')</title>
    {{--{{ $modx->getConfig('site_url') }}--}}
    <base href="/"/>

    <!-- Icons font CSS-->
    <link href="theme/assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="theme/assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="theme/assets/vendor/themify-font/themify-icons.css" rel="stylesheet" media="all">
    <!-- Base fonts of theme-->
    <link href="theme/assets/css/poppins-font.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->

    <!-- Bootstrap CSS-->
    <link href="theme/assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    {{--<link href="assets/templates/prod.min.css" rel="stylesheet" media="all">--}}

    <!-- Vendor CSS-->
    <link href="theme/assets/vendor/animate.css/animate.min.css" rel="stylesheet" media="all">
    <link href="theme/assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="theme/assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="theme/assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="theme/assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="theme/assets/vendor/revolution/css/layers.css" rel="stylesheet" />
    <link href="theme/assets/vendor/revolution/css/navigation.css" rel="stylesheet" />
    <link href="theme/assets/vendor/revolution/css/settings.css" rel="stylesheet" />

    <!-- Main CSS-->
    <link href="theme/assets/css/main.min.css" rel="stylesheet" media="all">
    <link href="theme/assets/rediz/css/main.css" rel="stylesheet">

    <!--Favicons-->
    <link rel="shortcut icon" href="theme/assets/rediz/img/logo_red.png">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144563549-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-144563549-1');
    </script>
</head>

<body class="animsition js-preloader" style="overflow: hidden;">
<div class="page-wrapper">
    <!-- HEADER-->
    <header id="header">
        <div class="header-5 d-lg-block">
            <div class="header__bar">
                <div class="wrap wrap--w1790">
                    <div class="container-fluid">
                        <div class="header__content">
                            <div class="logo">
                                <a href="{{ $modx->makeUrl('1') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" viewBox="8.7 8.7 50 50">
                                        <path d="M47.8 44.6l10.8-10.8-25-25-17.7 17.8 3.9 3.9 13.9-13.9L51 33.9l-3.3 3.3-14-14.1L23 33.8l14 13.9-3.3 3.3-21.1-21.1-3.9 3.9 25 25L44.5 48l-7.2-7.2 3.3-3.3 7.2 7.1zm-14.1-7.5l-3.3-3.3 3.3-3.3 3.3 3.3-3.3 3.3z" fill="#fff"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="header-content-center">
                                <div class="container">
                                    <div class="row no-gutters">
                                        <div class="header-contact-flex">
                                            <a class="header-contact" href="tel:{{ $modx->getConfig('client_phone') }}"><i class="zmdi zmdi-phone"></i> @evoParser('[[phone_format? &phone=[(client_phone)] ]]')</a>
                                        </div>
                                        <div class="col-lg-12 header-contact-menu">
                                           <nav class="header-content-center_main-menu">
                                                    {{--{!! $modx->runSnippet('DLMenu',[
                                                        'parents' => '0',
                                                        'outerTpl' => '@CODE:<ul class="snip1135">[+wrap+]</ul>',
                                                        'rowTpl' => '@CODE:<li[+classes+]><a href="[+url+]" data-hover="[+title+]">[+title+]</a></li>',
                                                        'maxDepth' => '1',
                                                        'showParent' => '1',
                                                        'hereClass' => 'current'
                                                    ]) !!}--}}
                                               {!! $modx->runSnippet('DLMenu', [
                                                    'parents' => '0',
                                                    'outerTpl' => '@CODE:<ul class="page-menu_list snip1135 col index-menu--custom">[+wrap+]</ul>',
                                                    'rowTpl' => '@CODE:<li[+classes+]><a href="[+url+]" data-hover="[+title+]">[+title+]</a></li>',
                                                    'parentRowTpl' => '@CODE:<li[+classes+]><a href="#"  data-hover="[+title+]">[+title+]</a>[+wrap+]</li>',
                                                    'parentRowHereTpl' => '@CODE:<li[+classes+]><a href="[+url+]"  data-hover="[+title+]">[+title+]</a>[+wrap+]</li>',
                                                    'parentRowActiveTpl' => '@CODE:<li[+classes+]><a href="[+url+]"  data-hover="[+title+]">[+title+]</a>[+wrap+]</li>',
                                                    'innerTpl' => '@CODE:<ul class="page-menu_item__submenu-items animated bounceInUp">[+wrap+]</ul>',
                                                    'innerRowTpl' => '@CODE:<li class="page-menu_item__submenu-items_item"><a href="[+url+]" class="page-menu_item__submenu-items_item_link">[+title+]</a></li>',
                                                    'maxDepth' => '2',
                                                    'showParent' => '1',
                                                    'hereClass' => 'current',
                                                    'rowClass' => 'page-menu_item',
                                                    'firstClass' => '',
                                                    'lastClass' => '',
                                                    'levelClass ' => '',
                                                    'oddClass' => '',
                                                    'evenClass' => '',
                                                ]) !!}

                                           </nav>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header__content-right">
                                <button class="hamburger hamburger--slider float-right hamburger--sm js-menusb-btn" type="button">
                                        <span class="hamburger-box">
                                            <span class="hamburger-inner"></span>
                                        </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('partials.mobile-menu')

        <div id="menu-sidebar-overlay"></div>
    </header>
    <!-- END HEADER-->

    <!-- MAIN-->
    <main id="main">
        <!-- SLIDER-->
        <section class="section">

            <div class="page-info-2">
                <div class="wrap wrap--w1790">
                    <div class="container-fluid">
                        <div class="page-info__inner">
                            <ul class="list-social list-social-2 list-social--ver">

                                <li class="list-social__item">
                                    <a class="ic-fb" target="_blank" href="{{ $modx->getConfig('client_facebook') }}">
                                        <i class="zmdi zmdi-facebook"></i>
                                    </a>
                                </li>
                                <!--.-->
                                <li class="list-social__item">
                                    <a class="ic-insta" target="_blank" href="{{ $modx->getConfig('client_instagram') }}">
                                        <i class="zmdi zmdi-instagram"></i>
                                    </a>
                                </li>

                                <li class="list-social__item">
                                    <a class="ic-fb" target="_blank" href="{{ $modx->getConfig('client_vk') }}">
                                        <i class="zmdi zmdi-vk"></i>
                                    </a>
                                </li>

                                <li class="list-social__item sitedo-logo">
                                    <a href="https://sitedo.ru/"><img class="bd-icon__img" title="Студия разработчик" src="/theme/assets/images/icon/BD-logo-only.svg" alt="Sitedo.ru"></a>
                                </li>
                            </ul>
                            <div class="copyright">{{ $modx->getConfig('client_copyright') }}</div>
                        </div>
                    </div>
                </div>
            </div>

            @yield('rev-slider')

        </section>
        <!-- END SLIDER-->
    </main>
    <!-- END MAIN-->
</div>

<!-- Jquery JS-->
<script src="theme/assets/vendor/jquery/jquery.min.js"></script>
<!-- Bootstrap JS-->
<script src="theme/assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS-->
<script src="theme/assets/vendor/animsition/animsition.min.js"></script>
<script src="theme/assets/vendor/wow/wow.min.js"></script>
<script src="theme/assets/vendor/matchHeight/jquery.matchHeight-min.js"></script>
<script type="text/javascript" src="theme/assets/vendor/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="theme/assets/vendor/revolution/js/jquery.themepunch.revolution.min.js"></script>

<script type="text/javascript" src="theme/assets/js/config-revolution.js"></script>

<!-- Main JS-->
<script src="theme/assets/js/global.js"></script>

</body>

</html>
<!-- end document-->