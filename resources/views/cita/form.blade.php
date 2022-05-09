<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $cita->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Raza') }}
            {{ Form::text('Raza', $cita->Raza, ['class' => 'form-control' . ($errors->has('Raza') ? ' is-invalid' : ''), 'placeholder' => 'Raza']) }}
            {!! $errors->first('Raza', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Edad') }}
            {{ Form::text('Edad', $cita->Edad, ['class' => 'form-control' . ($errors->has('Edad') ? ' is-invalid' : ''), 'placeholder' => 'Edad']) }}
            {!! $errors->first('Edad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Motivo_Cita') }}
            {{ Form::text('Motivo_Cita', $cita->Motivo_Cita, ['class' => 'form-control' . ($errors->has('Motivo_Cita') ? ' is-invalid' : ''), 'placeholder' => 'Motivo Cita']) }}
            {!! $errors->first('Motivo_Cita', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha_Cita') }}
            {{ Form::text('Fecha_Cita', $cita->Fecha_Cita, ['class' => 'form-control' . ($errors->has('Fecha_Cita') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Cita']) }}
            {!! $errors->first('Fecha_Cita', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Propietario') }}
            {{ Form::text('Propietario', $cita->Propietario, ['class' => 'form-control' . ($errors->has('Propietario') ? ' is-invalid' : ''), 'placeholder' => 'Propietario']) }}
            {!! $errors->first('Propietario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Imagen') }}
            {{ Form::text('Imagen', $cita->Imagen, ['class' => 'form-control' . ($errors->has('Imagen') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
            {!! $errors->first('Imagen', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">AGENDAR CITA</button>
    </div>
</div>