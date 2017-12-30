<table class="table table-responsive" id="tripThemeRelations-table">
    <thead>
        <tr>
            <th>Trip Type</th>
        <th>Trip Id</th>
        <th>Theme Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tripThemeRelations as $tripThemeRelation)
        <tr>
            <td>{!! $tripThemeRelation->trip_type !!}</td>
            <td>{!! $tripThemeRelation->trip_id !!}</td>
            <td>{!! $tripThemeRelation->theme_id !!}</td>
            <td>
                {!! Form::open(['route' => ['tripThemeRelations.destroy', $tripThemeRelation->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tripThemeRelations.show', [$tripThemeRelation->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tripThemeRelations.edit', [$tripThemeRelation->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>