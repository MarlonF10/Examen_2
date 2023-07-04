@extends('layouts.app')

@section('template_title')
    Service
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Servicios') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('service.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo Servicios') }}
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
                                        
										<th>Hora de Inicio</th>
										<th>Hora de Finalizacion</th>
										<th>Dia</th>
										<th>Tipo de Servicios</th>
										<th>Costo Basico</th>
										<th>Disponible</th>
										<th>Ruta</th>
										<th>Pasajeros</th>
										<th>Cliente</th>
										<th>Transporte</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($services as $service)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $service->Star_Time }}</td>
											<td>{{ $service->End_Time }}</td>
											<td>{{ $service->Day }}</td>
											<td>{{ $service->Type_of_Services }}</td>
											<td>{{ $service->Basic_Cost }}</td>
											<td>{{ $service->Enable }}</td>
											<td>{{ $service->rout }}</td>
											<td>{{ $service->passenger }}</td>
											<td>{{ $service->customer }}</td>
											<td>{{ $service->transport }}</td>

                                            <td>
                                                <form action="{{ route('service.destroy',$service->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('service.show',$service->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('service.edit',$service->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $services->links() !!}
            </div>
        </div>
    </div>
@endsection
