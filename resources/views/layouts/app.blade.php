<!doctype html>
<html class="h-100" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" href="https://lovebility.ru/favicon.ico" type="image/x-icon">
    <meta name="yandex-verification" content="dd827889d55eef43" />
    <meta name="google-site-verification" content="9H05ZtJFHpZSg_jGuWrmaw3qG6tiSJFvNfIuTI5D42Q" />

    @isset($metaKeywords)
    <meta name="keywords" content="{{ $metaKeywords }}">
    @endisset
    @if(!empty($metaDescription))
    <meta name="description" content="{{ $metaDescription }}">
    @endif

    <script>window.yaContextCb=window.yaContextCb||[]</script>
    <script src="https://yandex.ru/ads/system/context.js" async></script>
  </head>

  <body class="bg-body h-100">
    <div id="app" class="h-100 container bg-white px-0 d-flex flex-column">
      <nav class="navbar navbar-expand-md lovebility-navbar navbar-light border-bottom-red px-3">
        <a class="navbar-brand" href="{{ url('/') }}">
        <img src="/images/home/logo.svg">
        </a>
      <div class="d-none d-md-block">
        <a class="text-decoration-none  pe-3" href="{{ route('tests.index') }}">
          Категория тестов
        </a>
        <a class="text-decoration-none" href="{{ route('articles') }}">
          Последние новости
        </a>
      </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            @guest
            @if (Route::has('login'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">Вход</a>
            </li>
            @endif
            @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">Регистрация</a>
            </li>
            @endif
            @else
            <div class="d-md-none">
              <div class="p-2">
                <div class="">
                  Меню
                  <div class="navbar-test-link">
                    <a class="" href="{{ route('tests.index') }}">
                      Все виды тестов
                    </a>
                  </div>
                  <div class="navbar-test-link">
                    <a href="{{ route('articles') }}">
                      Актуальные статьи
                    </a>
                  </div>
                  <div class="navbar-test-link">
                    <a href="{{ route('results.index') }}">
                      Результаты тестов
                    </a>
                  </div>
                  <div class="navbar-test-link mb-3">
                    <a href="{{ route('results.index') }}">
                      История тестов
                    </a>
                  </div>
                </div>
                <form action="{{ route('logout') }}" method="POST">
                  @csrf
                  <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16">
                        <path fill-rule="evenodd" d="M2 2.75C2 1.784 2.784 1 3.75 1h2.5a.75.75 0 010 1.5h-2.5a.25.25 0 00-.25.25v10.5c0 .138.112.25.25.25h2.5a.75.75 0 010 1.5h-2.5A1.75 1.75 0 012 13.25V2.75zm10.44 4.5H6.75a.75.75 0 000 1.5h5.69l-1.97 1.97a.75.75 0 101.06 1.06l3.25-3.25a.75.75 0 000-1.06l-3.25-3.25a.75.75 0 10-1.06 1.06l1.97 1.97z"></path>
                      </svg>
                      Выйти
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <li class="nav-item dropdown d-none d-md-block">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }}
              </a>
              <div class="dropdown-menu dropdown-menu-end lovebility-navbar-dropdown-menu" aria-labelledby="navbarDropdown">
                <div class="p-2">
                  <div class="">
                    <div class="navbar-test-link">
                      <a class="" href="{{ route('tests.index') }}">
                        Все виды тестов
                      </a>
                    </div>
                    <div class="navbar-test-link">
                      <a href="{{ route('articles') }}">
                        Актуальные статьи
                      </a>
                    </div>
                    <div class="navbar-test-link">
                      <a href="{{ route('results.index') }}">
                        Результаты тестов
                      </a>
                    </div>
                    <div class="navbar-test-link mb-3">
                      <a href="{{ route('results.index') }}">
                        История тестов
                      </a>
                    </div>
                  </div>
                  <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <div class="d-grid gap-2">
                      <button class="btn btn-primary" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16">
                          <path fill-rule="evenodd" d="M2 2.75C2 1.784 2.784 1 3.75 1h2.5a.75.75 0 010 1.5h-2.5a.25.25 0 00-.25.25v10.5c0 .138.112.25.25.25h2.5a.75.75 0 010 1.5h-2.5A1.75 1.75 0 012 13.25V2.75zm10.44 4.5H6.75a.75.75 0 000 1.5h5.69l-1.97 1.97a.75.75 0 101.06 1.06l3.25-3.25a.75.75 0 000-1.06l-3.25-3.25a.75.75 0 10-1.06 1.06l1.97 1.97z"></path>
                        </svg>
                        Выйти
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </li>
            @endguest
          </ul>
        </div>
      </nav>
      <main class="p-0 pb-5">
        @yield('content')
      </main>
      <footer class="lovebility-footer border-top-red mt-auto">
          <div class="container lovebility-footer-social text-center p-3 pb-0">
            <section class="pb-3">
              <a class="btn btn-floating m-1 vk" href="#!" role="button"><img class="w-100 h-100" src="/images/social/vk.svg"></a>
              <a class="btn btn-floating m-1 telegram" href="#!" role="button"><img class="w-100 h-100" src="/images/social/telegram.svg"></a>
              <a class="btn btn-floating m-1 instagram" href="#!" role="button"><img class="w-100 h-100" src="/images/social/instagram.svg"></a>
            </section>
          </div>
          <div class="text-center p-3 lovebility-footer-block text-white">
            © 2023 lovebility.ru
          </div>
        </footer>
    </div>
    <!-- Yandex.Metrika counter -->
  <script type="text/javascript" >
     (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
     m[i].l=1*new Date();
     for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
     k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
     (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

     ym(94509553, "init", {
          clickmap:true,
          trackLinks:true,
          accurateTrackBounce:true,
          webvisor:true
     });
  </script>
  <noscript><div><img src="https://mc.yandex.ru/watch/94509553" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
  <!-- /Yandex.Metrika counter -->
  </body>
</html>
