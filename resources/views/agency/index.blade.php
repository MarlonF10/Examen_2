@extends('layouts.app')

@section('template_title')
    Agency
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Agencia') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('agency.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Datos de Agencia') }}
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
                                        
										<th>Nombre</th>
										<th>Direccion</th>
										<th>Numero Telefonico</th>
										<th>Municipio</th>
										<th>Departamento</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($agencies as $agency)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $agency->Name }}</td>
											<td>{{ $agency->Address }}</td>
											<td>{{ $agency->Number_Phone }}</td>
											<td>{{ $agency->Municipality }}</td>
											<td>{{ $agency->Department }}</td>

                                            <td>
                                                <form action="{{ route('agency.destroy',$agency->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('agency.show',$agency->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('agency.edit',$agency->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $agencies->links() !!}
            </div>
        </div>
    </div>
@endsection
