<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDiary;
use Illuminate\Http\Request;
use App\Models\Diary;

class DiaryController extends Controller
{
    public function index()
    {
        // すべてのフォルダを取得する
        $diaries = Diary::all();

        return view('diaries/index', [
            'diaries' => $diaries
        ]);
    }

    public function showCreateForm()
    {
        return view('diaries/create');
    }

    public function create(CreateDiary $request)
    {
        $diary = new Diary();
        $diary->content = $request->content;

        $diary->save();

        return redirect()->route('diaries.index');
    }
}
