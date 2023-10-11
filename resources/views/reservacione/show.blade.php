@extends('layouts.app')

@section('template_title')
    {{ $reservacione->name ?? "{{ __('Show') Reservacione" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Reservacione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('reservaciones.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cliente Id:</strong>
                            {{ $reservacione->cliente_id }}
                        </div>
                        <div class="form-group">
                            <strong>Ruta Id:</strong>
                            {{ $reservacione->ruta_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fechainicio:</strong>
                            {{ $reservacione->fechainicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fechafin:</strong>
                            {{ $reservacione->fechafin }}
                        </div>
                        <div class="form-group">
                            <strong>Preciobase:</strong>
                            {{ $reservacione->preciobase }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidadpasajeros:</strong>
                            {{ $reservacione->cantidadpasajeros }}
                        </div>
                        <div class="form-group">
                            <strong>Estadoreserva:</strong>
                            {{ $reservacione->estadoreserva }}
                        </div>
                        <div class="form-group">
                            <strong>Costo Total:</strong>
                            {{ $reservacione->costo_total }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
