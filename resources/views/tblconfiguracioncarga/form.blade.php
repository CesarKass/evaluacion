<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group {{ ($modo == 'crear')? 'invisible' : '' }}">
            {{ Form::label('id_Configuracion_Carga') }}
            {{ Form::text('id_Configuracion_Carga', $tblconfiguracioncarga->id_Configuracion_Carga, ['class' => 'form-control' . ($errors->has('id_Configuracion_Carga') ? ' is-invalid' : ''), 'value' => '1', 'placeholder' => 'Id Configuracion Carga']) }}
            {!! $errors->first('id_Configuracion_Carga', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('proporcion') }}
            {{ Form::text('proporcion', $tblconfiguracioncarga->proporcion, ['class' => 'form-control' . ($errors->has('proporcion') ? ' is-invalid' : ''), 'placeholder' => 'Proporcion']) }}
            {!! $errors->first('proporcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('diferencia') }}
            {{ Form::text('diferencia', $tblconfiguracioncarga->diferencia, ['class' => 'form-control' . ($errors->has('diferencia') ? ' is-invalid' : ''), 'placeholder' => 'Diferencia']) }}
            {!! $errors->first('diferencia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('anio') }}
            {{ Form::text('anio', $tblconfiguracioncarga->anio, ['class' => 'form-control' . ($errors->has('anio') ? ' is-invalid' : ''), 'placeholder' => 'Anio']) }}
            {!! $errors->first('anio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('activo') }}
            {{ Form::text('activo', $tblconfiguracioncarga->activo, ['class' => 'form-control' . ($errors->has('activo') ? ' is-invalid' : ''), 'placeholder' => 'Activo']) }}
            {!! $errors->first('activo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>