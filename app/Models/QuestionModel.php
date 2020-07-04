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

    public static function find_by_id($id) {
        $question = DB::table('question')->where('id', $id)->first();
        return $question;
    }

    public static function get_answers_by_id($id) {
        $answers = DB::table('answer')->where('question_id','=', $id)->get();
        return $answers;
    }

    public static function update($id, $request) {
        $question = DB::table('question')
                      ->where('id',$id)
                      ->update([
                        'title'=> $request['title'],
                        'content'=>$request['content']
                      ]);
        return $question;
    }

    public static function destroy($id) {
        $del_ans = DB::table('answer')
                     -> where('question_id', $id)
                     -> delete();
        $del_que = DB::table('question')
                     -> where('id', $id)
                     -> delete();
        return $del_que;
    }
}
