@extends('layouts.app')

@section('template_title')
    {{ $rout->name ?? "{{ __('Show') Rout" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Ruta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('rout.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Ruta:</strong>
                            {{ $rout->Route }}
                        </div>
                        <div class="form-group">
                            <strong>Horario de Ruta:</strong>
                            {{ $rout->Route_Schedule }}
                        </div>
                        <div class="form-group">
                            <strong>Dia:</strong>
                            {{ $rout->Day }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $rout->Description }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de Registro:</strong>
                            {{ $rout->Register_date }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
