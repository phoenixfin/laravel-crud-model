<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class AnswerModel {
    public static function get_all() {
        $answers = DB::table('question')
                     ->join('answer', 'question.id', '=', 'answer.question_id')
                     ->select('answer.*','question.title')
                     ->get();
        return $answers;
    }

    public static function insert($data) {
        $new_answer = DB::table('answer')->insert($data);
        return $new_answer;
    }
}
