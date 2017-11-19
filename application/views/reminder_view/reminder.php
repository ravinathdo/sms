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
                                    <h1 class="page-header">Reminder Management</h1>
                                </div>
                                <!-- /.col-lg-12 -->
                            </div>
                            <!-- /.row -->
                            <div class="row">


                                <?php
                                if (isset($msg)) {
                                    echo $msg;
                                }
                                ?>
                                <div class="col-lg-6">
                                    <?php echo form_open('Reminder_Controller/setReminder', 'class="form-horizontal"'); ?>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">Reminder</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="reminder" class="form-control" id="inputEmail3" placeholder="Reminder">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">Date</label>
                                        <div class="col-sm-8">
                                            <input type="date" name="rdate" class="form-control" id="inputEmail3">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">Time</label>
                                        <div class="col-sm-8">
                                            <input type="Time" name="rtime" class="form-control" id="inputEmail3">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label"></label>
                                        <div class="col-sm-8">
                                            <button type="submit" class="btn btn-primary">Set Reminder</button>
                                        </div>
                                    </div>

                                    <?php echo form_close(); ?>

                                </div>
                                <div class="col-lg-6">

                                </div>


                            </div>
                            <!-- /.container-fluid -->


                            <div class="row">
                                <div class="col-lg-12">
                                    <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Reminder</th>
                                                    <th>Date</th>
                                                    <th>Time</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if ($remindList != FALSE) {
                                                    foreach ($remindList as $rows) {
                                                        ?>
                                                        <tr>
                                                            <td><?= $rows->reminder;?></td>
                                                            <td><?= $rows->rdate;?></td>
                                                            <td><?= $rows->rtime;?></td>
                                                            <td></td>
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
                        <!-- /#page-wrapper -->

                    </div>
                    <!-- /#wrapper -->

                    <?php $this->load->view('basejs'); ?>
                    </body>

                    </html>
