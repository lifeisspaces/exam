<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: whitesmoke;
            color: red;
            text-align: center;
        }
        </style>
  
</head>
<body>
<div id="app">
    @include('layouts.nav') <!--//include resources/views/nav.blade.php as menu bar-->
    <div class="container">  <!-- //include welcome.blade.php @section('content') content value@endsection  -->
     @yield('content')
    </div>
</div>
      
<div class="footer">
   <div class="links"> 
            <a href="https://laravel.com/docs">Documentation</a> 
            <a href="https://docs.laravel-dojo.com/laravel/5.5">Laravel 道場</a> 
            <a href="https://campus-xoops.tn.edu.tw/modules/tad_book3/html_all.php?tbsn=34">Laravel 5.5 入門講義</a> 
            <a href="https://github.com/fukuball/Awesome-Laravel-Education/blob/master/langs/zh_TW.md">Laravel 新手村</a> 
            <a href="https://forge.laravel.com">Forge</a> 
            <a href="https://github.com/laravel/laravel">GitHub</a> 
            <a href="https://github.com/lifeisspaces/exam">原始檔</a> 
    </div> 
</div> 
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
