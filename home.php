<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Software Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <nav class = "navbar navbar-expand-sm navbar-light" style="background-color: #556B2F;">
        <!--Navigation Bar reference !! Adrian Twarog Navbar bootstrap 5-->
        <!--Navigation bar-->
        <div class="container-fluid p-2">
            <div class = "row w-100">
                <div class="col">
                    <a href="index.html" class="navbar-brand mb-0 h1">
                    <!--Navigation bar image-->
                    <img class "d-inline-block align-top" 
                    src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" 
                    width="60" height = "60" /> 
                    Navigation bar</a>
                </div>
                <div class="col-auto d-flex align-items-center p-3">
                    <div 
                    class="collapse navbar-collapse"
                    id="navbarNav">
                    <ul class ="navbar-nav">
                         <li class="nav-item active me-auto">
                             <a href = "file_upload.html" class="nav-link">
                                Create a post
                            </a>
                        </li>
                    </ul>
                </div>
                </div>
                
                
            </div>
        <!-- Creates sidebar menu when page shrinks-->
            <button
                type = "button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                class="navbar-toggler"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class ="navbar-toggler-icon"></span>
            </button>
        </div>
        </nav>
<nav class = "navbar navbar-expand-sm navbar-light p-2" style="background:linear-gradient(180deg, #556B2F 0%, #6B8E23 100%)">       
     <!--Body part buttons -->
            <div 
                class="collapse navbar-collapse"
                id="navbarNav">
                <ul class ="navbar-nav">
                     <li class="nav-item active">
                         <a href = "#" class="nav-link">
                            Placeholder 1
                        </a>
                    </li>
                </ul>
            </div>
            <div 
                class="collapse navbar-collapse"
                 id="navbarNav">
                <ul class ="navbar-nav">
                    <li class="nav-item active">
                        <a href = "#" class="nav-link">
                             Placeholder 2
                        </a>
                    </li>
                </ul>
            </div>
            <div 
                class="collapse navbar-collapse"
                id="navbarNav">
                <ul class ="navbar-nav">
                    <li class="nav-item active">
                     <a href = "#" class="nav-link">
                        Placeholder 3
                    </a>
                    </li>
                </ul>
            </div>
            <div 
                class="collapse navbar-collapse"
                 id="navbarNav">
                 <ul class ="navbar-nav">
                    <li class="nav-item active">
                        <a href = "#" class="nav-link">
                         Placeholder 4
                    </a>
                    </li>
                </ul>
            </div>
            <div 
                class="collapse navbar-collapse"
                 id="navbarNav">
                 <ul class ="navbar-nav">
                    <li class="nav-item active">
                     <a href = "#" class="nav-link">
                         Placeholder 5
                    </a>
                    </li>
                </ul>
            </div>
            <div 
                class="collapse navbar-collapse"
                id="navbarNav">
                <ul class ="navbar-nav">
                    <li class="nav-item dropdown">
                         <a href = "#" class="nav-link dropdown-toggle"
                        id="mostPopularPostsDropdown" role = "button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Most Popular Posts
                        </a>
                        <ul class = "dropdown-menu"
                         aria-labelledby="mostPopularPostsDropdown">
                            <li><a href = "#" class = "dropdown-item"> Most Popular 1</a></li>
                            <li><a href = "#" class = "dropdown-item"> Most Popular 2</a></li>
                            <li><a href = "#" class = "dropdown-item"> Most Popular 3</a></li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        </nav>
       
        

<!-- Main body -->

