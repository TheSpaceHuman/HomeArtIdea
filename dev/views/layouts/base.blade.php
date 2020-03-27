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
    {{ $documentObject['noindex'] }}

    <base href="/"/>

    <!-- Icons font CSS-->
    <link href="theme/assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    {{--<link href="theme/assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">--}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="theme/assets/vendor/themify-font/themify-icons.css" rel="stylesheet" media="all">
    <!-- Base fonts of theme-->
    <link href="theme/assets/css/poppins-font.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->

    <!-- Bootstrap CSS-->
    <link href="theme/assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="theme/assets/vendor/animate.css/animate.min.css" rel="stylesheet" media="all">
    <link href="theme/assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <!--FancyBox-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <!--Slick-->
    <link rel="stylesheet" href="theme/assets/vendor/slick/slick.css" />

    <!-- Main CSS-->
    <link href="theme/assets/css/main.min.css" rel="stylesheet" media="all">
    <!-- My CSS-->
    <link href="theme/assets/rediz/css/main.css" rel="stylesheet">


    <!--Favicons-->
    <link rel="shortcut icon" href="theme/assets/rediz/img/logo_red.png">
	
	<!-- Jquery JS-->
    <script src="theme/assets/vendor/jquery/jquery.min.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144563549-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-144563549-1');
    </script>
</head>

<body class="animsition js-preloader" id="top-anchor">
    @include('partials.scrollTop')
    <div class="page-wrapper">
        <!-- HEADER-->
        <header class="header container-fluid">

            @yield('header')

        </header>
        <!-- END HEADER-->


        <!-- MAIN-->
        <main class="main">

            @yield('main')

            @yield('form')

        </main>
        <!-- END MAIN-->
        <!-- FOOTER-->
        <footer class="footer">

            @yield('footer')

        </footer>
        <!-- END FOOTER-->

        <!-- Modals-->
        @yield('modals')
        <!-- END Modals-->
    </div>

    <!-- Bootstrap JS-->
    <script src="theme/assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!--FancyBox-->
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <!--Slick-->
    <script src="theme/assets/vendor/slick/slick.min.js"></script>
    <!-- Main JS-->
    <script src="theme/assets/js/global.js"></script>
    <!-- Lazyload-->
    <script src="theme/assets/vendor/lazyload/lazysizes.min.js"></script>
    <!-- animatedModal-->
    <script src="theme/assets/vendor/animatedModal.js/animatedModal.min.js"></script>
    <!-- MyMain JS-->
    <script src="theme/assets/rediz/js/main.js"></script>
    <!-- App JS-->
    <script src="theme/assets/rediz/js/chunk-vendors.js"></script>
    <script src="theme/assets/rediz/js/app.js"></script>

</body>

</html>
<!-- end document-->