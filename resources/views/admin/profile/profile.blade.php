@extends('adminlte::page')

@section('content')
    <!-- Content Header (Page header) -->
    
    <section class="content-header">
      <h1>
        Perfil
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin/home') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Perfil usuario</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body ">
              @if(empty($administrador->img))
              <img class="profile-user-img img-responsive img-circle" src="{{ asset('statics/avatar.jpg') }}" alt="User profile picture">
              @else
              <img class="profile-user-img img-responsive img-circle" src="{{ asset($administrador->img) }}" alt="User profile picture">
              @endif

              @if(empty($administrador->name))
              <h3 class="profile-username text-center">No Name</h3>
              @else
              <h3 class="profile-username text-center">{{ $administrador->name }}</h3>
              @endif

              
              @if(empty($administrador->abrev))
              <p class="text-muted text-center">Sin Cargo</p>
              @else
              <p class="text-muted text-center">{{ $administrador->abrev }}</p>
              @endif

              


              <a href="{{ url('/admin/settings/' . $administrador->id . '/edit') }}" title="Edit Card"><button class="btn btn-primary btn-block"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
              <br/>
              <a href="{{ url('/admin/settingscred/' . $administrador->id . '/edit_cred') }}" title="Edit Card"><button class="btn btn-primary btn-block"><i class="fa fa-lock" aria-hidden="true"></i> Editar Credenciales</button></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#cuenta" data-toggle="tab">Cuenta</a></li>
              <li><a href="#noticias" data-toggle="tab">Noticias</a></li>
              <li><a href="#notas" data-toggle="tab">Notas</a></li>
              <li><a href="#servicios" data-toggle="tab">Servicios</a></li>
              <li><a href="#productos" data-toggle="tab">Productos</a></li>
              <li><a href="#cursos" data-toggle="tab">Cursos</a></li>
            </ul>
            <div class="tab-content">
              <!--Cuenta-->
              <div class="active tab-pane" id="cuenta">
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    @if(empty($administrador->img))

              <img class="profile-user-img img-responsive img-circle" src="{{ asset('statics/avatar.jpg') }}" alt="User profile picture">
              @else

                    <img class="img-circle img-bordered-sm" src="{{ asset($administrador->img) }}" alt="user image">
              @endif
                        <span class="username">
                          <a href="#">
                            @if(empty($administrador->nombres))
              No Name
              @else
              {{ $administrador->nombres }}
              @endif
              @if(empty($administrador->apellidos))
              No App
              @else
              {{ $administrador->apellidos }}
              @endif
                          .</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">Creado - {{$administrador->created_at}}</span>
                  </div>
                  <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Fecha nacimiento</b> <a class="pull-right">
                     @if(empty($administrador->fecha_nacimiento))
                     -
                    @else
                    {{ $administrador->fecha_nacimiento }}
                    @endif
                  </a>
                </li>
                <li class="list-group-item">
                  <b>Telefono</b> <a class="pull-right">
                    @if(empty($administrador->telefono))
                     -
                    @else
                    {{ $administrador->telefono }}
                    @endif
                  </a>
                </li>
                <li class="list-group-item">
                  <b>Celular</b> <a class="pull-right">
                    @if(empty($administrador->celular))
                     -
                    @else
                    {{ $administrador->celular }}
                    @endif
                  </a>
                </li>
                <li class="list-group-item">
                  <b>Correo</b> <a class="pull-right">
                    @if(empty($administrador->email))
                     -
                    @else
                    {{ $administrador->email }}
                    @endif
                  </a>
                </li>
                <li class="list-group-item">
                  <b>Título</b> <a class="pull-right">
                    @if(empty($administrador->abrev))
                     -
                    @else
                    {{ $administrador->abrev }}
                    @endif
                  </a>
                </li>
                <li class="list-group-item">
                  <b>Pais</b> <a class="pull-right">
                    @if(empty($administrador->country_id))
                     -
                    @else
                    {{ $administrador->Country->country }}
                    @endif
                  </a>
                </li>                
                <li class="list-group-item">
                  <b>Ciudad</b> <a class="pull-right">
                    @if(empty($administrador->estate_id))
                     -
                    @else
                    {{ $administrador->Estate->estate }}
                    @endif
                  </a>
                </li> 
                <li class="list-group-item">
                  <b>Dirección</b> <a class="pull-right">
                    @if(empty($administrador->direccion))
                     -
                    @else
                    {{ $administrador->direccion }}
                    @endif
                  </a>
                </li>              
                <li class="list-group-item">
                  <b>Estado</b> <a class="pull-right">
                    @if(($administrador->activo)=='1')
                      <span class="label label-success">Activado</span>
                    @else          
                    <span class="label label-warning">Desactivado</span>
                    @endif
                  </a>
                </li>
              </ul>

                  

                </div>
                <!-- /.post -->
              </div>
              <!--Fin cuenta-->

              <div class="tab-pane" id="noticias">
                
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="notas">


              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="servicios">
                
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="productos">
                
              </div>

              <div class="tab-pane" id="cursos">
                
              </div>


            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

@endsection