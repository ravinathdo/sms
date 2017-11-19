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
                </div>
                <!--/Navigation-->

                <!-- Page Content -->
                <div id="page-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="page-header">Sell Securities</h1>
                            </div>
                            <!-- /.col-lg-12 -->
                        </div>
                        <!-- /.row -->
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- /.panel -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <i class="fa fa-clock-o fa-fw"></i> Sell Securities
                                    </div>



                                    <!-- /.panel-heading -->
                                    <div class="panel-body">
                                        <div class="table-responsive dataTable_wrapper">
                                            <table class="table table-striped table-bordered table-hover" id="dataTables">


                                              <div class="row">
                                                  <form class="form-inline" method="post" action="<?php echo site_url('Securities_Controller/listUserCompanySecurity') ?>">
                                                      <div class="col-lg-6">
                                                          <!--company filter-->
                                                          <div class="form-group">
                                                              <?php echo validation_errors(); ?>
                                                              <label for="exampleInputName2">Company Name </label>
                                                              <select name="comid" class="form-control">
                                                                  <!--<option value="">--select--</option>-->
                                                                  <?php
                                                                  if ($userSecComList != FALSE) {
                                                                      foreach ($userSecComList as $rows) {
                                                                          ?>
                                                                          <option value="<?= $rows->comid ?>">  <?= $rows->com_name ?> </option>
                                                                          <?php
                                                                      }
                                                                  }
                                                                  ?>
                                                              </select>
                                                          </div>

                                                          <!--//company filter-->

                                                      </div>
                                                      <div class="col-lg-6">

                                                          <!--CDS acc filter-->
                                                          <div class="form-group">
                                                              <?php echo validation_errors(); ?>
                                                              <label for="exampleInputName2">CDS Account No </label>
                                                              <select name="brokercomid"  class="form-control" >
                                                                  <option  value="" >--select--</option>
                                                                  <?php foreach ($CDSAccList as $row) { ?>
                                                                      <option  value="<?= $row->brokercomid; ?>"><?= $row->name; ?> - <?= $row->cdsaccno; ?></option>
                                                                  <?php }
                                                                  ?>
                                                              </select>
                                                          </div>
                                                          <button type="submit" class="btn btn-success">Filter </button>


                                                      </div>
                                                  </form>
                                              </div>
                                              <!--//CDS acc filter-->


                                              <thead>
                                                  <tr>
                                                      <th>Effect Date</th>
                                                      <th>Company</th>
                                                      <th>CDS Acc</th>
                                                      <th>QTY</th>
                                                      <th>Amount</th>
                                                      <th>Total</th>
                                                      <th>Tax</th>
                                                      <th>Net Amount</th>
                                                      <th></th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <?php
                                                  if ($userSecList != FALSE) {
                                                      foreach ($userSecList as $rows) {
                                                          ?>

                                                          <tr <?php if ($rows->status == 'BOUGHT') { ?>

                                                              <?php } else { ?>
                                                                  style="background-color: #f2dede"

                                                              <?php } ?>  >
                                                              <td><?= $rows->effectdate; ?></td>
                                                              <td>
                                                                  <!-- Button trigger modal -->
                                                                  <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal_<?= $rows->id; ?>">
                                                                      <?= $rows->com_name; ?>
                                                                  </button>

                                                              </td>
                                                              <td><?= $rows->cdsaccno; ?></td>
                                                              <td><?= $rows->qty; ?> / <?= $rows->qty_init; ?></td>
                                                              <td><?= $rows->amount; ?></td>
                                                              <td align = right><?= $rows->total; ?></td>
                                                              <td align = right><?= number_format($rows->netamount - $rows->total, 2); ?>

                                                                  <!-- Modal -->
                                                                  <div class="modal fade" id="myModal_<?= $rows->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                                      <div class="modal-dialog" role="document">
                                                                          <div class="modal-content">
                                                                              <div class="modal-header">
                                                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                                  <h4 class="modal-title" id="myModalLabel">Tax Charges</h4>
                                                                              </div>
                                                                              <div class="modal-body">
                                                                                  <table  class="table table-bordered">
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
                                                                              </div>
                                                                              <div class="modal-footer">
                                                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                              </div>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                  <!-- Modal -->



                                                              </td>
                                                              <td align = right><?= $rows->netamount; ?></td>
                                                              <td><?php if ($rows->status == 'BOUGHT') { ?>
                                                                      <a href="<?php echo site_url('Securities_Controller/loadGetUserSecurity/' . $rows->id) ?> " class="btn btn-primary btn-xs"> SELL NOW </a>
                                                                  <?php } else { ?>
                                                                      <a href="#" class="btn btn-warning btn-xs"> SOLD </a>

                                                                  <?php } ?></td>
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
