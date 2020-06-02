@extends('layouts.app')

@section('SideNavContent')

        {{!! Form::open(['action' => 'ProductsController@display', 'method' => 'POST']) !!}
            <div class="label-div">
                {{Form::label('name', 'Name', ['class' => 'label']) }}
                <br>
                {{Form::text('name', '', ['class' => 'input']) }}
            </div>
            <div class="label-div">
                {{Form::label('type', 'Type', ['class' => 'label']) }}
                <br>
                {{Form::select('type', ['L' => 'large', 'XL' => 'extra large', 'class' => 'input']) }}
            </div>
            <div class="label-div">
                {{Form::label('start', 'Cheapest:', ['class' => 'label']) }}
                <br>
                {{Form::number('start', '', ['class' => 'input']) }}
            </div> 
            <div class="label-div">
                {{Form::label('end', 'Most expensive:', ['class' => 'label']) }}
                <br>
                {{Form::number('end', '', ['class' => 'input']) }}
            </div>
            <div class="filter-button">
                {{Form::submit('Add filters') }}
            </div>
        {!! Form::close() !!}  
@endsection   

@section('BodyContent')

@endsection