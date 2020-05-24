<head>
    <title>Estado del servidor - League Of Stats</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!-- CSS File -->
    <link rel="stylesheet" href="{{ asset('css/status.css') }}">
</head>

<!-- Añadimos la plantilla  -->
@extends('layouts.app')

<!-- Añadimos la sección contenido a la plantilla  -->
@section('content')
    <!-- INICIO. Sección de la Introducción a la Página del Estado del Servidor -->
    <section id="introServidor">
      <div id="titulos">
        <h4>CONÓCE EL ESTADO DEL</h4>
        <h1>SERVIDOR</h1>
      </div>
      <div id="texto">
        <p>El servidor de League Of Legends es muy importante que esté en línea para que podamos disfrutar del juego, por ello, aquí puedes informarte y comprobar que el servidor está en sus mejores condiciones.</p>
      </div>
    </section>
    <!-- FINAL. Sección de la Introducción a la Página del Estado del Servidor -->

    <!-- INICIO. Sección del Estado del Servidor -->
    <section id="content">
      <form id="selection">
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
        <div class="form-group" id="botones">
          <button type="button" class="statusButton" value="Game">Juego</button>
          <button type="button" class="statusButton" value="Store">Tienda</button>
          <button type="button" class="statusButton" value="Website">Página web</button>
          <button  type="button" class="statusButton" value="Client">Cliente</button>
        </div>
      </form>
      <div id="info"></div>
    </section>
    <!-- FINAL. Sección del Estado del Servidor -->
@endsection
