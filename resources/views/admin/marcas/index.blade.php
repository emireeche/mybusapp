@extends('adminlte::page')

@section('title', 'Dashboard')









@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')




    <<div class="card">
        <div class="card-header">
            Header
        </div>
        <div class="card-body">
            <h4 class="card-title">Title</h4>
            <p class="card-text">Text</p>
        </div>
        <div class="card-footer text-muted">
            Footer
        </div>
    </div>





    <table>
        <thead>
            <tr>
                <th>Descripción</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
       @foreach($marcas as $marca)
       <tr>
    
        <td>{{$marca->id}}</td>
        <td>{{$marca->marca}}    
    
    </tr> 
       @endforeach
            <tr>
                
            </tr>
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop