@extends('layouts.app')

@section('template_title')
    Transport
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Transporte') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('transport.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo Transporte') }}
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
                                        
										<th>Marca</th>
										<th>Modelo</th>
										<th>Disponible</th>
										<th>Condicion</th>
										<th>Papeles de Transporte</th>
										<th>Fecha de registro</th>
										<th>Pasajeros</th>
										<th>Conductor</th>
										<th>Mecanicos</th>
										<th>Agencia</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transports as $transport)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $transport->Brand }}</td>
											<td>{{ $transport->Model }}</td>
											<td>{{ $transport->Enabled }}</td>
											<td>{{ $transport->Condition }}</td>
											<td>{{ $transport->Papels_Transport }}</td>
											<td>{{ $transport->Register_date }}</td>
											<td>{{ $transport->passenger }}</td>
											<td>{{ $transport->driver }}</td>
											<td>{{ $transport->mechanic }}</td>
											<td>{{ $transport->agency }}</td>

                                            <td>
                                                <form action="{{ route('transport.destroy',$transport->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('transport.show',$transport->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('transport.edit',$transport->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $transports->links() !!}
            </div>
        </div>
    </div>
@endsection
