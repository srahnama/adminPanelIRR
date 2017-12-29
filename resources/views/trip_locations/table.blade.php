<table class="table table-responsive" id="tripLocations-table">
    <thead>
        <tr>
            <th>Trip Type</th>
        <th>Trip Id</th>
        <th>Location Id</th>
        <th>Order</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tripLocations as $tripLocation)
        <tr>
            <td>{!! $tripLocation->trip_type !!}</td>
            <td>{!! $tripLocation->trip_id !!}</td>
            <td>{!! $tripLocation->location_id !!}</td>
            <td>{!! $tripLocation->order !!}</td>
            <td>
                {!! Form::open(['route' => ['tripLocations.destroy', $tripLocation->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tripLocations.show', [$tripLocation->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tripLocations.edit', [$tripLocation->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>