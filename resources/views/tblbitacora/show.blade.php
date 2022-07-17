@extends('layouts.app')

@section('template_title')
    {{ $tblbitacora->name ?? 'Show Tblbitacora' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tblbitacora</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tblbitacoras.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Bitacora:</strong>
                            {{ $tblbitacora->id_Bitacora }}
                        </div>
                        <div class="form-group">
                            <strong>Id Usuario:</strong>
                            {{ $tblbitacora->id_Usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Cve Accion:</strong>
                            {{ $tblbitacora->cve_accion }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $tblbitacora->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Movimiento:</strong>
                            {{ $tblbitacora->movimiento }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
