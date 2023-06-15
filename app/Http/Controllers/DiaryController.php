<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDiary;
use App\Http\Requests\EditDiary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Diary;

class DiaryController extends Controller
{
    public function index()
    {
        // すべてのフォルダを取得する
        $diaries = Diary::paginate(5);

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

    public function showEditForm(int $id, EditDiary $request)
    {
        $dairy = Diary::find($id);
    
        return view('diaries/edit', [
            'dairy' => $dairy,
        ]);
    }

    public function edit(int $id, EditDiary $request)
    {
        $diary = Diary::find($id);
        $diary->content = $request->content;

        $diary->save();

        return redirect()->route('diaries.index');
    }
}
