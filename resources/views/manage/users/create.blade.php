@extends('layouts.manage')

@section('content')
<div class="flex-container">
        <div class="columns m-t-10">
            <div class="column">
                <h1 class="title">Manage Users</h1>
            </div>
        </div>
        <hr class="m-t-10">
        <div class="card">
            <div class="card-content">
                <form action="{{route('users.store')}}" method="post">
                    <div class="columns">
                        {{csrf_field()}}
                        <div class="column">
                            <div class="field">
                                <label for="name" class="label">Name</label>
                                <div class="control">
                                    <input class="input" type="text" name="name" id="name" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="field">
                                <label for="email" class="label">Email</label>
                                <div class="control">
                                    <input class="input" type="email" name="email" id="email" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="field">
                                <label for="password" class="label">Password</label>
                                <div class="control">
                                    <input class="input" type="password" name="password" id="password"  :disabled="auto_generate" placeholder="Manually give a password">
                                </div>
                            </div>
                            <div class="field">
                                <b-checkbox
                                    name="auto_generate"
                                    v-model="auto_generate">
                                    Auto Generate Password
                                </b-checkbox>
                                </div>
                            <div class="field is-grouped">
                                <div class="control">
                                    <button class="button is-success">Submit</button>
                                </div>
                                <div class="control">
                                    <a class="button is-text" href="{{route('users.index')}}">Cancel</a>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <label for="roles" class="label">Roles:</label>
                            <input type="hidden" name="roles" :value="rolesSelected" />
                    
                            @foreach ($roles as $role)
                            <div class="field">
                                <b-checkbox v-model="rolesSelected" :native-value="{{$role->id}}">{{$role->display_name}}</b-checkbox>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    window.addEventListener('load',function(){
        var app = new Vue({
            el: '#app',
            data:{
                auto_generate:true,
                rolesSelected: [{!! old('roles') ? old('roles') : '' !!}]

            }
        });
    });
</script>
@endsection