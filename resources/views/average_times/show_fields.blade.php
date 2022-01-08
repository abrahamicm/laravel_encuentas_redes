<!-- Time Range Field -->
<div class="col-sm-12">
    {!! Form::label('time_range', 'Time Range:') !!}
    <p>{{ $averageTime->time_range }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $averageTime->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $averageTime->updated_at }}</p>
</div>

