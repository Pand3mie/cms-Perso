<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>Cms</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link rel="stylesheet" type="text/css" href="<?php echo css_url('bootstrap.min'); ?>">
        <!-- font Awesome -->
        <link rel="stylesheet" type="text/css" href="<?php echo css_url('font-awesome.min'); ?>">
        <!-- Theme style -->
        <link rel="stylesheet" type="text/css" href="<?php echo css_url('AdminLTE'); ?>">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg-black">

        <div class="form-box" id="login-box">
            <div class="header">Cms</div>
            <?php echo form_open('connexion/verifylogin'); ?>
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="NNI" name="nni">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Mot de passe" name="pwd_users">
                    </div>          
                    <div class="form-group">
                        <input type="checkbox" name="remember_me"/> Remember me
                    </div>
                </div>
                <div class="footer">                                                               
                    <button type="submit" class="btn bg-olive btn-block">Connexion</button>  
                    
                    <p><a href="#">I forgot my password</a></p>
                    
<<<<<<< HEAD
                    <?php echo url('Enregistrer un nouveau membre','register'); ?>
=======
                    <a href="register.html" class="text-center">Register a new membership</a>
>>>>>>> f844bcd0417579275ba32a7f4b1e26ff9495e4de
                </div>
            <?php echo form_close(); ?>
        </div>


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?php echo js_url('bootstrap.min'); ?>" type="text/javascript"></script> 
    </body>
</html>





      