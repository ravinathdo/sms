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
                                    <h1 class="page-header">Deposit</h1>
                                </div>
                                <!-- /.col-lg-12 -->
                            </div>
                            <!-- /.row -->
                            <div class="row">
                                <div class="col-lg-6">


                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-4 control-label">Company</label>
                                            <div class="col-sm-8">
                                                <select name="comid"  class="form-control" >
                                                    <option  value="" >--select--</option>
                                                    <?php foreach ($companyList as $row) { ?>
                                                        <option  value="<?= $row->comid; ?>"><?= $row->com_name; ?></option>
                                                    <?php }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-4 control-label">Amount</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="inputPassword3" placeholder="Amount">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-primary">Deposit</button>
                                            </div>
                                        </div>
                                    </form>


                                </div>
                                <div class="col-lg-6">
                                    6
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">

                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Company</th>
                                                <th>Balance</th>
                                                <th>Update Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if ($compFundList != FALSE) {
                                                foreach ($compFundList as $rows) {
                                                    ?>
                                                    <tr>
                                                        <td><?= $rows->com_name; ?></td>
                                                        <td><?= $rows->balance; ?></td>
                                                        <td><?= $rows->lastupdated; ?></td>
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

                    </html>
