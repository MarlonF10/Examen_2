@extends('layouts.app')

@section('template_title')
    {{ $mechanic->name ?? "{{ __('Show') Mechanic" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Mecanico</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('mechanic.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $mechanic->Name }}
                        </div>
                        <div class="form-group">
                            <strong>Primer Nombre:</strong>
                            {{ $mechanic->First_Name }}
                        </div>
                        <div class="form-group">
                            <strong>Segundo Nombre:</strong>
                            {{ $mechanic->Second_Name }}
                        </div>
                        <div class="form-group">
                            <strong>DNI:</strong>
                            {{ $mechanic->DNI }}
                        </div>
                        <div class="form-group">
                            <strong>Especialidad:</strong>
                            {{ $mechanic->Speciality }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $mechanic->email }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Telefonico:</strong>
                            {{ $mechanic->Number_Phone }}
                        </div>
                        <div class="form-group">
                            <strong>Dirrecion:</strong>
                            {{ $mechanic->Address }}
                        </div>
                        <div class="form-group">
                            <strong>Municipio:</strong>
                            {{ $mechanic->Municipality }}
                        </div>
                        <div class="form-group">
                            <strong>Departamento:</strong>
                            {{ $mechanic->Department }}
                        </div>
                        <div class="form-group">
                            <strong>Genero:</strong>
                            {{ $mechanic->Gender }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $mechanic->Age }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
