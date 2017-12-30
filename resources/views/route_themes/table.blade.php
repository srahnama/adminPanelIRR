<table class="table table-responsive" id="routeThemes-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Description</th>
        <th>Image Url</th>
        <th>Parent Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($routeThemes as $routeTheme)
        <tr>
            <td>{!! $routeTheme->name !!}</td>
            <td>{!! $routeTheme->description !!}</td>
            <td>{!! $routeTheme->image_url !!}</td>
            <td>{!! $routeTheme->parent_id !!}</td>
            <td>
                {!! Form::open(['route' => ['routeThemes.destroy', $routeTheme->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('routeThemes.show', [$routeTheme->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('routeThemes.edit', [$routeTheme->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>