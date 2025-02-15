<?php 
    // Get the contents of the JSON file 
    $strJsonFileContents = file_get_contents("data/breakdown_2020_001_data.json");
    
    // Convert to array 
    $breakdown_data = json_decode($strJsonFileContents, true); 

    // Get the contents of the JSON file 
    $strJsonFileContents = file_get_contents("data/comingsoon_2020_001_data.json");
    // Convert to array 
    $comingsoon_data = json_decode($strJsonFileContents, true); 

    //break it down into page data
    $page_1_data = array_slice($breakdown_data, 0, 2);
    $page_2_data = array_slice($breakdown_data, 2, 3);
    $page_3_data = array_slice($breakdown_data, 5, 3);
    $page_4_data = array_slice($breakdown_data, 8, 3);
    $page_5_data = array_slice($breakdown_data, 11, 1);
?>

<link rel='stylesheet' href='style_print.css'>
<link rel='stylesheet' href='style_page.css'>

    
<page size="A4">

  <div class='page_contents'>
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
    <!-- Introduction -->


    <div align='center'>This breakdown document accompanies the reel here : 
        <a href='https://vimeo.com/503639277'>https://vimeo.com/503639277</a>
        <br><br>
    My resume is also downloadable at <a href='cv.mattwbp.com'>cv.mattwbp.com</a></div>
    
      <div class='breakdowns'>
      
      <?php 
    foreach($page_1_data as $shot){ ?>
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
    
        <?php

    }
?>
      
      </div>
    
    </div>
    <div class="footer">Matt W.B. Plummer 2020 Reel Breakdown Document. Page 1/5</div>
</page>
        
<page size="A4">
      <div class='page_contents'>
      <div class='breakdowns'>
      
      <?php 
    foreach($page_2_data as $shot){ ?>
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
    
        <?php

    }
?>
      
      </div>
    
    </div>
    <div class="footer">Matt W.B. Plummer 2020 Reel Breakdown Document. Page 2/5</div>
</page>

<page size="A4">
      <div class='page_contents'>
      <div class='breakdowns'>
      
      <?php 
    foreach($page_3_data as $shot){ ?>
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
    
        <?php

    }
?>
      
      </div>
    
    </div>
    <div class="footer">Matt W.B. Plummer 2020 Reel Breakdown Document. Page 3/5</div>
</page>

<page size="A4">
      <div class='page_contents'>
      <div class='breakdowns'>
      
      <?php 
    foreach($page_4_data as $shot){ ?>
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
    
        <?php

    }
?>
      
      </div>
    
    </div>
    <div class="footer">Matt W.B. Plummer 2020 Reel Breakdown Document. Page 4/5</div>
</page>

<page size="A4">
      <div class='page_contents'>
      <div class='breakdowns'>
      
      <?php 
    foreach($page_5_data as $shot){ ?>
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
                
                <div class='shot_title'><?php echo $shot['project']?>  <span class='sub'>Due <?php echo $shot['year'];?></span></div>

                <div class='shot_studio_role'><?php echo $shot['studio']?><br><?php echo $shot['role']?></div>

                <div class='shot_supplied'>
                </div>

                <div class='shot_description'><?php echo $shot['description']?></div>
            
            </div>
        </div>
    
    
    <?php }; ?>

    
    </div>
    <div class="footer">Matt W.B. Plummer 2020 Reel Breakdown Document. Page 5/5</div>
</page>
