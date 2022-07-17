@extends('layouts.app')

@section('template_title')
    Update Tblconfiguracioncarga
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Tblconfiguracioncarga</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tblconfiguracioncargas.update', $tblconfiguracioncarga->id_Configuracion_Carga) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('tblconfiguracioncarga.form', ['modo' => 'actualizar']);

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
