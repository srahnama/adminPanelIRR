<table class="table table-responsive" id="placeTypeRelations-table">
    <thead>
        <tr>
            <th>Cat Id</th>
        <th>Place Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($placeTypeRelations as $placeTypeRelation)
        <tr>
            <td>{!! $placeTypeRelation->cat_id !!}</td>
            <td>{!! $placeTypeRelation->place_id !!}</td>
            <td>
                {!! Form::open(['route' => ['placeTypeRelations.destroy', $placeTypeRelation->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('placeTypeRelations.show', [$placeTypeRelation->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('placeTypeRelations.edit', [$placeTypeRelation->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>