@extends('layout.template')
@section('content')
    <h1>Add Schoolarship Provider </h1>
    {!! Form::open(['url' => 'providers']) !!}
    <div class="form-group">
        {!! Form::label('Name', 'Name:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Email', 'Email:') !!}
        {!! Form::text('email',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Address', 'Address:') !!}
        {!! Form::text('address',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Phone', 'Phone:') !!}
        {!! Form::text('phone',null,['class'=>'form-control']) !!}
    </div>	
    <div class="form-group">
        {!! Form::label('Website', 'Website:') !!}
        {!! Form::text('website',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Active', 'Active:') !!}
        {!! Form::text('is_active',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop