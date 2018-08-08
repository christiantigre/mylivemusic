@extends('adminlte::page')

@section('content')
        <div class="row">

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Manager {{ $manager->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/manager') }}" title="{{ trans('adminlte::adminlte.Back') }}"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{ trans('adminlte::adminlte.Back') }}</button></a>
                        <a href="{{ url('/admin/manager/' . $manager->id . '/edit') }}" title="{{ trans('adminlte::adminlte.Edit') }} Manager"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> {{ trans('adminlte::adminlte.Edit') }}</button></a>
                        {{--
                        <form method="POST" action="{{ url('admin/manager' . '/' . $manager->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="{{ trans('adminlte::adminlte.Delete') }} Manager" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> {{ trans('adminlte::adminlte.Delete') }}</button>
                        </form>
                            --}}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th> {{ trans('adminlte::adminlte.Username') }} </th><td> {{ $manager->name }} </td>
                                    </tr>
                                    <tr>
                                        <th> {{ trans('adminlte::adminlte.Email') }} </th><td>{{ $manager->email }}</td>
                                    </tr>
                                    <tr>
                                        <th> {{ trans('adminlte::adminlte.Names') }} </th><td> {{ $manager->mng_name }} </td>
                                    </tr>
                                    <tr>
                                        <th> {{ trans('adminlte::adminlte.Lastnames') }} </th><td> {{ $manager->mng_lastname }} </td>
                                    </tr>
                                    <tr>
                                        <th> {{ trans('adminlte::adminlte.Contacts') }} </th><td> {{ $manager->mng_phone }} / {{ $manager->mng_cellphone }} </td>
                                    </tr>
                                    <tr>
                                        <th> {{ trans('adminlte::adminlte.Address') }} </th><td> 
                                        @if(empty($manager->country_id))
                                         -
                                        @else
                                        {{ $manager->Country->country }}
                                        @endif,@if(empty($manager->estate_id))
                                         -
                                        @else
                                        {{ $manager->Estate->estate }}
                                        @endif,{{ $manager->mng_address }} 
                                    </td>
                                    </tr>
                                    <tr>
                                        <th> {{ trans('adminlte::adminlte.Image') }} </th><td> {{ $manager->mng_phone }} </td>
                                    </tr>
                                    <tr>
                                        <th> {{ trans('adminlte::adminlte.Active') }} </th><td> {{ $manager->active }} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            @include('admin.sidebar')
        </div>
@endsection
