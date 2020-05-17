<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Sobre nosotros - League Of Stats</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link rel="icon" type="image/svg" href="{{ asset('img/leagueoflegends_94793.svg') }}" sizes="32x32">
        <!-- FontAwesome CSS -->
        <link rel="stylesheet" href="{{ asset('css/all.css') }}">
        <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- CSS File -->
        <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    </head>

    <!-- Cuerpo de página -->
    <body>
    <!-- Barra de navegación -->
    <header>
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('img/leagueoflegends_94793.svg') }}" width="50" height="50" class="d-inline-block align-top" alt="Logo de League of Stats. Barra de navegación">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">INICIO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">CAMPEONES</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="menuDesplegableDescubrir" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                DESCUBRIR
              </a>
              <div class="dropdown-menu dropdown-menu-bottom" aria-labelledby="menuDesplegableDescubrir">
                <a class="dropdown-item" href="#">ESTADÍSTICAS</a>
                <a class="dropdown-item" href="#">ROTACIÓN GRATUITA SEMANAL</a>
                <a class="dropdown-item" href="#">ESTADO DEL SERVIDOR</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">CONTACTO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">SOBRE NOSOTROS</a>
            </li>
          </ul>
          <div class="ml-auto">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">INICIO</a>
                    @else
                        <button class="btn my-2 text-light botonInicioSesion"><a href="{{ route('login') }}">INICIA SESIÓN</a></button>
                        @if (Route::has('register'))
                        <button class="botonRegistro"><a href="{{ route('register') }}">REGÍSTRATE</a></button>
                        @endif
                    @endauth
                </div>
            @endif
          </div>
        </div>
      </nav>
    </header>

    <!-- Sección de los Introducción a Sobre Nosotros -->
    <section id="introAbout">
      <div id="titulos">
        <h1>SOBRE NOSOTROS</h1>
      </div>
    </section>

    <!-- Contenedor con el mensaje de la página -->
    <div id="textoNosotros">
      <p>¡Hola a todos! Somos un grupo de desarrolladores de aplicaciones web del CIFP César Manrique, nuestro objetivo con esta página es tener un buen proyecto final de
        Ciclo Superior. Gracias a los conocimientos dados durante este curso 2019/20 hemos sabido aprender todo tipo de conocimientos necesarios para poner en
        funcionamiento una página web.<br><br>

        Entre todas las herramientas que hemos trabajado este año, muchas de ellas han sido aplicadas en este proyecto que está elaborado con un Front-end compuesto
        de JavaScript, jQuery, AJAX, Bootstrap 4, CSS3, HTML5, SASS, React y demás tecnologías que nos han ayudado a implementar una buena página de estadísticas
        de League Of Legends.<br><br>

        También cabe destacar que la parte trasera de la página, el Back-end también está elaborada con tecnologías dadas este curso que nos han ayudado a ampliar
        nuestro conocmientos y abrirnos a un mundo de programación que aún está por explotar. Algunas de las herramientas son Laravel, Control de versiones con Git y
        PHP.<br><br>

        Esperemos que te guste nuestra página y que la recomiendes a todos aquellos que les aficione este MOBA de RIOT GAMES.
        ¡Un saludo invocador!</p>
    </div>

    <!-- Contenedor con el mensaje de la página -->
    <div id="tecnoFront">
      <h1>Tecnologías del Front-end</h1>
      <div id="front">
        <a href="https://developer.mozilla.org/es/docs/HTML/HTML5" data-toggle="tooltip" data-placement="bottom" title="HTML5">
          <img src="{{ asset('img/HTML5.jpg') }}" alt="Icono de HTML5. Página Sobre Nosotros">
        </a>
        <a href="https://developer.mozilla.org/es/docs/Archive/CSS3" data-toggle="tooltip" data-placement="bottom" title="CSS3">
          <img src="{{ asset('img/CSS3.jpg') }}" alt="Icono de CSS3. Página Sobre Nosotros">
        </a>
        <a href="https://getbootstrap.com/" data-toggle="tooltip" data-placement="bottom" title="Bootstrap">
          <img src="{{ asset('img/Bootstrap.jpg') }}" alt="Icono de Bootstrap. Página Sobre Nosotros">
        </a>
        <a href="https://sass-lang.com/" data-toggle="tooltip" data-placement="bottom" title="SASS">
          <img src="{{ asset('img/Sass.jpg') }}" alt="Icono de SASS. Página Sobre Nosotros">
        </a>
        <a href="https://developer.mozilla.org/es/docs/Web/JavaScript" data-toggle="tooltip" data-placement="bottom" title="JavaScript">
          <img src="{{ asset('img/JavaScript.jpg') }}" alt="Icono de JavaScript. Página Sobre Nosotros">
        </a>
        <a href="https://jquery.com/" data-toggle="tooltip" data-placement="bottom" title="jQuery">
          <img src="{{ asset('img/jQuery.jpg') }}" alt="Icono de jQuery. Página Sobre Nosotros">
        </a>
        <a href="https://es.wikipedia.org/wiki/AJAX" data-toggle="tooltip" data-placement="bottom" title="AJAX">
          <img src="{{ asset('img/AJAX.jpg') }}" alt="Icono de AJAX. Página Sobre Nosotros">
        </a>
      </div>
    </div>
    <div id="tecnoBack">
      <h1>Tecnologías del Back-end</h1>
      <div id="back">
        <a href="https://laravel.com/" data-toggle="tooltip" data-placement="bottom" title="Laravel">
          <img src="{{ asset('img/Laravel.jpg') }}" title="Laravel" alt="Icono de Laravel. Página Sobre Nosotros">
        </a>
        <a href="https://www.php.net/" data-toggle="tooltip" data-placement="bottom" title="PHP">
          <img src="{{ asset('img/PHP.jpg') }}" alt="Icono de PHP. Página Sobre Nosotros">
        </a>
        <a href="https://www.mysql.com/" data-toggle="tooltip" data-placement="bottom" title="MySQL">
          <img src="{{ asset('img/MySQL.jpg') }}" alt="Icono de MySQL. Página Sobre Nosotros">
        </a>
        <a href="https://www.phpmyadmin.net/" data-toggle="tooltip" data-placement="bottom" title="phpMyAdmin">
          <img src="{{ asset('img/phpMyAdmin.jpg') }}" alt="Icono de phpMyAdmin. Página Sobre Nosotros">
        </a>
        <a href="https://www.gitkraken.com/" data-toggle="tooltip" data-placement="bottom" title="GitKraken">
          <img src="{{ asset('img/GitKraken.jpg') }}" alt="Icono de phpMyAdmin. Página Sobre Nosotros">
        </a>
      </div>
    </div>
    <div id="tecnoBrowsers">
      <h1>Navegadores compatibles</h1>
      <div id="browser">
        <a href="https://www.google.com/intl/es_es/chrome/" data-toggle="tooltip" data-placement="bottom" title="Google Chrome">
          <img src="{{ asset('img/Chrome.jpg') }}" alt="Icono de Google Chrome. Página Sobre Nosotros">
        </a>
        <a href="https://www.mozilla.org/es-ES/firefox/new/" data-toggle="tooltip" data-placement="bottom" title="Mozilla Firefox">
          <img src="{{ asset('img/Firefox.jpg') }}" alt="Icono de Mozilla Firefox. Página Sobre Nosotros">
        </a>
        <a href="https://www.opera.com/es" data-toggle="tooltip" data-placement="bottom" title="Opera">
          <img src="{{ asset('img/Opera.jpg') }}" alt="Icono de Opera. Página Sobre Nosotros">
        </a>
        <a href="https://www.microsoft.com/es-es/edge" data-toggle="tooltip" data-placement="bottom" title="Microsoft Edge">
          <img src="{{ asset('img/Edge.jpg') }}" alt="Icono de Microsoft Edge. Página Sobre Nosotros">
        </a>
        <a href="https://www.apple.com/es/safari/" data-toggle="tooltip" data-placement="bottom" title="Safari">
          <img src="{{ asset('img/Safari.jpg') }}" alt="Icono de Safari. Página Sobre Nosotros">
        </a>
      </div>
    </div>

    <!-- Sección de Multimedia -->
    <section id="video">
      <div>
        <p class="infoLateral">MULTIMEDIA <i class="fas fa-video"></i></p>
        <video autoplay loop muted id="frontal" width="1680" height="650">
          <source src="/video/videoMP4_frontal.mp4" type="video/mp4">
          <source src="/video/videoWEBM_frontal.webm" type="video/webm">
          <img src="{{ asset('img/error_video.png') }}" alt="Su navegador no soporta HTML5. Apartado Multimedia">
          Su navegador no soporta contenido multimedia.
        </video>
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="1335" height="610">
          <rect width="1335" height="610" fill="none"/>
        </svg>
        <div class="logoFrontal">
          <img src="{{ asset('img/logo_original.png') }}" width="600" height="264" alt="Logo League Of Legends. Apartado Multimedia">
        </div>
      </div>
    </section>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Toastr.js -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" media="screen" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <!-- JavaScript File -->
  </body>


  <!-- Pie de página -->
  <footer>
    <!-- Sección de Disponibilidad en Plataformas -->
    <section id="plataformas">
      <div>
        <h5>LLEVA LOL A TODAS PARTES</h5>
        <p>Descárgate la aplicación de LoL para seguir en contacto con tus amigos y estar al día de todas las novedades del juego y de los esports.</p>
        <div>
          <a href="https://apps.apple.com/es/app/league-of-legends-friends/id1077150310?ls=1">
            <img src="{{ asset('img/download_appStore.svg') }}" alt="Descarga APP Store. Apartado Plataformas" width="110" height="37">
          </a>
          <a href="https://play.google.com/store/apps/details?id=com.riotgames.mobile.leagueconnect&hl=es">
            <img src="{{ asset('img/download_googlePlay.svg') }}" alt="Descarga Google Play. Apartado Plataformas" width="141" height="55">
          </a>
        </div>
      </div>
    </section>
    <div>
      <div id="enlaces">
        <ul>
          <li>
            <a href="https://euw.leagueoflegends.com/es/game-info/get-started/what-is-lol/">ACERCA DE LEAGUE OF LEGENDS</a>
          </li>
          <li>
            <a href="#">ESTADO DEL SERVIDOR</a>
          </li>
          <li>
            <a href="#">AYÚDANOS A MEJORAR</a>
          </li>
          <li>
            <a href="#">SOBRE NOSOTROS</a>
          </li>
        </ul>
      </div>
      <div id="logo_riot">
        <a href="http://www.riotgames.com/">
          <svg width="109" height="35" viewBox="0 0 109 35" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.7136 31.6814L16.1378 27.5918L31.3569 28.3812L30.6733 34.9265L17.7136 31.6814Z" fill="#E6E6E6"></path>
            <path d="M21.3595 0L0.0616455 10.143L3.35453 25.427H7.70011L6.9491 14.4946L7.61666 14.2843L10.2291 25.427H14.7416L14.5747 12.1101L15.2423 11.8998L17.5242 25.427H22.3031L23.4296 9.34061L24.0971 9.13031L25.2782 25.427H31.5976L33.8217 3.05746L21.3595 0Z" fill="#E6E6E6"></path>
            <path d="M105.462 31.1253L99.4029 30.09L99.4286 29.2908L105.228 29.074L105.08 27.5469H97.6249L97.2429 31.3809L103.405 32.4615L103.434 33.1668L97.0215 33.4192L96.8642 34.9463H105.838L105.462 31.1253ZM47.5673 30.5526L47.4742 31.9374L49.6823 32.0118L49.6534 33.416L45.035 33.2801L45.2372 29.2196L51.5887 29.0708L51.4956 27.5437H43.2923L42.5573 34.9431H51.9032L51.6625 30.4815L47.5673 30.5526ZM87.1332 33.2704L87.0883 31.9956L91.4595 31.9439L91.5013 30.5526L87.0369 30.4976L86.992 29.2067L92.8749 29.0676L92.923 27.5437H84.9893L84.7518 34.9431H93.0707L93.0129 33.416L87.1332 33.2704Z" fill="#E6E6E6"></path>
            <path d="M80.7274 34.9431L79.9924 27.5437H77.8806L74.8445 31.0703L71.8116 27.5437H69.6998L68.9648 34.9431H71.4457L71.6832 30.145L74.8445 33.416L78.009 30.145L78.2465 34.9431H80.7274Z" fill="#E6E6E6"></path>
            <path d="M70.2996 0.453735H65.3346L64.882 23.3313H70.8805L70.2996 0.453735Z" fill="#E6E6E6"></path>
            <path d="M90.4879 0.461792H75.0088L74.4055 23.3296H91.5887L90.4879 0.461792ZM85.6866 18.3536L80.2081 18.5315L80.0252 5.07548L85.754 5.25019L85.6866 18.3536Z" fill="#E6E6E6"></path>
            <path d="M109 5.4589L108.448 0.453735H93.1935L93.3219 4.91212L98.2035 5.0836L98.7009 23.3313H104.712L102.915 5.2486L109 5.4589Z" fill="#E6E6E6"></path>
            <path d="M55.6236 23.3313H62.1387L57.8927 13.0621L61.2818 11.1953L58.9646 0.453735H42.3301L41.7845 5.41037L45.5042 5.28419L43.7101 23.3313H49.5321L49.6893 17.5787L53.8841 15.2686L55.6236 23.3313ZM50.0327 5.13213L54.818 4.97036L55.3636 9.52904L49.8402 12.1594L50.0327 5.13213Z" fill="#E6E6E6"></path>
            <path d="M62.9415 34.9431H65.4545L63.4679 27.5437H57.5721L55.5855 34.9431H58.0985L58.4868 33.0762L62.566 33.128L62.9415 34.9431ZM58.7917 31.6074L59.2956 29.1873L61.7187 29.0773L62.2258 31.5071L58.7917 31.6074Z" fill="#E6E6E6"></path>
          </svg>
        </a>
      </div>
      <div id="redes_sociales">
        <ul>
          <li>
            <a href="https://www.youtube.com/LeagueofLegendsES"><i class="fab fa-youtube"></i></a>
          </li>
          <li>
            <a href="https://twitter.com/lol_es"><i class="fab fa-twitter"></i></a>
          </li>
          <li>
            <a href="https://www.facebook.com/LeagueOfLegendsES?fref=nf"><i class="fab fa-facebook"></i></a>
          </li>
        </ul>
      </div>
      <div id="copyright">
        © 2020 League Of Stats. Todos los derechos reservados.
      </div>
      <div id="calificaciones">
        <div>
          <a href="https://www.pegi.info/">
            <img src="{{ asset('img/logo_pegi.svg') }}" alt="Pegi 12. Footer" width="75" height="55">
          </a>
          <a href="http://www.usk.de/en">
            <img src="{{ asset('img/logo_usk.png') }}" alt="USK 12. Footer" width="55" height="55">
          </a>
        </div>
      </div>
    </div>
  </footer>
</html>
