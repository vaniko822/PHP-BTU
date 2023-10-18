<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        $quizzes = [
            [
                'name' => 'Quiz 1',
                'photo' => 'quiz1.jpg',
                'status' => 'active',
            ],
            [
                'name' => 'Quiz 2',
                'photo' => 'quiz2.jpg',
                'status' => 'inactive',
            ],
        ];

        return view('home', ['quizzes' => $quizzes]);
    }
}
