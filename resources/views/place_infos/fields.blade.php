<!-- Place Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('place_id', 'Place Id:') !!}
    {!! Form::number('place_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Duration Field -->
<div class="form-group col-sm-6">
    {!! Form::label('duration', 'Duration:') !!}
    {!! Form::text('duration', null, ['class' => 'form-control']) !!}
</div>

<!-- Spring Time1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('spring_time1', 'Spring Time1:') !!}
    {!! Form::text('spring_time1', null, ['class' => 'form-control']) !!}
</div>

<!-- Spring Time2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('spring_time2', 'Spring Time2:') !!}
    {!! Form::text('spring_time2', null, ['class' => 'form-control']) !!}
</div>

<!-- Summer Time1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('summer_time1', 'Summer Time1:') !!}
    {!! Form::text('summer_time1', null, ['class' => 'form-control']) !!}
</div>

<!-- Summer Time2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('summer_time2', 'Summer Time2:') !!}
    {!! Form::text('summer_time2', null, ['class' => 'form-control']) !!}
</div>

<!-- Autumn Time1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('autumn_time1', 'Autumn Time1:') !!}
    {!! Form::text('autumn_time1', null, ['class' => 'form-control']) !!}
</div>

<!-- Autumn Time2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('autumn_time2', 'Autumn Time2:') !!}
    {!! Form::text('autumn_time2', null, ['class' => 'form-control']) !!}
</div>

<!-- Winter Time1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('winter_time1', 'Winter Time1:') !!}
    {!! Form::text('winter_time1', null, ['class' => 'form-control']) !!}
</div>

<!-- Winter Time2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('winter_time2', 'Winter Time2:') !!}
    {!! Form::text('winter_time2', null, ['class' => 'form-control']) !!}
</div>

<!-- Best Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('best_time', 'Best Time:') !!}
    {!! Form::text('best_time', null, ['class' => 'form-control']) !!}
</div>

<!-- Website Field -->
<div class="form-group col-sm-6">
    {!! Form::label('website', 'Website:') !!}
    {!! Form::text('website', null, ['class' => 'form-control']) !!}
</div>

<!-- Tel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tel', 'Tel:') !!}
    {!! Form::text('tel', null, ['class' => 'form-control']) !!}
</div>

<!-- Food Drink Field -->
<div class="form-group col-sm-6">
    {!! Form::label('food_drink', 'Food Drink:') !!}
    {!! Form::text('food_drink', null, ['class' => 'form-control']) !!}
</div>

<!-- Ticket Cost Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ticket_cost', 'Ticket Cost:') !!}
    {!! Form::text('ticket_cost', null, ['class' => 'form-control']) !!}
</div>

<!-- Additional Info Field -->
<div class="form-group col-sm-6">
    {!! Form::label('additional_info', 'Additional Info:') !!}
    {!! Form::text('additional_info', null, ['class' => 'form-control']) !!}
</div>

<!-- Content Field -->
<div class="form-group col-sm-6">
    {!! Form::label('content', 'Content:') !!}
    {!! Form::text('content', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('placeInfos.index') !!}" class="btn btn-default">Cancel</a>
</div>
