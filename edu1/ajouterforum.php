<?php

include __DIR__.'/controller/forumc.php';
include __DIR__.'/model/forum.php';

//require_once _DIR_."/validation.php";

$input_validation = true;

// Instanciation du contrôleur
$forumC = new forumController();
$forum = null;

// Vérification de la présence des données nécessaires
if (isset($_POST["title"]) &&
    isset($_POST["content"])
    )
    {
        $currentDateTime = date('Y-m-d H:i:s');
        $forum = new Forum(
            idF: null,
            username:"farouk",
            content: $_POST["content"],
            title: $_POST["title"],
            created_at: $currentDateTime,
            updated_at: null
        );
        $forumC->addForum($forum);
        echo "Forum added successfully!";
        header('Location: forum.html');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">

  
<!-- Mirrored from themewagon.github.io/edu-meeting/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Mar 2024 22:43:26 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <style>
        .custom-padding-bottom {
            padding-bottom: 140px;  /* Change the pixel value as needed */
        }
    </style>
    <title>9aRiny HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="asset/css/fontawesome.css">
    <link rel="stylesheet" href="asset/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="asset/css/owl.css">
    <link rel="stylesheet" href="asset/css/lightbox.css">

  </head>

  <body>
      <section class="contact-us" id="contact">
          <div class="container custom-padding-bottom">
              <div class="row justify-content-center">
                  <div class="col-lg-8 align-self-center">
                      <div class="row">
                          <div class="col-lg-12">
                        <form id="contact" action="" method="POST" >
                            <h2 class="text-center">Let's get in touch</h2>
                            <div class="form-group">
                                <input name="title" type="text" id="subject" class="form-control" placeholder="TITLE...*" required="">
                            </div>
                            <div class="form-group">
                                <textarea name="content" class="form-control" id="message" placeholder="YOUR MESSAGE..." required=""></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" id="form-submit" class="button" id="boutonAjouterRendu">Ajouter</button>
                            </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.html"></script>



</body>
</html>