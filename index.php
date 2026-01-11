<?php
include __DIR__."/__Functions/__template_fun.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sanjay Profile</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/images/logo.ico" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>

  <!--
    - #MAIN
  -->

  <main>

    <!--
      - #SIDEBAR
    -->
    <?php
    page_load("__side_bar")
    ?>
   

    <!--
      - #main-content
    -->

    <div class="main-content">

      <!--
        - #NAVBAR
      -->

      <?php
      page_load("__nave_bar")
      ?>


      <!--
        - #ABOUT
      -->

      <?php
       page_load("__about")
      ?>

      <!--
        - #RESUME
      -->

      <?php
      page_load("__resume")
      ?>


      <!--
        - #PROJECT
      -->

      <?php
      page_load("__project")
      ?>

      <!--
        - #BLOG
      -->
      <?php
      page_load("__blog_disp")
      ?>


      <!--
        - #CONTACT
      -->

      <?php
      // page_load("__contact")
      ?>

    </div>

  </main>






  <!--
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>