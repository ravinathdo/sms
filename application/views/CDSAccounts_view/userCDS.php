<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>
       <?php $this->load->view('basecss');?>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <div>
          <?php $this->load->view('main_header');?>
        <div>
        <!--/Navigation-->

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">CDS Accounts</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-10">
                      <!-- /.panel -->
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          <i class="fa fa-clock-o fa-fw"></i> CDS Accounts
                      </div>
                      <!-- /.panel-heading -->
                      <div class="panel-body">
                          <?php if($this->session->flashdata('success_msg')){ ?>
                             <div class="alert alert-success">
                                  <?=$this->session->flashdata('success_msg');?>
                             </div>
                         <?php } ?>
                          <div class="table-responsive dataTable_wrapper">
                          <table class="table table-striped table-bordered table-hover" id="dataTables">
                          <thead>
                          <tr>
                              <!-- <th>#</th> -->
                              <th>Broker Company Name</th>
                              <th>CDS Account No </th>
                              <th>Adviser Name</th>
                              <th>Open Date </th>

                              <th>Action</th>
                          </tr>
                          </thead>
                          <tbody>

                            <?php
                            if ($cdsAccList != FALSE){
                              foreach ($cdsAccList as $rows) { ?>
                                    <tr>
                                          <!-- <td><?=$rows->cdsaccid;?></td> -->
                                          <td><?=$rows->name;?></td>
                                          <td><?=$rows->cdsaccno;?></td>
                                          <td><?=$rows->adviserfname;?></td>
                                          <td><?=$rows->opendate;?><br/>
                                          <td><div class="btn-group">
                                              <a class="btn btn-primary" href="<?=base_url('CDSAccounts/edit/'.$rows->cdsaccid.'');?>" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                              <a class="btn btn-warning" href="<?=base_url('CDSAccounts/showBrokerAdditional/'.$rows->cdsaccid.'');?>" title="Detail"><i class="fa fa-pencil-square-o"></i></a>
                                              <a class="btn btn-primary" href="<?=base_url('CDSAccounts/bankAccount/'.$rows->cdsaccid.'');?>" title="Bank Detail"><i class="fa fa-pencil-square-o"></i></a>
                                              </div>
                                         </td>
                                      </tr>

                            <?php  }
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

      <?php $this->load->view('basejs');?>
</body>

</html>