<!--Preamble-->
<div class="container-fluid p-3">
    <div class = "row align-items-center">
        <div class = "col-2">
            <img src= "https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" height = "150" width="150" alt="Your image">
        </div>
        <div class = "col-10">
            <h2>
                Spread your expertise
            </h2>
            <p>Lorem sit amet consectetuer adipose elit eins orem ipsum sit amet consectetuer adipose elit eins Quos sunt ipsa null copium niet od neium jdaiojwdajdlajd cnkjankjnkjawnkjnakjdnkjwdnkajwn dnawmndwad nicwada oppo cmkalwm yii cmama p nckanwkan lolwwa cn apowdakc acjwi orem ipsum sit amet consectetuer adipose elit eins Quos sunt ipsa null copium niet od neium jdaiojwdajdlajd cnkjankjnkjawnkjnakjdnkjwdnkajwn dnawmndwad nicwada oppo cmkalwm yii cmama p nckanwkan lolwwa cn apowdakc acjwi orem ipsum sit amet consectetuer adipose elit eins Quos sunt ipsa null copium niet od neium jdaiojwdajdlajd cnkjankjnkjawnkjnakjdnkjwdnkajwn dnawmndwad nicwada oppo cmkalwm yii cmama p nckanwkan lolwwa cn apowdakc acjwi orem ipsum sit amet consectetuer adipose elit eins Quos sunt ipsa null copium niet od neium jdaiojwdajdlajd</p>
        </div>
    </div>
</div>

<!--Latest Post-->
<div class = "container-fluid text-white p-3 border - 5" style = "background-color: grey">
    <div class ="row">
        <div class="col text-center">

            <h3>Latest Posts</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <img class="rounded mx-auto d-block" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" width="150" height="150">
        </div>
        <div class="col">
            <img class="rounded mx-auto d-block" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" width="150" height="150">
        </div>
        <div class="col">
            <img class="rounded mx-auto d-block" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" width="150" height="150">
        </div>
    </div>
</div>




<!--Main Body End-->



<footer>
    <!--Picture and About Us section--> <!--Code below adapted from: -->
    <div class="container-fluid text-white p-3" style="sans-serif;background: olivedrab; background:linear-gradient(360deg, #556B2F 0%, #6B8E23 100%);">
        <div class="row align-items-center">
          <div class="col-2">
            <img class="d-inline-block" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" width="150" height="150">
          </div>
          <div class="col-10">
            <h3 class="text-center fw-bold">About us</h3>
            <p class="text-center">Lorem ipsum sit amet consectetuer adipose elit eins Quos sunt ipsa null copium niet od neium jdaiojwdajdlajd cnkjankjnkjawnkjnakjdnkjwdnkajwn dnawmndwad nicwada oppo cmkalwm yii cmama p nckanwkan lolwwa cn apowdakc acjwi orem ipsum sit amet consectetuer adipose elit eins Quos sunt ipsa null copium niet od neium jdaiojwdajdlajd cnkjankjnkjawnkjnakjdnkjwdnkajwn dnawmndwad nicwada oppo cmkalwm yii cmama p nckanwkan lolwwa cn apowdakc acjwi orem ipsum sit amet consectetuer adipose elit eins Quos sunt ipsa null copium niet od neium jdaiojwdajdlajd cnkjankjnkjawnkjnakjdnkjwdnkajwn dnawmndwad nicwada oppo cmkalwm yii cmama p nckanwkan lolwwa cn apowdakc acjwi orem ipsum sit amet consectetuer adipose elit eins Quos sunt ipsa null copium niet od neium jdaiojwdajdlajd cnkjankjnkjawnkjnakjdnkjwdnkajwn dnawmndwad nicwada oppo cmkalwm yii cmama p nckanwkan lolwwa cn apowdakc acjwi </p>
            <center><button class="btn btn-block btn-outline-light">Contact Us</button></center>
          </div>
        </div>
        <hr>
        <div class="row justify-content-between text-center text-md-start">
          <div class="col-auto">
            <p>&copy; 2022 Michael Short</p>
          </div>
          <div class="col-auto">
            <ul class="list-unstyled">
              <li><a href="#" class="text-decoration-none text-white">Instagram</a></li>
              <li><a href="#" class="text-decoration-none text-white">Facebook</a></li>
              <li><a href="#" class="text-decoration-none text-white">Twitter</a></li>
            </ul>
          </div>
        </div>
      </div>
      
</footer>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  </body>
</html>