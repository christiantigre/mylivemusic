@extends('adminlte::page')

@section('content')
        <div class="row">

            <div class="col-md-9">
                <div class="panel">
                    <div class="panel-heading">{{ trans('adminlte::adminlte.Edit') }} Entity #{{ $entity->id }}</div>
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

                        <form method="POST" action="{{ url('/admin/entity/' . $entity->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('admin.entity.form', ['submitButtonText' => trans('adminlte::adminlte.Update') ])

                        </form>

                    </div>
                </div>
            </div>
            @include('admin.sidebar')
        </div>
@endsection
