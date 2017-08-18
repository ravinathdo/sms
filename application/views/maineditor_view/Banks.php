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
                        <h1 class="page-header">Banks</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-6">
                       <div class="panel panel-default">
                            <div class="panel-heading">
                                Add/Edit Banks
                            </div>
                            <div class="panel-body">
                              <form class="" action="" method="post">
                                <?php echo validation_errors();?>



                                <div class="form-group">
                                    <label>Bank Name</label>
                                      <input name="bankname" type="text" class="form-control" value="<?=set_value('bankname', $BanksType->bankname);?>" />
                                </div>

                                <div class="form-group">
                                    <label>Bank Code</label>
                                      <input name="bankcode" type="text" class="form-control" value="<?=set_value('bankcode', $BanksType->bankcode);?>" />
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
