@extends('home')
@section('data')
<div class="pos">
    <div class="card">
    <div class="card-body" top="2px">
        <a href="{{route('orden')}}" class="btn btn-primary">Empresas con mas tareas pendientes</a>
        <a href="{{route('ordensaurio')}}" class="btn btn-primary">Usuarios con menos tareas asignadas</a>
    <div class="card">
    <table id="datos" class="table">
    <thead>
        <tr>
            <th>Empresa </th>
            <th>Actividad </th>
            <th>Descripción </th>
            <th>Usuario </th>
            <th>Inicio </th>
            <th>Vencimiento </th>
            <th>Estado </th>
            <th>Acciones </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($actividades as $actividad)
        <tr>
        <td>{{$actividad->empresa->Nombre}}</td>
        <td>{{$actividad->Nombre}}</td>
        <td>{{$actividad->Descripcion}}</td>
        <td>{{$actividad->usuarios ? $actividad->usuarios->Nombre:'No asignado'}}</td>
        <td>{{$actividad->Inicio}}</td>
        <td>{{$actividad->Fin}}</td>
        <td>{{$actividad->Estado}}</td>
        <td>
            <form action="{{ route('finalizar', ['id'=>$actividad->id]) }}" method="POST" >
            <input type="hidden" value={{$actividad->id}} name="id">
            @csrf
            @method('PUT')
            <button class="btn btn-primary" type="submit">Finalizar</button>
            </form>
        </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    </div>
</div>
</div>
</div>

@endsection