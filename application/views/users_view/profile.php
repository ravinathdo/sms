<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SB Admin 2 - Bootstrap Admin Theme</title>
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
                                    <h1 class="page-header">Profile</h1>
                                </div>
                                <!-- /.col-lg-12 -->
                            </div>
                            <!-- /.row -->
                            <div class="row">

                                <div class="col-lg-6">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <p><b> Personal Information</b></P>
                                        </div>
                                        <div class="panel-body">
                                            <dl class="dl-horizontal text-left">
                                                <dt>First Name</dt>
                                                <dd>: <?= $profile->fname ?></dd>
                                                <dt>Last Name</dt>
                                                <dd>: <?= $profile->lname ?></dd>
                                                <dt>Middle Name</dt>
                                                <dd>: <?= $profile->mname ?></dd>
                                                <dt>Email</dt>
                                                <dd>: <?= $profile->email ?></dd>
                                                <dt>Mobile</dt>
                                                <dd>: <?= $profile->mobile ?></dd>
                                                <dt>Request Date</dt>
                                                <dd>: <?= $profile->reqdate ?></dd>
                                                <dt>Approved Date</dt>
                                                <dd>: <?= $profile->approvedate ?></dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">


                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <p><b> CDS Account Information</b></P>
                                        </div>
                                        <div class="panel-body">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Broker company</th>
                                                        <th>CDS Acc</th>
                                                        <th>opendate</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php
                                                    if ($cdsAccList != null)
                                                        foreach ($cdsAccList as $cds) {
                                                            ?>
                                                            <tr>
                                                                <td><a href=""><?= $cds->name ?></a></td>
                                                                <td><?= $cds->cdsaccno ?></td>
                                                                <td><?= $cds->opendate ?></td>
                                                            </tr>
    <?php } ?>
                                                </tbody>
                                            </table>


                                        </div>
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
