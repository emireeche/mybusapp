<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('reserva_id') }}
            {{ Form::text('reserva_id', $pago->reserva_id, ['class' => 'form-control' . ($errors->has('reserva_id') ? ' is-invalid' : ''), 'placeholder' => 'Reserva Id']) }}
            {!! $errors->first('reserva_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('montoapagar') }}
            {{ Form::text('montoapagar', $pago->montoapagar, ['class' => 'form-control' . ($errors->has('montoapagar') ? ' is-invalid' : ''), 'placeholder' => 'Montoapagar']) }}
            {!! $errors->first('montoapagar', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('metododepago') }}
            {{ Form::text('metododepago', $pago->metododepago, ['class' => 'form-control' . ($errors->has('metododepago') ? ' is-invalid' : ''), 'placeholder' => 'Metododepago']) }}
            {!! $errors->first('metododepago', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechapago') }}
            {{ Form::text('fechapago', $pago->fechapago, ['class' => 'form-control' . ($errors->has('fechapago') ? ' is-invalid' : ''), 'placeholder' => 'Fechapago']) }}
            {!! $errors->first('fechapago', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>