<?php 
    include "../functions/connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In: Nepases Stuff</title>

    <!-- Favicon -->
    <link rel="icon" href="../img/logo.png">
    <!-- CSS -->
    <link rel="stylesheet" href="../css/custom/signUpIn.css">
    <!-- jQuery-2.2.4 js -->
    <script src="../js/jquery/jquery-2.2.4.min.js"></script>

</head>
<body>
    <!-- Content Starts Here -->
    <div id="superMain">
        <div class="form-wrapper">
            <div class="regHeader text-center">
                <h4>Login to your account</h4>
            </div>
            <form class="row g-3" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="col-md-12">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail" required>
                </div>
                <div class="col-md-12">
                    <label for="inputPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" id="inputPassword" required>
                </div>
                <div class="col-12 reg-frgt-pswd">
                    <u><b><a href="#">Forgot Password</a></b></u>
                </div>
                <div class="col-12 text-center" style="margin-top: 34px;">
                    <button type="submit" class="nav-list-item-btn disable-element" id="submitBtn">Sign In</button>
                </div>
            </form>
            <div class="regFooter">
                <hr style="margin: -8px 0 0 0;">
                <div class="row mb-3 mt-1">
                    <div class="col-5 text-center">
                        <a href="../index.php" title="Go to homepage">Home</a>
                    </div>
                    <div class="col-2"><b style="color: #888; padding: 0;">/</b></div>
                    <div class="col-5 text-center">
                        <a href="../signUpIn/signUp.php" title="Create an account">SignUp</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        
        $(document).ready(()=>{
            
            var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
            var elem = $("#submitBtn");
            $('#inputEmail').on('keyup', ()=> {
                if(pattern.test($('#inputEmail').val())){
                    elem.removeClass("disable-element");
                } else {
                    elem.addClass("disable-element");
                }
            });

            $('#inputPassword').on('keyup', ()=> {
                if($('#inputPassword').val().length>0){
                    elem.removeClass("disable-element");
                } else {
                    elem.addClass("disable-element");
                }
            });

        });

    </script>
</body>
</html>