<head>
    <title>League Of Stats</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!-- CSS File -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<!-- Añadimos la plantilla  -->
@extends('layouts.app')

<!-- Añadimos la sección contenido a la plantilla  -->
@section('content')
    <!-- INICIO. Sección de Slider -->
    <section id="slider">
      <div id="carouselFuncs" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselFuncs" data-slide-to="0" class="active"></li>
          <li data-target="#carouselFuncs" data-slide-to="1"></li>
          <li data-target="#carouselFuncs" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('img/slider1.jpg') }}" class="d-block w-100" alt="¡Ya puedes leer la revista GGWP!. Apartado Slider">
            <div class="carousel-caption d-md-block">
              <h1>¡YA PUEDES LEER LA REVISTA GGWP!</h1>
              <p>GGWP, la revista oficial del 10º aniversario de League of Legends ya está disponible para que la descargues en formato digital.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('img/slider2.jpg') }}" class="d-block w-100" alt="Nos despedimos de los foros. Apartado Slider">
            <div class="carousel-caption d-md-block">
              <h1>NOS DESPEDIMOS DE LOS FOROS</h1>
              <p>El 9 de marzo de 2020 diremos adiós a los foros de League of Legends.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('img/slider3.jpg') }}" class="d-block w-100" alt="Notas de la versión 10.7. Apartado Slider">
            <div class="carousel-caption d-md-block">
              <h1>NOTAS DE LA VERSIÓN 10.7</h1>
              <p>Lo primero de todo, sabemos que ya llevamos un tiempo alardeando de ello, pero por fin está aquí: ¡el espantapájaros más aterrador ha regresado!</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselFuncs" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselFuncs" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>
    <!-- FINAL. Sección de Slider -->

    <!-- INICIO. Sección de Última Hora -->
    <section id="promo">
      <div>
        <p class="infoLateral">ÚLTIMA HORA <i class="far fa-clock"></i></p>
        <a href="https://riotgames.sng.link/Dgggu/1qgi">
          <img src="{{ asset('img/noticia1.jpg') }}" alt="Noticia primera plana. Apartado Última Hora">
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="1702" height="615" >
            <rect width="1702" height="615" fill="none"/>
          </svg>
          <div class="infoIMG">
            <h1>Probad TFT para <i class="fas fa-mobile-alt"></i></h1>
            <p>¡Ya está aquí! Hora de luciros frente a vuestros rivales tanto en PC como en móvil.</p>
          </div>
        </a>
      </div>
    </section>
    <!-- FINAL. Sección de Última Hora -->

    <!-- INICIO. Sección de Noticias Destacadas -->
    <section id="noticias">
      <div class="nGlobales">
        <p class="infoLateral">NOTICIAS DESTACADAS <i class="far fa-newspaper"></i></p>
        <div class="nDestacadas">
          <article class="primerArticulo">
            <a href="https://euw.leagueoflegends.com/es-es/news/game-updates/extra-galaxies-tokens/">
              <img src="{{ asset('img/Galaxy_Token_Compensation.jpg') }}" width="126" height="126" alt="Símbolo de Galaxias adicionales. Apartado Noticias Destacadas">
              <div>
                <p>ACTUALIZACIONES DEL JUEGO</p>
                <h5>Símbolo de Galaxias adicionales</h5>
                <p>Tomamos medidas de cara a los recientes problemas con los símbolos que habéis obtenido...</p>
              </div>
            </a>
          </article>
          <article class="segundoArticulo">
            <a href="https://www.youtube.com/watch?v=kieidOlplkw">
              <img src="{{ asset('img/Iona_ToR.jpg') }}" width="126" height="126" alt="Tales of Runeterra: Jonia. Apartado Noticias Destacadas">
              <div>
                <p>MULTIMEDIA</p>
                <h5>Tales of Runeterra: Jonia</h5>
                <p>Cuando un extraño amenaza Jonia, Akali restaura el equilibrio a su manera...</p>
              </div>
            </a>
          </article>
          <article class="tercerArticulo">
            <a href="https://euw.leagueoflegends.com/es-es/news/dev/quick-gameplay-thoughts-april-17/">
              <img src="{{ asset('img/Gameplay_thoughts.jpg') }}" width="126" height="126" alt="Hablemos de jugabilidad. Apartado Noticias Destacadas">
              <div>
                <p>DESARROLLO</p>
                <h5>Hablemos de jugabilidad</h5>
                <p>Retrospectiva de campeones y lanzamientos de campeones equilibrados....</p>
              </div>
            </a>
          </article>
        </div>
      </div>
    </section>
    <!-- FINAL. Sección de Noticias Destacadas -->
@endsection
