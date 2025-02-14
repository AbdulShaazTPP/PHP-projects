

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <title>ROCK, PAPER, SCISSORS</title>


<style>
    .header{
        text-align: center;
    }
    .body{
        background-color: silver;
        text-align: center;
    }
    .box{
        width: 440px;
        height: 500px;
        padding: 2rem;
        margin: 2rem auto 0;
        border-radius: 10px;
        background-color: #f3f3f3;
    }
    .form{
        display: flex;
        margin-top: 5rem;
        padding-bottom: 5rem;
    }
</style>

</head>
<body>
<div class = "box">
        <h1 class = "header">ROCK PAPER SCISSORS</h1>
        <form method="POST">
            
    <input type="text" name="choice" class="form-control">
    <input type="submit" name="shoot" value="Choose"> 
    <br>
    
    <?php 
        $choice = array("rock", "paper", "scissors");    // declaring an array of choice 
        $player_choice = $_POST['choice'];               // choosing players choice from the array
        $comp_choice = $choice[array_rand($choice,1)];   // random choice for computers from the array
        if(isset($_POST['shoot']))                       // to check if the form has been submitted
        {
            $comp_choice = rand(0,2);

            if($choice == null){                         // checking the conditions
                echo "Please Enter a valid choice";
            }
            elseif($player_choice == "rock" || $player_choice == "paper" || $player_choice == "scissors"){
                echo "You chose $player_choice";
            }

            switch ($comp_choice){                         // assigning values for the computers choice
                case 0 :                             
                    echo "The computer chose rock";
                    break;

                case 1: 
                    echo "The computer chose paper";
                    break;

                case 2 : 
                    echo "The computer chose scissors";
            }

            if (($player_choice == "rock" && $comp_choice == 0) || ($player_choice == "paper" && $comp_choice == 1) || ($player_choice == "scissors" && $comp_choice == 2)){                       
                echo "TIE, PLAY AGAIN";          
            }                                                                                                                                                                                // comparing players and computers choice
            elseif(($player_choice == "rock" && $comp_choice == 2) || ($player_choice == "paper" && $comp_choice == "0") || ($player_choice == "scissors" && $comp_choice == 1)){
                echo "YOU WIN";
            }
            else{
                echo "YOU LOST";
            }
        }
        ?>        
</form>

</body>
</html>