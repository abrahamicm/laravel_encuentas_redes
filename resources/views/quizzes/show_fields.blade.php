<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $quiz->email }}</p>
</div>

<!-- Age Id Field -->
<div class="col-sm-12">
    {!! Form::label('age_id', 'Age Id:') !!}
    <p>{{ $quiz->age_id }}</p>
</div>

<!-- Gender Field -->
<div class="col-sm-12">
    {!! Form::label('gender', 'Gender:') !!}
    <p>{{ $quiz->gender }}</p>
</div>

<!-- Social Network Id Field -->
<div class="col-sm-12">
    {!! Form::label('social_network_id', 'Social Network Id:') !!}
    <p>{{ $quiz->social_network_id }}</p>
</div>

<!-- Average Time Field -->
<div class="col-sm-12">
    {!! Form::label('average_time', 'Average Time:') !!}
    <p>{{ $quiz->average_time }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $quiz->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $quiz->updated_at }}</p>
</div>

