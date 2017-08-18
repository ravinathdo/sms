<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Users</title>
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
                        <h1 class="page-header">List of Users</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                      <!-- /.panel -->
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          <i class="fa fa-clock-o fa-fw"></i> Users List
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
                              <th>eMail</th>
                              <th>Name</th>
                              <th>Mobile</th>
                              <th>Requested Date</th>
                              <th>Statues</th>
                              <th>Approved Date</th>
                              <th>Action</th>
                          </tr>
                          </thead>
                          <tbody>

                            <?php
                            if ($user != FALSE){
                              foreach ($user as $rows) { ?>
                                    <tr>
                                          <td><?=$rows->userid;?></td>
                                          <td><?=$rows->email;?></td>
                                          <td><?=$rows->fname;?> <?=$rows->mname;?> <?=$rows->lname;?></td>
                                          <td><?=$rows->mobile;?></td>
                                          <td><?=$rows->reqdate;?></td>
                                          <td><?=$rows->status;?></td>
                                          <td><?=$rows->approvedate;?></td>
                                          <td>
                                            <div class="btn-group">
                                              <a class="btn btn-primary" href="<?=base_url('Users/edit/'.$rows->userid.'');?>" title="Edit">Edit <i class="fa fa-pencil-square-o"></i></a>
                                           </div>

                                           <div class="btn-group">
                                             <a class="btn btn-primary" href="<?=base_url('Users/approval/'.$rows->userid.'');?>" title="Approval">Approved <i class="fa fa-pencil-square-o"></i></a>
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









            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

      <?php $this->load->view('basejs');?>
</body>

</html>
