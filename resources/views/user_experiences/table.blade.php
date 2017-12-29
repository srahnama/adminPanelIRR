<table class="table table-responsive" id="userExperiences-table">
    <thead>
        <tr>
            <th>User Id</th>
        <th>Lic Nature</th>
        <th>Lic Culture</th>
        <th>Art Music</th>
        <th>Architecture</th>
        <th>Museum</th>
        <th>Unesco</th>
        <th>Religues</th>
        <th>Eastern Bazaar</th>
        <th>Food Drink</th>
        <th>Handicraft</th>
        <th>Nomad</th>
        <th>Adventure</th>
        <th>Hiking</th>
        <th>Cycling</th>
        <th>Safari</th>
        <th>Desert</th>
        <th>Hours</th>
        <th>Sport</th>
        <th>Ecotourism</th>
        <th>Sking</th>
        <th>Fishing</th>
        <th>Spirtual</th>
        <th>Festival</th>
        <th>Solo</th>
        <th>Horror</th>
        <th>Rail</th>
        <th>Relax</th>
        <th>Slow</th>
        <th>Social Science</th>
        <th>History</th>
        <th>Geography</th>
        <th>Archeology</th>
        <th>Juries Prudence</th>
        <th>Linguistic</th>
        <th>Ethnology</th>
        <th>Biography</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($userExperiences as $userExperience)
        <tr>
            <td>{!! $userExperience->user_id !!}</td>
            <td>{!! $userExperience->lic_nature !!}</td>
            <td>{!! $userExperience->lic_culture !!}</td>
            <td>{!! $userExperience->art_music !!}</td>
            <td>{!! $userExperience->architecture !!}</td>
            <td>{!! $userExperience->museum !!}</td>
            <td>{!! $userExperience->unesco !!}</td>
            <td>{!! $userExperience->religues !!}</td>
            <td>{!! $userExperience->eastern_bazaar !!}</td>
            <td>{!! $userExperience->food_drink !!}</td>
            <td>{!! $userExperience->handicraft !!}</td>
            <td>{!! $userExperience->nomad !!}</td>
            <td>{!! $userExperience->adventure !!}</td>
            <td>{!! $userExperience->hiking !!}</td>
            <td>{!! $userExperience->cycling !!}</td>
            <td>{!! $userExperience->safari !!}</td>
            <td>{!! $userExperience->desert !!}</td>
            <td>{!! $userExperience->hours !!}</td>
            <td>{!! $userExperience->sport !!}</td>
            <td>{!! $userExperience->ecotourism !!}</td>
            <td>{!! $userExperience->sking !!}</td>
            <td>{!! $userExperience->fishing !!}</td>
            <td>{!! $userExperience->spirtual !!}</td>
            <td>{!! $userExperience->festival !!}</td>
            <td>{!! $userExperience->solo !!}</td>
            <td>{!! $userExperience->horror !!}</td>
            <td>{!! $userExperience->rail !!}</td>
            <td>{!! $userExperience->relax !!}</td>
            <td>{!! $userExperience->slow !!}</td>
            <td>{!! $userExperience->social_science !!}</td>
            <td>{!! $userExperience->history !!}</td>
            <td>{!! $userExperience->geography !!}</td>
            <td>{!! $userExperience->archeology !!}</td>
            <td>{!! $userExperience->juries_prudence !!}</td>
            <td>{!! $userExperience->linguistic !!}</td>
            <td>{!! $userExperience->ethnology !!}</td>
            <td>{!! $userExperience->biography !!}</td>
            <td>
                {!! Form::open(['route' => ['userExperiences.destroy', $userExperience->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('userExperiences.show', [$userExperience->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('userExperiences.edit', [$userExperience->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>