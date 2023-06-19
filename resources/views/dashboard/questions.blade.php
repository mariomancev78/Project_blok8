@extends('layouts.app')
@section('title', 'User Dashboard')
@section('content')
    <div class="small_hero">
        <h1>Question Dashboard</h1>
    </div>
    <div class="container">
        <div class="content">
            <h2>Users</h2>
            <div class="formContainer">
                <table>
                    <tr>
                        <th>title</th>
                        <th>description</th>
                        <th>body</th>
                    </tr>
                    @foreach ($questions as $question)
                        <tr>
                            <td>{{ $question->title }}</td>
                            <td>{{ $question->description }}</td>
                            <td>{{ $question->body }}</td>
                            <td>
                                <a href="{{ route('EditQuestion', $question->id) }}">Edit</a>
                                <a href="{{ route('DeleteQuestion', $question->id) }}">Delete</a>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>
@endsection
