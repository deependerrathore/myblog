@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns m-t-10">
            <div class="column">
                <h1 class="title">Manage Users</h1>
            </div>
            <div class="column">
                <a href="{{route('users.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-add m-r-10"></i> Create New User</a>
            </div>
        </div>
        <hr class="m-t-10">
        <div class="card">
            <div class="card-content">
                <table class="table is-bordered is-striped is-hoverable is-fullwidth">
                    <thead>
                        <tr> 
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Date Created</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->created_at->toFormattedDateString()}}</td>
                                <td class="has-text-right"><a class="button m-r-10" href="{{route('users.edit',$user->id)}}">Edit</a> | <a class="button is-outlined m-l-10" href="{{route('users.show',$user->id)}}">Show</a> </td>
                            </tr>
                        @endforeach
                    </tbody>
                    
                </table>
            </div>
        </div>
        {{ $users->links('vendor.pagination.default') }}
    </div>
@endsection