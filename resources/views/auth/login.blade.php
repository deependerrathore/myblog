@extends('layouts.app')

@section('content')
<div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-100">
        <div class="card">
            <div class="card-content">
                <h1 class="title">Log In</h1>
                <form action="{{route('login')}}" method="POST" role="form">
                    {{csrf_field()}}
                    <div class="field">
                        <label for="email" class="label">Email Address</label>
                        <div class="control">
                        <input class="input {{$errors->has('email') ? 'is-danger' : ''}}" type="text" name="email" id="email" placeholder="somename@example.com" value="{{old('email')}}"/>
                        </div>
                        @if($errors->has('email'))
                        <p class="help is-danger">{{$errors->first('email')}}</p>
                        @endif
                    </div>
                    <div class="field">
                        <label for="password" class="label">Password</label>
                        <div class="control">
                        <input class="input {{$errors->has('password') ? 'is-danger' : ''}}" type="password" name="password" id="password" placeholder="Enter your password"/>
                        </div>
                        @if ($errors->has('password'))
                        <p class="help is-danger">{{$errors->first('password')}}</p>
                        @endif
                    </div>
                    <div class="field">
                            <b-checkbox name="remember">Remember Me</b-checkbox>
                        </div>
                    <div class="control">
                        <button class="button is-primary  m-t-30  is-outlined is-fullwidth">Login</button>
                    </div>
                </form>
            </div> <!--end of .card content-->
        </div><!--end of .card-->
        <h5 class="has-text-centered m-t-20"><a href="{{route('password.request')}}" class="is-muted">Forgot your password?</a></h5>
    </div>
</div>
@endsection
