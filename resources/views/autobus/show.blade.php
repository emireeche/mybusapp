@extends('layouts.app')

@section('template_title')
    {{ $autobus->name ?? "{{ __('Show') Autobus" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Autobus</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('autobuses.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $autobus->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Capacidad:</strong>
                            {{ $autobus->capacidad }}
                        </div>
                        <div class="form-group">
                            <strong>Placa:</strong>
                            {{ $autobus->placa }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
