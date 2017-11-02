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
                                                <th>company</th>
                                                <th>Total Amount</th>
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
                            <td><a href="<?php echo base_url('Securities_Controller/getPortfolioBrokers/'.$rows->comid);?><?= $rows->comid; ?>">View Brokers</a></td>
                        </tr>

                    <?php
                    }
                }
                ?>
        </tbody>
                                        </table>



                                    </div>
                                    <div class="col-lg-6">
                                        6
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
