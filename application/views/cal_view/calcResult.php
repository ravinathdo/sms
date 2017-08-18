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
                        <h1 class="page-header">P/L Result</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-6">
                       <div class="panel panel-default">
                            <div class="panel-heading">
                                Calulate Result
                            </div>
                            <div class="panel-body">
                              <form class="" action="" method="post">
                                <?php echo validation_errors();?>



                                <?php echo 'Buy '.$buy;?> <br />
                                <?php echo 'Sell '.$sell;?> <br />
                                <?php $num = number_format($result, 2); ?>
                                <?php echo 'Result '.$num;?> <br />




                                <p>
                                <button type="reset" class="btn btn-primary">OK</button>
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
