<!DOCTYPE html>
<html>
<head>
<title>You Said Yes ❤️</title>

<style>
body {
    margin: 0;
    height: 100vh;
    background: linear-gradient(to right, #ff758c, #ff7eb3);
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: Arial, sans-serif;
}

.card {
    background: white;
    padding: 40px;
    border-radius: 20px;
    text-align: center;
    width: 360px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.3);
}

h1 {
    color: #ff3366;
}

p {
    font-size: 18px;
    margin-top: 15px;
}
button {
    margin-top: 25px;
    padding: 12px 30px;
    font-size: 18px;
    border: none;
    border-radius: 30px;
    background: #ff3366;
    color: white;
    cursor: pointer;
}
button:hover {
    background: #e62e5c;
}
</style>
</head>

<body>

<div class="card">
    <h1>I knew it 😘❤️</h1>
    <p>Close your eyes and listen to me… 🎧</p>

    <!-- AUDIO -->
    <audio autoplay>
    <source src="priti.mp4" type="audio/mpeg">
    Your browser does not support audio.
</audio>

    <form action="gifts.php">
        <button>Open your surprise 🎁</button>
    </form>
</div>

</body>
</html>
