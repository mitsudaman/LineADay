<?php

namespace App\Http\Controllers;

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
}
