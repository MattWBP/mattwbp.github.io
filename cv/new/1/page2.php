<link rel="stylesheet" href="cv.css">

<page size="A4">
  <div class='page_contents'>

    <!-- Industry Experience Continued-->
    <div class="section_header">
      <div class='section_header_line_top'></div>
      <div class='section_header_title'>INDUSTRY EXPERIENCE CONT...</div>
      <div class='section_header_line_bottom'></div>
    </div>

    <?php include('data4.php') ?>

      
    <?php foreach($jobs as $company){
        $company_name = $company[0];
        $company_dates = $company[1];
        $company_term = $company[2]; 
        $company_projects = $company[3];
        
        echo "<div class='condensed_resume'>";
        // company header
        echo "<div class='condensed_company'><div class='condensed_header'><b><u>".$company_name."</u></b>, ".$company_dates."</div>";
    
        
        
        // company projects
        echo "<div class='condensed_projects'>";
        foreach($company_projects as $project){
            $project_name = $project[0];
            $project_role = $project[2];
            echo "<b>".$project_name."</b> - <i>".$project_role."</i><br>";
        };
        
    echo "</div></div><br>";

    };
        
       
      
      ?>
    </div>
      

   <div class='footer'>Matt W.B. Plummer CV - Page 2/3</div>
</page>