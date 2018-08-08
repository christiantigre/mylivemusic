@extends('adminlte::page')

@section('content')
        <div class="row">

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Entity {{ $entity->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/entity') }}" title="{{ trans('adminlte::adminlte.Back') }}"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{ trans('adminlte::adminlte.Back') }}</button></a>
                        <a href="{{ url('/admin/entity/' . $entity->id . '/edit') }}" title="{{ trans('adminlte::adminlte.Edit') }} Entity"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> {{ trans('adminlte::adminlte.Edit') }}</button></a>

                        <form method="POST" action="{{ url('admin/entity' . '/' . $entity->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="{{ trans('adminlte::adminlte.Delete') }} Entity" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> {{ trans('adminlte::adminlte.Delete') }}</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $entity->id }}</td>
                                    </tr>
                                    <tr><th> En Name </th><td> {{ $entity->en_name }} </td></tr><tr><th> En Phone </th><td> {{ $entity->en_phone }} </td></tr><tr><th> En Cellphone </th><td> {{ $entity->en_cellphone }} </td></tr><tr><th> En Mail </th><td> {{ $entity->en_mail }} </td></tr><tr><th> En Manager </th><td> {{ $entity->en_manager }} </td></tr><tr><th> En Datestart </th><td> {{ $entity->en_datestart }} </td></tr><tr><th> En Logo </th><td> {{ $entity->en_logo }} </td></tr><tr><th> En Slogan </th><td> {{ $entity->en_slogan }} </td></tr><tr><th> En About </th><td> {{ $entity->en_about }} </td></tr><tr><th> En Linkwebpage </th><td> {{ $entity->en_linkwebpage }} </td></tr><tr><th> En Socialtwiter </th><td> {{ $entity->en_socialtwiter }} </td></tr><tr><th> En Socialfacebook </th><td> {{ $entity->en_socialfacebook }} </td></tr><tr><th> En SocialInstagram </th><td> {{ $entity->en_socialInstagram }} </td></tr><tr><th> En SocialGoogleplus </th><td> {{ $entity->en_socialGoogleplus }} </td></tr><tr><th> En SocialLikedIn </th><td> {{ $entity->en_socialLikedIn }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            @include('admin.sidebar')
        </div>
@endsection
