<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name','MyBlog') }}</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
            @include('inc.messages')
            @yield('content')
        </div>


        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script> 
            CKEDITOR.replace('article-ckeditor',{
                removePlugins: 'resize',
                resize_enabled: 'false'
            });
        </script>
    </body>
</html>
