<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>| simpel IF </title>
    <link rel="shortcut icon" href="{{ URL::to('../resources/assets/gentelella/images/header2.PNG') }}">

    <!-- Bootstrap core CSS -->

    <link href="../resources/assets/gentelella/css/bootstrap.min.css" rel="stylesheet">

    <link href="../resources/assets/gentelella/fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="../resources/assets/gentelella/css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="../resources/assets/gentelella/css/custom.css" rel="stylesheet">
    <link href="../resources/assets/gentelella/css/icheck/flat/green.css" rel="stylesheet">


    <script src="../resources/assets/gentelella/js/jquery.min.js"></script>

    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body style="background:#F7F7F7;">
    
    <div class="">
        <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a>

        <div id="wrapper">
            <div id="login" class="animate form">
                <section class="login_content">
                    <form method="POST" >
                        <h1>Login simpel IF</h1>
                        <div>
                            <input type="text" class="form-control" placeholder="Username" name='username'/>
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Password" name='password'/>
                        </div>
                        <div>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button class="btn btn-default submit">Login</button>
                            <a class="reset_pass" href="#">Lupa password</a>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">

                            <p class="change_link">New to site?
                                <a href="#toregister" class="to_register"> Create Account </a>
                            </p>
                            <div class="clearfix"></div>
                            <br />
                            <div>
                                <h1><i class="fa fa-paw" style="font-size: 26px;"></i> </h1>

                                <p>©2015 - Gentelella Alela!</p>
                            </div>
                        </div>
                    </form>
                    <!-- form -->
                </section>
                <!-- content -->
            </div>
            <div id="register" class="animate form">
                <section class="login_content">
                    <form>
                        <h1>Create Account</h1>
                        <div>
                            <input type="text" class="form-control" placeholder="Username" required="" />
                        </div>
                        <div>
                            <input type="email" class="form-control" placeholder="Email" required="" />
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Password" required="" />
                        </div>
                        <div>
                            <a class="btn btn-default submit" href="index.html">Submit</a>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">

                            <p class="change_link">Already a member ?
                                <a href="#tologin" class="to_register"> Log in </a>
                            </p>
                            <div class="clearfix"></div>
                            <br />
                            <div>
                                <h1><i class="fa fa-paw" style="font-size: 26px;"></i> </h1>

                                <p>©2015 - Gentelella Alela!</p>
                            </div>
                        </div>
                    </form>
                    <!-- form -->
                </section>
                <!-- content -->
            </div>
        </div>
    </div>

</body>

</html>