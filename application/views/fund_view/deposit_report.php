<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SMS</title>
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
                                    
                                </div>
                                <!-- /.col-lg-12 -->
                            </div>
                            <!-- /.row -->
                            <div class="row" >
                                <div class="col-lg-6">

<?php
if(isset($msg)){
    echo $msg;
}
?>
                                    <button onclick="printDiv('PRNT')"  class="btn btn-warning btn-xs">Print</button>


                                </div>
                                <div class="col-lg-6" >
                                    <table class="table table-bordered">

                                                <tbody>
                                                    <?php
                                                    if ($bokerBalanceList != FALSE) {
                                                        foreach ($bokerBalanceList as $rows) {
                                                            ?>
                                                            <tr>
                                                                <td><?= $rows->name ?></td>
                                                                <td><?= $rows->balance ?></td>
                                                                <td><?= $rows->lastupdated ?></td>
                                                            </tr>
                                                        <?php }
                                                    } ?>
                                                </tbody>

                                            </table>
                                </div>
                            </div>
                            <div class="row" id="PRNT">
                                <div class="col-lg-12">

                                    <center>   <h2 class="page-header">Funds (Deposit/Withdraw)</h2></center>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Company</th>
                                                <th>Deposit</th>
                                                <th>Withdraw</th>
                                                <th>Balance</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if ($compFundList != FALSE) {
                                                foreach ($compFundList as $rows) {
                                                    ?>
                                                    <tr>
                                                        <td><?= $rows->name; ?></td>
                                                        <td><?= $rows->deposit; ?></td>
                                                        <td><?= $rows->withdraw; ?></td>
                                                        <td><?= $rows->balance; ?></td>
                                                        <td><?= $rows->txntime; ?></td>
                                                    </tr>

                                                    <?php
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>


                                </div>
                            </div>
                            <!-- /.container-fluid -->
                        </div>
                        <!-- /#page-wrapper -->

                    </div>
                    <!-- /#wrapper -->

                    <?php $this->load->view('basejs'); ?>
                    </body>



                    <script>
                    $('.datepicker').datepicker({
    format: 'mm/dd/yyyy',
    startDate: '-3d'
});
                    </script>

                    </html>
