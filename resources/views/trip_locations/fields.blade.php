<!-- Trip Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('trip_type', 'Trip Type:') !!}
    {!! Form::text('trip_type', null, ['class' => 'form-control']) !!}
</div>

<!-- Trip Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('trip_id', 'Trip Id:') !!}
    {!! Form::number('trip_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Location Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('location_id', 'Location Id:') !!}
    {!! Form::number('location_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Order Field -->
<div class="form-group col-sm-6">
    {!! Form::label('order', 'Order:') !!}
    {!! Form::number('order', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tripLocations.index') !!}" class="btn btn-default">Cancel</a>
</div>
