
<!doctype html>
<html lang="en" >
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Signup with the official team heist of the HNGi6 Group.">
    <title>Log In | Team Heist</title>
    <meta name="author" content="Abdullah Oladipo(@lapalace), Benjamin Bala (@Benjee), Kenchi, Kadijat Okeowo, Tuns and other Team Heist contributors">
    <meta name="generator" content="Team_Heist_Login v6.1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    </head>
  <body> 
      <!--check back later-->
    <!-- Begin page content -->
    <div class="container-fluid">
        <div class="row"> <!--using grid for the image aside and form-->
            <div class="col-8 image-container"> <!--illustration-->
                <img src="https://res.cloudinary.com/dcoqt2wpo/image/upload/q_10/v1568587134/Group_22_reybvb.png" alt="student illustration" class="imgHeist">
            </div>
            <div class="col animated bounceInDown contain"> <!--form-->
                <div class="form-content">
                    <div class="heist-logo animated pulse delay-1s infinite">
                            <img src="https://res.cloudinary.com/benjee/image/upload/v1568672308/Heist_nhkhoh.png" alt="heist logo" width="100" height="100">
                        </div>
                        <div class="form-header">
                            <h1>Welcome Back</h1>
                            <p >Enter your login details</p>
                        </div>
                        <div class="heist-form">
                            <form action="login-user.php" method="POST" name="form" >
                                <input type="text" class="form-control" name="username" id="username" placeholder="Username" required aria-required="true">
                                <input type="password" name="password" id="password" class="form-control" placeholder="password">
                                <input type="checkbox" name="remember" id="remember" class= 'align-items-left'><span class= 'text-left'>Remember me</span><br>
                                <button type="submit" name="submit" id="submit" class="btn btn-outline-secondary btn-md buttonOption">Login</button>
                            </form>
                        </div><br>
                        <div class="form-footer">
                            <p>Not a member yet?. <a href="signup.html" class="loginHeist">Sign up</a></p>
                            <div class="line"><hr class="left"><span class="text-muted" > or</span><hr class="right"></div>
                            <div class="d-flex justify-content-center align-items-center">
                                <!-- <button type="button" class="btn btn-outline-secondary btn-md buttonOption">Sign Up with Google</button>
                                <button type="button" class="btn btn-outline-secondary btn-md buttonOption">Sign Up with Facebook</button> -->
                                <button type="button" class="btn btn-outline-secondary btn-md buttonOption py-1">
                                    <span>
                                      <img src="https://res.cloudinary.com/dcoqt2wpo/image/upload/v1568667394/WhatsApp_Image_2019-09-16_at_21.50.29_wmmg1d.jpg" 
                                      alt="Alternate_Signup" width="25" class="img-fluid py-0">
                                    </span>
                                      Sign in with Google
                            </button>
                            </div>
                        </div>
                </div>
            </div>

        </div>  
    </div>
    <script src="js/validationscript.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="/script.js"></script>
</body>
</html>
