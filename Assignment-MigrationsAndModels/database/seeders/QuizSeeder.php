<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quiz;

class QuizSeeder extends Seeder
{
    public function run()
    {
        $quizzes = [
            [
                'name' => 'Quiz 1',
                'description' => 'Description for Quiz 1',
            ],
            [
                'name' => 'Quiz 2',
                'description' => 'Description for Quiz 2',
            ],
            [
                'name' => 'Quiz 3',
                'description' => 'Description for Quiz 3',
            ],
            [
                'name' => 'Quiz 4',
                'description' => 'Description for Quiz 4',
            ],
            [
                'name' => 'Quiz 5',
                'description' => 'Description for Quiz 5',
            ],
        ];

        foreach ($quizzes as $quiz) {
            Quiz::create($quiz);
        }
    }
}
