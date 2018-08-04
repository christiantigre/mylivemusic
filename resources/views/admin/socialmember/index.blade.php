@extends('adminlte::page')

@section('content')
        <div class="row">

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ trans('adminlte::adminlte.Socialmember') }}</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/socialmember/create') }}" class="btn btn-success btn-sm" title="{{ trans('adminlte::adminlte.Add_New') }} Socialmember">
                            <i class="fa fa-plus" aria-hidden="true"></i> {{ trans('adminlte::adminlte.Add_New') }}
                        </a>

                        <form method="GET" action="{{ url('/admin/socialmember') }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
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
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Sc Link</th><th>Sc Redsocial</th><th>Active</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($socialmember as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->id }}</td>
                                        <td>{{ $item->sc_link }}</td><td>{{ $item->sc_redsocial }}</td><td>{{ $item->active }}</td>
                                        <td>
                                            <a href="{{ url('/admin/socialmember/' . $item->id) }}" title="{{ trans('adminlte::adminlte.View') }} Socialmember"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> {{ trans('adminlte::adminlte.View') }}</button></a>
                                            <a href="{{ url('/admin/socialmember/' . $item->id . '/edit') }}" title="{{ trans('adminlte::adminlte.Edit') }} Socialmember"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> {{ trans('adminlte::adminlte.Edit') }}</button></a>

                                            <form method="POST" action="{{ url('/admin/socialmember' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="{{ trans('adminlte::adminlte.Delete') }} Socialmember" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> {{ trans('adminlte::adminlte.Delete') }}</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $socialmember->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
            @include('admin.sidebar')
        </div>
@endsection
