<?php   
    if (basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
        //echo "called directly";
        $img_root = '../img';   
        $css_root = '../css';
    } else {
        //echo "included/required";
        $img_root = 'img'; 
        $css_root = 'css';
    } 

echo "<link rel='stylesheet' href='".$css_root."/resume_3.css'>";
?>
    

<div id="resume" class='page'>


<?php

  // this first section deals only with setting up the array...
  // project name, company, position, year (array), term number (first, second, third time I've worked there), description
  $projects = array(
        array('Tom and Jerry', 'Framestore', 'Compositor', array('2019 - 2020'), 1, '-'),
        array('His Dark Materials S2', 'Framestore', 'Compositor', array('2019 - 2020'), 1, '-'),
        array('A Boy Called Christmas', 'Framestore', 'Compositor', array('2019 - 2020'), 1, '-'),
        array('No Time To Die', 'Framestore', 'Compositor', array('2019 - 2020'), 1, '-'),
        array('The Kings Man', 'Framestore', 'Compositor', array('2019 - 2020'), 1, '-'),
        array('Wonder Woman 1984', 'Framestore', 'Compositor', array('2019 - 2020'), 1, '-'),   
        array('The Aeronauts', 'Framestore', 'Compositor', array('2019 - 2020'), 1, '-'),  
        array('Hobbs and Shaw', 'Framestore', 'Compositor', array('2019 - 2020'), 1, '-'), 
        array('Avengers Endgame', 'Framestore', 'Compositor', array('2019 - 2020'), 1, '-'),
        array('Detective Pikachu', 'Framestore', 'Compositor', array('2019 - 2020'), 1, '-'),

        array('Good Omens', 'Milk VFX', 'Compositor', array('2018'), 1, '-'),

        array('Floogals S2', 'Jellyfish Pictures', 'VFX Supervisor', array('2014 - 2018'), 1, '-'),
        array('Star Wars : Rogue One', 'Jellyfish Pictures', 'Compositor/Post-Vis', array('2014 - 2018'), 1, '-'),
        array('Dennis and Gnasher', 'Jellyfish Pictures', 'Pipeline', array('2014 - 2018'),1, '-'),
        array('Bitz n Bob', 'Jellyfish Pictures', 'Pipeline', array('2014 - 2018'),1, '-'),
        array('Floogals S1', 'Jellyfish Pictures', 'Lead Compositor + 2D Pipeline', array('2014 - 2018'), 1, '-'),

        array('Kingsmen : Secret Service', 'Prime Focus', 'Compositor', array('2014'), 2, '-'),
        array('Hercules', 'Prime Focus', 'Compositor', array('2013', '2014'), 2, '-'),

        array('Atlantis', 'Vine', 'Compositor', array('2013'), 2, '-'),

        array('White House Down', 'Prime Focus', 'Compositor', array('2013'), 1, '-'),
        array('Lego : Legends of Chima', 'Prime Focus', 'Compositor', array('2013'), 1, '-'),

        array('Vangelis : Doha Performance', 'Blink TV', 'Compositor', array('2013'), 1, '-'),

        array('Merlin', 'Vine', 'Compositor', array('2012'), 1, '-'),

        array('Commercials', 'Squint/Opera', 'Compositor', array('2012'), 1, '-'),

        array('G.I. Joe 2', 'Digital Domain', 'Compositor', array('2012'), 1, '-'),

        array('John Carter', 'Cinesite', 'Stereo', array('2011'/*,'2012'*/), 1, '-'),

        array('Frankenweenie', 'Nvizible', 'Compositor', array('2011'), 2, '-'),
        array('Grabbers', 'Nvizible', 'Compositor', array('2011'), 2, '-'),
        array('The Promise', 'Nvizible', 'Compositor', array('2010'), 2, '-'),

        array('Burke and Hare', 'BlueBolt', 'Compositor', array('2010'), 1, '-'),
        array('Scott Pilgrim vs...', 'BlueBolt', 'Compositor', array('2010'), 1, '-'),

        array('Commercials', 'The Mill', 'Compositor', array('2010'), 1, '-'),

        array('Clash of The Titans', 'Nvizible', 'Compositor', array('2010'), 1, 'A single split second of a last minute trailer shot!'),
        array('Robin Hood', 'Nvizible', 'Compositor', array(/*'2009', */'2010'), 1, '-'),
        array('The Infidel', 'Nvizible', 'Compositor', array('2009'), 1, '-'),
        array('Leap Year', 'Nvizible', 'Compositor', array('2009'), 1, '-'),
        array('Prince of Persia', 'Nvizible', 'Compositor', array('2009'), 1, '-'),
        array('The Dead Weather', 'Nvizible', 'Compositor', array('2009'), 1, '-'),
        array('Fantastic Mr Fox', 'Nvizible', 'Compositor', array('2009'), 1, '-'),

        array('Top Gear', 'Top Gear', 'Compositor', array('2009'), 1, '-'),

        array('Prince of Persia', 'LipSync', 'Roto-Artist', array('2008'), 1, '-'),

        array('Discovery : Project Earth', 'Spov', 'Compositor', array('2008'), 1, '-'),
    );
        // now format that array into years based on company
        $years = array('2019 - 2020', '2018', '2014 - 2018', '2013', '2012', '2011', '2010', '2009', '2008');
        $projects_by_year = array();
        $last_project = 'none';

        foreach($years as $year){
          $this_year = $year;
          $this_year_projects = array();

          foreach ($projects as $project){
            $project_name = $project[0];
            $project_company = $project[1];
            $company_shortcode = str_replace(array('-', '.',' ',':','(',')', '/', '1', '2', '3'), '', strtolower($project_company));
            $project_company_term = $project_company.".".strval($project[4]);
            $project_position = $project[2];
            $project_years = $project[3];
            $project_company_term_num = $project[4];
            $project_description = $project[5];

            // find if it was the last project listed
            if($last_project == $project_name){
              $spacer = "|</br>";
              array_push($project, 'True');
            }else{
              $spacer = "";
              array_push($project, 'False');
            }

            // find out if the project is the same company_grid
            if($last_company = $company_shortcode){
              $spacer = "|</br>";
              array_push($project, 'True');
            }else{
              $spacer = "";
              array_push($project, 'False');
            }

            if (in_array($this_year, $project_years)){
              // echo $spacer, $year." - ".$project_company." - ".$project_name."<br>";
              // echo $project_company_term."<br>";

              // add to array
              // echo 'looking for '.$project_company_term." in this years projects...<br>";
              if(array_key_exists($project_company_term, $this_year_projects)){
                array_push($this_year_projects[$project_company_term], $project);
                // echo "found the key!!<br>";

              }else{
                // echo 'created key for', $project_company_term;
                $this_year_projects[$project_company_term] = array($project);
              }
              //}
              // array_push($this_year_projects, $project);
              $last_project = $project_name;
              $last_company = $company_shortcode;
              // echo '-------------------<br>';
            };

          $projects_by_year[$this_year] = $this_year_projects;

          };
      };
