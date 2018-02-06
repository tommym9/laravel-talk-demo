<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Demo</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
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

        .wrapper {
            text-align: center;
            max-width: 80%;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .container {
            border: 1px solid grey;
            padding: 20px;
            margin-bottom: 20px;
        }

        .links ul,
        .links ul li {
            display: inline-block;
            list-style: none;
        }

        nav li {
            display: inline-block;
            list-style: none;
            margin-right: 10px;
        }

        .btn {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
        }

        .message {
            padding: 20px;
            background-color: #4CAF50; /* Green */
            color: white;
        }

    </style>
</head>
<body>
<div class="flex-center position-ref full-height">

    <div class="wrapper">
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="{{ route('posts.all') }}">All Posts</a></li>
            </ul>
        </nav>

        <div class="content">

            @if(session()->has('message'))
                <div class="message">
                    {!! session('message') !!}
                </div>
            @endif

            @yield('content')
        </div>
    </div>
</div>
</body>
</html>
