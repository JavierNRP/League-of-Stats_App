<head>
    <title>Rotación gratuita semanal - League Of Stats</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!-- CSS File -->
    <link rel="stylesheet" href="{{ asset('css/rotacion.css') }}">
</head>

<!-- Añadimos la plantilla  -->
@extends('layouts.app')

<!-- Añadimos la sección contenido a la plantilla  -->
@section('content')
    <!-- INICIO. Sección de la Introducción a la Página de Rotación Gratuita Semanal -->
    <section id="introRotacion">
      <div id="titulos">
        <h4>EXPLORA LA</h4>
        <h1>ROTACIÓN</h1>
      </div>
      <div id="texto">
        <p>La rotación de campeones es el calendario de campeones que están disponibles para que todos puedan jugar, sin necesidad de comprarlos con Riot Points o Esencias Azules.</p>
      </div>
    </section>
    <!-- FINAL. Sección de la Introducción a la Página de Rotación Gratuita Semanal -->

    <!-- INICIO. Sección de la Rotación Gratuita Semanal -->
    <section id="content">
      <div id="main">
        <div id="rotacion">
          <h1>Campeones gratuitos de esta semana</h1>
          <div id="champs"></div>
        </div>
        <div id="noobs">
          <h1>Campeones gratuitos para nuevas cuentas</h1>
          <div id="champsNoobs"></div>
        </div>
      </div>
    </section>
    <!-- FINAL. Sección de la Rotación Gratuita Semanal -->
@endsection
