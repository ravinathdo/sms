<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SecuritiesLK</title>
        <?php $this->load->view('basecss'); ?>

    </head>

    <?php
    if ($this->session->userdata('userbean')) {
        $userbean = $this->session->userdata('userbean');
    } else {
        //if invalid session user get redirect to login
        header("Location:" . site_url('Login_Controller/logout'));
    }
    ?>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <div>
                <?php $this->load->view('main_header'); ?>
                <div>
                    <!--/Navigation-->

                    <!-- Page Content -->
                    <div id="page-wrapper">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="page-header">Change Password</h2>
                                </div>
                                <!-- /.col-lg-12 -->
                            </div>
                            <!-- /.row -->
                            <div class="row">



                                <div class="col-lg-6">

                                    <?php echo form_open('Login_Controller/changePassword') ?>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Current Password</label>
                                        <input required="" type="password" name="currentpass" class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">New Password</label>
                                        <input required="" type="password" name="newpass" class="form-control" id="exampleInputPassword1" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Retype Password</label>
                                        <input required="" type="password" name="retypepass" class="form-control" id="exampleInputPassword1" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1"></label>
                                        <button type="submit" class="btn btn-default">Change Password</button>
                                    </div>
                                    <?php echo form_close() ?>

                                    <?php
                                    if(isset($msg)){
                                        echo $msg;
                                    }
                                    ?>
                                </div>
                                <div class="col-lg-6">
                                    
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
