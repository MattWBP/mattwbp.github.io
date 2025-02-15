
<link rel="stylesheet" href="cv.css">
<page size="A4">

  <div class='page_contents'>
    <br>
    <!-- Header  -->
    <div class='cv_header' align='center'>
      <div class='logo'>
        <img src='img/mwbp_logo.png' wigth='80px' height='80px'></img>
      </div><br>
      <b>MATT W.B. PLUMMER</b><br>
      VFX Compositor + Pipeline TD<br>
      www.mattwbp.com<br>
      matt.plummer@gmail.com
    </div>
    <br><br><br><br>
    <!-- Introduction -->
    <div class="section_header">
      <div class='section_header_line_top'></div>
        <div class='section_header_title'>INTRODUCTION</div>
      <div class='section_header_line_bottom'></div>
    </div>

    <span align='center'>I am a charismatic and ambitious Compositor looking to increase my experience
     and further my career in Visual Effects. Whether I'm currently on a project
     or not, I am always looking to expand my network of contacts and hear of
     future opportunities.<br><br>
     If there is space for someone with my outlook at your company I would love to hear from you.
        <br><br><br></span>
     <!-- Industry Experience -->
     <div class="section_header">
       <div class='section_header_line_top'></div>
       <div class='section_header_title'>INDUSTRY EXPERIENCE</div>
       <div class='section_header_line_bottom'></div>
     </div>

     <div class='companies'>
         <?php include('companies/framestore.php') ?>
         <br><hr>
       <?php include('companies/milk.php') ?>
      
       <?php // include('companies/jellyfish.php') ?>
      

   </div>

 </div>
 <div class='footer'>Matt W.B. Plummer CV - Page 1/3</div>
</page>

<page size="A4">
  <div class='page_contents'>

    <!-- Industry Experience Continued-->
    <div class="section_header">
      <div class='section_header_line_top'></div>
      <div class='section_header_title'>INDUSTRY EXPERIENCE CONT...</div>
      <div class='section_header_line_bottom'></div>
    </div>
      
      <div class='projects'>
          
          <?php include('data.php')?>
          
          <?php foreach ($jobs as $company){ 
                $company_name = $company[0];
                $company_dates = $company[1];
                $company_term = $company[2];
                $company_projects = $company[3];
    
                ?>
                
                <?php foreach($company_projects as $project){ 
          
                    $project_name = $project[0];
//                    echo $project_name."<br>";
                    $project_type = $project[1];
                    $project_role = $project[2];
                    $project_dates = $project[3];

                  ?>

                  <div class='condensed_project'>
                      <div class='project_title'><?php echo $project_name ?></div>
                      <div class='project_company'><?php echo $company_name." (".max($project_dates).")" ?></div>
                      <div class='project_type'><?php echo $project_type ?></div>
                      <div class='project_position'><?php echo $project_role ?></div>
                      <div class='project_dates'></div>
                  </div>
          
        <?php }; 
};?>
          

          
        
        
          
      </div>
      
      
      
      <?php // include('companies/jellyfish.php') ?>
<!--      <br><hr>-->
      <?php // include('companies/primefocus.php') ?>
<!--      <br><hr>-->
      <?php // include('companies/vine.php') ?>
<!--     <br><hr>-->
      <?php // include('companies/blink.php')?>

      
  </div>
   <div class='footer'>Matt W.B. Plummer CV - Page 2/3</div>
</page>
<page size="A4">
<div class='page_contents'><br>



  <!-- Education -->
  <div class="section_header">
    <div class='section_header_line_top'></div>
    <div class='section_header_title'>EDUCATION</div>
    <div class='section_header_line_bottom'></div>
  </div>

  <b>BA(hons)Digital Arts</b><br>
  Thames Valley University, 2006<br><br>

  <b>FXPHD</b><br>
  Online training courses taken for Nuke, Shake, PFTrack, Syntheyes & Roto (silhouette)<br><br>

  <!-- Skills -->
  <div class="section_header">
    <div class='section_header_line_top'></div>
    <div class='section_header_title'>SKILLS & SOFTWARE</div>
    <div class='section_header_line_bottom'></div>
  </div>

  Advanced understanding of Nuke, Photoshop, Premiere
  Some experience with Syntheyes and PFtrack.
  <br><br>
  Good understanding of Python & the Nuke python API, <br>Shotgun Toolkit & Shotgun's python api.<br><br>
  Some experience with the Maya Python API.

  <!-- Hobbies -->
  <div class="section_header">
    <div class='section_header_line_top'></div>
    <div class='section_header_title'>HOBBIES</div>
    <div class='section_header_line_bottom'></div>
  </div>

  In my spare time I play guitar horribly. When I'm not driving the cat up the wall with noise,
  I'm either cycling, reading a book, writing short stories, watching scary movies and playing scary VR
  games/experimenting with Unreal/Unity (which has been disastrous so far).<br><br>

  <!-- References -->
  <div class="section_header">
    <div class='section_header_line_top'></div>
    <div class='section_header_title' align='center'>GET IN TOUCH FOR REFERENCES</div>
    <div class='section_header_line_bottom'></div>
  </div>

</div>
 <div class='footer'>Matt W.B. Plummer CV - Page 3/3</div>
</page>
