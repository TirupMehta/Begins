<html>
    <head>
        
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
  <style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
}
/* all similar content styling codes */
section{
    padding: 100px 0;
}
body{
    background-image: url(im/chat2.jpg);
    background-size: 100%;
    background-repeat: no-repeat;
}
.max-width{
    max-width: 1300px;
    padding: 0 80px;
    margin: auto;
}
.home{
    display: flex;
    background: url("images/background1.jpg") ;
    height: 100vh;
    color: #fff;
    min-height: 500px;
    background-size: cover;
    background-attachment: fixed;
    font-family: 'Ubuntu', sans-serif;
}
.home .max-width{
  width: 100%;
  display: flex;
}
.home .max-width .row{
  margin-right: 0;
}
.home .home-content .text-4{
    font-size: 30px !important;
    text-decoration: none;
    color: white;
}
    .home .home-content .text-4 a:hover {
    background:cyan;
    color:black;
  
}
.home .home-content .text-2{
    font-size: 75px;
    font-weight: 600;
    margin-left: -3px;
}
.home .home-content .text-3{
    font-size: 40px;
    margin: 5px 0;
}
.home .home-content .text-3 span{
    color: red;
    font-weight: 500;
}

  </style>
    </head>
    <?php include_once "head.php"; ?>
    <body>
   
        <div class="main">
            <nav>
                <section class="home" id="home">
                    <div class="max-width">
                        <div class="home-content">
                        
                            <div class="text-2">Welcome</div>
                            <div class="text-3">To  <span class="typing"></span></div>
                            <div class="text-4" ><a href="login.php">Chat</a>
                        </div>
                    </div>
                </section>
            </nav>
          </div>
       
        
    </body>

    <script>

    var typed = new Typed(".typing", {
        strings: ["Mirchaye"],
        typeSpeed: 90,
        backSpeed: 60,
        loop: true
    });
    </script>
</html>