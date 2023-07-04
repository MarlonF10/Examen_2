@extends('layouts.app')

@section('template_title')
    {{ $agency->name ?? "{{ __('Show') Agency" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Agencia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('agency.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $agency->Name }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $agency->Address }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Telefonico:</strong>
                            {{ $agency->Number_Phone }}
                        </div>
                        <div class="form-group">
                            <strong>Municipio:</strong>
                            {{ $agency->Municipality }}
                        </div>
                        <div class="form-group">
                            <strong>Departamento:</strong>
                            {{ $agency->Department }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
