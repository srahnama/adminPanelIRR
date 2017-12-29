<table class="table table-responsive" id="userCars-table">
    <thead>
        <tr>
            <th>User Id</th>
        <th>Classification</th>
        <th>Color</th>
        <th>Plate Number</th>
        <th>Wifi</th>
        <th>Roof Rock</th>
        <th>Fee Day</th>
        <th>Fee Km</th>
        <th>Insurance Type</th>
        <th>Insurance Expiry</th>
        <th>Active</th>
        <th>Is Verify</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($userCars as $userCar)
        <tr>
            <td>{!! $userCar->user_id !!}</td>
            <td>{!! $userCar->classification !!}</td>
            <td>{!! $userCar->color !!}</td>
            <td>{!! $userCar->plate_number !!}</td>
            <td>{!! $userCar->wifi !!}</td>
            <td>{!! $userCar->roof_rock !!}</td>
            <td>{!! $userCar->fee_day !!}</td>
            <td>{!! $userCar->fee_km !!}</td>
            <td>{!! $userCar->insurance_type !!}</td>
            <td>{!! $userCar->insurance_expiry !!}</td>
            <td>{!! $userCar->active !!}</td>
            <td>{!! $userCar->is_verify !!}</td>
            <td>
                {!! Form::open(['route' => ['userCars.destroy', $userCar->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('userCars.show', [$userCar->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('userCars.edit', [$userCar->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>