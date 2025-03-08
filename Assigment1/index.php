<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magic Coffee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <?php include('reusables/nav.php'); ?>
    
    <section class="hero text-center py-5 container-fluid">
        <h2>Most Popular Coffee Types Around the World ☕</h2>
        <p>Coffee is more than just a drink—it’s a culture, a ritual, and a daily necessity for millions of people worldwide. From strong espressos to creamy lattes, here are some of the most popular coffee types you must try!</p>
    </section>
    
    <section class="content-wrapper">
        <div class="container">
            <h2 class="text-center">Ranks</h2>
            <div class="row">
            <?php 
    include('reusables/connection.php');
    $beanTypes = [1 => 'Arabica', 2 => 'Robusta']; 

    $query = 'SELECT * FROM rank';
    $rank = mysqli_query($connect, $query);

    foreach ($rank as $rank) {
        $beanId = $rank['beanId'];
        $beanTypeName = $beanTypes[$beanId] ?? 'Unknown';
?>

    <div class="col-12">
        <div class="card mb-4 shadow-sm">
            <div class="card-body d-flex flex-column flex-md-row">
                <!-- Image on top on mobile, right on larger screens -->
                <div class=" col-md-4 text-center">
                    <img class="drink-img img-fluid rounded" src="images/<?php echo $rank['image']; ?>" alt="<?php echo $rank['name']; ?>">
                </div>
                <!-- Content below image on mobile, left on larger screens -->
                <div class=" col-md-8">
                    <p class="badge yellow"><?php echo $rank['id']; ?></p>
                    <h3 style="text-align: left;"><?php echo $rank['name']; ?></h3>
                    <p><?php echo $rank['description']; ?></p>
                    <a href="bean_detail.php?beanId=<?php echo $beanId; ?>" class="badge bg-warning text-dark">
                    <?php echo $beanTypeName; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>

<?php } ?>
            </div>
        </div>
    </section>
    
    <?php include('reusables/footer.php'); ?>
</body>
</html>