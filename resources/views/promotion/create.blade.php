@extends('layouts.app');

@section('content');
   <div class="contrainer">
    <h1>Nueva Promocion </h1>

    <form action="{{route('promotion.store')}}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="Description" class="form-label">
                <i class="fas fa-heading text-primary"></i> Descripcion
            </label>
            <input type="text" class="form-control" id="Description" name="Description" required>
        </div>

        <div class="mb-3">
            <label for="Cost" class="form-label">
                <i class="fas fa-heading text-primary"></i> Costo
            </label>
            <input type="text" class="form-control" id="Cost" name="Cost" required>
        </div>

        <div class="mb-3">
            <label for="Date_from" class="form-label">
                <i class="fas fa-heading text-primary"></i> Fecha de 
            </label>
            <input type="date" class="form-control" id="Date_from" name="Date_from" required>
        </div>

        <div class="mb-3">
            <label for="Date_to" class="form-label">
                <i class="fas fa-heading text-primary"></i> Fecha para
            </label>
            <input type="date" class="form-control" id="Date_to" name="Date_to" required>
        </div>

        <div class="mb-3">
            <label for="Image" class="form-label">
                <i class="fas fa-heading text-primary"></i> Imagen
            </label>
            <input type="text" class="form-control" id="Image" name="Image" required>
        </div>

        <div class="mb-3">
            <label for="Enable" class="form-label">
                <i class="fas fa-heading text-primary"></i> Disponible
            </label>
            <input type="text" class="form-control" id="Enable" name="Enable" required>
        </div>

        <div class="mb-3">
            <label for="Register_date" class="form-label">
                <i class="fas fa-heading text-primary"></i> Fecha de registro
            </label>
            <input type="date" class="form-control" id="Register_date" name="Register_date" required>
        </div>

        <div class="mb-3">
            <label for="Rout" class="form-label">
                <i class="fas fa-heading text-primary"></i> Ruta
            </label>
            <input type="text" class="form-control" id="Rout" name="rout" required>
        </div>

        <div class="mb-3">
            <label for="Customer" class="form-label">
                <i class="fas fa-heading text-primary"></i> Cliente
            </label>
            <input type="text" class="form-control" id="Customer" name="customer" required>
        </div>

        <button tyoe="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Guardar
        </button>
        <a href="{{route('promotion.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Volver
        </a>
    </form>
</div>
@endsection