?>

<!-- // now display the data
// projects_by_year -->
<div class='projects_by_year'>

<div class='resume_title'><h1>About Me...</h1></div>
<div class='resume_about' align='left'>Hello! I'm Matt, VFX Compositor and Pipeline TD.<br><br>
  I've spent most of the last 10 years working at several studios in London, using Nuke on a range of projects from photoreal feature film vfx, to stylised CG Animated tv shows and commercials as well as developing Shotgun based pipeline's for animated television shows.<br><br>

  Currently I'm Compositing at Framestore. <br><br>

  I am always looking for new and exciting opportunities for someone with my skillset. If that is at your studio, I'd love to hear from you. Get in touch with me either via LinkedIn, or via my personal email listed at the top of my downloadable cv.
</div>

<div class='resume_title'><h1>Skills...</h1></div>
<div class='resume_about' align='left'>
  <ul>
    <li>11+ years using Nuke on feature films, commercials & CG animated tv shows.</li>
    <li>Strong understanding of Shotgun & Shotgun Toolkit and their Python API.</li>
    <li>Strong experience with Nuke's python API.</li>
    <li>Experience with Maya's python API.</li>
    <li>Experience creating GUI applications using PyQt.</li>
  </ul>
</div>



<div class='resume_title'><h1>Work History...</h1></div>

<?php
  //per year
  foreach($projects_by_year as $year => $company){
      echo "\t<div class='year'>\r\n";
      echo "\t\t<div class='year_line'>\n";
      echo "\t\t\t<div class='year_title'>".$year."</div>\r\n";

      $keys = array_keys($company);
      $first_company_shortcode =  str_replace(array('-', '.',' ',':','(',')', '/', '1', '2', '3'), '', strtolower($keys[0]));
      // echo $first_company_shortcode."<br>";
      // echo $last_company;
      echo "\t\t\t<div class='year_divider'></div>\n";
      if($first_company_shortcode == $last_company){
        $linker = ' linker';
        echo "\t\t\t<div class='year_connector_top'></div>\r\n";
        echo "\t\t\t<div class='year_connector_bottom'></div>\r\n";
      }else{
        $linker = '';
      }

      echo "\t\t</div>\n";

      // per company
      foreach($company as $company_name => $company_projects){
          // company
          echo "\t\t<div class='company'>\r\n";

          echo "\t\t\t<div class='spacer'></div>\r\n";

          // $company_name = str_replace(array('1', '2', '3'), '-', $company);
          $company_shortcode = str_replace(array('-', '.',' ',':','(',')', '/', '1', '2', '3'), '', strtolower($company_name));
          $company_img = $img_root.'/companies/'.$company_shortcode.'.png';

          echo "\t\t\t<div id='".$company_shortcode."' class='company_logo".$linker."' style='background-image: url(".$company_img.")'>";
          $linker = '';
          echo "</div>\r\n";
          // per project
          // projects
          echo "\t\t\t<div class='projects'>\r\n";
          foreach($company_projects as $project){
              $project_name = $project[0];
              $project_shortcode = str_replace(array('-', '.',' ',':','(',')'), '', strtolower($project_name));
              $project_company = $project[1];
              $project_position = $project[2];
              $project_date = $project[3];
              $project_description = $project[4];
              $project_img = $img_root.'/projects/'.$project_shortcode.'.png';
              $last_company = str_replace(array('-', '.',' ',':','(',')', '/', '1', '2', '3'), '', strtolower($project_company));

              // project
              if (!file_exists($project_img)){
                $project_img = '../img/projects/static.png';
              }

              echo "\t\t\t\t<div class='project' style='background-image: url(".$project_img.")'>\r";
              // echo "\t\t\t\t".$project[0]."<br>\r\n";
              //end project
              echo "</div>\r\n";
          }
          // end projects
          echo "\t\t\t</div>\r\n";
      // end company
      echo "\t\t</div>\r\n";
      }

    // end years
    echo "\t</div>\r\n";
    }

// end projects_by_year
echo "</div>\r\n";
?>

<pre><?php //print_r($projects_by_year) ?></pre>
