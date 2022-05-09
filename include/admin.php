<?php
require('db.php');
if(isset($_POST['update-section'])){
    $home = $_POST['home'] ?? 0;
    $about = $_POST['about'] ?? 0;
    $resume = $_POST['resume'] ?? 0;
    $portfolio = $_POST['portfolio'] ?? 0;
    $contact = $_POST['contact'] ?? 0;

    $query = "UPDATE section_control SET ";
    $query.= "home_section='$home',";
    $query.= "about_section='$about',";
    $query.= "resume_section='$resume',";
    $query.= "portfolio_section='$portfolio',";
    $query.= "contact_section='$contact' WHERE id=1";

    $run = mysqli_query($db, $query);

    if($run){
        echo "<script>window.location.href = '../admin/index.php';</script>";
    }
}

if(isset($_POST['update-home'])){
    $title = mysqli_real_escape_string($db,$_POST['title']);
    $subtitle = mysqli_real_escape_string($db,$_POST['subtitle']);
    $showicons = $_POST['showicons'] ?? 0;

    $query = "UPDATE home SET ";
    $query.= "title='$title',";
    $query.= "subtitle='$subtitle',";
    $query.= "showicons='$showicons' WHERE id=1";

    $run = mysqli_query($db, $query);

    if($run){
        echo "<script>window.location.href = '../admin/index.php?homesetting=true';</script>";
    }
}

if(isset($_POST['update-about'])){
    // print_r($_POST);
    // print_r($_FILES);
    $title = mysqli_real_escape_string($db,$_POST['abouttitle']);
    $subtitle = mysqli_real_escape_string($db,$_POST['aboutsubtitle']);
    $desc = mysqli_real_escape_string($db,$_POST['aboutdesc']);

    if($_FILES['profile']['tmp_name']==''){
        $q = "SELECT * FROM about WHERE 1";
        $r = mysqli_query($db,$q);
        $d = mysqli_fetch_array($r);
        $imagename = $d['profile_pic'];
    } else {
        $imagename = time().$_FILES['profile']['name'];
        $imagetmp = $_FILES['profile']['tmp_name'];
        copy($imagetmp,"../images/$imagename");  
    }

        $query = "UPDATE about SET ";
        $query.= "about_title='$title',";
        $query.= "about_subtitle='$subtitle',";
        $query.= "profile_pic='$imagename',";
        $query.= "about_desc='$desc' WHERE id=1";

        $run = mysqli_query($db,$query);

        if($run){
            echo "<script>window.location.href = '../admin/index.php?aboutsetting=true';</script>";
        }
}

if(isset($_POST['add-skill'])){

    $skillname = $_POST['skillname'];
    $skilllevel = $_POST['skilllevel'];

    $query = "INSERT INTO skills (skill_name,skill_level) VALUES ('$skillname','$skilllevel') ";

    $run = mysqli_query($db,$query);

        if($run){
            echo "<script>window.location.href = '../admin/index.php?aboutsetting=true';</script>";
        }
}

if(isset($_POST['add-pi'])){

    $label = $_POST['label'];
    $value = $_POST['value'];

    $query = "INSERT INTO personal_info (label,value) VALUES ('$label','$value') ";

    $run = mysqli_query($db,$query);

        if($run){
            echo "<script>window.location.href = '../admin/index.php?aboutsetting=true';</script>";
        }
}

if(isset($_POST['add-resume'])){

    $type = $_POST['type'];
    $title = $_POST['title'];
    $time = $_POST['time'];
    $org = $_POST['org'];
    $about = $_POST['about_exp'];

    $query = "INSERT INTO resume (type,title,time,org,about_exp) VALUES ('$type','$title','$time','$org','$about') ";

    $run = mysqli_query($db,$query);

        if($run){
            echo "<script>window.location.href = '../admin/index.php?resumesetting=true';</script>";
        }
}

