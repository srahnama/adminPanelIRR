<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Duration Field -->
<div class="form-group col-sm-6">
    {!! Form::label('duration', 'Duration:') !!}
    {!! Form::text('duration', null, ['class' => 'form-control']) !!}
</div>

<!-- Time Suggestion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('time_suggestion', 'Time Suggestion:') !!}
    {!! Form::text('time_suggestion', null, ['class' => 'form-control']) !!}
</div>

<!-- Cost Food Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cost_food', 'Cost Food:') !!}
    {!! Form::number('cost_food', null, ['class' => 'form-control']) !!}
</div>

<!-- Cost Ticket Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cost_ticket', 'Cost Ticket:') !!}
    {!! Form::number('cost_ticket', null, ['class' => 'form-control']) !!}
</div>

<!-- Additional Info Field -->
<div class="form-group col-sm-6">
    {!! Form::label('additional_info', 'Additional Info:') !!}
    {!! Form::text('additional_info', null, ['class' => 'form-control']) !!}
</div>

<!-- Cover Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cover_url', 'Cover Url:') !!}
    {!! Form::text('cover_url', null, ['class' => 'form-control']) !!}
</div>

<!-- Content Field -->
<div class="form-group col-sm-6">
    {!! Form::label('content', 'Content:') !!}
    {!! Form::text('content', null, ['class' => 'form-control']) !!}
</div>

<!-- Is Published Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_published', 'Is Published:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_published', false) !!}
        {!! Form::checkbox('is_published', '1', null) !!} 1
    </label>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('routes.index') !!}" class="btn btn-default">Cancel</a>
</div>
