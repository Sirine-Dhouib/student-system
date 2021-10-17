
<!-- First Name Field -->
<div class="col-sm-12">
    {!! Form::label('first_name', 'First Name:') !!}
    <p>{{ $admissions->first_name }}</p>
</div>

<!-- Last Name Field -->
<div class="col-sm-12">
    {!! Form::label('last_name', 'Last Name:') !!}
    <p>{{ $admissions->last_name }}</p>
</div>

<!-- Gender Field -->
<div class="col-sm-12">
    {!! Form::label('gender', 'Gender:') !!}
    <p>{{ $admissions->gender }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $admissions->email }}</p>
</div>

<!-- Phone Field -->
<div class="col-sm-12">
    {!! Form::label('phone', 'Phone:') !!}
    <p>{{ $admissions->phone }}</p>
</div>

<!-- Date Enregistered Field -->
<div class="col-sm-12">
    {!! Form::label('date_enregistered', 'Date Enregistered:') !!}
    <p>{{ $admissions->date_enregistered }}</p>
</div>

<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $admissions->user_id }}</p>
</div>

<!-- Class Id Field -->
<div class="col-sm-12">
    {!! Form::label('class_id', 'Class Id:') !!}
    <p>{{ $admissions->class_id }}</p>
</div>


