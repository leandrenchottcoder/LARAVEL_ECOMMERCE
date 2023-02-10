<!DOCTYPE html>
<html html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta
      name="description"
      content="Omnifood is an AI-powered food subscription that will make you eat healthy again , 365 days per year. It's taliored to your personal tastes and nutritional needs."
    />

    <!-- Always include this line of code!!! -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <link rel="icon" href="{{asset('ecommerce/img/favicon.png')}}" />
    <link rel="{{asset('ecommerce/apple-touch-icon')}}" href="{{asset('ecommerce/img/apple-touch-icon.png')}}" />
    <link rel="manifest" href="{{asset('ecommerce/manifest.webmanifest')}}" />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="{{asset('ecommerce/css/general.css')}}" />
    <link rel="stylesheet" href="{{asset('ecommerce/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('ecommerce/css/queries.css')}}" />

    <script
      type="module"
      src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule=""
      src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"
    ></script>

    <script defer src="{{asset('ecommerce/js/script.js')}}"></script>

    <title>@yield('title') || {{config('app.name')}}</title>
  </head>

  <body>
    <header class="header">
      <a href="">
        <img class="logo" alt="Omnifood logo" src="{{asset('ecommerce/img/omnifood-logo.png')}}" />
      </a>
      <nav class="main-nav">
        <ul class="main-nav-list">
          <li>
            <a class="main-nav-link" href="{{route('ecommerce.index')}}">Accueil</a>
          </li>
          <li><a class="main-nav-link" href="{{route('ecommerce.repas')}}">Repas</a></li>
          <li>
            <a class="main-nav-link" href="{{route('ecommerce.about')}}">A propos</a>
          </li>
          <li><a class="main-nav-link" href="{{route('ecommerce.contact')}}">Nous contactez</a></li>
          <li>
            <a class="main-nav-link nav-cta" href="{{route('login')}}">Se connecter</a>
          </li>
          <li>
            <a class="btn btn-danger" href="{{route('bienvenu')}}">Quitter</a>
          </li>
        </ul>
      </nav>

      <button class="btn-mobile-nav">
        <ion-icon class="icon-mobile-nav" name="menu-outline"></ion-icon>
        <ion-icon class="icon-mobile-nav" name="close-outline"></ion-icon>
      </button>
    </header>

    @yield('content')

    @include('Ecommerce.partial.footer')


  </body>
</html>
