<link rel='stylesheet' href='test.css'>

<?php include ('data.php')?>
<?php $last_company = "None";?>
    
<div class='projects'>
<?php foreach($projects as $project){
    $proj_name = $project[0];
    $company = $project[1];
    $position = $project[2];
    $year = $project[3];
    $term = $project[4];
    $desc = $project[5];
    // echo "$company=.$last_company??";
    
    if($company != $last_company){
        echo "<b>$company</b><br>";
        }
    $last_company = $company;
    echo "$proj_name<br>";
    };
    
?>
    </div>