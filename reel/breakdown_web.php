<?php 
    // Get the contents of the JSON file 
    $strJsonFileContents = file_get_contents("data/breakdown_data.json");
    // Convert to array 
    $breakdown_data = json_decode($strJsonFileContents, true); 

    // Get the contents of the JSON file 
    $strJsonFileContents = file_get_contents("data/comingsoon_data.json");
    // Convert to array 
    $comingsoon_data = json_decode($strJsonFileContents, true); 
?>

<link rel='stylesheet' href='style_web.css'>
<div id='content' align='center'>

<div id='reel'>Showreel goes here</div>
    
    
    
    <div class='breakdowns'>
    
        
<?php 
    foreach($breakdown_data as $shot){ ?>
        <div class='shot'>
            <div class='shot_image' style="background-image:url(<?php echo $shot['image']?>)"></div>
            <div class='shot_info'>
                
                <div class='shot_title'><?php echo $shot['project']?><br><span class='sub'><?php echo $shot['shot_name'];?></span></div>

                <div class='shot_studio_role'><?php echo $shot['studio']." - ".$shot['year']?><br><?php echo $shot['role']?></div>

                <div class='shot_supplied'>Supplied With:<br><ul>
                    <?php foreach($shot['supplied elements'] as $element){ ?>
                        <li><?php echo $element; ?></li>
                    <?php }?>
                    </ul>
                </div>

                <div class='shot_description'><?php echo $shot['description']?></div>
            
            </div>
        </div>
        <hr>
        <?php

    }
?>

    
    </div>
<hr>
<span class='shot_title'>Summary of projects coming soon:</span>
<?php 
    foreach($comingsoon_data as $shot){ ?>
        <div class='shot'>
<!--            <div class='shot_image' style="background-image:url(<?php echo $shot['image']?>)"></div>-->
            <div class='shot_info'>
                
                <div class='shot_title'><?php echo $shot['project']?><br><span class='sub'>Due <?php echo $shot['year'];?></span></div>

                <div class='shot_studio_role'><?php echo $shot['studio']?><br><?php echo $shot['role']?></div>

                <div class='shot_supplied'>
                </div>

                <div class='shot_description'><?php echo $shot['description']?></div>
            
            </div>
        </div>
        <hr>
    
    
    <?php }; ?>


</div>