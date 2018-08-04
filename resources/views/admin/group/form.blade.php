<div class="form-group {{ $errors->has('gr_name') ? 'has-error' : ''}}">
    <label for="gr_name" class="col-md-4 control-label">{{ 'Gr Name' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="gr_name" type="text" id="gr_name" value="{{ $group->gr_name or ''}}" required>
        {!! $errors->first('gr_name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('gr_datestart') ? 'has-error' : ''}}">
    <label for="gr_datestart" class="col-md-4 control-label">{{ 'Gr Datestart' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="gr_datestart" type="text" id="gr_datestart" value="{{ $group->gr_datestart or ''}}" >
        {!! $errors->first('gr_datestart', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('gr_detall') ? 'has-error' : ''}}">
    <label for="gr_detall" class="col-md-4 control-label">{{ 'Gr Detall' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="gr_detall" type="text" id="gr_detall" value="{{ $group->gr_detall or ''}}" >
        {!! $errors->first('gr_detall', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('gr_slogan') ? 'has-error' : ''}}">
    <label for="gr_slogan" class="col-md-4 control-label">{{ 'Gr Slogan' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="gr_slogan" type="text" id="gr_slogan" value="{{ $group->gr_slogan or ''}}" >
        {!! $errors->first('gr_slogan', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('gr_logo') ? 'has-error' : ''}}">
    <label for="gr_logo" class="col-md-4 control-label">{{ 'Gr Logo' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="gr_logo" type="text" id="gr_logo" value="{{ $group->gr_logo or ''}}" >
        {!! $errors->first('gr_logo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('gr_email') ? 'has-error' : ''}}">
    <label for="gr_email" class="col-md-4 control-label">{{ 'Gr Email' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="gr_email" type="text" id="gr_email" value="{{ $group->gr_email or ''}}" >
        {!! $errors->first('gr_email', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('gr_about') ? 'has-error' : ''}}">
    <label for="gr_about" class="col-md-4 control-label">{{ 'Gr About' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="gr_about" type="text" id="gr_about" value="{{ $group->gr_about or ''}}" >
        {!! $errors->first('gr_about', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('gr_phone') ? 'has-error' : ''}}">
    <label for="gr_phone" class="col-md-4 control-label">{{ 'Gr Phone' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="gr_phone" type="text" id="gr_phone" value="{{ $group->gr_phone or ''}}" >
        {!! $errors->first('gr_phone', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('gr_cellphone') ? 'has-error' : ''}}">
    <label for="gr_cellphone" class="col-md-4 control-label">{{ 'Gr Cellphone' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="gr_cellphone" type="text" id="gr_cellphone" value="{{ $group->gr_cellphone or ''}}" >
        {!! $errors->first('gr_cellphone', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('gr_webpage') ? 'has-error' : ''}}">
    <label for="gr_webpage" class="col-md-4 control-label">{{ 'Gr Webpage' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="gr_webpage" type="text" id="gr_webpage" value="{{ $group->gr_webpage or ''}}" >
        {!! $errors->first('gr_webpage', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('pais') ? 'has-error' : ''}}">
                            {!! Form::label('pais', trans('adminlte::adminlte.Country'), ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {{--
                                    {!! Form::text('pais', null, ['class' => 'form-control']) !!}
                                    --}}
                                    {!! Form::select('country_id', $countries, null, ['class' => 'form-control','id'=>'country_id']) !!}

                                    {!! $errors->first('pais', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('ciudad') ? 'has-error' : ''}}">
                                {!! Form::label('ciudad', trans('adminlte::adminlte.City'), ['class' => 'col-md-4 control-label']) !!}
                                <div class="col-md-6">
                                    {{--
                                        {!! Form::text('ciudad', null, ['class' => 'form-control']) !!}
                                        {!! Form::select('estate_id', $estatus, null, ['class' => 'form-control','id'=>'estate_id']) !!}
                                        --}}

                                        {!! Form::select('estate_id', [],$estatus,['class' => 'form-control','placeholder' => 'Seleccione un pais...','id'=>'estate_id'])!!}

                                        {!! $errors->first('ciudad', '<p class="help-block">:message</p>') !!}
                                    </div>
                                </div><div class="form-group {{ $errors->has('active') ? 'has-error' : ''}}">
    <label for="active" class="col-md-4 control-label">{{ 'Active' }}</label>
    <div class="col-md-6">
        <div class="radio">
    <label><input name="active" type="radio" value="1" @if (isset($group)) {{ (1 == $group->active) ? 'checked' : '' }} @else {{ 'checked' }} @endif> Yes</label>
</div>
<div class="radio">
    <label><input name="active" type="radio" value="0" {{ (isset($group) && 0 == $group->active) ? 'checked' : '' }}> No</label>
</div>



        {!! $errors->first('active', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('manager_id') ? 'has-error' : ''}}">
    <label for="manager_id" class="col-md-4 control-label">{{ 'Manager Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="manager_id" type="number" id="manager_id" value="{{ $group->manager_id or ''}}" >
        {!! $errors->first('manager_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or trans('adminlte::adminlte.Create') }}">
    </div>
</div>
<script>
                $('#country_id').change(function(e) {
                    var parent = e.target.value;
                    $.get('/categories/children?parent=' + parent, function(data) {
                        $('#estate_id').empty();
                        $.each(data, function(key, value) {
                            var option = $("<option></option>")
                            .attr("value", key)                         
                            .text(value);

                            $('#estate_id').append(option);
                        });
                    });
                });
            </script>