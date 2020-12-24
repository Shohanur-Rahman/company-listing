<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lava Material - Web Application and Website Multipurpose Admin Panel Template</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--== FAV ICON ==-->
    <link rel="shortcut icon" href="images/fav.ico">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet">

    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="<?php use App\Classes\Config\Input;
    use App\Classes\Config\Validation;
    use App\functions;

    echo $ASSETS_URL; ?>css/font-awesome.min.css">

    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="<?php echo $ASSETS_URL; ?>css/style.css">
    <link rel="stylesheet" href="<?php echo $ASSETS_URL; ?>css/mob.css">
    <link rel="stylesheet" href="<?php echo $ASSETS_URL; ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo $ASSETS_URL; ?>css/materialize.css"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="<?php echo $ASSETS_URL;?>js/html5shiv.js"></script>
    <script src="<?php echo $ASSETS_URL;?>js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="blog-login">
    <div class="blog-login-in">

        <?php

        if (Input::exists()) {
            $validation = new Validation();
            $validate = $validation->check($_POST, array(
                'username' => array(
                    'required' => true,
                    'min' => 3,
                    'max' => 60,
                    'unique' => 'users'
                ),
                'email' => array(
                    'required' => true,
                    'min' => 8,
                    'max' => 90,
                    'unique' => 'users'
                ),
                'password' => array(
                    'required' => true,
                    'min' => 6
                )
            ));

            if ($validation->passed()) {
                echo "Passed";
            } else {
                print_r($validation->errors());
            }
        }
        ?>
        <form action="" method="post" autocomplete="off">

            <img src="<?php echo $ASSETS_URL; ?>images/logo.png" alt=""/>
            <div class="row">
                <div class="input-field col s12">
                    <input id="username" name="username" value="<?php echo functions\escape(Input::get('username'))?>" type="text" class="validate" autocomplete="off">
                    <label for="username">User Name</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input id="email" type="email" name="email" value="<?php echo functions\escape(Input::get('email'))?>" class="validate" autocomplete="off">
                    <label for="email">Email</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input id="password" type="password" name="password" value="<?php echo functions\escape(Input::get('password'))?>" class="validate" autocomplete="off">
                    <label for="password">Password</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <button type="submit" class="waves-effect waves-light btn-large btn-log-in col-md-12"
                            href="index.html">SignUp
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href="forgot.html" class="for-pass pull-right">Forgot Password?</a>
                    <a href="forgot.html" class="for-pass pull-left">Back to Login</a>
                </div>
            </div>
        </form>
    </div>
</div>

<!--======== SCRIPT FILES =========-->
<script src="<?php echo $ASSETS_URL; ?>js/jquery.min.js"></script>
<script src="<?php echo $ASSETS_URL; ?>js/bootstrap.min.js"></script>
<script src="<?php echo $ASSETS_URL; ?>js/materialize.min.js"></script>
<script src="<?php echo $ASSETS_URL; ?>js/custom.js"></script>
</body>


<!-- Mirrored from rn53themes.net/themes/demo/lava-admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Dec 2020 15:45:16 GMT -->
</html>