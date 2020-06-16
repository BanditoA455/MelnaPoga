@extends('layouts.app2')

@section('BodyContent')

    <div class="cout">Fill in the necessary information</div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="">
            <label for="FirstName" class=""> {{ __('text.FirstName') }} </label>
            <div class="">
                <input id="FirstName" type="text" class="form-control @error('FirstName') is-invalid @enderror" name="FirstName" value="{{ old('FirstName') }}" required autocomplete="FirstName" autofocus>
                @error('FirstName')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>


        <div class="">
            <label for="LastName" class=""> {{ __('text.LastName') }} </label>
            <div class="">
                <input id="LastName" type="text" class="form-control @error('LastName') is-invalid @enderror" name="LastName" value="{{ old('LastName') }}" required autocomplete="LastName" autofocus>
                @error('LastName')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>


        <div class="">
            <label for="email" class=""> {{ __('text.email') }} </label>
            <div class="">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>


        <div class="">
            <label for="password" class=""> {{ __('text.password') }} </label>
            <div class="">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>


        <div class="">
            <label for="password-confirm" class=""> {{ __('text.confirm_password') }} </label>
            <div class="">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>


        <div class="">
            <label for="role" class="">{{__('text.admin_code')}}</label>
            <div class="">
                <input id="role" type="text" class="form-control @error('role') is-invalid @enderror" name="role" value="{{ old('role') }}" autocomplete="role" autofocus>
                @error('role')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>


        <div class="">
            <div class="">
                <button type="submit" class="">
                   {{__('text.register')}}
                </button>
            </div>
        </div>

        

    </form>
@endsection
