<!DOCTYPE html>
<html>
<head>
    <title>Your Surprises 🎁</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            background: linear-gradient(to right, #fbc2eb, #a6c1ee);
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            flex-direction: column;
        }

        h1 {
            color: #ff3366;
            margin-bottom: 30px;
        }

        .gifts {
            display: flex;
            gap: 25px;
            justify-content: center;
        }

        .gift {
            width: 120px;
            height: 120px;
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 50px;
            cursor: pointer;
            transition: transform 0.3s;
        }

        .gift:hover {
            transform: scale(1.1);
        }

        p {
            margin-top: 10px;
            font-size: 18px;
            color: #333;
        }
    </style>
</head>

<body>

    <h1>🎉 Choose Your Surprise! 🎉</h1>

    <div class="gifts">
        <div>
            <div class="gift" onclick="location.href='photo.php'">📸</div>
            <p>Photos</p>
        </div>

        <div>
            <div class="gift" onclick="location.href='video.php'">🎥</div>
            <p>Video</p>
        </div>

        <div>
            <div class="gift" onclick="location.href='letter.php'">💌</div>
            <p>Letter</p>
        </div>

        <div>
            <div class="gift" onclick="location.href='final.php'">❤️</div>
            <p>Final Message</p>
        </div>
    </div>

</body>
</html>
