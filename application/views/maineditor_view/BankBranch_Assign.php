<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Assign Bank Branch</title>
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
                        <h1 class="page-header">Assign Bank Branch</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-6">
                       <div class="panel panel-default">
                            <div class="panel-heading">
                                Assign a Bank Branch to a Bank
                            </div>
                            <div class="panel-body">
                              <form class="" action="" method="post">
                                <?php echo validation_errors();?>

                              <!--  <div class="form-group">
                                    <label>Title (Prefix)</label>
                                      <input name="title" type="text" class="form-control" value="<?=set_value('title', $prefix->title);?>" />
                                </div> -->

                                <div class="form-group">
                                  <label>Branch Name</label>
                                  <div class="">
                                    <select class="form-control" name="title">
                                      <option value="">Select</option>
                                      <?php foreach ($title as $pre){ ?>
                                      <option value="<?=$pre->preid;?>"
                                        <?=set_select('preid',$pre->preid, $pre->preid == $prefix->title ? TRUE : FALSE  ); ?>>
                                        <?=$pre->prefix;?></option>
                                        <?php  } ?>
                                    </select>
                                  </div>
                                </div>

                                <div class="form-group">
                                    <label>Branch Code</label>
                                      <input name="branchcode" type="text" class="form-control" value="<?=set_value('branchcode', $BkBranchAssign->branchcode);?>" />
                                </div>

                                <div class="form-group">
                                  <label>Grade</label>
                                  <div class="">
                                    <select class="form-control" name="title">
                                      <option value="">Select</option>
                                      <?php foreach ($title as $pre){ ?>
                                      <option value="<?=$pre->preid;?>"
                                        <?=set_select('preid',$pre->preid, $pre->preid == $prefix->title ? TRUE : FALSE  ); ?>>
                                        <?=$pre->prefix;?></option>
                                        <?php  } ?>
                                    </select>
                                  </div>
                                </div>


                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea name="address" class="form-control"><?=set_value('address', $BkBranchAssign->address);?></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Telephone 1</label>
                                      <input name="tel1" type="text" class="form-control" value="<?=set_value('tel1', $BkBranchAssign->tel1);?>" />
                                </div>

                                <div class="form-group">
                                    <label>Telephone 2</label>
                                      <input name="tel2" type="text" class="form-control" value="<?=set_value('tel2', $BkBranchAssign->tel2);?>" />
                                </div>

                                <p>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </p>

                           </form>
                             </div>
                         </div>

                         <!--end of Adviser add -->

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
