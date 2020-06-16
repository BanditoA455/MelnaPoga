@extends('layouts.app2')

@section('HeadContent')
    <link href="{{ asset('css/view.css') }}" rel="stylesheet">
@endsection

@section('BodyContent')
    <div class="cout">{{__('text.welcome_about')}}</div>
@endsection
