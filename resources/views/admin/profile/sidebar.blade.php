<div class="col-md-3">
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Mi Cuenta</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                @if(empty($administrador->img))
                    <img src="{{ asset('statics/avatar.jpg') }}" class="profile-user-img img-responsive img-circle" alt="User Image">
                @else
                    <img class="profile-user-img img-responsive img-circle" src="{{ asset($administrador->img) }}" style="width: 100px;height:100px;">
                @endif

                <h3 class="profile-username text-center">
                    {{ $administrador->name }} /
                    {{ $administrador->created_at }}
                </h3>

            <hr>

              <strong><i class="fa fa-user margin-r-5"></i> {{ $administrador->nombres }} {{ $administrador->apellidos }}
              </strong>

              <p class="text-muted">
                {{ $administrador->abrev }}
              </p>

              <hr>

              <strong><i class="fa fa-phone margin-r-5"></i> {{ $administrador->telefono }} / {{ $administrador->celular }}</strong>

              <hr>

              <strong><i class="fa fa-envelope margin-r-5"></i> {{ $administrador->email }}</strong>

              <hr>

              <strong><i class="fa fa-birthday-cake margin-r-5"></i> {{ $administrador->fecha_nacimiento }}</strong>              

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> {{ $administrador->direccion }}</strong>

              <p class="text-muted">
                @if(!empty($administrador->country_id))
                {{ $administrador->Country->country }}, {{ $administrador->Estate->estate }}
                @else
                s/n
                @endif
              </p>

              <hr>
              
            </div>
            <!-- /.box-body -->
          </div>
</div>
