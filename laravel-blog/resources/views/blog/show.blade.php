<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css">
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
                margin-top: 30px;
            }

            .title {
                font-size: 84px;
            }

            .title > a{
                color: #636b6f;
                text-decoration: none;
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

            .post{
                text-align: left;
                font-size: 14px;
                font-weight: 500;
            }

            .post > .post-title{
                font-size: 20px;
                color: #636b6f;
                text-decoration: none;
            }

            footer > p{
                margin: 50px 0 50px;
                font-size: 12px;
                font-weight: 600;
                color: #636b6f;
            }

            p > img{
                max-height: 100%;
                max-width:100%;
                height: inherit !important;
            }
        </style>
    </head>
    <body>
        <!-- <div class="flex-center position-ref full-height"> -->
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/admin') }}">Admin</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
            <div class="content">
                <div class="title m-b-md">
                    <a href="{{ url('/') }}">Laravel</a>
                </div>
                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="post">
                                <hr>
                                <div class="post-title">{{ $post->title }}</div>
                                <p><i class="fa fa-clock-o" aria-hidden="true"></i> 
                                Posted on {{ \Carbon\Carbon::createFromTimeStamp(strtotime($post->created_at))->toDayDateTimeString() }}</p>
                                {!! $post->content !!}                      
                            </div>
                        </div>                     
                    </div>
                </div>

                <footer>
                    <p class="copyright text-muted">Copyright &copy; Your Website 2017</p>
                </footer>

            </div>
        <!-- </div> -->

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
