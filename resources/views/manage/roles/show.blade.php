@extends('layouts.manage')

@section('content')
<div class="flex-container">
    <div class="columns m-t-10">
        <div class="column">
            <h1 class="title">{{$role->display_name}}<small class="m-l-25"><em>({{$role->name}})</em></small></h1>
            <h4 class="subtitle">{{$role->description}}</h4>
        </div>

        <div class="column">
            <a href="{{route('roles.edit',$role->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-user-add m-r-10"></i> Edit Role</a>
        </div>
    </div>
    <hr class="m-t-10">
    <div class="columsn">
        <div class="column">
            <div class="box">
                <article class="media">
                    <div class="media-content">
                        <div class="content">
                            <h2 class="title">Permission:</h2>
                            {{$role->permissions->count() == 0 ? 'There is no permission has been assigned to this role.': ''}}
                            <ul>
                                @foreach ($role->permissions as $r)
                                    <li>{{$r->display_name}}  <em>({{$r->description}})</em></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </article>
            </div>
        </div>
        <div class="column"></div>
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