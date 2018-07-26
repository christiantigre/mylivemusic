<div class="form-group {{ $errors->has('estate') ? 'has-error' : ''}}">
    <label for="estate" class="col-md-4 control-label">{{ trans('adminlte::adminlte.Estate') }}</label>
    <div class="col-md-6">
        <input class="form-control" name="estate" type="text" id="estate" value="{{ $estate->estate or ''}}" required>
        {!! $errors->first('estate', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('detall') ? 'has-error' : ''}}">
    <label for="detall" class="col-md-4 control-label">{{ trans('adminlte::adminlte.Detall') }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="detall" type="textarea" id="detall" required>{{ $estate->detall or ''}}</textarea>
        {!! $errors->first('detall', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('active') ? 'has-error' : ''}}">
    <label for="active" class="col-md-4 control-label">{{ trans('adminlte::adminlte.Active') }}</label>
    <div class="col-md-6">
        <div class="radio">
    <label><input name="active" type="radio" value="1" @if (isset($estate)) {{ (1 == $estate->active) ? 'checked' : '' }} @else {{ 'checked' }} @endif> Yes</label>
</div>
<div class="radio">
    <label><input name="active" type="radio" value="0" {{ (isset($estate) && 0 == $estate->active) ? 'checked' : '' }}> No</label>
</div>



        {!! $errors->first('active', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('country_id') ? 'has-error' : ''}}">
    <label for="country_id" class="col-md-4 control-label">{{ trans('adminlte::adminlte.Countries') }}</label>
    <div class="col-md-6">
        {!! Form::select('country_id', $countries, null, ['class' => 'form-control','id'=>'country_id']) !!}
        {!! $errors->first('country_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or trans('adminlte::adminlte.Create') }}">
    </div>
</div>
