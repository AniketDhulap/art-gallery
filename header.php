<!DOCTYPE html>
<html lang="en">

<head>
  <title>RCA GALLERY</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- css file link -->
  <link rel="stylesheet" href="style.min.css">
  <!-- bootstrap link -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- josefin sans font -->
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  <!-- search icon -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- search fun -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"> -->
  <!-- abut gallery lightbox -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">



  <!-- js links -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="JQuery3.3.1.js"></script>
  <script type="text/javascript" src="lightslider.js"></script>


  <!-- header navigation -->

  <nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <!-- logo -->
    <a class="navbar-brand" href="index.php"><img src="logos.png" height="50px" width="100px"></a>
    <!-- toggle button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- menu -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="gallery.php">Gallery</a>
        </li>
        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Artist
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="contemporary-artist.php">Contemporary Artist</a>
            <a class="dropdown-item" href="old-master-artist.php">Old Master Artist</a>
            <a class="dropdown-item" href="salable-artist.php">Salable Artist</a>
          </div>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="exhibition.php">Exhibition</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="event.php">Event</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="news.php">News</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="about-us.php">About Us</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="contact-us.php">Contact Us</a>
        </li>


        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle user-tag" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            LOGIN
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="user-login.php">LOGIN</a>
            <a class="dropdown-item" href="signup.php">SIGN-UP</a>
          </div>
        </li>


        <!-- search button -->
        <li>
          <a href="#"><i class="search-icon fa fa-search"></i></a>

          <div class="search-screen">
            <i class="close-icon fa fa-times"></i>
            <input type="text" class="search-box" placeholder="start typing...">
          </div>

          <script>
            document.querySelector(".search-icon").addEventListener('click', function() {
              document.querySelector(".search-screen").classList.add("active");
            });

            document.querySelector(".close-icon").addEventListener('click', function() {
              document.querySelector(".search-screen").classList.remove("active");
            });
          </script>
        </li>
      </ul>
    </div>
  </nav>
</head>