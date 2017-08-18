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
                        <h1 class="page-header">Director List </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-8">
                      <!-- /.panel -->
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          <i class="fa fa-clock-o fa-fw"></i> Select Directors
                      </div>
                      <!-- /.panel-heading -->
                      <div class="panel-body">

                        <ul class="nav nav-pills">
                              <li ><a aria-expanded="true" href="<?=base_url('company/directors/'.$companyid.'/list');?>">List</a>
                              </li>
                              <li class="active"><a aria-expanded="false" href="#add-pills" data-toggle="tab">Add</a>
                              </li>
                          </ul>

                          <div class="tab-content">
                                <!--add-->
                                <div class="tab-pane fade in active" id="add-pills">
                                    <h4>Assign a director</h4>
                                    <?=validation_errors();?>
                                    <form class="" action="" method="post">

                                      <div class="form-group">
                                        <label>Director's Name</label>
                                        <div class="">
                                          <select class="form-control" name="dirid">
                                            <option value="">Select</option>
                                            <?php foreach ($directors as $dir){ ?>
                                          <!--  <option value="<?=$dir->dirid;?>"  <?=set_select('dirid',$dir->dirid ); ?>><?=$dir->title." ".$dir->fname." ".$dir->mname." ".$dir->lname;?></option>-->
                                            <option value="<?=$dir->dirid;?>"  <?=set_select('dirid',$dir->dirid ); ?>><?=$dir->prefix." ".$dir->fname." ".$dir->mname." ".$dir->lname;?></option>
                                              <?php  } ?>
                                          </select>
                                        </div>
                                      </div>

                                  <!--  <div class="form-group">
                                          <label>Designation</label>
                                          <input name="designation" type="text" class="form-control" value="<?=set_value('designation')?>" >
                                      </div> -->

                                      <div class="form-group">
                                        <label>Director's Designation</label>
                                        <div class="">
                                          <select class="form-control" name="designation">
                                            <option value="">Select</option>
                                            <?php foreach ($desigtype as $desig){ ?>
                                            <option value="<?=$desig->dirdesigid;?>"  <?=set_select('designation',$desig->dirdesigid, $desig->dirdesigid == $directors->dirdesigid ? TRUE : FALSE  ); ?>><?=$bro->name;?></option>
                                              <?php  } ?>
                                          </select>
                                        </div>
                                      </div>

                                      <div class="form-group">
                                          <label>Appointed Date </label>
                                          <div class='input-group date datepick' > <!--datepicker-->
                                              <input type='text' name="appointeddate" class="form-control " value="<?=set_value('appointeddate');?>" />
                                              <span class="input-group-addon">
                                                  <span class="glyphicon glyphicon-calendar"></span>
                                              </span>
                                          </div>
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
