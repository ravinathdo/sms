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
                                    <h1 class="page-header">User Portfolio</h1>
                                </div>
                                <!-- /.col-lg-12 -->
                            </div>
                            <!-- /.row -->
                            <div class="row">



                                <div class="col-lg-6">
                                    <table class="table">

                                        <thead>
                                            <tr>
                                                <th>Company</th>
                                                <th>Total Amount</th>
                                                <th>Qty</th>
                                                <th>Avg</th>
                                                <th></th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <?php
                                            if ($userSecList != FALSE) {
                                                foreach ($userSecList as $rows) {
                                                    ?>
                                                    <tr>
                                                        <td><?= $rows->com_name; ?></td>
                                                        <td><?= $rows->sumnetamount; ?></td>
                                                        <td><?= $rows->qty; ?></td>
                                                        <td><?php
                                                       $sumnetamount = $rows->sumnetamount;
                                                       $qty =  $rows->qty;
                                                      echo  $sumnetamount / $qty;
                                                       ?></td>
                                                        <td><a href="<?php echo base_url('Securities_Controller/getPortfolioBrokers/' . $rows->comid); ?>">View Brokers</a></td>
                                                    </tr>

                                                    <?php
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>



                                </div>
                                <div class="col-lg-6">
                                    <table class="table">

                                        <thead>
                                            <tr>
                                                <th>Broker</th>
                                                <th>Qty</th>
                                                <th>Amount</th>
                                                <th>CDS</th>
                                                <th>Total Amount</th>
                                            </tr>
                                        </thead>

                                        <?php if (isset($brokerDetailsList)) { ?>

                                            <tbody>
                                                <?php
                                                if ($brokerDetailsList != FALSE) {
                                                    foreach ($brokerDetailsList as $rows) {
                                                        ?>
                                                        <tr>
                                                            <td><?= $rows->name; ?></td>
                                                            <td><?= $rows->qty; ?></td>
                                                            <td>Rs.<?= $rows->amount; ?></td>
                                                            <td><?= $rows->cdsaccno; ?></td>
                                                            <td><?= $rows->netamount; ?></td>
                                                        </tr>

                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </tbody>


                                        <?php }
                                        ?>

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
