<div class="form-group {{ $errors->has('sc_link') ? 'has-error' : ''}}">
    <label for="sc_link" class="col-md-4 control-label">{{ 'Sc Link' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="sc_link" type="textarea" id="sc_link" required>{{ $socialgroup->sc_link or ''}}</textarea>
        {!! $errors->first('sc_link', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('sc_redsocial') ? 'has-error' : ''}}">
    <label for="sc_redsocial" class="col-md-4 control-label">{{ 'Sc Redsocial' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="sc_redsocial" type="text" id="sc_redsocial" value="{{ $socialgroup->sc_redsocial or ''}}" >
        {!! $errors->first('sc_redsocial', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('group_id') ? 'has-error' : ''}}">
    <label for="group_id" class="col-md-4 control-label">{{ 'Group Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="group_id" type="number" id="group_id" value="{{ $socialgroup->group_id or ''}}" >
        {!! $errors->first('group_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or trans('adminlte::adminlte.Create') }}">
    </div>
</div>
