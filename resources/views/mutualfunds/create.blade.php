@extends('app')
@section('content')
    <h1>Create New Mutual Fund</h1>
    {!! Form::open(['url' => 'mutualfunds']) !!}

    <div class="form-group">
        {!! Form::select('customer_id', $customers) !!}
    </div>

    <div class="form-group">
        {!! Form::label('name', 'Mutual Fund Name:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('purchase_date', 'Purchase Date:') !!}
        {!! Form::text('purachse_date',null,['class'=>'form-control']) !!}
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
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop
