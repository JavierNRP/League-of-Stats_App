<head>
    <title>Estadísticas - League Of Stats</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!-- CSS File -->
    <link rel="stylesheet" href="{{ asset('css/stats.css') }}">
</head>

<!-- Añadimos la plantilla  -->
@extends('layouts.app')

<!-- Añadimos la sección contenido a la plantilla  -->
@section('content')
    <!-- INICIO. Sección de los Introducción a las Estadísticas -->
    <section id="introStats">
        <div id="titulos">
          <h4>OBSERVA E INTRODÚCETE EN LAS</h4>
          <h1>ESTADÍSTICAS</h1>
        </div>
        <div id="texto">
          <p>Alrededor de 8 millones de jugadores disfrutan del League Of Legends diariamente y logran hazañas inimaginables. Introduce el nombre del invocador a investigar...</p>
        </div>
    </section>
    <!-- FINAL. Sección de los Introducción a las Estadísticas -->

    <!-- INICIO. Sección de los Estadísticas -->
    <section id="content">
        <form id="search" class="align-items-center">
          <div class="form-group">
            <label for="region" class="text-muted">Seleccione una región...</label>
            <select class="custom-select" id="region">
              <option value="blank"></option>
              <option value="BR1">BR1</option>
              <option value="EUN1">EUN1</option>
              <option value="EUW1">EUW1</option>
              <option value="JP1">JP1</option>
              <option value="KR">KR</option>
              <option value="LA1">LA1</option>
              <option value="LA2">LA2</option>
              <option value="NA1">NA1</option>
              <option value="OC1">OC1</option>
              <option value="RU">RU</option>
              <option value="TR1">TR1</option>
            </select>
          </div>
          <div class="form-group">
            <label for="name" class="text-muted">Escriba el nombre de invocador...</label>
            <input class="form-control" type="text" id="name"/>
          </div>
          <button type="button" id="searchButton">Buscar...</button>
        </form>
      <div id="main"></div>
      <div id="history">
        <div id="mastery"></div>
        <div id="match"></div>
      </div>
      <div id="error"></div>
    </section>
    <!-- FINAL. Sección de los Estadísticas -->
    <!-- JavaScript File -->
    <script type="text/javascript" src="{{ asset('js/stats.js') }}"></script>
@endsection
