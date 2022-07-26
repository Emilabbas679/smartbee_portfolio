<!DOCTYPE html>
<html>
@include('site.parts.head')

<body class="homepage">
<div class="x-site">
    @include('site.parts.header')

    @yield('content')

    @include('site.parts.footer')
</div>

@include('site.parts.footerjs')
</body>
</html>
