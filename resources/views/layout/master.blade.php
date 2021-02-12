<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
</head>
<body>
<div class="wrapper-global">
    @include('includes.navigation')
    <div class="wrapper-content">
        @yield('content')
    </div>
    @include('includes.footer')
</div>

@include('includes.scripts')
</body>
</html>
