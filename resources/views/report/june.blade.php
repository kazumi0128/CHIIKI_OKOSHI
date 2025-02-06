<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $month }}の活動</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .matrix {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 1fr 1fr;
            width: 85vw;
            height: 80vh;
            border: 1px solid black;
            position: relative;
        }

        .cell {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            padding: 20px;
            border: 1px solid black;
            font-size: 1.2em;
            font-weight: bold;
            background-color: white;
            width: 100%;
            text-align: left;
        }

        .cell strong {
            text-align: center;
            width: 100%;
            display: block;
            margin-bottom: 15px;
        }

        .top-left { background-color: #ffcccc; }
        .top-right { background-color: #ccffcc; }
        .bottom-left { background-color: #ccccff; }
        .bottom-right { background-color: #ffffcc; }

        .back-button {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 1.2em;
            text-decoration: none;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
        }

        .back-button:hover { background-color: #0056b3; }
    </style>
</head>
<body>
    <h1>{{ $month }}の活動</h1>
    <div class="matrix">
        <div class="cell top-left">
            <strong>会議</strong>
            <div>（未入力）</div>
        </div>
        <div class="cell top-right">
            <strong>イベント</strong>
            <div>（未入力）</div>
        </div>
        <div class="cell bottom-left">
            <strong>発信</strong>
            <div>（未入力）</div>
        </div>
        <div class="cell bottom-right">
            <strong>その他</strong>
            <div>（未入力）</div>
        </div>
    </div>
    <a href="{{ url('/') }}" class="back-button">戻る</a>
</body>
</html>
