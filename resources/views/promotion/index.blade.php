@extends('layouts.app')

@section('template_title')
    Promotion
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Promocion') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('promotion.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nueva Promocion') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Descripcion</th>
										<th>Costo</th>
										<th>Fecha De</th>
										<th>Fecha Para</th>
										<th>Imagen</th>
										<th>Disponible</th>
										<th>Fecha de Registro</th>
										<th>Ruta</th>
										<th>Cliente</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($promotions as $promotion)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $promotion->Description }}</td>
											<td>{{ $promotion->Cost }}</td>
											<td>{{ $promotion->Date_from }}</td>
											<td>{{ $promotion->Date_to }}</td>
											<td>{{ $promotion->Image }}</td>
											<td>{{ $promotion->Enable }}</td>
											<td>{{ $promotion->Register_date }}</td>
											<td>{{ $promotion->rout }}</td>
											<td>{{ $promotion->customer }}</td>

                                            <td>
                                                <form action="{{ route('promotion.destroy',$promotion->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('promotion.show',$promotion->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('promotion.edit',$promotion->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $promotions->links() !!}
            </div>
        </div>
    </div>
@endsection
