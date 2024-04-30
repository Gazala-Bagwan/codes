<!-- anime.html -->

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime - ShowTime</title>
    <link rel="stylesheet" href="style.css">

    <!--box Icons-->
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
   <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    
   
</head>
<body>
   
    <header>
        <!--Navbar-->
    
        <a href="#home" class="logo">
          <i class='bx bxs-movie' style='color: rgb(113, 10, 238);'></i><span style='color: rgb(25, 183, 165);'>ShowTime</span>

        </a>
        <div class="bx bx-menu" id="menu-icon"></div>
         <!--search-->
        
        <!--Menu-->
        <ul class="navbar">
            <li><a href="index.php" class="home-active">Home</a></li>
            <li class="dropdown">
            <li><a href="index.php">Movies</a></li>
            <li><a href="series.php">HollywoodMovies</a></li>
             <li><li class="dropdown"><a href="#">AnimeMovies</a>
             <div class="dropdown-content hollywood-category">
                  <a href="#anime" class="category-link"  data-section-id="action">Latest</a>
                  <a href="#popular" class="category-link"  data-section-id="action">Trending</a>
                  <a href="#Coming" class="category-link"  data-section-id="comedy">coming Soon</a>
              </div></li>
            <li><a href="aboutus.php">About</a></li>
           <li class="search-box">
          <input type="text" placeholder="Search...">
          <a href="signin.php" class="btn">Sign In</a>
      </li>
   </ul>
       
   </header>
    
   <!-- Anime Content -->
    <section class="anime" id="anime">
       
        <h2 class="heading">Latest Anime</h2>
        <div class="anime-container">
              <!--box1-->
              <div class="box" data-genre="action"> 
                <div class="box-img">
                  <img src="./anime img/i want to eat pancrease.jpg" alt="">
                  <video controls class="video-player" style="display: none;">
                    <source src="./I want to eat your pancreas (English Dub) l Part 1.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                  </div>
                <h3>I Want To Eat you'r pancrease</h3>
                <span>120 min | Pshychological</span>
                <a href="./I want to eat your pancreas (English Dub) l Part 1.mp4">Watch Now</a>
              </div>
              <!--box1-->
              <div class="box">
                <div class="box-img">
                  <img src="./anime img/asta.jpg" alt="">
                </div>
                <h3>Black Clover:Movie</h3>
                <span>120 min | Action</span>
              </div>
               <!--box3-->
        <div class="box">
            <div class="box-img">
              <img src="./anime img/bubble.jpg" alt="">
            </div>
            <h3>Bubble</h3>
            <span>120 min | supernatural</span>
          </div>
           <!--box4-->
        <div class="box">
            <div class="box-img">
              <img src="./anime img/weathering.jpg" alt="">
            </div>
            <h3>Weathering with you</h3>
            <span>120 min | Supernatural</span>
          </div>
           <!--box5-->
        <div class="box">
            <div class="box-img">
              <img src="./anime img/suzume.jpg" alt="">
            </div>
            <h3>Suzume no Tojimari</h3>
            <span>120 min | supernatural</span>
          </div>
           <!--box6-->
        <div class="box">
            <div class="box-img">
              <img src="./anime img/silentvoice.jpg" alt="">
            </div>
            <h3>Silent Voice</h3>
            <span>120 min | Slice of life</span>
          </div>
           <!--box7-->
        <div class="box">
            <div class="box-img">
              <img src="./anime img/violet.jpg" alt="">
            </div>
            <h3>Voilet Evergardent</h3>
            <span>120 min | slice of life</span>
          </div>
           <!--box8-->
        <div class="box">
            <div class="box-img">
              <img src="./anime img/anime-7.jpg" alt="">
            </div>
            <h3>sprited Away</h3>
            <span>120 min | supernatural</span>
          </div>
           <!--box9-->
        <div class="box">
            <div class="box-img">
              <img src="./anime img/you'r name.jpg" alt="">
            </div>
            <h3>You'r Name</h3>
            <span>120 min | Action</span>
          </div>
           <!--box10-->
        <div class="box">
            <div class="box-img">
              <img src="./anime img/whisker away.jpg" alt="">
            </div>
            <h3>Whisker Away</h3>
            <span>120 min | Supernatural</span>
          </div>
    
        </div>
    </div>
     <!--Most popular-->
     <section class="popular"id="popular">
        <h2 class="heading">Most popular</h2>
        <!--  coming container  -->
        <div class="popular-container swiper">
          <div class="swiper-wrapper">
            <!--box1-->
          <div class="swiper-slide box">
          <div class="box-img">
          <img src="./anime img/suzume.jpg"alt="">
          </div>
          <h3>Suzume no Tojimari</h3>
        </div>
        
            <!--box2-->
          <div class="swiper-slide box">
          <div class="box-img">
          <img src="./anime img/bubble.jpg"alt="">
          </div>
          <h3>bubble</h3>
        </div>
      
            <!--box3-->
          <div class="swiper-slide box">
          <div class="box-img">
          <img src="./anime img/anime-7.jpg"alt="">
          </div>
          <h3>sprited Away</h3>
        </div>
        
            <!--box4-->
          <div class="swiper-slide box">
          <div class="box-img">
          <img src="./anime img/you'r name.jpg"alt="">
          </div>
          <h3>Your Name</h3>
        </div>
       
            <!--box5-->
          <div class="swiper-slide box">
          <div class="box-img">
          <img src="./anime img/whisker away.jpg"alt="">
          </div>
          <h3>whisker Away</h3>
        </div> 
         <!--box6-->
         <div class="swiper-slide box">
          <div class="box-img">
          <img src="./anime img/silentvoice.jpg"alt="">
          </div>
          <h3>Silent Voice</h3>
        </div>         
        </div>
      </div>
      <section class="Coming"id="Coming">
        <h2 class="heading">Coming Soon</h2>
        <!--  coming container  -->
        <div class="coming-container swiper">
          <div class="swiper-wrapper">
            <!--box1-->
          <div class="swiper-slide box">
          <div class="box-img">
          <img src="./anime img/maboroshi.jpg"alt="">
          </div>
          <h3>maboroshi</h3>
        </div>
          <!--box2-->
          <div class="swiper-slide box">
            <div class="box-img">
            <img src="./anime img/demon4.jpg"alt="">
            </div>
            <h3>DemonSlayer</h3>
          </div>
            <!--box3-->
            <div class="swiper-slide box">
              <div class="box-img">
              <img src="./anime img/haikyu.jpg"alt="">
              </div>
              <h3>haikyu</h3>
            </div>
              <!--box4-->
          <div class="swiper-slide box">
            <div class="box-img">
            <img src="./anime img/Bochi the rock.jpg"alt="">
            </div>
            <h3>Bochi the Rock</h3>
          </div>
            <!--box5-->
            <div class="swiper-slide box">
              <div class="box-img">
              <img src="./anime img/detective-conan-1024x576.jpg"alt="">
              </div>
              <h3>detective-conan</h3>
            </div>
              <!--box6-->
          <div class="swiper-slide box">
            <div class="box-img">
            <img src="./anime img/cowboy.jpg"alt="">
            </div>
            <h3>CowBoy Beep</h3>
          </div>
      </section>
  

   
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="main.js"></script>
</body>
</html>
