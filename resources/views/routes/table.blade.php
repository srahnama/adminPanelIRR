<table class="table table-responsive" id="routes-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Duration</th>
        <th>Time Suggestion</th>
        <th>Cost Food</th>
        <th>Cost Ticket</th>
        <th>Additional Info</th>
        <th>Cover Url</th>
        <th>Content</th>
        <th>Is Published</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($routes as $route)
        <tr>
            <td>{!! $route->name !!}</td>
            <td>{!! $route->duration !!}</td>
            <td>{!! $route->time_suggestion !!}</td>
            <td>{!! $route->cost_food !!}</td>
            <td>{!! $route->cost_ticket !!}</td>
            <td>{!! $route->additional_info !!}</td>
            <td>{!! $route->cover_url !!}</td>
            <td>{!! $route->content !!}</td>
            <td>{!! $route->is_published !!}</td>
            <td>
                {!! Form::open(['route' => ['routes.destroy', $route->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('routes.show', [$route->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('routes.edit', [$route->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>