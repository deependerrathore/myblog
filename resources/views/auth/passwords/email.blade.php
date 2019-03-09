@extends('layouts.app')

@section('content')
@if (session('status'))
    <div class="notification is-success">
        {{session('status')}}
    </div>    
@endif
<div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-100">
        <div class="card">
            <div class="card-content">
                <h1 class="title">Forgot your password?</h1>
                <form action="{{route('password.email')}}" method="POST" role="form">
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
                    
                    <div class="control">
                        <button class="button is-success  m-t-30  is-outlined is-fullwidth">Get Reset Link</button>
                    </div>
                </form>
            </div> <!--end of .card content-->
        </div><!--end of .card-->
        <h5 class="has-text-centered m-t-20"><a href="{{route('login')}}" class="is-muted"><i class="fa fa-caret-left"></i> Back to login</a></h5>
    </div>
</div>
@endsection
