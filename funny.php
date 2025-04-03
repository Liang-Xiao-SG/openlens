<?php
// Basic array of jokes — works with PHP 5.5
$jokes = array(
    "Why did the PHP developer go broke? Because he used echo instead of print_r!",
    "I told my computer I needed a break... now it won’t stop sending me coffee ads.",
    "Why did the server go to therapy? Too many requests!",
    "How do you comfort a JavaScript bug? You console it.",
    "Why don’t programmers like nature? It has too many bugs."
);

// Pick a random joke
$joke = $jokes[array_rand($jokes)];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Funny PHP Page</title>
    <style>
        body {
            background-color: #fef6e4;
            font-family: "Comic Sans MS", cursive, sans-serif;
            text-align: center;
            padding-top: 100px;
        }
        .emoji {
            font-size: 100px;
            position: absolute;
            animation: bounce 4s infinite linear;
        }
        @keyframes bounce {
            0%   { top: 10%; left: 10%; }
            25%  { top: 10%; left: 80%; }
            50%  { top: 70%; left: 80%; }
            75%  { top: 70%; left: 10%; }
            100% { top: 10%; left: 10%; }
        }
        .joke-box {
            font-size: 20px;
            background-color: #fff3;
            padding: 20px;
            border-radius: 15px;
            display: inline-block;
            box-shadow: 0 0 20px #ffda77;
        }
    </style>
</head>
<body>

    <div class="emoji">😂</div>

    <div class="joke-box">
        <h2>Here's a dev joke for you:</h2>
        <p><?php echo $joke; ?></p>
    </div>

</body>
</html>
