<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - {!! config('app.name') !!}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="{!! asset(mix('static/css/bootstarp.css')) !!}" >
    <link rel="stylesheet" href="{!! asset('static/css/comm.css') !!}">
    <link rel="stylesheet" href="{!! asset('static/css/login.css') !!}">
    @yield('styles')
</head>
<body>
<!-- 导航栏 -->
<div class="nav">
    <div class="container">
        <a class="logo" href="{{url('/')}}">
            <img src="{!! asset('static/images/logo.png') !!}">
        </a>
        <p class="title hidden-xs">{!! config('app.name') !!}</p>
        @yield('login_right')
    </div>
</div>
{!! Facades\App\Widgets\Alert::render() !!}
@yield('content')
<!-- 底部 -->
<div class="footer_nav">E8net</div>
</body>
</html>
