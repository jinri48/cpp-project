<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
    <title>Captive Portal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext"> --}}
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <script src="/js/require.min.js"></script>
    <script>
      requirejs.config({
          baseUrl: '.'
      });
    </script>
    <!-- Dashboard Core -->
    <link href="/css/dashboard.css" rel="stylesheet" />
    <script src="/js/dashboard.js"></script>
    <!-- c3.js Charts Plugin -->
    <link href="/plugins/charts-c3/plugin.css" rel="stylesheet" />
    <script src="/plugins/charts-c3/plugin.js"></script>
    <!-- Google Maps Plugin -->
    <link href="/plugins/maps-google/plugin.css" rel="stylesheet" />
    <script src="/plugins/maps-google/plugin.js"></script>
    <!-- Input Mask Plugin -->
    <script src="/plugins/input-mask/plugin.js"></script>
    <style>
        body{ 
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        .box {
            border: 1px solid gray;
        }
        .box-main {
            border: 1px solid red;
        }

        #top-nav{
            background-color: #393E46;
            color: #fff4e0;
            font-size: .8em;
        }
        #menu-nav{
            background-color: #fc3c3c; 
            font-size: .8em; 
        }
        #login{ 
            text-decoration: none;
            color: #fff4e0;
            /* letter-spacing: 1px;  */
        }
        #login:hover{
            border-bottom: 1px solid #fff4e0;
        }

        .nav-menu > li {
            display: inline; 
            margin-right: 5px;
        }
        .nav-menu > li > a {
            text-decoration: none;
            color: #fff4e0;
            font-size: 1.3em;
            font-weight: 600;
        }
        .nav-menu > li > a:hover { 
            color: #fff4e0;
            border-bottom: 2px solid #fff4e0;
        }
    </style>
</head>
<body class="">
    <div class="page">
        <div class="page-main"> 
            <div id="top-nav" class="container-fluid p-1 ">
                <div class="container">
                    <div class="d-flex ">
                        <div class="col-md-6 col-lg-6">
                            @auth
                               Welcome! <strong>{{ \Auth::user()->name }}</strong>
                            @else
                               {{-- Please to login... --}}
                            @endauth  
                        </div>
                        <div class="col-md-6 col-lg-6 text-right">
                            <div> 
                                @auth
                                wallet balance: <strong> 0.00 </strong>     -     
                                    <a href="/logout" id="login">LOGOUT</a> 
                                @else
                                    <a href="/login" id="login">LOGIN | REGISTER</a> 
                                @endauth 
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div id="menu-nav" class="container-fuild ">
                <div class="container text-center"> 
                        <ul class="nav-menu p-1">
                            <li><a href="/#">Home</a></li>
                            <li><a href="/#">Products</a></li>
                            <li><a href="/#">Services</a></li>
                        </ul> 
                </div>
            </div>
            {{-- PROMO'S --}}

            {{-- END OF PROMO'S --}}
        </div>
    </div>
</body>
</html>