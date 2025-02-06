<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $title = "令和6年度 地域おこし協力隊 活動報告";
        $coverImage = asset('storage/cover.jpg'); // 背景画像のパス

        return view('report.index', compact('title', 'coverImage'));
    }
}
