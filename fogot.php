<?php include 'components/nav.php' ?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container login-container animate__animated animate__fadeInUp">
            <div class="row ">
                <div class="login-form-1">
                    <h3>Reset Your Password</h3>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="User ID *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Email Address *" value="" />
                            <div class="p-0 m-0" align="right" >
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Your Password *" value="" />
                        </div>
                         <div class="form-group">
                            <input type="password" class="form-control" placeholder="Confirm Password *" value="" />
                        </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Reset" />
                        </div>
                        <div class="form-group">
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

        </style>