<table class="table table-responsive" id="pictures-table">
    <thead>
        <tr>
            <th>Item Type</th>
        <th>Item Id</th>
        <th>File Name</th>
        <th>Order</th>
        <th>Cover</th>
        <th>Is Active</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($pictures as $picture)
        <tr>
            <td>{!! $picture->item_type !!}</td>
            <td>{!! $picture->item_id !!}</td>
            <td>{!! $picture->file_name !!}</td>
            <td>{!! $picture->order !!}</td>
            <td>{!! $picture->cover !!}</td>
            <td>{!! $picture->is_active !!}</td>
            <td>
                {!! Form::open(['route' => ['pictures.destroy', $picture->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('pictures.show', [$picture->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('pictures.edit', [$picture->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>