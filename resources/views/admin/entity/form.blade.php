


<div class="form-group {{ $errors->has('en_name') ? 'has-error' : ''}}">
    <label for="en_name" class="col-md-4 control-label">{{ 'En Name' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="en_name" type="text" id="en_name" value="{{ $entity->en_name or ''}}" required>
        {!! $errors->first('en_name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('en_phone') ? 'has-error' : ''}}">
    <label for="en_phone" class="col-md-4 control-label">{{ 'En Phone' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="en_phone" type="text" id="en_phone" value="{{ $entity->en_phone or ''}}" required>
        {!! $errors->first('en_phone', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('en_cellphone') ? 'has-error' : ''}}">
    <label for="en_cellphone" class="col-md-4 control-label">{{ 'En Cellphone' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="en_cellphone" type="text" id="en_cellphone" value="{{ $entity->en_cellphone or ''}}" required>
        {!! $errors->first('en_cellphone', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('en_mail') ? 'has-error' : ''}}">
    <label for="en_mail" class="col-md-4 control-label">{{ 'En Mail' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="en_mail" type="text" id="en_mail" value="{{ $entity->en_mail or ''}}" >
        {!! $errors->first('en_mail', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('en_manager') ? 'has-error' : ''}}">
    <label for="en_manager" class="col-md-4 control-label">{{ 'En Manager' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="en_manager" type="text" id="en_manager" value="{{ $entity->en_manager or ''}}" required>
        {!! $errors->first('en_manager', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('en_datestart') ? 'has-error' : ''}}">
    <label for="en_datestart" class="col-md-4 control-label">{{ 'En Datestart' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="en_datestart" type="date" id="en_datestart" value="{{ $entity->en_datestart or ''}}" >
        {!! $errors->first('en_datestart', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('en_logo') ? 'has-error' : ''}}">
    <label for="en_logo" class="col-md-4 control-label">{{ 'En Logo' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="en_logo" type="textarea" id="en_logo" >{{ $entity->en_logo or ''}}</textarea>
        {!! $errors->first('en_logo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('en_slogan') ? 'has-error' : ''}}">
    <label for="en_slogan" class="col-md-4 control-label">{{ 'En Slogan' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="en_slogan" type="textarea" id="en_slogan" >{{ $entity->en_slogan or ''}}</textarea>
        {!! $errors->first('en_slogan', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('en_about') ? 'has-error' : ''}}">
    <label for="en_about" class="col-md-4 control-label">{{ 'En About' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="en_about" type="textarea" id="en_about" >{{ $entity->en_about or ''}}</textarea>
        {!! $errors->first('en_about', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('en_linkwebpage') ? 'has-error' : ''}}">
    <label for="en_linkwebpage" class="col-md-4 control-label">{{ 'En Linkwebpage' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="en_linkwebpage" type="textarea" id="en_linkwebpage" >{{ $entity->en_linkwebpage or ''}}</textarea>
        {!! $errors->first('en_linkwebpage', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('en_socialtwiter') ? 'has-error' : ''}}">
    <label for="en_socialtwiter" class="col-md-4 control-label">{{ 'En Socialtwiter' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="en_socialtwiter" type="textarea" id="en_socialtwiter" >{{ $entity->en_socialtwiter or ''}}</textarea>
        {!! $errors->first('en_socialtwiter', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('en_socialfacebook') ? 'has-error' : ''}}">
    <label for="en_socialfacebook" class="col-md-4 control-label">{{ 'En Socialfacebook' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="en_socialfacebook" type="textarea" id="en_socialfacebook" >{{ $entity->en_socialfacebook or ''}}</textarea>
        {!! $errors->first('en_socialfacebook', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('en_socialInstagram') ? 'has-error' : ''}}">
    <label for="en_socialInstagram" class="col-md-4 control-label">{{ 'En Socialinstagram' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="en_socialInstagram" type="textarea" id="en_socialInstagram" >{{ $entity->en_socialInstagram or ''}}</textarea>
        {!! $errors->first('en_socialInstagram', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('en_socialGoogleplus') ? 'has-error' : ''}}">
    <label for="en_socialGoogleplus" class="col-md-4 control-label">{{ 'En Socialgoogleplus' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="en_socialGoogleplus" type="textarea" id="en_socialGoogleplus" >{{ $entity->en_socialGoogleplus or ''}}</textarea>
        {!! $errors->first('en_socialGoogleplus', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('en_socialLikedIn') ? 'has-error' : ''}}">
    <label for="en_socialLikedIn" class="col-md-4 control-label">{{ 'En Sociallikedin' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="en_socialLikedIn" type="textarea" id="en_socialLikedIn" >{{ $entity->en_socialLikedIn or ''}}</textarea>
        {!! $errors->first('en_socialLikedIn', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('en_socialYoutube') ? 'has-error' : ''}}">
    <label for="en_socialYoutube" class="col-md-4 control-label">{{ 'En Socialyoutube' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="en_socialYoutube" type="textarea" id="en_socialYoutube" >{{ $entity->en_socialYoutube or ''}}</textarea>
        {!! $errors->first('en_socialYoutube', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('en_copyrigth') ? 'has-error' : ''}}">
    <label for="en_copyrigth" class="col-md-4 control-label">{{ 'En Copyrigth' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="en_copyrigth" type="textarea" id="en_copyrigth" >{{ $entity->en_copyrigth or ''}}</textarea>
        {!! $errors->first('en_copyrigth', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('en_yearEdition') ? 'has-error' : ''}}">
    <label for="en_yearEdition" class="col-md-4 control-label">{{ 'En Yearedition' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="en_yearEdition" type="text" id="en_yearEdition" value="{{ $entity->en_yearEdition or ''}}" >
        {!! $errors->first('en_yearEdition', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('en_latitude') ? 'has-error' : ''}}">
    <label for="en_latitude" class="col-md-4 control-label">{{ 'En Latitude' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="en_latitude" type="text" id="en_latitude" value="{{ $entity->en_latitude or ''}}" >
        {!! $errors->first('en_latitude', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('en_longitude') ? 'has-error' : ''}}">
    <label for="en_longitude" class="col-md-4 control-label">{{ 'En Longitude' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="en_longitude" type="text" id="en_longitude" value="{{ $entity->en_longitude or ''}}" >
        {!! $errors->first('en_longitude', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('en_coordenate') ? 'has-error' : ''}}">
    <label for="en_coordenate" class="col-md-4 control-label">{{ 'En Coordenate' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="en_coordenate" type="text" id="en_coordenate" value="{{ $entity->en_coordenate or ''}}" >
        {!! $errors->first('en_coordenate', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('en_mapembed') ? 'has-error' : ''}}">
    <label for="en_mapembed" class="col-md-4 control-label">{{ 'En Map Embed Code' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="en_mapembed" type="text" id="en_mapembed" value="{{ $entity->en_mapembed or ''}}" >
        {!! $errors->first('en_mapembed', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('active') ? 'has-error' : ''}}">
    <label for="active" class="col-md-4 control-label">{{ 'Active' }}</label>
    <div class="col-md-6">
        <div class="radio">
    <label><input name="active" type="radio" value="1" @if (isset($entity)) {{ (1 == $entity->active) ? 'checked' : '' }} @else {{ 'checked' }} @endif> Yes</label>
</div>
<div class="radio">
    <label><input name="active" type="radio" value="0" {{ (isset($entity) && 0 == $entity->active) ? 'checked' : '' }}> No</label>
</div>



        {!! $errors->first('active', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('country_id') ? 'has-error' : ''}}">
    <label for="country_id" class="col-md-4 control-label">{{ 'Country Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="country_id" type="number" id="country_id" value="{{ $entity->country_id or ''}}" >
        {!! $errors->first('country_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('estate_id') ? 'has-error' : ''}}">
    <label for="estate_id" class="col-md-4 control-label">{{ 'Estate Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="estate_id" type="number" id="estate_id" value="{{ $entity->estate_id or ''}}" >
        {!! $errors->first('estate_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or trans('adminlte::adminlte.Create') }}">
    </div>
</div>
