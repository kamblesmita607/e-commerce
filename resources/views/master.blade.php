@extends('layouts.app')
@section('content')
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <link href ="{{asset('/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <link href ="{{asset('/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href ="{{asset('/assets/css/app.css')}}" id="app-style" rel="stylesheet" type="text/css" />

        
    </head>
    <body data-sidebar="dark">
        <div id="layout-wrapper">
            @include('admin.sections.navigation')
            <div class="main-content">
                @yield('pass_data_main')
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                          @include('admin.sections.footer')
                        </div>
                    </div>
                </footer>
            </div>
            
        </div>
    <script src="{{asset('/assets/Parsley.js-2.9.2/dist/parsley.js')}}"></script>
        <script src="{{asset('/assets/Parsley.js-2.9.2/dist/parsley.min.js')}}"></script>
        <!-- <script type="text/javascript" src="{{asset('js/smita.js')}}"></script> -->

        <!-- <script type="text/javascript">
        $(function () {
          $('#demo-form').parsley().on('field:validated', function() {
            var ok = $('.parsley-error').length === 0;
            $('.bs-callout-info').toggleClass('hidden', !ok);
            $('.bs-callout-warning').toggleClass('hidden', ok);
          })
          .on('form:submit', function() {
            return false; // Don't submit form for this demo
          });
        });
        </script> -->
        
    </body>
</html>
@endsection
