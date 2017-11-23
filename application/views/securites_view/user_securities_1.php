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
                                    <h1 class="page-header">User Securities</h1>
                                </div>
                                <!-- /.col-lg-12 -->
                            </div>
                            <!-- /.row -->
                            <div class="row">
                                <div class="col-lg-12">

                                    <?php


                                    ?>

                                    <!--<div class="table-responsive dataTable_wrapper">-->
                                    <table class="table table-striped table-bordered table-hover" id="dataTables">
                                        <thead>
                                            <tr>
                                                <th>Effect Date</th>
                                                <th>CDS Acc</th>
                                                <th>qty</th>
                                                <th>Amount</th>
                                                <th>Total</th>
                                                <th></th>
                                                <th>Net Amount</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if ($userSecList != FALSE) {
                                                foreach ($userSecList as $rows) {
                                                    ?>
                                                    <tr>
                                                        <td><?= $rows->effectdate; ?></td>
                                                        <td><?= $rows->cdsaccno; ?></td>
                                                        <td><?= $rows->qty; ?></td>
                                                        <td><?= $rows->amount; ?></td>
                                                        <td><?= $rows->total; ?></td>
                                                        <td>
                                                            <table border="1">
                                                                        <thead>
                                                                            <tr>
                                                                                <th></th>
                                                                                <th>Brrokerage Fee</th>
                                                                                <th>CSE Fee</th>
                                                                                <th>CDS Fee</th>
                                                                                <th>SEC Cess</th>
                                                                                <th>SLT</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>Upto 1-Million</td>
                                                                                <td><?= $rows->UPTO_1 ?></td>
                                                                                <td><?= $rows->UPTO_2 ?></td>
                                                                                <td><?= $rows->UPTO_3 ?></td>
                                                                                <td><?= $rows->UPTO_4 ?></td>
                                                                                <td><?= $rows->UPTO_5 ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Over 1-Million</td>
                                                                                <td><?= $rows->OVER_1 ?></td>
                                                                                <td><?= $rows->OVER_2 ?></td>
                                                                                <td><?= $rows->OVER_3 ?></td>
                                                                                <td><?= $rows->OVER_4 ?></td>
                                                                                <td><?= $rows->OVER_5 ?></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>

                                                        </td>
                                                        <td><?= $rows->netamount; ?></td>
                                                        <td><?php if($rows->status == 'BOUGHT'){ ?>
                                                            <a href="<?php echo site_url('Securities_Controller/loadGelUserSecurity/'.$rows->id)?> "> SELL </a>
                                                                 <?php } ?></td>
                                                    </tr>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    <!--</div>-->


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
