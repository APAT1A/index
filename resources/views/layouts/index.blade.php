<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="title" content=""/>
    <meta name="description" content=""/>
    <meta name="author" content="" />
    <meta name="page-topic" content="" />
    <meta name="ROBOTS" content="Index, follow" />

    <title></title>

    <!-- Facebook -->
    <meta property="og:type" content="website"/>
    <meta property="og:url" content=""/>
    <meta property="og:title" content=""/>
    <meta property="og:description" content=""/>
    <meta property="og:image" content=""/>

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image"/>
    <meta property="twitter:url" content=""/>
    <meta property="twitter:title" content=""/>
    <meta property="twitter:description" content=""/>
    <meta property="twitter:image" content=""/>

    <link href="{{asset('css/app.css')}}" rel="stylesheet"/>

</head>
<body>
@yield('content')
<div class="content">



    @yield('footer')
</div> <!--main-->
<script src="{{asset('js/jqueryjs')}}"></script>
<script src="{{asset('js/app.js')}}"></script>

</body>

</html>
