<?php
require 'connection.php';
$query_research = "SELECT * FROM scopusresearch ORDER By r_Id DESC";
$query_news = "SELECT * FROM News ORDER By n_time DESC";
$query_announce = "SELECT * FROM Announce";
?>
<!DOCTYPE html>
<html>
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
            <div class="marquee-lib blue-lib">
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
      <div id="makeSec2Up"class="row lib-sec2" style="background-color:#e0e0e0;margin-bottom: 0px;">
          <div class="row" style="margin-bottom: 0px;">
            <div id="opacBox" class="col l7 m12 s12">
              <div id="insideopacBox" class="card-panel border-lib ">
                <div class="row">
                  <div class="col l12 m12 s12">
                    <ul class="tabs z-depth-1">
                      <li class="tab col s3"><a class="active condensed light" href="#test2">Search Books@OPAC</a></li>
                    </ul>
                  </div>
                </div>
                <div class="divider"></div>
                <div class="row">  
                  <div id="test2" class="col s12">
                    <br>
                    <div id="opac-search">
                      <form action="http://10.1.201.8:8080/jopacv11/html/SearchInput" method="post">
                        <input type="text" name="txtsearch0" value="" placeholder="search-books-etc" />
                        <input type="hidden" name="cmbcatalogue0" value="7" />
                        <input type="hidden" name="recordCombo" value="0" />
                        <input type="hidden" name="cmbconnector0" value="0" />
                        <input type="hidden" name="buttonid" value="S" />
                        <input type="hidden" name="cmbDB" value="0" />
                        <input type="hidden" name="rdoyearopt" value="0" />
                        <input type="hidden" name="txtyear0" value="" />
                        <input type="hidden" name="txtyear1" value="" />
                        <input type="hidden" name="txtyear2" value="" />
                        <input type="hidden" name="txtyear3" value="" />
                        <input type="hidden" name="txtyear4" value="" />
                        <input type="hidden" name="cmbsortcat" value="0" />
                        <input type="hidden" name="rdosort" value="U" />
                        <input type="hidden" name="txtlevel" value="" />
                        <input type="hidden" name="txtphysicalform" value="" />
                        <input type="hidden" name="txtsource" value="" />
                        <input type="hidden" name="txtsubjectcode" value="" />
                        <input type="hidden" name="txtsubdoc" value="" />
                        <input type="hidden" name="txtlocation" value="" />
                        <button class="btn grey darken-3 waves-effect waves-light right" type="submit" name="action">Go</button>
                      </form>
                    </div>
                    <p class="condensed">
                      Search our whole database of library via OPAC
                    </p>
                  </div>
                </div> 
              </div>
          </div>
          <style type="text/css">
            .slider-txt{
                /* WebKit (Safari/Chrome) Only */
                -webkit-text-stroke: 1px black;
                
                /* If we weren't using text-shadow, we'd set a fallback color
                   and use this to set color instead
                  -webkit-text-fill-color: white; */
                
                color: white;
                
                text-shadow:
                  2px 2px 0 #000,
                  /* Simulated effect for Firefox and Opera
                     and nice enhancement for WebKit */
                 -1px -1px 0 #000,  
                  1px -1px 0 #000,
                 -1px  1px 0 #000,
                  1px  1px 0 #000;
              }
          </style>
          <div id="sliderpad" class="col l5 m12 s12">
            <div id="lib-slider" class="slider border-lib-slider z-depth-1">
              <ul class="slides card-panel">
                <li>
                  <img src="images/1.jpg"> <!-- random image -->
                  <div class="caption center-align">
                    <h3 class="slider-txt">Welcome</h3>
                    <h5 class="light slider-txt grey-text text-lighten-3">Central Library | IIT Ropar</h5>
                  </div>
                </li>
                <li>
                  <img src="images/2.jpg"> <!-- random image -->
                  <div class="caption left-align">
                    <h3 class="slider-txt">The Door</h3>
                    <h5 class="light slider-txt grey-text text-lighten-3">Gateway to Knowledge</h5>
                  </div>
                </li>
                <li>
                  <img src="images/3.jpg"> <!-- random image -->
                  <div class="caption right-align">
                    <h3 class="slider-txt">Reference Books</h3>
                    <h5 class="light slider-txt grey-text text-lighten-3">Always for your help</h5>
                  </div>
                </li>
                <li>
                  <img src="images/4.jpg"> <!-- random image -->
                  <div class="caption center-align">
                    <h3 class="slider-txt">Journals and Paper</h3>
                    <h5 class="light slider-txt grey-text text-lighten-3">an everyday growing collection</h5>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- sec-2 ends here -->
      <div id="newsBox" class="row" style="margin-top: 4px;">
        <div class="col l2 m2 s3 heads white" style="border-bottom:2px solid white">
          <strong>News</strong><i class="tiny mdi-notification-more right"></i>
        </div>
        <div class="col l10 m10 s9 marquee-lib blue-lib">
          <marquee onmouseover="stop()" onmouseout="start()" scrollamount="5">
            <?php 
              if($query_run = mysqli_query($con,$query_news)){
                $sum=0;
                while($query_row = mysqli_fetch_assoc($query_run)){
                  if($sum>6)break;
                  echo '<li style="display:inline-block;"><i class="tiny white-text mdi-notification-more"></i> <a class="white-text" href="'.$query_row['n_link'].'">'.$query_row['n_body'].'</a></li>&nbsp&nbsp&nbsp&nbsp';
                  $sum++;
                }
              }
             ?>
          </marquee>
        </div>
      </div>
      <!-- news closed here -->
      <div class="lib-sec3 row blue-text-lib" style="background-color:#e0e0e0;margin-top: 0px;">
      <div class="row">
      <div class="col l3 m12 s12">
        <!-- quick-links-only -->
            <div id="quickBox" class="card border-lib">
              <div class="card-content" style="padding-top: 0px;">
                <span class="card-title heads">
                  <strong style="font-size:16px;">Quick-Links</strong><i class="small mdi-content-send right"></i>
                </span>
                <div class="divider"></div>
                <ul class="collection">
                  <li><a href="http://10.1.201.8:8080/jopacv11/html/SearchForm"  target="_blank" class="grey-text1 collection-item-quick"><i class="mdi-hardware-keyboard-arrow-right indigo-text text-darken-4"></i>OPAC</a></li>
                  <li><a href="http://10.1.201.8:8080/opac/" target="_blank" class="grey-text1 collection-item-quick"><i class="mdi-hardware-keyboard-arrow-right indigo-text text-darken-4"></i>Union OPAC</a></li>
                  <li><a href="http://www.iitrpr.ac.in/sites/default/files/List%20of%20CDs%20and%20DVDs.pdf" target="_blank" class="grey-text1 collection-item-quick"><i class="mdi-hardware-keyboard-arrow-right indigo-text text-darken-4"></i>Digital Library</a></li>
                  <li><a href="#!" target="_blank" class="grey-text1 collection-item-quick"><i class="mdi-hardware-keyboard-arrow-right indigo-text text-darken-4"></i>Loan Privileges</a></li>
                  <li><a href="http://www.iitrpr.ac.in/sites/default/files/Empanelled%20Vendors%20for%20supply%20of%20books.pdf" target="_blank" class="grey-text1 collection-item-quick"><i class="mdi-hardware-keyboard-arrow-right indigo-text text-darken-4"></i>List of Approved  Vendors for Books</a></li>
                  <li><a href="http://www.iitrpr.ac.in/sites/default/files/Empanelled%20Vendors%20for%20supply%20of%20books.pdf" target="_blank" class="grey-text1 collection-item-quick"><i class="mdi-hardware-keyboard-arrow-right indigo-text text-darken-4"></i>List of Approved Journals/E-Resources Subscription Agencies</a></li>
                  <li><a href="free-electronic-books.php" target="_blank" class="grey-text1 collection-item-quick"><i class="mdi-hardware-keyboard-arrow-right indigo-text text-darken-4"></i>Free Electronic Books</a></li>
                  <li><a href="open-access-resources.php" target="_blank" class="grey-text1 collection-item-quick"><i class="mdi-hardware-keyboard-arrow-right indigo-text text-darken-4"></i>Open Access Resources</a></li>
                  <li><a href="#!" target="_blank" class="grey-text1 collection-item-quick"><i class="mdi-hardware-keyboard-arrow-right indigo-text text-darken-4"></i>Library Events</a></li>
                  <li><a href="institutional-repositories.php" target="_blank" class="grey-text1 collection-item-quick"><i class="mdi-hardware-keyboard-arrow-right indigo-text text-darken-4"></i>Institutional Repositories</a></li>
                  <li><a href="http://www.iitrpr.ac.in/sites/default/files/docs/Copyright.pdf" target="_blank" class="grey-text1 collection-item-quick"><i class="mdi-hardware-keyboard-arrow-right indigo-text text-darken-4"></i>Copyright</a></li>
                </ul>
               </div>
            </div> <!-- quick-links-closed -->
      </div>
      <div id="researchBox" class="col l6 m12 s12">
        <div id="researchBoxheight" class="card border-lib">
          <div class="icon-block card-content" style="padding-top: 0px;">
                <span class="card-title heads">
                <strong style="font-size:16px;">Latest Research Publications</strong><i class="small mdi-social-school right"></i>
                </span>
                <div class="divider"></div>
                <div id="researchScroll" class="row card-content">
    <?php

    if($query_run = mysqli_query($con,$query_research)) {
       $count=0;
       ?>
      <ul class="collection">

    <?php
    while ($query_row = mysqli_fetch_assoc($query_run)) {
    $count++;
    if($count>12)break;
           ?>
                 <li>
            <a href="<?php echo $query_row['r_Link'];?>" class="collection-item-quick grey-text1"><strong><i>Title : </i></strong><?php echo $query_row['r_Title'];?><br>
              <strong><i>Abstract : </i></strong><?php echo substr($query_row['r_Abstract'],0,200).'...(more)';?></a>
          </li>

          <?php
      }}?>
      </ul>
  </div>
          </div> <!-- card-content-closed -->
          <a  class="waves-effect waves-light btn right grey darken-3" href="embed.php" style="margin-bottom:8px;margin-right:8px;">See all Researches</a>
          </div> <!-- card-content-closed -->
        </div> <!-- card-closed -->
    <div id="newsBox" class="col l3 m12 s12">
           
           <div id="e-resources" class="card" style="margin-bottom: 7px;">
            <div class="card-content" style="padding-top: 0px;">
              <span class="card-title heads"> 
              <strong style="font-size:16px;">E-Resources</strong><i class="mdi-action-class small right"></i>
              </span>
              <div class="divider"></div>
              <div id="e-resourcesScroll">
              <div class="collection card">
              <!-- jai-edits-start -->
                <?php
                if($query_run = mysqli_query($con,'SELECT * FROM `e-resources` ORDER BY er_id')){
                  while ($query_row = mysqli_fetch_assoc($query_run)){
                    echo '<a class="collection-item grey-text text-darken-3" href="'.$query_row['link'].'">'.$query_row['title'].'</a>';
                  }
                }
                else{echo 'Some Error Occured';}
                ?>
              <!-- jai-edits-stop -->
              </div>
              </div>
            </div>
           </div>

            <div id="formsDownload" class="card border-lib">
              <div class="card-content" style="padding-top: 0px;">
                      <span class="card-title heads"> 
                      <strong style="font-size:16px;">Forms</strong><i class="small mdi-file-file-download right"></i>
                      </span>
                      <div class="divider"></div>
                    
                             <ul class="collection">
                       <li><a class="collection-item-quick grey-text1" target="_blank" href="http://www.iitrpr.ac.in/sites/default/files/docs/Book_Indent_Form.docx"><i class="mdi-action-receipt indigo-text text-darken-4" ></i>Book Indent Form(Doc)</a></li>
                        <li><a class="collection-item-quick grey-text1" href="http://www.iitrpr.ac.in/sites/default/files/docs/Book_Indent_Form.pdf" target="_blank"><i class="mdi-action-receipt indigo-text text-darken-4"></i>Book Indent Form(Pdf)</a></li>
                        <li><a class="collection-item-quick grey-text1" href="http://www.iitrpr.ac.in/sites/default/files/IIT%20Library%20Brochure%202014.pdf" target="_blank"><i class="mdi-action-receipt indigo-text text-darken-4"></i>Brochure</a></li>
                                                         
                         </ul>
                  
                      </div>
            </div> 
            </div><!-- column closes here -->
    <!--Import jQuery before materialize.js--></div></div></div>
    <footer class="container page-footer grey darken-3">
      <div class="row">
        <nav role="navigation" class="grey darken-3 thin">
          <div id="makeitcenter" class="container-">
            <ul>
              <li><a target="_blank" href=""><i class="mdi-content-content-paste" ></i>News Portal</a></li>
              <li><a target="_blank" href="http://www.iitrpr.ac.in/prajwalam-biannual-newsletter-iit-ropar"><i class="mdi-content-content-paste" ></i>News Letter</a></li>
              <li><a target="_blank" href=""><i class="mdi-content-content-paste" ></i>Other IIT Libraries</a></li>
              <li><a target="_blank" href="http://10.1.201.8:8080/jopacv11/html/SearchForm"><i class="mdi-content-content-paste" ></i>OPAC</a></li>
              <li><a href="institutional-repositories.php" target="_blank" ><i class="mdi-content-content-paste"></i>Institutional Repositories</a></li>
            </ul>
          </div>
        </nav>
      </div>
    <div class="container center white-text darken-3 thin">Developers : <a target="_blank" href="https://www.facebook.com/jainendra.mandavi">Jainendra Mandavi</a> <a target="_blank" href="https://www.facebook.com/danishslm">Danish Saleem</a></div>
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
