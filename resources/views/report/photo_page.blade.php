<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ ucfirst($event) }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .photo {
            width: 80%;
            max-width: 600px;
            height: auto;
            border: 2px solid black;
        }
        .small-photo {
            width: 50%; /* ほうれん草・ブロッコリーの写真を小さく表示 */
            max-width: 400px;
            height: auto;
            border: 2px solid black;
        }
        .comment {
            margin-top: 15px;
            font-size: 1.2em;
            font-weight: bold;
        }
        .back-button {
            margin-top: 30px;
            padding: 10px 20px;
            font-size: 1.2em;
            text-decoration: none;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            display: inline-block;
        }
        .back-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>
        @if ($event == 'iwatesan')
            岩手山山開き
        @elseif ($event == 'hourensou')
            ほうれん草収穫
        @elseif ($event == 'broccoli')
            ブロッコリー植え付け体験
        @endif
    </h1>
    
    <img src="{{ asset('images/' . $event . '.jpg') }}" 
         class="{{ ($event == 'hourensou' || $event == 'broccoli') ? 'small-photo' : 'photo' }}" 
         alt="{{ ucfirst($event) }} の写真">
    
    <p class="comment">
        @if ($event == 'iwatesan')
            あと少しで山頂だったのに残念。翌年再チャレンジ！
        @elseif ($event == 'hourensou')
            朝からあせびっしょり。いつもひとりでこれは凄い。
        @elseif ($event == 'broccoli')
            腰がつらい。これをやられている農家さんにはリスペクト。
        @endif
    </p>
    
    <a href="{{ url('/july') }}" class="back-button">戻る</a>
</body>
</html>

