<head>
    <title>Verificación nuevo usuario - League Of Stats</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
</head>

<!-- Añadimos la plantilla  -->
@extends('layouts.app')

<!-- Añadimos la sección contenido a la plantilla  -->
@section('content')
<div class="container" style="margin-top: 120px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verificación de correo electrónico') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Acabamos de enviar un correo de confirmación') }}
                        </div>
                    @endif

                    {{ __('Antes de proceder, por favor confirme su cuenta con el correo de verificación') }}
                    {{ __('Si no has recivido el correo') }}, <a href="{{ route('verification.resend') }}">{{ __('Por favor, haga click aquí') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
