@extends('adminlte::page')

@section('content')
        <div class="row">

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ trans('adminlte::adminlte.Country') }} {{ $country->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/country') }}" title="{{ trans('adminlte::adminlte.Back') }}"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{ trans('adminlte::adminlte.Back') }}</button></a>
                        <a href="{{ url('/admin/country/' . $country->id . '/edit') }}" title="{{ trans('adminlte::adminlte.Edit') }} {{ trans('adminlte::adminlte.Country') }}"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> {{ trans('adminlte::adminlte.Edit') }}</button></a>

                        <form method="POST" action="{{ url('admin/country' . '/' . $country->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="{{ trans('adminlte::adminlte.Delete') }} {{ trans('adminlte::adminlte.Country') }}" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> {{ trans('adminlte::adminlte.Delete') }}</button>
                        </form>
                        <br/>
                        <br/> 

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $country->id }}</td>
                                    </tr>
                                    <tr><th> {{ trans('adminlte::adminlte.Country') }} </th><td> {{ $country->country }} </td></tr><tr><th> {{ trans('adminlte::adminlte.Detall') }} </th><td> {{ $country->detall }} </td></tr>
                                    <tr><th> {{ trans('adminlte::adminlte.Active') }} </th><td> 
                                        @if(($country->activo)=='1')
                                                <small class="label label-success">{{ trans('adminlte::adminlte.Active') }}</small>
                                            @else
                                                <small class="label label-danger">{{ trans('adminlte::adminlte.Inactive') }}</small>
                                            @endif 
                                    </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            @include('admin.sidebar')
        </div>
@endsection
