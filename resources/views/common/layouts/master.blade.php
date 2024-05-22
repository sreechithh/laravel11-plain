<?php
$version = 10;
?>

    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield("title")</title>
    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
          type="text/css">
    <link href="{{asset('assets/backend/global_assets/css/icons/icomoon/styles.min.css') }}"
          rel="stylesheet" type="text/css">
    <link href="{{asset('assets/backend/css/bootstrap.min.css') }}"
          rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
    <link href="{{asset('assets/backend/css/combined.min.css') }}"
          rel="stylesheet" type="text/css">
    <link href="{{asset('assets/backend/css/layout.min.css') }}" rel="stylesheet"
          type="text/css">
    <link href="{{asset('assets/backend/css/components.min.css') }}"
          rel="stylesheet" type="text/css">
    <link href="{{asset('assets/backend/css/colors.min.css') }}" rel="stylesheet"
          type="text/css">
    <link href="{{asset('assets/backend/global_assets/css/extras/animate.min.css') }}"
          rel="stylesheet" type="text/css">
    <link href="{{asset('assets/backend/css/backend-custom.css') }}"
          rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
          integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="{{ asset('assets/backend/sweetalert/sweetalert2.min.css') }}">
    {{--    @livewireScripts--}}


    <!-- Core JS files -->
    <script src="{{asset('assets/backend/sweetalert/sweetalert2.all.min.js')}}"></script>
    <script type="text/javascript"
            src="{{asset('assets/backend/global_assets/js/main/jquery.min.js')}}">
    </script>
    <script type="text/javascript"
            src="{{asset('assets/backend/global_assets/js/main/bootstrap.bundle.min.js')}}">
    </script>
    <script type="text/javascript"
            src="{{asset('assets/backend/global_assets/js/plugins/loaders/blockui.min.js')}}">
    </script>
    <script type="text/javascript"
            src="{{asset('assets/backend/global_assets/js/plugins/ui/slinky.min.js')}}">
    </script>
    <script type="text/javascript"
            src="{{asset('assets/backend/js/jquery.query.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.10.2/Sortable.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-sortablejs@latest/jquery-sortable.js')}}"></script>

    <script type="text/javascript"
            src="{{asset('assets/backend/global_assets/js/plugins/ui/sticky.min.js')}}">
    </script>
    <script type="text/javascript"
            src="{{asset('assets/backend/global_assets/js/plugins/buttons/spin.min.js')}}">
    </script>
    <script type="text/javascript"
            src="{{asset('assets/backend/global_assets/js/plugins/buttons/ladda.min.js')}}">
    </script>
    <script type="text/javascript"
            src="{{asset('assets/backend/global_assets/js/plugins/notifications/jgrowl.min.js')}}">
    </script>
    <script type="text/javascript"
            src="{{asset('assets/backend/global_assets/js/plugins/forms/selects/select2.min.js')}}">
    </script>
    <script type="text/javascript"
            src="{{asset('assets/backend/global_assets/js/plugins/forms/styling/uniform.min.js')}}">
    </script>
    <script type="text/javascript"
            src="{{asset('assets/backend/global_assets/js/plugins/forms/styling/switchery.min.js')}}">
    </script>
    <script type="text/javascript"
            src="{{asset('assets/backend/global_assets/js/plugins/pickers/color/spectrum.js')}}">
    </script>
    <script type="text/javascript"
            src="{{asset('assets/backend/global_assets/js/plugins/editors/summernote/summernote.js')}}">
    </script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js')}}"></script>
    <script type="text/javascript"
            src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js')}}"></script>
    <script type="text/javascript"
            src="{{asset('assets/backend/global_assets/js/plugins/uploaders/dropzone.min.js')}}">
    </script>
    <script type="text/javascript"
            src="{{asset('assets/backend/global_assets/js/plugins/visualization/echarts/echarts.js')}}">
    </script>
    <script type="text/javascript"
            src="{{asset('assets/backend/js/app.js')}}">
    </script>
    <script type="text/javascript"
            src="{{asset('assets/backend/js/navbar-sticky.js')}}"></script>
    <script type="text/javascript"
            src="{{asset('assets/backend/js/printThis.js')}}"></script>
    <script type="text/javascript"
            src="{{asset('assets/backend/js/jquery-alphanum.js')}}"></script>
    <script type="text/javascript"
            src="{{asset('assets/backend/global_assets/js/plugins/editors/ace/ace.js')}}">
    </script>


    <!-- Load GMAPS Only when needed -->
    <script
        src="https://maps.googleapis.com/maps/api/js?key={{ config('settings.googleApiKeyIP') }}&libraries=places">
    </script>
    <script type="text/javascript"
            src="{{asset('assets/backend/js/google-maps.js')}}"></script>
    <script>
        $(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });
    </script>

    <!-- /theme JS files -->
    <link rel="manifest" href="{{ URL::asset('backend-manifest.json') }}">

    @stack('head')

    {{--    @livewireStyles--}}

</head>

<body>

@stack('beginBody')

@if(Auth::user())
    @include('common.layouts.topNav')
    <div class="navbar navbar-expand-md navbar-light navbar-sticky">
        <div class="container">
            <div class="text-center d-md-none w-100">
                <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse"
                        data-target="#navbar-navigation">
                    <i class="icon-list mr-2"></i>
                    Menu
                </button>
            </div>
            <div class="navbar-collapse collapse" id="navbar-navigation">
                <ul class="navbar-nav">
                    @yield("navbar")
                </ul>
            </div>
        </div>
    </div>
@endif


<div class="page-content container pt-0">
    <div class="content-wrapper">
        @yield("content")
    </div>
</div>


@include('common.layouts.notification')

<script type="text/javascript" src="{{asset('assets/backend/js/custom.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/backend/js/common.js')}}"></script>

@stack('endBody')

@stack('scripts')

</body>

</html>
