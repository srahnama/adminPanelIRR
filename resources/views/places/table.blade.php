<table class="table table-responsive" id="places-table">
    <thead>
        <tr>
            <th>Category</th>
        <th>Name</th>
        <th>Description</th>
        <th>Lat</th>
        <th>Long</th>
        <th>Parent Id</th>
        <th>Country</th>
        <th>Province</th>
        <th>City</th>
        <th>Is Active</th>
        <th>Ir Hashtag</th>
        <th>Rate</th>
        <th>Review</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($places as $place)
        <tr>
            <td>{!! $place->category !!}</td>
            <td>{!! $place->name !!}</td>
            <td>{!! $place->description !!}</td>
            <td>{!! $place->lat !!}</td>
            <td>{!! $place->long !!}</td>
            <td>{!! $place->parent_id !!}</td>
            <td>{!! $place->country !!}</td>
            <td>{!! $place->province !!}</td>
            <td>{!! $place->city !!}</td>
            <td>{!! $place->is_active !!}</td>
            <td>{!! $place->ir_hashtag !!}</td>
            <td>{!! $place->rate !!}</td>
            <td>{!! $place->review !!}</td>
            <td>
                {!! Form::open(['route' => ['places.destroy', $place->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('places.show', [$place->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('places.edit', [$place->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>