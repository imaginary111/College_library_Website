<?php
session_start();
if(!isset($_SESSION["u_name"])){
  echo "<script>window.location='index.php'</script>";
  exit();}
include('connection.php');
$query_announce = "SELECT * FROM Announce";
$query_news = "SELECT * FROM news ORDER By n_time DESC";
if (isset($_POST['ok'])){
  $title =mysqli_real_escape_string($con,$_POST['n_body']);
  $link = mysqli_real_escape_string($con,$_POST['n_link']);
  $sqll = "INSERT INTO News (n_body,n_link,n_time)
  VALUES ('$title','$link',NOW())";

  if (mysqli_query($con, $sqll)) {
      echo "<script>alert('News Added Successfully')</script>";
      echo "<script>window.location='home.php'</script>";
  } else {
      echo "<script>alert('Error: Try Again')</script>";
  } 
}
if (isset($_POST['update_news'])){
  $title=mysqli_real_escape_string($con,$_POST['title']);
  $link=mysqli_real_escape_string($con,$_POST['link']);
  $id =mysqli_real_escape_string($con,$_POST['update_news']);
  $sqll = "UPDATE `news` SET n_body='$title',n_link='$link' WHERE news_id='".$_POST['update_news']."'";
  if (mysqli_query($con, $sqll)) {
      echo "<script>alert('News Updated Successfully')</script>";
      echo "<script>window.location='home.php'</script>";
  } else {
      echo "Error: " . $sqll . "<br>" . mysqli_error($con);
  } 
}
if (isset($_POST['news-del'])){
  $id =mysqli_real_escape_string($con,$_POST['news-del']);
  $sqll = "DELETE FROM News WHERE news_id='$id'";

  if (mysqli_query($con, $sqll)) {
      echo "<script>alert('News Deleted Successfully')</script>";
      echo "<script>window.location='home.php'</script>";
  } else {
      echo "Error: " . $sqll . "<br>" . mysqli_error($con);
  } 
}
if (isset($_POST['eresources'])){
  $title =mysqli_real_escape_string($con,$_POST['e_title']);
  $link = mysqli_real_escape_string($con,$_POST['e_link']);
  $sqll = "INSERT INTO `e-resources` (title,link) VALUES ('$title','$link')";

  if (mysqli_query($con, $sqll)) {
      echo "<script>alert('E-Resources Added Successfully')</script>";
      echo "<script>window.location='home.php'</script>";
  } else {
      echo "<script>alert('Error: Try Again')</script>";
  } 
}
if (isset($_POST['eresources-del'])){
  $sqll = 'DELETE FROM `e-resources` WHERE er_id=\''.$_POST['eresources-del'].'\'';
  if (mysqli_query($con, $sqll)) {
      $sqll = 'ALTER TABLE `e-resources` DROP `er_id`;ALTER TABLE `e-resources` AUTO_INCREMENT = 1;ALTER TABLE `e-resources` ADD `er_id` int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST;';
      if(mysqli_multi_query($con, $sqll)){
        echo "<script>alert('E-Resource Deleted Successfully')</script>";
        echo "<script>window.location='home.php'</script>";
      }else{
        echo "<script>alert('Error - Indexing Problem : Please Inform the IT-Department as soon as possible, However E-Resource Deleted Successfully')</script>";
        echo "<script>window.location='home.php'</script>";
      }
  } else {
      echo "<script>alert('Error: Try Again')</script>";
  } 
}
if (isset($_POST['update_er'])){
  $title =mysqli_real_escape_string($con,$_POST['title']);
  $link = mysqli_real_escape_string($con,$_POST['link']);
  $sqll = "UPDATE `e-resources` SET title='$title',link='$link' WHERE er_id='".$_POST['update_er']."'";
  if (mysqli_query($con, $sqll)) {
      echo "<script>alert('E-Resources Updated successfully')</script>";
      echo "<script>window.location='home.php'</script>";
  } else {
      echo "<script>alert('Error: Try Again')</script>";
  }
}
if (isset($_POST['sub'])){
  $marquee =mysqli_real_escape_string($con,$_POST['marquee']);
  $sqll = "UPDATE Announce SET marquee='$marquee' Where mid=0";

  if (mysqli_query($con, $sqll)) {
      echo "<script>alert('Announcement/s added successfully')</script>";
      echo "<script>window.location='home.php'</script>";
  } else {
      echo "<script>alert('Error: Try Again')</script>";
  }
}
unset($_POST);
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
  </style>
