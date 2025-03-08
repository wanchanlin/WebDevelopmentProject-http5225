<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bean Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body >
<?php include('reusables/nav.php'); ?>
    <section class="content-wrapper">
   
    <div class="container mt-4">
    
    
    <?php
        include('reusables/connection.php');

        // Get beanId from URL
        $beanId = isset($_GET['beanId']) ? $_GET['beanId'] : null;

        // Validate the beanId
        if ($beanId === null || !is_numeric($beanId)) {
            echo "<div class='alert alert-danger'>Invalid Bean ID</div>";
            exit;
        }

        // Fetch bean details from 'beantype' table
        $query = "SELECT * FROM beantype WHERE id = " . mysqli_real_escape_string($connect, $beanId);
        $result = mysqli_query($connect, $query);

        if (mysqli_num_rows($result) > 0) {
            $bean = mysqli_fetch_assoc($result);
    ?>

    <div class="row align-items-center">
        
        <div class="col-md-6 text-center">
            <img style="width: 300px; " src="images/<?php echo $bean['name']; ?>.png" alt="<?php echo $bean['name']; ?>" class="img-fluid rounded ">
        </div>
        <div class="col-md-6">
            <h2 style="text-align: left;"><?php echo $bean['name']; ?></h2>
            <p><strong>Origin:</strong> <?php echo $bean['origin']; ?></p>
            <p><strong>Flavor:</strong> <?php echo $bean['flavor']; ?></p>
            <p><strong>Acidity:</strong> <?php echo $bean['acidity']; ?></p>
            <p><strong>Caffeine Content:</strong> <?php echo $bean['caffeine']; ?></p>
            <p><strong>Shape:</strong> <?php echo $bean['shape']; ?></p>
        </div>

        
        
    </div>

    <?php
        } else {
            echo "<div class='alert alert-warning'>No bean found with ID: " . $beanId . "</div>";
        }
    ?>
</div>
    
   
    </section>
    <?php include('reusables/footer.php'); ?>
</body>
</html>