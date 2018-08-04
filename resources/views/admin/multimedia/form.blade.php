<div class="form-group {{ $errors->has('multimedia') ? 'has-error' : ''}}">
    <label for="multimedia" class="col-md-4 control-label">{{ 'Multimedia' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="multimedia" type="text" id="multimedia" value="{{ $multimedia->multimedia or ''}}" >
        {!! $errors->first('multimedia', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('active') ? 'has-error' : ''}}">
    <label for="active" class="col-md-4 control-label">{{ 'Active' }}</label>
    <div class="col-md-6">
        <div class="radio">
    <label><input name="active" type="radio" value="1" @if (isset($multimedia)) {{ (1 == $multimedia->active) ? 'checked' : '' }} @else {{ 'checked' }} @endif> Yes</label>
</div>
<div class="radio">
    <label><input name="active" type="radio" value="0" {{ (isset($multimedia) && 0 == $multimedia->active) ? 'checked' : '' }}> No</label>
</div>



        {!! $errors->first('active', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or trans('adminlte::adminlte.Create') }}">
    </div>
</div>
