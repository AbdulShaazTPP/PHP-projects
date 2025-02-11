<?php 

$game = array("Rock", "Paper", "Scissors");
$player = $_POST['game'];
$computer = $_POST['game'];
$computer = $game[array_rand($game,1)];

if($player == $computer){
    echo "TIE, play again";
}
elseif($player == "Rock" && $computer == "Scissors"){
    echo "YOU WIN";
} 
elseif($player == "Paper" && $computer == "Rock"){
    echo "YOU WIN";
}
elseif($player == "Scissors" && $computer == "Paper"){
    echo "YOU WIN";
}
else("YOU LOST,TRY AGAIN");

$computer = $game[array_rand($game,1)];
echo $computer;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>
        .body{
            text-align: center;
            padding-top: 250px;
            background-image: url("pic.jpg");
            background-repeat:no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body class = "body">
    

    <html>
        <form method  = "POST">          
        INPUT:<input type = "text" name = "game">
<input type = "submit" value = "Choose">    
        </form>
    </html>
</body>
</html>
