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
                                    <h1 class="page-header">Stockbroker Additional Details</h1>
                                </div>
                                <!-- /.col-lg-12 -->
                            </div>
                            <!-- /.row -->
                            <div class="row">



                                <div class="col-lg-6">

                                    <?php echo form_open('CDSAccounts/setBrokerAdditional/'); ?>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text"  name="lable" class="form-control" id="exampleInputEmail1" >
                                        <input type="hidden"  name="cdsaccid" value="<?= $cdsaccid ?>" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Value</label>
                                        <input type="text" name="value" class="form-control" id="exampleInputPassword1" placeholder="">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Add Details</button>
                                    <?php echo form_close(); ?>


                                </div>
                                <div class="col-lg-6">
                                    <table class="table table-striped">
                                        <tr>
                                            <th>Name</th>
                                            <th>Value</th>
                                            <th>Remove</th>
                                        </tr>
                                        <?php
                                        if ($detailsList != FALSE) {
                                            foreach ($detailsList as $row) {
                                                ?>
                                                <tr>
                                                    <td><?= $row->lable ?></td>
                                                    <td><?= $row->value ?></td>
                                                    <td><a class="btn btn-warning" href="<?=base_url('CDSAccounts/removeBrokerAdditional/'.$row->id.'/'.$cdsaccid);?>" title="Delete"><i class="fa fa-times"></i></a></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        ?>

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

                    </html>
