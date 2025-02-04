<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Function to fetch user data from the JSONPlaceholder API
    function getUsers() {
    $url = "https://jsonplaceholder.typicode.com/users";
    $data = file_get_contents($url);
    return json_decode($data, true);
    }
    // Get the list of users
    $users = getUsers();
    // Display the list of users    
    for ($i = 0; $i < count($users); $i++) {
        echo 'Name: ' . $users[$i]['name'] . '<br>';
        echo 'Username: '. $users[$i]['username'] . "<br>";  
        echo 'Email: <a href="mailto:'.$users[$i]['email'].'"> '.$users[$i]['email'].'</a><br>';
        echo 'Address: '.
            $users[$i]['address']['street'].' '.
            $users[$i]['address']['suite'].' '.
            $users[$i]['address']['city'].' '.
            $users[$i]['address']['zipcode']."<br><br>";
    }
    
    ?>
    <a href="mailto:W5h7r@example.com"></a>
</body>
</html>