<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="css\style.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="css/style.css" rel="stylesheet">
    <title>Categories</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top d-flex ">
        <button class="navbar-toggler bg-light " type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand mx-5" href="index.php">RIP GAMES</a>
        <a class="navbar-brand" href="index.php"><img src="images\logo.png" height="100px" width="100px" alt="NO Image!"></a>
        
  
        <div class="collapse navbar-collapse d-flex justify-content-center"  id="navbarTogglerDemo03">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0 d-flex justify-content-end" >
            <li class="nav-link">
              <a class="nav-link" href="index.php">HOME</a>
            </li>
            <li class="nav-link mx-5">
              <a class="nav-link" href="videos.php">VIDEOS</a>
            </li>
            
            <li class="nav-link">
              <a class="nav-link" href="categories.php">CATEGORIES</a>
            </li>
  
            <li class="nav-link mx-5">
              <a class="nav-link" href="register-head.php">REGISTER</a>
            </li>
  
            
            
          </ul>
          
        </div>
        </nav>
<br><br><br><br><br><br>
<div class="container-fluid">
    <hr>
    <p class="h1">CATEGORIES</p>
    <hr>
  </div>
  <div class="card bg-dark text-white" style="width:30rem; margin-left: 32%;">
    <img src="images/arcade.jpg" class="card-img" alt="No Image">
    <div class="card-img-overlay">
        <a class="nav-link" href="#"><h5 class="card-title" style="font-size: 50px; margin-top: 38%; background-color: black;">ARCADE</h5></a>
    </div>
  </div>
  <br>
  <div class="card bg-dark text-white" style="width:30rem; margin-left: 32%;">
    <img src="images/gtaopen.jpg" class="card-img" alt="No Image">
    <div class="card-img-overlay">
        <a class="nav-link" href="#"><h5 class="card-title" style="font-size: 50px; margin-top: 38%; background-color: black;">OPEN WORLD</h5></a>
    </div>
  </div>
  <br>
  <div class="card bg-dark text-white" style="width:30rem; margin-left: 32%;">
    <img src="images/nfs.jpg" class="card-img" alt="No Image">
    <div class="card-img-overlay">
        <a class="nav-link" href="#"><h5 class="card-title" style="font-size: 50px; margin-top: 38%; background-color: black;">RACING</h5></a>
    </div>
  </div>
  <br>
  <div class="card bg-dark text-white" style="width:30rem; margin-left: 32%;">
    <img src="images/pubgns.jpg" class="card-img" alt="No Image">
    <div class="card-img-overlay">
        <a class="nav-link" href="#"><h5 class="card-title" style="font-size: 50px; margin-top: 38%; background-color: black;">BATTLE ROYALE</h5></a>
    </div>
  </div>

  <br>

  <footr>
        <div class="footer" style="background-color:#0A1D37;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 style="font-family: cursive;">Subscribe to get Updates</h2>
                        <br>
                    </div>
                    <div class="col-md-10 offset-md-1">
                        <form class="news" name="registration" action="insert.php" method="POST">
                            <input class="newslatter" placeholder="Enter Your Email" type="text" name="email">
                            <button class="submit" >Subscribe</button>
                            <?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
                        <div class="success-message" style="margin-bottom: 20px;font-size: 20px;color: green;"><?php echo $_SESSION['success_message']; ?></div>
                        <?php
                        unset($_SESSION['success_message']);
                    }
                    ?>
                        </form>
                        
                    </div>
                    
                    <div class="social-links mt-3 d-flex flex-row-reverse">
                      <div class="mx-5" style=" color: whitesmoke; text-align: justify; width: 70%;">
                        <p>RIP-GAMES and the RIP-GAMES logo are trademarks of RIP-GAMES in the India and/or other countries.
                          All other trademarks are the property of their respective owners.</p>
                      </div>
                      <a href="#" class="twitter mx-1"><i class="bx bxl-twitter"></i></a>
                      <a href="#" class="facebook mx-1"><i class="bx bxl-facebook"></i></a>
                      <a href="#" class="instagram mx-1"><i class="bx bxl-instagram"></i></a>
                      <a href="#" class="google-plus mx-1"><i class="bx bxl-skype"></i></a>
                      <a href="#" class="linkedin mx-1"><i class="bx bxl-linkedin"></i></a>
                    </div>
            <div class="copyright" style="background-color: #0A1D37;">
                <div class="container">
                    <p style="color: whitesmoke;">© 2021 All Rights Reserved. Made with LOVE by Pulkit Dhiman</p>
                </div>
            </div>
        </div>
    </footr>
</body>
</html>