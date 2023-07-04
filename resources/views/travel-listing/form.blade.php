<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Promocion') }}
            {{ Form::text('Giveaways', $travelListing->Giveaways, ['class' => 'form-control' . ($errors->has('Giveaways') ? ' is-invalid' : ''), 'placeholder' => 'Promocion']) }}
            {!! $errors->first('Giveaways', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre del Lugar') }}
            {{ Form::text('Name_of_the_place', $travelListing->Name_of_the_place, ['class' => 'form-control' . ($errors->has('Name_of_the_place') ? ' is-invalid' : ''), 'placeholder' => 'Nombre del lugar']) }}
            {!! $errors->first('Name_of_the_place', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Hora de salida') }}
            {{ Form::text('Departure_time', $travelListing->Departure_time, ['class' => 'form-control' . ($errors->has('Departure_time') ? ' is-invalid' : ''), 'placeholder' => 'Hora de salida']) }}
            {!! $errors->first('Departure_time', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Hora prevista de llegada') }}
            {{ Form::text('Expected_arrival_time', $travelListing->Expected_arrival_time, ['class' => 'form-control' . ($errors->has('Expected_arrival_time') ? ' is-invalid' : ''), 'placeholder' => 'Hora prevista de llegada']) }}
            {!! $errors->first('Expected_arrival_time', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de registro') }}
            {{ Form::text('Register_date', $travelListing->Register_date, ['class' => 'form-control' . ($errors->has('Register_date') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de registro']) }}
            {!! $errors->first('Register_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Pasajero') }}
            {{ Form::text('passenger', $travelListing->passenger, ['class' => 'form-control' . ($errors->has('passenger') ? ' is-invalid' : ''), 'placeholder' => 'Pasajero']) }}
            {!! $errors->first('passenger', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>