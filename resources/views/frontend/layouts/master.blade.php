<!DOCTYPE HTML>
<html lang="en">
<head>
    @include('frontend.layouts.head')
</head>
<body>

    @include('frontend.layouts.notification')
    <!-- Header -->
    @include('frontend.layouts.header')
    <!-- Main-Content -->
    @yield('main-content')
    <!-- Footer -->
    @include('frontend.layouts.footer')

</body>
</html>