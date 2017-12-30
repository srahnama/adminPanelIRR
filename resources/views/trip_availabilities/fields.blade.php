<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::text('type', null, ['class' => 'form-control']) !!}
</div>

<!-- Trip Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('trip_id', 'Trip Id:') !!}
    {!! Form::number('trip_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Availability Field -->
<div class="form-group col-sm-6">
    {!! Form::label('availability', 'Availability:') !!}
    {!! Form::date('availability', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control']) !!}
</div>

<!-- Capacity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('capacity', 'Capacity:') !!}
    {!! Form::number('capacity', null, ['class' => 'form-control']) !!}
</div>

<!-- Sold Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sold', 'Sold:') !!}
    {!! Form::number('sold', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tripAvailabilities.index') !!}" class="btn btn-default">Cancel</a>
</div>
