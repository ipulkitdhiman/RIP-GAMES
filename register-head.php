<html>  
<head>  
<title> SignUp Page</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">      
<link href="css\style.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="css/style.css" rel="stylesheet">
<style>
        h1{
                font-family: cursive; 
                font-weight: bold; 
                font-size: 50px;
                }
        label{
                font-family: cursive; 
                font-weight: bold; 
                font-size: 25px;
        }
        input{
                border-color: black;
                border-width: 2px;
                border-radius: 10px;
                font-size: 20px;
        }
        hr{
          margin-left: 25%;
        }
</style>
</head>  
<body align="center" style="background-color: lawngreen"> 
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
<br><br><br><br><br><br><br><br>
<h1> CREATE YOUR ACCOUNT</h1>  

<hr width="50%">

<br>




<form action="insert-head.php" method="POST">
  <label for="fname">First name:</label>
  <input style="margin-left: 10px;" type="text" id="n1" name="n1" placeholder="Enter your name"><br><br>
  <label for="lname">Email:</label>
  <input style="margin-left: 75px;" type="text" id="e1" name="e1" placeholder="Enter your Email"><br><br>
  <label for="lname">Password:</label>
  <input style="margin-left: 30px;" type="text" id="p1" name="p1" placeholder="Enter Password"><br><br>
  <label for="lname">Confirm Password:</label>
  <input style="margin-right: 77px;" type="text" id="p2" name="p2" placeholder="Confirm your Password"><br><br>
  <input type="submit" value="Submit" onclick="create_account()"/>
</form> 








<script type="text/javascript">  
function create_account(){  
var n=document.getElementById("n1").value;  
var e=document.getElementById("e1").value;  
var p=document.getElementById("p1").value;  
var cp=document.getElementById("p2").value;  
//Code for password validation  
        var letters = /^[A-Za-z]+$/;  
        var email_val = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;  

        
if(n==''||e==''||p==''||cp==''){  
alert("Enter each details correctly");  
}  
else if(!letters.test(n))  
        {  
            alert('Name is incorrect must contain alphabets only');  
        }  
else if (!email_val.test(e))  
        {  
            alert('Invalid email format please enter valid email id'); 
            window.location="register-head.php";

        }  
else if(p!=cp)  
{  
alert("Passwords not matching");  
}  
else if(document.getElementById("p1").value.length > 12)  
{  
alert("Password maximum length is 12");  
}  
else if(document.getElementById("p1").value.length < 6)  
{  
alert("Password minimum length is 6");  
}  
else{  
alert("Your account has been created successfully... Redirecting to RIP-GAMES.com");  
window.location="index.php";  
}  
}  
</script>  
<footr>
        <div class="footer" style="background-color:#0A1D37;">
            <div class="container">
                <div class="row">
                    
                    
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