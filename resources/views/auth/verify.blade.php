@extends('layouts.app')

@section('content')
<div class="container">
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
