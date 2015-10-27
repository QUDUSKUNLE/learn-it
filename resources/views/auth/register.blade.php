@extends('layout.master')

@section('title')
    Register
@endsection

@section('content')
    <div class="row">
        <form class="col s12 m6 l4 offset-l8" method="POST" action="register">
            {!! csrf_field() !!}
            <div class="row"></div>
            <div class="row"></div>
            <div class="row"></div>
            <div class="row"></div>

            <div class="row">
                <div class="input-field col s12">
                    <input id="username" name="username" required type="text" value="{{ old('username') }}">
                    <label for="username">Username</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="email" name="email" type="email" required value="{{ old('email') }}" class="validate">
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input id="password" type="password" name="password" required class="validate">
                    <label for="password">Password</label>
                </div>
                <div class="input-field col s6">
                    <input id="password_confirmation" type="password" required name="password_confirmation" class="validate">
                    <label for="password_confirmation">Confirm password</label>
                </div>
            </div>
            <button class="btn waves-effect waves-light brown lighten-2 right" type="submit" name="signup">
                Signup
            </button>
        </form>

        <div class="row"></div>
        <div class="row"></div>

        <div class="row">
            <div class="col s12 m6 l4 offset-l8">
                <div class="col s4 left">
                    <a href="{{ url('login/facebook') }}"><img class="z-depth-2" height="50" width="50" src="icon/facebook.svg" /></a>
                </div>
                <div class="col s4 center">
                    <a href="{{ url('login/twitter') }}"><img class="z-depth-2" height="50" width="50" src="icon/twitter.svg" /></a>
                </div>
                <div class="col right">
                    <a href="{{ url('login/github') }}"><img class="z-depth-2" height="50" width="50" src="icon/github.svg" /></a>
                </div>
            </div>
        </div>
    </div>
@endsection