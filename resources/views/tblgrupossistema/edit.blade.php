@extends('layouts.app')

@section('template_title')
    Update Tblgrupossistema
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <div class="float-right">
                            <a class="btn btn-info" href="{{ route('tblgrupossistemas.index') }}"> Volver</a>
                            <span class="card-title">Actualizar Sistemas</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tblgrupossistemas.update', $tblgrupossistema->cve_grupo_sistema) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('tblgrupossistema.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
