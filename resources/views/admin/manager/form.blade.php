<div class="form-group {{ $errors->has('mng_name') ? 'has-error' : ''}}">
    <label for="mng_name" class="col-md-4 control-label">{{ 'Mng Name' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="mng_name" type="text" id="mng_name" value="{{ $manager->mng_name or ''}}" required>
        {!! $errors->first('mng_name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('mng_lastname') ? 'has-error' : ''}}">
    <label for="mng_lastname" class="col-md-4 control-label">{{ 'Mng Lastname' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="mng_lastname" type="text" id="mng_lastname" value="{{ $manager->mng_lastname or ''}}" >
        {!! $errors->first('mng_lastname', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('mng_phone') ? 'has-error' : ''}}">
    <label for="mng_phone" class="col-md-4 control-label">{{ 'Mng Phone' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="mng_phone" type="text" id="mng_phone" value="{{ $manager->mng_phone or ''}}" >
        {!! $errors->first('mng_phone', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('mng_cellphone') ? 'has-error' : ''}}">
    <label for="mng_cellphone" class="col-md-4 control-label">{{ 'Mng Cellphone' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="mng_cellphone" type="text" id="mng_cellphone" value="{{ $manager->mng_cellphone or ''}}" >
        {!! $errors->first('mng_cellphone', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('mng_mail') ? 'has-error' : ''}}">
    <label for="mng_mail" class="col-md-4 control-label">{{ 'Mng Mail' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="mng_mail" type="text" id="mng_mail" value="{{ $manager->mng_mail or ''}}" >
        {!! $errors->first('mng_mail', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('mng_address') ? 'has-error' : ''}}">
    <label for="mng_address" class="col-md-4 control-label">{{ 'Mng Address' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="mng_address" type="text" id="mng_address" value="{{ $manager->mng_address or ''}}" >
        {!! $errors->first('mng_address', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('mng_avathar') ? 'has-error' : ''}}">
    <label for="mng_avathar" class="col-md-4 control-label">{{ 'Mng Avathar' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="mng_avathar" type="text" id="mng_avathar" value="{{ $manager->mng_avathar or ''}}" >
        {!! $errors->first('mng_avathar', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('active') ? 'has-error' : ''}}">
    <label for="active" class="col-md-4 control-label">{{ 'Active' }}</label>
    <div class="col-md-6">
        <div class="radio">
    <label><input name="active" type="radio" value="1" @if (isset($manager)) {{ (1 == $manager->active) ? 'checked' : '' }} @else {{ 'checked' }} @endif> Yes</label>
</div>
<div class="radio">
    <label><input name="active" type="radio" value="0" {{ (isset($manager) && 0 == $manager->active) ? 'checked' : '' }}> No</label>
</div>



        {!! $errors->first('active', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('country_id') ? 'has-error' : ''}}">
    <label for="country_id" class="col-md-4 control-label">{{ 'Country Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="country_id" type="number" id="country_id" value="{{ $manager->country_id or ''}}" >
        {!! $errors->first('country_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('estate_id') ? 'has-error' : ''}}">
    <label for="estate_id" class="col-md-4 control-label">{{ 'Estate Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="estate_id" type="number" id="estate_id" value="{{ $manager->estate_id or ''}}" >
        {!! $errors->first('estate_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or trans('adminlte::adminlte.Create') }}">
    </div>
</div>
