<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <!-- {{ Form::label('cve_grupo_sistema') }} -->
            {{ Form::hidden('cve_grupo_sistema', $tblgrupossistema->cve_grupo_sistema, ['class' => 'form-control' . ($errors->has('cve_grupo_sistema') ? ' is-invalid' : ''), 'placeholder' => 'Cve Grupo Sistema']) }}
            {!! $errors->first('cve_grupo_sistema', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion_grupo') }}
            {{ Form::text('descripcion_grupo', $tblgrupossistema->descripcion_grupo, ['class' => 'form-control' . ($errors->has('descripcion_grupo') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion Grupo']) }}
            {!! $errors->first('descripcion_grupo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('activo') }}
            {{ Form::text('activo', $tblgrupossistema->activo, ['class' => 'form-control' . ($errors->has('activo') ? ' is-invalid' : ''), 'placeholder' => 'Activo']) }}
            {!! $errors->first('activo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>