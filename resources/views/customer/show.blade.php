@extends('layouts.app')

@section('template_title')
    {{ $customer->name ?? "{{ __('Show') Customer" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('customer.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $customer->Name }}
                        </div>
                        <div class="form-group">
                            <strong>First Name:</strong>
                            {{ $customer->First_Name }}
                        </div>
                        <div class="form-group">
                            <strong>Second Name:</strong>
                            {{ $customer->Second_Name }}
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $customer->Address }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $customer->email }}
                        </div>
                        <div class="form-group">
                            <strong>Number Phone:</strong>
                            {{ $customer->Number_Phone }}
                        </div>
                        <div class="form-group">
                            <strong>Gender:</strong>
                            {{ $customer->Gender }}
                        </div>
                        <div class="form-group">
                            <strong>Municipality:</strong>
                            {{ $customer->Municipality }}
                        </div>
                        <div class="form-group">
                            <strong>Department:</strong>
                            {{ $customer->Department }}
                        </div>
                        <div class="form-group">
                            <strong>Dni:</strong>
                            {{ $customer->DNI }}
                        </div>
                        <div class="form-group">
                            <strong>Age:</strong>
                            {{ $customer->Age }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
