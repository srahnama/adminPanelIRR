<table class="table table-responsive" id="tripAvailabilities-table">
    <thead>
        <tr>
            <th>Type</th>
        <th>Trip Id</th>
        <th>Availability</th>
        <th>Status</th>
        <th>Capacity</th>
        <th>Sold</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tripAvailabilities as $tripAvailabilitie)
        <tr>
            <td>{!! $tripAvailabilitie->type !!}</td>
            <td>{!! $tripAvailabilitie->trip_id !!}</td>
            <td>{!! $tripAvailabilitie->availability !!}</td>
            <td>{!! $tripAvailabilitie->status !!}</td>
            <td>{!! $tripAvailabilitie->capacity !!}</td>
            <td>{!! $tripAvailabilitie->sold !!}</td>
            <td>
                {!! Form::open(['route' => ['tripAvailabilities.destroy', $tripAvailabilitie->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tripAvailabilities.show', [$tripAvailabilitie->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tripAvailabilities.edit', [$tripAvailabilitie->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>