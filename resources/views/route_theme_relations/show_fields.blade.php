<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $routeThemeRelation->id !!}</p>
</div>

<!-- Route Id Field -->
<div class="form-group">
    {!! Form::label('route_id', 'Route Id:') !!}
    <p>{!! $routeThemeRelation->route_id !!}</p>
</div>

<!-- Route Theme Id Field -->
<div class="form-group">
    {!! Form::label('route_theme_id', 'Route Theme Id:') !!}
    <p>{!! $routeThemeRelation->route_theme_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $routeThemeRelation->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $routeThemeRelation->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $routeThemeRelation->deleted_at !!}</p>
</div>

