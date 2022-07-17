@extends('layouts.app')

@section('template_title')
    {{ $tblconfiguracioncarga->name ?? 'Show Tblconfiguracioncarga' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tblconfiguracioncarga</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tblconfiguracioncargas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Configuracion Carga:</strong>
                            {{ $tblconfiguracioncarga->id_Configuracion_Carga }}
                        </div>
                        <div class="form-group">
                            <strong>Proporcion:</strong>
                            {{ $tblconfiguracioncarga->proporcion }}
                        </div>
                        <div class="form-group">
                            <strong>Diferencia:</strong>
                            {{ $tblconfiguracioncarga->diferencia }}
                        </div>
                        <div class="form-group">
                            <strong>Anio:</strong>
                            {{ $tblconfiguracioncarga->anio }}
                        </div>
                        <div class="form-group">
                            <strong>Activo:</strong>
                            {{ $tblconfiguracioncarga->activo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