if(isset($_POST['add-portfolio'])){
    $project_type = $_POST['project_type'];
    $project_name = $_POST['project_name'];
    $project_link = $_POST['project_link'];
    $project_details = $_POST['project_details'];
    $project_pic = time().$_FILES['project_pic']['name'];
    $imagetmp = $_FILES['project_pic']['tmp_name'];

    copy($imagetmp, "../images/$project_pic");

    $query = "INSERT INTO portfolio (project_pic,project_type,project_name,project_link,project_details) VALUES ('$project_pic','$project_type','$project_name','$project_link','$project_details') ";

    $run = mysqli_query($db,$query);

        if($run){
            echo "<script>window.location.href = '../admin/index.php?portfoliosetting=true';</script>";
        }
}

if(isset($_POST['update-contact'])){
    $address = mysqli_real_escape_string($db,$_POST['address']);
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $mobile = mysqli_real_escape_string($db,$_POST['mobile']);

    $query = "UPDATE contact SET ";
    $query.= "address='$address',";
    $query.= "email='$email',";
    $query.= "mobile='$mobile' WHERE id=1";

    $run = mysqli_query($db, $query);

    if($run){
        echo "<script>window.location.href = '../admin/index.php?contactsetting=true';</script>";
    }
}

if(isset($_POST['update-socialmedia'])){
    $facebook = mysqli_real_escape_string($db,$_POST['facebook']);
    $instagram = mysqli_real_escape_string($db,$_POST['instagram']);
    $git = mysqli_real_escape_string($db,$_POST['git']);
    $linkedin = mysqli_real_escape_string($db,$_POST['linkedin']);

    $query = "UPDATE social_media SET ";
    $query.= "facebook='$facebook',";
    $query.= "instagram='$instagram',";
    $query.= "git='$git',";
    $query.= "linkedin='$linkedin' WHERE id=1";

    $run = mysqli_query($db, $query);

    if($run){
        echo "<script>window.location.href = '../admin/index.php?contactsetting=true';</script>";
    }
}
if(isset($_POST['update-seo'])){
    $title = mysqli_real_escape_string($db,$_POST['page_title']);
    $keywords = mysqli_real_escape_string($db,$_POST['keywords']);
    $desc = mysqli_real_escape_string($db,$_POST['description']);

    if($_FILES['siteicon']['tmp_name']==''){
        $q = "SELECT * FROM seo WHERE 1";
        $r = mysqli_query($db,$q);
        $d = mysqli_fetch_array($r);
        $imagename = $d['siteicon'];
    } else {
        $imagename = time().$_FILES['siteicon']['name'];
        $imagetmp = $_FILES['siteicon']['tmp_name'];
        copy($imagetmp,"../images/$imagename"); 
    } 

        $query = "UPDATE seo SET ";
        $query.= "page_title='$title',";
        $query.= "keywords='$keywords',";
        $query.= "description='$desc',";
        $query.= "siteicon='$imagename' WHERE id=1";

        $run = mysqli_query($db,$query);

        if($run){
            echo "<script>window.location.href = '../admin/index.php?seosetting=true';</script>";
        }
}

if(isset($_POST['update-account'])){
    $fullname = mysqli_real_escape_string($db,$_POST['fullname']);
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $password = mysqli_real_escape_string($db,$_POST['password']);

    if($_FILES['profilepic']['tmp_name']==''){
        $q = "SELECT * FROM admin WHERE 1";
        $r = mysqli_query($db,$q);
        $d = mysqli_fetch_array($r);
        $imagename = $d['admin_profile'];
    } else {
        $imagename = time().$_FILES['profilepic']['name'];
        $imagetmp = $_FILES['profilepic']['tmp_name'];
        copy($imagetmp,"../images/$imagename"); 
    } 

        $query = "UPDATE admin SET ";
        $query.= "fullname='$fullname',";
        $query.= "email='$email',";
        $query.= "password='$password',";
        $query.= "admin_profile='$imagename' WHERE id=1";

        $run = mysqli_query($db,$query);

        if($run){
            echo "<script>window.location.href = '../admin/index.php?accountsetting=true';</script>";
        }
}

?>