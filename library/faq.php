<?php
session_start();
// if(!isset($_SESSION["u_name"])){
//   echo "<script>window.location='index.php'</script>";
//   exit();}
  include('connection.php');
  $query_faq = "SELECT * FROM n_faq ORDER By f_time DESC";
if (isset($_POST['update_faqs'])){
  $title=mysqli_real_escape_string($con,$_POST['title']);
  $link=mysqli_real_escape_string($con,$_POST['link']);
  $id =mysqli_real_escape_string($con,$_POST['update_faqs']);
  $sqll = "UPDATE `n_faq` SET f_question='$title',f_answer='$link' WHERE f_id='".$_POST['update_faqs']."'";
  if (mysqli_query($con, $sqll)) {
      echo "<script>alert('FAQ Updated Successfully')</script>";
      echo "<script>window.location='faq.php'</script>";
  } else {
      echo "Error: " . $sqll . "<br>" . mysqli_error($con);
  } 
}

if (isset($_POST['ok'])){
  $ques =mysqli_real_escape_string($con,$_POST['f_question']);
  $ans = mysqli_real_escape_string($con,$_POST['f_answer']);
  $sqll = "INSERT INTO n_faq (f_question,f_answer,f_time)
  VALUES ('$ques','$ans',NOW())";

  if (mysqli_query($con, $sqll)) {
      echo "<script>alert('FAQ Added Successfully')</script>";
      echo "<script>window.location='faq.php'</script>";
  } else {
      echo "Error: " . $sqll . "<br>" . mysqli_error($con);
  } 
}
if (isset($_POST['okk'])){
  $id =mysqli_real_escape_string($con,$_POST['okk']);
  $sqll = "DELETE FROM n_faq WHERE f_id='$id'";

  if (mysqli_query($con, $sqll)) {
      echo "<script>alert('FAQ Deleted Successfully')</script>";
      echo "<script>window.location='faq.php'</script>";
  } else {
      echo "Error: " . $sqll . "<br>" . mysqli_error($con);
  } 
}
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
  <style type="text/css">
    #right-top-nav{
      margin-left: -110px;
    }
    #contained{
      width: 65%;
    }
  </style>
