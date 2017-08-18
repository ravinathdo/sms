<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Transaction Cost</title>
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
                        <h1 class="page-header">Transaction Cost</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-8">
                      <!-- /.panel -->
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          <i class="fa fa-clock-o fa-fw"></i> Transaction Cost Upto Rs. 50 Million
                      </div>
                      <!-- /.panel-heading -->
                      <div class="panel-body">
                          <?php if($this->session->flashdata('success_msg')){ ?>
                             <div class="alert alert-success">
                                  <?=$this->session->flashdata('success_msg');?>
                             </div>
                         <?php } ?>
                          <div class="dataTable_wrapper">
                          <table class="table table-striped table-bordered table-hover" id="dataTables">
                          <thead>
                          <tr>
                              <th>#</th>
                              <th>Transaction Name</th>
                              <th>Transaction Cost Upto 50M</th>
                              <th>Action</th>

                          </tr>
                          </thead>
                          <tbody>

                            <?php
                            if ($cost != FALSE){
                              foreach ($cost as $rows) { ?>
                                    <tr>
                                          <td><?=$rows->calid;?></td>
                                          <td><?=$rows->transactionname;?></td>
                                          <td><?=$rows->transcostupto50;?></td>

                                          <td>
                                           <div class="btn-group">
                                              <a class="btn btn-primary" href="<?=base_url('Cost/edit/'.$rows->calid.'');?>" title="Edit">Edit <i class="fa fa-pencil-square-o"></i></a>
                                           </div>
                                          </td>
                                          </tr>
                            <?php  }
                              ?>
                              <?php  }
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

                <!--cost over 50M-->
                <div class="row">
                    <div class="col-lg-8">
                      <!-- /.panel -->
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          <i class="fa fa-clock-o fa-fw"></i> Transaction Cost Over Rs. 50 Million
                      </div>
                      <!-- /.panel-heading -->
                      <div class="panel-body">
                          <?php if($this->session->flashdata('success_msg')){ ?>
                             <div class="alert alert-success">
                                  <?=$this->session->flashdata('success_msg');?>
                             </div>
                         <?php } ?>
                          <div class="dataTable_wrapper">
                          <table class="table table-striped table-bordered table-hover dataTables" id="dataTables2">
                          <thead>
                          <tr>
                              <th>#</th>
                              <th>Transaction Name</th>
                              <th>Transaction Cost Over 50M</th>
                              <th>Action</th>

                          </tr>
                          </thead>
                          <tbody>

                            <?php
                            if ($cost != FALSE){
                              foreach ($cost as $rows) { ?>
                                    <tr>
                                          <td><?=$rows->calid;?></td>
                                          <td><?=$rows->transactionname;?></td>
                                          <td><?=$rows->transcostover50;?></td>


                                          <td>
                                           <div class="btn-group">
                                              <a class="btn btn-primary" href="<?=base_url('Cost/edit/'.$rows->calid.'');?>" title="Edit">Edit <i class="fa fa-pencil-square-o"></i></a>
                                           </div>
                                          </td>
                                          </tr>
                            <?php  }
                              ?>
                              <?php  }
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
                </div> <!--/cost over 50M-->

                <!--Units cost-->
                <div class="row">
                    <div class="col-lg-8">
                      <!-- /.panel -->
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          <i class="fa fa-clock-o fa-fw"></i> Units Transaction Cost
                      </div>
                      <!-- /.panel-heading -->
                      <div class="panel-body">
                          <?php if($this->session->flashdata('success_msg')){ ?>
                             <div class="alert alert-success">
                                  <?=$this->session->flashdata('success_msg');?>
                             </div>
                         <?php } ?>
                          <div class="dataTable_wrapper">
                          <table class="table table-striped table-bordered table-hover dataTables" id="dataTables3">
                          <thead>
                          <tr>
                              <th>#</th>
                              <th>Transaction Name</th>
                              <th>Units Transaction Cost</th>
                              <th>Action</th>

                          </tr>
                          </thead>
                          <tbody>

                            <?php
                            if ($cost != FALSE){
                              foreach ($cost as $rows) { ?>
                                    <tr>
                                          <td><?=$rows->calid;?></td>
                                          <td><?=$rows->transactionname;?></td>
                                          <td><?=$rows->units;?></td>


                                          <td>
                                           <div class="btn-group">
                                              <a class="btn btn-primary" href="<?=base_url('Cost/edit/'.$rows->calid.'');?>" title="Edit">Edit <i class="fa fa-pencil-square-o"></i></a>
                                           </div>
                                          </td>
                                          </tr>
                            <?php  }
                              ?>
                              <?php  }
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
                </div> <!--/Units Cost-->





            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

      <?php $this->load->view('basejs');?>
</body>

</html>
