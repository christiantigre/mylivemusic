@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Perfíl #{{ $administrador->name }}</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/settings') }}" title="{{ trans('adminlte::adminlte.Back') }}"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{ trans('adminlte::adminlte.Back') }}</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($administrador, [
                            'method' => 'PATCH',
                            'url' => ['/admin/settings', $administrador->id],'enctype'=>'multipart/form-data',
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        <div class="form-group {{ $errors->has('nombres') ? 'has-error' : ''}}">
    {!! Form::label('nombres', 'Nombres', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nombres', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nombres', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('apellidos') ? 'has-error' : ''}}">
    {!! Form::label('apellidos', 'Apellidos', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('apellidos', null, ['class' => 'form-control']) !!}
        {!! $errors->first('apellidos', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('telefono') ? 'has-error' : ''}}">
    {!! Form::label('telefono', 'Telefono', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
        {!! $errors->first('telefono', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('celular') ? 'has-error' : ''}}">
    {!! Form::label('celular', 'Celular', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('celular', null, ['class' => 'form-control']) !!}
        {!! $errors->first('celular', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('feha_nacimiento') ? 'has-error' : ''}}">
    {!! Form::label('feha_nacimiento', 'Fecha de nacimiento', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('fecha_nacimiento', null, ['class' => 'form-control input-md date','placeholder'=>'','id'=>'datepicker']) !!}
        {!! $errors->first('feha_nacimiento', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('pais') ? 'has-error' : ''}}">
    {!! Form::label('pais', 'Pais', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('pais', null, ['class' => 'form-control']) !!}
        {!! $errors->first('pais', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('ciudad') ? 'has-error' : ''}}">
    {!! Form::label('ciudad', 'Ciudad', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('ciudad', null, ['class' => 'form-control']) !!}
        {!! $errors->first('ciudad', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('direccion') ? 'has-error' : ''}}">
    {!! Form::label('direccion', 'Dirección', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
        {!! $errors->first('direccion', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('abrev') ? 'has-error' : ''}}">
    {!! Form::label('abrev', 'Abreviatura cargo', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('abrev', null, ['class' => 'form-control']) !!}
        {!! $errors->first('abrev', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('img') ? 'has-error' : ''}}">
    {!! Form::label('img', 'Imagen', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
         {!! Form::File('img', null, ['class' => 'form-control','accept'=>'image/*']) !!}
        {!! $errors->first('img', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group {{ $errors->has('activo') ? 'has-error' : ''}}">
    <label for="activo" class="col-md-4 control-label">{{ 'Cuenta activa' }}</label>
    <div class="col-md-6">
        <div class="radio">
    <label>
        <input name="activo" type="radio" value="0" {{ (isset($administrador) && 0 == $administrador->activo) ? 'checked' : '' }}> No</label>
</div>
<div class="radio">
    <label>
        <input name="activo" type="radio" value="1" @if (isset($administrador)) {{ (1 == $administrador->activo) ? 'checked' : '' }} @else {{ 'checked' }} @endif> Yes</label>
</div>
        {!! $errors->first('activo', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : trans('adminlte::adminlte.Update') , ['class' => 'btn btn-primary']) !!}
    </div>
</div>


                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    $('.date').datepicker({  
       format: 'yyyy-mm-dd'
     });  
</script> 
@endsection