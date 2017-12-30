<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Classification Field -->
<div class="form-group col-sm-6">
    {!! Form::label('classification', 'Classification:') !!}
    {!! Form::text('classification', null, ['class' => 'form-control']) !!}
</div>

<!-- Color Field -->
<div class="form-group col-sm-6">
    {!! Form::label('color', 'Color:') !!}
    {!! Form::text('color', null, ['class' => 'form-control']) !!}
</div>

<!-- Plate Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('plate_number', 'Plate Number:') !!}
    {!! Form::text('plate_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Wifi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('wifi', 'Wifi:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('wifi', false) !!}
        {!! Form::checkbox('wifi', '1', null) !!} 1
    </label>
</div>

<!-- Roof Rock Field -->
<div class="form-group col-sm-6">
    {!! Form::label('roof_rock', 'Roof Rock:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('roof_rock', false) !!}
        {!! Form::checkbox('roof_rock', '1', null) !!} 1
    </label>
</div>

<!-- Fee Day Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fee_day', 'Fee Day:') !!}
    {!! Form::number('fee_day', null, ['class' => 'form-control']) !!}
</div>

<!-- Fee Km Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fee_km', 'Fee Km:') !!}
    {!! Form::number('fee_km', null, ['class' => 'form-control']) !!}
</div>

<!-- Insurance Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('insurance_type', 'Insurance Type:') !!}
    {!! Form::text('insurance_type', null, ['class' => 'form-control']) !!}
</div>

<!-- Insurance Expiry Field -->
<div class="form-group col-sm-6">
    {!! Form::label('insurance_expiry', 'Insurance Expiry:') !!}
    {!! Form::date('insurance_expiry', null, ['class' => 'form-control']) !!}
</div>

<!-- Active Field -->
<div class="form-group col-sm-6">
    {!! Form::label('active', 'Active:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('active', false) !!}
        {!! Form::checkbox('active', '1', null) !!} 1
    </label>
</div>

<!-- Is Verify Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_verify', 'Is Verify:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_verify', false) !!}
        {!! Form::checkbox('is_verify', '1', null) !!} 1
    </label>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('userCars.index') !!}" class="btn btn-default">Cancel</a>
</div>
