@extends('app')
@section('content')
    <h1>Update Mutual Fund</h1>
    {!! Form::model($mutualfund,['method' => 'PATCH','route'=>['mutualfunds.update',$mutualfund->id]]) !!}
    <div class="form-group">
        {!! Form::label('name', 'Mutual Fund Name:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('purchase_date', 'Purchase Date:') !!}
        {!! Form::text('purchase_date',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('purchase_price', 'Purchase Price:') !!}
        {!! Form::text('purchase_price',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('current_price', 'Current Price:') !!}
        {!! Form::text('current_price',null,['class'=>'form-control']) !!}
    </div>
	<div class="form-group">
        {!! Form::label('shares', 'Shares:') !!}
        {!! Form::text('shares',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop
