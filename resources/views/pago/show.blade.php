@extends('layouts.app')

@section('template_title')
    {{ $pago->name ?? "{{ __('Show') Pago" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Pago</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pagos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Reserva Id:</strong>
                            {{ $pago->reserva_id }}
                        </div>
                        <div class="form-group">
                            <strong>Montoapagar:</strong>
                            {{ $pago->montoapagar }}
                        </div>
                        <div class="form-group">
                            <strong>Metododepago:</strong>
                            {{ $pago->metododepago }}
                        </div>
                        <div class="form-group">
                            <strong>Fechapago:</strong>
                            {{ $pago->fechapago }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
