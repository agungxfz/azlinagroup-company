<!DOCTYPE HTML>
<html>
    <head>
        <title>Login to Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="" />
        <link href="<?php echo base_url() ?>assets/lib/bootstrap/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
        <link href="<?php echo base_url() ?>assets/css/style-login.css" rel='stylesheet' type='text/css' />
        <link href="<?php echo base_url() ?>assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/google-font.css' rel='stylesheet" type='text/css'>
        <script src="<?php echo base_url() ?>assets/lib/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>assets/lib/bootstrap/js/bootstrap.min.js"></script>
        <style>
            /*
             * General styles
             */
            body, html {
                height: 100%;
                background-repeat: no-repeat;
                background-image: linear-gradient(rgb(104, 145, 162), rgb(208, 255, 248));
            }
            .card-container.card {
                max-width: 350px;
                padding: 40px 40px;
            }
            .btn {
                font-weight: 700;
                height: 36px;
                -moz-user-select: none;
                -webkit-user-select: none;
                user-select: none;
                cursor: default;
            }
            /*
             * Card component
             */
            .card {
                background-color: #F7F7F7;
                /* just in case there no content*/
                padding: 20px 25px 30px;
                margin: 0 auto 25px;
                margin-top: 50px;
                /* shadows and rounded borders */
                -moz-border-radius: 2px;
                -webkit-border-radius: 2px;
                border-radius: 2px;
                -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            }
            .profile-img-card {
                width: 96px;
                height: 96px;
                margin: 0 auto 10px;
                display: block;
                -moz-border-radius: 50%;
                -webkit-border-radius: 50%;
                border-radius: 50%;
            }
            /*
             * Form styles
             */
            .profile-name-card {
                font-size: 16px;
                font-weight: bold;
                text-align: center;
                margin: 10px 0 0;
                min-height: 1em;
            }
            .reauth-email {
                display: block;
                color: #404040;
                line-height: 2;
                margin-bottom: 10px;
                font-size: 14px;
                text-align: center;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
            }
            .form-signin #inputEmail,
            .form-signin #inputPassword {
                direction: ltr;
                height: 44px;
                font-size: 16px;
            }
            .form-signin input[type=email],
            .form-signin input[type=password],
            .form-signin input[type=text],
            .form-signin button {
                width: 100%;
                display: block;
                margin-bottom: 10px;
                z-index: 1;
                position: relative;
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
            }
            .form-signin .form-control:focus {
                border-color: rgb(104, 145, 162);
                outline: 0;
                -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
                box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
            }
            .btn.btn-signin {
                /*background-color: #4d90fe; */
                background-color: rgb(104, 145, 162);
                /* background-color: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));*/
                padding: 0px;
                font-weight: 700;
                font-size: 14px;
                height: 36px;
                -moz-border-radius: 3px;
                -webkit-border-radius: 3px;
                border-radius: 3px;
                border: none;
                -o-transition: all 0.218s;
                -moz-transition: all 0.218s;
                -webkit-transition: all 0.218s;
                transition: all 0.218s;
            }

            .btn.btn-signin:hover,
            .btn.btn-signin:active,
            .btn.btn-signin:focus {
                background-color: rgb(12, 97, 33);
            }
            .forgot-password {
                color: rgb(104, 145, 162);
            }
            .forgot-password:hover,
            .forgot-password:active,
            .forgot-password:focus{
                color: rgb(12, 97, 33);
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="card card-container">
                <h3 style="text-align: center;">Login Page</h3>
                <img id="profile-img" class="profile-img-card" src="<?php echo base_url() ?>assets/img/avatar_2x.png" />
                <div id="frame" class="hidden">
                    <div id="alert" role="alert">
                        <p style="text-align: center;">Username / Password Salah!</p>
                    </div>
                </div>
                <form class="form-signin" method="POST" name="login" action="<?php echo base_url() ?>index.php/auth/login" id="login">
                    <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                    <button class="btn btn-lg btn-primary btn-block btn-signin" id="btn-login" type="submit">Masuk</button>
                </form>
            </div>
        </div>
        <script>
            var flag = '<?php echo $flag; ?>';
            if (flag === 'salah') {
                $('#frame').removeClass('hidden');
                $('#alert').addClass('alert alert-danger');
            } else {
                $('#frame').addClass('hidden');
                $('#alert').removeClass('alert alert-danger');
            }
        </script>
    </body>
</html>
