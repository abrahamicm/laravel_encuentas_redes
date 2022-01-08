<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Age Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('age_id', 'Age Id:') !!}
    {!! Form::select('age_id', $ageItems, null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gender', 'Gender:') !!}
    {!! Form::select('gender', ['Hombre' => 'Hombre', 'Mujer' => 'Mujer'], null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- Social Network Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('social_network_id', 'Social Network Id:') !!}
    {!! Form::select('social_network_id', $social_networkItems, null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- Average Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('average_time', 'Average Time:') !!}
    {!! Form::select('average_time', $average_timeItems, null, ['class' => 'form-control custom-select']) !!}
</div>
