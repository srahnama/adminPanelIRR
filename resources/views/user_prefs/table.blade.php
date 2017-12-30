<table class="table table-responsive" id="userPrefs-table">
    <thead>
        <tr>
            <th>User Id</th>
        <th>Pass No</th>
        <th>Major</th>
        <th>Education</th>
        <th>Birthdate</th>
        <th>Native Lang</th>
        <th>Nationality</th>
        <th>Country</th>
        <th>Province</th>
        <th>City</th>
        <th>Street</th>
        <th>Street2</th>
        <th>Address More</th>
        <th>Po Code</th>
        <th>Rate</th>
        <th>Review</th>
        <th>Bio</th>
        <th>Phone</th>
        <th>Gender</th>
        <th>Image Url</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($userPrefs as $userPref)
        <tr>
            <td>{!! $userPref->user_id !!}</td>
            <td>{!! $userPref->pass_no !!}</td>
            <td>{!! $userPref->major !!}</td>
            <td>{!! $userPref->education !!}</td>
            <td>{!! $userPref->birthdate !!}</td>
            <td>{!! $userPref->native_lang !!}</td>
            <td>{!! $userPref->nationality !!}</td>
            <td>{!! $userPref->country !!}</td>
            <td>{!! $userPref->province !!}</td>
            <td>{!! $userPref->city !!}</td>
            <td>{!! $userPref->street !!}</td>
            <td>{!! $userPref->street2 !!}</td>
            <td>{!! $userPref->address_more !!}</td>
            <td>{!! $userPref->po_code !!}</td>
            <td>{!! $userPref->rate !!}</td>
            <td>{!! $userPref->review !!}</td>
            <td>{!! $userPref->bio !!}</td>
            <td>{!! $userPref->phone !!}</td>
            <td>{!! $userPref->gender !!}</td>
            <td>{!! $userPref->image_url !!}</td>
            <td>
                {!! Form::open(['route' => ['userPrefs.destroy', $userPref->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('userPrefs.show', [$userPref->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('userPrefs.edit', [$userPref->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>