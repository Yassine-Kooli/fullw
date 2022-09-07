<?php 
        $title = 'User Login';

        require_once 'includes/header.php';
        require_once 'db/conn.php';
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $username = strtolower(trim($_POST['username']));
            $password = $_POST['password'];
            $new_password = md5($password.$username);
            $result = $user->getUser($username,$new_password);
            
        if (!$result) {
            echo '<div class="alert alert-danger">Username or Password is incorrect! Please Try Again.</div>';
        }else {
            $_SESSION['username'] = $username;
            $_SESSION['userid'] = $id;
            header("Location: viewrecords.php");
        }
    }
  
?>
<!doctype html>
<html lang="en">
    <head>
        <title class="text-center"><?php echo $title ?> </title>
    </head>
    <body>
        <section>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center mb-5">
                        <h2 class="heading-section">Login</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-10">
                        <div class="wrap d-md-flex">
                            <div class="img" style="background-image: url(images/space.jpg);">
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Sign In</h3>
                                </div>
                                <div class="w-100">
                                    <p class="social-media d-flex justify-content-end">
                                        <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                                        <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
                            </div>
                            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" class="signin-form">
                            <div class="form-group mb-3">
                                <label class="label">Username</label>
                                <input  for="username" id ="username" name ="username" type="text" value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['username']; ?>" class="form-control" placeholder="Username" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="password">Password</label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" value="Login" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50 text-left">
                                    <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
									</div>
                                    <div class="w-50 text-md-right">
                                        <a href="#">Forgot Password</a></div>
                                    </div>
                                </form>
                                <p class="text-center">Not a member? <a href="index.php">Sign Up</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
	</section>



<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>

<br/>
<br/>
<br/>
<br/>
<?php include_once 'includes/footer.php'?>