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
            </div>
            <!--/Navigation-->

            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">My Brokers Company List</h1>
                            <button onclick="printDiv('PRNT')"  class="btn btn-warning btn-xs">Print</button>
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

                                    <div class="table-responsive dataTable_wrapper"  id="PRNT">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Broker Company Name</th>
                                                    <th>CDS No</th>
                                                    <th>Address</th>
                                                    <th>Contact No</th>
                                                    <th>Fax</th>
                                                    <th>Email</th>
                                                    <th>Website</th>
                                                    <th>Contact Person</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if ($myBrokerList != FALSE) {
                                                    foreach ($myBrokerList as $rows) {
                                                        ?>
                                                        <tr>
                                                            <td><?= $rows->brokercomid; ?></td>
                                                            <td><?= $rows->name; ?></td>
                                                            <td><?= $rows->symbol; ?></td>
                                                            <td><?= $rows->address1. ' ' .$rows->address2
                                                                    . ' ' .$rows->address3. ' ' .$rows->address4. ' ' .$rows->address5; ?></td>
                                                            <td><?= $rows->tel1. ' ' .$rows->tel2. ' ' .$rows->tel3; ?> </td>
                                                            <td><?= $rows->fax; ?> </td>
                                                            <td><?= $rows->email; ?> </td>
                                                            <td><?= $rows->website; ?> </td>
                                                            <td><?= $rows->contactperson; ?> </td>
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
