<!DOCTYPE html>
<html lang="en">

<head>
    <title>ĐĂNG NHẬP</title>
    <!--CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Custrom boostrap script  ... -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- Scripts -->
</head>

<body>
    <div class="login__body">
        <div class="container-login">
            <div class="wrap-login">
                <form action="" class="login__form">
                    <span class="login__title"> ĐĂNG NHẬP</span>
                    <div class="wrap-input validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input" type="text" name="email" placeholder="Email">
                        <span class="focus-input"></span>
                        <span class="symbol-input">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input validate-input" data-validate = "Password is required">
                        <input class="input" type="password" name="pass" placeholder="Password">
                        <span class="focus-input"></span>
                        <span class="symbol-input">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    
                    <div class="container-login-form-btn">
                        <button class="login-form-btn">
                            Đăng nhập
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>






    <!--=========================== lINK jAVASCRIPT FIRLES =====================================-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</body>

</html>