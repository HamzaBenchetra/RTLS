@extends('partials/master')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/remodal.css')}}">
    <link rel="stylesheet" href="{{asset('css/remodal-default-theme.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.css"/>
    <link rel="stylesheet" href="{{asset('stisla/datatables/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('stisla/datatables/css/datatables.min.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="{{asset('stisla/datatables/css/select.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    {{--@stack('css')--}}
    @yield('css')
@stop

@section('body')
        <div class="main-wrapper main-wrapper-1">
            @include('partials/navbar')
            @include('partials/sidebar')
                <div class="main-content">
                    <section class="section">
                        <div class="section-header">
                            <div class="w-100">
                                <div class="float-left">
                                    @yield('page_title')
                                </div>
                                <div class="float-right">
                                    @yield('action_btn')
                                </div>
                            </div>
                        </div>

                        <div class="section-body">
                            @yield('content')
                        </div>
                    </section>
                </div>
        </div>
    </div>


@stop

@section('master_js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script src="{{asset('js/remodal.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.colVis.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
    {{--@stack('js')--}}
    @yield('js')
    <script>
        (function(){


            @if($errors->any())
                @foreach($errors->all() as $error)
                    new Noty({
                        theme: 'sunset',
                        type: 'error',
                        layout: 'bottomRight',
                        timeout: 4000,
                        closeWith: ['click', 'button'],
                        text: '{{$error}}'
                    }).show();
                @endforeach
            @endif
            @if (session('success'))
                new Noty({
                    theme: 'sunset',
                    type: 'success',
                    layout: 'bottomRight',
                    timeout: 4000,
                    closeWith: ['click', 'button'],
                    text: '{{session('success')}}'
                }).show();

            @endif
        })();
    </script>
@stop