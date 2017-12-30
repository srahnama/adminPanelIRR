<table class="table table-responsive" id="routeLocations-table">
    <thead>
        <tr>
            <th>Route Id</th>
        <th>Place Id</th>
        <th>Order</th>
        <th>Type</th>
        <th>Duration</th>
        <th>Visiting Time</th>
        <th>Content</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($routeLocations as $routeLocation)
        <tr>
            <td>{!! $routeLocation->route_id !!}</td>
            <td>{!! $routeLocation->place_id !!}</td>
            <td>{!! $routeLocation->order !!}</td>
            <td>{!! $routeLocation->type !!}</td>
            <td>{!! $routeLocation->duration !!}</td>
            <td>{!! $routeLocation->visiting_time !!}</td>
            <td>{!! $routeLocation->content !!}</td>
            <td>
                {!! Form::open(['route' => ['routeLocations.destroy', $routeLocation->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('routeLocations.show', [$routeLocation->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('routeLocations.edit', [$routeLocation->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>