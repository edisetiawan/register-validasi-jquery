
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="#" type="image/png">

    <title>Registration Ruang Programmer</title>

    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="validation/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="validation/bootstrapValidator.css"/>
    <script type="text/javascript" src="validation/jquery.min.js"></script>
    <script type="text/javascript" src="validation/bootstrap.min.js"></script>
    <script type="text/javascript" src="validation/bootstrapValidator.js"></script>
    <style type="text/css">
        .has-feedback .form-control-feedback {
            position: absolute;
            top: 2px;
            right: 0;
            display: block;
            width: 34px;
            height: 34px;
            line-height: 34px;
            text-align: center;
        }
    </style>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-body">

<div class="container">

    <form class="form-signin" method="post" action="proses-register.php" id="defaultForm">
        <div class="form-signin-heading text-center">
            <!--  <h1 class="sign-title">Registration</h1> -->
        </div>


        <div class="login-wrap">
            <p>Enter your personal details below</p>
            <div class="form-group">
                <input type="text" name="username" autofocus="" placeholder="User Name" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="email" autofocus="" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="phone" autofocus="" placeholder="Mobile Phone" class="form-control">
            </div>
            <div class="form-group">
                <input type="password" name="password" autofocus="" placeholder="Password" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" value="Register" name="register" class="btn btn-lg btn-login btn-block">

            </div>

            <div class="registration">
                Already Registered.
                <a href="login.php" class="">
                    Login
                </a>
            </div>
            <div class="registration">
                Copyright © 2017 <h4><a href="http://www.ruangprogrammer.com">www.ruangprogrammer.com</a>
                </h4>
            </div>

        </div>

    </form>

</div>

<!-- Placed js at the end of the document so the pages load faster -->

<script type="text/javascript">
    $(document).ready(function () {
        $('#defaultForm').bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                username: {
                    message: 'The username is not valid',
                    validators: {
                        notEmpty: {
                            message: 'The password is required and can\'t be empty'
                        }
                    }
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: 'The email address is required and can\'t be empty'
                        },
                        emailAddress: {
                            message: 'The input is not a valid email address'
                        }
                    }
                },
                phone: {
                    message: 'The username is not valid',
                    validators: {
                        notEmpty: {
                            message: 'The password is required and can\'t be empty'
                        },
                        digits: {
                            message: 'Please enter only digits'
                        }
                    }
                },
                password: {
                    message: 'The username is not valid',
                    validators: {
                        notEmpty: {
                            message: 'The password is required and can\'t be empty'
                        },
                        stringLength: {
                            min: 6,
                            max: 30,
                            message: 'The password must be more than 6 characters '
                        },
                    }
                }
            }
        });
    });
</script>
</body>
</html>