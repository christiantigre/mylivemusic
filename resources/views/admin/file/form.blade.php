<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="col-md-4 control-label">{{ 'Title' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="title" type="text" id="title" value="{{ $file->title or ''}}" required>
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('subtitle') ? 'has-error' : ''}}">
    <label for="subtitle" class="col-md-4 control-label">{{ 'Subtitle' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="subtitle" type="text" id="subtitle" value="{{ $file->subtitle or ''}}" >
        {!! $errors->first('subtitle', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('path_file') ? 'has-error' : ''}}">
    <label for="path_file" class="col-md-4 control-label">{{ 'Path File' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="path_file" type="text" id="path_file" value="{{ $file->path_file or ''}}" >
        {!! $errors->first('path_file', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('link_media') ? 'has-error' : ''}}">
    <label for="link_media" class="col-md-4 control-label">{{ 'Link Media' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="link_media" type="text" id="link_media" value="{{ $file->link_media or ''}}" >
        {!! $errors->first('link_media', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('detall') ? 'has-error' : ''}}">
    <label for="detall" class="col-md-4 control-label">{{ 'Detall' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="detall" type="text" id="detall" value="{{ $file->detall or ''}}" >
        {!! $errors->first('detall', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('active') ? 'has-error' : ''}}">
    <label for="active" class="col-md-4 control-label">{{ 'Active' }}</label>
    <div class="col-md-6">
        <div class="radio">
    <label><input name="active" type="radio" value="1" @if (isset($file)) {{ (1 == $file->active) ? 'checked' : '' }} @else {{ 'checked' }} @endif> Yes</label>
</div>
<div class="radio">
    <label><input name="active" type="radio" value="0" {{ (isset($file) && 0 == $file->active) ? 'checked' : '' }}> No</label>
</div>

{!! $errors->first('active', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('multimedia_id') ? 'has-error' : ''}}">
{!! Form::label('multimedia_id', trans('adminlte::adminlte.Multimedium'), ['class' => 'col-md-4 control-label']) !!}
<div class="col-md-6">
    {{--
        {!! Form::text('multimedia_id', null, ['class' => 'form-control']) !!}
        --}}
        {!! Form::select('multimedia_id', $tipos, null, ['class' => 'form-control','id'=>'multimedia_id']) !!}

        {!! $errors->first('multimedia_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or trans('adminlte::adminlte.Create') }}">
    </div>
</div>
