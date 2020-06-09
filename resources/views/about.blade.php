@extends('layouts.app')

@section('HeadContent')
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@endsection

@section('SideNavContent')
    <p class="label-div">Teksts, kuru knapi redz</p>
@endsection

@section('BodyContent')
    <div class="tec">
        <h1 class="tec">Pārbaudes teksts</h1>
    </div>

    <div class="abcde">
        <h1 class="abcde"><strong>Melnā poga</strong></h1>
    </div>
@endsection
