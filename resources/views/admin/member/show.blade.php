@extends('adminlte::page')

@section('content')
        <div class="row">

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Member {{ $member->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/member') }}" title="{{ trans('adminlte::adminlte.Back') }}"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{ trans('adminlte::adminlte.Back') }}</button></a>
                        <a href="{{ url('/admin/member/' . $member->id . '/edit') }}" title="{{ trans('adminlte::adminlte.Edit') }} Member"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> {{ trans('adminlte::adminlte.Edit') }}</button></a>

                        <form method="POST" action="{{ url('admin/member' . '/' . $member->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="{{ trans('adminlte::adminlte.Delete') }} Member" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> {{ trans('adminlte::adminlte.Delete') }}</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $member->id }}</td>
                                    </tr>
                                    <tr><th> Mb Name </th><td> {{ $member->mb_name }} </td></tr><tr><th> Mb Nickname </th><td> {{ $member->mb_nickname }} </td></tr><tr><th> Gr Birthdar </th><td> {{ $member->gr_birthdar }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            @include('admin.sidebar')
        </div>
@endsection
