<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SecuritiesLK</title>
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
                        <h1 class="page-header">User Requset Form</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-6">
                       <div class="panel panel-default">
                            <div class="panel-heading">
                                User Requset Form
                            </div>
                            <div class="panel-body">
                              <form class="" action="" method="post">
                                <?php echo validation_errors();?>

                                <div class="form-group">
                                    <label>eMail Address</label>
                                    <input name="email" type="text" class="form-control" value="<?=set_value('email', $userreq->email)?>" >
                                </div>

                                <div class="form-group">
                                    <label>First Name</label>
                                    <input name="fname" type="text" class="form-control" value="<?=set_value('fname', $userreq->fname)?>" >
                                </div>

                                <div class="form-group">
                                    <label>Middle Name</label>
                                    <input name="mname" type="text" class="form-control" value="<?=set_value('mname', $userreq->mname)?>" >
                                </div>

                                <div class="form-group">
                                    <label>Last Name</label>
                                    <div class="">
                                      <input name="lname" type="text" class="form-control" value="<?=set_value('lname', $userreq->lname);?>" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Mobile</label>
                                    <input name="mobile" type="text" class="form-control" value="<?=set_value('mobile', $userreq->mobile)?>" >
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input name="mobile" type="password" class="form-control" value="<?=set_value('mobile', $userreq->mobile)?>" >
                                </div>


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

      <?php // $this->load->view('basejs');?>
</body>

</html>
