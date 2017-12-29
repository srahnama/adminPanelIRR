<table class="table table-responsive" id="routeThemeRelations-table">
    <thead>
        <tr>
            <th>Route Id</th>
        <th>Route Theme Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($routeThemeRelations as $routeThemeRelation)
        <tr>
            <td>{!! $routeThemeRelation->route_id !!}</td>
            <td>{!! $routeThemeRelation->route_theme_id !!}</td>
            <td>
                {!! Form::open(['route' => ['routeThemeRelations.destroy', $routeThemeRelation->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('routeThemeRelations.show', [$routeThemeRelation->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('routeThemeRelations.edit', [$routeThemeRelation->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>