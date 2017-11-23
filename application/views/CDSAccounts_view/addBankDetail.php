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
                                    <h1 class="page-header">Stockbroker Bank Accounts Details</h1>
                                </div>
                                <!-- /.col-lg-12 -->
                            </div>
                            <!-- /.row -->
                            <div class="row">
                                <div class="col-lg-6">

                                  <div class="panel panel-default">
                                       <div class="panel-heading">
                                           Bank Accounts
                                       </div>
                                       <div class="panel-body">
                                         <form class="" action="" method="post">
                                           <?php echo validation_errors();?>
                                             <input type="hidden" name="userid" value="<?php echo $userbean->userid ;?>" />

                                           <div class="form-group">
                                             <label>Bank Name</label>
                                             <div class="">
                                                 <select class="form-control" name="brokercomid" required="">
                                                 <option value="">Select</option>
                                                 <?php foreach ($brokercom as $bro){ ?>
                                                 <option  value="<?=$bro->brokercomid;?>"  <?=set_select('brokercomid',$bro->brokercomid, $bro->brokercomid == $CDSAccounts->brokercomid ? TRUE : FALSE  ); ?>><?=$bro->name;?></option>
                                                   <?php  } ?>
                                               </select>
                                             </div>
                                           </div>


                                           <div class="form-group">
                                             <label>Bank Branch Name</label>
                                             <div class="">
                                                 <select class="form-control" name="brokercomid" required="">
                                                 <option value="">Select</option>
                                                 <?php foreach ($brokercom as $bro){ ?>
                                                 <option  value="<?=$bro->brokercomid;?>"  <?=set_select('brokercomid',$bro->brokercomid, $bro->brokercomid == $CDSAccounts->brokercomid ? TRUE : FALSE  ); ?>><?=$bro->name;?></option>
                                                   <?php  } ?>
                                               </select>
                                             </div>
                                           </div>


                                           <div class="form-group">
                                             <label>Bank Account Number</label>
                                             <div class="">
                                                <input required="" name="bankaccno" type="text" class="form-control" value="<?=set_value('cdsaccno', $CDSAccounts->cdsaccno);?>" />
                                             </div>
                                           </div>


                                        <p>
                                           <button type="submit" class="btn btn-primary">Save</button>
                                       </p>

                                     </form>
                                       </div>
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
