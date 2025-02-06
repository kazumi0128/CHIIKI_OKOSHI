<?php

use Illuminate\Support\Facades\Route;

$months = ['may', 'june', 'july', 'august', 'september', 'october', 'november', 'december', 'january', 'february', 'march'];

foreach ($months as $month) {
    Route::get("/$month", function () use ($month) {
        return view("report.$month", ['month' => ucfirst($month)]);
    });
}

Route::get('/', function () {
    return view('report.index', [
        'title' => '令和6年度地域おこし協力隊 活動報告',
        'coverImage' => asset('images/cover.jpg'), // 背景画像
        'youtubeVideoId' => '1u2AYEVskWs' // YouTube動画のIDを設定
    ]);
});
