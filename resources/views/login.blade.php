@extends('site.layouts.main')

@section('title', 'Login')

@section('content')

    <div class="login-content">
        <div class="login-content__image">
            <img class="login-image" src="{{ asset('images/logo.png') }}" alt="">
        </div>
        <div class="login-content__form">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-3 row text-end">
                    <label for="staticEmail" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input name="email" type="email" class="form-control shadow" id="staticEmail" value="{{ old('email') }}">
                        {{ $errors->has('email') ? $errors->first('email') : ''}}
                    </div>
                </div>
                <div class="mb-3 row text-end">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-9">
                        <input name="password" type="password" class="form-control shadow" id="inputPassword">
                        {{ $errors->has('password') ? $errors->first('password') : ''}}
                    </div>
                </div>
                <div class="col-sm-12 text-end">
                    <button type="submit" class="btn btn-primary color-10">Login</button>
                </div>
            </form>
            {{ isset($erro) ? $erro : '' }}
        </div>
    </div>


@endsection
