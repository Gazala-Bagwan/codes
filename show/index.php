<?php
session_start();
 require('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
<link rel="stylesheet" href="style.css">
    <!--box Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
   <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


</head>
<body>
    <!--Navbar-->
    <header>
      <a href="#home" class="logo">
        <i class='bx bxs-movie'></i>ShowTime
        
    </a>
        
    <div class="bx bx-menu" id="menu-icon"></div> 
        <!--Menu-->
        <ul class="navbar">
            <li><a href="index.php" class="home-active">Home</a></li>
            <li class="dropdown">
              <a href="#home">Movies</a>
              <div class="dropdown-content bollywood-category">
                  <a href="#latest-movies" class="category-link"  data-section-id="action">Latest</a>
                  <a href="#coming-soon" class="category-link"  data-section-id="comedy">coming Soon</a>
              </div>
            </li>
          <li><a href="series.php">HollywoodMovies</a></li>
          <li><a href="anime.php">AnimeMovies</a></li>
         <li class="dropdown">
                 <li><a href="aboutus.html">About</a></li><li class="search-box">
                  <div class="search-box">
              <input type="text" id="searchInput" placeholder="Search for movies...">
              <i class="bx bx-search"></i> <!-- Magnifying glass icon -->
              <a href="signin.php" class="btn">Sign</a>
             <a href="logout.php" class="btn">Logout</a>
            </div>
            
      </li>
            
        </ul>
        
    </header>
    <!--home-->
    <section class="home-swiper" id="home">
      
        <div class="swiper-wrapper">
        <div class="swiper-slide container">
        
          <img src="./images/drishyaam 2.jpg" alt="">
          <video controls class="video-player" style="display: none;">
                    <source src="./YOU.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
          <div class="home-text">
            <span>Drishiyam </span>
            <h1>Drishiyam 2 <br></h1>
            <p>Duration: 120mins  UA:16+  <i class="bx bxs-star"></i>9.5</p> 
            <a href="./Drishyam 2_ OFFICIAL TRAILER _ Ajay Devgn Akshaye Khanna Tabu Shriya Saran Abhishek Pathak Bhushan K.mp4" class="btn" id="watch-now-btn">Watch Now</a>
            <a href="./YOU.mp4" download class="btn">Download</a>

            <a href="" class="play">
            <i class='bx bx-play'></i>
            </a>
          </div>
        </div>
        <div class="swiper-slide container">
          <img src="./images/dr.strange.jpg" alt="">
          <video controls class="video-player" style="display:none;">
                    <source src="./drstrange in.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
          <div class="home-text">
            <span>Marvel Universe</span>
            <h1>Doctor Strange: <br>In the madness of multiverse</h1>
            <p>Duration: 120mins  UA:16+  <i class="bx bxs-star"></i>9.5</p> 
            <a href="./drstrange in.mp4" class="btn" id="watch-now-btn">Watch Now</a>
            <a href="./drstrange in.mp4" download class="btn">Download</a>
            <a href="" class="play">
              <i class='bx bx-play'></i>
              </a>
          </div>
        </div>
      
      <div class="swiper-slide container">
          <img src="./anime img/violet.jpg" alt="">
          <video controls class="video-player" style="display: none;">
                    <source src="./YOU.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
          <div class="home-text">
            <span>violet evergarden</span>
            <h1>violet</h1>
            <p>Duration: 120mins  UA:16+  <i class="bx bxs-star"></i>9.5</p> 
            <a href="./Violet Evergarden_ the Movie _ Official Trailer _ Netflix Anime.mp4" class="btn" id="watch-now-btn">Watch Now</a>
            <a href="./YOU.mp4" download class="btn">Download</a>
            <a href="" class="play">
              <i class='bx bx-play'></i>
            </a>
          </div>
        </div>
        <div class="swiper-slide container">
          <img src="./images/spider-man-no-way-home.jpg" alt="">
          <video controls class="video-player" style="display: none;">
                    <source src="./YOU.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
          <div class="home-text">
            <span>Marvel universe</span>
            <h1>Spider-ma<br>No way home</h1>
            <p>Duration: 120mins  UA:16+  <i class="bx bxs-star"></i>9.5</p> 
            <a href="./YOU.mp4" class="btn" id="watch-now-btn">Watch Now</a>
            <a href="./YOU.mp4" download class="btn">Download</a>
            <a href="" class="play">
              <i class='bx bx-play'></i>
            </a>
          </div>
      </div>
      </div>
      <div class="play-btn-container">
        <div class="play-btn">
          <a href="#">
            <i class="fas-fa-play"></i>
          </a>
        </div>
        </div>
     
      
      <div class="swiper-pagination"></div>

      

    </section>
    <!--Movies-->
    <div class="movies" id="latest-movies">
      <h2 class="heading">Latest Movies</h2>
      <!--Movies container-->
      <div class="movies-container">
        <!--box1-->
        <div class="box" data-genre="action"> 
          <div class="box-img">
            <img src="./images/thursday.jpg" alt="">
            </div>
          <h3>Thursday</h3>
          <span>120 min | psychological</span>
          <a href="download.php" class="download-link">Watch</a>
        </div>
            <!--a href="./YOU.mp4" download class="btn">Download</a-->
        
      
         <!--box2-->
         <div class="box">
          <div class="box-img">
            <img src="./images/rrr.jpg" alt="">
          </div>
          <h3>RRR</h3>
          <span>120 min | Action</span>
        </div>
         <!--box3-->
         <div class="box">
          <div class="box-img">
            <img src="./images/unchai.jpg" alt="">
          </div>
          <h3>Unchai</h3>
          <span>120 min | slice of life</span>
        </div>
         <!--box4-->
         <div class="box">
          <div class="box-img">
            <img src="./images/brahamshastra.jpg" alt="">
          </div>
          <h3>brahamshastra</h3>
          <span>120 min | Action</span>
        </div>
         <!--box5-->
         <div class="box">
          <div class="box-img">
            <img src="./images/lal singh chaddah.jpg" alt="">
          </div>
          <h3>Lal Singh chaddah</h3>
          <span>120 min | Action</span>
        </div>
         <!--box6-->
         <div class="box">
          <div class="box-img">
            <img src="./images/pthan.jpg" alt="">
          </div>
          <h3>Pathan</h3>
          <span>120 min | Action</span>
        </div>
         <!--box7-->
         <div class="box">
          <div class="box-img">
            <img src="./images/jawan.jpg" alt="">
          </div>
          <h3>Jawan</h3>
          <span>120 min | Action</span>
        </div>
         <!--box8-->
         <div class="box">
          <div class="box-img">
            <img src="./images/pink.jpg" alt="">
          </div>
          <h3>Pingk</h3>
          <span>120 min | Thriller</span>
        </div>
         <!--box9-->
         <div class="box">
          <div class="box-img">
            <img src="./images/badla.jpg" alt="">
          </div>
          <h3>Badla</h3>
          <span>120 min | Mystery</span>
        </div>
         <!--box10-->
         <div class="box">
          <div class="box-img">
            <img src="./images/drishyam.jpg" alt="">
          </div>
          <h3>Drishiyam</h3>
          <span>120 min | Thriller</span>
        </div>
      </div>
    
    <!--coming-->
    <section class="Coming"id="coming-soon">
      <h2 class="heading">Coming Soon</h2>
      <!--  coming container  -->
      <div class="coming-container swiper">
        <div class="swiper-wrapper">
          <!--box1-->
        <div class="swiper-slide box">
        <div class="box-img">
        <img src="./images/Emergency_.jpg"alt="">
        </div>
        <h3>Emergency</h3>
      </div>
      
          <!--box2-->
        <div class="swiper-slide box">
        <div class="box-img">
        <img src="./images/Housefull-5_1688473363.jpg"alt="">
        </div>
        <h3>Housefull-5</h3>
      </div>
    
          <!--box3-->
        <div class="swiper-slide box">
        <div class="box-img">
        <img src="./images/Gauraiya-Live-poster_.jpg"alt="">
        </div>
        <h3>Gauriya</h3>
      </div>
      
          <!--box4-->
        <div class="swiper-slide box">
        <div class="box-img">
        <img src="./images/Maidaan.jpg"alt="">
        </div>
        <h3>Maidan</h3>
      </div>
     
          <!--box5-->
        <div class="swiper-slide box">
        <div class="box-img">
        <img src="./images/Bade-Miyan-Chote-Miyan_.jpg"alt="">
        </div>
        <h3>Bade-Miyan-Chote-Miyan</h3>
      </div>
      
          <!--box6-->
        <div class="swiper-slide box">
        <div class="box-img">
        <img src="./images/attack.jpg"alt="">
        </div>
        <h3>attack</h3>
      </div>
      </div>
    </div>
    </section>
    <!--footer-->
    <section class="footer">
      <a href="" class="logo">
        <i class="bx bxs-movie"></i>GPTv

      </a>
      <div class="social">
        <a href=""><i class='bx bxl-youtube'></i></a>
        <a href=""><i class='bx bxl-facebook'></i></a>
        <a href=""><i class='bx bxl-twitter'></i></a>
        <a href=""><i class='bx bxl-instagram'></i></a>
      </div>
    </section>
    <div class="copyright">
      <p>&#169; ShowTime All right reserved</p>
    </div>

    <?php
    if (isset($_SESSION['logged_in'])) {
      echo "<h1> Welcome to this website- $_SESSION[username]</h1>";
    }
    ?>
   <!-- Swiper JS -->
   
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

 <!--Link to custom Js-->
 <script src="main.js"></script>
    
</body>
</html>