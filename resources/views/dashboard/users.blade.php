@extends('layouts.app')
@section('title', 'User Dashboard')
@section('content')
    <div class="small_hero">
        <h1>User Dashboard</h1>
    </div>
    <div class="container">
        <div class="content">
            <h2>Users</h2>
            <div class="formContainer">
                <table>
                    <tr>
                        <th>Username</th>
                        <th>Role</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                        <th>Actions</th>
                    </tr>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->role }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td>{{ $user->updated_at }}</td>
                            <td>
                                <a href="{{ route('EditUser', $user->id) }}">Edit</a>
                                <a href="{{ route('DeleteUser', $user->id) }}">Delete</a>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
