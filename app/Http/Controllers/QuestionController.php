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

}
