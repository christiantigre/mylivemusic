@extends('adminlte::page')

@section('content')
        <div class="row">

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ trans('adminlte::adminlte.Estate') }}</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/estate/create') }}" class="btn btn-success btn-sm" title="{{ trans('adminlte::adminlte.Add_New') }} Estate">
                            <i class="fa fa-plus" aria-hidden="true"></i> {{ trans('adminlte::adminlte.Add_New') }}
                        </a>

                        <form method="GET" action="{{ url('/admin/estate') }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="{{ trans('adminlte::adminlte.Search') }}..." value="{{ request('search') }}">
                                <span class="input-group-btn">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table id="state" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ trans('adminlte::adminlte.Estate') }}</th>
                                        <th>{{ trans('adminlte::adminlte.Detall') }}</th>
                                        <th>{{ trans('adminlte::adminlte.Active') }}</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                      <tr>
                                        <th>#</th>
                                        <th>{{ trans('adminlte::adminlte.Estate') }}</th>
                                        <th>{{ trans('adminlte::adminlte.Detall') }}</th>
                                        <th>{{ trans('adminlte::adminlte.Active') }}</th>
                                        <th>Actions</th>
                                      </tr>
                                </tfoot>
                                <tbody>
                                @foreach($estate as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->id }}</td>
                                        <td>{{ $item->estate }}</td>
                                        <td>{{ $item->detall }}</td>
                                        <td>
                                            @if(($item->active)=='1')
                                                <small class="label label-success">{{ trans('adminlte::adminlte.Active') }}</small>
                                            @else
                                                <small class="label label-danger">{{ trans('adminlte::adminlte.Inactive') }}</small>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ url('/admin/estate/' . $item->id) }}" title="{{ trans('adminlte::adminlte.View') }} Estate"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> {{ trans('adminlte::adminlte.View') }}</button></a>
                                            <a href="{{ url('/admin/estate/' . $item->id . '/edit') }}" title="{{ trans('adminlte::adminlte.Edit') }} Estate"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> {{ trans('adminlte::adminlte.Edit') }}</button></a>

                                            <form method="POST" action="{{ url('/admin/estate' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="{{ trans('adminlte::adminlte.Delete') }} Estate" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> {{ trans('adminlte::adminlte.Delete') }}</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{--
                            <div class="pagination-wrapper"> {!! $estate->appends(['search' => Request::get('search')])->render() !!} </div>
                                --}}
                        </div>

                    </div>
                </div>
            </div>
            @include('admin.sidebar')
        </div>
        <script type="text/javascript">
            //$(document).ready(function() {
                $('#state').DataTable();
                /*$('#state').DataTable( {
                  dom: 'Bfrtip',
                  buttons: [
                  'copy', 'csv', 'excel', 'pdf', 'print'
                  ]
                } );*/
             // } );
        </script>
@endsection
