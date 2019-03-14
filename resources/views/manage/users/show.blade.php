@extends('layouts.manage')

@section('content')
<div class="flex-container">
        <div class="columns m-t-10">
            <div class="column">
                <h1 class="title">{{$user->name}}</h1>
                <h4 class="subtitle">View User Details</h4>
            </div>

            <div class="column">
                <a href="{{route('users.edit',$user->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-user-add m-r-10"></i> Edit User</a>
            </div>
        </div>
        <hr class="m-t-10">
        <div class="card">
                <div class="card-content">
                    <div class="columns">
                        <div class="column">
                            <div class="field">
                                <label for="name" class="label">Name</label>
                                <div class="control">
                                    {{$user->name}}
                                </div>
                            </div>
                            <div class="field">
                                <label for="email" class="label">Email</label>
                                <div class="control">
                                    {{$user->email}}
                                </div>
                            </div>
                            <div class="field">
                                <label for="roles" class="label">Roles</label>
                                <div class="control">
                                    <ul>
                                        {{$user->roles->count() == 0 ? 'This user has been not assigned to any roles yet.': ''}}
                                        @foreach ($user->roles as $role)
                                            <hr>
                                            <li>{{$role->display_name}} ({{$role->description}})</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                    </div>
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
            }
        });
    });
</script>
@endsection