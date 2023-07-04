@extends('layouts.app')

@section('template_title')
    {{ $driver->name ?? "{{ __('Show') Driver" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Conductor</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('driver.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $driver->Name }}
                        </div>
                        <div class="form-group">
                            <strong>Primer Nombre:</strong>
                            {{ $driver->First_Name }}
                        </div>
                        <div class="form-group">
                            <strong>Segundo Nombre:</strong>
                            {{ $driver->Second_Name }}
                        </div>
                        <div class="form-group">
                            <strong>DNI:</strong>
                            {{ $driver->DNI }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Telefonico:</strong>
                            {{ $driver->Number_Phone }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $driver->Email }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $driver->Address }}
                        </div>
                        <div class="form-group">
                            <strong>Genero:</strong>
                            {{ $driver->Gender }}
                        </div>
                        <div class="form-group">
                            <strong>Licencia:</strong>
                            {{ $driver->License }}
                        </div>
                        <div class="form-group">
                            <strong>Municipio:</strong>
                            {{ $driver->Municipality }}
                        </div>
                        <div class="form-group">
                            <strong>Departamento:</strong>
                            {{ $driver->Department }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $driver->Age }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
