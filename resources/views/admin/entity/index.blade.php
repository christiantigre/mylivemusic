@extends('adminlte::page')

@section('content')
        <div class="row">

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ trans('adminlte::adminlte.Entity') }}</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/entity/create') }}" class="btn btn-success btn-sm" title="{{ trans('adminlte::adminlte.Add_New') }} Entity">
                            <i class="fa fa-plus" aria-hidden="true"></i> {{ trans('adminlte::adminlte.Add_New') }}
                        </a>

                        <form method="GET" action="{{ url('/admin/entity') }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
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
                                        <th>#</th><th>En Name</th><th>En Phone</th><th>En Cellphone</th><th>En Mail</th><th>En Manager</th><th>En Datestart</th><th>En Logo</th><th>En Slogan</th><th>En About</th><th>En Linkwebpage</th><th>En Socialtwiter</th><th>En Socialfacebook</th><th>En SocialInstagram</th><th>En SocialGoogleplus</th><th>En SocialLikedIn</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($entity as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->id }}</td>
                                        <td>{{ $item->en_name }}</td><td>{{ $item->en_phone }}</td><td>{{ $item->en_cellphone }}</td><td>{{ $item->en_mail }}</td><td>{{ $item->en_manager }}</td><td>{{ $item->en_datestart }}</td><td>{{ $item->en_logo }}</td><td>{{ $item->en_slogan }}</td><td>{{ $item->en_about }}</td><td>{{ $item->en_linkwebpage }}</td><td>{{ $item->en_socialtwiter }}</td><td>{{ $item->en_socialfacebook }}</td><td>{{ $item->en_socialInstagram }}</td><td>{{ $item->en_socialGoogleplus }}</td><td>{{ $item->en_socialLikedIn }}</td>
                                        <td>
                                            <a href="{{ url('/admin/entity/' . $item->id) }}" title="{{ trans('adminlte::adminlte.View') }} Entity"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> {{ trans('adminlte::adminlte.View') }}</button></a>
                                            <a href="{{ url('/admin/entity/' . $item->id . '/edit') }}" title="{{ trans('adminlte::adminlte.Edit') }} Entity"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> {{ trans('adminlte::adminlte.Edit') }}</button></a>

                                            <form method="POST" action="{{ url('/admin/entity' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="{{ trans('adminlte::adminlte.Delete') }} Entity" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> {{ trans('adminlte::adminlte.Delete') }}</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $entity->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
            @include('admin.sidebar')
        </div>
@endsection
