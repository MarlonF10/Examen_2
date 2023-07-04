@extends('layouts.app')

@section('template_title')
    {{ $passenger->name ?? "{{ __('Show') Passenger" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Pasajeros</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('passenger.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $passenger->Name }}
                        </div>
                        <div class="form-group">
                            <strong>Primer Nombre:</strong>
                            {{ $passenger->First_Name }}
                        </div>
                        <div class="form-group">
                            <strong>Segundo Nombre:</strong>
                            {{ $passenger->Second_Name }}
                        </div>
                        <div class="form-group">
                            <strong>DNI:</strong>
                            {{ $passenger->DNI }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Telefonico:</strong>
                            {{ $passenger->Number_Phone }}
                        </div>
                        <div class="form-group">
                            <strong>Genero:</strong>
                            {{ $passenger->Gender }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $passenger->Email }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
