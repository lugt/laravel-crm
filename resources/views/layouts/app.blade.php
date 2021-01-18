@include('laracrud.layouts.app')
{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--    <head>--}}
{{--        <meta charset="utf-8">--}}
{{--        <meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
{{--        <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--        <meta name="csrf-token" content="{{ csrf_token() }}">--}}

{{--        <title>{{ config('app.name', 'DBCourse Final Project') }}</title>--}}

{{--        <!-- Fonts -->--}}
{{--        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">--}}

{{--        <!-- Styles -->--}}
{{--        <link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}

{{--        <!-- Styles -->--}}
{{--        <link href="{{ asset('laracrud/css/bootstrap.min.css') }}" rel="stylesheet">--}}
{{--        <link href="{{ asset('laracrud/css/font-awesome.min.css') }}" rel="stylesheet">--}}
{{--        @yield('styles')--}}
{{--        <script>--}}
{{--            window.Laravel = <?php echo json_encode([--}}
{{--                'csrfToken' => csrf_token(),--}}
{{--            ]); ?>--}}
{{--        </script>--}}

{{--        <!-- Scripts -->--}}
{{--        <script src="{{ asset('js/app.js') }}" defer></script>--}}
{{--        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">--}}
{{--        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">--}}
{{--        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>--}}
{{--        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>--}}
{{--        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>--}}
{{--    </head>--}}
{{--    <body class="font-sans antialiased">--}}
{{--        <div class="min-h-screen bg-gray-100">--}}
{{--            @include('layouts.navigation')--}}
{{--            <nav aria-label="breadcrumb">--}}
{{--                <ol class="breadcrumb">--}}
{{--                    @yield('breadcrumb', 'Default breadcrumb')--}}
{{--                </ol>--}}
{{--            </nav>--}}
{{--            <nav aria-label="breadcrumb" role="navigation" class="container">--}}
{{--                <ol class="breadcrumb mb-1" style="font-size: 14px;font-weight: 400;margin: auto">--}}
{{--                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>--}}
{{--                    @yield('breadcrumb')--}}
{{--                    @if(!empty(request('q')))--}}
{{--                        <li class="breadcrumb-item">--}}
{{--                            <span class="text-muted">Showing result with keyword <b>{{request('q')}}</b></span>--}}
{{--                            <button class="btn btn-none p-0 m-0" id="searchCleaner"><i--}}
{{--                                    class="text-danger fa fa-remove"></i>--}}
{{--                            </button>--}}
{{--                        </li>--}}
{{--                    @endif--}}
{{--                    <li class="pull-right">@yield('tools')</li>--}}
{{--                </ol>--}}
{{--            </nav>--}}
{{--            <!-- Page Heading -->--}}
{{--            <header class="bg-white shadow">--}}
{{--                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">--}}
{{--                    @yield('header', 'Default header')--}}
{{--                </div>--}}
{{--            </header>--}}
{{--            <!-- Page Content -->--}}
{{--            <main>--}}
{{--                @include('laracrud.includes.alerts')--}}
{{--                @yield('tools', 'Default tools')--}}
{{--                @yield('content', 'Default content')--}}
{{--            </main>--}}
{{--        </div>--}}

{{--        <!-- Scripts -->--}}

{{--        <script src="{{ asset('laracrud/js/jquery-3.2.1.min.js') }}" type="text/javascript"></script>--}}
{{--        <script src="{{ asset('laracrud/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>--}}

{{--        <script type="text/javascript">--}}
{{--            $("#searchCleaner").on('click', function (e) {--}}
{{--                e.preventDefault();--}}
{{--                $("input[name=q]").val('');--}}
{{--                $("#searchForm").submit();--}}
{{--            });--}}
{{--        </script>--}}

{{--        <script type="text/javascript">--}}
{{--            $(function () {--}}
{{--                $('[data-toggle="tooltip"]').tooltip()--}}
{{--            })--}}
{{--        </script>--}}

{{--        @yield('scripts')--}}
{{--    </body>--}}
{{--</html>--}}
{{--<body>--}}

