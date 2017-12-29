<table class="table table-responsive" id="userLicences-table">
    <thead>
        <tr>
            <th>User Id</th>
        <th>Type</th>
        <th>Year</th>
        <th>Lang</th>
        <th>Fee</th>
        <th>File</th>
        <th>Destinations</th>
        <th>Is Verify</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($userLicences as $userLicence)
        <tr>
            <td>{!! $userLicence->user_id !!}</td>
            <td>{!! $userLicence->type !!}</td>
            <td>{!! $userLicence->year !!}</td>
            <td>{!! $userLicence->lang !!}</td>
            <td>{!! $userLicence->fee !!}</td>
            <td>{!! $userLicence->file !!}</td>
            <td>{!! $userLicence->destinations !!}</td>
            <td>{!! $userLicence->is_verify !!}</td>
            <td>
                {!! Form::open(['route' => ['userLicences.destroy', $userLicence->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('userLicences.show', [$userLicence->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('userLicences.edit', [$userLicence->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>