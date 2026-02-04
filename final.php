<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Happy Valentine’s Day, BANDI 🌹</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #ffdde1, #ee9ca7);
            overflow: hidden;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .message {
            position: relative;
            z-index: 10;
            background: white;
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        h1 { color: #e60073; font-size: 50px; margin-bottom: 20px; }
        h2 { color: #cc0066; font-size: 35px; margin-bottom: 20px; }
        p { font-size: 24px; color: #ff4d88; }

        .heart {
            position: absolute;
            width: 20px;
            height: 20px;
            background: red;
            transform: rotate(-45deg);
            animation: float 5s linear infinite;
        }
        .heart::before,
        .heart::after {
            content: "";
            position: absolute;
            width: 20px;
            height: 20px;
            background: red;
            border-radius: 50%;
        }
        .heart::before { top: -10px; left: 0; }
        .heart::after { left: 10px; top: 0; }

        @keyframes float {
            0% { transform: translateY(100vh) rotate(-45deg); opacity: 1; }
            100% { transform: translateY(-100vh) rotate(-45deg); opacity: 0; }
        }
    </style>
</head>
<body>

<div class="message">
    <h1>💖 Happy Valentine’s Day, BANDI 🌹</h1>
    <h2>I Love You ❤️</h2>
    <p>Bye! 😘</p>
</div>

<script>
// Create floating hearts
for(let i=0;i<50;i++){
    let heart = document.createElement('div');
    heart.className = 'heart';
    heart.style.left = Math.random() * window.innerWidth + 'px';
    heart.style.animationDuration = 3 + Math.random() * 5 + 's';
    heart.style.width = 10 + Math.random() * 20 + 'px';
    heart.style.height = heart.style.width;
    document.body.appendChild(heart);
}
</script>
<form action="index.php">
            <button type="submit">back 💖</button>
        </form>
</body>
</html>
