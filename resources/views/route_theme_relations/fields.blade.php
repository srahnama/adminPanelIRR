<!-- Route Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('route_id', 'Route Id:') !!}
    {!! Form::number('route_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Route Theme Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('route_theme_id', 'Route Theme Id:') !!}
    {!! Form::number('route_theme_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('routeThemeRelations.index') !!}" class="btn btn-default">Cancel</a>
</div>
