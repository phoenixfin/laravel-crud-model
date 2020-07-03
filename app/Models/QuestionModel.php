<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class QuestionModel {
    public static function get_all() {
        $questions = DB::table('question')->get();
        return $questions;
    }

    public static function insert($data) {
        $new_question = DB::table('question')->insert($data);
        return $new_question;
    }
}