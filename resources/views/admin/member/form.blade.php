<div class="form-group {{ $errors->has('mb_name') ? 'has-error' : ''}}">
    <label for="mb_name" class="col-md-4 control-label">{{ 'Mb Name' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="mb_name" type="text" id="mb_name" value="{{ $member->mb_name or ''}}" required>
        {!! $errors->first('mb_name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('mb_nickname') ? 'has-error' : ''}}">
    <label for="mb_nickname" class="col-md-4 control-label">{{ 'Mb Nickname' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="mb_nickname" type="text" id="mb_nickname" value="{{ $member->mb_nickname or ''}}" >
        {!! $errors->first('mb_nickname', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('gr_birthdar') ? 'has-error' : ''}}">
    <label for="gr_birthdar" class="col-md-4 control-label">{{ 'Gr Birthdar' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="gr_birthdar" type="text" id="gr_birthdar" value="{{ $member->gr_birthdar or ''}}" >
        {!! $errors->first('gr_birthdar', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('gr_mail') ? 'has-error' : ''}}">
    <label for="gr_mail" class="col-md-4 control-label">{{ 'Gr Mail' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="gr_mail" type="text" id="gr_mail" value="{{ $member->gr_mail or ''}}" >
        {!! $errors->first('gr_mail', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('gr_phone') ? 'has-error' : ''}}">
    <label for="gr_phone" class="col-md-4 control-label">{{ 'Gr Phone' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="gr_phone" type="text" id="gr_phone" value="{{ $member->gr_phone or ''}}" >
        {!! $errors->first('gr_phone', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('gr_cellphone') ? 'has-error' : ''}}">
    <label for="gr_cellphone" class="col-md-4 control-label">{{ 'Gr Cellphone' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="gr_cellphone" type="text" id="gr_cellphone" value="{{ $member->gr_cellphone or ''}}" >
        {!! $errors->first('gr_cellphone', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('gr_instrument') ? 'has-error' : ''}}">
    <label for="gr_instrument" class="col-md-4 control-label">{{ 'Gr Instrument' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="gr_instrument" type="text" id="gr_instrument" value="{{ $member->gr_instrument or ''}}" >
        {!! $errors->first('gr_instrument', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('gr_avathar') ? 'has-error' : ''}}">
    <label for="gr_avathar" class="col-md-4 control-label">{{ 'Gr Avathar' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="gr_avathar" type="text" id="gr_avathar" value="{{ $member->gr_avathar or ''}}" >
        {!! $errors->first('gr_avathar', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('gr_phrase') ? 'has-error' : ''}}">
    <label for="gr_phrase" class="col-md-4 control-label">{{ 'Gr Phrase' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="gr_phrase" type="text" id="gr_phrase" value="{{ $member->gr_phrase or ''}}" >
        {!! $errors->first('gr_phrase', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('gr_about') ? 'has-error' : ''}}">
    <label for="gr_about" class="col-md-4 control-label">{{ 'Gr About' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="gr_about" type="text" id="gr_about" value="{{ $member->gr_about or ''}}" >
        {!! $errors->first('gr_about', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('active') ? 'has-error' : ''}}">
    <label for="active" class="col-md-4 control-label">{{ 'Active' }}</label>
    <div class="col-md-6">
        <div class="radio">
    <label><input name="active" type="radio" value="1" @if (isset($member)) {{ (1 == $member->active) ? 'checked' : '' }} @else {{ 'checked' }} @endif> Yes</label>
</div>
<div class="radio">
    <label><input name="active" type="radio" value="0" {{ (isset($member) && 0 == $member->active) ? 'checked' : '' }}> No</label>
</div>



        {!! $errors->first('active', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('group_id') ? 'has-error' : ''}}">
    <label for="group_id" class="col-md-4 control-label">{{ 'Group Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="group_id" type="number" id="group_id" value="{{ $member->group_id or ''}}" >
        {!! $errors->first('group_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or trans('adminlte::adminlte.Create') }}">
    </div>
</div>
