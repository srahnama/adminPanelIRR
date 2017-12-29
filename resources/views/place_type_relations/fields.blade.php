<!-- Cat Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cat_id', 'Cat Id:') !!}
    {!! Form::number('cat_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Place Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('place_id', 'Place Id:') !!}
    {!! Form::number('place_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('placeTypeRelations.index') !!}" class="btn btn-default">Cancel</a>
</div>
