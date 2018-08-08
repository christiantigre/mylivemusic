

<div class="col-md-12">

    <div class="col-md-6">
        <div class="col-md-11">      
        <div class="form-group {{ $errors->has('pack_type') ? 'has-error' : ''}}">
                <label for="pack_type" class="control-label">{{ trans('adminlte::adminlte.Pack_Type') }}</label>
                <input class="form-control" name="pack_type" type="text" id="pack_type" value="{{ $typepack->pack_type or ''}}" >
                {!! $errors->first('pack_type', '<p class="help-block">:message</p>') !!}            
        </div>
        </div>

        <div class="col-md-11">     
        <div class="form-group {{ $errors->has('pack_price_suscription') ? 'has-error' : ''}}">
            <label for="pack_price_suscription" class="control-label">{{ trans('adminlte::adminlte.Price_Suscription') }}</label>
                <input class="form-control" name="pack_price_suscription" type="text" id="pack_price_suscription" value="{{ $typepack->pack_price_suscription or ''}}" >
                {!! $errors->first('pack_price_suscription', '<p class="help-block">:message</p>') !!}            
        </div>
        </div>

        <div class="col-md-11">     
        <div class="form-group {{ $errors->has('active') ? 'has-error' : ''}}">
            <label for="active" class="control-label">{{ trans('adminlte::adminlte.Active') }}</label>
                <div class="radio">
                    <label><input name="active" type="radio" value="1" @if (isset($typepack)) {{ (1 == $typepack->active) ? 'checked' : '' }} @else {{ 'checked' }} @endif> {{ trans('adminlte::adminlte.Yes') }}</label>
                </div>
                <div class="radio">
                    <label><input name="active" type="radio" value="0" {{ (isset($typepack) && 0 == $typepack->active) ? 'checked' : '' }}> {{ trans('adminlte::adminlte.No') }}</label>
                </div>
                {!! $errors->first('active', '<p class="help-block">:message</p>') !!}
        </div>        
        </div>        

    </div>

    <div class="col-md-6">
        <div class="col-md-11">
        <div class="form-group {{ $errors->has('pack_detall') ? 'has-error' : ''}}">
            <label for="pack_detall" class="control-label">{{ trans('adminlte::adminlte.DetallTypePack') }}</label>
                <input class="form-control" name="pack_detall" type="text" id="pack_detall" value="{{ $typepack->pack_detall or ''}}" >
                {!! $errors->first('pack_detall', '<p class="help-block">:message</p>') !!}
        </div>
        </div>

        <div class="col-md-11">        
        <div class="form-group {{ $errors->has('pack_price_month') ? 'has-error' : ''}}">
            <label for="pack_price_month" class="control-label">{{ trans('adminlte::adminlte.Price_Month') }}</label>
                <input class="form-control" name="pack_price_month" type="text" id="pack_price_month" value="{{ $typepack->pack_price_month or ''}}" >
                {!! $errors->first('pack_price_month', '<p class="help-block">:message</p>') !!}
        </div>
        </div>

        

        
    </div>

    <div class="col-md-12">
    <div class="form-group">
            <div class="col-md-offset-10">
                <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or trans('adminlte::adminlte.Create') }}">
            </div>
        </div>
    </div>
</div>



