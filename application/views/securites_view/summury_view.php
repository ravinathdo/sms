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
                                    <h1 class="page-header">Summary list of Bought / Sold / Funds</h1>
                                </div>
                                <!-- /.col-lg-12 -->
                            </div>
                            <!-- /.row -->
                            <div class="row">

                                <div class="col-lg-12">


                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Company</th>
                                                    <th>Description</th>
                                                    <th>Qty</th>
                                                    <th>Trade</th>
                                                    <th>Gross Value</th>
                                                    <th>Tax</th>
                                                    <th>Tax Value</th>
                                                    <th>deposit / (withdraw)</th>
                                                    <th>Buy</th>
                                                    <th>Sell</th>
                                                    <th>Balance</th>
                                                    <th>Cost per share(with tax)</th>
                                                    <th>Profit / (loss) per share</th>
                                                    <th>profit / (loss) amount</th>
                                                    <th>profit / (loss)</th>
                                                    <th>Holding Period (as at today)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if ($userSummaryList != FALSE) {
                                                    foreach ($userSummaryList as $rows) {
                                                        ?>
                                                <tr
                                                            <?php
                                                            if($rows->description == 'BUY'){
                                                              ?> style="color: green"  <?php
                                                            }
                                                            ?>

                                                            >
                                                            <td><?= $rows->effectdate; ?></td>
                                                            <td><?= $rows->com_name; ?></td>
                                                            <td><?= $rows->description; ?></td>
                                                            <td><?= $rows->qty; ?></td>
                                                            <td><?= $rows->trade_price; ?></td>
                                                            <td><?= $rows->gross_value; ?></td>
                                                            <td><?= $rows->tax; ?></td>
                                                            <td><?= $rows->tax_value; ?></td>
                                                            <td><?= $rows->deposit_withdraw; ?></td>
                                                            <td><?= $rows->buy; ?></td>
                                                            <td><?= $rows->sell; ?></td>
                                                            <td><?= $rows->balance; ?></td>
                                                            <td><?= $rows->cost_per_share; ?></td>
                                                            <td><?= $rows->profit_loss_per_share; ?></td>
                                                            <td><?= $rows->profit_loss_amount; ?></td>
                                                            <td><?= $rows->profit_loss; ?></td>
                                                            <td><?= $rows->holding_period; ?></td>
                                                        </tr>
                                                        <?php
                                                    }
                                                }
                                                ?>
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
