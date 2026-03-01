<?php

namespace Database\Seeders;

use App\Models\Option;
use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Question::factory(10)->create()->each(function ($question) {

            $total_option = rand(0, 3);

            Option::factory(4)->create([
                'question_id' => $question,
            ])->each(function ($option, $index) use ($total_option) {

                $option->update([
                    'is_correct' => $index === $total_option,
                ]);
            });

        });
    }
}
