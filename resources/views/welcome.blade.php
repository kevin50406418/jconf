<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ config('app.name') }}</title>
<link href="/css/app.css" rel="stylesheet">
<style>
html, body {
    font-weight: 100;
    height: 100vh;
    margin: 0;
}
body {
    background-image: url('img/bg.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
    background-size: cover;
}
.full-height {
    height: 100vh;
}
.flex-center {
    align-items: center;
    display: flex;
    justify-content: center;
}
.position-ref {
    position: relative;
}
.top-right {
    position: absolute;
    right: 10px;
    top: 18px;
}
.content {
    text-align: center;
}
.title {
    font-size: 8rem;
    color: #fff;
    font-weight: bold;
}
.links > a {
    color: #fff;
    padding: 0 25px;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: .1rem;
    text-decoration: none;
}
.m-b-md {
    margin-bottom: 30px;
}
</style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            <a href="{{ url('/login') }}">{{ trans('user.login') }}</a>
            <a href="{{ url('/register') }}">{{ trans('user.register') }}</a>
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            {{ config('app.name') }}
        </div>
    </div>
</div>
</body>
</html>
