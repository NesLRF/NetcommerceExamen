@extends('home')
@section('data')
<div class="pos">
    <div class="card">
    <div class="card-body" top="2px">
        <h2>{{'Usuarios que no tengan maximo de tareas asignadas'}}</h2>
        <a href="{{route('orden')}}" class="btn btn-primary">Empresas con mas tareas pendientes</a>
        <a href="{{route('myoi.index')}}" class="btn btn-primary">Inicio</a>
    <div class="card">
    <table id="datos" class="table">
    <thead>
        <tr>
            <th>Nombre </th>
            <th>Actividades </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($sana as $usuario)
        <tr>
        <td>{{$usuario->Nombre}}</td>
        <td>{{$usuario->actividades_count}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    </div>
</div>
</div>
</div>
@endsection