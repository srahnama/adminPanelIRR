<table class="table table-responsive" id="inclusions-table">
    <thead>
        <tr>
            <th>Type</th>
        <th>Name</th>
        <th>Is Active</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($inclusions as $inclusion)
        <tr>
            <td>{!! $inclusion->type !!}</td>
            <td>{!! $inclusion->name !!}</td>
            <td>{!! $inclusion->is_active !!}</td>
            <td>
                {!! Form::open(['route' => ['inclusions.destroy', $inclusion->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('inclusions.show', [$inclusion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('inclusions.edit', [$inclusion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>