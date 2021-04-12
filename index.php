<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h3>Guess the number !</h3>

    <?php
    


    $num = $_POST['num_ent'];

    $sub = $_POST['sub'];

    $rand = rand(1,10);



  

    ?>

    <form action="" method="POST">
    Guess a number between 1 and 10 : 
    <input type="text" name="num_ent" value="">
    <input class="btn" type="submit" name="sub" value="submit">
    </form>

    </br>

    My number :

    <?php  

    if(isset($num)) {

    if($num != $rand) {
        if ($num >= $rand){
            echo  $rand . "</br></br>guess too high, try again !";
        } elseif ($num <= $rand) {
            echo $rand . "</br></br>guess too low, try again !";
        }
    }else {
       
        echo "my num:" . $rand . "</br>your num:" . $num;
        echo "</br>GOOD JOB !";
    }

    }
    ?>

  


    </div>

    
</body>
</html>