<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>window.Laravel = {csrfToken: '{{ csrf_token() }}'} </script>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>{{config('app.name','MinaleL')}}</title>
    </head>
    <style>
        html, body {
        font-family: 'Roboto', sans-serif !important;
        font-weight: 400 !important;
          }
          body {
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif !important;
            font-size: 14px !important;
            line-height: 1.42857143 !important;
            color: #333 !important;
            background-color: #fff !important;
            display: block !important;
            margin: 0 !important;
}
        </style>
    <body id="body">
        <div id="app">
            <App></App>
        </div>
      
    </body>
    <script src="{{asset('js/app.js')}}"></script> 
</html>





