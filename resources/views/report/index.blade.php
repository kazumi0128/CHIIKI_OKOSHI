<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            text-align: center;
            background: url('{{ $coverImage }}') no-repeat center center fixed;
            background-size: cover;
            color: white;
        }
        .overlay {
            background: rgba(0, 0, 0, 0.5);
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        h1 {
            font-size: 2.5em;
        }
    </style>
</head>
<body>
    <div class="overlay">
        <h1>{{ $title }}</h1>
    </div>
</body>
</html>
