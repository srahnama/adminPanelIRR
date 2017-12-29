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

<!-- Theme Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('theme_id', 'Theme Id:') !!}
    {!! Form::number('theme_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tripThemeRelations.index') !!}" class="btn btn-default">Cancel</a>
</div>
