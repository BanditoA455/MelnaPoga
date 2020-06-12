@extends('layouts.app1')

@section('HeadContent')
@endsection

@section('SideNavContent')
    {{!! Form::open(['action' => 'ProductsController@display', 'method' => 'POST']) !!}}
    <div class="label-div">
        {{Form::label('SmallD', 'Smallest diameter', ['class' => 'label']) }}
        <br>
        {{Form::text('SmallD', '', ['class' => 'input']) }}
    </div>
    <div class="label-div">
        {{Form::label('LargeD', 'Largest diameter', ['class' => 'label']) }}
        <br>
        {{Form::text('LargeD', '', ['class' => 'input']) }}
    </div>


<div class="label-div">
{{Form::label('type', 'Type', ['class' => 'label']) }}
        <br>
        <select class="form-control" name="type" id="type" data-parsley-required="true">
          @foreach ($types as $types)
          {
            <option value="{{ $types }}">{{ $types }}</option>
          }
          @endforeach
        </select>
         </div>
<div class="label-div">
    {{Form::label('color', 'Color', ['class' => 'label']) }}
        <br>
                <select class="form-control" name="color" id="color" data-parsley-required="true">
          @foreach ($colors as $colors)
          {
            <option value="{{ $colors }}">{{ $colors }}</option>
          }
          @endforeach
        </select>
    </div>
    <div class="label-div">
        {{Form::label('type', 'Type', ['class' => 'label']) }}
        <br>
        {{Form::select('type', ['class' => 'input']) }}
    </div>
    <div class="label-div">
        {{Form::label('cheap', 'Cheapest:', ['class' => 'label']) }}
        <br>
        {{Form::number('cheap', '', ['class' => 'input']) }}
    </div>
    <div class="label-div">
        {{Form::label('exp', 'Most expensive:', ['class' => 'label']) }}
        <br>
        {{Form::number('exp', '', ['class' => 'input']) }}
    </div>
    <div class="filter-button">
        {{Form::submit('Add filters') }}
    </div>
    {{!! Form::close() !!}}
@endsection

@section('BodyContent')

@endsection
