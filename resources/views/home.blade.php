@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul>
                        <li>
                            <a href="{{ route('tblgrupossistemas.index') }}" class="btn btn-primary" type="button">Sistemas</a>
                        </li>
                        <br>
                        <li>
                            <a href="{{ route('tblsolicitudes.index') }}" class="btn btn-primary" type="button">Solicitudes</a>
                        </li>
                        <br>
                        <li>
                            <a href="{{ route('tblconfiguracioncargas.index') }}" class="btn btn-primary" type="button">Configuracion de cargas</a>
                        </li>
                        <br>
                        <li>
                            <a href="{{ route('tblbitacoras.index') }}" class="btn btn-primary" type="button">Bitacoras</a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
