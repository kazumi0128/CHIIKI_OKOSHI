<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ふるさとCM大賞</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            padding: 20px;
        }
        iframe {
            width: 80%;
            height: 400px;
        }
        .back-button {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 1.2em;
            text-decoration: none;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
        }
        .back-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>ふるさとCM大賞</h1>
    <iframe src="https://www.youtube.com/embed/{{ $youtubeVideoId }}" frameborder="0" allowfullscreen></iframe>
    <br>
    <a href="{{ url('/july') }}" class="back-button">戻る</a>
</body>
</html>
