<head>
<meta charset="utf-8">
<title> @yield('title') | {{env('app_name')}}</title>
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
<link media="screen" href="{{asset('/site/css/style.css')}}" type="text/css" rel="stylesheet" />
<link media="screen" href="{{asset('/site/css/responsive.css')}}" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="{{asset('/site/js/jquery.js')}}"></script>

    @yield('css')
</head>
