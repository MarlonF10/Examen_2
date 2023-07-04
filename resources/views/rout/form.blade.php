<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Rutas') }}
            {{ Form::text('Route', $rout->Route, ['class' => 'form-control' . ($errors->has('Route') ? ' is-invalid' : ''), 'placeholder' => 'Rutas']) }}
            {!! $errors->first('Route', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Horario de Rutas') }}
            {{ Form::text('Route_Schedule', $rout->Route_Schedule, ['class' => 'form-control' . ($errors->has('Route_Schedule') ? ' is-invalid' : ''), 'placeholder' => 'Horario de Rutas']) }}
            {!! $errors->first('Route_Schedule', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Dia') }}
            {{ Form::text('Day', $rout->Day, ['class' => 'form-control' . ($errors->has('Day') ? ' is-invalid' : ''), 'placeholder' => 'Dia']) }}
            {!! $errors->first('Day', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('Description', $rout->Description, ['class' => 'form-control' . ($errors->has('Description') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('Description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de Registro') }}
            {{ Form::text('Register_date', $rout->Register_date, ['class' => 'form-control' . ($errors->has('Register_date') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de Registro']) }}
            {!! $errors->first('Register_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>