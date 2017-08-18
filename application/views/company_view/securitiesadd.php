<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add Securities</title>
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
                        <h1 class="page-header">Securities List</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-8">
                      <!-- /.panel -->
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          <i class="fa fa-clock-o fa-fw"></i>Add Company Securities
                      </div>
                      <!-- /.panel-heading -->
                      <div class="panel-body">

                        <ul class="nav nav-pills">
                              <li ><a aria-expanded="true" href="<?=base_url('company/eqsecurites/'.$companyid.'/list');?>">List</a>
                              </li>
                              <li class="active"><a aria-expanded="false" href="#add-pills" data-toggle="tab">Add</a>
                              </li>
                          </ul>

                          <div class="tab-content">
                                <!--add-->
                                <div class="tab-pane fade in active" id="add-pills">
                                  <p></p>
                                    <?=validation_errors();?>
                                    <form class="" action="" method="post">

                                      <div class="form-group">
                                        <label>Securities Name</label>
                                        <div class="">
                                          <select class="form-control" name="subtypename">
                                            <option value="">Select</option>
                                              <?php foreach ($sectype as $type){ ?>
                                              <option value="<?=$type->subtypeid;?>"
                                                <?=set_select('subtypename',$type->subtypeid, $type->subtypeid == $company->subtypename ? TRUE : FALSE  ); ?>>
                                                <?=$type->subtypename;?></option>
                                                <?php  } ?>
                                          </select>
                                        </div>
                                      </div>


                                      <div class="form-group">
                                          <label>Quantity</label>
                                            <input name="qty" type="text" class="form-control" value="<?=set_value('qty', $eqsecurities->qty);?>" />
                                      </div>


                                      <button type="submit" class="btn btn-primary" data-dismiss="modal">Add</button>
                                    </form>
                                </div>
                                <!--/add-->
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
