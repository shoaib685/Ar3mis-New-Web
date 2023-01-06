<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AR3MIS - Gaming website</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- 
    - favicon link
  -->
  <link rel="shortcut icon" href="../downloadar3-modified.png" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="../assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&family=Poppins:wght@400;500;700&display=swap"
    rel="stylesheet">
</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <?php
    include '../header.php';
  ?>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero" id="hero">
        <div class="container">

        <form action="signup_handle.php" method="post">
            <div class="form-control">
                <input type="text" class="login-inp input" name="usrname" id="usrname" placeholder="username" required>
                <input type="email" class="login-inp input" name="email" id="email" placeholder="email" required>
                <input type="password" class="login-inp input" name="pass" id="pass" placeholder="password" required>
                <input type="password" class="login-inp input" name="conf_pass" id="conf_pass" placeholder="confirm password" required>
                <button type="submit">Sign-up</button>
            </div>
            <p>Already have an account? <a href="/login/">Log-in</a></p>
        </form>

        </div>
      </section>





      <div class="section-wrapper">

        <!-- 
          - #ABOUT
        -->

        <!-- <section class="about" id="about">
          <div class="container">

            <figure class="about-banner">

              <img src="../assets/images/about-img.png" alt="M shape" class="about-img">

              <img src="../assets/images/character-1.png" alt="Game character" class="character character-1">

              <img src="../assets/images/character-2.png" alt="Game character" class="character character-2">

              <img src="../assets/images/character-3.png" alt="Game character" class="character character-3">

            </figure>

            <div class="about-content">

              <p class="about-subtitle">Find team member</p>

              <h2 class="about-title">Experience just for gamers <strong>offer</strong> </h2>

              <p class="about-text">
                Nullam quis ante. Maecenas ullamcorper, dui et placerat feugiat, eros pede varius nisi, condimentum
                viverra felis nunc
                et lorem. In auctor lobortis lacus. Phasellus gravida semper nisi. Aliquam lobortis.
              </p>

              <p class="about-bottom-text">
                <ion-icon name="arrow-forward-circle-outline"></ion-icon>

                <span>Will sharpen your brain and focus</span>
              </p>

            </div>

          </div>
        </section> -->





        <!-- 
          - #TOURNAMENT
        -->

        <!-- <section class="tournament" id="tournament">
          <div class="container">

            <div class="tournament-content">

              <p class="tournament-subtitle">Check out our next</p>

              <h2 class="h3 tournament-title">Gaming tournaments !</h2>

              <p class="tournament-text">
                Lpsum dolor sit amet, consectetur adipiscing elit, sed labore et dolore magna aliqua.
              </p>

              <button class="btn btn-primary">Join with us</button>

            </div>

            <div class="tournament-prize">

              <h2 class="h3 tournament-prize-title">Prize pool</h2>

              <data value="80000">$80000</data>

              <figure>
                <img src="../assets/images/prize-img.png" alt="Prize image">
              </figure>

            </div>

            <div class="tournament-winners">

              <h2 class="h3 tournament-winners-title">Last winners</h2>

              <ul class="tournament-winners-list">

                <li>
                  <div class="winner-card">

                    <figure class="card-banner">
                      <img src="../assets/images/winner-img-1.png" alt="Winner image">
                    </figure>

                    <h3 class="h5 card-title">1st place</h3>

                  </div>
                </li>

                <li>
                  <div class="winner-card">

                    <figure class="card-banner">
                      <img src="../assets/images/winner-img-2.png" alt="Winner image">
                    </figure>

                    <h3 class="h5 card-title">2nd place</h3>

                  </div>
                </li>

              </ul>

            </div>

          </div>
        </section> -->





        <!-- 
          - #GALLERY
        -->

        <!-- <section class="gallery">
          <div class="container">

            <ul class="gallery-list has-scrollbar">

              <li>
                <figure class="gallery-item">
                  <img src="../assets/images/gallery-img-1.jpg" alt="Gallery image">
                </figure>
              </li>

              <li>
                <figure class="gallery-item">
                  <img src="../assets/images/gallery-img-2.jpg" alt="Gallery image">
                </figure>
              </li>

              <li>
                <figure class="gallery-item">
                  <img src="../assets/images/gallery-img-3.jpg" alt="Gallery image">
                </figure>
              </li>

              <li>
                <figure class="gallery-item">
                  <img src="../assets/images/gallery-img-4.jpg" alt="Gallery image">
                </figure>
              </li>

            </ul>

          </div>
        </section> -->





        <!-- 
          - #TEAM
        -->

        <!-- <section class="team" id="team">
          <div class="container">

            <h2 class="h2 section-title">Active Team Members</h2>

            <ul class="team-list">

              <li>
                <a href="#" class="team-member">
                  <figure>
                    <img src="../assets/images/team-member-1.png" alt="Team member image">
                  </figure>

                  <ion-icon name="link-outline"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="team-member">
                  <figure>
                    <img src="../assets/images/team-member-2.png" alt="Team member image">
                  </figure>

                  <ion-icon name="link-outline"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="team-member">
                  <figure>
                    <img src="../assets/images/team-member-3.png" alt="Team member image">
                  </figure>

                  <ion-icon name="link-outline"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="team-member">
                  <figure>
                    <img src="../assets/images/team-member-4.png" alt="Team member image">
                  </figure>

                  <ion-icon name="link-outline"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="team-member">
                  <figure>
                    <img src="../assets/images/team-member-6.png" alt="Team member image">
                  </figure>

                  <ion-icon name="link-outline"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="team-member">
                  <figure>
                    <img src="../assets/images/team-member-7.png" alt="Team member image">
                  </figure>

                  <ion-icon name="link-outline"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="team-member">
                  <figure>
                    <img src="../assets/images/team-member-8.png" alt="Team member image">
                  </figure>

                  <ion-icon name="link-outline"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="team-member">
                  <figure>
                    <img src="../assets/images/team-member-9.png" alt="Team member image">
                  </figure>

                  <ion-icon name="link-outline"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="team-member">
                  <figure>
                    <img src="../assets/images/team-member-10.png" alt="Team member image">
                  </figure>

                  <ion-icon name="link-outline"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="team-member">
                  <figure>
                    <img src="../assets/images/team-member-11.png" alt="Team member image">
                  </figure>

                  <ion-icon name="link-outline"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="team-member">
                  <figure>
                    <img src="../assets/images/team-member-12.png" alt="Team member image">
                  </figure>

                  <ion-icon name="link-outline"></ion-icon>
                </a>
              </li>

            </ul>

            <button class="btn btn-primary">view all members</button>

          </div>
        </section> -->





        <!-- 
          - #GEARS
        -->

        <!-- <section class="gears" id="gears">
          <div class="container">

            <h2 class="h2 section-title">check our gears</h2>

            <ul class="gears-list">

              <li>
                <div class="gears-card">

                  <div class="card-banner">

                    <a href="#">
                      <img src="../assets/images/gears-img-1.png" alt="Headphone">
                    </a>

                    <button class="share">
                      <ion-icon name="share-social"></ion-icon>
                    </button>

                    <div class="card-time-wrapper">
                      <ion-icon name="time-outline"></ion-icon>

                      <span>In 4 days</span>
                    </div>

                  </div>

                  <div class="card-content">

                    <div class="card-title-wrapper">

                      <h3 class="h3 card-title">Headphone</h3>

                      <p class="card-subtitle">e-sports</p>

                    </div>

                    <div class="card-prize">$18</div>

                  </div>

                  <div class="card-actions">

                    <button class="btn btn-primary">
                      <ion-icon name="add-outline"></ion-icon>

                      <span>Add to cart</span>
                    </button>

                    <button class="btn card-btn">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                  </div>

                </div>
              </li>

              <li>
                <div class="gears-card">

                  <div class="card-banner">

                    <a href="#">
                      <img src="../assets/images/gears-img-2.png" alt="Controller">
                    </a>

                    <button class="share">
                      <ion-icon name="share-social"></ion-icon>
                    </button>

                    <div class="card-time-wrapper">
                      <ion-icon name="time-outline"></ion-icon>

                      <span>In 4 days</span>
                    </div>

                  </div>

                  <div class="card-content">

                    <div class="card-title-wrapper">

                      <h3 class="h3 card-title">Controller</h3>

                      <p class="card-subtitle">e-sports</p>

                    </div>

                    <div class="card-prize">$29</div>

                  </div>

                  <div class="card-actions">

                    <button class="btn btn-primary">
                      <ion-icon name="add-outline"></ion-icon>

                      <span>Add to cart</span>
                    </button>

                    <button class="btn card-btn">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                  </div>

                </div>
              </li>

              <li>
                <div class="gears-card">

                  <div class="card-banner">

                    <a href="#">
                      <img src="../assets/images/gears-img-3.png" alt="Gaming mask">
                    </a>

                    <button class="share">
                      <ion-icon name="share-social"></ion-icon>
                    </button>

                    <div class="card-time-wrapper">
                      <ion-icon name="time-outline"></ion-icon>

                      <span>In 4 days</span>
                    </div>

                  </div>

                  <div class="card-content">

                    <div class="card-title-wrapper">

                      <h3 class="h3 card-title">Gaming mask</h3>

                      <p class="card-subtitle">e-sports</p>

                    </div>

                    <div class="card-prize">$45</div>

                  </div>

                  <div class="card-actions">

                    <button class="btn btn-primary">
                      <ion-icon name="add-outline"></ion-icon>

                      <span>Add to cart</span>
                    </button>

                    <button class="btn card-btn">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                  </div>

                </div>
              </li>

            </ul>

          </div>
        </section> -->





        <!-- 
          - #NEWSLETTER
        -->

        <!-- <section class="newsletter">
          <div class="container">

            <div class="newsletter-card">

              <div class="newsletter-content">
                <figure class="newsletter-img">
                  <img src="../assets/images/newsletter-img.png" alt="Newsletter image">
                </figure>

                <h2 class="h2 newsletter-title">Subscribe to our newsletter</h2>
              </div>

              <form action="" class="newsletter-form">
                <input type="email" name="email" required placeholder="Your Email Address" class="input-field">

                <button type="submit" class="btn btn-secondary">Subscribe</button>
              </form>

            </div>

          </div>
        </section> -->

      </div>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <?php
    include '../footer.php';

?>





  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="btn btn-primary go-top" data-go-top>
    <ion-icon name="chevron-up-outline"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="../assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>