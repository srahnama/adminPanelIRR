<table class="table table-responsive" id="placesParts-table">
    <thead>
        <tr>
            <th>Place Id</th>
        <th>Name</th>
        <th>Content</th>
        <th>Creator Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($placesParts as $placesPart)
        <tr>
            <td>{!! $placesPart->place_id !!}</td>
            <td>{!! $placesPart->name !!}</td>
            <td>{!! $placesPart->content !!}</td>
            <td>{!! $placesPart->creator_id !!}</td>
            <td>
                {!! Form::open(['route' => ['placesParts.destroy', $placesPart->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('placesParts.show', [$placesPart->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('placesParts.edit', [$placesPart->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>