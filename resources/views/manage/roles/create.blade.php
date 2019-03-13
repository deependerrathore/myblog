@extends('layouts.manage')

@section('content')
<div class="flex-container">
    <div class="columns m-t-10">
        <div class="column">
            <h1 class="title">Create New Role</h1>
        </div>
    </div>
    <hr class="m-t-10">
    <form action="{{route('roles.store')}}" method="POST">
            {{csrf_field()}}
        <div class="columns">
            <div class="column">
                <div class="box">
                    <article class="media">
                        <div class="media-content">
                            <div class="content">
                                <h2 class="title">Role Details:</h2>
                                    <div class="field">
                                        <div class="control">
                                            <label for="display_name" class="label">Name (Human Readable)</label>
                                            <input type="text" class="input" name="display_name" id="display_name" value="{{old('display_name')}}"/>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="control">
                                            <label for="slug" class="label">Slug (Can't be changed)</label>
                                            <input type="text" class="input" name="name" id="name" value="{{old('name')}}"/>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="control">
                                            <label for="description" class="label">Description</label>
                                            <input type="text" class="input" name="description" id="description" value="{{old('description')}}"/>
                                        </div>
                                    </div>
                                    <input type="hidden" :value="permissionSelected" name="permissions"/>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            
        </div>
        <div class="columns">
            
            <div class="column">
                <div class="box">
                    <article class="media">
                        <div class="media-content">
                            <div class="content">
                                <h2 class="title">Role Details:</h2>
                                <ul>
                                    @foreach ($permissions as $permission)
                                    <div class="field">
                                        <b-checkbox :native-value="{{$permission->id}}" v-model="permissionSelected">
                                                {{$permission->display_name}} <em>{{$permission->description}}</em>
                                            </b-checkbox>
                                        </div>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </article>
                    </div><!--.end of the box-->
                    <button class="button is-primary">Create New Role</button>
                </div>      
            </div>
        </div>
    </form>
</div>
@endsection

@section('scripts')
<script>
    window.addEventListener('load',function(){
        var app = new Vue({
            el: '#app',
            data:{
                permissionSelected:[],
            }
        });
    });
</script>
@endsection