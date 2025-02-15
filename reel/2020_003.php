<?php 
    // Get the contents of the JSON file 
    $strJsonFileContents = file_get_contents("data/breakdown_2020_003_data.json");
    
    // Convert to array 
    $breakdown_data = json_decode($strJsonFileContents, true); 

    // Get the contents of the JSON file 
    $strJsonFileContents = file_get_contents("data/comingsoon_2020_003_data.json");
    // Convert to array 
    $comingsoon_data = json_decode($strJsonFileContents, true); 

    //break it down into page data
    $page_1_data = array_slice($breakdown_data, 0, 2);
    $page_2_data = array_slice($breakdown_data, 2, 3);
    $page_3_data = array_slice($breakdown_data, 5, 3);
    $page_4_data = array_slice($breakdown_data, 8, 3);
    $page_5_data = array_slice($breakdown_data, 11, 3);
    $page_6_data = array_slice($breakdown_data, 14, 2);

    $pages = array($page_1_data, $page_2_data, $page_3_data, $page_4_data, $page_5_data, $page_6_data);
    $page_count = count($pages);
    $page_num = 1;

    $reel_link = 'https://vimeo.com/525706287'
?>

<link rel='stylesheet' href='style_print.css'>
<link rel='stylesheet' href='style_page.css'>


<?php foreach($pages as $page){ ?>
    <page size="A4">
    <div class='page_contents'>


    <?php if($page_num == 1){?>
        <div class='cv_header' align='center'>
            <div class='logo'>
            <img src='../img/mwbp_logo.png' wigth='80px' height='80px'></img>
        </div><br>
      <b>MATT W.B. PLUMMER</b><br>
      VFX Compositor<br>
      www.mattwbp.com<br>
      matt.plummer@gmail.com
    </div>
    <br><br>

    <div align='center'>This breakdown document accompanies the reel here : 
        <a href='<?php echo $reel_link ?>'><?php echo $reel_link ?></a>
        <br><br>
    My resume is also downloadable at <a href='cv.mattwbp.com'>cv.mattwbp.com</a></div>
    <?php } ?>
        
        
    <div class='breakdowns'>
    <?php foreach($page as $shot){ ?>
        
               <div class='shot'>
            <div class='shot_image' style="background-image:url(<?php echo $shot['image']?>)"></div>
            <div class='shot_info'>
                
                <div class='shot_title'><?php echo $shot['project']?><span class='sub'> <?php echo $shot['shot_name'];?></span></div>

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
        
   <?php };?>
    </div> <!--- /breakdowns -->
        
    <?php if($page_num == $page_count){ ?>
                <hr>
<span class='shot_title'>Summary of projects coming soon:</span>
<?php 
    foreach($comingsoon_data as $shot){ ?>
        <div class='shot'>
<!--            <div class='shot_image' style="background-image:url(<?php echo $shot['image']?>)"></div>-->
            <div class='shot_info'>
                
                <div class='shot_title'><?php echo $shot['project']?>  <span class='sub'>Due <?php echo $shot['year'];?></span></div>

                <div class='shot_studio_role'><?php echo $shot['studio']?><br><?php echo $shot['role']?></div>

                <div class='shot_supplied'>
                </div>

                <div class='shot_description'><?php echo $shot['description']?></div>
            
            </div>
        </div>
    
    
    <?php }; ?>
    
<?php } ?>
        
    </div> <!--- /page_content -->
    <div class="footer">Matt W.B. Plummer 2020 Reel Breakdown Document. Page <?php echo $page_num.'/'.$page_count ?></div>
    <?php $page_num = $page_num + 1 ?>
    </page>
<?php };
 ?>


   

          
  

