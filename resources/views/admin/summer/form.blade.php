<div class="form-group {{ $errors->has('sm_time') ? 'has-error' : ''}}">
    <label for="sm_time" class="col-md-4 control-label">{{ 'Sm Time' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="sm_time" type="textarea" id="sm_time" >{{ $summer->sm_time or ''}}</textarea>
        {!! $errors->first('sm_time', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('sm_price') ? 'has-error' : ''}}">
    <label for="sm_price" class="col-md-4 control-label">{{ 'Sm Price' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="sm_price" type="text" id="sm_price" value="{{ $summer->sm_price or ''}}" >
        {!! $errors->first('sm_price', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('active') ? 'has-error' : ''}}">
    <label for="active" class="col-md-4 control-label">{{ 'Active' }}</label>
    <div class="col-md-6">
        <div class="radio">
    <label><input name="active" type="radio" value="1" @if (isset($summer)) {{ (1 == $summer->active) ? 'checked' : '' }} @else {{ 'checked' }} @endif> Yes</label>
</div>
<div class="radio">
    <label><input name="active" type="radio" value="0" {{ (isset($summer) && 0 == $summer->active) ? 'checked' : '' }}> No</label>
</div>



        {!! $errors->first('active', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('group_id') ? 'has-error' : ''}}">
    <label for="group_id" class="col-md-4 control-label">{{ 'Group Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="group_id" type="number" id="group_id" value="{{ $summer->group_id or ''}}" >
        {!! $errors->first('group_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('typepresentation_id') ? 'has-error' : ''}}">
    <label for="typepresentation_id" class="col-md-4 control-label">{{ 'Typepresentation Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="typepresentation_id" type="number" id="typepresentation_id" value="{{ $summer->typepresentation_id or ''}}" >
        {!! $errors->first('typepresentation_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or trans('adminlte::adminlte.Create') }}">
    </div>
</div>
