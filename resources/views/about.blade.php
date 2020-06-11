@extends('layouts.app1')

@section('HeadContent')
    <link href="{{ asset('css/view.css') }}" rel="stylesheet">
@endsection

@section('SideNavContent')
    <p class="label-div">Teksts, kuru knapi redz</p>
@endsection

@section('BodyContent')
    <div class="tec">
        <h1 class="tec">Pārbaudes teksts</h1>
    </div>

    <div class="lines">
        <h1 class="abcde"><strong>Melnā poga</strong></h1>
    </div>
    <h1>teksts</h1>
@endsection
