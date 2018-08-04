<div class="form-group {{ $errors->has('item_pack') ? 'has-error' : ''}}">
    <label for="item_pack" class="col-md-4 control-label">{{ 'Item Pack' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="item_pack" type="text" id="item_pack" value="{{ $detallpack->item_pack or ''}}" required>
        {!! $errors->first('item_pack', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('active') ? 'has-error' : ''}}">
    <label for="active" class="col-md-4 control-label">{{ 'Active' }}</label>
    <div class="col-md-6">
        <div class="radio">
    <label><input name="active" type="radio" value="1" @if (isset($detallpack)) {{ (1 == $detallpack->active) ? 'checked' : '' }} @else {{ 'checked' }} @endif> Yes</label>
</div>
<div class="radio">
    <label><input name="active" type="radio" value="0" {{ (isset($detallpack) && 0 == $detallpack->active) ? 'checked' : '' }}> No</label>
</div>



        {!! $errors->first('active', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('typepack_id') ? 'has-error' : ''}}">
    <label for="typepack_id" class="col-md-4 control-label">{{ 'Typepack Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="typepack_id" type="number" id="typepack_id" value="{{ $detallpack->typepack_id or ''}}" >
        {!! $errors->first('typepack_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or trans('adminlte::adminlte.Create') }}">
    </div>
</div>
