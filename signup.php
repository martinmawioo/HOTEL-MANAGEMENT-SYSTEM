<?php include('header.php'); ?>
<?php include('admin/connect.php'); ?>
<body>
    <div id="background">
        <div id="page">
           <?php include ('nav_sidebar.php');?>
            <div id="content">
                <div id="header">
                  

                </div>
                <div id="body">

                    <h3>Moozikay Melo's</h3>
                    <div class="signup">
                        <a href="order.php" class="btn btn-info"><i class="icon-signin"></i>&nbsp;Login</a>
                    </div>
                    <hr>

                    <div class="row-fluid">
                        <div class="span12">

                            <div class="row-fluid">
                                <div class="span2">

                                </div>
                                <div class="span6">
                                    <?php
                                    if (isset($_POST['save'])) {

                                        $pass_error = '';
                                        $e_firstname = '';
                                        $e_lastname = '';
                                        $e_password = '';
                                        $e_rpassword = '';
                                        $e_address = '';
                                        $e_cn = '';

                                        $e = '';



                                        $password = $_POST['password'];
                                        $rpassword = $_POST['rpassword'];
                                        $firstname = $_POST['firstname'];
                                        $lastname = $_POST['lastname'];
                                        $eaddress = $_POST['eaddress'];
                                        $address = $_POST['address'];
                                        $cn = $_POST['cn'];

                                        $pattern = "/^([a-z0-9])(([-a-z0-9._])*([a-z0-9]))*\@([a-z0-9])(([a-z0-9-])*([a-z0-9]))+(\.([a-z0-9])([-a-z0-9_-])?([a-z0-9])+)+$/i";
                                        //Input Validations

                                        if (!preg_match($pattern, $eaddress)) {
                                            $e = "Invalid Email Address";
                                        }


                                        if ($firstname == "") {

                                            $e_firstname = 'FirstName is Required';
                                        }
                                        if ($lastname == "") {

                                            $e_lastname = 'LastName is Required';
                                        }
                                        if ($address == "") {

                                            $e_address = 'Address is Required';
                                        }

                                        if ($cn == "") {

                                            $e_cn = 'Contact Number is Required';
                                        }
                                        if ($password != $rpassword) {

                                            $pass_error = 'Password Does Not Match';
                                        } else {
                                            $pass_error = '';
                                        }
                                        if ($password == "") {

                                            $e_password = 'Password is Required';
                                        }
                                        if ($rpassword == "") {

                                            $e_rpassword = 'Re Type Password';
                                        }



                                        if ($firstname != "" && $password == $rpassword && $lastname != "" && $eaddress != "" && $cn != "" && $address != "" && preg_match($pattern,$eaddress) ) {
                                            mysql_query("insert into tb_member (Firstname,Lastname,Email,Password,Contact_Number,address) values
                                         ('$firstname','$lastname','$eaddress','$password','$cn','$address')") or die(mysql_error());
                                            ?>

                                            <script type="text/javascript">
                                                alert("You are Succesfully Register Please Login Your Account");
                                                window.location= "order.php";
                                            </script>


                                            <?php
                                        }
                                    }
                                    ?>

                                    <form class="form-horizontal" method="post" enctype="multipart/form-data">

                                        <div class="alert alert-info"><strong>Sign Up</strong></div>
                                        <div class="control-group">
                                            <label class="control-label" for="inputEmail">Email Address</label>
                                            <div class="controls">
                                                <input type="email" name="eaddress" id="inputEmail" placeholder="Email Address">
<?php if (isset($_POST['save'])) { ?>

                                                    <div class="wrongs"> <?php echo $e; ?></div>

<?php } ?>                                                  

                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="inputPassword">Password</label>
                                            <div class="controls">
                                                <input type="password" name="password" id="inputPassword" placeholder="Password">
<?php if (isset($_POST['save'])) { ?>

                                                    <div class="wrongs"> <?php echo $e_password; ?></div>

<?php } ?>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="inputPassword">Re-Type Password</label>
                                            <div class="controls">
                                                <input type="password" name="rpassword" id="inputPassword" placeholder="Re-Type Password">
                                                <!-- error -->
<?php if (isset($_POST['save'])) { ?>

                                                    <div class="wrongs">   <?php echo $e_rpassword; ?> </div>

                                                <?php } ?>

<?php if (isset($_POST['save'])) { ?>

                                                    <div class="wrongs"><?php echo $pass_error; ?></div>

<?php } ?>
                                                <!-- error -->
                                            </div>

                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="inputEmail">Firstname</label>
                                            <div class="controls">
                                                <input type="text" name="firstname" id="inputEmail" placeholder="Firstname">
<?php if (isset($_POST['save'])) { ?>

                                                    <div class="wrongs">   <?php echo $e_firstname; ?> </div>

<?php } ?>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="inputEmail">Lastname</label>
                                            <div class="controls">
                                                <input type="text" name="lastname" id="inputEmail" placeholder="Lastname">
<?php if (isset($_POST['save'])) { ?>

                                                    <div class="wrongs">   <?php echo $e_lastname; ?> </div>

<?php } ?>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="inputEmail">Address</label>
                                            <div class="controls">
                                                <input type="text" name="address" id="inputEmail" placeholder="Address">
<?php if (isset($_POST['save'])) { ?>

                                                    <div class="wrongs">   <?php echo $e_address; ?> </div>

<?php } ?>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="inputEmail">Contact Number</label>
                                            <div class="controls">
                                                <input type="text" name="cn" id="inputEmail" placeholder="Contact Number">
<?php if (isset($_POST['save'])) { ?>

                                                    <div class="wrongs">   <?php echo $e_cn; ?> </div>

<?php } ?>
                                            </div>
                                        </div>



                                        <div class="control-group">
                                            <div class="controls">

                                                <button type="submit" name="save" class="btn btn-success"><i class="icon-pencil"></i>&nbsp;Sign Up</button>
                                            </div>
                                        </div>
                                    </form>




                                </div>
                                <div class="span3">

                                </div>
                            </div>
                        </div>
                    </div>






                </div>
                <div id="footer">
<?php include('footer.php'); ?>
                </div>
            </div>
        </div>
    </div>
</body>



</html>