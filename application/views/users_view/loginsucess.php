<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Sucess</title>
       <?php $this->load->view('basecss');?>

</head>

<body>

  <div id="wrapper">

  <!-- Navigation -->
  <div>
    <?php $this->load->view('main_header');?>
  </div>
  <!--/Navigation-->

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Login Sucess</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-6">
                       <div class="panel panel-default">
                            <div class="panel-heading">
                                Loged in
                            </div>
                            <div class="panel-body">
                              <form class="" action="" method="post">
                                <?php echo validation_errors();?>
                                <?php echo 'Succefuly login';?>
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
