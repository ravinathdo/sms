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
                        <h1 class="page-header">All Bank Branches</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-8">
                      <!-- /.panel -->
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          <i class="fa fa-clock-o fa-fw"></i>All Bank Branches View
                      </div>
                      <!-- /.panel-heading -->
                      <div class="panel-body">
                          <?php if($this->session->flashdata('success_msg')){ ?>
                             <div class="alert alert-success">
                                  <?=$this->session->flashdata('success_msg');?>
                             </div>
                         <?php } ?>

                          <div class="$BkBrtable-responsive dataTable_wrapper">
                          <table class="table table-striped table-bordered table-hover" id="dataTables">
                          <thead>
                          <tr>
                              <th>#</th>
                              <th>Branch Name</th>
                              <th>Action</th>
                          </tr>
                          </thead>
                          <tbody>

                            <?php
                            if ($AllBkBr != FALSE){
                              foreach ($AllBkBr as $rows) { ?>
                                    <tr>
                                          <td><?=$rows->branchid;?></td>
                                          <td><?=$rows->branchname;?></td>


                                          <td><div class="btn-group">
                                              <a class="btn btn-primary" href="<?=base_url('maineditor/editBankBranch/'.$rows->branchid.'');?>" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                              </div>
                                              <div class="btn-group">
                                                <a class="btn btn-danger del" href="<?=base_url('maineditor/delete/'.$rows->branchid.'');?>" title="Delete">Delete <i class="fa fa-times"></i></a>
                                              </div>
                                         </td>
                                      </tr>

                            <?php  }
                          }
                              ?>
                          </tbody>
                          </table>
                          <a class="btn btn-primary" href="<?=base_url('maineditor/addBankBranch/');?>" title="New Bank Branch">New Bank Branch <i class="fa fa-pencil-square-o"></i></a>

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
