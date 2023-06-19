<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function save(Request $request)
    {
        $comment = new Comment();
        $comment->user_id = $request->user_id;
        $comment->question_id = $request->question_id;
        $comment->title = $request->title;
        $comment->body = $request->body;
        $comment->save();

        return redirect()->back()->with('message', 'Comment geplaatst');
    }

    public function show()
    {
        $comments = Comment::all();
        return view('question/popular', ['comments' => $comments]);
    }

    public function showAdmin()
    {
    $users = User::all();
    $comments = Comment::all(); 
    $questions = Question::all();
    return view('dashboard/comments', ['comments' => $comments, 'users' => $users, 'questions' => $questions]);
    }

     public function edit($id)
    {
        $comment = Comment::find($id);
        return view('dashboard/comments/edit', ['comment' => $comment]);
    }

    public function update(Request $request, $id)
    {
        $comment = Comment::find($id);
        $comment->user_id = $request->user_id;
        $comment->question_id = $request->question_id;
        $comment->title = $request->title;
        $comment->body = $request->body;
        $comment->save();
        return redirect()->route('CommentDashboard')->with('message', 'Comment aangepast');
    }

    public function delete($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        return redirect()->route('CommentDashboard')->with('message', 'Comment verwijderd');
    }


}
