<!DOCTYPE html>
<html lang="id">

<head>
  @include('client.plugins._top')
</head>

<body data-mobile-nav-trigger-alignment="right" data-mobile-nav-style="modern" data-mobile-nav-bg-color="#252840">
  <header>
    @include('client.components._nav')
  </header>

  @yield('content-client')

  @include('client.components._footer')
  @include('client.components._scroll')
  @include('client.plugins._bottom')
</body>

</html>
