<?php
require_once 'functions/db.php';

require_once 'header.php';
?>
    
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class=""></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form action="register.php" method="post" class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="Nama_Depan" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="First Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="Nama_Belakang" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="Email" autocomplete="on" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="Password" autocomplete="on" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password">
                                </div><br>
<!--         <a href="register.php" class="btn btn-primary btn-user btn-block">
 -->            
                                <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php if ($error != '') { ?>
  <div id="error">
   <?= $error; ?>
  </div>
<?php } ?>