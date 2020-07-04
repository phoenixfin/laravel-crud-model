<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnswerModel;
use App\Models\QuestionModel;

class AnswerController extends Controller
{
    public function index() {
        $items = AnswerModel::get_all();
        return view('answer.index', compact('items'));
    }

    public function index_by_question($id) {
        $items = AnswerModel::get_by_question($id);
        return view('answer.index', compact('items'));
    }

    public function create() {
        $questions = QuestionModel::get_all();
        return view('answer.form', compact('questions'));
    }

    public function create_by_question($id) {
        $question = QuestionModel::find_by_id($id);
        if (is_null($question)) {
            return view('answer.null');
        } else {
            $questions = Array($question);
            return view('answer.form', compact('questions'));
        }

    }

    public function post(Request $request) {
        $data = $request->all();
        unset($data["_token"]);
        // dd($data);
        $item = AnswerModel::insert($data);
        if ($item) {
            return $this->index();
        }
    }

}
