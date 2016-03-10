<?php
require 'connection.php';
$sql = "SELECT COUNT(r_Title) FROM scopusresearch";
$query_announce = "SELECT * FROM Announce"; 
$rs_result = mysqli_query($con,$sql); 
$row = mysqli_fetch_row($rs_result); 
$total_records = $row[0]; 
$total_pages = ceil($total_records / 20); 
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page='iitropar'; }; 
if ($page=== 'iitropar'){
  $query_research = "SELECT * FROM scopusresearch ORDER By r_Id DESC";
}
else{
$start_from =($page-1)*20; //$connect = mysqli_connect('localhost','kitaabGhar','12344321','kitaabGhar');
	$query_research = "SELECT * FROM scopusresearch ORDER By r_Id DESC LIMIT $start_from, 20";}
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
   <?php
if ($page=== 'iitropar'){?>
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
<div id="mainContentUp" class="row">
  <div id="mainContent" class="card">
  <div class="container">
    <div class="card-panel grey-text text-darken-3 center"><h5>Research Publications</h5></div>
  </div><br>

<?php }
?>  
  <div class="row card-content">
    <?php

    if($query_run = mysqli_query($con,$query_research)) {
       $count=0;
       ?>
     
    <?php
    while ($query_row = mysqli_fetch_assoc($query_run)) {
    $count++;
           ?>
       <ul class="collapsible collection" data-collapsible="accordion">
           <li><i class="mdi-action-find-in-page small grey-text text-darken-1 left"></i>
            <div class="collapsible-header collection-item grey-text text-darken-3 truncate"><?php echo $query_row['r_Title'];?></div>
            <div class="collapsible-body"><p>Publisher : <?php echo $query_row['r_Author'] ; ?><br>Detailed Info : <a  target="_blank" href="<?php  echo $query_row['r_Link'];?>"><?php  echo $query_row['r_Link'];?></a><br><?php if ($query_row['r_Abstract']!=NULL){?>Abstract : <?php echo $query_row['r_Abstract'];}?></p></div>
          </li>
        </ul>
          <?php
      }}?>
  </div>
  <?php if (!($page=== 'iitropar') ){ ?>
  <style type="text/css">
    #butn-full-page:hover{
      color: #795548;
      background-color: #ffffff;
    }
  </style>
<?php }
 if ($page=== 'iitropar') { ?>
 </div></div></div>
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


<?php } ?>
       
<script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/init.js"></script>         
  </body>
</html>
