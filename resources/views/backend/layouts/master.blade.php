<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <title>{{ helper::metaInformation()->title }}</title> --}}

    {{-- <link rel="icon" type="image/png" href="{{ asset(helper::getLatestsetting()->favicon ?? Null) }}"> --}}

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom CSS -->
    <link rel="stylesheet"
        href="{{asset('backend/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet"
        href="{{asset('backend/assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/images/favicon.ico')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />





    @stack('css')

</head>

<body>
    <div class="container-scroller">

        <div class="container-fluid page-body-wrapper">

            {{-- main content --}}
            @include('backend.partials._navbar')

            <div class="container-fluid page-body-wrapper">
                @include('backend.partials._sidebar')


                <div class="main-panel">

                    @yield('content')

                    @include('backend.partials._footer')
                </div>


            </div>

            {{-- footer include --}}

        </div>



    </div>
    @stack('js')





    <script src="{{asset('backend/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('backend/assets/js/jquery.cookie.js')}}"></script>
    <script src="{{asset('backend/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('backend/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('backend/assets/js/misc.js')}}"></script>
    <script src="{{asset('backend/assets/js/dashboard.js')}}"></script>
    <script src="{{asset('backend/assets/js/todolist.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.2/classic/ckeditor.js"></script>


    <script>
        @if(Session::has('message'))
            var type = "{{Session::get('alert-type','info')}}"
            switch (type) {
            case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;
            case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;
            case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;
            case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
            }
        @endif
    </script>

    <script>
        var allEditors = document.querySelectorAll('.editor');
        for (var i = 0; i < allEditors.length; ++i) {
            ClassicEditor.create(allEditors[i])
                .then(editor => {
                    editor.ui.view.editable.element.style.height = '50vh';
                })
                .catch(error => {
                    console.error(error);
                });
        }

    </script>

    <script>
        $("#event_image").hide();
        $("#customFile").change(function () {
            $("#event_image").show();
        });

    </script>
    <script>
        $("#event_front_image_preview").hide();
        $("#blog_view_image").hide();
        $("#image").hide();
        $("#customFile").change(function () {
            $("#event_front_image_preview").show();
            $("#blog_view_image").show();
            $("#image").show();
        });

    </script>



</body>

</html>
