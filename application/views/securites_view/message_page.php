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
                                    <h1 class="page-header">User Security</h1>
                                </div>
                                <!-- /.col-lg-12 -->
                            </div>
                            <!-- /.row -->
                            <div class="row">
                                <div class="col-lg-6">

                                    <div class="well center-block" style="max-width:400px">
                                        <?= $msg ?>
                                        <a href="<?php 
                                        $userbean = $_SESSION['userbean'];
                                        echo site_url('Securities_Controller/listUserSecurities/'.$userbean->userid);?>" btn btn-primary  btn-lg btn-block>View Securities</a>
                                    </div>

                                </div>
                                <div class="col-lg-6">

                                </div>
                            </div>



                            <!-- list sold securities 
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3>Sold Security List </h3>
                                    <table class="table table-striped table-bordered table-hover" id="dataTables">
                                        <thead>
                                            <tr>
                                                <th>Effect Date</th>
                                                <th>Company</th>
                                                <th>CDS Acc</th>
                                                <th>qty</th>
                                                <th>Amount</th>
                                                <th>Total</th>
                                                <th>TAX</th>
                                                <th>Net Amount</th>
                                                <th>Date Time</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Effect Date</td>
                                                <td>Company</td>
                                                <td>CDS Acc</td>
                                                <td>qty</td>
                                                <td>Amount</td>
                                                <td>Total</td>
                                                <td>TAX</td>
                                                <td>Net Amount</td>
                                                <td>Date Time</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                             /.container-fluid -->
                        </div>
                        <!-- /#page-wrapper -->

                    </div>
                    <!-- /#wrapper -->

                    <?php $this->load->view('basejs'); ?>
                    </body>

                    </html>
