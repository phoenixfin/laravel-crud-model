<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuestionModel;

class QuestionController extends Controller
{
    public function index() {
        $items = QuestionModel::get_all();
        // dd($items);
        return view('question.index', compact('items'));
    }

    public function create() {
        return view('question.form');
    }

    public function post(Request $request) {
        $data = $request->all();
        unset($data["_token"]);
        $item = QuestionModel::insert($data);
        if ($item) {
            return $this->index();
        }
    }

    public function show($id){
       $question = QuestionModel::find_by_id($id);
       $answers = QuestionModel::get_answers_by_id($id);
       $QA = Array('Q'=>$question, 'A'=>$answers);
       return view('question.show', compact('QA'));
    }

    public function edit($id) {
       $question = QuestionModel::find_by_id($id);
       return view('question.edit', compact('question'));
    }

    public function update($id, Request $request) {
        $question = QuestionModel::update($id, $request->all());
        return redirect('/question');
    }

    public function destroy($id) {
        $deleted = QuestionModel::destroy($id);
        return redirect('/question');
    }

}
