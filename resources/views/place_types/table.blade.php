<table class="table table-responsive" id="placeTypes-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Description</th>
        <th>Parent Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($placeTypes as $placeType)
        <tr>
            <td>{!! $placeType->name !!}</td>
            <td>{!! $placeType->description !!}</td>
            <td>{!! $placeType->parent_id !!}</td>
            <td>
                {!! Form::open(['route' => ['placeTypes.destroy', $placeType->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('placeTypes.show', [$placeType->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('placeTypes.edit', [$placeType->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>