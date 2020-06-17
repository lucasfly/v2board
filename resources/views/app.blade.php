<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="/assets/user/antd.chunk.css?v={{$verison}}">
    <link rel="stylesheet" href="/assets/user/umi.css?v={{$verison}}">
    <link rel="stylesheet" href="/assets/user/custom.css?v={{$verison}}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
    <title>{{$title}}</title>
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700"> -->
    <script>window.routerBase = "/";</script>
    <script>
        window.settings = {
            title: '{{$title}}',
            theme: {
                sidebar: '{{$theme_sidebar}}',
                header: '{{$theme_header}}',
                color: '{{$theme_color}}',
            },
            verison: '{{$verison}}',
            background_url: '{{$backgroun_url}}',
            description: '{{$description}}'
        }
    </script>
</head>

<body>
<div id="root"></div>
<script src="/assets/user/vendors.async.js?v={{$verison}}"></script>
<script src="/assets/user/antd.async.js?v={{$verison}}"></script>
<script src="/assets/user/umi.js?v={{$verison}}"></script>
<script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.5.1/jquery.js"></script>
<!-- <script src="/assets/user/tip.js?v={{$verison}}"></script> -->
</body>

</html>
