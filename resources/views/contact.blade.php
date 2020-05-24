<head>
    <title>Contacto - League Of Stats</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!-- CSS File -->
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
</head>

<!-- Añadimos la plantilla  -->
@extends('layouts.app')

<!-- Añadimos la sección contenido a la plantilla  -->
@section('content')
    <!-- INICIO. Sección de los Introducción al Contacto -->
    <section id="introContact">
      <div id="titulos">
        <h1>CONTACTO</h1>
      </div>
      <div id="texto">
        <p>¿Tienes alguna duda o sugerencia que hacernos? ¿Ha surgido algún error a la hora de visitar nuestra página? Escríbenos tus comentarios, te contestaremos lo antes posible</p>
      </div>
    </section>
    <!-- FINAL. Sección de los Introducción al Contacto -->

    <!-- INICIO. Formulario de Contacto -->
    <form id="formContact">
      <div class="form-row">
        <div class="col-md-4 mb-3">
          <label for="nombreInvocador">Nombre de invocador</label>
          <input type="text" class="form-control" id="nombreInvocador" value="" required>
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-4 mb-3">
          <label for="emailContacto">E-mail de contacto</label>
          <input type="email" class="form-control" id="emailContacto" value="" required>
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-4 mb-3">
          <label for="asunto">Asunto</label>
          <input type="text" class="form-control" id="asunto" value="" required>
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-4 mb-3">
          <label for="asunto">Su mensaje</label>
          <p><textarea cols="150" rows="10" required></textarea></p>
        </div>
      </div>
      <button class="btn btn-primary" type="submit">Enviar</button>
    </form>
    <!-- FINAL. Formulario de Contacto -->
@endsection
