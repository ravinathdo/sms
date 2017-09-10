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
            </div>
            <!--/Navigation-->

            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">My CDS Account List</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- /.panel -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <i class="fa fa-clock-o fa-fw"></i> My List of Stock Brokers
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">

                                    <div class="table-responsive dataTable_wrapper">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Brocker Company Name</th>
                                                    <th>CDS No</th>
                                                    <th>Date</th>
                                                    <th>Adviser Details</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if ($cdsAccList != FALSE) {
                                                    foreach ($cdsAccList as $rows) {
                                                        ?>
                                                        <tr>
                                                            <td><?= $rows->cdsaccid; ?></td>
                                                            <td><?= $rows->userid; ?></td>
                                                            <td><?= $rows->cdsaccno; ?></td>
                                                            <td><?= $rows->opendate; ?></td>
                                                            <td><?= $rows->adviserfname; ?> 
                                                                <?= $rows->adviserlname; ?>
                                                                <br>
                                                                <a href="#"><?= $rows->tel_mob; ?>[<?= $rows->email; ?>]</a>
                                                            </td>
                                                        </tr>

                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->

                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
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
