    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.min.css" rel="stylesheet">
<div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" >
            <div class="auth-box">
                <div id="loginform">
                    <div class="logo">
                        <!-- <span class="db"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/logo-icon.png" alt="logo" /></span> -->
                        <h3 class="font-medium mb-3">Delivery</h3>
                    </div>
                    <!-- Form -->
                    <div class="row">
                        <div class="col-12">
                            <form class="form-horizontal mt-3" id="login-form" action="<?= CController::createUrl('site/login') ?>" method="post">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" placeholder="Usuario" aria-label="Usuario" aria-describedby="basic-addon1" name="LoginForm[username]" id="LoginForm_username">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon2"><i class="ti-pencil"></i></span>
                                    </div>
                                    <input type="password" class="form-control form-control-lg" placeholder=" Contraseña" aria-label="Password" aria-describedby="basic-addon1" name="LoginForm[password]" id="LoginForm_password">
                                </div>
                                <div class="form-group row">
                                    
                                </div>
                                <div class="form-group text-center">
                                    <div class="col-xs-12 pb-3">
                                        <input type="button" class="btn btn-block btn-lg btn-info"
                                         id="iniciarSesion" name="iniciarSesion" value="Iniciar Sesión">
                                    </div>
                                </div>
                                <div class="row">
                                    
                                </div>
                                <div class="form-group mb-0 mt-2">
                                    <div class="col-sm-12 text-center">
                                        ¿No recuerdo mi contraseña?  
                                        <br><i class="fa fa-lock mr-1"></i><a href="authentication-register1.html" class="text-info ml-1"><b>Recuperar</b></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="recoverform">
                    <div class="logo">
                        <span class="db"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/logo-icon.png" alt="logo" /></span>
                        <h5 class="font-medium mb-3">Recover Password</h5>
                        <span>Enter your Email and instructions will be sent to you!</span>
                    </div>
                    <div class="row mt-3">
                        <!-- Form -->
                        <form class="col-12" action="https://www.wrappixel.com/demos/admin-templates/xtreme-admin/html/light-sidebar/index.html">
                            <!-- email -->
                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control form-control-lg" type="email" required="" placeholder="Usuario">
                                </div>
                            </div>
                            <!-- pwd -->
                            <div class="row mt-3">
                                <div class="col-12">
                                    <button class="btn btn-block btn-lg btn-danger" type="submit" name="action">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script>
    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
    
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
    </script> 


<script>
    $( "#iniciarSesion" ).click(function() {
        var pass = $("#LoginForm_password").val();
        var usuario = $("#LoginForm_username").val();
       $( "#login-form" ).submit();
});

 $("#LoginForm_password").keypress(function(e) {
        var pass = $("#LoginForm_password").val();
        var usuario = $("#LoginForm_username").val();
        var code = (e.keyCode ? e.keyCode : e.which);
        if(code==13){
           $( "#login-form" ).submit();
        }
});

 $("#LoginForm_username").keypress(function(e) {
        var pass = $("#LoginForm_password").val();
        var usuario = $("#LoginForm_username").val();
        var code = (e.keyCode ? e.keyCode : e.which);
        if(code==13){
           $( "#login-form" ).submit();
        }
       
});


    </script>