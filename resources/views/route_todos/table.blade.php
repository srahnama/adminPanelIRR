<table class="table table-responsive" id="routeTodos-table">
    <thead>
        <tr>
            <th>Route Id</th>
        <th>Type</th>
        <th>Ir Hashtag</th>
        <th>Name</th>
        <th>Description</th>
        <th>Creator Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($routeTodos as $routeTodo)
        <tr>
            <td>{!! $routeTodo->route_id !!}</td>
            <td>{!! $routeTodo->type !!}</td>
            <td>{!! $routeTodo->ir_hashtag !!}</td>
            <td>{!! $routeTodo->name !!}</td>
            <td>{!! $routeTodo->description !!}</td>
            <td>{!! $routeTodo->creator_id !!}</td>
            <td>
                {!! Form::open(['route' => ['routeTodos.destroy', $routeTodo->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('routeTodos.show', [$routeTodo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('routeTodos.edit', [$routeTodo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>