<html lang="en" ng-app="App">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <title>{{ app('translator')->trans('language.title') }}</title>

    {{--<link href="https://fonts.useso.com/css?family=Roboto:300,400,500,700,400italic" rel="stylesheet">--}}

    <link href="/css/toolkit-inverse.css" rel="stylesheet">

    <link href="/css/application.css" rel="stylesheet">

    <style>
        /* note: this is a hack for ios iframe for bootstrap themes shopify page */
        /* this chunk of css is not part of the toolkit :) */
        body {
            width: 1px;
            min-width: 100%;
            *width: 100%;
        }
        .center{
            margin:0 auto 0 auto;
        }
        .w-300{
            width:300px;
        }
        .fr{
            float:right;
        }
        .fl{
            float:left;
        }
        .f14{
            font-size:14px;
        }
        .text-center {
            text-align: center;
        }
        .alert-info {
            font-size: 13px;
            color: rgb(190, 58, 49);
        }
        .bottom {
            margin: auto;
            /*position: absolute;*/
            left: 0; bottom: 20px; right: 0;
        }
        .bottom-link {
            text-align: center;
            color:#434857;
        }
        .bottom-link a {
            color:#434857;
        }
        .height-100p {
          height: 100%;
        }
    </style>
    @yield('header')
</head>


<body>
<div class="bw height-100p">
    <div class="fu">
        @yield('content')
    </div>
</div>

<script src="/js/jquery.min.js"></script>
<script src="/js/angular.min.js"></script>
<script src="/js/angular-file-upload.min.js"></script>
<script src="/js/ACommon.js"></script>
<script src="/js/App.js"></script>
</body>
<div class="bottom">
    <div class="bottom-link">
        Source Code <a href="http://github.com/HexPang/Private-Cloud-API" target="_blank">http://github.com/HexPang/Private-Cloud-API</a>
    </div>
</div>
</html>
