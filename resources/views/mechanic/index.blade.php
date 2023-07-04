@extends('layouts.app')

@section('template_title')
    Mechanic
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Mecanico') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('mechanic.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo Mecanico') }}
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
										<th>Primer Nombre</th>
										<th>Segundo Nombre</th>
										<th>DNI</th>
										<th>Especialidad</th>
										<th>Email</th>
										<th>Numero Telefonico</th>
										<th>Direccion</th>
										<th>Municipio</th>
										<th>Departamento</th>
										<th>Genero</th>
										<th>Edad</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mechanics as $mechanic)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $mechanic->Name }}</td>
											<td>{{ $mechanic->First_Name }}</td>
											<td>{{ $mechanic->Second_Name }}</td>
											<td>{{ $mechanic->DNI }}</td>
											<td>{{ $mechanic->Speciality }}</td>
											<td>{{ $mechanic->email }}</td>
											<td>{{ $mechanic->Number_Phone }}</td>
											<td>{{ $mechanic->Address }}</td>
											<td>{{ $mechanic->Municipality }}</td>
											<td>{{ $mechanic->Department }}</td>
											<td>{{ $mechanic->Gender }}</td>
											<td>{{ $mechanic->Age }}</td>

                                            <td>
                                                <form action="{{ route('mechanic.destroy',$mechanic->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('mechanic.show',$mechanic->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('mechanic.edit',$mechanic->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $mechanics->links() !!}
            </div>
        </div>
    </div>
@endsection
