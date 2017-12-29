<table class="table table-responsive" id="tripThemes-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Description</th>
        <th>Is Active</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tripThemes as $tripTheme)
        <tr>
            <td>{!! $tripTheme->name !!}</td>
            <td>{!! $tripTheme->description !!}</td>
            <td>{!! $tripTheme->is_active !!}</td>
            <td>
                {!! Form::open(['route' => ['tripThemes.destroy', $tripTheme->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tripThemes.show', [$tripTheme->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tripThemes.edit', [$tripTheme->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>