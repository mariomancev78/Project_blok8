<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Comment;
use App\Models\User;


class QuestionController extends Controller
{
    public function save(request $request)
    {
        $question = new Question;
        $question->name = session('LoggedUserName');
        $question->title = $request->title;
        $question->description = $request->description;
        $question->body = $request->body;
        $question->user_id = session('LoggedUser');

        $success = $question->save();

        if ($success) {
            return redirect()->route('index')->with('message', 'Vraag aangemaakt');
        } else {
            return back()->with('message', 'Er is iets mis gegaan, probeer het later opnieuw');
        }

    }
    public function show()
    {
        $questions = Question::all();
        return view('popular', ['questions' => $questions]);
    }

    public function showSingle($id)
    {
        $questions = Question::find($id);
        $comments = Comment::where('question_id', $id)->get();
        $users = User::where('id', $questions->user_id)->get();

        return view('question', ['questions' => $questions, 'comments' => $comments, 'users' => $users]);
    }
    public function showAdmin()
    {
        $questions = Question::all();
        return view('dashboard/questions', ['questions' => $questions]);
    }
    public function edit($id)
    {
        $questions = Question::find($id);
        return view('dashboard/questions/edit', ['questions' => $questions]);
    }
    public function update(request $request, $id)
    {
        $question = Question::find($id);
        $question->title = $request->title;
        $question->description = $request->description;
        $question->body = $request->body;
        $question->save();
        return redirect()->route('QuestionDashboard')->with('message', 'Vraag aangepast');
    }
    public function delete($id)
    {
        $question = Question::find($id);
        $question->delete();
        return redirect()->route('QuestionDashboard')->with('message', 'Vraag verwijderd');
    }
}