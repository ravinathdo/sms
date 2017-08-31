<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Login</title>
        <?php $this->load->view('basecss'); ?>

    </head>

    <body style="background-color:white">

        <div id="wrapper">

            <!-- Navigation -->
            <div>
                <?php //$this->load->view('main_header');?>
                <div>
                    <!--/Navigation-->

                    <!-- Page Content -->
                    <!--  <div id="page-wrapper"> -->
                    <div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h1 align = "center" class="page-header">Integrated Securities Portfolio Management System</h1>
                                </div>
                                <!-- /.col-lg-12 -->
                            </div>

                            <!-- /.row -->
                            <div class="row">

                                <div class="col-lg-4">
                                </div>


                                <div class="col-lg-4">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            User Registration Request
                                        </div>

                                        <?php
                                        if (isset($msg)) {
                                            echo $msg;
                                        };
                                        
                                        ?>        
                                        <div class="panel-body">
                                            <?php echo form_open('Registration_Controller/setRegistration/'); ?>
                                            <form class="" action="" method="post">
                                                <?php echo validation_errors(); ?>

                                                <div class="form-group">
                                                    <label>eMail Address</label>
                                                    <input name="email" type="text" class="form-control" />
                                                </div>

                                                <div class="form-group">
                                                    <label>First Name</label>
                                                    <input name="fname" type="text" class="form-control" /> 
                                                </div>

                                                <div class="form-group">
                                                    <label>Middle Name</label>
                                                    <input name="mname" type="text" class="form-control" /> 
                                                </div>

                                                <div class="form-group">
                                                    <label>Last Name</label>
                                                    <div class="">
                                                        <input name="lname" type="text" class="form-control" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Mobile</label>
                                                    <input name="mobile" type="text" class="form-control" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input  name="password" type="password" class="form-control" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Retype Password</label>
                                                    <input name="repassword" type="password" class="form-control" />
                                                </div>


                                                <p>
                                                    <button type="submit" class="btn btn-primary">Send Request</button>
                                                </p>

                                                <?php echo form_close(); ?>
                                        </div>



                                    </div>


                                    <div class="panel panel-default">

                                    </div>

                                </div>
                                <div class="col-lg-4">
                                    <h3> Already have an account </h3> 
                                     <a href="<?php echo site_url('Login_Controller/showLogin')?>" class="btn btn-primary"> Please Login</a>
                                </div>
                            </div>
                            <!-- /.container-fluid -->
                        </div>
                        <!-- /#page-wrapper -->

                    </div>
                    <!-- /#wrapper -->

                    <?php $this->load->view('basejs'); ?>
                    </body>

                    </html>
