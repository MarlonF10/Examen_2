<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Hora de Inicio') }}
            {{ Form::text('Star_Time', $service->Star_Time, ['class' => 'form-control' . ($errors->has('Star_Time') ? ' is-invalid' : ''), 'placeholder' => 'Hora de Inicio']) }}
            {!! $errors->first('Star_Time', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Hora de Finalizacion') }}
            {{ Form::text('End_Time', $service->End_Time, ['class' => 'form-control' . ($errors->has('End_Time') ? ' is-invalid' : ''), 'placeholder' => 'Hora de Finalizacion']) }}
            {!! $errors->first('End_Time', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Dia') }}
            {{ Form::text('Day', $service->Day, ['class' => 'form-control' . ($errors->has('Day') ? ' is-invalid' : ''), 'placeholder' => 'Dia']) }}
            {!! $errors->first('Day', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo de Servicio') }}
            {{ Form::text('Type_of_Services', $service->Type_of_Services, ['class' => 'form-control' . ($errors->has('Type_of_Services') ? ' is-invalid' : ''), 'placeholder' => 'Tipo de Servivios']) }}
            {!! $errors->first('Type_of_Services', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Costo Basico') }}
            {{ Form::text('Basic_Cost', $service->Basic_Cost, ['class' => 'form-control' . ($errors->has('Basic_Cost') ? ' is-invalid' : ''), 'placeholder' => 'Costo Basico']) }}
            {!! $errors->first('Basic_Cost', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Disponible') }}
            {{ Form::text('Enable', $service->Enable, ['class' => 'form-control' . ($errors->has('Enable') ? ' is-invalid' : ''), 'placeholder' => 'Disponible']) }}
            {!! $errors->first('Enable', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ruta') }}
            {{ Form::text('rout', $service->rout, ['class' => 'form-control' . ($errors->has('rout') ? ' is-invalid' : ''), 'placeholder' => 'Ruta']) }}
            {!! $errors->first('rout', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Pasajeor') }}
            {{ Form::text('passenger', $service->passenger, ['class' => 'form-control' . ($errors->has('passenger') ? ' is-invalid' : ''), 'placeholder' => 'Pasajeros']) }}
            {!! $errors->first('passenger', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cliente') }}
            {{ Form::text('customer', $service->customer, ['class' => 'form-control' . ($errors->has('customer') ? ' is-invalid' : ''), 'placeholder' => 'Cliente']) }}
            {!! $errors->first('customer', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('transporte') }}
            {{ Form::text('transport', $service->transport, ['class' => 'form-control' . ($errors->has('transport') ? ' is-invalid' : ''), 'placeholder' => 'Transporte']) }}
            {!! $errors->first('transport', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>