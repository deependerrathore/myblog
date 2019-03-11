@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns m-t-10">
            <div class="column">
                <h1 class="title">Manage Permissions</h1>
            </div>
            <div class="column">
                <a href="{{route('permissions.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-add m-r-10"></i> Create New Permission</a>
            </div>
        </div>
        <hr class="m-t-10">
        <div class="card">
            <div class="card-content">
                <table class="table is-bordered is-striped is-hoverable is-fullwidth">
                    <thead>
                        <tr> 
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($permissions as $permission)
                        <tr>
                                <td>{{$permission->display_name}}</td>
                                <td>{{$permission->name}}</td>
                                <td>{{$permission->description}}</td>
                                <td ><a class="button is-outlined" href="{{route('permissions.edit',$permission->id)}}">Edit</a> | <a class="button is-outlined" href="{{route('permissions.show',$permission->id)}}">Show</a> </td>
                            </tr>
                        @endforeach
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
@endsection