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
      <h4>Print Resources</h4>
    </div>
    <div class="row card grey-text text-darken-3">
      <ul class="collection">  
        <li class="collection-item"><h5>1. Actuary (The) (12/Y)</h5><blockquote>
        Institute of Actuaries of India, Mumbai, IN</blockquote></li>
        <li class="collection-item"><h5>2. Advances in Vibration Engineering (4/Y)</h5><blockquote>
        Vibration Institute of India, IN
        ISSN: 0972-5768</blockquote></li>
        <li class="collection-item"><h5>3. Ajit (Punjabi Daily)</h5><blockquote>
        Ajit Ltd. Jalandhar, IN</blockquote></li>
        <li class="collection-item"><h5>4. Auto India (12/Y)</h5><blockquote>
        Auto India, Mumbai, IN</blockquote></li>
        <li class="collection-item"><h5>5. Automotive Engineering International (12/Y)</h5><blockquote>
        Automotive Engineering International, America
        ISSN: 1543-849x)</blockquote></li>
        <li class="collection-item"><h5>6. Current Science (24/Y)</h5><blockquote>
        Indian Academy of Sciences, Bangalore, IN
        ISSN: 0011-3891</blockquote></li>
        <li class="collection-item"><h5>7. Data Quest (24/Y)</h5><blockquote>
        Cyber Media, Gurgaon, IN
        ISSN: 1000-1472</blockquote></li>
        <li class="collection-item"><h5>8.  Economic Times (Daily)</h5><blockquote>
        Bennett, Coleman &amp; Co. Ltd.,Chandigarh,IN</blockquote></li>
        <li class="collection-item"><h5>9.  Economist (The) (52/Y)</h5><blockquote>
        The Economist , London, UK</blockquote></li>
        <li class="collection-item"><h5>10. Electronics for You (12/Y)</h5><blockquote>
        EFY Enterprises Pvt. Ltd, New Delhi, IN
        ISSN: 0013-516X</blockquote></li>
        <li class="collection-item"><h5>11. Employment News (52/Y)</h5><blockquote>
        Employment News, Delhi, IN</blockquote></li>
        <li class="collection-item"><h5>12. Hindu (Daily)</h5><blockquote>
        The Hindu Ltd., Delhi, IN
        ISSN: 0971-751X</blockquote></li>
        <li class="collection-item"><h5>13. Hindustan Times (Daily)</h5><blockquote>
        Hindustan Times Limited, Chandigarh, IN</blockquote></li>
        <li class="collection-item"><h5>14. ICTACT Journal on Communication Technology</h5><blockquote>
        ICT Academy of Tamil Nadu, Chennai,IN</blockquote></li>
        <li class="collection-item"><h5>15. Journal of Experimental Psychology: General</h5><blockquote>
         American Psychological Association
         ISSN: 0096-3445</blockquote></li>
        <li class="collection-item"><h5>16. Modern Fiction Studies</h5><blockquote>
         The Johns Hopkins University Press
         ISSN: 0026-7724</blockquote></li>
        <li class="collection-item"><h5>17. NARI Bulletin (3/Y)</h5><blockquote>
        Indian Council of Medical Research, Pune, IN</blockquote></li>
        <li class="collection-item"><h5>18. National Geographic (12/Y)</h5><blockquote>
        National Geographic Society, Washington DC, US
        ISSN: 0027-9358</blockquote></li>
        <li class="collection-item"><h5>19. Newsweek (52/Y)</h5><blockquote>
        Newsweek Inc., New York, US
        ISSN: 0028-9604</blockquote></li>
        <li class="collection-item"><h5>20. PC Quest (12/Y)</h5><blockquote>
        Cyber Media (India) Ltd., New Delhi, IN</blockquote></li>
        <li class="collection-item"><h5>21. Reader’s Digest (12/Y)</h5><blockquote>
        Living Media, New Delhi, IN</blockquote></li>
        <li class="collection-item"><h5>22. Sikh Review, (12/Y)</h5><blockquote>
        Sikh Culture Centre, Kolkatta, IN
        ISSN: 0037-5123</blockquote></li>
        <li class="collection-item"><h5>23. Time (52/Y)</h5><blockquote>
        Time Inc., NY, US
        ISSN: 0040-781X</blockquote></li>
        <li class="collection-item"><h5>24. Times of India (Daily)</h5><blockquote>
        Bennett, Coleman &amp; Co. Ltd., Chandigarh, IN</blockquote></li>
        <li class="collection-item"><h5>25. Vision and Quest (2/Y)</h5><blockquote>
        ABES Engineering College, Ghaziabad, IN
        ISSN: 0975-8410</blockquote></li>
      </ul>
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
