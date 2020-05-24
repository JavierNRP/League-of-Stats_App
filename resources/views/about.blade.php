<head>
    <title>Sobre nosotros - League Of Stats</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!-- CSS File -->
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
</head>

<!-- Añadimos la plantilla  -->
@extends('layouts.app')

<!-- Añadimos la sección contenido a la plantilla  -->
@section('content')
    <!-- INICIO. Sección de los Introducción a Sobre Nosotros -->
    <section id="introAbout">
      <div id="titulos">
        <h1>SOBRE NOSOTROS</h1>
      </div>
    </section>
    <!-- FINAL. Sección de los Introducción a Sobre Nosotros -->

    <!-- INICIO. Contenedor con el mensaje de la página -->
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
    <!-- FINAL. Contenedor con el mensaje de la página -->

    <!-- INICIO. Contenedor con las tecnologías utilizadas -->
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
    <!-- FINAL. Contenedor con las tecnologías utilizadas -->
@endsection
