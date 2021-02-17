<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> --}}
    <!-- Favicons
    ================================================== -->
{{-- <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png"> --}}
    
    
   
    <title>{{config('app.name','BHILL')}}</title>
    </head>
        <body  id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
            @include('includes.nav')
            @yield('content')
            <script src="{{asset('js/app.js')}}"></script>
            <script src="{{asset('js/SmoothScroll.js')}}"></script>
            <script src="{{asset('js/nivo-lightbox.js')}}"></script>
            <script src="{{asset('js/jquery.isotope.js')}}"></script>
            <script src="{{asset('js/owl.carousel.js')}}"></script>
            <script src="{{asset('js/main.js')}}"></script>
            
            
    </body>
</html>





