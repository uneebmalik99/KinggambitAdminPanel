<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.header')
</head>
<body class="g-sidenav-show bg-gray-100">
    @include('layout.sidebar')
    @include('layout.navbar')
    @yield('mainsection')
    @include('layout.footer')
</body>
</html>