<div id="main-div" class="container" >
      <div id="1sec1Row" class="lib-sec1 row z-depth-1" style="background-color:#fff;">
        <div class="lib-logo-sec">
          <div class="right white-text">
            <div id="right-top-nav">
            <a class="white-text" href="faq.php"><span class="lib-right-top-nav z-depth-2">FAQs</span></a>
            <a class="white-text" href="logout.php"><span class="lib-right-top-nav z-depth-2">LogOut</span></a>
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
                                You are Allowed to Insert/Change/Update<i class="small mdi-content-send right"></i>
                              </span>
                              <div class="divider"></div>
                              <ul class="collection">
                <li><ul class="collapsible popout" data-collapsible="accordion">
                                <li>
                                  <div class="collapsible-header grey-text text-darken-3"><i class="small mdi-action-announcement"></i>Enter New Announcements Here</div>
                                  <div class="collapsible-body"><form class="col s12" method="post">
                                  <div class="row">
                                    <div class="input-field col s12">
                                      <textarea id="textarea1"  name="marquee"  required="required" class="materialize-textarea grey-text text-darken-3" placeholder="Enter Announcements here">
                                        <?php 
                                          echo trim($query_row['marquee']);
                                         ?>
                                      </textarea>
                                      <label for="textarea1">Current Status:</label>
                                    </div>
                                  <div class="input-field col s12">
                                <br><br><button class="btn waves-effect waves-light grey darken-3" name="sub">Update</button>
                                 </div> </div>
                                </form>
                                </div>
                                </li>
                  </ul></li>

                  <li><ul class="collapsible popout" data-collapsible="accordion">
                                <li>
                                  <div class="collapsible-header grey-text text-darken-3"><i class="small mdi-notification-more"></i>Enter The College News Here</div>
                            <div class="collapsible-body"><form class="col s12" method="post">
                                  <div class="row">
                                    <div class="input-field col s12">
                                      <textarea id="textarea4"  name="n_body"  required="required" class="materialize-textarea grey-text text-darken-3"></textarea>
                                      <label for="textarea4">News Heading</label>
                                    </div>
                                     <div class="input-field col s12">
                                      <textarea id="textarea5"  name="n_link"  required="required" class="materialize-textarea grey-text text-darken-3"></textarea>
                                      <label for="textarea5">Link to News</label>
                                    </div>
                            <div class="input-field col s12">
                                <br><br><button class="btn waves-effect waves-light grey darken-3" name="ok">Add</button>
                                 </div> </div>
                                </form>
                            </div>
                                </li>
                  </ul></li>
                  <li><ul class="collapsible popout" data-collapsible="accordion">
                                <li>
                                  <div class="collapsible-header grey-text text-darken-3"><i class="material-icons">delete</i>Delete/Update News Here</div>
                                 <div class="collapsible-body">
                                  <?php 
                                    if($query_run = mysqli_query($con,$query_news)){
                                      while($query_row = mysqli_fetch_assoc($query_run)){
                                        echo '<form method="post"><li class="collection-item"><div class="row"><div class="col l12 m12 s12">'.$query_row['n_body'].'</div><div class="col l12 m12 s12"><button class="btn waves-effect waves-light grey darken-3 right" name="news-del" value="'.$query_row['news_id'].'"><i class="material-icons">delete</i></button><a class="waves-effect waves-light btn modal-trigger grey darken-3 right" href="#modal'.$query_row['news_id'].'">UPDATE</a></div></div></li></form><div class="divider"></div>';
                                      }
                                    }else echo "<script>alert('Error: Try Again');</script>";
                                   ?>
                                 </div>
                                </li>
                  </ul></li>
                  <li><ul class="collapsible popout" data-collapsible="accordion">
                                <li>
                                  <div class="collapsible-header grey-text text-darken-3"><i class="small material-icons">view_list</i>Enter E-Resources Here</div>
                            <div class="collapsible-body"><form class="col s12" method="post">
                                  <div class="row">
                                    <div class="input-field col s12">
                                      <textarea id="textarea06"  name="e_title"  required="required" class="materialize-textarea grey-text text-darken-3"></textarea>
                                      <label for="textarea06">E-Resources Title</label>
                                    </div>
                                     <div class="input-field col s12">
                                      <textarea id="textarea07"  name="e_link"  required="required" class="materialize-textarea grey-text text-darken-3"></textarea>
                                      <label for="textarea07">Link to E-Resources</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <br><br><button class="btn waves-effect waves-light grey darken-3" name="eresources">Add</button>
                                         </div>
                                    </div>
                                </form>
                            </div>
                                </li>
                  </ul></li>
                  <li><ul class="collapsible popout" data-collapsible="accordion">
                                <li>
                                  <div class="collapsible-header grey-text text-darken-3"><i class="small mdi-action-delete"></i>Delete/Update E-Resources Here</div>
                                  <div class="collapsible-body">
                                    <div class="collection">
                                      <?php 
                                        $query = 'SELECT * FROM `e-resources` ORDER BY er_id';
                                        if($query_run = mysqli_query($con,$query)){
                                          while($query_row = mysqli_fetch_assoc($query_run)){
                                            echo '<form method="post"><li class="collection-item">'.$query_row['title'].'<button class="btn waves-effect waves-light grey darken-3 right" name="eresources-del" value="'.$query_row['er_id'].'"><i class="material-icons">delete</i></button><a class="waves-effect waves-light btn modal-trigger grey darken-3 right" href="#modal0'.$query_row['er_id'].'">UPDATE</a></li></form><div class="divider"></div>';
                                          }
                                        }else echo "<script>alert('Error: Try Again');</script>";
                                       ?>
                                    </div>
                                  </div>
                                </li>
                  </ul></li>
                  </ul></div>
                  <!-- MODALS Eresources-->
                  <?php 
                    $query = 'SELECT * FROM `e-resources` ORDER BY er_id';
                    if($query_run = mysqli_query($con,$query)){
                      while($query_row = mysqli_fetch_assoc($query_run)){
                        echo '<form method="post"><div id="modal0'.$query_row['er_id'].'" class="modal"><div class="modal-content"><h4>Update Here</h4><div class="divider"></div><p><div class="input-field"><textarea id="textarea1'.$query_row['er_id'].'" name="title"  required="required" class="materialize-textarea grey-text text-darken-3">'.$query_row['title'].'</textarea><label for="textarea1'.$query_row['er_id'].'">E-Resources Title</label></div><div class="input-field"><textarea id="textarea2'.$query_row['er_id'].'" name="link"  required="required" class="materialize-textarea grey-text text-darken-3">'.$query_row['link'].'</textarea><label for="textarea2'.$query_row['er_id'].'">Link to E-Resources</label></div></p></div><div class="modal-footer"><button class="btn waves-effect waves-light grey darken-3 right" name="update_er" value="'.$query_row['er_id'].'">Submit</button></div></div></form>';
                      }
                    }else echo "<script>alert('Error: Try Again');</script>";
                   ?>
                 <!-- MODALS NEWS-->
                  <?php
                    if($query_run = mysqli_query($con,$query_news)){
                      while($query_row = mysqli_fetch_assoc($query_run)){
                        echo '<form method="post"><div id="modal'.$query_row['news_id'].'" class="modal"><div class="modal-content"><h4>Update Here</h4><div class="divider"></div><p><div class="input-field"><textarea id="textarea001'.$query_row['news_id'].'" name="title"  required="required" class="materialize-textarea grey-text text-darken-3">'.$query_row['n_body'].'</textarea><label for="textarea001'.$query_row['news_id'].'">News Title</label></div><div class="input-field"><textarea id="textarea002'.$query_row['news_id'].'" name="link"  required="required" class="materialize-textarea grey-text text-darken-3">'.$query_row['n_link'].'</textarea><label for="textarea002'.$query_row['news_id'].'">Link to News Source</label></div></p></div><div class="modal-footer"><button class="btn waves-effect waves-light grey darken-3 right" name="update_news" value="'.$query_row['news_id'].'">Submit</button></div></div></form>';
                      }
                    }else echo "<script>alert('Error: Try Again');</script>";
                   ?> 
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
