@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ trans('adminlte::adminlte.Edit') }} {{ trans('adminlte::adminlte.Credentials') }} #{{ $administrador->name }}</div>
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
                            'method' => 'POST',
                            'url' => ['/admin/settingscred', $administrador->id,'upcredentials'],'enctype'=>'multipart/form-data',
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        <div class="form-group {{ $errors->has('nombres') ? 'has-error' : ''}}">
    {!! Form::label('nombres',  trans('adminlte::adminlte.Username') , ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nombres', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    {!! Form::label('email',  trans('adminlte::adminlte.Email') , ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
    {!! Form::label('password', trans('adminlte::adminlte.Password'), ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {{--
        {!! Form::password('password', null, ['class' => 'form-control']) !!}
            --}}
        <input id="password" name="password" type="password" placeholder="{{ trans('adminlte::adminlte.Password') }}" class="form-control input-md" required=""> 
        {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : ''}}">
    {!! Form::label('password_confirmation', trans('adminlte::adminlte.Password_confirmed'), ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {{--
        {!! Form::password('password_confirmation', null, ['class' => 'form-control']) !!}
            --}}
        <input id="password_confirmation" name="password_confirmation" type="password" placeholder="{{ trans('adminlte::adminlte.Password') }}" class="form-control input-md" required=""> 
        {!! $errors->first('password_confirmation', '<p class="help-block">:message</p>') !!}
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
@endsection