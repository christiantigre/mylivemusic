@extends('adminlte::page')

@section('content')
        <div class="row">

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Socialgroup {{ $socialgroup->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/socialgroup') }}" title="{{ trans('adminlte::adminlte.Back') }}"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{ trans('adminlte::adminlte.Back') }}</button></a>
                        <a href="{{ url('/admin/socialgroup/' . $socialgroup->id . '/edit') }}" title="{{ trans('adminlte::adminlte.Edit') }} Socialgroup"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> {{ trans('adminlte::adminlte.Edit') }}</button></a>

                        <form method="POST" action="{{ url('admin/socialgroup' . '/' . $socialgroup->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="{{ trans('adminlte::adminlte.Delete') }} Socialgroup" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> {{ trans('adminlte::adminlte.Delete') }}</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $socialgroup->id }}</td>
                                    </tr>
                                    <tr><th> Sc Link </th><td> {{ $socialgroup->sc_link }} </td></tr><tr><th> Sc Redsocial </th><td> {{ $socialgroup->sc_redsocial }} </td></tr><tr><th> Group Id </th><td> {{ $socialgroup->group_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            @include('admin.sidebar')
        </div>
@endsection
