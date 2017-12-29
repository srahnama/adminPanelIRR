<table class="table table-responsive" id="placeInfos-table">
    <thead>
        <tr>
            <th>Place Id</th>
        <th>Duration</th>
        <th>Spring Time1</th>
        <th>Spring Time2</th>
        <th>Summer Time1</th>
        <th>Summer Time2</th>
        <th>Autumn Time1</th>
        <th>Autumn Time2</th>
        <th>Winter Time1</th>
        <th>Winter Time2</th>
        <th>Best Time</th>
        <th>Website</th>
        <th>Tel</th>
        <th>Food Drink</th>
        <th>Ticket Cost</th>
        <th>Additional Info</th>
        <th>Content</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($placeInfos as $placeInfo)
        <tr>
            <td>{!! $placeInfo->place_id !!}</td>
            <td>{!! $placeInfo->duration !!}</td>
            <td>{!! $placeInfo->spring_time1 !!}</td>
            <td>{!! $placeInfo->spring_time2 !!}</td>
            <td>{!! $placeInfo->summer_time1 !!}</td>
            <td>{!! $placeInfo->summer_time2 !!}</td>
            <td>{!! $placeInfo->autumn_time1 !!}</td>
            <td>{!! $placeInfo->autumn_time2 !!}</td>
            <td>{!! $placeInfo->winter_time1 !!}</td>
            <td>{!! $placeInfo->winter_time2 !!}</td>
            <td>{!! $placeInfo->best_time !!}</td>
            <td>{!! $placeInfo->website !!}</td>
            <td>{!! $placeInfo->tel !!}</td>
            <td>{!! $placeInfo->food_drink !!}</td>
            <td>{!! $placeInfo->ticket_cost !!}</td>
            <td>{!! $placeInfo->additional_info !!}</td>
            <td>{!! $placeInfo->content !!}</td>
            <td>
                {!! Form::open(['route' => ['placeInfos.destroy', $placeInfo->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('placeInfos.show', [$placeInfo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('placeInfos.edit', [$placeInfo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>