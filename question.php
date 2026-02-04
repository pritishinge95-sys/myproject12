<!DOCTYPE html>
<html>
<head>
<title>One Question ❤️</title>

<style>
body {
    margin: 0;
    height: 100vh;
    background: linear-gradient(to right, #ff9a9e, #fad0c4);
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

#message {
    margin-top: 15px;
    font-size: 18px;
    color: #444;
}

.buttons {
    margin-top: 30px;
}

button {
    padding: 12px 25px;
    font-size: 18px;
    border: none;
    border-radius: 30px;
    cursor: pointer;
    margin: 10px;
}

.yes {
    background: #ff3366;
    color: white;
}

.no {
    background: #ccc;
    color: black;
    position: relative;
}
</style>

<script>
let messages = [
    "Are you sure bandi? 🥺",
    "Think again bandi 😌",
    " bandi My heart is watching you  💔",
    "Don’t break my heart bandi😭",
    "Okay last chance bandi😈"
];

let count = 0;

function shakeNo() {
    let btn = document.getElementById("noBtn");
    let msg = document.getElementById("message");

    // shake animation
    btn.style.animation = "shake 0.3s";
    setTimeout(() => {
        btn.style.animation = "";
    }, 300);

    // change text
    if (count < messages.length) {
        msg.innerText = messages[count];
        count++;
    } else {
        msg.innerText = "You have only one option now 😏❤️";
    }
}
</script>

<style>
@keyframes shake {
    0% { left: 0px; }
    25% { left: -5px; }
    50% { left: 5px; }
    75% { left: -5px; }
    100% { left: 0px; }
}
</style>

</head>

<body>

<div class="card">
    <h1>Do you love me? ❤️</h1>
    <div id="message">Choose wisely 😌</div>

    <div class="buttons">
        <form action="yes.php">
            <button class="yes">YES 💖</button>
        </form>

        <button class="no" id="noBtn" onclick="shakeNo()">NO 😏</button>
    </div>
</div>

</body>
</html>
