<table class="table table-responsive" id="placeTransportations-table">
    <thead>
        <tr>
            <th>Type</th>
        <th>Item Id</th>
        <th>From</th>
        <th>Transportation Type</th>
        <th>Fee</th>
        <th>Creator Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($placeTransportations as $placeTransportation)
        <tr>
            <td>{!! $placeTransportation->type !!}</td>
            <td>{!! $placeTransportation->item_id !!}</td>
            <td>{!! $placeTransportation->from !!}</td>
            <td>{!! $placeTransportation->transportation_type !!}</td>
            <td>{!! $placeTransportation->fee !!}</td>
            <td>{!! $placeTransportation->creator_id !!}</td>
            <td>
                {!! Form::open(['route' => ['placeTransportations.destroy', $placeTransportation->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('placeTransportations.show', [$placeTransportation->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('placeTransportations.edit', [$placeTransportation->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>