<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Lic Nature Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lic_nature', 'Lic Nature:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('lic_nature', false) !!}
        {!! Form::checkbox('lic_nature', '1', null) !!} 1
    </label>
</div>

<!-- Lic Culture Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lic_culture', 'Lic Culture:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('lic_culture', false) !!}
        {!! Form::checkbox('lic_culture', '1', null) !!} 1
    </label>
</div>

<!-- Art Music Field -->
<div class="form-group col-sm-6">
    {!! Form::label('art_music', 'Art Music:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('art_music', false) !!}
        {!! Form::checkbox('art_music', '1', null) !!} 1
    </label>
</div>

<!-- Architecture Field -->
<div class="form-group col-sm-6">
    {!! Form::label('architecture', 'Architecture:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('architecture', false) !!}
        {!! Form::checkbox('architecture', '1', null) !!} 1
    </label>
</div>

<!-- Museum Field -->
<div class="form-group col-sm-6">
    {!! Form::label('museum', 'Museum:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('museum', false) !!}
        {!! Form::checkbox('museum', '1', null) !!} 1
    </label>
</div>

<!-- Unesco Field -->
<div class="form-group col-sm-6">
    {!! Form::label('unesco', 'Unesco:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('unesco', false) !!}
        {!! Form::checkbox('unesco', '1', null) !!} 1
    </label>
</div>

<!-- Religues Field -->
<div class="form-group col-sm-6">
    {!! Form::label('religues', 'Religues:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('religues', false) !!}
        {!! Form::checkbox('religues', '1', null) !!} 1
    </label>
</div>

<!-- Eastern Bazaar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('eastern_bazaar', 'Eastern Bazaar:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('eastern_bazaar', false) !!}
        {!! Form::checkbox('eastern_bazaar', '1', null) !!} 1
    </label>
</div>

<!-- Food Drink Field -->
<div class="form-group col-sm-6">
    {!! Form::label('food_drink', 'Food Drink:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('food_drink', false) !!}
        {!! Form::checkbox('food_drink', '1', null) !!} 1
    </label>
</div>

<!-- Handicraft Field -->
<div class="form-group col-sm-6">
    {!! Form::label('handicraft', 'Handicraft:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('handicraft', false) !!}
        {!! Form::checkbox('handicraft', '1', null) !!} 1
    </label>
</div>

<!-- Nomad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nomad', 'Nomad:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('nomad', false) !!}
        {!! Form::checkbox('nomad', '1', null) !!} 1
    </label>
</div>

<!-- Adventure Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adventure', 'Adventure:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('adventure', false) !!}
        {!! Form::checkbox('adventure', '1', null) !!} 1
    </label>
</div>

<!-- Hiking Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hiking', 'Hiking:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('hiking', false) !!}
        {!! Form::checkbox('hiking', '1', null) !!} 1
    </label>
</div>

<!-- Cycling Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cycling', 'Cycling:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('cycling', false) !!}
        {!! Form::checkbox('cycling', '1', null) !!} 1
    </label>
</div>

<!-- Safari Field -->
<div class="form-group col-sm-6">
    {!! Form::label('safari', 'Safari:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('safari', false) !!}
        {!! Form::checkbox('safari', '1', null) !!} 1
    </label>
</div>

<!-- Desert Field -->
<div class="form-group col-sm-6">
    {!! Form::label('desert', 'Desert:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('desert', false) !!}
        {!! Form::checkbox('desert', '1', null) !!} 1
    </label>
</div>

<!-- Hours Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hours', 'Hours:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('hours', false) !!}
        {!! Form::checkbox('hours', '1', null) !!} 1
    </label>
</div>

<!-- Sport Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sport', 'Sport:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('sport', false) !!}
        {!! Form::checkbox('sport', '1', null) !!} 1
    </label>
</div>

<!-- Ecotourism Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ecotourism', 'Ecotourism:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('ecotourism', false) !!}
        {!! Form::checkbox('ecotourism', '1', null) !!} 1
    </label>
</div>

<!-- Sking Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sking', 'Sking:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('sking', false) !!}
        {!! Form::checkbox('sking', '1', null) !!} 1
    </label>
</div>

<!-- Fishing Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fishing', 'Fishing:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('fishing', false) !!}
        {!! Form::checkbox('fishing', '1', null) !!} 1
    </label>
</div>

<!-- Spirtual Field -->
<div class="form-group col-sm-6">
    {!! Form::label('spirtual', 'Spirtual:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('spirtual', false) !!}
        {!! Form::checkbox('spirtual', '1', null) !!} 1
    </label>
</div>

<!-- Festival Field -->
<div class="form-group col-sm-6">
    {!! Form::label('festival', 'Festival:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('festival', false) !!}
        {!! Form::checkbox('festival', '1', null) !!} 1
    </label>
</div>

<!-- Solo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('solo', 'Solo:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('solo', false) !!}
        {!! Form::checkbox('solo', '1', null) !!} 1
    </label>
</div>

<!-- Horror Field -->
<div class="form-group col-sm-6">
    {!! Form::label('horror', 'Horror:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('horror', false) !!}
        {!! Form::checkbox('horror', '1', null) !!} 1
    </label>
</div>

<!-- Rail Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rail', 'Rail:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('rail', false) !!}
        {!! Form::checkbox('rail', '1', null) !!} 1
    </label>
</div>

<!-- Relax Field -->
<div class="form-group col-sm-6">
    {!! Form::label('relax', 'Relax:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('relax', false) !!}
        {!! Form::checkbox('relax', '1', null) !!} 1
    </label>
</div>

<!-- Slow Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slow', 'Slow:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('slow', false) !!}
        {!! Form::checkbox('slow', '1', null) !!} 1
    </label>
</div>

<!-- Social Science Field -->
<div class="form-group col-sm-6">
    {!! Form::label('social_science', 'Social Science:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('social_science', false) !!}
        {!! Form::checkbox('social_science', '1', null) !!} 1
    </label>
</div>

<!-- History Field -->
<div class="form-group col-sm-6">
    {!! Form::label('history', 'History:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('history', false) !!}
        {!! Form::checkbox('history', '1', null) !!} 1
    </label>
</div>

<!-- Geography Field -->
<div class="form-group col-sm-6">
    {!! Form::label('geography', 'Geography:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('geography', false) !!}
        {!! Form::checkbox('geography', '1', null) !!} 1
    </label>
</div>

<!-- Archeology Field -->
<div class="form-group col-sm-6">
    {!! Form::label('archeology', 'Archeology:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('archeology', false) !!}
        {!! Form::checkbox('archeology', '1', null) !!} 1
    </label>
</div>

<!-- Juries Prudence Field -->
<div class="form-group col-sm-6">
    {!! Form::label('juries_prudence', 'Juries Prudence:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('juries_prudence', false) !!}
        {!! Form::checkbox('juries_prudence', '1', null) !!} 1
    </label>
</div>

<!-- Linguistic Field -->
<div class="form-group col-sm-6">
    {!! Form::label('linguistic', 'Linguistic:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('linguistic', false) !!}
        {!! Form::checkbox('linguistic', '1', null) !!} 1
    </label>
</div>

<!-- Ethnology Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ethnology', 'Ethnology:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('ethnology', false) !!}
        {!! Form::checkbox('ethnology', '1', null) !!} 1
    </label>
</div>

<!-- Biography Field -->
<div class="form-group col-sm-6">
    {!! Form::label('biography', 'Biography:') !!}
    {!! Form::text('biography', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('userExperiences.index') !!}" class="btn btn-default">Cancel</a>
</div>
