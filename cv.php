<?php
$jason_data = file_get_contents('json/cv.json');
$resume = json_decode($jason_data, true);
// echo "<pre>";
// var_dump ($resume);
// echo "</pre>";
$url = explode("/",$_SERVER["REQUEST_URI"]);
    
        if ($url[2] === "cv.php") {
            $class_name = "active";
        }else{
            $class_name="";
        }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resume of <?= $resume['name']; ?></title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <?php include('header.php'); ?>
    <main>
        <section class="container">
            <div class="row">
                <div class="article col-8">
                    <h2 class="h2"><?= $resume["name"]; ?></h2>
                    <?php foreach ($resume["contact_information"] as $contacts): ?>
                        <small class="tiny-text"><?= $contacts; ?>, </small><br>
                    <?php endforeach; ?>
                </div>
                <div class="article img-container col-4">
                    <div class="col-6 offset-2">
                        <img src="images/sumon_pp.jpg" alt="shafiqur rahman" class="img-fluid">
                    </div>
                </div>
            </div>
            <hr>
            <div class="navbar navbar-light bg-light">
                <h4 class="px-2">Career Objectives</h4>
            </div>
            <div class="profile">
                <?= $resume["profile"]; ?>
            </div>
            <div class="navbar navbar-light bg-light">
                <h4 class="px-2">Career Summary</h4>
            </div>
            <div class="summary">
                <?php foreach ($resume["career_summary"] as $summary): ?>
                    <em><?= $summary; ?></em><br>
                <?php endforeach; ?>
            </div>
            <div class="navbar navbar-light bg-light">
                <h4 class="px-2">Special Qualification</h4>
            </div>
            <div class="qualifications p-0">
                <div class="row">
                    <div class="col-6">
                        <h5 class="skills">Skills</h5>
                        <ul class="ul list-group list-group-flush">
                            <?php foreach ($resume["skills"] as $skill): ?>
                                <li class="list-group-item"><?= $skill; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="col-6">
                        <h5 class="h5 urls">Some work referances</h5>
                        <ul class="ul list-group list-group-flush">
                            <?php foreach ($resume["urls"] as $url): ?>
                                <li class="list-group-item"> 
                                    <a href="<?= $url;?>" target="_blank" class="link"><?= $url; ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="navbar navbar-light bg-light p-2">
                <h4 class="px-2">Employment History</h4>
            </div>
            <div class="experience p-2">
                <div class="row">
                    <div class="col-8">
                        <ol class="ol list-group list-group-flush">
                            <?php foreach ($resume["experiances"] as $experiance): ?>
                            <li class="list-group-item">
                                <strong><?= $experiance["position"]; ?></strong>
                                (<span class="duration tiny-text"><?= $experiance["duration"];?></span>)
                                
                                <h6 class="h6 company_name"><?= $experiance["company"]; ?></h6>
                                <small class="location"><?= $experiance["location"] ;?></small><br><br>
                                <strong>Area of experties</strong>
                                <p class="area_of_experties">
                                    <?php foreach ($experiance["area_of_expertise"] as $experty) : ?>
                                        <em><?= $experty ;?></em>,
                                    <?php endforeach;?>
                                </p>
                                <strong>Duties/Responsibilities</strong>
                                <p class="duties">
                                    <ul class="ul responsibility">
                                    <?php foreach( $experiance["responsibilities"] as $responsibility): ;?>
                                        <li class="list-item responsiblity"><i><?= $responsibility ;?></i></li>
                                    <?php endforeach; ?>
                                    </ul>
                                </p>
                            </li>

                            <?php endforeach; ?>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="navbar navbar-light bg-light p-2">
                <h4 class="px-2">Academic qualifications</h4>
            </div>
            <div class="academic">
                <table class="table table-responsive table-hover table-bordered">
                    <thead class="thead">
                        <tr class="table-info">
                            <th>Exam Title </th>
                            <th>Concentration/Major </th>
                            <th>Institution</th>
                            <th>Result</th>
                            <th>Passing Year</th>
                            <th>Duration </th>
                            <th>Location</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        <?php foreach ($resume["education"] as $edu) : ?>
                            <tr>
                                <td><?= $edu["degree"];?></td>
                                <td><?= $edu["contcentration_major"];?></td>
                                <td><?= $edu["institution"];?></td>
                                <td><?= $edu["result"];?></td>
                                <td><?= $edu["passing_year"];?></td>
                                <td><?= $edu["duration"];?></td>
                                <td><?= $edu["location"];?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="navbar navbar-light bg-light p-2">
                <h4 class="px-2">Training Summary</h4>
            </div>
            <div class="training">
                <table class="table table-responsive table-hover table-bordered">
                    <thead class="thead">
                        <tr class="table-info">
                            <th>Training Title </th>
                            <th>Topic</th>
                            <th>Institution</th>
                            <th>Country</th>
                            <th>Year</th>
                            <th>Duration </th>
                            <th>Location</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        <?php foreach ($resume["training"] as $train) : ?>
                            <tr>
                                <td><?= $train["training_title"];?></td>
                                <td><?= $train["contcentration_major"];?></td>
                                <td><?= $train["institution"];?></td>
                                <td><?= $train["result"];?></td>
                                <td><?= $train["passing_year"];?></td>
                                <td><?= $train["duration"];?></td>
                                <td><?= $train["location"];?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div> 
            <div class="navbar navbar-light bg-light p-2">
                <h4 class="px-2">Career and Application information</h4>
            </div>
            <div class="career">
                <table class="table table-responsive table-hover table-bordered">
                    <tbody class="tbody">
                        <?php foreach ($resume["career_application_information"] as $key =>$career) : ?>
                            <tr>
                                <td><?= ucfirst(str_replace("_", " ", $key));?></td>
                                <td><?= $career;?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="navbar navbar-light bg-light">
                <h4 class="px-2">Extra Curricular Activities</h4>
            </div>
            <div class="activity">
                <?php foreach ($resume["extra_curriculler_activities"] as $activity): ?>
                    <em><?= $activity; ?></em><br>
                <?php endforeach; ?>
            </div>
            <div class="navbar navbar-light bg-light p-2">
                <h4 class="px-2">Language Efficiency</h4>
            </div>
            <div class="language">
                <table class="table table-responsive table-hover table-bordered">
                    <thead class="thead">
                        <tr class="table-info">
                            <th>Name of Language</th>
                            <th>Reading</th>
                            <th>Writing</th>
                            <th>Speaking</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        <?php foreach ($resume["language_skills"] as $language) : ?>
                            <tr>
                                <td><?= ucfirst($language["languages"]);?></td>
                                <td><?= ucfirst($language["reading"]);?></td>
                                <td><?= ucfirst($language["writing"]);?></td>
                                <td><?= ucfirst($language["speaking"]);?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="navbar navbar-light bg-light p-2">
                <h4 class="px-2">Personal Details</h4>
            </div>
            <div class="career">
                <table class="table table-responsive table-hover table-bordered">
                    <tbody class="tbody">
                        <?php foreach ($resume["personal_details"] as $key =>$personal) : ?>
                            <tr>
                                <td><?= ucfirst(str_replace("_", " ", $key));?></td>
                                <td><?= $personal;?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="navbar navbar-light bg-light p-2">
                <h4 class="px-2">Referances</h4>
            </div>
            <div class="career">
                <table class="table table-responsive table-hover table-bordered">
                    <tbody class="tbody">
                        <?php 
                            $j=0; $i=0;
                        foreach ($resume["referances"] as $referances) : ?>
                            <?php //var_dump($referances); exit;?>
                            <?php foreach ($referances as $key =>$referance) : ?>
                                <tr>
                                    <td><?= ucfirst(str_replace("_", " ", $key));?></td>
                                    <td><?= $referance;?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>
    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>