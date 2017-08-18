<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Transaction Cost</title>
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
                        <h1 class="page-header">Edit Transaction Cost</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-6">
                       <div class="panel panel-default">
                            <div class="panel-heading">
                                Transaction Cost Edit
                            </div>
                            <div class="panel-body">
                              <form class="" action="" method="post">
                                <?php echo validation_errors();?>

                                <div class="form-group">
                                    <label>Transaction Cost Upto Rs. 50 Million </label>
                                    <input name="transcostupto50" type="text" class="form-control" value="<?=set_value('transcostupto50', $allcost->transcostupto50)?>" >
                                </div>
<!--
                                <div class="form-group">
                                    <label>Transaction Cost Over Rs. 50 Million </label>
                                    <input name="transcostover50" type="text" class="form-control" value="<?=set_value('transcostover50', $allcost->transcostover50)?>" >
                                </div>

                                <div class="form-group">
                                    <label>Units Transaction Cost </label>
                                    <input name="units" type="text" class="form-control" value="<?=set_value('units', $allcost->units)?>" >
                                </div>
-->
                                <p>
                                <button type="submit" class="btn btn-primary">Save</button>
                                </p>

                          </form>
                            </div>
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
