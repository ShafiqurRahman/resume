<?php
$jason_data = file_get_contents('json/cv.json');
$resume = json_decode($jason_data, true);
// echo "<pre>";
// var_dump ($resume);
// echo "</pre>";

    //var_dump($_SERVER);
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About <?= $resume['name']; ?></title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <?php
        $url = explode("/",$_SERVER["REQUEST_URI"]);
    
        if ($url[2] === "about.php") {
            $class_name = "active";
        }else{
            $class_name="";
        }
        //var_dump($class_name);
        include 'header.php'; 
    ?>
    <main>
        <section class="container">
            <div class="card" style="width: 25rem; margin: 0 auto;">
                <img class="card-img-top img-responsive" src="images/sumon_pp.jpg" alt="Mohammad Shafiqur Rahman">
                <div class="card-body">
                    <h5 class="card-title">Glimps about me</h5>
                    <p class="card-text">
                        <ul class="ul">
                        <?php 
                            foreach ($resume['extra_curriculler_activities'] as  $activity) : ?>
                            <li class="list-item"><?= $activity; ?></li>
                            <?php endforeach;?>
                        </ul>
                    </p>
                    <a href="cv.php" class="btn btn-primary">Know brief about me</a>
                </div>
            </div>
        </section>
    </main>
    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>