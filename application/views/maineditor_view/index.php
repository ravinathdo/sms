<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Main Editor</title>
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
                        <h1 class="page-header">Main Editor</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-8">
                      <!-- /.panel -->
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          <i class="fa fa-pencil-square-o fa-fw"></i> Main Table Editor (Authorized person only)
                      </div>
                      <!-- /.panel-heading -->

		<!--Editor panel-->
		<div class="container-fluid">
		<!--  <h2>Main Editor</h2> -->
		  <p><strong>Note:</strong> The <strong>Main Editor</strong> shows the main parts in the system. There is place to edit those parts other then here.</p>
		  <div class="panel-group" id="accordion">

			<div class="panel panel-default">
			  <div class="panel-heading">
				<h4 class="panel-title">
				  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Title (Prefix) List</a>
				</h4>
			  </div>
			<!--  <div id="collapse1" class="panel-collapse collapse in"> -->
          <div id="collapse1" class="panel-collapse collapse">
				<div class="panel-body">

				   <!-- Table -->
                  <div class="panel-body">
                          <?php if($this->session->flashdata('success_msg')){ ?>
                             <div class="alert alert-success">
                                  <?=$this->session->flashdata('success_msg');?>
                             </div>
                         <?php } ?>
                          <div class="table-responsive dataTable_wrapper">
                          <table class="table table-striped table-bordered table-hover dataTables">
                          <thead>
                          <tr>
                            <th>#</th>
                            <th>Title (Prefix)</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                          <?php
                          if ($medit != FALSE){
                            foreach ($medit as $rows) { ?>
                                  <tr>
                                        <td><?=$rows->preid;?></td>
                                        <td><?=$rows->prefix;?></td>

                                          <td><div class="btn-group">

                                              <a class="btn btn-primary" href="<?=base_url('maineditor/edit/'.$rows->preid.'');?>" title="Edit">Edit <i class="fa fa-pencil-square-o"></i></a>
                                            </div>
                                            <div class="btn-group">
                                              <a class="btn btn-danger del" href="<?=base_url('maineditor/delete/'.$rows->preid.'');?>" title="Delete">Delete <i class="fa fa-times"></i></a>
                                            </div>
                                         </td>
                                      </tr>

                            <?php  }
                          }
                              ?>
                          </tbody>
                          </table>
                          <p>
                          <a class="btn btn-primary" href="<?=base_url('maineditor/add/');?>" title="Add">Add New<i class="fa fa-pencil-square-o"></i></a>
                        </p>
                          </div>
						                </div>
				<!-- Table end -->

				</div>
			  </div>
			 </div>
      <!--/Prefix-->

      <div class="panel panel-default">
        <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">List of Directors</a>
        </h4>
        </div>
        <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">


                        <div class="table-responsive dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>initial</th>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Last Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                          <?php

                          if ($getdir != FALSE){
                            foreach ($getdir as $rows) {
                               ?>
                                  <tr>
                                        <td><?=$rows->dirid;?></td>
                                        <td><?=$rows->prefix;?></td>
                                        <td><?=$rows->initial;?></td>
                                        <td><?=$rows->fname;?></td>
                                        <td><?=$rows->mname;?></td>
                                        <td><?=$rows->lname;?></td>

                                        <td><div class="btn-group">
                                          <a class="btn btn-primary" href="<?=base_url('maineditor/editdir/'.$rows->dirid.'');?>" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                          <!--<a class="btn btn-primary" href="#add-pills" data-toggle="tab"<?=base_url('company/directors/edit/'.$rows->dirid.'');?>" title="Edit"><i class="fa fa-pencil-square-o"></i></a>-->
                                            </div>

                                        </td>
                                    </tr>

                          <?php  }
                        }
                            ?>

                        </tbody>
                        </table>
                        <p>
                        <a class="btn btn-primary" href="<?=base_url('maineditor/adddir/');?>" title="Add">Add New<i class="fa fa-pencil-square-o"></i></a>
                      </p>
                        </div>
        </div>
        </div>
      </div>
      <!--/Directors List-->

			<div class="panel panel-default">
			  <div class="panel-heading">
				<h4 class="panel-title">
				  <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Director's Designation List</a>
				</h4>
			  </div>
			  <div id="collapse3" class="panel-collapse collapse">
				<div class="panel-body">

          <!-- Table -->
                 <div class="panel-body">
                         <?php if($this->session->flashdata('success_msg')){ ?>
                            <div class="alert alert-success">
                                 <?=$this->session->flashdata('success_msg');?>
                            </div>
                        <?php } ?>
                         <div class="table-responsive dataTable_wrapper">
                         <table class="table table-striped table-bordered table-hover dataTables">
                         <thead>
                         <tr>
                           <th>#</th>
                           <th>Title (Prefix)</th>
                           <th>Action</th>
                       </tr>
                       </thead>
                       <tbody>

                         <?php
                         if ($dirdesig != FALSE){
                           foreach ($dirdesig as $rows) { ?>
                                 <tr>
                                       <td><?=$rows->dirdesigid;?></td>
                                       <td><?=$rows->dirdesignation;?></td>

                                         <td><div class="btn-group">

                                             <a class="btn btn-primary" href="<?=base_url('maineditor/editDesignation/'.$rows->dirdesigid.'');?>" title="Edit">Edit <i class="fa fa-pencil-square-o"></i></a>
                                           </div>
                                           <div class="btn-group">
                                             <a class="btn btn-danger del" href="<?=base_url('maineditor/delete/'.$rows->dirdesigid.'');?>" title="Delete">Delete <i class="fa fa-times"></i></a>
                                           </div>
                                        </td>
                                     </tr>

                           <?php  }
                         }
                             ?>
                         </tbody>
                         </table>
                         <div><p>
                         <a class="btn btn-primary" href="<?=base_url('maineditor/addDesig/');?>" title="Add">Add New<i class="fa fa-pencil-square-o"></i></a>
                         <!--<a class="btn btn-primary" href="<?=base_url('maineditor/addDesig/'.$rows->dirdesigid.'');?>" title="Add">Add New<i class="fa fa-pencil-square-o"></i></a>-->
                       </p></div>
                         </div>
                        </div>
       <!-- Table end -->

				</div>
			  </div>
			</div>
      <!--/Designation-->

      <!--Sector-->
			<div class="panel panel-default">
			  <div class="panel-heading">
				<h4 class="panel-title">
				  <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Company Sector List</a>
				</h4>
			  </div>
			  <div id="collapse4" class="panel-collapse collapse">
				<div class="panel-body">

          <!-- Table -->
                 <div class="panel-body">
                         <?php if($this->session->flashdata('success_msg')){ ?>
                            <div class="alert alert-success">
                                 <?=$this->session->flashdata('success_msg');?>
                            </div>
                        <?php } ?>
                         <div class="table-responsive dataTable_wrapper">
                         <table class="table table-striped table-bordered table-hover dataTables">
                         <thead>
                         <tr>
                           <th>#</th>
                           <th>Company Sector</th>
                           <th>Action</th>
                       </tr>
                       </thead>
                       <tbody>

                         <?php
                         if ($comsec != FALSE){
                           foreach ($comsec as $rows) { ?>
                                 <tr>
                                       <td><?=$rows->sectorid;?></td>
                                       <td><?=$rows->sec_name;?></td>

                                         <td><div class="btn-group">

                                             <a class="btn btn-primary" href="<?=base_url('maineditor/editSectors/'.$rows->sectorid.'');?>" title="Edit">Edit <i class="fa fa-pencil-square-o"></i></a>
                                           </div>
                                           <div class="btn-group">
                                             <a class="btn btn-danger del" href="<?=base_url('maineditor/delete/'.$rows->sectorid.'');?>" title="Delete">Delete <i class="fa fa-times"></i></a>
                                           </div>
                                        </td>
                                     </tr>

                           <?php  }
                         }
                             ?>
                         </tbody>
                         </table>
                         <p>
                         <a class="btn btn-primary" href="<?=base_url('maineditor/addSectors/');?>" title="Add">Add New<i class="fa fa-pencil-square-o"></i></a>
                       </p>
                         </div>
                        </div>
       <!-- Table end -->

        </div>
			  </div>
			</div>
      <!--/Sector-->

      <!--Secretary-->
      <div class="panel panel-default">
        <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Company Secretary List</a>
        </h4>
        </div>
        <div id="collapse5" class="panel-collapse collapse">
        <div class="panel-body">

          <!-- Table -->
                 <div class="panel-body">
                         <?php if($this->session->flashdata('success_msg')){ ?>
                            <div class="alert alert-success">
                                 <?=$this->session->flashdata('success_msg');?>
                            </div>
                        <?php } ?>
                         <div class="table-responsive dataTable_wrapper">
                         <table class="table table-striped table-bordered table-hover dataTables">
                         <thead>
                         <tr>
                           <th>#</th>
                           <th>Secretary Name</th>
                           <th>Address</th>
                           <th>Telephone 1</th>
                           <th>Telephone 2</th>
                           <th>Fax</th>
                           <th>Email</th>
                           <th>Contact Person</th>

                           <th>Action</th>
                       </tr>
                       </thead>
                       <tbody>

                         <?php
                         if ($comsecre != FALSE){
                           foreach ($comsecre as $rows) { ?>
                                 <tr>
                                       <td><?=$rows->secid;?></td>
                                       <td><?=$rows->secretaryname;?></td>
                                       <td><?=$rows->address;?></td>
                                       <td><?=$rows->tel1;?></td>
                                       <td><?=$rows->tel2;?></td>
                                       <td><?=$rows->fax;?></td>
                                       <td><?=$rows->email;?></td>
                                       <td><?=$rows->contactperson;?></td>

                                         <td><div class="btn-group">

                                             <a class="btn btn-primary" href="<?=base_url('maineditor/editSecretary/'.$rows->secid.'');?>" title="Edit">Edit <i class="fa fa-pencil-square-o"></i></a>
                                           </div>
                                           <div class="btn-group">
                                             <a class="btn btn-danger del" href="<?=base_url('maineditor/delete/'.$rows->secid.'');?>" title="Delete">Delete <i class="fa fa-times"></i></a>
                                           </div>
                                        </td>
                                     </tr>

                           <?php  }
                         }
                             ?>
                         </tbody>
                         </table>
                         <p>
                         <a class="btn btn-primary" href="<?=base_url('maineditor/addSecretary/');?>" title="Add">Add New<i class="fa fa-pencil-square-o"></i></a>
                       </p>
                         </div>
                        </div>
       <!-- Table end -->

        </div>
        </div>
      </div>
      <!--/Secretary-->

			<div class="panel panel-default">
			  <div class="panel-heading">
				<h4 class="panel-title">
				  <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">Broker Company Type List</a>
				</h4>
			  </div>
			  <div id="collapse6" class="panel-collapse collapse">
				<div class="panel-body">

          <!-- Table -->
                 <div class="panel-body">
                         <?php if($this->session->flashdata('success_msg')){ ?>
                            <div class="alert alert-success">
                                 <?=$this->session->flashdata('success_msg');?>
                            </div>
                        <?php } ?>
                         <div class="table-responsive dataTable_wrapper">
                         <table class="table table-striped table-bordered table-hover dataTables">
                         <thead>
                         <tr>
                           <th>#</th>
                           <th>Broker Company Type</th>
                           <th>Action</th>
                       </tr>
                       </thead>
                       <tbody>

                         <?php
                         if ($brotype != FALSE){
                           foreach ($brotype as $rows) { ?>
                                 <tr>
                                       <td><?=$rows->brocomtypeid;?></td>
                                       <td><?=$rows->type;?></td>

                                         <td><div class="btn-group">

                                             <a class="btn btn-primary" href="<?=base_url('maineditor/editBrokerComType/'.$rows->brocomtypeid.'');?>" title="Edit">Edit <i class="fa fa-pencil-square-o"></i></a>
                                           </div>
                                           <div class="btn-group">
                                             <a class="btn btn-danger del" href="<?=base_url('maineditor/delete/'.$rows->brocomtypeid.'');?>" title="Delete">Delete <i class="fa fa-times"></i></a>
                                           </div>
                                        </td>
                                     </tr>

                           <?php  }
                         }
                             ?>
                         </tbody>
                         </table>
                         <p>
                         <a class="btn btn-primary" href="<?=base_url('maineditor/addBrokerComType/');?>" title="Add">Add New<i class="fa fa-pencil-square-o"></i></a>
                       </p>
                         </div>
                        </div>
       <!-- Table end -->


        </div>
			  </div>
			</div>
      <!--/Broker Company Type-->

			<div class="panel panel-default">
			  <div class="panel-heading">
				<h4 class="panel-title">
				  <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">Banks & Bank Branches </a>
				</h4>
			  </div>
			  <div id="collapse7" class="panel-collapse collapse">
				<div class="panel-body">

          <!-- Table -->
                 <div class="panel-body">
                         <?php if($this->session->flashdata('success_msg')){ ?>
                            <div class="alert alert-success">
                                 <?=$this->session->flashdata('success_msg');?>
                            </div>
                        <?php } ?>
                         <div class="table-responsive dataTable_wrapper">
                         <table class="table table-striped table-bordered table-hover dataTables">
                         <thead>
                         <tr>
                           <th>#</th>
                           <th>Bank Name</th>
                           <th>Bank Code</th>
                           <th>Action</th>
                       </tr>
                       </thead>
                       <tbody>

                         <?php
                         if ($banks != FALSE){
                           foreach ($banks as $rows) { ?>
                                 <tr>
                                       <td><?=$rows->bankid;?></td>
                                      <!--  <td><?=$rows->bankname;?></td> -->
                                        <td>
                                          <a href="<?=base_url('maineditor/BkBranch/'.$rows->bankid.'');?>"><?=$rows->bankname;?></a>
                                        </td>
                                       <td><?=$rows->bankcode;?></td>

                                         <td><div class="btn-group">

                                             <a class="btn btn-primary" href="<?=base_url('maineditor/editBanks/'.$rows->bankid.'');?>" title="Edit">Edit <i class="fa fa-pencil-square-o"></i></a>
                                           </div>
                                           <div class="btn-group">
                                             <a class="btn btn-danger del" href="<?=base_url('maineditor/delete/'.$rows->bankid.'');?>" title="Delete">Delete <i class="fa fa-times"></i></a>
                                           </div>
                                        </td>
                                     </tr>

                           <?php  }
                         }
                             ?>
                         </tbody>
                         </table>
                         <p>
                         <a class="btn btn-primary" href="<?=base_url('maineditor/addBanks/');?>" title="Add a Bank">Add New Bank <i class="fa fa-pencil-square-o"></i></a>

                       <a class="btn btn-primary" href="<?=base_url('maineditor/BankBranches/');?>" title="View Bank Branch">View Bank Branches <i class="fa fa-pencil-square-o"></i></a>
                     </p>
                         </div>
                        </div>
       <!-- Table end -->


        </div>
			  </div>
			</div>
      <!--/Bank Acc Type-->

		  </div>
		</div> <!--/editor panel-->


                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
  </div>
    <!-- /#wrapper -->


      <?php $this->load->view('basejs');?>
</body>

</html>
