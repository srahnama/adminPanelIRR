<table class="table table-responsive" id="tripInclusions-table">
    <thead>
        <tr>
            <th>Type</th>
        <th>Trip Id</th>
        <th>Status</th>
        <th>Inclusion Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tripInclusions as $tripInclusion)
        <tr>
            <td>{!! $tripInclusion->type !!}</td>
            <td>{!! $tripInclusion->trip_id !!}</td>
            <td>{!! $tripInclusion->status !!}</td>
            <td>{!! $tripInclusion->inclusion_id !!}</td>
            <td>
                {!! Form::open(['route' => ['tripInclusions.destroy', $tripInclusion->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tripInclusions.show', [$tripInclusion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tripInclusions.edit', [$tripInclusion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>