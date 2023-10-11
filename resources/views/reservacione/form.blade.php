<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('cliente_id') }}
            {{ Form::text('cliente_id', $reservacione->cliente_id, ['class' => 'form-control' . ($errors->has('cliente_id') ? ' is-invalid' : ''), 'placeholder' => 'Cliente Id']) }}
            {!! $errors->first('cliente_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ruta_id') }}
            {{ Form::text('ruta_id', $reservacione->ruta_id, ['class' => 'form-control' . ($errors->has('ruta_id') ? ' is-invalid' : ''), 'placeholder' => 'Ruta Id']) }}
            {!! $errors->first('ruta_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechainicio') }}
            {{ Form::text('fechainicio', $reservacione->fechainicio, ['class' => 'form-control' . ($errors->has('fechainicio') ? ' is-invalid' : ''), 'placeholder' => 'Fechainicio']) }}
            {!! $errors->first('fechainicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechafin') }}
            {{ Form::text('fechafin', $reservacione->fechafin, ['class' => 'form-control' . ($errors->has('fechafin') ? ' is-invalid' : ''), 'placeholder' => 'Fechafin']) }}
            {!! $errors->first('fechafin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('preciobase') }}
            {{ Form::text('preciobase', $reservacione->preciobase, ['class' => 'form-control' . ($errors->has('preciobase') ? ' is-invalid' : ''), 'placeholder' => 'Preciobase']) }}
            {!! $errors->first('preciobase', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidadpasajeros') }}
            {{ Form::text('cantidadpasajeros', $reservacione->cantidadpasajeros, ['class' => 'form-control' . ($errors->has('cantidadpasajeros') ? ' is-invalid' : ''), 'placeholder' => 'Cantidadpasajeros']) }}
            {!! $errors->first('cantidadpasajeros', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estadoreserva') }}
            {{ Form::text('estadoreserva', $reservacione->estadoreserva, ['class' => 'form-control' . ($errors->has('estadoreserva') ? ' is-invalid' : ''), 'placeholder' => 'Estadoreserva']) }}
            {!! $errors->first('estadoreserva', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('costo_total') }}
            {{ Form::text('costo_total', $reservacione->costo_total, ['class' => 'form-control' . ($errors->has('costo_total') ? ' is-invalid' : ''), 'placeholder' => 'Costo Total']) }}
            {!! $errors->first('costo_total', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>