<?php
require('../include/db.php');
if(!isset($_SESSION['isUserLoggedIn'])){
  echo "<script>window.location.href = 'login.php';</script>";
}
$query = "SELECT * FROM home,section_control,social_media,about,contact,site_background,seo,admin";
$run = mysqli_query($db, $query);
$user_data = mysqli_fetch_array($run);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Panel | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->

      <!-- Messages Dropdown Menu -->
  
      <!-- Notifications Dropdown Menu -->
 
      <li class="nav-item">
        <a class="nav-link" href="../include/logout.php">
          Logout
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../images/<?=$user_data['admin_profile']?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?=$user_data['fullname']?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="index.php" class="nav-link">
            <i class="fa fa-th-large" aria-hidden="true"></i>
              <p>
                Section Control
              </p>
            </a>
          </li>

          <li class="nav-item menu-open">
            <a href="index.php?homesetting=true" class="nav-link">
            <i class="fa fa-home" aria-hidden="true"></i>
              <p>
                Home Setting
              </p>
            </a>
          </li>

          <li class="nav-item menu-open">
            <a href="index.php?aboutsetting=true" class="nav-link">
            <i class="fa fa-question-circle" aria-hidden="true"></i>
              <p>
                About Setting
              </p>
            </a>
          </li>

          <li class="nav-item menu-open">
            <a href="index.php?resumesetting=true" class="nav-link">
            <i class="fa fa-briefcase" aria-hidden="true"></i>
              <p>
                Resume Setting
              </p>
            </a>
          </li>

          <li class="nav-item menu-open">
            <a href="index.php?portfoliosetting=true" class="nav-link">
            <i class="fa fa-desktop" aria-hidden="true"></i>
              <p>
                Portfolio Setting
              </p>
            </a>
          </li>

          <li class="nav-item menu-open">
            <a href="index.php?contactsetting=true" class="nav-link">
            <i class="fa fa-envelope" aria-hidden="true"></i>
              <p>
                Contact Setting
              </p>
            </a>
          </li>

          <!-- <li class="nav-item menu-open">
            <a href="index.php?changebackground=true" class="nav-link">
            <i class="fa fa-camera" aria-hidden="true"></i>
              <p>
                Change Background
              </p>
            </a>
          </li> -->

          <li class="nav-item menu-open">
            <a href="index.php?seosetting=true" class="nav-link">
            <i class="fa fa-search" aria-hidden="true"></i>
              <p>
                SEO Setting
              </p>
            </a>
          </li>

          <li class="nav-item menu-open">
            <a href="index.php?accountsetting=true" class="nav-link">
            <i class="fa fa-user" aria-hidden="true"></i>
              <p>
                Account Setting
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
<br>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->

        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
<?php

