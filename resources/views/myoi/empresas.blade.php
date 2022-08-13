@extends('home')
@section('data')
<div class="pos">
    <div class="card">
    <div class="card-body" top="2px">
        <h2>{{'Empresa con mas actividades: '.$emp->first()->Nombre.' - '.$emp->first()->actividades_count}}</h2>
        <a href="{{route('ordensaurio')}}" class="btn btn-primary">Usuarios con menos tareas asignadas</a>
        <a href="{{route('myoi.index')}}" class="btn btn-primary">Inicio</a>
    <div class="card">
    <table id="datos" class="table">
    <thead>
        <tr>
            <th>Empresa </th>
            <th>Actividades </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($emp as $empresa)
        <tr>
        <td>{{$empresa->Nombre}}</td>
        <td>{{$empresa->actividades_count}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    </div>
</div>
</div>
</div>
@endsection