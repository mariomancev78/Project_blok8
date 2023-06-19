@extends('layouts.app')
@section('title', 'Comment Dashboard')
@section('content')
    <div class="small_hero">
        <h1>Comment Dashboard</h1>
    </div>
    <div class="container">
        <div class="content">
            <h2>Comments</h2>
            <div class="formContainer">
                <table>
                    <tr>
                        <th>title</th>
                        <th>body</th>
                        <th>user</th>
                        <th>question</th>
                    </tr>
                    @foreach ($comments as $comment)
                        <tr>
                            <td>{{ $comment->title }}</td>
                            <td>{{ $comment->body }}</td>
                            <td>
                                @foreach ($users as $user)
                                    @if ($user->id == $comment->user_id)
                                        {{ $user->name }}
                                    @endif
                                @endforeach
                                @foreach ($questions as $question)
                                    @if ($question->id == $comment->question_id)
                                        <td>{{ $question->title }}</td>
                                    @endif
                                @endforeach
                            </td>
                            <td> <a href="{{ route('EditComment', $comment->id) }}">Edit</a></td>
                            <td><a href="{{ route('DeleteComment', $comment->id) }}">Delete</a></td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>
@endsection
