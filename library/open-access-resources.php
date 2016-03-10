<?php
require 'connection.php';
$query_announce = "SELECT * FROM Announce";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/style.css"  media="screen,projection"/>
    <link rel="shortcut icon" href="logo.png" type="image/png" />
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>Library & Learning Center | Indian Institute of Technology Ropar</title>
  </head>
<body style="background-color:#e0e0e0;">
    <div id="main-div" class="container" >
      <div id="1sec1Row" class="lib-sec1 row z-depth-1" style="background-color:#fff;">
        <div class="lib-logo-sec">
          <div class="right white-text">
            <div id="right-top-nav">
            <a class="white-text" href="faq.php"><span class="lib-right-top-nav z-depth-2">FAQs</span></a>
            <a class="white-text" href="login.php"><span class="lib-right-top-nav z-depth-2">Login</span></a>
            </div>
          </div>
          <a href="index.php">
            <img id="logo-lib" src="images/logo-new15.png">
          </a>
        </div>
        <div class="lib-nav-sec">
          <ul id="dropdown1" class="dropdowns dropdown-content blue-lib">
            <li><a class="white-text" href="e-resources.php">E-Resources</a></li>
            <li><a class="white-text" href="p-resources.php">Print Resources</a></li>
          </ul>
          <ul id="dropdown2" class="dropdowns dropdown-content blue-lib">
            <li><a class="white-text" href="team.php">Team</a></li>
            <li><a class="white-text" href="contact-us.php">Contact Us</a></li>
          </ul>
          <nav role="navigation" class="blue-lib">
            <div class="nav-wrapper">
              <a href="index.php" id="logo-txt" class="brand-logo regular hide-on-med-and-down">Indian Institute of Technology Ropar</a>
              <ul id="nav-mobile" class="right">
                <li><a href="index.php">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a class="dropdown-button" href="#!" data-hover="true" data-activates="dropdown1">Resources<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
                <li><a class="dropdown-button" href="#!" data-hover="true" data-activates="dropdown2">About<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
              </ul>
            </div>
            <div id="marquee" class="blue-lib">
          <marquee  onmouseover="stop()" onmouseout="start()" scrollamount="5"><li>
            <?php 
              if($query_run = mysqli_query($con,$query_announce)){
                if($query_row = mysqli_fetch_assoc($query_run)){
                  echo $query_row['marquee'];
                }
              }
             ?>
          </li></marquee>
      </div>
          </nav>
        </div>
      </div>
      <!-- sec-1 ends here -->
  <div id="mainContentUp" class="row">
    <div id="mainContent" class="card">  
    <div class="card center grey-text text-darken-3">
      <h4>Open Access Resources</h4>
    </div>
    <div class="collection card">
      <a class="collection-item grey-text text-darken-3" href="http://www.bioline.org.br/">Bioline International<i class="mdi-action-class small grey-text text-darken-1 left"></i></a>
      <a class="collection-item grey-text text-darken-3" href="http://www.biomedcentral.com/">BioMed Central<i class="mdi-action-class small grey-text text-darken-1 left"></i></a>
      <a class="collection-item grey-text text-darken-3" href="http://www.doaj.org/">Directory of Open Access Journals (DOAJ)<i class="mdi-action-class small grey-text text-darken-1 left"></i></a>
      <a class="collection-item grey-text text-darken-3" href="http://www.freemedicaljournals.com/">Free Medical Journals<i class="mdi-action-class small grey-text text-darken-1 left"></i></a>
      <a class="collection-item grey-text text-darken-3" href="http://highwire.stanford.edu/">HighWire Press<i class="mdi-action-class small grey-text text-darken-1 left"></i></a>
      <a class="collection-item grey-text text-darken-3" href="http://www.ias.ac.in/">Indian Academy of Sciences (IAS)<i class="mdi-action-class small grey-text text-darken-1 left"></i></a>
      <a class="collection-item grey-text text-darken-3" href="http://jodi.tamu.edu/">Journal of Postgraduate Medicine<i class="mdi-action-class small grey-text text-darken-1 left"></i></a>
      <a class="collection-item grey-text text-darken-3" href="http://medind.nic.in/">MedIND<i class="mdi-action-class small grey-text text-darken-1 left"></i></a>
      <a class="collection-item grey-text text-darken-3" href="http://www.medknow.com/">Medknow<i class="mdi-action-class small grey-text text-darken-1 left"></i></a>
      <a class="collection-item grey-text text-darken-3" href="http://www.mdpi.org/">Molecular Diversity Preservation International (MDPI)<i class="mdi-action-class small grey-text text-darken-1 left"></i></a>
      <a class="collection-item grey-text text-darken-3" href="http://www.plos.org/">Public Library of Science (PLoS)<i class="mdi-action-class small grey-text text-darken-1 left"></i></a>
      <a class="collection-item grey-text text-darken-3" href="http://www.ncbi.nlm.nih.gov/pmc/">PubMed Central<i class="mdi-action-class small grey-text text-darken-1 left"></i></a>
      <a class="collection-item grey-text text-darken-3" href="http://www.trialsjournal.com/">Trials<i class="mdi-action-class small grey-text text-darken-1 left"></i></a>
    </div>
  </div>
</div> <!-- main row[otherstuffs] closed -->
    </div>

  
  <footer id="footerlogin" class="container page-footer grey darken-3">
      <div class="row">
        <nav role="navigation" class="grey darken-3 thin">
          <div id="makeitcenter" class="container-">
            <ul>
              <li><a target="_blank" href="http://www.iitrpr.ac.in/sites/default/files/IIT%20Library%20Brochure%202014.pdf"><i class="mdi-content-content-paste" ></i>Library Brochure</a></li>
              <li><a target="_blank" href=""><i class="mdi-content-content-paste" ></i>News Portal</a></li>
              <li><a target="_blank" href="http://www.iitrpr.ac.in/prajwalam-biannual-newsletter-iit-ropar"><i class="mdi-content-content-paste" ></i>News Letter</a></li>
              <li><a target="_blank" href=""><i class="mdi-content-content-paste" ></i>Other IIT Libraries</a></li>
              <li><a target="_blank" href="http://10.1.201.8:8080/jopacv11/html/SearchForm"><i class="mdi-content-content-paste" ></i>OPAC</a></li>
              <li><a href="institutional-repositories.php" target="_blank" ><i class="mdi-content-content-paste"></i>Institutional Repositories</a></li>
            </ul>
          </div>
        </nav>
      </div>
    <div class="container center white-text darken-3 thin">Developers : <a target="_blank" href="www.facebook.com/jainendra.mandavi">Jainendra Mandavi</a> <a target="_blank" href="www.facebook.com/danishslm">Danish Saleem</a></div>
    <div class="footer-copyright">
      <div class="container center">
      Go To <a class="orange-text text-darken-3" href="http://www.iitrpr.ac.in">Main Website</a>
      </div>
  <div class="right"></div>
    </div>
    </footer>

    <script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/init.js"></script>         
  </body>
</html>