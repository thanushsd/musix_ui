<?php include 'components/nav.php' ?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container login-container animate__animated animate__fadeInUp">
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h3>USER login</h3>
                    <h5 >Before Purchasing Songs You Must LogIn First</h5>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Your Password *" value="" />
                            <div class="p-0 m-0" align="right" >
                        <a href="fogot.php" class="ForgetPwd">Forget Password?</a>
                        </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                        <div class="form-group">
                            <a href="register.php" class="ForgetPwd">Don't have an account? Register</a>
                        </div>

                        <hr>

                        <div class="col">
        <a href="#" class="fb btn w-100">
          <i class="fa fa-facebook"></i> Login with Facebook
        </a>
        <br>
        <br>
        <a href="#" class="twitter btn w-100">
          <i class="fa fa-twitter "></i> Login with Twitter
        </a>
        <br>
        <br>
        <a href="#" class="google btn w-100">
          <i class="fa fa-google "></i> Login with Google+
        </a>
        <br>
        <br>
      </div>
                    </form>
                </div>
                <div class="col-md-6 login-form-2">
                    <h3>artist login</h3>
                    <h5 >Before Upload Songs You Must LogIn First</h5>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Your Password *" value="" />
                            <div class="p-0 m-0" align="right" >
                        <a href="#" class="ForgetPwd">Forget Password?</a>
                        </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                        <div class="form-group">

                           <a href="register.php" class="ForgetPwd">Don't have an account? Register</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>   


        <?php include 'components/footer.php' ?>                         


        <style type="text/css">
          .login-container{
    margin-top: 5%;
    margin-bottom: 5%;
}
.login-form-1{
    padding: 5%;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-1 h3{
    text-align: center;
    color: #4d404d;
    text-transform: uppercase;
}

.login-form-1 h5{
    text-align: center;
    color: #4d404d;
    
}


.login-form-2{
    padding: 5%;
    background: #4d404d;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-2 h3{
    text-align: center;
    color: #fff;
    text-transform: uppercase;
}

.login-form-2 h5{
    text-align: center;
    color: #fff;
}
.login-container form{
    padding: 10%;
}
.btnSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    border: none;
    cursor: pointer;
}
.login-form-1 .btnSubmit{
    font-weight: 600;
    color: #fff;
    background-color: #4d404d;
}
.login-form-2 .btnSubmit{
    font-weight: 600;
    color: #4d404d;
    background-color: #fff;
}
.login-form-2 .ForgetPwd{
    color: #fff;
    font-weight: 600;
    text-decoration: none;
}
.login-form-1 .ForgetPwd{
    color: #4d404d;
    font-weight: 600;
    text-decoration: none;
}

/* add appropriate colors to fb, twitter and google buttons */
.fb {
  background-color: #3B5998;
  color: white;
}

.twitter {
  background-color: #55ACEE;
  color: white;
}

.google {
  background-color: #dd4b39;
  color: white;
}


        </style>