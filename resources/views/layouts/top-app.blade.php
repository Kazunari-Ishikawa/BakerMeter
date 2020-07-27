<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  @yield('title')
  @yield('description')
  @yield('keywords')

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Oswald:700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
  <div id="app">
    <v-app>

      <!-- Header -->
      @include('components.top-header')

      <main id="main" class="l-main">

        <!-- Flash Message -->
        @if (session('flash_message'))
        <div class="c-flash">
          <p>{{ session('flash_message') }}</p>
        </div>
        @endif

        @yield('content')
      </main>

      <!-- Footer -->
      @include('components.footer')

    </v-app>
  </div>
</body>

</html>
