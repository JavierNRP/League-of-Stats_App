<head>
    <title>Campeones - League Of Stats</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!-- CSS File -->
    <link rel="stylesheet" href="{{ asset('css/champs.css') }}">
</head>

<!-- Añadimos la plantilla  -->
@extends('layouts.app')

<!-- Añadimos la sección contenido a la plantilla  -->
@section('content')
    <!-- INICIO. Sección de los Introducción a Campeones -->
    <section id="introChamps">
        <div id="titulos">
          <h4>ELIGE A TU</h4>
          <h1>CAMPEÓN</h1>
        </div>
        <div id="texto">
          <p>Hay más de 140 campeones disponibles en el League of Legends, descubre sus habilidades e historia pulsando en cada uno de ellos.  ¿A qué esperas?</p>
        </div>
    </section>
    <!-- FINAL. Sección de los Introducción a Campeones -->

    <!-- INICIO. Sección de los Campeones -->
    <section id="content">
        <div id="filter">
          <form>
            <div class="form-group">
              <input id="buscarChamp" type="text" class="form-control" placeholder="Buscar..."/>
            </div>
          </form>
          <ul>
            <li><button id="all">Todos</button></li>
            <li><button id="Assassin">Asesinos</button></li>
            <li><button id="Fighter">Luchadores</button></li>
            <li><button id="Mage">Magos</button></li>
            <li><button id="Marksman">Tiradores</button></li>
            <li><button id="Support">Apoyos</button></li>
            <li><button id="Tank">Tanques</button></li>
          </ul>
        </div>
        <div id="champs"></div>
    </section>
    <!-- FINAL. Sección de los Campeones -->
    <!-- JavaScript File -->
    <script type="module" src="{{ asset('js/champs.js') }}"></script>
@endsection


