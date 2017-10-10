<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Director List</title>
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
                        <h1 class="page-header">Director List</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                      <!-- /.panel -->
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          <i class="fa fa-clock-o fa-fw"></i>Company Directors
                      </div>
                      <!-- /.panel-heading -->
                      <div class="panel-body">

                        <ul class="nav nav-pills">
                              <li  class="active"><a aria-expanded="true" href="#list-pills" data-toggle="tab">List</a>
                              </li>
                              <li><a aria-expanded="false" href="<?=base_url('company/directors/'.$companyid.'/add');?>" >Add</a>
                              </li>
                          </ul>

                          <div class="tab-content">
                                <div class="tab-pane fade active in" id="list-pills">
                                    <h4>Directors List</h4>
                                    <?php
                                    if($this->session->flashdata('status')){
                                      	echo $this->session->flashdata('status');
                                      }
                                      ?>
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
                                        <!--<th>Company ID</th> -->
                                        <th>Name of the Director</th>
                                        <!--<th>initial</th>
                                        <th>First Name</th>
                                        <th>Middle Name</th>
                                        <th>Last Name</th> -->
                                        <th>Designation</th>
                                        <th>Apppinted Date</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                      <?php

                                    //  echo '<div>gggg</div>';


                                      if ($directors_list != FALSE){
                                        foreach ($directors_list as $rows) {
                                           ?>
                                              <tr>
                                                    <td><?=$rows->dirid;?></td>
                                                  <!--  <td><?=$rows->comid;?></td> -->
                                                    <td><?=$rows->fullname;?></td>
                                                    <td><?=$rows->dirdesignation;?></td>
                                                    <td><?=$rows->appointeddate;?></td>

                                                    <td><div class="btn-group">
                                                      <a class="btn btn-danger del" href="<?=base_url('company/delete/'.$rows->comid.'/'.$rows->boardofdirid.'');?>" title="Remove"><i class="fa fa-times"></i></a>
                                                      <!--<a class="btn btn-primary" href="<?=base_url('maineditor/edit/'.$rows->preid.'');?>" title="Edit">Edit <i class="fa fa-pencil-square-o"></i></a>-->

                                                      <!--<a class="btn btn-primary" href="#add-pills" data-toggle="tab"<?=base_url('company/directors/edit/'.$rows->dirid.'');?>" title="Edit"><i class="fa fa-pencil-square-o"></i></a>-->
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

                          </div>


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
