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
      </div>     <!-- sec-1 khatam --> 
<div id="mainContentUp" class="row">
        <div id="mainContent" class="card">
    <div class="card center grey-text text-darken-3">
      <h4>E-Resources</h4>
    </div>
    <div class="collection card">
      <a class="collection-item grey-text text-darken-3" href="http://portal.acm.org/">ACM Digital Library (V.1 - current) (List of Titles)<i class="mdi-action-class small grey-text text-darken-1 left"></i></a>
      <a class="collection-item grey-text text-darken-3" href="http://portal.acm.org/">ACM Digital Library (V.1 - current) (List of Titles)<i class="mdi-action-class small grey-text text-darken-1 left"></i></a>
      <a class="collection-item grey-text text-darken-3" href="http://pubs.acs.org/">ACS Digital Archive and Current Journals (List of Titles)<i class="mdi-action-class small grey-text text-darken-1 left"></i></a>
      <a class="collection-item grey-text text-darken-3" href="http://journals.aip.org/">AIP Digital Archive and Current Journals (List of Titles)<i class="mdi-action-class small grey-text text-darken-1 left"></i></a>
      <a class="collection-item grey-text text-darken-3" href="http://www.new.ans.org/pubs/journals/">ANS Journals and Magazines (2011)<i class="mdi-action-class small grey-text text-darken-1 left"></i></a>
      <a class="collection-item grey-text text-darken-3" href="http://publish.aps.org/browse.html/">APS Journals (List of Titles)<i class="mdi-action-class small grey-text text-darken-1 left"></i></a>
      <a class="collection-item grey-text text-darken-3" href="http://asmedigitalcollection.asme.org/index.aspx">ASME Digital Archive and Current Journals (List of Titles)<i class="mdi-action-class small grey-text text-darken-1 left"></i></a>
      <a class="collection-item grey-text text-darken-3" href="http://www.sagepub.com/journals/Journal201991">Association for Psychological Science Journals (1999 - current)<i class="mdi-action-class small grey-text text-darken-1 left"></i></a>
      <a class="collection-item grey-text text-darken-3" href="http://enterprise.astm.org/">ASTM Standards and Digital Library (List of Titles)<i class="mdi-action-class small grey-text text-darken-1 left"></i></a>
      <a class="collection-item grey-text text-darken-3" href="http://journals.cambridge.org/action/browseJournalsAlphabetically?sessionId=D30CBDB2B5E31FC429AACDD7B204F682.tomcat1">CUP Selected Journals (List of Titles)<i class="mdi-action-class small grey-text text-darken-1 left"></i></a>
      <a class="collection-item grey-text text-darken-3" href="http://ieeexplore.ieee.org/Xplore/home.jsp">IEL Online (IEEE Xplore Digital Library) (V.I - current) (List of Titles)<i class="mdi-action-class small grey-text text-darken-1 left"></i></a>
      <a class="collection-item grey-text text-darken-3" href="http://online.sagepub.com/">IMechE Digital Archive and Current Journals (List of Titles)<i class="mdi-action-class small grey-text text-darken-1 left"></i></a>
      <a class="collection-item grey-text text-darken-3" href="http://iopscience.iop.org/journals">IOP Science Digital Archive and Selected Current Journals (List of Titles)<i class="mdi-action-class small grey-text text-darken-1 left"></i></a>
      <a class="collection-item grey-text text-darken-3" href="http://www.jstor.org/">JSTOR (List of Titles)<i class="mdi-action-class small grey-text text-darken-1 left"></i></a>
      <a class="collection-item grey-text text-darken-3" href="http://multi-science.metapress.com/content/121510/?sw=a">Multi-Science Publishing: Low Frequency Noise, Vibration and Active Control<i class="mdi-action-class small grey-text text-darken-1 left"></i></a>
      <a class="collection-item grey-text text-darken-3" href="http://www.opticsinfobase.org/">OSA Online (1995 - current) (List of Titles)<i class="mdi-action-class small grey-text text-darken-1 left"></i></a>
      <a class="collection-item grey-text text-darken-3" href="http://www.oxfordjournals.org/subject/mathematics/">OUP Mathematics and Physical Sciences Journals (List of Titles)<i class="mdi-action-class small grey-text text-darken-1 left"></i></a>
      <a class="collection-item grey-text text-darken-3" href="http://projecteuclid.org/DPubS?Service=UI&amp;version=1.0&amp;verb=Display&amp;handle=euclid&amp;page=browse">Project Euclid Journals (2011)<i class="mdi-action-class small grey-text text-darken-1 left"></i></a>
      <a class="collection-item grey-text text-darken-3" href="http://muse.jhu.edu/">Project MUSE (List of Titles)<i class="mdi-action-class small grey-text text-darken-1 left"></i></a>
      <a class="collection-item grey-text text-darken-3" href="http://pubs.rsc.org/en/Journals?key=Title&amp;value">Royal Society Proceedings A: Mathematical, Physical and Engineering Sciences<i class="mdi-action-class small grey-text text-darken-1 left"></i></a>
      <a class="collection-item grey-text text-darken-3" href="http://pubs.rsc.org/en/Journals?key=Title&amp;value">RSC Digital Archive and Selected Current Journals (List of Titles)<i class="mdi-action-class small grey-text text-darken-1 left"></i></a>
      <a class="collection-item grey-text text-darken-3" href="http://online.sagepub.com/">Sage Selected Journals (1999 - current) (List of Titles)<i class="mdi-action-class small grey-text text-darken-1 left"></i></a>
      <a class="collection-item grey-text text-darken-3" href="http://www.sciencedirect.com/">ScienceDirect (1995 - current) (List of Titles)<i class="mdi-action-class small grey-text text-darken-1 left"></i></a>
      <a class="collection-item grey-text text-darken-3" href="http://www.sciencemag.org/content/current">Science Online (1997 - current)<i class="mdi-action-class small grey-text text-darken-1 left"></i></a>
      <a class="collection-item grey-text text-darken-3" href="http://epubs.siam.org/">SIAM  Digital Archive and Current Journals (List of Titles)<i class="mdi-action-class small grey-text text-darken-1 left"></i></a>
      <a class="collection-item grey-text text-darken-3" href="http://www.springerlink.com/content/?k=lecture+notes">Springer Lecture Notes in Physics<i class="mdi-action-class small grey-text text-darken-1 left"></i></a>
      <a class="collection-item grey-text text-darken-3" href="http://www.springerlink.com/content/?k=lecture+notes">Springer Online Journals (1997 - current) (List of Titles)<i class="mdi-action-class small grey-text text-darken-1 left"></i></a>
      <a class="collection-item grey-text text-darken-3" href="https://www.thieme-connect.com/ejournals">Thieme Selected Journals (List of Titles)<i class="mdi-action-class small grey-text text-darken-1 left"></i></a>
      <a class="collection-item grey-text text-darken-3" href="http://onlinelibrary.wiley.com/">Wiley Selected Journals (1997 to 2012) (List of Titles)<i class="mdi-action-class small grey-text text-darken-1 left"></i></a>
      <a class="collection-item grey-text text-darken-3" href="http://www.worldscinet.com/maths.shtml">World Scientific (Selected Mathematics Journals) (List of Titles)<i class="mdi-action-class small grey-text text-darken-1 left"></i></a>
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
