<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Movies website</title>
    <link rel="stylesheet" href="style.css">
    
    <!--box Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
 

</head>
<body>
    <!--Navbar-->
    <header>
      <a href="#home" class="logo">
        <i class='bx bxs-movie' style='color: rgb(113, 10, 238);'></i><span style='color: rgb(25, 183, 165);'>ShowTime</span>

        
    </a>
        
    <div class="bx bx-menu" id="menu-icon"></div> 
        <!--Menu-->
        <ul class="navbar">
            <li><a href="#home" class="home-active">Home</a></li>
            <li class="dropdown">
              <a href="#home">BollywoodMovies</a>
              <div class="dropdown-content bollywood-category">
                  <a href="#latest-movies" class="category-link"  data-section-id="action">Latest</a>
                  <a href="#coming-soon" class="category-link"  data-section-id="comedy">coming Soon</a>
              </div>
            </li>
          <li><a href="series.html">HollywoodMovies</a></li>
          <li><a href="anime.html">AnimeMovies</a></li>
         <li class="dropdown">
          <a href="#">genres</a>
            <div class="dropdown-content genre-category">
                    <a href="#" onclick="filterMoviesByGenre('action')">Action</a>
                   <a href="#" onclick="filterMoviesByGenre('comedy')">Comedy</a>
                </div> </li>
                 <li><a href="aboutus.html">About</a></li><li class="search-box">
             <input type="text" placeholder="Search...">
               <button><i class='bx bx-search'></i></button>
      </li>
            
        </ul>
        <!--search-->
      
            <a href="signin.php" class="btn">Sign</a>
    </header>
<body>
    <!-- Video section -->
    <section class="video-container">
        <div class="video-wrapper">
            <video src="YOU.mp4" controls autoplay muted></video>
            <h2>Anime</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Amet vitae unde quam. Deleniti, veniam! Delectus ipsum nostrum aspernatur laboriosam, sed corrupti molestias iure fugiat earum explicabo fugit, libero cum debitis.</p>
        </div>
            <button class="btn">Download</button>
            <button class="btn">Watch Online</button>
            <h2 style="color: red; font-size: 24px; text-align: center;">view</h2>
            <div style="text-align: center;">
              <div style="text-align: center;">
                <img src="./anime img/anime-2.png" alt="Image 1" style="width: 200px; height: auto; margin: 0 10px;">
                <img src="./anime img/anime-2.png" alt="Image 2" style="width: 200px; height: auto; margin: 0 10px;">
            </div>
            
          </div>
          
            
              
        </div>
         </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

 <!--Link to custom Js-->
 <script src="main.js"></script>
</body>
</html>