<div id="main-div" class="container" >
      <div id="1sec1Row" class="lib-sec1 row z-depth-1" style="background-color:#fff;">
        <div class="lib-logo-sec">
          <div class="right white-text">
            <div id="right-top-nav">
            <?php if(isset($_SESSION["u_name"])){?>
            <a class="white-text" href="home.php"><span class="lib-right-top-nav z-depth-2">Adm</span></a>
            <a class="white-text" href="logout.php"><span class="lib-right-top-nav z-depth-2">LogOut</span></a><?php }
            else{?>
              <a class="white-text" href="faq.php"><span class="lib-right-top-nav z-depth-2">FAQs</span></a>
             <a class="white-text" href="login.php"><span class="lib-right-top-nav z-depth-2">Login</span></a>
            
            <?php } ?></div>
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
          <marquee  onmouseover="stop()" onmouseout="start()" scrollamount="5">
           
      </marquee>
      </div>
          </nav>
        </div>
      </div>     <!-- sec-1 khatam --> 
    <style type="text/css">
      #mainContentUp{
        margin: 60px 0 0 0;
      }
      #mainContent{
        min-height: 600px;
      }
    </style>   
    <div id="mainContentUp" class="row">
        <div id="mainContent" class="card">
                            <div class="card-content">
                              <span class="card-title grey-text text-darken-3">
                               <?php if(isset($_SESSION["u_name"])){  echo "You are Allowed to Insert and Delete FAQs"; }
                               else{ echo "Frequently asked Questions";} ?><i class="small mdi-content-send right"></i>
                              </span>
                              <div class="divider"></div>
                              <ul class="collection">
                            
                  <li>
                    <?php if(isset($_SESSION["u_name"])){?>
                  <ul class="collapsible popout" data-collapsible="accordion">
                                <li>
                                  <div class="collapsible-header grey-text text-darken-3"><i class="small mdi-notification-more"></i>Enter New FAQ Here</div>
                            <div class="collapsible-body"><form class="col s12" method="post">
                                  <div class="row">
                                    <div class="input-field col s12">
                                      <textarea id="textarea4"  name="f_question" placeholder="Don't write to end of line, press enter(newline) to keep the lines shorter and readable" required="required" class="materialize-textarea grey-text text-darken-3"></textarea>
                                      <label for="textarea4">Question?</label>
                                    </div>
                                     <div class="input-field col s12">
                                      <textarea id="textarea5"  name="f_answer" placeholder="Don't write to end of line, press enter(newline) to keep the lines shorter and readable"  required="required" class="materialize-textarea grey-text text-darken-3"></textarea>
                                      <label for="textarea5">Answer</label>
                                    </div>
                            <div class="input-field col s12">
                                <br><br><button class="btn waves-effect waves-light grey darken-3" name="ok">Add</button>
                                 </div> </div>
                                </form>
                            </div>
                                </li>
                  </ul>

                  <ul class="collapsible popout" data-collapsible="accordion"><?php } ?>
                              <li>
                                <?php if(isset($_SESSION["u_name"])){?>
                                  <div class="collapsible-header grey-text text-darken-3"><i class="small mdi-notification-more"></i>FAQ Delete Section</div>
                                <div class="collapsible-body"><?php } ?>
                                  <div class="row"> 
                                  <?php 
                                  if($query_run_faq = mysqli_query($con,$query_faq)){
                                    while($query_row_faq = mysqli_fetch_assoc($query_run_faq)){  
                                  ?>
                                  <div class="card grey">
                                  <div class="card-content white-text"><div id="contained">
                                  <p style="margin:1px 1px 1px 30px;"><strong class="grey-text text-darken-4"> Question :  </strong><br><?php echo $query_row_faq['f_question'];?> ?</p>
                                 <p style="margin:1px 1px 1px 30px;"><strong class="grey-text text-darken-4" > Answer : </strong><br><?php echo $query_row_faq['f_answer'];?></p>
                                  </div>
                                  <?php
                                      if(isset($_SESSION["u_name"])){?>
                                      <div class="card-action">
                                      <form method="post">
                                                    <button class="btn waves-effect waves-light grey darken-3 secondary-content" name="okk" value="<?php echo $query_row_faq['f_id'];?>"><i class="material-icons">delete</i></button>
                                                    <?php echo '<a class="waves-effect waves-light btn modal-trigger grey darken-3 white-text right" href="#modal'.$query_row_faq['f_id'].'">UPDATE</a> '; ?>         
                                                     <div class="row"></div>
                                      </form></div>
                                      <?php  }  ?>   
                                     </div> </div>
                                      <?php   }} ?> 
                                  </div>
                                 </div>
                              </li>
                <?php
                  $query_faq = "SELECT * FROM n_faq ORDER By f_time DESC";
                    if($query_run_faq = mysqli_query($con,$query_faq)){
                    while($query_row_faq = mysqli_fetch_assoc($query_run_faq)){  
                        echo '<form method="post"><div id="modal'.$query_row_faq['f_id'].'" class="modal"><div class="modal-content"><h4>Update Here</h4><div class="divider"></div><p><div class="input-field"><textarea id="textarea001'.$query_row_faq['f_id'].'" name="title"  required="required" class="materialize-textarea grey-text text-darken-3">'.$query_row_faq['f_question'].'</textarea><label for="textarea001'.$query_row_faq['f_id'].'">Question</label></div><div class="input-field"><textarea id="textarea002'.$query_row_faq['f_id'].'" name="link"  required="required" class="materialize-textarea grey-text text-darken-3">'.$query_row_faq['f_answer'].'</textarea><label for="textarea002'.$query_row_faq['f_id'].'">Answer</label></div></p></div><div class="modal-footer"><button class="btn waves-effect waves-light grey darken-3 right" name="update_faqs" value="'.$query_row_faq['f_id'].'">Submit</button></div></div></form>';
                      }
                    }else echo "<script>alert('Error: Try Again');</script>";
                   ?> 
                  </ul>
                  </li>
                  </ul>
                  </div>
      </div></div>
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
