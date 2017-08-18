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
                        <h1 class="page-header"> <?php echo $bkname->bankname; ?> Branches</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-10">
                      <!-- /.panel -->
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          <i class="fa fa-clock-o fa-fw"></i> Bank Branches View
                      </div>
                      <!-- /.panel-heading -->
                      <div class="panel-body">
                          <?php if($this->session->flashdata('success_msg')){ ?>
                             <div class="alert alert-success">
                                  <?=$this->session->flashdata('success_msg');?>
                             </div>
                         <?php } ?>

                         <!--
                         <p> name of the bank</p>
                         <p> <?php echo $bkname->bankname; ?> </P>
                        -->


                          <div class="$BkBrtable-responsive dataTable_wrapper">
                          <table class="table table-striped table-bordered table-hover" id="dataTables">
                          <thead>
                          <tr>
                              <th>#</th>
                              <th>Branch Name</th>
                              <th>Branch Code</th>
                              <th>Grade</th>
                              <th>Address</th>
                              <th>Telephone</th>

                              <th>Action</th>
                          </tr>
                          </thead>
                          <tbody>

                            <?php
                          //  var_dump($BkBr);
                            if ($BkBr != FALSE){
                              foreach ($BkBr as $rows) { ?>
                                    <tr>
                                          <td><?=$rows->codeid;?></td>
                                          <td><?=$rows->branchname;?></td>
                                          <td><?=$rows->branchcode;?></td>
                                          <td><?=$rows->grade;?></td>
                                          <td><?=$rows->address;?></td>
                                          <td><?=$rows->tel1;?><br/>

                                          <td><div class="btn-group">
                                            <!--
                                            <a class="btn btn-primary" href="<?=base_url('maineditor/editBankBranch/'.$rows->branchid.'');?>" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                            -->
                                              </div>
                                         </td>
                                      </tr>

                            <?php  }
                          }
                              ?>
                          </tbody>
                          </table>
                          <a class="btn btn-primary" href="<?=base_url('maineditor/BankGrade/');?>" title="Bank's Grade">View Bank Grade List</a>
                          <p>To assign a barnk-branch and details to a bank
                          <a class="btn btn-primary" href="<?=base_url('maineditor/assignBankBranch/'.$bkname->bankid.'');?>" title="Assign">Assign a Branch</a>
                          </p>
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
