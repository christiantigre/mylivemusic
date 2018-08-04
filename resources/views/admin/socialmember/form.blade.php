<div class="form-group {{ $errors->has('sc_link') ? 'has-error' : ''}}">
    <label for="sc_link" class="col-md-4 control-label">{{ 'Sc Link' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="sc_link" type="textarea" id="sc_link" required>{{ $socialmember->sc_link or ''}}</textarea>
        {!! $errors->first('sc_link', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('sc_redsocial') ? 'has-error' : ''}}">
    <label for="sc_redsocial" class="col-md-4 control-label">{{ 'Sc Redsocial' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="sc_redsocial" type="text" id="sc_redsocial" value="{{ $socialmember->sc_redsocial or ''}}" >
        {!! $errors->first('sc_redsocial', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('active') ? 'has-error' : ''}}">
    <label for="active" class="col-md-4 control-label">{{ 'Active' }}</label>
    <div class="col-md-6">
        <div class="radio">
    <label><input name="active" type="radio" value="1" @if (isset($socialmember)) {{ (1 == $socialmember->active) ? 'checked' : '' }} @else {{ 'checked' }} @endif> Yes</label>
</div>
<div class="radio">
    <label><input name="active" type="radio" value="0" {{ (isset($socialmember) && 0 == $socialmember->active) ? 'checked' : '' }}> No</label>
</div>



        {!! $errors->first('active', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('member_id') ? 'has-error' : ''}}">
    <label for="member_id" class="col-md-4 control-label">{{ 'Member Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="member_id" type="number" id="member_id" value="{{ $socialmember->member_id or ''}}" >
        {!! $errors->first('member_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or trans('adminlte::adminlte.Create') }}">
    </div>
</div>
