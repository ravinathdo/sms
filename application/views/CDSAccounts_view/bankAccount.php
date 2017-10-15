<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Company Info</title>
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
                        <h1 class="page-header">Stockbroker Bank Accounts </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-6">
                       <div class="panel panel-default">
                            <div class="panel-heading">
                                Stockbroker Bank Accounts
                            </div>
                            <div class="panel-body">

                              <div class="row">
                                <div class="col-lg-12">
                                  <dl class="dl-horizontal text-left">
                                      <dt>Bank Name</dt>
                                        <dd>: <?php echo $brBkDetail->brokercomid; ?></dd>
                                      <dt>Bank Branch Name</dt>
                                        <dd>: <?php echo $brBkDetail->bankid; ?></dd>
                                      <dt>Account Number</dt>
                                        <dd>: <?php echo $brBkDetail->bankaccno; ?></dd>


                                        <hr />
                                    </dl>

                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="<?=base_url('CDSAccounts/addBankAccount/'.$rows->cdsaccid.'');?>" title="Add Bank Account">Add Bank Account<i class="fa fa-pencil-square-o"></i></a>
                                  </div>


                                </div>

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
