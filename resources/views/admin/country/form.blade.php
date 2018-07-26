<div class="form-group {{ $errors->has('country') ? 'has-error' : ''}}">
    <label for="country" class="col-md-4 control-label"> {{ trans('adminlte::adminlte.Country') }}</label>
    <div class="col-md-6">
        <input class="form-control" name="country" type="text" id="country" value="{{ $country->country or ''}}" required>
        {!! $errors->first('country', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('detall') ? 'has-error' : ''}}">
    <label for="detall" class="col-md-4 control-label">{{ trans('adminlte::adminlte.Detall') }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="detall" type="textarea" id="detall" required>{{ $country->detall or ''}}</textarea>
        {!! $errors->first('detall', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('activo') ? 'has-error' : ''}}">
    <label for="activo" class="col-md-4 control-label">{{ 'Activo' }}</label>
    <div class="col-md-6">
        <div class="radio">
    <label><input name="activo" type="radio" value="1" {{ (isset($country) && 1 == $country->activo) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="activo" type="radio" value="0" @if (isset($country)) {{ (0 == $country->activo) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
        {!! $errors->first('activo', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or  trans('adminlte::adminlte.Create')  }}">
    </div>
</div>
