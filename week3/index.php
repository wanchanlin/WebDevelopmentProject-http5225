<!doctype html>
<html>
    <head>
        <title>PHP If Statements</title> 
    </head>
    <body>

        <h1>PHP If Statements</h1> 

        <p>Use PHP echo and variables to output the following link information, use if statements to make sure everything outputs correctly:</p>

        <?php

        // **************************************************
        // Do not edit this code

        // Generate a random number (1, 2, or 3)
        $randomNumber = ceil(rand(1,3));

        // Display the random number
        echo '<p>The random number is '.$randomNumber.'.</p>';

        // Based on the random number PHP will define four variables and fill them with information about Codecademy, W3Schools, or MDN
        
        // The random number is 1, so use Codecademy
        if ($randomNumber == 1)
        {

            $linkName = 'Codecademy';
            $linkURL = 'https://www.codecademy.com/';
            $linkImage = '';
            $linkDescription = 'Learn to code interactively, for free.';

        }

        // The random number is 2, so use W3Schools
        elseif ($randomNumber == 2)
        {

            $linkName = '';
            $linkURL = 'https://www.w3schools.com/';
            $linkImage = 'w3schools.png';
            $linkDescription = 'W3Schools is optimized for learning, testing, and training.';

        }

        // The random number is 3, so use MDN
        else
        {

            $linkName = 'Mozilla Developer Network';
            $linkURL = 'https://www.codecademy.com/';
            $linkImage = 'mozilla.png';
            $linkDescription = 'The Mozilla Developer Network (MDN) provides information about Open Web technologies.';

        }

        // **************************************************

        // Beginning of the exercise, place all of your PHP code here
        // Upload this page (or use your localhost) and refresh the page, the h2 below will change
        echo '<h2>'.$linkName.'</h2>';

        if ($linkName == '') {
            echo 'No Name'.'<br>';
        } else {
            echo '<a href="'. $linkURL . '">' . $linkName . '</a>'.'<br>'.'<br>';  
        }
        


        if ($linkImage == '') {
            echo 'No Image'.'<br>'.'<br>';
        } else {
            echo '<img style="width:10rem;" src="' . $linkImage .'">';
        }
       
 
        ?>


        <hr>
        <h1>Code Challenge</h1>
        <?php 
       $hour = ceil(rand(1,24));
       echo $hour.'<br>';
      if($hour>=5 && $hour<=9){
          echo 'Breakfast: "Bananas, Apples, and Oats"';
        }if($hour>=18 && $hour<=21){
         echo 'Lunch: "Fish, Chicken, and Vegetables"';
        }   
        if($hour>=17 && $hour<=20){}
        else{
        echo'no feeding time';}

        ?>
        <hr>
        <?php
       '<br>';
        $randomNumber = ceil(rand(1,100));

        if($randomNumber%3==0 && $randomNumber%5==0  )
        {
        echo'FizzBuzz';
        }
        elseif($randomNumber%3==0){
        echo'Fizz';
        }elseif
        ($randomNumber%5==0){
        echo'Buzz';}
        else{
        echo $randomNumber;
        }
       


        ?>

    </body>
</html>