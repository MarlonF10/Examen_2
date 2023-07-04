<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('Description', $promotion->Description, ['class' => 'form-control' . ($errors->has('Description') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('Description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Costo') }}
            {{ Form::text('Cost', $promotion->Cost, ['class' => 'form-control' . ($errors->has('Cost') ? ' is-invalid' : ''), 'placeholder' => 'Costo']) }}
            {!! $errors->first('Cost', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha De') }}
            {{ Form::text('Date_from', $promotion->Date_from, ['class' => 'form-control' . ($errors->has('Date_from') ? ' is-invalid' : ''), 'placeholder' => 'Fecha De']) }}
            {!! $errors->first('Date_from', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha Para') }}
            {{ Form::text('Date_to', $promotion->Date_to, ['class' => 'form-control' . ($errors->has('Date_to') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Para']) }}
            {!! $errors->first('Date_to', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Imagen') }}
            {{ Form::text('Image', $promotion->Image, ['class' => 'form-control' . ($errors->has('Image') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
            {!! $errors->first('Image', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Disponible') }}
            {{ Form::text('Enable', $promotion->Enable, ['class' => 'form-control' . ($errors->has('Enable') ? ' is-invalid' : ''), 'placeholder' => 'Disponible']) }}
            {!! $errors->first('Enable', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de Registro') }}
            {{ Form::text('Register_date', $promotion->Register_date, ['class' => 'form-control' . ($errors->has('Register_date') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de Registro']) }}
            {!! $errors->first('Register_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ruta') }}
            {{ Form::text('rout', $promotion->rout, ['class' => 'form-control' . ($errors->has('rout') ? ' is-invalid' : ''), 'placeholder' => 'Ruta']) }}
            {!! $errors->first('rout', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cliente') }}
            {{ Form::text('customer', $promotion->customer, ['class' => 'form-control' . ($errors->has('customer') ? ' is-invalid' : ''), 'placeholder' => 'Cliente']) }}
            {!! $errors->first('customer', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>