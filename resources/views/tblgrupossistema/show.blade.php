@extends('layouts.app')

@section('template_title')
    {{ $tblgrupossistema->name ?? 'Show Tblgrupossistema' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Sistemas</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tblgrupossistemas.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cve Grupo Sistema:</strong>
                            {{ $tblgrupossistema->cve_grupo_sistema }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion Grupo:</strong>
                            {{ $tblgrupossistema->descripcion_grupo }}
                        </div>
                        <div class="form-group">
                            <strong>Activo:</strong>
                            {{ $tblgrupossistema->activo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
