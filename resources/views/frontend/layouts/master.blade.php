<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Visa Status Chek</title>

    {{-- <link rel="icon" type="image/png" href="{{asset(helper::getLatestsetting()->favicon ?? Null)}}"> --}}

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <link href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/plugins/revolution/css/settings.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/plugins/revolution/css/layers.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/plugins/revolution/css/navigation.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/responsive.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('frontend/assets/images/favicon.png') }}" type="image/x-icon">



    <style>
        @media (max-width: 720px) {
        .logo-view-phone {
          text-align: center!important;
          padding-bottom: 5px;
        } }
    </style>
    @stack('css')

</head>

<body >
    <div class="page-wrapper">
        {{-- <div class="preloader"></div> --}}
        @include('frontend.layouts.header')

        <main>
            @yield('content')
        </main>

        @include('frontend.layouts.footer')
    </div>




    @stack('js')



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('frontend/assets/js/jquery.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/plugins/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/plugins/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/plugins/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/plugins/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/plugins/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/plugins/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/plugins/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/plugins/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/plugins/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main-slider-script.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/wow.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/appear.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/owl.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/script.js') }}"></script>




</body>

</html>
