@extends('layouts.app')

@section('content')
<div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-100">
        <div class="card">
            <div class="card-content">
                <h1 class="title">Create an account</h1>
                <form action="{{route('register')}}" method="POST" role="form">
                    {{csrf_field()}}
                    <div class="field">
                        <label for="fname" class="label">First Name</label>
                        <div class="control">
                            <input 
                            class="input {{$errors->has('fname') ? 'is-danger' : ''}}" 
                            type="text" name="fname" 
                            id="fname" 
                            placeholder="First Name" 
                            value="{{old('fname')}}"
                            required
                            />
                        </div>
                        @if($errors->has('fname'))
                        <p class="help is-danger">{{$errors->first('fname')}}</p>
                        @endif
                    </div>
                    <div class="field">
                        <label for="lname" class="label">Last Name</label>
                        <div class="control">
                        <input 
                        class="input {{$errors->has('lname') ? 'is-danger' : ''}}" 
                        type="text" 
                        name="lname" 
                        id="lname" 
                        placeholder="Last Name" 
                        value="{{old('lname')}}"
                        required
                        />
                        </div>
                        @if($errors->has('lname'))
                        <p class="help is-danger">{{$errors->first('lname')}}</p>
                        @endif
                    </div>
                    <div class="field">
                        <label for="email" class="label">Email Address</label>
                        <div class="control">
                        <input 
                        class="input {{$errors->has('email') ? 'is-danger' : ''}}" 
                        type="email" 
                        name="email" 
                        id="email" 
                        placeholder="somename@example.com" 
                        value="{{old('email')}}"
                        required
                        />
                        </div>
                        @if($errors->has('email'))
                        <p class="help is-danger">{{$errors->first('email')}}</p>
                        @endif
                    </div>
                    <div class="columns">
                        <div class="column">
                            <div class="field">
                                <label for="password" class="label">Password</label>
                                <div class="control">
                                <input 
                                class="input {{$errors->has('password') ? 'is-danger' : ''}}" 
                                type="password" 
                                name="password" 
                                id="password" 
                                placeholder="Enter your password"
                                required
                                />
                                </div>
                                @if ($errors->has('password'))
                                <p class="help is-danger">{{$errors->first('password')}}</p>
                                @endif
                            </div>
                        </div>
                        <div class="column">
                            <div class="field">
                                <label for="password_confirmation" class="label">Confirm Password</label>
                                <div class="control">
                                <input 
                                class="input {{$errors->has('password_confirmation') ? 'is-danger' : ''}}" 
                                type="password" 
                                name="password_confirmation" 
                                id="password_confirmation" 
                                placeholder="Repeat your password"
                                required
                                />
                                </div>
                                @if ($errors->has('password_confirmation'))
                                <p class="help is-danger">{{$errors->first('password_confirmation')}}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="control">
                        <button class="button is-primary m-t-30 is-outlined is-fullwidth">Register</button>
                    </div>
                </form>
            </div> <!--end of .card content-->
        </div><!--end of .card-->
        <h5 class="has-text-centered m-t-20"><a href="{{route('login')}}" class="is-muted">Already have a account?</a></h5>
    </div>
</div>

@endsection
