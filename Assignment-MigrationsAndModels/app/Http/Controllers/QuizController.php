<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Quiz;

class QuizController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::all();
        return view('main_page', ['quizzes' => $quizzes]);
    }

    public function createOrUpdate(Request $request){
        $data = $request->post();
        $quizz = [
            'name' => $data['name'],
            'description' => $data['description']
        ];

        if(isset($data['id'])){
            Quiz::where('id', $data['id'])->update($quizz);
        } else {
            Quiz::create($quizz);
        }

        return redirect('/');
    }

    public function savePage(string $id = NULL){
        if($id){
            $quizz = Quiz::find($id);
            return view('save_quizz', ['quizz' => $quizz]);
        }

        return view('save_quizz');
    }
}
