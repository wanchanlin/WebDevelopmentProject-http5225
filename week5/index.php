<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       
    </style>
</head>
<body>
    <?php
    $connect =  mysqli_connect('localhost','root','root','colors');
    if (!$connect) {
        die("connection failed:".mysqli_connect_error());
    }

    $query = "SELECT * FROM colors";
    $colors = mysqli_query($connect, $query);
    echo '<pre>'. print_r($colors) . '</pre>';
   
    
  
    while($row = mysqli_fetch_assoc($colors)) {
         
        echo '<div style="display:inline-block; width:28%; padding:2rem; text-align:center; background-color: '. $row['Hex']. ';"> '. $row['Name']. '</div>';
    }
    
    mysqli_close($connect);
 
    
       
    ?>

</body>
</html>