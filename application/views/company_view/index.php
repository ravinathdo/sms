<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Company List</title>
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
                        <h1 class="page-header">Company List</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                      <!-- /.panel -->
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          <i class="fa fa-clock-o fa-fw"></i> Companies
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
                              <th>#</th>
                              <th>Symbol</th>
                              <th>Company Name</th>
                              <th>Address</th>
                              <!--<th>Address 2</th>
                              <th>Address 3</th>
                              <th>Address 4</th>-->
                              <th>Telephone</th>
                              <th>Fax</th>
                              <th>Email</th>
                              <th>Website</th>
                              <th>Sector</th>
                              <th>Listed Board</th>
                              <th>Company Secretary</th>
                              <th>Chairman</th>
                              <th>CEO</th>
                              <th>Deputy Chairman</th>
                              <th>Action</th>
                          </tr>
                          </thead>
                          <tbody>

                            <?php

                          //  echo '<div>gggg</div>';


                            if ($com != FALSE){
                              foreach ($com as $rows) {
                                 ?>
                                    <tr>
                                          <td><?=$rows->comid;?></td>
                                          <td>
                                            <a href="<?=base_url('company/info/'.$rows->comid.'');?>"><?=$rows->symbol;?></a>
                                          </td>
                                          <td><?=$rows->com_name;?></td>
                                          <td><?=$rows->address1;?><br />
                                          <?=$rows->address2;?><br />
                                          <?=$rows->address3;?><br />
                                          <?=$rows->address4;?></td>
                                          <td><?=$rows->tel;?></td>
                                          <td><?=$rows->fax;?></td>
                                          <td><?=$rows->email;?></td>
                                          <td><?=$rows->website;?></td>
                                          <td><?=$rows->sec_name;?></td>
                                          <td><?=$rows->boardname;?></td>
                                          <td><?=$rows->secretaryname;?></td>
                                          <td><?=$rows->chairman;?></td>
                                          <td><?=$rows->ceo;?></td>
                                          <td><?=$rows->deputychairman;?></td>


                                          <td><div class="btn-group">
                                                <a class="btn btn-primary" href="<?=base_url('company/edit/'.$rows->comid.'');?>" title="Edit">Edit <i class="fa fa-pencil-square-o"></i></a>
                                              </div>
                                              <div class="btn-group">
                                                <a class="btn btn-primary" href="<?=base_url('company/directors/'.$rows->comid.'');?>" title="Edit">Add/Edit Directors<i class="fa fa-pencil-square-o"></i></a>
                                              </div>
                                              <div class="btn-group">
                                                <a class="btn btn-primary" href="<?=base_url('company/eqsecurities/'.$rows->comid.'');?>" title="Edit">Add/Edit Securities<i class="fa fa-pencil-square-o"></i></a>
                                              </div>
                                              <div class="btn-group">
                                                  <a class="btn btn-primary" href="<?=base_url('company/#/'.$rows->comid.'');?>" title="Edit">Add/Edit Dividend<i class="fa fa-pencil-square-o"></i></a>
                                              </div>
                                              <div class="btn-group">
                                                  <a class="btn btn-primary" href="<?=base_url('company/#/'.$rows->comid.'');?>" title="Edit">Add/Edit Financials<i class="fa fa-pencil-square-o"></i></a>
                                                </div>
                                         </td>
                                      </tr>

                            <?php  }
                          }
                              ?>

                              <?php // echo 'hello'; ?>
                            <!--  <?='hello';?> -->
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
