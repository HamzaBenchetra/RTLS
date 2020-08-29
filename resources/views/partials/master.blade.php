<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title')</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css" integrity="sha384-Mmxa0mLqhmOeaE8vgOSbKacftZcsNYDjQzuCOm6D02luYSzBG8vpaOykv9lFQ51Y" crossorigin="anonymous">
    <link href="{{asset('css/toastr.min.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('stisla/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('stisla/css/components.css')}}">
     @yield('styles')
</head>

<body>
        @yield('body')
        <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/jquery.nicescroll.min.js')}}"></script>
        <script src="{{asset('stisla/js/stisla.js')}}"></script>
        <script src="{{asset('js/toastr.min.js')}}"></script>
        <script src="{{asset('stisla/js/scripts.js')}}"></script>
        <script src="{{asset('stisla/js/custom.js')}}"></script>
        @yield('master_js')

      </body>
      </html>
