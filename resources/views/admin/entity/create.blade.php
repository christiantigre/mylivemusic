@extends('adminlte::page')

@section('content')


    <!-- Content Header (Page header) -->
    <section class="content-header">
        <a href="{{ url('/admin/entity') }}" title="{{ trans('adminlte::adminlte.Back') }}"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{ trans('adminlte::adminlte.Back') }}</button></a>
      <h1>
        {{ trans('adminlte::adminlte.Create') }} {{ trans('adminlte::adminlte.Add_New') }} 
        <small>{{ trans('adminlte::adminlte.Entity') }}</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('admin/administracion') }}"><i class="fa fa-dashboard"></i> {{ trans('adminlte::adminlte.Home') }}</a></li>
        <li><a href="{{ url('admin/entity') }}">{{ trans('adminlte::adminlte.Entity') }}</a></li>
        <li class="active">{{ trans('adminlte::adminlte.Edit') }}</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <br />
        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif


                        {!! Form::open(['url' => '/admin/country', 'class' => '', 'enctype'=>'multipart/form-data' , 'files' => true, 'method'=>'POST', 'accept-charset'=>'UTFF-8']) !!}

                            @include ('admin.entity.formedit')

                        {!! Form::close() !!}


    </section>
    <!-- /.content -->
  

        <div class="row">

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ trans('adminlte::adminlte.Create') }} {{ trans('adminlte::adminlte.Add_New') }} Entity</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/entity') }}" title="{{ trans('adminlte::adminlte.Back') }}"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{ trans('adminlte::adminlte.Back') }}</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/admin/entity') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('admin.entity.form')

                        </form>

                    </div>
                </div>
            </div>
            @include('admin.sidebar')
        </div>
@endsection
