<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />


    @include('includes.style')
    @stack('prepend-style')
    @stack('addon-style')

    <title>@yield('title')</title>
</head>

<body>
    @include('includes.navbar-alternate')

    @yield('content')


    @include('includes.script')

    @stack('prepend-script')

    @stack('addon-script')
</body>

</html>
