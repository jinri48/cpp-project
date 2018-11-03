
<!doctype html>
<html lang="en" dir="ltr">
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
    <!-- Generated: 2018-04-16 09:29:05 +0200 -->
    <title>Login</title> 
   
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
  </head>
  <body class="">
    <div class="page">
      <div class="page-single">
        <div class="container">
          <div class="row">
            <div class="col col-login mx-auto">
              <div class="text-center mb-6">
                {{-- <img src="/demo/brand/tabler.svg" class="h-6" alt=""> --}}
                <h1><strong>Captive Portal</strong></h1>
              </div>
              
              <div class="text-center text-muted">
                To continue. Please Login with
                {{-- Don't have account yet?  --}}
                {{-- <a href="./register.html">Sign up</a> --}}
              </div> 
              <div class="btn-list text-center pt-2">
                <a href="/login/facebook" class="btn btn-facebook"><i class="fa fa-facebook mr-2"></i>Facebook</a> 
                {{-- <a href="#" class="btn btn-twitter"><i class="fa fa-twitter mr-2"></i>Twitter</a>  --}}
                <a href="/login/google" class="btn btn-google"><i class="fa fa-google mr-2"></i>Google</a> 
                <a href="/login/github" class="btn btn-github"><i class="fa fa-github mr-2"></i>Github</a>  
              </div>
              <div>
                <div class="form-group w-50 mt-2"  style="margin: 0px auto 0px auto;">
                    <label class="custom-control custom-checkbox" > 
                        <input type="checkbox" class="custom-control-input" />
                        <span class="custom-control-label">Terms and Conditions</span>  
                    </label>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>