if(isset($_GET['homesetting'])){ ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Update Home Page</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="../include/admin.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Headline</label>
                    <input type="text" class="form-control" name="title" id="exampleInputEmail1" 
                    value="<?=$user_data['title']?>" placeholder="Enter headline">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Subtitle</label>
                    <input type="text" class="form-control" name="subtitle" id="exampleInputPassword1" 
                    value="<?=$user_data['subtitle']?>" placeholder="Enter subtitle">
                  </div>
                  <div class="form-check">
                    <input type="checkbox" name="showicons" class="form-check-input" id="exampleCheck1" 
                    <?php
                  if($user_data['showicons']){
                    echo "checked";
                  }
                  ?>
                  >
                    <label class="form-check-label" for="exampleCheck1" >Show Social Media Icons</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update-home" class="btn btn-primary">Save Changes</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
<?php

} else if (isset($_GET['aboutsetting'])){
?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Update About Page</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <img src="../images/<?=$user_data['profile_pic']?>" class="col-2">
              <form role="form" action="../include/admin.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">About Profile Picture</label>
                    <input type="file" class="form-control" name="profile">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">About Headline</label>
                    <input type="text" class="form-control" name="abouttitle" id="exampleInputEmail1" 
                    value="<?=$user_data['about_title']?>" placeholder="Enter headline">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">About Subtitle</label>
                    <input type="text" class="form-control" name="aboutsubtitle" id="exampleInputPassword1" 
                    value="<?=$user_data['about_subtitle']?>" placeholder="Enter subtitle">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">About Description</label><br>
                    <textarea cols="50" name="aboutdesc"><?=$user_data['about_desc']?></textarea>
                  </div>
                 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="update-about" class="btn btn-primary">Save Changes</button>
                </div>
              </form>
            </div>

            <!-- /.card -->
          <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Manage Skills</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Skills</h3>
                  </div>
                <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Skill Name</th>
                      <th>Skill Level</th>
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
<?php
$q = "SELECT * FROM skills";
$r = mysqli_query($db,$q);
$c = 1;
while($skill=mysqli_fetch_array($r)){
  ?>
          <tr>
            <td><?=$c?></td>
            <td><?=$skill['skill_name']?></td>
            <td>
              <div class="progress progress-xs">
                <div class="progress-bar progress-bar-danger" style="width: <?=$skill['skill_level']?>%"></div>
              </div>
              <span class="badge bg-danger"><?=$skill['skill_level']?>%</span>
            </td>
            <td>
              <a href="../include/deleteskill.php?id=<?=$skill['id']?>">Delete</a>
            </td>
          </tr>
  <?php
  $c++;
}
?>
                  </tbody>
                </table>
              </div>

              <form role="form" action="../include/admin.php" method="post">
                <div class="card-body">
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">Skill Name</label>
                    <input type="text" class="form-control" name="skillname" placeholder="Enter skill">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Skill Level</label>
                    <input type="range" min="1" max="100" class="form-control" name="skilllevel" id="exampleInputEmail1" 
                     placeholder="Enter headline">
                  </div>
                 
                </div>
                
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="add-skill" class="btn btn-primary">Add Skill</button>
                </div>
              </form>
              </div>
          </div>


            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Manage Personal Info</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Personal Info</h3>
                  </div>
                <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Label</th>
                      <th>Value</th>
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
<?php
$q = "SELECT * FROM personal_info";
$r = mysqli_query($db,$q);
$c = 1;
while($pi=mysqli_fetch_array($r)){
  ?>
          <tr>
            <td><?=$c?></td>
            <td><?=$pi['label']?></td>
            <td><?=$pi['value']?></td>
            <td>
              <a href="../include/deletepi.php?id=<?=$pi['id']?>">Delete</a>
            </td>
          </tr>
  <?php
  $c++;
}
?>
                  </tbody>
                </table>
              </div>

              <form role="form" action="../include/admin.php" method="post">
                <div class="card-body">
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">Label</label>
                    <input type="text" class="form-control" name="label" placeholder="Enter label">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Value</label>
                    <input type="text" class="form-control" name="value" placeholder="Enter value">
                  </div>
                 
                </div>
                
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="add-pi" class="btn btn-primary">Add Personal Info</button>
                </div>
              </form>
            </div>
          </div>
            <!-- /.card -->
<?php
} else if (isset($_GET['resumesetting'])){
?>

 <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Manage Resume</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Education & Work</h3>
                  </div>
                <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Type</th>
                      <th>Title</th>
                      <th>Time</th>
                      <th>Institute/Company</th>
                      <th>About</th>
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
<?php
$q = "SELECT * FROM resume";
$r = mysqli_query($db,$q);
$c = 1;
while($resume=mysqli_fetch_array($r)){
  ?>
          <tr>
            <td><?=$c?></td>
            <td><?=$resume['type']?></td>
            <td><?=$resume['title']?></td>
            <td><?=$resume['time']?></td>
            <td><?=$resume['org']?></td>
            <td><?=$resume['about_exp']?></td>
            <td>
              <a href="../include/deleteresume.php?id=<?=$resume['id']?>">Delete</a>
            </td>
          </tr>
  <?php
  $c++;
}
?>
                  </tbody>
                </table>
              </div>

              <form role="form" action="../include/admin.php" method="post">
                <div class="card-body">
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Select Type</label><br>
                    <select name="type" class="form-control">
                      <option value="e">Education</option>
                      <option value="p">Professional</option>
                    </select>
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Enter title">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Time</label>
                    <input type="text" class="form-control" name="time" placeholder="Enter time">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Institue/Company</label>
                    <input type="text" class="form-control" name="org" placeholder="Enter institution or company">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">About</label>
                    <input type="text" class="form-control" name="about_exp" placeholder="Enter more info">
                  </div>
                 
                </div>
                
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="add-resume" class="btn btn-primary">Add Details</button>
                </div>
              </form>
            </div>
          </div>
            <!-- /.card -->
<?php
} else if(isset($_GET['portfoliosetting'])){
?>

<div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Manage Portfolio</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">My Projects</h3>
                  </div>
                <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Project Type</th>
                      <th>Project Image</th>
                      <th>Project Name</th>
                      <th>Projecy Link</th>
                      <th>Project Details</th>
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
<?php
$q = "SELECT * FROM portfolio";
$r = mysqli_query($db,$q);
$c = 1;
while($portfolio=mysqli_fetch_array($r)){
  ?>
          <tr>
            <td><?=$c?></td>
            <td><?=$portfolio['project_type']?></td>
            <td><img src="../images/<?=$portfolio['project_pic']?>" style="width:150px"></td>
            <td><?=$portfolio['project_name']?></td>
            <td><a href="<?=$portfolio['project_link']?>" target="_blank">Open Link</a></td>
            <td><?=$portfolio['project_details']?></td>
            <td>
              <a href="../include/deleteportfolio.php?id=<?=$portfolio['id']?>">Delete</a>
            </td>
          </tr>
  <?php
  $c++;
}
?>
                  </tbody>
                </table>
              </div>

              <form role="form" action="../include/admin.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Select Type</label><br>
                    <select name="project_type" class="form-control">
                      <option value="prog">PROGRAMMING</option>
                      <option value="other">OTHER</other>
                    </select>
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Project Image</label>
                    <input type="file" class="form-control" name="project_pic">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Project Name</label>
                    <input type="text" class="form-control" name="project_name" placeholder="Enter project name">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Project Link</label>
                    <input type="text" class="form-control" name="project_link" placeholder="Enter link">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Project Details</label>
                    <input type="text" class="form-control" name="project_details" placeholder="Enter more info">
                  </div>
                 
                </div>
                
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="add-portfolio" class="btn btn-primary">Add Project</button>
                </div>
              </form>
            </div>
          </div>
            <!-- /.card -->

<?php
} else if(isset($_GET['contactsetting'])){
  ?>

<div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Update Contact Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="../include/admin.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control" name="address" id="exampleInputEmail1" 
                    value="<?=$user_data['address']?>" placeholder="Enter address">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" class="form-control" name="email" id="exampleInputPassword1" 
                    value="<?=$user_data['email']?>" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Mobile</label>
                    <input type="text" class="form-control" name="mobile" id="exampleInputPassword1" 
                    value="<?=$user_data['mobile']?>" placeholder="Enter mobile no">
                  </div>         
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update-contact" class="btn btn-primary">Save Changes</button>
                </div>
              </form>
            </div>
</div>
            <!-- /.card -->

          <div class="card card-primary col-lg-12">
            <div class="card-header">
                <h3 class="card-title">Update Social Media Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="../include/admin.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Facebook</label>
                    <input type="text" class="form-control" name="facebook" id="exampleInputEmail1" 
                    value="<?=$user_data['facebook']?>" placeholder="Enter username">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Instagram</label>
                    <input type="text" class="form-control" name="instagram" id="exampleInputEmail1" 
                    value="<?=$user_data['instagram']?>" placeholder="Enter username">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">LinkedIn</label>
                    <input type="text" class="form-control" name="linkedin" id="exampleInputEmail1" 
                    value="<?=$user_data['linkedin']?>" placeholder="Enter username">
                  </div>    
                  <div class="form-group">
                    <label for="exampleInputEmail1">GitHub</label>
                    <input type="text" class="form-control" name="git" id="exampleInputEmail1" 
                    value="<?=$user_data['git']?>" placeholder="Enter username">
                  </div>    
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update-socialmedia" class="btn btn-primary">Save Changes</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

  <?php
} else if(isset($_GET['seosetting'])){
  ?>

<div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Update SEO</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <img src="../images/<?=$user_data['siteicon']?>" class="col-1">
              <form role="form" action="../include/admin.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Siteicon</label>
                    <input type="file" class="form-control" name="siteicon">
                  </div> 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Page Title</label>
                    <input type="text" value="<?=$user_data['page_title']?>" class="form-control" name="page_title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Keywords</label>
                    <input type="text" value="<?=$user_data['keywords']?>" class="form-control" name="keywords">
                  </div>  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" value="<?=$user_data['description']?>" class="form-control" name="description">
                  </div>      
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update-seo" class="btn btn-primary">Save Changes</button>
                </div>
              </form>
            </div>
</div>

  <?php
} else if(isset($_GET['accountsetting'])){
  ?>

<div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Update Account Setting</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <img src="../images/<?=$user_data['admin_profile']?>" class="col-2">
              <form role="form" action="../include/admin.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Profile Picture</label>
                    <input type="file" class="form-control" name="profilepic">
                  </div> 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Full Name</label>
                    <input type="text" value="<?=$user_data['fullname']?>" class="form-control" name="fullname">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" value="<?=$user_data['email']?>" class="form-control" name="email">
                  </div>  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="text" value="<?=$user_data['password']?>" class="form-control" name="password">
                  </div>      
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update-account" class="btn btn-primary">Update Account</button>
                </div>
              </form>
            </div>
</div>

  <?php
} else {
?>

          <form method="post" action="../include/admin.php">
                <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                  <input type="checkbox" class="custom-control-input" name="home" id="customSwitch1"
                  <?php
                  if($user_data['home_section']){
                    echo "checked";
                  }
                  ?>
                  >
                  <label class="custom-control-label" for="customSwitch1">Home Section</label>
                </div>

                <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                  <input type="checkbox" class="custom-control-input" name="about" id="customSwitch2"
                  <?php
                  if($user_data['about_section']){
                    echo "checked";
                  }
                  ?>
                  >
                  <label class="custom-control-label" for="customSwitch2">About Section</label>
                </div>

                <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                  <input type="checkbox" class="custom-control-input" name="resume" id="customSwitch3"
                  <?php
                  if($user_data['resume_section']){
                    echo "checked";
                  }
                  ?>
                  >
                  <label class="custom-control-label" for="customSwitch3">Resume Section</label>
                </div>

                <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                  <input type="checkbox" class="custom-control-input" name="portfolio" id="customSwitch4"
                  <?php
                  if($user_data['portfolio_section']){
                    echo "checked";
                  }
                  ?>
                  >
                  <label class="custom-control-label" for="customSwitch4">Portfolio Section</label>
                </div>

                <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                  <input type="checkbox" class="custom-control-input" name="contact" id="customSwitch5"
                  <?php
                  if($user_data['contact_section']){
                    echo "checked";
                  }
                  ?>
                  >
                  <label class="custom-control-label" for="customSwitch5">Contact Section</label>
                </div>

              <input type="submit" class="btn btn-sm btn-primary" name="update-section" value="Save Changes">

          </form>   
<?php
}
?>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2022 <a href="https://adminlte.io">Arianne Bonneau</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
