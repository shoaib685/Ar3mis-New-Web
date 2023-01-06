<?php

ini_set('error_reporting', 0);
ini_set('display_errors', 0);
?>

<header class="header">
  <div class="overlay" data-overlay></div>

  <div class="container">

    <a href="#" class="logo">
      <img height="125" src="/assets/images/logo.png" alt="GameX logo" style="border-radius: 10ch;">
    </a>

    <button class="nav-open-btn" data-nav-open-btn>
      <ion-icon name="menu-outline" class="mobile-nav-icon"></ion-icon>
    </button>

    <nav class="navbar" data-nav>

      <div class="navbar-top">

        <a href="#" class="logo">
          <img src="/assets/images/logo.png" alt="GameX logo">
        </a>

        <button class="nav-close-btn" data-nav-close-btn>
          <ion-icon name="close-outline" class="close-outline"></ion-icon>
        </button>

      </div>

      <ul class="navbar-list">

        <li>
          <a href="#hero" class="navbar-link">Home</a>
        </li>

        <li>
          <a href="#about" class="navbar-link">About</a>
        </li>

        <li>
          <a href="#tournament" class="navbar-link">Tournament</a>
        </li>

        <li>
          <a href="#team" class="navbar-link">Team</a>
        </li>

        <li>
          <a href="#gears" class="navbar-link">Gears</a>
        </li>

        <li>
          <a href="#contact" class="navbar-link">Contact</a>
        </li>

      </ul>

      <ul class="nav-social-list">

        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-twitter"></ion-icon>
          </a>
        </li>

        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-instagram"></ion-icon>
          </a>
        </li>

        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-github"></ion-icon>
          </a>
        </li>

        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-youtube"></ion-icon>
          </a>
        </li>

      </ul>

    </nav>

    <div class="header-actions">


      <div class="searchbox">
        <input type="text" class="searchtext" placeholder="type to search..">
        <a href="#" class="searchbtn">
          <i class="fas fa-search"></i>
        </a>
      </div>

      <!-- <button class="search">
          <ion-icon name="search-outline"></ion-icon>
        </button>-->

      <button class="btn-sign_in">

        <div class="icon-box">
          <ion-icon name="log-in-outline"></ion-icon>
        </div>


        <?php

        include 'db.php';
        session_start();
        $username = $_SESSION['username'];
        $email = $_SESSION['email'];
        if (isset($_SESSION['loggedin']) && $_SESSION["loggedin"] == true) {
          $user_name = $_SESSION['username'];
          echo '
          <span>' . $_SESSION['username'] . '</span>
          <a href="/logout.php">Logout</a>
          ';
        } else {
          echo '<a href="/login/">Log-in</a>';
        }



        ?>




      </button>

    </div>

  </div>

</header>