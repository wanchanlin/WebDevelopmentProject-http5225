<!doctype html>
<html>
<head>
    <title>PHP and Creating Output</title>
</head>
<body>
<?php echo "<h1>PHP and Creating Output</h1>"; ?>
    <?php echo "<p>The PHP echo command can be used to create output.</p>"; ?>
    <?php echo "<p>When creating output using echo and PHP, quotes can often cause problems. There are several solutions to using quotes within an echo statement:</p>"; ?>
    <?php echo "<ul>
        <li>Use HTML special characters</li>
        <li>Alternate between single and double quotes</li>
        <li>Use a backslash to escape quotes</li>
    </ul>"; ?>
    <?php echo "<h2>More HTML to Convert</h2>"; ?>
    <?php echo '<p>PHP says "Hello World!"</p>'; ?>
    <?php echo "<p>Can you display a sentence with ' and \"?</p>"; ?>
    <?php echo '<img src="http://google.com/image">'; ?>
    <img src="http://google.com/image" alt="<?php echo 'ALT TAG'; ?>">

    <br>
    <br>
    <br>

    <?php 
    $name="Joyce Lin";
    $lastname="Lin";
    echo "Hello, " .$name.'<br>'; 

    $person['first']= 'joyce';
    $person['last']= 'Lin'; 
    $person['email']= 'joycexwanchan@gmail.com'; 
    $person['web']= 'https://wanchanlin.vercel.app/'; 

    echo "hello " .$person['first'].'<br>'; 
    echo '<a href="mailto:' . $person['email'] . '">' . $person['email'] . '</a>'.'<br>'; 
    echo '<a href="' . $person['web'] . '">' . $person['web'] . '</a>'.'<br>';

     ?>

   
</body>
</html>