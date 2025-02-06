<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? '活動報告' }}</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            text-align: center;
            background: url('{{ $coverImage ?? asset("images/default_cover.jpg") }}') no-repeat center center fixed;
            background-size: contain;
            background-position: center center;
            background-repeat: no-repeat;
            color: white;
            width: 100vw;
            height: 100vh;
            overflow: hidden;
        }

        .overlay {
            background: rgba(0, 0, 0, 0.5);
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        h1 {
            font-size: 3em;
        }

        .side-buttons {
            position: absolute;
            top: 10px;
            display: flex;
            flex-direction: column;
        }

        .left-buttons {
            left: 30px;
        }

        .right-buttons {
            right: 30px;
        }

        .side-buttons a {
            display: block;
            width: calc(180px - 3cm + 1cm);
            margin: 8px 0;
            padding: 12px 18px;
            background-color: rgba(255, 255, 255, 0.8);
            color: black;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
            text-align: center;
            font-size: 1.2em;
        }

        .side-buttons a:hover {
            background-color: rgba(255, 255, 255, 1);
        }

        .special-button {
            white-space: pre-line;
        }

        .music-button {
            background-color: rgba(255, 0, 0, 0.8);
            color: white;
        }

        .music-button:hover {
            background-color: rgba(255, 0, 0, 1);
        }

        /* YouTubeのiframeを非表示 */
        #youtube-player {
            width: 0;
            height: 0;
            overflow: hidden;
        }
    </style>
</head>
<body>
    <div class="overlay">
        <!-- 左側のボタン -->
        <div class="side-buttons left-buttons">
            <a href="#" class="music-button special-button" onclick="playMusic()">八幡平旅情</a>
            <a href="{{ url('/may') }}">5月</a>
            <a href="{{ url('/june') }}">6月</a>
            <a href="{{ url('/july') }}">7月</a>
            <a href="{{ url('/august') }}">8月</a>
            <a href="{{ url('/september') }}">9月</a>
            <a href="{{ url('/october') }}">10月</a>
        </div>

        <!-- タイトル -->
        <h1>{{ $title ?? '活動報告' }}</h1>

        <!-- 右側のボタン -->
        <div class="side-buttons right-buttons">
            <a href="{{ url('/november') }}">11月</a>
            <a href="{{ url('/december') }}">12月</a>
            <a href="{{ url('/january') }}">1月</a>
            <a href="{{ url('/february') }}">2月</a>
            <a href="{{ url('/march') }}">3月</a>
            <a href="#" class="special-button">行事一覧</a>
        </div>
    </div>

    <!-- YouTubeのプレイヤー -->
    <div id="youtube-player"></div>

    <script>
        var player;

        function loadYouTubeAPI() {
            var tag = document.createElement('script');
            tag.src = "https://www.youtube.com/iframe_api";
            var firstScriptTag = document.getElementsByTagName('script')[0];
            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
        }

        window.onload = function() {
            loadYouTubeAPI();
        };

        function onYouTubeIframeAPIReady() {
            console.log("YouTube API Loaded");

            player = new YT.Player('youtube-player', {
                height: '1',
                width: '1',
                videoId: '{{ $youtubeVideoId ?? "dQw4w9WgXcQ" }}',
                playerVars: {
                    'autoplay': 1,
                    'loop': 1,
                    'playlist': '{{ $youtubeVideoId ?? "dQw4w9WgXcQ" }}',
                    'controls': 0,
                    'showinfo': 0,
                    'modestbranding': 1,
                    'disablekb': 1,
                    'mute': 0
                },
                events: {
                    'onReady': function(event) {
                        console.log("YouTube Player Ready");
                        event.target.setVolume(100);
                    },
                    'onError': function(event) {
                        console.error("YouTube Player Error", event.data);
                    }
                }
            });
        }

        function playMusic() {
            if (player && player.playVideo) {
                player.playVideo();
            } else {
                console.error("YouTube Player not ready");
            }
        }
    </script>
</body>
</html>
